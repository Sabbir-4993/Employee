
<div id="layoutSidenav">
    <div id="layoutSidenav_nav">
        <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
            <div class="sb-sidenav-menu">
                <div class="nav">
                    <div class="sb-sidenav-menu-heading">Core</div>

                    <a class="nav-link" href="<?php echo e(url('/')); ?>">
                        <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                        Dashboard
                    </a>

                    <div class="sb-sidenav-menu-heading">Interface</div>

                    
                    <a class="nav-link collapsed" href="<?php echo e(route('department.create')); ?>" data-toggle="collapse" data-target="#collapseDepartment" aria-expanded="false" aria-controls="collapseLayouts">
                        <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                        Departments
                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>
                    <div class="collapse" id="collapseDepartment" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                        <nav class="sb-sidenav-menu-nested nav">
                            <?php if(isset(auth()->user()->role->permission['name']['department']['can-add'])): ?>
                                <a class="nav-link" href="<?php echo e(route('department.create')); ?>">Create</a>
                            <?php endif; ?>
                            <?php if(isset(auth()->user()->role->permission['name']['department']['can-list'])): ?>
                                <a class="nav-link" href="<?php echo e(route('department.index')); ?>">View</a>
                            <?php endif; ?>
                        </nav>
                    </div>

                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUser" aria-expanded="false" aria-controls="collapsePages">
                        <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                        Office
                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>
                    <div class="collapse" id="collapseUser" aria-labelledby="headingTwo" data-parent="#sidenavAccordion">
                        <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">

                            
                            <a class="nav-link collapsed" href="<?php echo e(route('role.create')); ?>" data-toggle="collapse" data-target="#pagesCollapseRole" aria-expanded="false" aria-controls="pagesCollapseAuth">
                                Roles
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="pagesCollapseRole" aria-labelledby="headingOne" data-parent="#sidenavAccordionPages">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <?php if(isset(auth()->user()->role->permission['name']['role']['can-add'])): ?>
                                        <a class="nav-link" href="<?php echo e(route('role.create')); ?>">Create Role</a>
                                    <?php endif; ?>
                                    <?php if(isset(auth()->user()->role->permission['name']['role']['can-list'])): ?>
                                        <a class="nav-link" href="<?php echo e(route('role.index')); ?>">View Role</a>
                                    <?php endif; ?>
                                </nav>
                            </div>

                            
                            <a class="nav-link collapsed" href="<?php echo e(route('users.create')); ?>" data-toggle="collapse" data-target="#pagesCollapseUser" aria-expanded="false" aria-controls="pagesCollapseError">
                                Employee
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="pagesCollapseUser" aria-labelledby="headingOne" data-parent="#sidenavAccordionPages">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <?php if(isset(auth()->user()->role->permission['name']['user']['can-add'])): ?>
                                        <a class="nav-link" href="<?php echo e(route('users.create')); ?>">Create Employee</a>
                                    <?php endif; ?>
                                    <?php if(isset(auth()->user()->role->permission['name']['user']['can-list'])): ?>
                                        <a class="nav-link" href="<?php echo e(route('users.index')); ?>">View Employee</a>
                                    <?php endif; ?>
                                </nav>
                            </div>

                            
                            <a class="nav-link collapsed" href="<?php echo e(route('leaves.create')); ?>" data-toggle="collapse" data-target="#pagesCollapseLeave" aria-expanded="false" aria-controls="pagesCollapseError">
                                Leaves
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="pagesCollapseLeave" aria-labelledby="headingOne" data-parent="#sidenavAccordionPages">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="<?php echo e(route('leaves.create')); ?>">Create Leave</a>
                                    
                                    
                                    <?php if(isset(auth()->user()->role->permission['name']['leave']['can-list'])): ?>
                                        <a class="nav-link" href="<?php echo e(route('leaves.index')); ?>">View Leave</a>
                                    <?php endif; ?>
                                </nav>
                            </div>

                            
                            <a class="nav-link collapsed" href="<?php echo e(route('notices.create')); ?>" data-toggle="collapse" data-target="#pagesCollapseNotice" aria-expanded="false" aria-controls="pagesCollapseError">
                                Notice
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="pagesCollapseNotice" aria-labelledby="headingOne" data-parent="#sidenavAccordionPages">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <?php if(isset(auth()->user()->role->permission['name']['notice']['can-add'])): ?>
                                        <a class="nav-link" href="<?php echo e(route('notices.create')); ?>">Create Notice</a>
                                    <?php endif; ?>
                                    <?php if(isset(auth()->user()->role->permission['name']['notice']['can-list'])): ?>
                                        <a class="nav-link" href="<?php echo e(route('notices.index')); ?>">View Notice</a>
                                    <?php endif; ?>
                                </nav>
                            </div>

                            
                            <a class="nav-link collapsed" href="<?php echo e(route('requisitions.create')); ?>" data-toggle="collapse" data-target="#pagesCollapsePermission" aria-expanded="false" aria-controls="pagesCollapseError">
                                Permissions
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="pagesCollapsePermission" aria-labelledby="headingOne" data-parent="#sidenavAccordionPages">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <?php if(isset(auth()->user()->role->permission['name']['permission']['can-add'])): ?>
                                        <a class="nav-link" href="<?php echo e(route('permissions.create')); ?>">Create Permission</a>
                                    <?php endif; ?>
                                    <?php if(isset(auth()->user()->role->permission['name']['permission']['can-list'])): ?>
                                        <a class="nav-link" href="<?php echo e(route('permissions.index')); ?>">View Permissions</a>
                                    <?php endif; ?>
                                </nav>
                            </div>

                        </nav>
                    </div>

                    
                    <a class="nav-link collapsed" href="<?php echo e(route('requisitions.create')); ?>" data-toggle="collapse" data-target="#collapseRequisition" aria-expanded="false" aria-controls="collapseLayouts">
                        <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                        Requisition
                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>
                    <div class="collapse" id="collapseRequisition" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                        <nav class="sb-sidenav-menu-nested nav">
                            <?php if(isset(auth()->user()->role->permission['name']['requisition']['can-add'])): ?>
                                <a class="nav-link" href="<?php echo e(route('requisitions.create')); ?>">Create</a>
                            <?php endif; ?>

                            <?php if(isset(auth()->user()->role->permission['name']['requisition']['can-list'])): ?>
                                <a class="nav-link" href="<?php echo e(route('requisitions.index')); ?>">View</a>
                            <?php endif; ?>
                        </nav>
                    </div>

                    
                    <a class="nav-link collapsed" href="<?php echo e(route('projects.create')); ?>" data-toggle="collapse" data-target="#collapseProject" aria-expanded="false" aria-controls="collapseLayouts">
                        <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                        Project
                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>
                    <div class="collapse" id="collapseProject" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                        <nav class="sb-sidenav-menu-nested nav">
                            <?php if(isset(auth()->user()->role->permission['name']['project']['can-add'])): ?>
                                <a class="nav-link" href="<?php echo e(route('projects.create')); ?>">Create</a>
                            <?php endif; ?>
                             <?php if(isset(auth()->user()->role->permission['name']['project']['can-list'])): ?>
                                <a class="nav-link" href="<?php echo e(route('projects.index')); ?>">View</a>
                             <?php endif; ?>
                        </nav>
                    </div>

                    
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseMail" aria-expanded="false" aria-controls="collapseLayouts">
                        <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                        Mail
                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>
                    <div class="collapse" id="collapseMail" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                        <nav class="sb-sidenav-menu-nested nav">
                            <a class="nav-link" href="#">Create</a>
                            <a class="nav-link" href="#">View</a>
                        </nav>
                    </div>



                </div>
            </div>
            <div class="sb-sidenav-footer">
                <div class="small">Logged in as:</div>
                <?php echo e(Auth()->user()->name); ?>

            </div>
        </nav>
    </div>
<?php /**PATH C:\xampp\htdocs\EMS\Employee\resources\views/admin/layouts/sidebar.blade.php ENDPATH**/ ?>