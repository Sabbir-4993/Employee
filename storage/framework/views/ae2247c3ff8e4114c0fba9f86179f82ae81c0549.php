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
                <form action="<?php echo e(route('leaves.store')); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <div class="row justify-content-center">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header"><?php echo e(__('Create Leave')); ?></div>
                                <div class="card-body">

                                    <div class="form-group">
                                        <label for="">Form Date</label>
                                        <input type="text" name="form" class="form-control <?php $__errorArgs = ['form'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" placeholder="yy-mm-dd" required="" id="datepicker">
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
                                        <input type="text" name="to" class="form-control <?php $__errorArgs = ['form'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" placeholder="yy-mm-dd" required="" id="datepicker1">
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
                                        <label for="">Leave Reason</label>
                                        <select name="type" class="form-control" id="">
                                            <option value="">Select Leave Reason</option>
                                            <option value="annualleave">Annual Leave</option>
                                            <option value="sickleave">Sick Leave</option>
                                            <option value="casualleave">Casual Leave</option>
                                            <option value="other">Others Leave</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="">Description</label>
                                        <textarea name="description" class="form-control" placeholder="Details About Leave" id="" cols="10" rows="5"></textarea>
                                    </div>

                                    <br>
                                    <div class="form-group">
                                        <button class="btn btn-primary float-right" type="submit">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="mt-5">

            <table class="table">
                <thead class="thead-light">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Date Form</th>
                    <th scope="col">Date To</th>
                    <th scope="col">Type</th>
                    <th scope="col">Description</th>
                    <th scope="col">Replay</th>
                    <th scope="col">Status</th>
                    <th scope="col">Edit</th>
                    <th scope="col">Delete</th>
                </tr>
                </thead>
                <tbody>
                <?php $__currentLoopData = $leaves; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $leave): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <th scope="row"><?php echo e($leave->id); ?></th>
                    <td><?php echo e($leave->form); ?></td>
                    <td><?php echo e($leave->to); ?></td>
                    <td><?php echo e($leave->type); ?></td>
                    <td><?php echo e($leave->description); ?></td>
                    <td><?php echo e($leave->message); ?></td>
                    <td>
                        <?php if($leave->status==0): ?>
                            <span class="alert alert-danger">Pending</span>
                            <?php else: ?>
                            <span class="alert alert-success">Accept</span>
                        <?php endif; ?>
                    </td>
                    <td>
                        <a href="<?php echo e(route('leaves.edit',[$leave->id])); ?>"><i class="fas fa-edit"></i></a>
                    </td>
                    <td>
                        <a href="#" data-toggle="modal" data-target="#leaveModal<?php echo e($leave->id); ?>"><i class="fas fa-trash"></i></a>
                        <!-- Modal -->
                        <div class="modal fade" id="leaveModal<?php echo e($leave->id); ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <form action="<?php echo e(route('leaves.destroy',[$leave->id])); ?>" method="post">
                                    <?php echo csrf_field(); ?>
                                    <?php echo e(method_field('DELETE')); ?>


                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Delete Confirm!!</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            Do you Want to Delete ?
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-danger">Delete</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- Modal End -->
                    </td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>
    </div>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\EMS\Employee\resources\views/admin/leave/create.blade.php ENDPATH**/ ?>