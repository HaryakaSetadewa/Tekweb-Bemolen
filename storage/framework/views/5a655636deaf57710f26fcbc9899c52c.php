<?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.admin-layout','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('admin-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
    <div class="p-4">
        <div class="font-bold text-lg mb-4">
            <?php echo e($title); ?>

        </div>

        <form enctype="multipart/form-data" action="<?php echo e((isset($package))?route('adminpackage.update', $package->package_id):route('adminpackage.store')); ?>" method="POST" class="bg-white rounded-xl">
            <?php echo csrf_field(); ?>
            <?php if(isset($package)): ?><?php echo method_field('PUT'); ?><?php endif; ?>

            <div class="mb-4 mx-4 pt-4">
                <label for="package_code" class="block text-sm font-medium text-gray-600">Package Code</label>
                <input type="text" name="package_code" value="<?php echo e((isset($package))?$package->package_code:old('package_code')); ?>" placeholder="Package Code (P001)" required class="mt-1 p-2 w-full border rounded-md">
                <?php $__errorArgs = ['package_code'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <div class="text-xs text-red-800"><?php echo e($message); ?></div>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>

            <div class="mb-4 mx-4">
                <label for="package_name" class="block text-sm font-medium text-gray-600">Package Name</label>
                <input type="text" name="package_name" value="<?php echo e((isset($package))?$package->package_name:old('package_name')); ?>" placeholder="Package Name" required class="mt-1 p-2 w-full border rounded-md">
                <?php $__errorArgs = ['package_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <div class="text-xs text-red-800"><?php echo e($message); ?></div>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>

            <div class="mb-4 mx-4">
                <label for="package_desc" class="block text-sm font-medium text-gray-600">Deskripsi</label>
                <textarea name="package_desc" id="package_desc" cols="30" rows="2" class="w-full"><?php echo e((isset($package))?$package->package_desc:old('package_desc')); ?></textarea>
                <?php $__errorArgs = ['package_desc'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <div class="text-xs text-red-800"><?php echo e($message); ?></div>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>

            <div class="mb-4 mx-4">
                <label for="feature_img" class="block text-sm font-medium text-gray-600">Gambar</label>
                <input type="text" name="feature_img" value="<?php echo e((isset($package))?$package->feature_img:old('feature_img')); ?>" placeholder="Link Gambar" required class="mt-1 p-2 w-full border rounded-md">
                <!-- <input type="file" name="feature_img" id="feature_img" class="w-1/2">-->
                <?php $__errorArgs = ['feature_img'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <div class="text-xs text-red-800"><?php echo e($message); ?></div>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>

            <div class="mb-4 mx-4">
                <label for="comunity_id" class="block text-sm font-medium text-gray-600">Comunity Id</label>
                <select name="comunity_id" id="comunity_id" class="mt-1 p-2 w-full border rounded-md">
                    <option value="">Choose Comunity</option>
                    <?php $__currentLoopData = $comunities; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option 
                        <?php echo e(((isset($package)&&$package->comunity_id==$item->comunity_id) || old('comunity_id')==$item->comunity_id)?'selected':''); ?>

                        value="<?php echo e($item->comunity_id); ?>"> <?php echo e($item->comunity_name); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
                <?php $__errorArgs = ['comunity_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <div class="text-xs text-red-800"><?php echo e($message); ?></div>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>

            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md mx-4 mb-4">Save</button>
        </form>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?><?php /**PATH D:\CRUD LARAVEL\breeze\breeze\resources\views/backpage/inputpackage.blade.php ENDPATH**/ ?>