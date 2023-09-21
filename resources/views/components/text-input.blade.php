@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge([
    'class' => 'w-full border-indigo-300 focus:border-indigo-500
    focus:ring-indigo-500 rounded-md shadow-sm disabled:font-semibold
    disabled:bg-indigo-50 disabled:border-0 disabled:text-zinc-600',
]) !!}>
