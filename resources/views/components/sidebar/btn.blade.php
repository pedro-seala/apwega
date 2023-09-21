<button
    {{ $attributes->merge([
        'type' => 'button',

        'class' => 'focus:ring focus:ring-indigo-400
                    focus:bg-indigo-200 p-1 rounded-md transition-all
                    hover:bg-indigo-200 text-indigo-500
                    cursor-pointer text-center',
    ]) }}>

    {{ $slot }}
</button>
