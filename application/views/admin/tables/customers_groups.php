<?php

defined('BASEPATH') or exit('No direct script access allowed');

$aColumns = ['name'];
$where =[];
$companyusername = $_SESSION['current_company'];
 array_push($where, 'AND ('.db_prefix()."customers_groups.company_username = '$companyusername')");
$sIndexColumn = 'id';
$sTable       = db_prefix().'customers_groups';

$result  = data_tables_init($aColumns, $sIndexColumn, $sTable, [], $where, ['id']);
$output  = $result['output'];
$rResult = $result['rResult'];


foreach ($rResult as $aRow) {
    $row = [];
    for ($i = 0 ; $i < count($aColumns) ; $i++) {
        $_data = '<a href="#" data-toggle="modal" data-target="#customer_group_modal" data-id="' . $aRow['id'] . '">' . $aRow[$aColumns[$i]] . '</a>';

        $row[] = $_data;
    }
    $options = icon_btn('#', 'pencil-square-o', 'btn-default', ['data-toggle' => 'modal', 'data-target' => '#customer_group_modal', 'data-id' => $aRow['id']]);
    $row[]   = $options .= icon_btn('clients/delete_group/' . $aRow['id'], 'remove', 'btn-danger _delete');

    $output['aaData'][] = $row;
}
