<div class="form-group">
    <label for="{{ $name }}">{{ $label }}</label>
    <input type="file"
           name="{{ $name }}"
           id="{{ $name }}"
           class="form-control @error($name) is-invalid @enderror"
           accept="{{ $accept }}"
           {{ $required ? 'required' : '' }}
           {{ $attributes }} />

  
        <div class="text-danger small" id="{{ $errorName }}-error-{{ $name}}"></div>
    
</div>
