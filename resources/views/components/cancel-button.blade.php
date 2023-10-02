@props(['title'])

<button
    {{ $attributes->merge([
        'type' => 'button',
        'class' => 'inline-flex items-center px-2 py-2 bg-violet-500
                    rounded-md font-semibold text-xs text-white
                    uppercase tracking-widest hover:bg-violet-600
                    focus:bg-violet-600 active:bg-violet-600
                    focus:outline-none focus:ring-2 focus:ring-violet-400
                    focus:ring-offset-2 transition ease-in-out duration-150',

        'onclick' => 'history.go(-1)'
    ]) }}>

    <i class="fa-solid fa-square-caret-left me-1"></i>
    {{ $title ?? __('Cancel') }}
</button>
