<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<?php init_head(); ?>
<!-- BEGIN: Content-->
<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12">
                <div class="card mt-2">
                    <div class="card-body _buttons">
                       <?php if(has_permission('estimates','','create')){
                        $this->load->view('admin/estimates/estimates_top_stats');
                    } ?>
                    <div class="row">
                        <div class="col-md-8">
                            <?php if(has_permission('estimates','','create')){ ?>
                            <a href="<?php echo admin_url('estimates/estimate'); ?>" class="btn btn-secondary pull-left new"><?php echo _l('create_new_estimate'); ?></a>
                            <div class="display-block pull-left ml-1">
                                <a href="#" class="btn btn-default estimates-total" onclick="slideToggle('#stats-top'); init_estimates_total(true); return false;" data-toggle="tooltip" title="<?php echo _l('view_stats_tooltip'); ?>"><i class="bx bx-bar-chart"></i></a>
                            </div>
                            <?php } ?>
                            <a href="<?php echo admin_url('estimates/pipeline/'.$switch_pipeline); ?>" class="btn btn-default ml-1 pull-left"><?php echo _l('switch_to_list_view'); ?></a>
                        </div>
                        <div class="col-md-4" data-toggle="tooltip" data-placement="bottom" data-title="<?php echo _l('search_by_tags'); ?>">
                            <?php echo render_input('search','','','search',array('data-name'=>'search','onkeyup'=>'estimate_pipeline();'),array(),'no-margin') ?>
                            <?php echo form_hidden('sort_type'); ?>
                            <?php echo form_hidden('sort',(get_option('default_estimates_pipeline_sort') != '' ? get_option('default_estimates_pipeline_sort_type') : '')); ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card animated mtop5 fadeIn">
                <?php echo form_hidden('estimateid',$estimateid); ?>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="kanban-leads-sort">
                                <span class="bold"><?php echo _l('estimates_pipeline_sort'); ?>: </span>
                                <a href="#" onclick="estimates_pipeline_sort('datecreated'); return false" class="datecreated">
                                    <?php if(get_option('default_estimates_pipeline_sort') == 'datecreated'){echo '<i class="kanban-sort-icon fa fa-sort-amount-'.strtolower(get_option('default_estimates_pipeline_sort_type')).'"></i> ';} ?>
                                    <?php echo _l('estimates_sort_datecreated'); ?>
                                    </a>
                                |
                                <a href="#" onclick="estimates_pipeline_sort('date'); return false" class="date">
                                    <?php if(get_option('default_estimates_pipeline_sort') == 'date'){echo '<i class="kanban-sort-icon fa fa-sort-amount-'.strtolower(get_option('default_estimates_pipeline_sort_type')).'"></i> ';} ?>
                                    <?php echo _l('estimates_sort_estimate_date'); ?>
                                    </a>
                                |
                                <a href="#" onclick="estimates_pipeline_sort('pipeline_order');return false;" class="pipeline_order">
                                    <?php if(get_option('default_estimates_pipeline_sort') == 'pipeline_order'){echo '<i class="kanban-sort-icon fa fa-sort-amount-'.strtolower(get_option('default_estimates_pipeline_sort_type')).'"></i> ';} ?>
                                    <?php echo _l('estimates_sort_pipeline'); ?>
                                    </a>
                                |
                                <a href="#" onclick="estimates_pipeline_sort('expirydate');return false;" class="expirydate">
                                    <?php if(get_option('default_estimates_pipeline_sort') == 'expirydate'){echo '<i class="kanban-sort-icon fa fa-sort-amount-'.strtolower(get_option('default_estimates_pipeline_sort_type')).'"></i> ';} ?>
                                    <?php echo _l('estimates_sort_expiry_date'); ?>
                                    </a>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div id="estimate-pipeline">
                            <div class="container-fluid">
                                <div id="kan-ban"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<div id="estimate">
