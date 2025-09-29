<div class="form-group">
    <?php if($label): ?>
        <label><?php echo e($label); ?></label><br>
    <?php endif; ?>

    <?php
        // Agar selected value nahi mili to first option ko default select kar do
        $selectedValue = old($name, $selected ?? ($options[0] ?? null));
    ?>

    <?php $__currentLoopData = $options; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $option): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="form-check form-check-inline">
            <input type="radio"
                   name="<?php echo e($name); ?>"
                   id="<?php echo e(strtolower($option)); ?>"
                   value="<?php echo e($option); ?>"
                   class="form-check-input <?php echo e($errors->has($name) ? 'is-invalid' : ''); ?>"
                   <?php echo e($selectedValue === $option ? 'checked' : ''); ?>>
            <label class="form-check-label" for="<?php echo e(strtolower($option)); ?>">
                &nbsp;&nbsp;<?php echo e($option); ?>

            </label>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    
    <?php if($errors->has($name)): ?>
        <span class="text-danger d-block" id="<?php echo e($errorName); ?>-error-<?php echo e($name); ?>">
            <?php echo e($errors->first($name)); ?>

        </span>
    <?php endif; ?>
</div>
<?php /**PATH /home/vol2_8/infinityfree.com/if0_40043819/htdocs/laravel-crud/resources/views/components/radio-group.blade.php ENDPATH**/ ?>