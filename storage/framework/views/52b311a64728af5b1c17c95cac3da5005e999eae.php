<?php $__env->startSection('content'); ?>

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <?php if(Session::has('message')): ?>
                    <div class="alert alert-success">
                        <?php echo e(Session::get('message')); ?>

                    </div>
                <?php endif; ?>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo e(url('/')); ?>">Home</a></li>
                        <li class="breadcrumb-item"><a href="<?php echo e(url('leaves')); ?>">Leave</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Leave Form</li>
                    </ol>
                </nav>
                <form action="<?php echo e(route('leave.store')); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <div class="row justify-content-center">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header"><?php echo e(__('Create Leave')); ?></div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="">Form Date</label>
                                        <input type="text" name="form" id="datepicker" class="form-control" required="">
                                        <?php $__errorArgs = ['form'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <span class="invalid-feedback" role="alert">
                                                <strong><?php echo e($message); ?></strong>
                                            </span>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>

                                    <div class="form-group">
                                        <label for="">To Date</label>
                                        <input type="text" name="to" id="datepicker1" class="form-control" required="">
                                        <?php $__errorArgs = ['to'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <span class="invalid-feedback" role="alert">
                                                <strong><?php echo e($message); ?></strong>
                                            </span>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>

                                    <div class="form-group">
                                        <label for="">Type to Leave</label>
                                        <select class="form-control" name="" id="" required="">

                                            <option value="annualleave">Annual Leave</option>
                                            <option value="sickleave">Sick Leave</option>
                                            <option value="casualleave">Casual Leave</option>
                                            <option value="othersleave">Other Leave</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="">Description</label>
                                        <textarea name="description" class="form-control" id="" cols="30" rows="10"></textarea>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="form-group">
                                <button class="btn btn-primary float-right" type="submit">Submit</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>




<?php echo $__env->make('admin.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Employee\resources\views/admin/leave/create.blade.php ENDPATH**/ ?>