</div>
<?php $this->load->view('admin/includes/modals/sales_attach_file'); ?>
<?php init_tail(); ?>
<script>
    function kanban_estimates(){
        if ($('#kanban-app').length === 0) { return; }
        var parameters = [];
        var _kanban_param_val;

        //Sorting parameters
        var search = $('input[name="search"]').val();
        if (typeof(search) != 'undefined' && search !== '') { parameters['search'] = search; }

        var sort_type = $('input[name="sort_type"]');
        var sort = $('input[name="sort"]').val();
        if (sort_type.length != 0 && sort_type.val() !== '') {
            parameters['sort_by'] = sort_type.val();
            parameters['sort'] = sort;
        }

        parameters['kanban'] = true;
        requestGetJSON('estimates/get_pipeline_ajax',parameters).done(function(response){
            if(response.success){
                console.log(response);
                var kanban_curr_el, kanban_curr_item_id, kanban_item_title, kanban_data, kanban_item, kanban_users;

                // Kanban Board and Item Data passed by json
                var kanban_board_data = response.kanban_items.map(kanban_item => ({
                    id: "kanban-board-" + kanban_item.status,
                    title: kanban_item.title,
                    item: kanban_item.estimates.map(estimate => ({
                        id: estimate.id,
                        title: estimate.subject,
                        border: "success",
                        dueDate: estimate.open_till,
                        comment: 1,
                        attachment: 3,
                    })),
                }));

                // Kanban Board
                var KanbanExample = new jKanban({
                    element: "#kanban-wrapper", // selector of the kanban container
                    buttonContent: "Load More", // text or html content of the board button

                    // click on current kanban-item
                    click: function (el) {
                        // Set el to var kanban_curr_el, use this variable when updating title
                        kanban_curr_el = el;

                        // Extract  the kan ban item & id and set it to respective vars
                        kanban_item_title = $(el).contents()[0].data;
                        kanban_curr_item_id = $(el).attr("data-eid");

                        // open estimate modal
                        estimate_pipeline_open(kanban_curr_item_id);
                    },

                    buttonClick: function (el, boardId) {
                    
                    },
                    addItemButton: true, // add a button to board for easy item creation
                    boards: kanban_board_data // data passed from defined variable
                });

                
                // Add html for Custom Data-attribute to Kanban item
                var board_item_id, board_item_el;
                // Kanban board loop
                for (kanban_data in kanban_board_data) {
                    // Kanban board items loop
                    for (kanban_item in kanban_board_data[kanban_data].item) {
                    var board_item_details = kanban_board_data[kanban_data].item[kanban_item]; // set item details
                    board_item_id = $(board_item_details).attr("id"); // set 'id' attribute of kanban-item

                    (board_item_el = KanbanExample.findElement(board_item_id)), // find element of kanban-item by ID
                    (board_item_users = board_item_dueDate = board_item_comment = board_item_attachment = board_item_image = board_item_badge =
                        " ");

                    // check if users are defined or not and loop it for getting value from user's array
                    if (typeof $(board_item_el).attr("data-users") !== "undefined") {
                        for (kanban_users in kanban_board_data[kanban_data].item[kanban_item].users) {
                        board_item_users +=
                            '<li class="avatar pull-up my-0">' +
                            '<img class="media-object rounded-circle" src=" ' +
                            kanban_board_data[kanban_data].item[kanban_item].users[kanban_users] +
                            '" alt="Avatar" height="24" width="24">' +
                            "</li>";
                        }
                    }
                    // check if dueDate is defined or not
                    if (typeof $(board_item_el).attr("data-dueDate") !== "undefined") {
                        board_item_dueDate =
                        '<div class="kanban-due-date d-flex align-items-center mr-50">' +
                        '<i class="bx bx-time-five font-size-small mr-25"></i>' +
                        '<span class="font-size-small">' +
                        $(board_item_el).attr("data-dueDate") +
                        "</span>" +
                        "</div>";
                    }
                    // check if comment is defined or not
                    if (typeof $(board_item_el).attr("data-comment") !== "undefined") {
                        board_item_comment =
                        '<div class="kanban-comment d-flex align-items-center mr-50">' +
                        '<i class="bx bx-message font-size-small mr-25"></i>' +
                        '<span class="font-size-small">' +
                        $(board_item_el).attr("data-comment") +
                        "</span>" +
                        "</div>";
                    }
                    // check if attachment is defined or not
                    if (typeof $(board_item_el).attr("data-attachment") !== "undefined") {
                        board_item_attachment =
                        '<div class="kanban-attachment d-flex align-items-center">' +
                        '<i class="bx bx-link-alt font-size-small mr-25"></i>' +
                        '<span class="font-size-small">' +
                        $(board_item_el).attr("data-attachment") +
                        "</span>" +
                        "</div>";
                    }
                    // check if Image is defined or not
                    if (typeof $(board_item_el).attr("data-image") !== "undefined") {
                        board_item_image =
                        '<div class="kanban-image mb-1">' +
                        '<img class="img-fluid" src=" ' +
                        kanban_board_data[kanban_data].item[kanban_item].image +
                        '" alt="kanban-image">';
                        ("</div>");
                    }
                    // check if Badge is defined or not
                    if (typeof $(board_item_el).attr("data-badgeContent") !== "undefined") {
                        board_item_badge =
                        '<div class="kanban-badge">' +
                        '<div class="badge-circle badge-circle-sm badge-circle-light-' +
                        kanban_board_data[kanban_data].item[kanban_item].badgeColor +
                        ' font-size-small font-weight-bold">' +
                        kanban_board_data[kanban_data].item[kanban_item].badgeContent +
                        "</div>";
                        ("</div>");
                    }
                    // add custom 'kanban-footer'
                    if (
                        typeof (
                        $(board_item_el).attr("data-dueDate") ||
                        $(board_item_el).attr("data-comment") ||
                        $(board_item_el).attr("data-users") ||
                        $(board_item_el).attr("data-attachment")
                        ) !== "undefined"
                    ) {
                        $(board_item_el).append(
                        '<div class="kanban-footer d-flex justify-content-between mt-1">' +
                        '<div class="kanban-footer-left d-flex">' +
                        board_item_dueDate +
                        board_item_comment +
                        board_item_attachment +
                        "</div>" +
                        '<div class="kanban-footer-right">' +
                        '<div class="kanban-users">' +
                        board_item_badge +
                        '<ul class="list-unstyled users-list m-0 d-flex align-items-center">' +
                        board_item_users +
                        "</ul>" +
                        "</div>" +
                        "</div>" +
                        "</div>"
                        );
                    }
                    // add Image prepend to 'kanban-Item'
                    if (typeof $(board_item_el).attr("data-image") !== "undefined") {
                        $(board_item_el).prepend(board_item_image);
                    }
                    }
                }
            }
        });
    }
    
   $(function(){
    kanban_estimates();
  });
</script>
</body>
</html>
