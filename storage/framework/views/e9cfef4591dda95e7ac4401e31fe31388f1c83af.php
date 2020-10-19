<?php $__env->startSection('content'); ?>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <?php if(Session::has('message')): ?>
                    <div class="alert alert-success">
                        <?php echo e(Session::get('message')); ?>

                    </div>
                <?php endif; ?>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">All Notices</li>
                    </ol>
                </nav>
                <?php if(count($notices) > 0): ?>
                    <?php $__currentLoopData = $notices; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $notice): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="card alert alert-info">
                        <div class="card-header alert alert-warning"><?php echo e($notice->title); ?></div>
                        <div class="card-body">
                            <p><?php echo e($notice->description); ?></p>
                            <p class="badge badge-success">Date: <?php echo e($notice->date); ?></p>
                            <p class="badge badge-warning float-right">Created By: <?php echo e($notice->name); ?></p>
                        </div>

                        <?php if(isset(auth()->user()->role->permission['name']['notice']['can-view'])): ?>
                        <div class="card-footer">
                            <?php if(isset(auth()->user()->role->permission['name']['notice']['can-edit'])): ?>
                                <a href="<?php echo e(route('notices.edit',[$notice->id])); ?>"><i class="fas fa-edit"></i></a>
                            <?php endif; ?>
                            <?php if(isset(auth()->user()->role->permission['name']['notice']['can-delete'])): ?>
                                <span class="float-right"><a href="#" data-toggle="modal" data-target="#exampleModal<?php echo e($notice->id); ?>"><i class="fas fa-trash"></i></a></span>
                            <?php endif; ?>
                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal<?php echo e($notice->id); ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <form action="<?php echo e(route('notices.destroy',[$notice->id])); ?>" method="post">
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
                        </div>
                        <?php endif; ?>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php else: ?>
                    <p>No Notices Found!!</p>
                <?php endif; ?>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\EMS\Employee\resources\views/admin/notice/index.blade.php ENDPATH**/ ?>