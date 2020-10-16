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
                        <li class="breadcrumb-item active" aria-current="page">All peoject</li>
                    </ol>
                </nav>
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>SN</th>
                        <th>Project Name</th>
                        <th>Address</th>
                        <th>Start Date</th>
                        <th>Status</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php if(
                        count($projects)>0
                        ): ?>

                        <?php $__currentLoopData = $projects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $project): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($key+1); ?></td>
                                <td class=""><?php echo e($project->project_name); ?></td>
                                <td class=""><?php echo e($project->address); ?></td>
                                <td><?php echo e($project->project_start); ?></td>
                                <td class="text-center"><span class="badge badge-success"><?php echo e($project->status); ?></span></td>
                                <td class="text-center">
                                    <?php if(isset(auth()->user()->role->permission['name']['project']['can-edit'])): ?>
                                        <a href="<?php echo e(route('projects.edit',[$project->id])); ?>"><i class="fas fa-edit"></i></a></td>
                                <?php endif; ?>
                                <td class="text-center">
                                    <?php if(isset(auth()->user()->role->permission['name']['project']['can-delete'])): ?>
                                        <a href="<?php echo e(route('projects.destroy',[$project->id])); ?>" data-toggle="modal" data-target="#exampleModal"><i class="fas fa-trash"></i></a>
                                <?php endif; ?>
                                <!-- Modal -->
                                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <form action="<?php echo e(route('projects.destroy',[$project->id])); ?>" method="post">
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

<?php echo $__env->make('admin.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Employee\resources\views/admin/project/index.blade.php ENDPATH**/ ?>