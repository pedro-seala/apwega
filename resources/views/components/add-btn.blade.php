<a
    {{ $attributes->merge([
        'class' => "bg-white hover:bg-slate-50 transition focus:ring-2 focus:ring-offset-2
                    focus:ring-bg-slate-200 py-1 px-2 uppercase rounded-md text-sm
                    font-semibold border border-slate-300 text-slate-500 shadow-sm",
    ]) }}>

    <i class="fa-regular fa-plus"></i>
    {{ __('Create') }}
</a>
