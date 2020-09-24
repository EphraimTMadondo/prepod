<!-- BEGIN: Content-->
<div class="app-content content">
    <div class="content-area-wrapper">
        <div class="sidebar-left">
            <div class="sidebar">
                <div class="todo-sidebar d-flex">
                    <span class="sidebar-close-icon">
                        <i class="bx bx-x"></i>
                    </span>
                    <!-- todo app menu -->
                    <div class="todo-app-menu">
                        <div class="form-group text-center add-task">
                            <?php if(has_permission('tasks','','create')){ ?>
                            <a href="#" onclick="new_task(<?php if($this->input->get('project_id')){ echo "'".admin_url('tasks/task?rel_id='.$this->input->get('project_id').'&rel_type=project')."'";} ?>); return false;" class="btn btn-primary btn-block  my-1"><?php echo _l('new_task'); ?></a>
                            <?php } ?>
                            <a href="<?php if(!$this->input->get('project_id')){ echo admin_url('tasks/switch_kanban/'.$switch_kanban); } else { echo admin_url('projects/view/'.$this->input->get('project_id').'?group=project_tasks'); }; ?>" class="btn btn-secondary btn-block  my-1">
                                <?php if($switch_kanban == 1){ echo _l('switch_to_list_view');}else{echo _l('leads_switch_to_kanban');}; ?>
                            </a>
                        </div>
                        <!-- sidebar list start -->
                        <div class="sidebar-menu-list">
                            <div class="list-group">
                                <a href="#" class="list-group-item border-0 active">
                                    <span class="fonticon-wrap mr-50">
                                        <i class="livicon-evo" data-options="name: list.svg; size: 24px; style: lines; strokeColor:#5A8DEE; eventOn:grandparent;"></i>
                                    </span>
                                    <span> All</span>
                                </a>
                            </div>
                            <label class="filter-label mt-2 mb-1 pt-25">Filters</label>
                            <div class="list-group">
                                <a href="#" class="list-group-item border-0">
                                    <span class="fonticon-wrap mr-50">
                                        <i class="livicon-evo" data-options="name: star.svg; size: 24px; style: lines; strokeColor:#475f7b; eventOn:grandparent;"></i>
                                    </span>
                                    <span>Favourites</span>
                                </a>
                                <a href="#" class="list-group-item border-0">
                                    <span class="fonticon-wrap mr-50">
                                        <i class="livicon-evo" data-options="name: check.svg; size: 24px; style: lines; strokeColor:#475f7b; eventOn:grandparent;"></i>
                                    </span>
                                    <span>Done</span>
                                </a>
                                <a href="#" class="list-group-item border-0">
                                    <span class="fonticon-wrap mr-50">
                                        <i class="livicon-evo" data-options="name: trash.svg; size: 24px; style: lines; strokeColor:#475f7b; eventOn:grandparent;"></i>
                                    </span>
                                    <span>Deleted</span>
                                </a>
                            </div>
                            <label class="filter-label mt-2 mb-1 pt-25">Labels</label>
                            <div class="list-group">
                                <a href="#" class="list-group-item border-0 d-flex align-items-center justify-content-between">
                                    <span>Frontend</span>
                                    <span class="bullet bullet-sm bullet-primary"></span>
                                </a>
                                <a href="#" class="list-group-item border-0 d-flex align-items-center justify-content-between">
                                    <span>Backend</span>
                                    <span class="bullet bullet-sm bullet-success"></span>
                                </a>
                                <a href="#" class="list-group-item border-0 d-flex align-items-center justify-content-between">
                                    <span>Issue</span>
                                    <span class="bullet bullet-sm bullet-danger"></span>
                                </a>
                                <a href="#" class="list-group-item border-0 d-flex align-items-center justify-content-between">
                                    <span>Design</span>
                                    <span class="bullet bullet-sm bullet-warning"></span>
                                </a>
                                <a href="#" class="list-group-item border-0 d-flex align-items-center justify-content-between">
                                    <span>Wireframe</span>
                                    <span class="bullet bullet-sm bullet-info"></span>
                                </a>
                            </div>
                        </div>
                        <!-- sidebar list end -->
                    </div>
                </div>
            </div>
        </div>
        <div class="content-right">
            <div class="content-overlay"></div>
            <div class="content-wrapper">
                <div class="content-header row">
                </div>
                <div class="content-body">
                    <div class="app-content-overlay"></div>
                    <div class="todo-app-area">
                        <div class="todo-app-list-wrapper">
                            <div class="todo-app-list">
                                <div class="todo-fixed-search d-flex justify-content-between align-items-center">
                                    <div class="sidebar-toggle d-block d-lg-none">
                                        <i class="bx bx-menu"></i>
                                    </div>
                                    <fieldset class="form-group position-relative has-icon-left m-0 flex-grow-1">
                                        <input type="text" class="form-control todo-search" id="todo-search" placeholder="Search Task">
                                        <div class="form-control-position" style="padding-top:8px">
                                            <i class="bx bx-search"></i>
                                        </div>
                                    </fieldset>
                                    <div class="todo-sort dropdown mr-1">
                                        <button class="btn dropdown-toggle sorting" type="button" id="sortDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="bx bx-filter"></i>
                                            <span>Sort</span>
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="sortDropdown">
                                            <a class="dropdown-item ascending" href="#">Ascending</a>
                                            <a class="dropdown-item descending" href="#">Descending</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="todo-task-list list-group">
                                    <!-- task list start -->
                                    <ul class="todo-task-list-wrapper list-unstyled" id="todo-task-list-drag">
                                        <li class="todo-item" data-name="David Smith">
                                            <div class="todo-title-wrapper d-flex justify-content-sm-between justify-content-end align-items-center">
                                                <div class="todo-title-area d-flex">
                                                    <i class='bx bx-grid-vertical handle'></i>
                                                    <div class="checkbox">
                                                        <input type="checkbox" class="checkbox-input" id="checkbox1">
                                                        <label for="checkbox1"></label>
                                                    </div>
                                                    <p class="todo-title mx-50 m-0 truncate">Effective Hypnosis Quit Smoking Methods</p>
                                                </div>
                                                <div class="todo-item-action d-flex align-items-center">
                                                    <div class="todo-badge-wrapper d-flex">
                                                        <span class="badge badge-light-primary badge-pill">Frontend</span>
                                                    </div>
                                                    <div class="avatar ml-1">
                                                        <img src="../../../app-assets/images/portrait/small/avatar-s-1.jpg" alt="avatar" height="30" width="30">
                                                    </div>
                                                    <a class='todo-item-favorite ml-75'><i class="bx bx-star"></i></a>
                                                    <a class='todo-item-delete ml-75'><i class="bx bx-trash"></i></a>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="todo-item" data-name="John Doe">
                                            <div class="todo-title-wrapper d-flex justify-content-sm-between justify-content-end align-items-center">
                                                <div class="todo-title-area d-flex">
                                                    <i class='bx bx-grid-vertical handle'></i>
                                                    <div class="checkbox">
                                                        <input type="checkbox" class="checkbox-input" id="checkbox2">
                                                        <label for="checkbox2"></label>
                                                    </div>
                                                    <p class="todo-title mx-50 m-0 truncate">How To Protect Your Computer Very Useful Tips</p>
                                                </div>
                                                <div class="todo-item-action d-flex align-items-center">
                                                    <div class="todo-badge-wrapper d-flex"></div>
                                                    <div class="avatar ml-1">
                                                        <img src="../../../app-assets/images/portrait/small/avatar-s-2.jpg" alt="avatar" height="30" width="30">
                                                    </div>
                                                    <a class='todo-item-favorite ml-75 warning'><i class="bx bx-star bxs-star"></i></a>
                                                    <a class='todo-item-delete ml-75'><i class="bx bx-trash"></i></a>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="todo-item" data-name="James Smith">
                                            <div class="todo-title-wrapper d-flex justify-content-sm-between justify-content-end align-items-center">
                                                <div class="todo-title-area d-flex">
                                                    <i class='bx bx-grid-vertical handle'></i>
                                                    <div class="checkbox">
                                                        <input type="checkbox" class="checkbox-input" id="checkbox14">
                                                        <label for="checkbox14"></label>
                                                    </div>
                                                    <p class="todo-title mx-50 m-0 truncate">It is a good idea to think of your PC as an office.</p>
                                                </div>
                                                <div class="todo-item-action d-flex align-items-center">
                                                    <div class="todo-badge-wrapper d-flex">
                                                        <span class="badge badge-light-primary badge-pill">Frontend</span>
                                                    </div>
                                                    <div class="avatar ml-1">
                                                        <img src="../../../app-assets/images/portrait/small/avatar-s-3.jpg" alt="avatar" height="30" width="30">
                                                    </div>
                                                    <a class='todo-item-favorite ml-75'><i class="bx bx-star"></i></a>
                                                    <a class='todo-item-delete ml-75'><i class="bx bx-trash"></i></a>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="todo-item" data-name="Maria Garcia">
                                            <div class="todo-title-wrapper d-flex justify-content-sm-between justify-content-end align-items-center">
                                                <div class="todo-title-area d-flex">
                                                    <i class='bx bx-grid-vertical handle'></i>
                                                    <div class="checkbox">
                                                        <input type="checkbox" class="checkbox-input" id="checkbox4">
                                                        <label for="checkbox4"></label>
                                                    </div>
                                                    <p class="todo-title mx-50 m-0 truncate">Don't Let The Outtakes Take You Out</p>
                                                </div>
                                                <div class="todo-item-action d-flex align-items-center">
                                                    <div class="todo-badge-wrapper d-flex">
                                                        <span class="badge badge-light-danger badge-pill ml-50">Issue</span>
                                                        <span class="badge badge-light-success badge-pill ml-50">Backend</span>
                                                    </div>
                                                    <div class="avatar ml-1">
                                                        <img src="../../../app-assets/images/portrait/small/avatar-s-4.jpg" alt="avatar" height="30" width="30">
                                                    </div>
                                                    <a class='todo-item-favorite ml-75 warning'><i class="bx bx-star bxs-star"></i></a>
                                                    <a class='todo-item-delete ml-75'><i class="bx bx-trash"></i></a>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="todo-item" data-name="Maria Rodrigu">
                                            <div class="todo-title-wrapper d-flex justify-content-sm-between justify-content-end align-items-center">
                                                <div class="todo-title-area d-flex">
                                                    <i class='bx bx-grid-vertical handle'></i>
                                                    <div class="checkbox">
                                                        <input type="checkbox" class="checkbox-input" id="checkbox5">
                                                        <label for="checkbox5"></label>
                                                    </div>
                                                    <p class="todo-title mx-50 m-0 truncate">Sony laptops are among the most well known laptops on today</p>
                                                </div>
                                                <div class="todo-item-action d-flex align-items-center">
                                                    <div class="todo-badge-wrapper d-flex"></div>
                                                    <div class="avatar ml-1">
                                                        <img src="../../../app-assets/images/portrait/small/avatar-s-5.jpg" alt="avatar" height="30" width="30">
                                                    </div>
                                                    <a class='todo-item-favorite ml-75'><i class="bx bx-star"></i></a>
                                                    <a class='todo-item-delete ml-75'><i class="bx bx-trash"></i></a>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="todo-item" data-name="Marry Smith">
                                            <div class="todo-title-wrapper d-flex justify-content-sm-between justify-content-end align-items-center">
                                                <div class="todo-title-area d-flex">
                                                    <i class='bx bx-grid-vertical handle'></i>
                                                    <div class="checkbox">
                                                        <input type="checkbox" class="checkbox-input" id="checkbox6">
                                                        <label for="checkbox6"></label>
                                                    </div>
                                                    <p class="todo-title mx-50 m-0 truncate">Success Steps For Your Personal Or Business Life</p>
                                                </div>
                                                <div class="todo-item-action d-flex align-items-center">
                                                    <div class="todo-badge-wrapper d-flex"></div>
                                                    <div class="avatar ml-1">
                                                        <img src="../../../app-assets/images/portrait/small/avatar-s-6.jpg" alt="avatar" height="30" width="30">
                                                    </div>
                                                    <a class='todo-item-favorite ml-75'><i class="bx bx-star"></i></a>
                                                    <a class='todo-item-delete ml-75'><i class="bx bx-trash"></i></a>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="todo-item" data-name="Maria Hern">
                                            <div class="todo-title-wrapper d-flex justify-content-sm-between justify-content-end align-items-center">
                                                <div class="todo-title-area d-flex">
                                                    <i class='bx bx-grid-vertical handle'></i>
                                                    <div class="checkbox">
                                                        <input type="checkbox" class="checkbox-input" id="checkbox7">
                                                        <label for="checkbox7"></label>
                                                    </div>
                                                    <p class="todo-title mx-50 m-0 truncate">Believing Is The Absence Of Doubt</p>
                                                </div>
                                                <div class="todo-item-action d-flex align-items-center">
                                                    <div class="todo-badge-wrapper d-flex"></div>
                                                    <div class="avatar ml-1">
                                                        <img src="../../../app-assets/images/portrait/small/avatar-s-7.jpg" alt="avatar" height="30" width="30">
                                                    </div>
                                                    <a class='todo-item-favorite ml-75'><i class="bx bx-star"></i></a>
                                                    <a class='todo-item-delete ml-75'><i class="bx bx-trash"></i></a>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="todo-item" data-name="Jamesh Jackson">
                                            <div class="todo-title-wrapper d-flex justify-content-sm-between justify-content-end align-items-center">
                                                <div class="todo-title-area d-flex">
                                                    <i class='bx bx-grid-vertical handle'></i>
                                                    <div class="checkbox">
                                                        <input type="checkbox" class="checkbox-input" id="checkbox8">
                                                        <label for="checkbox8"></label>
                                                    </div>
                                                    <p class="todo-title mx-50 m-0 truncate">Are You Struggling In Life</p>
                                                </div>
                                                <div class="todo-item-action d-flex align-items-center">
                                                    <div class="todo-badge-wrapper d-flex">
                                                        <span class="badge badge-light-danger badge-pill ml-50">Issue</span>
                                                        <span class="badge badge-light-success badge-pill ml-50">Backend</span>
                                                    </div>
                                                    <div class="avatar ml-1">
                                                        <img src="../../../app-assets/images/portrait/small/avatar-s-8.jpg" alt="avatar" height="30" width="30">
                                                    </div>
                                                    <a class='todo-item-favorite ml-75'><i class="bx bx-star"></i></a>
                                                    <a class='todo-item-delete ml-75'><i class="bx bx-trash"></i></a>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="todo-item" data-name="David Smith">
                                            <div class="todo-title-wrapper d-flex justify-content-sm-between justify-content-end align-items-center">
                                                <div class="todo-title-area d-flex">
                                                    <i class='bx bx-grid-vertical handle'></i>
                                                    <div class="checkbox">
                                                        <input type="checkbox" class="checkbox-input" id="checkbox9">
                                                        <label for="checkbox9"></label>
                                                    </div>
                                                    <p class="todo-title mx-50 m-0 truncate">Hypnotherapy For Motivation Getting The Drive Back</p>
                                                </div>
                                                <div class="todo-item-action d-flex align-items-center">
                                                    <div class="todo-badge-wrapper d-flex"></div>
                                                    <span class=" badge badge-circle badge-light-primary">DS</span>
                                                    <a class='todo-item-favorite ml-75 warning'><i class="bx bx-star bxs-star"></i></a>
                                                    <a class='todo-item-delete ml-75'><i class="bx bx-trash"></i></a>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="todo-item" data-name="John Doe">
                                            <div class="todo-title-wrapper d-flex justify-content-sm-between justify-content-end align-items-center">
                                                <div class="todo-title-area d-flex">
                                                    <i class='bx bx-grid-vertical handle'></i>
                                                    <div class="checkbox">
                                                        <input type="checkbox" class="checkbox-input" id="checkbox10">
                                                        <label for="checkbox10"></label>
                                                    </div>
                                                    <p class="todo-title mx-50 m-0 truncate">Fix Responsiveness</p>
                                                </div>
                                                <div class="todo-item-action d-flex align-items-center">
                                                    <div class="todo-badge-wrapper d-flex">
                                                        <span class="badge badge-light-warning badge-pill ml-50">Design</span>
                                                        <span class="badge badge-light-primary badge-pill ml-50">Frontend</span>
                                                        <span class="badge badge-light-secondary badge-pill ml-50" data-tag="ISSUE,BACKEND" data-toggle="tooltip" data-placement="bottom" title="ISSUE,BACKEND">
                                                            <i class='bx bx-dots-horizontal-rounded font-small-1'></i>
                                                        </span>
                                                    </div>
                                                    <div class="avatar ml-1">
                                                        <img src="../../../app-assets/images/portrait/small/avatar-s-10.jpg" alt="avatar" height="30" width="30">
                                                    </div>
                                                    <a class='todo-item-favorite ml-75'><i class="bx bx-star"></i></a>
                                                    <a class='todo-item-delete ml-75'><i class="bx bx-trash"></i></a>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="todo-item" data-name="James Smith">
                                            <div class="todo-title-wrapper d-flex justify-content-sm-between justify-content-end align-items-center">
                                                <div class="todo-title-area d-flex">
                                                    <i class='bx bx-grid-vertical handle'></i>
                                                    <div class="checkbox">
                                                        <input type="checkbox" class="checkbox-input" id="checkbox11">
                                                        <label for="checkbox11"></label>
                                                    </div>
                                                    <p class="todo-title mx-50 m-0 truncate">Buying Used Electronic Test Equipment.</p>
                                                </div>
                                                <div class="todo-item-action d-flex align-items-center">
                                                    <div class="todo-badge-wrapper d-flex"></div>
                                                    <div class="avatar ml-1">
                                                        <img src="../../../app-assets/images/portrait/small/avatar-s-11.jpg" alt="avatar" height="30" width="30">
                                                    </div>
                                                    <a class='todo-item-favorite ml-75'><i class="bx bx-star"></i></a>
                                                    <a class='todo-item-delete ml-75'><i class="bx bx-trash"></i></a>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="todo-item" data-name="Marry Smith">
                                            <div class="todo-title-wrapper d-flex justify-content-sm-between justify-content-end align-items-center">
                                                <div class="todo-title-area d-flex">
                                                    <i class='bx bx-grid-vertical handle'></i>
                                                    <div class="checkbox">
                                                        <input type="checkbox" class="checkbox-input" id="checkbox12">
                                                        <label for="checkbox12"></label>
                                                    </div>
                                                    <p class="todo-title mx-50 m-0 truncate">Get The Boot A Birds Eye Look Into Mcse Boot Camps</p>
                                                </div>
                                                <div class="todo-item-action d-flex align-items-center">
                                                    <div class="todo-badge-wrapper d-flex">
                                                        <span class="badge badge-light-warning badge-pill">Design</span>
                                                    </div>
                                                    <div class="avatar ml-1">
                                                        <img src="../../../app-assets/images/portrait/small/avatar-s-12.jpg" alt="avatar" height="30" width="30">
                                                    </div>
                                                    <a class='todo-item-favorite ml-75'><i class="bx bx-star"></i></a>
                                                    <a class='todo-item-delete ml-75'><i class="bx bx-trash"></i></a>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="todo-item" data-name="Maria Garcia">
                                            <div class="todo-title-wrapper d-flex justify-content-sm-between justify-content-end align-items-center">
                                                <div class="todo-title-area d-flex">
                                                    <i class='bx bx-grid-vertical handle'></i>
                                                    <div class="checkbox">
                                                        <input type="checkbox" class="checkbox-input" id="checkbox13">
                                                        <label for="checkbox13"></label>
                                                    </div>
                                                    <p class="todo-title mx-50 m-0 truncate">Dealing With Technical Support 10 Useful Tips</p>
                                                </div>
                                                <div class="todo-item-action d-flex align-items-center">
                                                    <div class="todo-badge-wrapper d-flex">
                                                        <span class="badge badge-light-success badge-pill">Backend</span>
                                                    </div>
                                                    <div class="avatar ml-1">
                                                        <img src="../../../app-assets/images/portrait/small/avatar-s-13.jpg" alt="avatar" height="30" width="30">
                                                    </div>
                                                    <a class='todo-item-favorite ml-75'><i class="bx bx-star"></i></a>
                                                    <a class='todo-item-delete ml-75'><i class="bx bx-trash"></i></a>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="todo-item" data-name="Maria Rodrigu">
                                            <div class="todo-title-wrapper d-flex justify-content-sm-between justify-content-end align-items-center">
                                                <div class="todo-title-area d-flex">
                                                    <i class='bx bx-grid-vertical handle'></i>
                                                    <div class="checkbox">
                                                        <input type="checkbox" class="checkbox-input" id="checkbox15">
                                                        <label for="checkbox15"></label>
                                                    </div>
                                                    <p class="todo-title mx-50 m-0 truncate">How Hypnosis Can Help You</p>
                                                </div>
                                                <div class="todo-item-action d-flex align-items-center">
                                                    <div class="todo-badge-wrapper d-flex"></div>
                                                    <span class="badge badge-circle badge-light-success">MR</span>
                                                    <a class='todo-item-favorite ml-75 warning'><i class="bx bx-star bxs-star"></i></a>
                                                    <a class='todo-item-delete ml-75'><i class="bx bx-trash"></i></a>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="todo-item" data-name="David Smith">
                                            <div class="todo-title-wrapper d-flex justify-content-sm-between justify-content-end align-items-center">
                                                <div class="todo-title-area d-flex">
                                                    <i class='bx bx-grid-vertical handle'></i>
                                                    <div class="checkbox">
                                                        <input type="checkbox" class="checkbox-input" id="checkbox16">
                                                        <label for="checkbox16"></label>
                                                    </div>
                                                    <p class="todo-title mx-50 m-0 truncate">Effective Hypnosis Quit Smoking Methods</p>
                                                </div>
                                                <div class="todo-item-action d-flex align-items-center">
                                                    <div class="todo-badge-wrapper d-flex">
                                                        <span class="badge badge-light-primary badge-pill">Frontend</span>
                                                    </div>
                                                    <div class="avatar ml-1">
                                                        <img src="../../../app-assets/images/portrait/small/avatar-s-1.jpg" alt="avatar" height="30" width="30">
                                                    </div>
                                                    <a class='todo-item-favorite ml-75'><i class="bx bx-star"></i></a>
                                                    <a class='todo-item-delete ml-75'><i class="bx bx-trash"></i></a>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="todo-item" data-name="John Doe">
                                            <div class="todo-title-wrapper d-flex justify-content-sm-between justify-content-end align-items-center">
                                                <div class="todo-title-area d-flex">
                                                    <i class='bx bx-grid-vertical handle'></i>
                                                    <div class="checkbox">
                                                        <input type="checkbox" class="checkbox-input" id="checkbox17">
                                                        <label for="checkbox17"></label>
                                                    </div>
                                                    <p class="todo-title mx-50 m-0 truncate">How To Protect Your Computer Very Useful Tips</p>
                                                </div>
                                                <div class="todo-item-action d-flex align-items-center">
                                                    <div class="todo-badge-wrapper d-flex"></div>
                                                    <div class="avatar ml-1">
                                                        <img src="../../../app-assets/images/portrait/small/avatar-s-2.jpg" alt="avatar" height="30" width="30">
                                                    </div>
                                                    <a class='todo-item-favorite ml-75'><i class="bx bx-star"></i></a>
                                                    <a class='todo-item-delete ml-75'><i class="bx bx-trash"></i></a>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                    <!-- task list end -->
                                    <div class="no-results">
                                        <h5>No Items Found</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END: Content-->

<script>
$(function() {
    requestGetJSON('tasks/table',parameters).done(function(response){
        console.log(response);
    });
});
</script>