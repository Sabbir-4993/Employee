<?php $__env->startSection('content'); ?>

    <div class="container mt-5" xmlns="http://www.w3.org/1999/html">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active">
                    Register Employee
                </li>
            </ol>
        </nav>
        <?php if(Session::has('message')): ?>
            <div class="alert alert-success">
                <?php echo e(Session::get('message')); ?>

            </div>
            <?php endif; ?>
        <form action="<?php echo e(route('users.store')); ?>" method="post" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>

        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header"> General Information</div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="">First Name</label>
                            <input type="text" name="firstname" class="form-control" required="">
                        </div>
                        <div class="form-group">
                            <label for="">Last Name</label>
                            <input type="text" name="lastname" class="form-control" required="">
                        </div>
                        <div class="form-group">
                            <label for="">Mobile Number</label>
                            <input type="text" name="mobile_number" class="form-control" required="">
                        </div>
                        <div class="form-group">
                            <label for="">Department</label>
                            <select name="department_id" id="" required="">
                                <?php $__currentLoopData = App\Department::all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $department): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($department->id); ?>"><?php echo e($department->name); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Start Date</label>
                            <input type="date" name="start_date" class="form-control" placeholder="dd-mm-yyyy" required="">
                        </div>
                        <div class="form-group">
                            <label for="">Image</label>
                            <input type="file" name="image" class="form-control" accept="image/*" required="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card">
                    <div class="card-header">Login Information</div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="">Email</label>
                            <input type="email" name="email" class="form-control" required="">
                        </div>
                        <div class="form-group">
                            <label for="">Password</label>
                            <input type="password" name="password" class="form-control" required="">
                        </div>
                        <div class="form-group">
                            <label for="">Role</label>
                            <select class="form-control" name="role_id" id="" required="">

                                <?php $__currentLoopData = App\Role::all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($role->id); ?>"><?php echo e($role->name); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                            </select>
                        </div>
                    </div>
                </div><br>

                <div class="form-group">
                    <button class="btn btn-primary" type="submit">Submit</button>
                </div>
            </div>


        </div>
        </form>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\EMS\Employee\resources\views/admin/user/create.blade.php ENDPATH**/ ?>