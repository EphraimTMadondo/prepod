<?php

defined('BASEPATH') or exit('No direct script access allowed');

$aColumns = [
    db_prefix() . 'mail_outbox.to',    
    'subject',    
    'date_sent',    
];

$sIndexColumn = 'id';
$sTable       = db_prefix() . 'mail_outbox';

$join = [];
$where = [];
array_push($where, ' AND trash = 0');
if($group=='draft'){
    array_push($where, ' AND draft = 1');
} else {
    array_push($where, ' AND draft = 0');
}
array_push($where, ' AND sender_staff_id = '.get_staff_user_id());
$result = data_tables_init($aColumns, $sIndexColumn, $sTable, $join, $where, ['id','has_attachment','stared','important','body']);

$output  = $result['output'];
$rResult = $result['rResult'];

foreach ($rResult as $aRow) {
    $row = [];
    $starred = "favorite";    
    $msg_starred = _l('mailbox_add_star');
    $important = "fa-bookmark-o";
    $msg_important = _l('mailbox_mark_as_important');
    if($aRow['stared']==1){
        $starred = "favorite warning";
        $msg_starred = _l('mailbox_remove_star');
    }
    if($aRow['important']==1){
        $important = "fa-bookmark red";
        $msg_important = _l('mailbox_mark_as_not_important');
        
    }
    $has_attachment = "";
    if($aRow['has_attachment']>0){
        $has_attachment = '<i class="fa fa-paperclip pull-right" data-toggle="tooltip" title="'._l('mailbox_file_attachment').'" data-original-title="fa-paperclip"></i>';
    }

    $row[] = '<li class="media mail-read">
        <div class="user-action">
            <div class="checkbox-con mr-25">
                <div class="checkbox checkbox-shadow checkbox-sm">
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
                        <span class="mail-date">4:14 AM</span>
                    </span>
                </div>
            </div>
            <div class="mail-message">
                <p class="list-group-item-text truncate mb-0">
                '.$aRow['body'].'
                </p>
                <div class="mail-meta-item">
                    <span class="float-right">
                        <span class="bullet bullet-success bullet-sm"></span>
                    </span>
                </div>
            </div>
        </div>
    </li>';

    // $row[] = '<div class="checkbox"><input type="checkbox" value="' . $aRow['id'] . '"><label></label></div>                
    //             <a class="btn btnIcon" data-toggle="tooltip" title="" data-original-title="'. _l('mailbox_delete').'" onclick="update_field(\''.$group.'\',\'trash\',1,'.$aRow['id'].');"><i class="fa fa-trash-o"></i></a>';
    

    // $content = '<a href="'.admin_url().'mailbox/outbox/'.$aRow['id'].'">';
    // if($group == 'draft'){
    //     $content = '<a href="'.admin_url().'mailbox/compose/'.$aRow['id'].'">';
    // }
    // $row[] = $content.'<span>'.$aRow[db_prefix() . 'mail_outbox.to'].'</span></a>';
    // $row[] = $content.'<span>'.$aRow['subject'].' - </span><span class="text-muted">'.clear_textarea_breaks(text_limiter($aRow['body'],8,'...')).'</span>'.$has_attachment.'</a>';    
    // $row[] = $content.'<span>'._dt($aRow['date_sent']).'</span></a>';

    echo $row;
}