<?php

defined('BASEPATH') or exit('No direct script access allowed');

$hasPermissionEdit   = has_permission('tasks', '', 'edit');
$hasPermissionDelete = has_permission('tasks', '', 'delete');
$tasksPriorities     = get_tasks_priorities();

$aColumns = [
    '1', // bulk actions
    db_prefix() . 'tasks.id as id',
    db_prefix() . 'tasks.name as task_name',
    'status',
    'startdate',
    'duedate',
     get_sql_select_task_asignees_full_names() . ' as assignees',
    '(SELECT GROUP_CONCAT(name SEPARATOR ",") FROM ' . db_prefix() . 'taggables JOIN ' . db_prefix() . 'tags ON ' . db_prefix() . 'taggables.tag_id = ' . db_prefix() . 'tags.id WHERE rel_id = ' . db_prefix() . 'tasks.id and rel_type="task" ORDER by tag_order ASC) as tags',
    'priority',
];

$sIndexColumn = 'id';
$sTable       = db_prefix() . 'tasks';

$where = [];
$join  = [];

include_once(APPPATH . 'views/admin/tables/includes/tasks_filter.php');

array_push($where, 'AND CASE WHEN rel_type="project" AND rel_id IN (SELECT project_id FROM ' . db_prefix() . 'project_settings WHERE project_id=rel_id AND name="hide_tasks_on_main_tasks_table" AND value=1) THEN rel_type != "project" ELSE 1=1 END');

$custom_fields = get_table_custom_fields('tasks');

foreach ($custom_fields as $key => $field) {
    $selectAs = (is_cf_date($field) ? 'date_picker_cvalue_' . $key : 'cvalue_' . $key);
    array_push($customFieldsColumns, $selectAs);
    array_push($aColumns, '(SELECT value FROM ' . db_prefix() . 'customfieldsvalues WHERE ' . db_prefix() . 'customfieldsvalues.relid=' . db_prefix() . 'tasks.id AND ' . db_prefix() . 'customfieldsvalues.fieldid=' . $field['id'] . ' AND ' . db_prefix() . 'customfieldsvalues.fieldto="' . $field['fieldto'] . '" LIMIT 1) as ' . $selectAs);
}

$companyusername = $_SESSION['current_company'];
 array_push($where, 'AND ('.db_prefix()."tasks.company_username = '$companyusername')");
 
$aColumns = hooks()->apply_filters('tasks_table_sql_columns', $aColumns);

// Fix for big queries. Some hosting have max_join_limit
if (count($custom_fields) > 4) {
    @$this->ci->db->query('SET SQL_BIG_SELECTS=1');
}

$result = data_tables_init(
    $aColumns,
    $sIndexColumn,
    $sTable,
    $join,
    $where,
    [
        'rel_type',
        'rel_id',
        'recurring',
        tasks_rel_name_select_query() . ' as rel_name',
        'billed',
        '(SELECT staffid FROM ' . db_prefix() . 'task_assigned WHERE taskid=' . db_prefix() . 'tasks.id AND staffid=' . get_staff_user_id() . ') as is_assigned',
        get_sql_select_task_assignees_ids() . ' as assignees_ids',
        '(SELECT MAX(id) FROM ' . db_prefix() . 'taskstimers WHERE task_id=' . db_prefix() . 'tasks.id and staff_id=' . get_staff_user_id() . ' and end_time IS NULL) as not_finished_timer_by_current_staff',
        '(SELECT staffid FROM ' . db_prefix() . 'task_assigned WHERE taskid=' . db_prefix() . 'tasks.id AND staffid=' . get_staff_user_id() . ') as current_user_is_assigned',
        '(SELECT CASE WHEN addedfrom=' . get_staff_user_id() . ' AND is_added_from_contact=0 THEN 1 ELSE 0 END) as current_user_is_creator',
    ]
);

$output  = $result['output'];
$rResult = $result['rResult'];

foreach ($rResult as $aRow) {
    $row = '<li class="todo-item" data-name="' . $aRow['task_name'] . '">
        <div class="todo-title-wrapper d-flex justify-content-sm-between justify-content-end align-items-center">
            <div class="todo-title-area d-flex">
                <i class="bx bx-grid-vertical handle"></i>
                <div class="checkbox">
                    <input type="checkbox" class="checkbox-input" id="checkbox' . $aRow['id'] . '" value="' . $aRow['id'] . '">
                    <label for="checkbox14"></label>
                </div>
                <p class="todo-title mx-50 m-0 truncate">' . $aRow['task_name'] . '</p>
            </div>
            <div class="todo-item-action d-flex align-items-center">';

                // $row .='<div class="todo-badge-wrapper d-flex">
                //     <span class="badge badge-light-primary badge-pill">Frontend</span>
                // </div>
                // <div class="avatar ml-1">
                //     <img src="../../../app-assets/images/portrait/small/avatar-s-3.jpg" alt="avatar" height="30" width="30">
                // </div>';

                if ($aRow['not_finished_timer_by_current_staff']) {
                    $row .= '<a href="#" class="tasks-table-stop-timer ml-75" onclick="timer_action(this,' . $aRow['id'] . ',' . $aRow['not_finished_timer_by_current_staff'] . '); return false;"><i class="bx bx-clock"></i></a>';
                } else {
                    $row .= '<a href="#" class="' . $class . ' tasks-table-start-timer ml-75" onclick="timer_action(this,' . $aRow['id'] . '); return false;"><i class="bx bx-clock"></i></a>';
                   
                }
            
                if ($hasPermissionEdit) {
                    $row .= '<a href="#" class="ml-75" onclick="edit_task(' . $aRow['id'] . '); return false"><i class="bx bx-edit"></i></a>';
                }
            
                if ($hasPermissionDelete) {
                    $row .= '<a href="' . admin_url('tasks/delete_task/' . $aRow['id']) . '" class="text-danger _delete task-delete ml-75"><i class="bx bx-trash"></i></a>';
                }

            $row .= '</div>
        </div>
    </li>';
    $output['aaData'][] = $row;
}



