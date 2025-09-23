@props(['name', 'label', 'options' => [], 'selected' => null])

<div class="mb-4">
    @if($label)
        <label for="{{ $name }}" class="block text-sm font-medium mb-1">
            {{ $label }}
        </label>
    @endif

    <select name="{{ $name }}" id="{{ $name }}" 
        {{ $attributes->merge(['class' => 'form-control ' . ($errors->has($name) ? 'is-invalid' : '')]) }}>
        <option value="">Select {{ $label }}</option>

        @foreach($options as $option)
            <option value="{{ $option }}" 
                {{ old($name, $selected) === $option ? 'selected' : '' }}>
                {{ $option }}
            </option>
        @endforeach
    </select>

    <span class="text-danger">
        @error($name)
            {{ $message }}
        @enderror 
    </span>
</div>
