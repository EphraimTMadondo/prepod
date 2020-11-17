<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<?php init_head(); ?>
<!-- BEGIN: Content-->
<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="content-wrapper">
      <div class="row">
         <div class="col-md-12">
            <?php if($fixedlist == false) { ?>
            <?php if(has_permission('surveys','','create')){ ?>
            <div class="card">
               <div class="card-body _buttons">
                  <a href="#" class="btn btn-default float-left mr-1" data-toggle="modal" data-target="#import_emails"><?php echo _l('btn_import_emails'); ?></a>
                  <a href="#" class="btn btn-default float-left" data-toggle="modal" data-target="#add_email_to_list"><?php echo _l('btn_add_email_to_list'); ?></a>
               </div>
            </div>
            <?php } ?>
            <?php } ?>
            <div class="card">
               <div class="card-body">
                  <?php if($fixedlist == true) { ?>
                  <?php if($id == 'leads'){ ?>
                  <div class="row">
                     <div class="col-md-3">
                        <?php
                           echo render_select('view_status',$statuses,array('id','name'),'','',array('data-width'=>'100%','data-none-selected-text'=>_l('leads_dt_status')));
                           ?>
                     </div>
                     <div class="col-md-3">
                        <?php
                           echo render_select('view_source',$sources,array('id','name'),'','',array('data-width'=>'100%','data-none-selected-text'=>_l('leads_source')));
                           ?>
                     </div>
                     <div class="col-md-3">
                        <div class="select-placeholder">
                           <select name="custom_view" title="<?php echo _l('additional_filters'); ?>" id="custom_view" class="selectpicker" data-style="btn-outline-light" data-width="100%">
                              <option value=""></option>
                              <option value="lost"><?php echo _l('lead_lost'); ?></option>
                              <option value="contacted_today"><?php echo _l('lead_add_edit_contacted_today'); ?></option>
                              <option value="created_today"><?php echo _l('created_today'); ?></option>
                              <?php if(isset($consent_purposes)) { ?>
                              <optgroup label="<?php echo _l('gdpr_consent'); ?>">
                                 <?php foreach($consent_purposes as $purpose) { ?>
                                 <option value="consent_<?php echo $purpose['id']; ?>">
                                    <?php echo $purpose['name']; ?>
                                 </option>
                                 <?php } ?>
                              </optgroup>
                              <?php } ?>
                           </select>
                        </div>
                     </div>
                  </div>
                  <hr class="no-mtop" />
                  <?php } else if($id == 'clients'){ ?>
                  <div class="row mb-1">
                     <div class="col-md-3">
                        <div class="select-placeholder">
                           <select name="customer_groups" title="<?php echo _l('customer_groups'); ?> - <?php echo _l('customers_sort_all'); ?>" multiple id="customer_groups" class="selectpicker" data-style="btn-outline-light" data-width="100%">
                              <?php foreach($groups as $group){ ?>
                              <option value="<?php echo $group['id']; ?>"><?php echo $group['name']; ?></option>
                              <?php } ?>
                           </select>
                        </div>
                     </div>
                     <?php if(isset($consent_purposes)) { ?>
                     <div class="col-md-3">
                        <div class="select-placeholder">
                           <select name="consent" title="<?php echo _l('gdpr_consent'); ?>" id="consent" class="selectpicker" data-style="btn-outline-light" data-width="100%">
                              <?php foreach($consent_purposes as $purpose) { ?>
                              <option value="<?php echo $purpose['id']; ?>">
                                 <?php echo $purpose['name']; ?>
                              </option>
                              <?php } ?>
                           </select>
                        </div>
                     </div>
                     <?php } ?>
                     <div class="col-md-6 mt-1">
                        <div class="radio radio-inline radio-info">
                           <input type="radio" name="active_customers_filter" checked id="customers_filter_all" value="">
                           <label for="customers_filter_all"><?php echo _l('customers_sort_all'); ?></label>
                        </div>
                        <div class="radio radio-inline radio-info">
                           <input type="radio" name="active_customers_filter" id="active_customers" value="active_customers">
                           <label for="active_customers"><?php echo _l('active_customers'); ?></label>
                        </div>
                        <div class="radio radio-inline radio-info">
                           <input type="radio" name="active_customers_filter" id="active_contacts" value="active_contacts">
                           <label for="active_contacts"><?php echo _l('customers_summary_active'); ?></label>
                        </div>
                     </div>
                  </div>
                  <hr />
                  <?php } ?>
                  <div class="clearfix"></div>
                  <?php } ?>
                  <div class="table-responsive">
                     <table class="table table-mail-list-view">
                        <thead>
                           <th><?php echo _l('mail_lists_view_email_email_heading'); ?></th>
                           <?php if($fixedlist == true){ ?>
                           <?php if($id == 'leads'){
                              echo '<th>'._l('leads_dt_name').'</th>';
                              echo '<th>'._l('lead_company').'</th>';
                              } else if($id == 'clients'){
                              echo '<th>'._l('client_firstname').'</th>';
                              echo '<th>'._l('client_lastname').'</th>';
                              echo '<th>'._l('clients_list_full_name').'</th>';
                              echo '<th>'._l('clients_company').'</th>';
                              } else if($id == 'staff'){
                              echo '<th>'._l('staff_dt_name').'</th>';
                              }
                              ?>
                           <?php } ?>
                           <th><?php echo _l('mail_lists_view_email_date_heading'); ?></th>
                           <?php if(isset($custom_fields) && count($custom_fields) > 0){
                              foreach($custom_fields as $field){ ?>
                           <th><?php echo $field['fieldname']; ?></th>
                           <?php
                              }
                              }
                              ?>
                           <th><?php echo _l('options'); ?></th>
                        </thead>

                        
                        <tbody></tbody>
                     </table>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<?php if($fixedlist == false) { ?>
<div class="modal fade" id="add_email_to_list" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
   <div class="modal-dialog" role="document">
      <div class="modal-content">
         <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel"><?php echo _l('add_new_email_to',$list->name); ?></h4>
         </div>
         <?php echo form_open('admin/surveys/add_email_to_list',array('id'=>'add_single_email_form')); ?>
         <div class="modal-body">
            <div class="row">
               <div class="col-md-12">
                  <?php echo render_input('email','mail_list_new_email_edit_add_label'); ?>
                  <?php echo form_hidden('listid',$list->listid); ?>
                  <?php
                     if(count($custom_fields) > 0){
                      foreach($custom_fields as $field){ ?>
                  <?php echo render_input('customfields['.$field['customfieldid'].']',$field['fieldname']); ?>
                  <?php }
                     }
                     ?>
               </div>
            </div>
         </div>
         <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal"><?php echo _l('close'); ?></button>
            <button type="submit" class="btn btn-secondary"><?php echo _l('submit'); ?></button>
            <?php echo form_close(); ?>
         </div>
      </div>
   </div>
</div>
<div class="modal fade" id="import_emails" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
   <div class="modal-dialog" role="document">
      <div class="modal-content">
         <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel"><?php echo _l('import_emails_to',$list->name); ?></h4>
         </div>
         <?php echo form_open_multipart('admin/surveys/import_emails',array('id'=>'import_emails_form')); ?>
         <div class="modal-body">
            <div class="row">
               <div class="col-md-12">
                  <?php echo render_input('file_xls','mail_list_import_file','','file'); ?>
                  <?php echo form_hidden('listid',$list->listid); ?>
                  <?php
                     if(count($custom_fields) > 0){ ?>
                  <p class="nomargin bold"><?php echo _l('mail_list_available_custom_fields'); ?></p>
                  <?php foreach($custom_fields as $field){ ?>
                  <p><?php echo $field['fieldname']; ?></p>
                  <?php }
                     }
                     ?>
               </div>
            </div>
         </div>
         <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal"><?php echo _l('close'); ?></button>
            <button type="submit" class="btn btn-secondary"><?php echo _l('submit_import_emails'); ?></button>
            <?php echo form_close(); ?>
         </div>
      </div>
   </div>
</div>
<?php } ?>
<?php init_tail(); ?>
<script src="<?php echo base_url('assets/plugins/jquery-validation/additional-methods.min.js'); ?>"></script>
<script>
   // Find the last thead - dynamic table with custom fields headings
   var options_not_sortable = $('.table-mail-list-view').find('th').length - 1;
   var ServerParams = {};
   <?php if($id == 'leads'){ ?>
     ServerParams = {
      "custom_view": "[name='custom_view']",
      "status": "[name='view_status']",
      "source": "[name='view_source']",
    }
    $.each(ServerParams, function(i, obj) {
      $('select' + obj).on('change', function() {
        $('.table-mail-list-view').DataTable().ajax.reload();
      });
    });
    <?php } else if($id == 'clients'){ ?>
      ServerParams = {
        'customer_groups':'[name="customer_groups"]',
        'consent':'[name="consent"]',
        'active_customers_filter':'[name="active_customers_filter"]:checked',
      }
      $('select[name="customer_groups"],select[name="consent"],input[name="active_customers_filter"]').on('change', function() {
        $('.table-mail-list-view').DataTable().ajax.reload();
      });
      <?php } ?>

      $(function(){
        initDataTable('.table-mail-list-view', window.location.href, [options_not_sortable], [options_not_sortable],ServerParams,[0,'asc']);
        appValidateForm($('#add_single_email_form'), {
         email: {
           required: true,
           email: true
         }
       }, add_single_email_to_mail_list);
        appValidateForm($('#import_emails_form'), {
         file_xls: {
           required: true,
           extension: "xls|xlsx"
         }
       });
      });

   // Modal add single email to mail list
   function add_single_email_to_mail_list(form) {
     var data = $(form).serialize();
     var url = form.action;
     $.post(url, data).done(function(response) {
       response = JSON.parse(response);

       if (response.success == true) {
         $('.table-mail-list-view').DataTable().ajax.reload(null,false);
         alert_float('success', response.message);
       } else {
         alert_float('danger', response.error_message);
       }

       $('#add_email_to_list').modal('hide')
       $(form).find('input.form-control').val('');

     });
     return false;
   }
   // Remove single email from mail list
   function remove_email_from_mail_list(row, emailid) {
     $.get(admin_url + 'surveys/remove_email_from_mail_list/' + emailid, function(response) {
       if (response.success == true) {
         alert_float('success', response.message);
         $(row).parents('tr').remove();
       } else {
         alert_float('warning', response.message);
       }
     }, 'json');
   }

   
