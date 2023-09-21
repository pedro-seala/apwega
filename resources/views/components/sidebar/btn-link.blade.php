<a
    {{ $attributes->merge([
        'class' => 'p-1 rounded-md cursor-pointer
                    hover:bg-indigo-200 text-indigo-500
                    text-center transition-all',
    ]) }}>

    {{ $slot }}
</a>
