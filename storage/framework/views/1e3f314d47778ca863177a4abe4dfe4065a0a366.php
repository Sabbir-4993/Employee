

<?php $__env->startSection('content'); ?>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header"><?php echo e(__('Leave Approval')); ?></div>

                    <div class="card-body">
                        <table class="table">
                            <thead class="thead-light">
                            <tr>
                                <th scope="col">S/N</th>
                                <th scope="col">name</th>
                                <th scope="col">Date Form</th>
                                <th scope="col">Date To</th>
                                <th scope="col">Type</th>
                                <th scope="col">Description</th>
                                <th scope="col">Replay</th>
                                <th scope="col">Status</th>
                                <th scope="col">Approve/Reject</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php $__currentLoopData = $leaves; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $leave): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <th scope="row"><?php echo e($leave->id); ?></th>
                                    <th><?php echo e($leave->user->name); ?></th>
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
                                        <a href="#" data-toggle="modal" data-target="#leaveModal<?php echo e($leave->id); ?>">
                                            Accept/Reject
                                        </a>
                                        <!-- Modal -->
                                        <div class="modal fade" id="leaveModal<?php echo e($leave->id); ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <form action="<?php echo e(route('accept.reject',[$leave->id])); ?>" method="post">
                                                    <?php echo csrf_field(); ?>

                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">Leave Confirmation!!</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="form-group">
                                                                <label for="">Status</label>
                                                                <select name="status" class="form-control" id="">
                                                                    <option value="0">Pending</option>
                                                                    <option value="1">Accept</option>
                                                                </select>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="">Message</label>
                                                                <textarea name="message" class="form-control" placeholder="Message" id="" cols="5" rows="2" required=""></textarea>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                            <button type="submit" class="btn btn-success">Update</button>
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
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Employee\resources\views/admin/leave/index.blade.php ENDPATH**/ ?>