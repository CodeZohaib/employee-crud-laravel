
<div class="mb-4">
    <?php if($label): ?>
        <label for="<?php echo e($name); ?>" class="block text-sm font-medium mb-1">
            <?php echo e($label); ?>

        </label>
    <?php endif; ?>

    <select name="<?php echo e($name); ?>" id="<?php echo e($name); ?>" 
        <?php echo e($attributes->merge(['class' => 'form-control ' . ($errors->has($name) ? 'is-invalid' : '')])); ?>>
        <option value="">Select <?php echo e($label); ?></option>

        <?php $__currentLoopData = $options; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $option): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <option value="<?php echo e($option); ?>" 
                <?php echo e(old($name, $selected) === $option ? 'selected' : ''); ?>>
                <?php echo e($option); ?>

            </option>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </select>

    <span class="text-danger" id="<?php echo e($errorName); ?>-error-<?php echo e($name); ?>">
        <?php $__errorArgs = [$name];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <?php echo e($message); ?>

        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> 
    </span>
</div>
<?php /**PATH /home/vol2_8/infinityfree.com/if0_40043819/htdocs/laravel-crud/resources/views/components/select-field.blade.php ENDPATH**/ ?>