<div>
 
    <input  value="<?php echo e((old($attributes->get('name')) )); ?>"
    <?php echo e($attributes->merge([
        'class' => 'form-control ' . ($errors->has($attributes->get('name')) ? 'is-invalid' : '')
    ])); ?>

>
    <span class="text-danger" id="<?php echo e($errorName . '-error-' . $attributes->get('name')); ?>">
        <?php $__errorArgs = [$attributes->get('name')];
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
<?php /**PATH /home/vol2_8/infinityfree.com/if0_40043819/htdocs/laravel-crud/resources/views/components/input.blade.php ENDPATH**/ ?>