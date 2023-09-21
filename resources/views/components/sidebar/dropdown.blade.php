<div
    {{ $attributes->merge([
        'class' => 'border rounded
            border-indigo-50 transition-all'
    ]) }}

    x-data="{
        open: false,

        toggle() {
            this.open = !this.open
        }
    }">

    <button type="button"
        {{ $trigger->attributes->merge([
            'class' => 'flex items-baseline rounded
                        justify-between w-full p-2 gap-x-3 transition-all
                        text-indigo-500 hover:text-indigo-700 focus:rounded
                        hover:bg-indigo-50 focus:ring focus:ring-indigo-400'
        ]) }}

        x-on:click="toggle()">

        <span class="font-semibold font-md">
            {{ $trigger }}
        </span>

        <i :class="open ? 'fa-solid fa-caret-down' : 'fa-solid fa-caret-up'"></i>
    </button>

    <div {{ $content->attributes->merge([
            'class' => 'text-sm font-semibold
                        rounded-md bg-zinc-50 ps-4'
        ]) }}

        x-show="open" x-cloak x-collapse>

        {{ $content }}
    </div>
</div>
