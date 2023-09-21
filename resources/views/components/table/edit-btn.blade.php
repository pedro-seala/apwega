@props(['add' => false])

@php
    if ($add) {
        $text_size = 'sm';
    } else {
        $text_size = 'xs';
    }
@endphp

<a
    {{ $attributes->merge([
        'class' => "bg-cyan-300 hover:bg-cyan-400 transition focus:ring-2
                    focus:ring-offset-2 focus:ring-bg-cyan-500 p-1 uppercase
                    rounded-md text-$text_size font-semibold",
    ]) }}>

    @if ($add)
        <i class="fa-regular fa-plus"></i>
        <span class="ps-1">
            {{ __('Create') }}
        </span>
    @else
        <i class="fa-solid fa-edit"></i>
        {{ __('Edit') }}
    @endif
</a>
