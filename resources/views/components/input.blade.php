<div>
    <input 
    {{ $attributes->merge([
        'class' => 'form-control ' . ($errors->has($attributes->get('name')) ? 'is-invalid' : '')
    ]) }}
>
    <span class="text-danger">
        @error($attributes->get('name'))
            {{ $message }}
        @enderror 
    </span>
</div>
