<div class="form-group">
    @if($label)
        <label>{{ $label }}</label><br>
    @endif

    @php
        // Agar selected value nahi mili to first option ko default select kar do
        $selectedValue = old($name, $selected ?? ($options[0] ?? null));
    @endphp

    @foreach($options as $option)
        <div class="form-check form-check-inline">
            <input type="radio"
                   name="{{ $name }}"
                   id="{{ strtolower($option) }}"
                   value="{{ $option }}"
                   class="form-check-input {{ $errors->has($name) ? 'is-invalid' : '' }}"
                   {{ $selectedValue === $option ? 'checked' : '' }}>
            <label class="form-check-label" for="{{ strtolower($option) }}">
                &nbsp;&nbsp;{{ $option }}
            </label>
        </div>
    @endforeach

    {{-- Error message ko sirf ek dafa show karo --}}
    @if($errors->has($name))
        <span class="text-danger d-block">
            {{ $errors->first($name) }}
        </span>
    @endif
</div>
