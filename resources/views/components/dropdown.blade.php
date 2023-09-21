@props(['align' => 'right', 'width' => 'w-48'])

@php
    switch ($align) {
        case 'left':
            $alignment = 'origin-top-left left-0';
            break;
        case 'top':
            $alignment = 'origin-top';
            break;
        default:
            $alignment = 'origin-top-right right-0';
            break;
    }
@endphp

<div class="relative"
    x-data="{
        open: false,
        toggle() {
            this.open = ! this.open
        }
    }"

    @click.outside="open = false"
    @close.stop="open = false">

    <button {{ $trigger->attributes->merge([
        'class' => 'inline-flex items-center px-3 py-2 text-sm
                    font-medium leading-4 text-zinc-500 transition
                    duration-150 ease-in-out bg-white
                    border border-transparent rounded-md
                    hover:text-zinc-700 focus:outline-none'
    ]) }}
    x-on:click="toggle">

    <div class="inline-flex items-baseline">
        {{ $trigger }}
        <i class="fa-solid"
            :class="open ? 'fa-caret-up' : 'fa-caret-down'">
        </i>
    </div>
    </button>

    <div x-show="open"
            x-transition:enter="transition ease-out duration-200"
            x-transition:enter-start="opacity-0 scale-95"
            x-transition:enter-end="opacity-100 scale-100"
            x-transition:leave="transition ease-in duration-75"
            x-transition:leave-start="opacity-100 scale-100"
            x-transition:leave-end="opacity-0 scale-95"
            class="absolute z-50 mt-2 {{ $width }}
            rounded-md shadow-xl {{ $alignment }}"

            x-on:click="open = false" x-cloak>

        <div class="rounded-md ring-1 ring-black ring-opacity-5 py-1 bg-white">
            {{ $content }}
        </div>
    </div>
</div>
