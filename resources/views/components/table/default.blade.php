@props(['caption'])

<div {{ $attributes->merge(['class' => 'mb-2']) }}>
    <table class="w-full border-stone-300 text-indigo-700 ">
        @isset($caption)
            <caption class="mb-2 text-zinc-400 text-start">
                <i class="fa-regular fa-square"></i>
                {{ $caption }}
            </caption>
        @endisset

        <thead
            {{ $thead->attributes->merge([
                'class' => 'bg-gradient-to-l
                        from-indigo-200 via-indigo-100
                        to-indigo-200',
            ]) }}>

            {{ $thead }}
        </thead>

        <tbody>
            {{ $tbody }}
        </tbody>
    </table>
</div>
