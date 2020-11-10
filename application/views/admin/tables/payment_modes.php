<?php

defined('BASEPATH') or exit('No direct script access allowed');

$aColumns = [
    'name',
    'description',
    'active',
    ];
$sIndexColumn = 'id';
$sTable       = db_prefix().'payment_modes';
$where = [];
$companyusername = $_SESSION['current_company'];
  array_push($where, 'AND ('.db_prefix()."payment_modes.company_username = '$companyusername'".' OR '.db_prefix()."payment_modes.company_username = '')");

$result = data_tables_init($aColumns, $sIndexColumn, $sTable, [], $where, [
    'id',
    'expenses_only',
    'invoices_only',
    'show_on_pdf',
    'selected_by_default',
    company_username
    ]);
$output  = $result['output'];
$rResult = $result['rResult'];

foreach ($rResult as $aRow) {
    $row = [];
    for ($i = 0; $i < count($aColumns); $i++) {
        $_data = $aRow[$aColumns[$i]];

        if ($aColumns[$i] == 'active') {
            $checked = '';
            if ($aRow['active'] == 1) {
                $checked = 'checked';
            }
            if($aRow['company_username'] == $companyusername)
            {
            $_data = '<div class="onoffswitch">
                <input type="checkbox" data-switch-url="' . admin_url() . 'paymentmodes/change_payment_mode_status" name="onoffswitch" class="onoffswitch-checkbox" id="c_' . $aRow['id'] . '" data-id="' . $aRow['id'] . '" ' . $checked . '>
                <label class="onoffswitch-label" for="c_' . $aRow['id'] . '"></label>
            </div>';
            }
            // For exporting
            $_data .= '<span class="hide">' . ($checked == 'checked' ? _l('is_active_export') : _l('is_not_active_export')) . '</span>';
        } elseif ($aColumns[$i] == 'name') {
            if($aRow['company_username'] == $companyusername)
            {
            $_data = '<a href="#" data-toggle="modal" data-default-selected="' . $aRow['selected_by_default'] . '" data-show-on-pdf="' . $aRow['show_on_pdf'] . '" data-target="#payment_mode_modal" data-expenses-only="' . $aRow['expenses_only'] . '" data-invoices-only="' . $aRow['invoices_only'] . '" data-id="' . $aRow['id'] . '">' . $_data . '</a>';
            }
            else
            {
                $_data = '<a href="#" data-toggle="modal" data-default-selected="' . $aRow['selected_by_default'] . '" data-show-on-pdf="' . $aRow['show_on_pdf'] . '" data-target="" data-expenses-only="' . $aRow['expenses_only'] . '" data-invoices-only="' . $aRow['invoices_only'] . '" data-id="' . $aRow['id'] . '">' . $_data . '</a>';
 
            }
        }

        $row[] = $_data;
    }
    if($aRow['company_username'] == $companyusername)
    {
    $options = icon_btn('#' . $aRow['id'], 'pencil-square-o', 'btn-default', [
        'data-toggle'           => 'modal',
        'data-target'           => '#payment_mode_modal',
        'data-id'               => $aRow['id'],
        'data-expenses-only'    => $aRow['expenses_only'],
        'data-invoices-only'    => $aRow['invoices_only'],
        'data-show-on-pdf'      => $aRow['show_on_pdf'],
        'data-default-selected' => $aRow['selected_by_default'],
        ]);
    }
    else
    {
        $options =[];
    }
     if($aRow['company_username'] == $companyusername)
    {
         $row[] = $options .= icon_btn('paymentmodes/delete/' . $aRow['id'], 'remove', 'btn-danger _delete');
    }
    else
    {
      $row[]   = $options;  
    }
    $output['aaData'][] = $row;
}
