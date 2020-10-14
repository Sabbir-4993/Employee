

<?php $__env->startSection('content'); ?>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <?php if(Session::has('message')): ?>
                    <div class="alert alert-success">
                        <?php echo e(Session::get('message')); ?>

                    </div>
                <?php endif; ?>
                <form action="<?php echo e(route('permissions.update',[$permission->id])); ?>" method="POST" >
                    <?php echo csrf_field(); ?>
                    <?php echo e(method_field('PATCH')); ?>

                    <div class="card">
                        <div class="card-header"><?php echo e(__('Permission')); ?></div>
                        <div class="card-body">
                            <div class="form-group">

                                <h3><?php echo e($permission->role->name); ?></h3>
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
                                            <td><input type="checkbox" name="name[department][can-add]" <?php if(isset($permission['name']['department']['can-add'])): ?> checked <?php endif; ?> value="1"></td>
                                            <td><input type="checkbox" name="name[department][can-edit]" <?php if(isset($permission['name']['department']['can-edit'])): ?> checked <?php endif; ?> value="1"></td>
                                            <td><input type="checkbox" name="name[department][can-delete]" <?php if(isset($permission['name']['department']['can-delete'])): ?> checked <?php endif; ?> value="1"></td>
                                            <td><input type="checkbox" name="name[department][can-view]" <?php if(isset($permission['name']['department']['can-view'])): ?> checked <?php endif; ?> value="1"></td>
                                            <td><input type="checkbox" name="name[department][can-list]" <?php if(isset($permission['name']['department']['can-list'])): ?> checked <?php endif; ?> value="1"></td>
                                        </tr>
                                        <tr>
                                            <td>Role</td>
                                            <td><input type="checkbox" name="name[role][can-add]" <?php if(isset($permission['name']['role']['can-add'])): ?> checked <?php endif; ?> value="1"></td>
                                            <td><input type="checkbox" name="name[role][can-edit]" <?php if(isset($permission['name']['role']['can-edit'])): ?> checked <?php endif; ?> value="1"></td>
                                            <td><input type="checkbox" name="name[role][can-delete]" <?php if(isset($permission['name']['role']['can-delete'])): ?> checked <?php endif; ?> value="1"></td>
                                            <td><input type="checkbox" name="name[role][can-view]" <?php if(isset($permission['name']['role']['can-view'])): ?> checked <?php endif; ?> value="1"></td>
                                            <td><input type="checkbox" name="name[role][can-list]" <?php if(isset($permission['name']['role']['can-list'])): ?> checked <?php endif; ?> value="1"></td>
                                        </tr>
                                        <tr>
                                            <td>User</td>
                                            <td><input type="checkbox" name="name[user][can-add]" <?php if(isset($permission['name']['user']['can-add'])): ?> checked <?php endif; ?> value="1"></td>
                                            <td><input type="checkbox" name="name[user][can-edit]" <?php if(isset($permission['name']['user']['can-edit'])): ?> checked <?php endif; ?> value="1"></td>
                                            <td><input type="checkbox" name="name[user][can-delete]" <?php if(isset($permission['name']['user']['can-delete'])): ?> checked <?php endif; ?> value="1"></td>
                                            <td><input type="checkbox" name="name[user][can-view]" <?php if(isset($permission['name']['user']['can-view'])): ?> checked <?php endif; ?> value="1"></td>
                                            <td><input type="checkbox" name="name[user][can-list]" <?php if(isset($permission['name']['user']['can-list'])): ?> checked <?php endif; ?> value="1"></td>
                                        </tr>
                                        <tr>
                                            <td>Permission</td>
                                            <td><input type="checkbox" name="name[permission][can-add]" <?php if(isset($permission['name']['permission']['can-add'])): ?> checked <?php endif; ?> value="1"></td>
                                            <td><input type="checkbox" name="name[permission][can-edit]" <?php if(isset($permission['name']['permission']['can-edit'])): ?> checked <?php endif; ?> value="1"></td>
                                            <td><input type="checkbox" name="name[permission][can-delete]" <?php if(isset($permission['name']['permission']['can-delete'])): ?> checked <?php endif; ?> value="1"></td>
                                            <td><input type="checkbox" name="name[permission][can-view]" <?php if(isset($permission['name']['permission']['can-view'])): ?> checked <?php endif; ?> value="1"></td>
                                            <td><input type="checkbox" name="name[permission][can-list]" <?php if(isset($permission['name']['permission']['can-list'])): ?> checked <?php endif; ?> value="1"></td>
                                        </tr>
                                    </tbody>
                                </table>
                                <?php if(isset(auth()->user()->role->permission['name']['permission']['can-edit'])): ?>
                                    <button type="submit" class="btn btn-primary">Update</button>
                                <?php endif; ?>
                                <a href="<?php echo e(route('permissions.index')); ?>" class="float-right">Back</a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\EMS\Employee\resources\views/admin/permission/edit.blade.php ENDPATH**/ ?>