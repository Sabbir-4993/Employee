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
                        <li class="breadcrumb-item"><a href="<?php echo e(url('/')); ?>">Home</a></li>
                        <li class="breadcrumb-item"><a href="<?php echo e(url('users')); ?>">Requisition</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Create Requisition</li>
                    </ol>
                </nav>
                <form action="<?php echo e(route('requisitions.store')); ?>" method="POST" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <div class="mt-3 row justify-content-center">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header"><?php echo e(__('Requisition Details')); ?></div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <div class="form-group">
                                            <select class="form-control" name="project_name" id="" >
                                                <option value="">Select Project</option>

                                                <?php $__currentLoopData = \App\project::all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $project): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <option value="<?php echo e($project->id); ?>"><?php echo e($project->project_name); ?></option>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </select>
                                        </div>
                                        <table class="table table-bordered">
                                            <thead>
                                            <tr>
                                                <th scope="col">Description of Particulars</th>
                                                <th scope="col">Qnty</th>
                                                <th scope="col">Unit</th>
                                                <th scope="col">Remarks</th>
                                                <th><a href="#" class="btn btn-primary addRow" id="addRow"><i class="fa fa-plus-square"></i></a></th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td><input name="particular[]" class="form-control" type="text" ></td>
                                                <td><input name="quantity[]" class="form-control" type="number" ></td>
                                                <td><input name="unit[]" class="form-control" type="text" ></td>
                                                <td><input name="remarks[]" class="form-control" type="text" ></td>
                                                <td><a href="#" class="btn btn-danger remove" id="remove"><i class="fa fa-trash"></i></a></td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="form-group mb-5">
                        <button class="btn btn-primary float-right" type="submit">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>





<?php echo $__env->make('admin.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\EMS\Employee\resources\views/admin/requisition/create.blade.php ENDPATH**/ ?>