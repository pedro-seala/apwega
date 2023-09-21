<div class="mx-auto max-w-7xl sm:px-6 lg:px-8 pt-2">
    <div class="shadow-md sm:rounded-lg">
        <div
            {{ $header->attributes->merge([
                'class' => 'bg-gradient-to-r
                            from-indigo-50 via-zinc-50 to-indigo-50
                            border-b p-4',
            ]) }}>

            {{ $header }}
        </div>

        <div {{ $content
                ->attributes
                ->merge(['class' => 'p-6 bg-white']) }}>

            {{ $content }}
        </div>
    </div>
</div>
