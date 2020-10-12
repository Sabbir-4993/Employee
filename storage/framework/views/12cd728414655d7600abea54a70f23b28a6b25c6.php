<?php $__env->startSection('content'); ?>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <?php if(Session::has('message')): ?>
                    <div class="alert alert-success">
                        <?php echo e(Session::get('message')); ?>

                    </div>
                <?php endif; ?>
                <form action="<?php echo e(route('permissions.store')); ?>" method="POST" >
                    <?php echo csrf_field(); ?>
                    <div class="card">
                        <div class="card-header"><?php echo e(__('Permission')); ?></div>

                        <div class="card-body">
                            <div class="form-group">

                                <select name="role_id" class="form-control <?php $__errorArgs = ['role_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="" required="">
                                    <option value="">Select Role</option>

                                    <?php $__currentLoopData = App\Role::all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($role->id); ?>"><?php echo e($role->name); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                    <?php $__errorArgs = ['role_id'];
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
                                </select>
                                <table class="table table-striped table-dark mt-3">
                                    <thead>
                                        <tr>
                                            <th scope="col">Permission</th>
                                            <th scope="col">can-add</th>
                                            <th scope="col">can-edit</th>
                                            <th scope="col">can-delete</th>
                                            <th scope="col">can-view</th>
                                            <th scope="col">can-list</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Department</td>
                                            <td><input type="checkbox" name="name[department][can-add]" value="1"></td>
                                            <td><input type="checkbox" name="name[department][can-edit]" value="1"></td>
                                            <td><input type="checkbox" name="name[department][can-delete]" value="1"></td>
                                            <td><input type="checkbox" name="name[department][can-view]" value="1"></td>
                                            <td><input type="checkbox" name="name[department][can-list]" value="1"></td>
                                        </tr>
                                        <tr>
                                            <td>Role</td>
                                            <td><input type="checkbox" name="name[role][can-add]" value="1"></td>
                                            <td><input type="checkbox" name="name[role][can-edit]" value="1"></td>
                                            <td><input type="checkbox" name="name[role][can-delete]" value="1"></td>
                                            <td><input type="checkbox" name="name[role][can-view]" value="1"></td>
                                            <td><input type="checkbox" name="name[role][can-list]" value="1"></td>
                                        </tr>
                                        <tr>
                                            <td>User</td>
                                            <td><input type="checkbox" name="name[user][can-add]" value="1"></td>
                                            <td><input type="checkbox" name="name[user][can-edit]" value="1"></td>
                                            <td><input type="checkbox" name="name[user][can-delete]" value="1"></td>
                                            <td><input type="checkbox" name="name[user][can-view]" value="1"></td>
                                            <td><input type="checkbox" name="name[user][can-list]" value="1"></td>
                                        </tr>
                                        <tr>
                                            <td>Permission</td>
                                            <td><input type="checkbox" name="name[permission][can-add]" value="1"></td>
                                            <td><input type="checkbox" name="name[permission][can-edit]" value="1"></td>
                                            <td><input type="checkbox" name="name[permission][can-delete]" value="1"></td>
                                            <td><input type="checkbox" name="name[permission][can-view]" value="1"></td>
                                            <td><input type="checkbox" name="name[permission][can-list]" value="1"></td>
                                        </tr>
                                    </tbody>
                                </table>
                                <button type="submit" class="btn btn-primary">Submit</button>
                                <a href="<?php echo e(route('permissions.index')); ?>" class="float-right">Back</a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\EMS\Employee\resources\views/admin/permission/create.blade.php ENDPATH**/ ?>