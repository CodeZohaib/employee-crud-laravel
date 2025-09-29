<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames(([
    'name',
    'label' => null,
    'value' => null,
    'placeholder' => '',
    'rows' => 2,
    'required' => false,
    'errorName' => null,
]));

foreach ($attributes->all() as $__key => $__value) {
    if (in_array($__key, $__propNames)) {
        $$__key = $$__key ?? $__value;
    } else {
        $__newAttributes[$__key] = $__value;
    }
}

$attributes = new \Illuminate\View\ComponentAttributeBag($__newAttributes);

unset($__propNames);
unset($__newAttributes);

foreach (array_filter(([
    'name',
    'label' => null,
    'value' => null,
    'placeholder' => '',
    'rows' => 2,
    'required' => false,
    'errorName' => null,
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars, $__key, $__value); ?>

<div class="mb-4">
    <?php if($label): ?>
        <label for="<?php echo e($name); ?>" class="block text-sm font-medium mb-1">
            <?php echo e($label); ?>

        </label>
    <?php endif; ?>

    <textarea
        name="<?php echo e($name); ?>"
        id="<?php echo e($name); ?>"
        rows="<?php echo e($rows); ?>"
        placeholder="<?php echo e($placeholder); ?>"
        <?php echo e($required ? 'required' : ''); ?>

        <?php echo e($attributes->merge(['class' => 'form-control ' . ($errors->has($name) ? 'is-invalid' : '')])); ?>

    ><?php echo e(old($name, $value)); ?></textarea>

   
        <div class="text-danger small mt-1" id="<?php echo e($errorName); ?>-error-<?php echo e($name); ?>">
             <?php if($errors->has($name)): ?>
               <?php echo e($errors->first($name)); ?>

             <?php endif; ?>
        </div>
   
</div>
<?php /**PATH /home/vol2_8/infinityfree.com/if0_40043819/htdocs/laravel-crud/resources/views/components/textarea.blade.php ENDPATH**/ ?>