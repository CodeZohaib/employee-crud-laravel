@props([
    'name',
    'label' => null,
    'value' => null,
    'placeholder' => '',
    'rows' => 2,
    'required' => false,
])

<div class="mb-4">
    @if($label)
        <label for="{{ $name }}" class="block text-sm font-medium mb-1">
            {{ $label }}
        </label>
    @endif

    <textarea
        name="{{ $name }}"
        id="{{ $name }}"
        rows="{{ $rows }}"
        placeholder="{{ $placeholder }}"
        {{ $required ? 'required' : '' }}
        {{ $attributes->merge(['class' => 'form-control ' . ($errors->has($name) ? 'is-invalid' : '')]) }}
    >{{ old($name, $value) }}</textarea>

    @if($errors->has($name))
        <div class="text-danger small mt-1">
            {{ $errors->first($name) }}
        </div>
    @endif
</div>
