<a
    {{ $attributes->merge([
        'class' => 'p-2 ps-3 text-indigo-500
            hover:text-indigo-700 hover:bg-indigo-50
            block cursor-pointer transition-all'
    ]) }}>

    {{ $slot }}
</a>
