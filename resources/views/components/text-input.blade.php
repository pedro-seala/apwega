@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge([
    'class' => 'w-full border-indigo-300 focus:border-indigo-500
    focus:ring-indigo-500 rounded-md shadow-sm disabled:font-semibold
    disabled:bg-gray-50 disabled:border-gray-300 disabled:text-gray-600'
]) !!}>
