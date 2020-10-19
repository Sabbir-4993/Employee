<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">

            <div class="mt-3">
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>
            </div>
            <div class="row">
                <div class="col-xl-3 col-md-6">
                    <div class="card bg-primary text-white mb-4">
                        <div class="card-body">Employees</div>
                        <p><i class="fas fa-user fa-fw" style="font-size: 100px"></i></p>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="small text-white stretched-link" href="<?php echo e(route('users.index')); ?>" style="font-size: 18px"><?php echo e(App\User::all()->count()); ?></a>
                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="card bg-warning text-white mb-4">
                        <div class="card-body">Departments</div>
                        <p><i class="fas fa-home fa-fw" style="font-size: 100px"></i></p>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="small text-white stretched-link" href="<?php echo e(route('department.index')); ?>" style="font-size: 18px"><?php echo e(App\Department::all()->count()); ?></a>
                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="card bg-danger text-white mb-4">
                        <div class="card-body">Leaves</div>
                        <p><i class="fas fa-sign-out-alt fa-fw" style="font-size: 100px"></i></p>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="small text-white stretched-link" href="<?php echo e(route('leaves.index')); ?>" style="font-size: 18px"><?php echo e(App\Leave::all()->count()); ?></a>
                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="card bg-info text-white mb-4">
                        <div class="card-body">Projects</div>
                        <p><i class="fas fa-project-diagram" style="font-size: 100px"></i></p>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="small text-white stretched-link" href="<?php echo e(route('projects.index')); ?>" style="font-size: 18px"><?php echo e(App\project::all()->count()); ?></a>
                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </main>
<?php /**PATH C:\xampp\htdocs\EMS\Employee\resources\views/admin/layouts/content.blade.php ENDPATH**/ ?>