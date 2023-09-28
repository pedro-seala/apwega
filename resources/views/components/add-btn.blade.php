<a
    {{ $attributes->merge([
        'class' => "bg-cyan-300 hover:bg-cyan-400 transition focus:ring-2
                    focus:ring-offset-2 focus:ring-bg-cyan-500 p-1 uppercase
                    rounded-md text-sm font-semibold",
    ]) }}>

    <i class="fa-regular fa-plus"></i>
    {{ __('Create') }}
</a>
