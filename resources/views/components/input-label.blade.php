@props(['value'])

<label
    {{ $attributes->merge([
        'class' => 'mb-4 block font-medium
            text-indigo-500 text-sm'
    ]) }}>

    {{ $value ?? $slot }}
</label>
