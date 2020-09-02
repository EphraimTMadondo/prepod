<?php

defined('BASEPATH') or exit('No direct script access allowed');

$aColumns = [
    'description',
    'date',
    db_prefix().'activity_log.staffid',
    ];

$sWhere = [];
if ($this->ci->input->post('activity_log_date')) {
    array_push($sWhere, 'AND date LIKE "' . $this->ci->db->escape_like_str(to_sql_date($this->ci->input->post('activity_log_date'))) . '%" ESCAPE \'!\'');
}
$companyusername = $_SESSION['current_company'];

 array_push($sWhere, 'AND ('.db_prefix()."activity_log.company_username = '$companyusername')");
$sIndexColumn = 'id';
$sTable       = db_prefix().'activity_log';
$result       = data_tables_init($aColumns, $sIndexColumn, $sTable, [], $sWhere);
$output       = $result['output'];
$rResult      = $result['rResult'];
foreach ($rResult as $aRow) {
    $row = [];
    for ($i = 0; $i < count($aColumns); $i++) {
        $_data = $aRow[$aColumns[$i]];
        if ($aColumns[$i] == 'date') {
            $_data = _dt($_data);
        }
        $row[] = $_data;
    }
    $output['aaData'][] = $row;
}
