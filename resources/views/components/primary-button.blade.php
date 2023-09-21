@props(['search' => false])

<button
    {{ $attributes->merge([
        'type' => 'submit',
        'class' => 'inline-flex items-center px-2 py-2 bg-indigo-600 border
            border-transparent rounded-md font-semibold text-xs
            text-white uppercase tracking-widest hover:bg-indigo-500
            focus:bg-indigo-700 active:bg-indigo-800 focus:outline-none
            focus:ring-2 focus:ring-indigo-700 focus:ring-offset-2
            transition ease-in-out duration-150'
    ]) }}>

    @if ($search)
        <i class="fa-solid fa-search"></i>
        <span class="ms-1">
            {{ __('Search') }}
        </span>
    @else
        <i class="fa-solid fa-save"></i>
        <span class="ms-1">
            {{ __('Save') }}
        </span>
    @endif
</button>
