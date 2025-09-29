<div>
 
    <input  value="{{  (old($attributes->get('name')) ) }}"
    {{ $attributes->merge([
        'class' => 'form-control ' . ($errors->has($attributes->get('name')) ? 'is-invalid' : '')
    ]) }}
>
    <span class="text-danger" id="{{ $errorName . '-error-' . $attributes->get('name') }}">
        @error($attributes->get('name'))
            {{ $message }}
        @enderror 
    </span>

</div>
