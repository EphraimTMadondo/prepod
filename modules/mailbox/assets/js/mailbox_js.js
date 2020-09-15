/**
 * Update email status 
 */
function update_field(group, action, value, mail_id){
    var data = {};
    data.group = group;
    data.action = action;
    data.value = value;
    data.id = mail_id;
    data.type = 'inbox';     
    if(group == 'detail'){
        data.type = mailtype; 
    }
    $.post(admin_url + 'mailbox/update_field', data).done(function(response) {
        response = JSON.parse(response);
        if (response.success === true || response.success == 'true') {
            alert_float('success', response.message);            
            if(group == 'detail'){
                window.location.reload();
            }
        } else {
            alert_float('warning', response.message);
        }
    });
}

/**
 * Update multi-email 
 */
function update_mass(group, action, value){
    if(group == 'detail'){
        update_field(group, action, value, mailid);
    } else {
        if (confirm_delete()) {
            var table_mailbox = $('.table-mailbox');
            var rows = table_mailbox.find('tbody tr');
            var lstid = '';
            $.each(rows, function() {
                var checkbox = $($(this).find('td').eq(0)).find('input');
                if (checkbox.prop('checked') === true) {
                    lstid = lstid + checkbox.val() + ',';
                }
            });
            update_field(group, action, value, lstid);
        }
    }
}