// General function for all datatables serverside
function initDataTable(selector, url, notsearchable, notsortable, fnserverparams, defaultorder) {
    var table = typeof(selector) == 'string' ? $("body").find('table' + selector) : selector;

    if (table.length === 0) {
        return false;
    }

    fnserverparams = (fnserverparams == 'undefined' || typeof(fnserverparams) == 'undefined') ? [] : fnserverparams;

    // If not order is passed order by the first column
    if (typeof(defaultorder) == 'undefined') {
        defaultorder = [
            [0, 'asc']
        ];
    } else {
        if (defaultorder.length === 1) {
            defaultorder = [defaultorder];
        }
    }

    var user_table_default_order = table.attr('data-default-order');

    if (!empty(user_table_default_order)) {
        var tmp_new_default_order = JSON.parse(user_table_default_order);
        var new_defaultorder = [];
        for (var i in tmp_new_default_order) {
            // If the order index do not exists will throw errors
            if (table.find('thead th:eq(' + tmp_new_default_order[i][0] + ')').length > 0) {
                new_defaultorder.push(tmp_new_default_order[i]);
            }
        }
        if (new_defaultorder.length > 0) {
            defaultorder = new_defaultorder;
        }
    }

    var length_options = [10, 25, 50, 100];
    var length_options_names = [10, 25, 50, 100];

    app.options.tables_pagination_limit = parseFloat(app.options.tables_pagination_limit);

    if ($.inArray(app.options.tables_pagination_limit, length_options) == -1) {
        length_options.push(app.options.tables_pagination_limit);
        length_options_names.push(app.options.tables_pagination_limit);
    }

    length_options.sort(function(a, b) {
        return a - b;
    });
    length_options_names.sort(function(a, b) {
        return a - b;
    });

    length_options.push(-1);
    length_options_names.push(app.lang.dt_length_menu_all);

    var dtSettings = {
        "language": app.lang.datatables,
        "processing": true,
        "retrieve": true,
        "serverSide": true,
        'paginate': true,
        'searchDelay': 750,
        "bDeferRender": true,
        "responsive": true,
        "autoWidth": false,
        dom: "<'row'><'row'<'col-md-7'lB><'col-md-5'f>>rt<'row'<'col-md-4'i>><'row'<'#colvis'><'.dt-page-jump'>p>",
        "pageLength": app.options.tables_pagination_limit,
        "lengthMenu": [length_options, length_options_names],
        "columnDefs": [{
            "searchable": false,
            "targets": notsearchable,
        }, {
            "sortable": false,
            "targets": notsortable
        }],
        "fnDrawCallback": function(oSettings) {
            _table_jump_to_page(this, oSettings);
            if (oSettings.aoData.length === 0) {
                $(oSettings.nTableWrapper).addClass('app_dt_empty');
            } else {
                $(oSettings.nTableWrapper).removeClass('app_dt_empty');
            }
        },
        "fnCreatedRow": function(nRow, aData, iDataIndex) {
            // If tooltips found
            $(nRow).attr('data-title', aData.Data_Title);
            $(nRow).attr('data-toggle', aData.Data_Toggle);
        },
        "initComplete": function(settings, json) {
            var t = this;
            var $btnReload = $('.btn-dt-reload');
            $btnReload.attr('data-toggle', 'tooltip');
            $btnReload.attr('title', app.lang.dt_button_reload);

            var $btnColVis = $('.dt-column-visibility');
            $btnColVis.attr('data-toggle', 'tooltip');
            $btnColVis.attr('title', app.lang.dt_button_column_visibility);

            if (t.hasClass('scroll-responsive') || app.options.scroll_responsive_tables == 1) {
                t.wrap('<div class="table-responsive"></div>');
            }

            var dtEmpty = t.find('.dataTables_empty');
            if (dtEmpty.length) {
                dtEmpty.attr('colspan', t.find('thead th').length);
            }

            // Hide mass selection because causing issue on small devices
            if (is_mobile() && $(window).width() < 400 && t.find('tbody td:first-child input[type="checkbox"]').length > 0) {
                t.DataTable().column(0).visible(false, false).columns.adjust();
                $("a[data-target*='bulk_actions']").addClass('hide');
            }

            t.parents('.table-loading').removeClass('table-loading');
            t.removeClass('dt-table-loading');
            var th_last_child = t.find('thead th:last-child');
            var th_first_child = t.find('thead th:first-child');
            if (th_last_child.text().trim() == app.lang.options) {
                th_last_child.addClass('not-export');
            }
            if (th_first_child.find('input[type="checkbox"]').length > 0) {
                th_first_child.addClass('not-export');
            }
            mainWrapperHeightFix();
        },
        "order": defaultorder,
        "ajax": {
            "url": url,
            "type": "POST",
            "data": function(d) {
                if (typeof(csrfData) !== 'undefined') {
                    d[csrfData['token_name']] = csrfData['hash'];
                }
                for (var key in fnserverparams) {
                    d[key] = $(fnserverparams[key]).val();
                }
                if (table.attr('data-last-order-identifier')) {
                    d['last_order_identifier'] = table.attr('data-last-order-identifier');
                }
            }
        },
        buttons: get_datatable_buttons(table),
    };

    if (table.hasClass('scroll-responsive') || app.options.scroll_responsive_tables == 1) {
        dtSettings.responsive = false;
    }

    table = table.dataTable(dtSettings);
    var tableApi = table.DataTable();

    var hiddenHeadings = table.find('th.not_visible');
    var hiddenIndexes = [];

    $.each(hiddenHeadings, function() {
        hiddenIndexes.push(this.cellIndex);
    });

    setTimeout(function() {
        for (var i in hiddenIndexes) {
            tableApi.columns(hiddenIndexes[i]).visible(false, false).columns.adjust();
        }
    }, 10);

    if (table.hasClass('customizable-table')) {

        var tableToggleAbleHeadings = table.find('th.toggleable');
        var invisible = $('#hidden-columns-' + table.attr('id'));
        try {
            invisible = JSON.parse(invisible.text());
        } catch (err) {
            invisible = [];
        }

        $.each(tableToggleAbleHeadings, function() {
            var cID = $(this).attr('id');
            if ($.inArray(cID, invisible) > -1) {
                tableApi.column('#' + cID).visible(false);
            }
        });

        // For for not blurring out when clicked on the link
        // Causing issues hidden column still to be shown as not hidden because the link is focused
        /* $('body').on('click', '.buttons-columnVisibility a', function() {
             $(this).blur();
         });*/
        /*
                table.on('column-visibility.dt', function(e, settings, column, state) {
                    var hidden = [];
                    $.each(tableApi.columns()[0], function() {
                        var visible = tableApi.column($(this)).visible();
                        var columnHeader = $(tableApi.column($(this)).header());
                        if (columnHeader.hasClass('toggleable')) {
                            if (!visible) {
                                hidden.push(columnHeader.attr('id'))
                            }
                        }
                    });
                    var data = {};
                    data.id = table.attr('id');
                    data.hidden = hidden;
                    if (data.id) {
                        $.post(admin_url + 'staff/save_hidden_table_columns', data).fail(function(data) {
                            // Demo usage, prevent multiple alerts
                            if ($('body').find('.float-alert').length === 0) {
                                alert_float('danger', data.responseText);
                            }
                        });
                    } else {
                        console.error('Table that have ability to show/hide columns must have an ID');
                    }
                });*/
    }
</script>
</body>
</html>
