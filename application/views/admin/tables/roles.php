<?php

defined('BASEPATH') or exit('No direct script access allowed');

$where = [];
$companyusername = $_SESSION['current_company'];
  array_push($where, 'AND ('.db_prefix()."roles.company_username = '$companyusername'".' OR '.db_prefix()."roles.company_username = '')");


$aColumns = [
    'name',
    ];

$sIndexColumn = 'roleid';
$sTable       = db_prefix().'roles';

$result  = data_tables_init($aColumns, $sIndexColumn, $sTable, [], $where, ['roleid']);
$output  = $result['output'];
$rResult = $result['rResult'];

foreach ($rResult as $aRow) {
    $row = [];
    for ($i = 0; $i < count($aColumns); $i++) {
        $_data = $aRow[$aColumns[$i]];
        if ($aColumns[$i] == 'name') {

           
            if($aRow['company_username'] == $companyusername)
            {

            $_data            = '<a href="' . admin_url('roles/role/' . $aRow['roleid']) . '" class="mb-1 display-block">' . $_data . '</a>';
            $_data .= '<span class="mtop10 display-block">' . _l('roles_total_users') . ' ' . total_rows(db_prefix().'staff', [
                'role' => $aRow['roleid'],
                ]) . '</span>';
            }
            else
            {
                $_data            = '<a href="'  '" class="mb-1 display-block">' . $_data . '</a>';
                $_data .= '<span class="mtop10 display-block">' . _l('roles_total_users') . ' ' . total_rows(db_prefix().'staff', [
                    'role' => $aRow['roleid'],
                    ]) . '</span>';
            }


        }
        $row[] = $_data;
    }

    $options = icon_btn('roles/role/' . $aRow['roleid'], 'pencil-square-o');
    $row[]   = $options .= icon_btn('roles/delete/' . $aRow['roleid'], 'remove', 'btn-danger _delete');

    $output['aaData'][] = $row;
}
