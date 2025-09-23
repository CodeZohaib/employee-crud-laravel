<div class="mb-4">
    @if($label)
        <label for="{{ $name }}" class="block text-sm font-medium mb-1">
            {{ $label }}
        </label>
    @endif

    <select name="{{ $name }}" id="{{ $name }}" 
        {{ $attributes->merge(['class' => 'form-control']) }}>
        <option value="">Select {{ $label }}</option>

        @foreach($options as $option)
            <option value="{{ $option }}" 
                {{ old($name, $selected) === $option ? 'selected' : '' }}>
                {{ $option }}
            </option>
        @endforeach
    </select>

    @error($name)
        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
    @enderror
</div>
