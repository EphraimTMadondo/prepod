<?php

defined('BASEPATH') or exit('No direct script access allowed');

$aColumns = [
    'sender_name',    
    'subject',
    'date_received',
];

$sIndexColumn = 'id';
$sTable       = db_prefix() . 'mail_inbox';

$join = [];
$where = [];
if($group == 'inbox'){
    array_push($where, ' AND trash = 0');
} else if($group == 'starred'){
    array_push($where, ' AND trash = 0 AND stared = 1');
} else if($group == 'important'){
    array_push($where, ' AND trash = 0 AND important = 1');
} else if($group == 'trash'){
    array_push($where, ' AND trash = 1');
}
array_push($where, ' AND to_staff_id = '.get_staff_user_id());
$result = data_tables_init($aColumns, $sIndexColumn, $sTable, $join, $where, ['id','has_attachment','stared','important','body',db_prefix() . 'mail_inbox.read']);

$output  = $result['output'];
$rResult = $result['rResult'];

foreach ($rResult as $aRow) {
    $starred = "favorite";    
    $important = "";
    if($aRow['stared']==1){
        $starred = "favorite warning";
    }
    if($aRow['important']==1){
        $important = '<span class="bullet bullet-success bullet-sm"></span>';
        
    }

    $has_attachment = "";
    if($aRow['has_attachment']>0){
        $has_attachment = '<i class="bx bx-paperclip mr-50"></i>';
    }
    
    $read = "mail-read";
    if($aRow['read'] == 1){
        $read = "";
    }

    echo '<li class="media"  onclick="location.href="'.admin_url().'mailbox/inbox/'.$aRow['id'].'";">
        <div class="user-action">
            <div class="checkbox-con mr-25">
                <div style="margin-top:-10" class="checkbox checkbox-shadow checkbox-sm">
                    <input type="checkbox" id="checkboxsmall'.$aRow['id'].'">
                    <label for="checkboxsmall'.$aRow['id'].'"></label>
                </div>
            </div>
            <span class="'.$starred.'">
                <i class="bx bxs-star"></i>
            </span>
        </div>
        <div class="pr-50">
            <div class="avatar">
                <span class="badge badge-circle badge-left-primary">EM</span>
            </div>
        </div>
        <div class="media-body">
            <div class="user-details">
                <div class="mail-items">
                    <span class="list-group-item-text text-truncate">'.$aRow['subject'].'</span>
                </div>
                <div class="mail-meta-item">
                    <span class="float-right">
                        <span class="mail-date">'._dt($aRow['date_sent']).'</span>
                    </span>
                </div>
            </div>
            <div class="mail-message">
                <p class="list-group-item-text truncate mb-0">
                '.$aRow['body'].'
                </p>
            </div>
            <div class="mail-meta-item">
                <span class="float-right">
                    '.$important.'
                    '.$has_attachment.'
                </span>
            </div>
        </div>
    </li>';
}