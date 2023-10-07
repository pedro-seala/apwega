<a
    {{ $attributes->merge([
        'class' => "bg-white transition focus:ring-2 focus:ring-offset-2
                    focus:ring-bg-gray-400 py-1 px-2 uppercase rounded-md
                    text-xs font-semibold shadow-sm"
    ]) }}>

    <i class="fa-solid fa-print"></i>
    {{ __('Print') }}
</a>
