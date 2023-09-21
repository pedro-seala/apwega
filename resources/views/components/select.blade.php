<select
    {{ $attributes->merge([
        'class' => 'border-indigo-300
            focus:border-indigo-500
            focus:ring-indigo-500
            rounded-md shadow-sm'
    ]) }}>

    {{ $slot }}
</select>
