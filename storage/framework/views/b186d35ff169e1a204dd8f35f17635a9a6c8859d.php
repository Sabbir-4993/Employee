<?php $__env->startSection('content'); ?>

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <?php if(Session::has('message')): ?>
                    <div class="alert alert-success">
                        <?php echo e(Session::get('message')); ?>

                    </div>
                <?php endif; ?>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo e(url('/')); ?>">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">All Users</li>
                    </ol>
                </nav>
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>SN</th>
                        <th>Photo</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Designation</th>
                        <th>Role</th>
                        <th>Department</th>
                        <th>Mobile</th>
                        <th>Address</th>
                        <th>Start Date</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php if(
                        count($users)>0
                        ): ?>

                        <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($key+1); ?></td>
                                <td><img src="<?php echo e(asset('profile')); ?>/<?php echo e($user->image); ?>" width="100" alt=""></td>
                                <td class="text-center"><?php echo e($user->name); ?></td>
                                <td class="text-center"><?php echo e($user->email); ?></td>
                                <td class="text-center"><span class="badge badge-success"><?php echo e($user->designation); ?></span></td>
                                <td class="text-center"><?php echo e($user->role->name ?? ''); ?></td>
                                <td class="text-center"><?php echo e($user->department->name ?? ''); ?></td>
                                <td class="text-center"><?php echo e($user->mobile_number); ?></td>
                                <td class="text-center"><?php echo e($user->address); ?></td>
                                <td><?php echo e($user->start_form); ?></td>
                                <td class="text-center"><a href="<?php echo e(route('users.edit',[$user->id])); ?>"><i class="fas fa-edit"></i></a></td>
                                <td class="text-center"><a href="#" data-toggle="modal" data-target="#exampleModal"><i class="fas fa-trash"></i></a>

                                    <!-- Modal -->
                                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <form action="<?php echo e(route('users.destroy',[$user->id])); ?>" method="post">
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
                    <?php else: ?>
                        <td>No User to Display</td>
                    <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\EMS\Employee\resources\views/admin/user/index.blade.php ENDPATH**/ ?>