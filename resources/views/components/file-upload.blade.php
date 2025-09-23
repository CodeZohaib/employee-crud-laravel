<div class="form-group">
    <label for="{{ $name }}">{{ $label }}</label>
    <input type="file"
           name="{{ $name }}"
           id="{{ $name }}"
           class="form-control @error($name) is-invalid @enderror"
           accept="{{ $accept }}"
           {{ $required ? 'required' : '' }}
           {{ $attributes }} />

    @error($name)
        <div class="text-danger small">{{ $message }}</div>
    @enderror
</div>
