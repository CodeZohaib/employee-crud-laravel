<div class="form-group">
    <label for="<?php echo e($name); ?>"><?php echo e($label); ?></label>
    <input type="file"
           name="<?php echo e($name); ?>"
           id="<?php echo e($name); ?>"
           class="form-control <?php $__errorArgs = [$name];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
           accept="<?php echo e($accept); ?>"
           <?php echo e($required ? 'required' : ''); ?>

           <?php echo e($attributes); ?> />

  
        <div class="text-danger small" id="<?php echo e($errorName); ?>-error-<?php echo e($name); ?>"></div>
    
</div>
<?php /**PATH /home/vol2_8/infinityfree.com/if0_40043819/htdocs/laravel-crud/resources/views/components/file-upload.blade.php ENDPATH**/ ?>