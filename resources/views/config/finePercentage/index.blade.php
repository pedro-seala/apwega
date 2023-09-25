<x-app-layout>
    <x-layouts.card>

        <x-slot name="header">
            <div class="flex justify-between">
                <h1 class="h1">
                    <i class="fa-solid fa-percent"></i>
                    <span>{{ __('Fine percentage') }}</span>
                </h1>
            </div>
        </x-slot>

        <x-slot name="content">
            @if ($finePercentage->count())
                <form action="{{ route('fine-percentage.update', $finePercentage) }}" method="post">
                    @method('patch')
                    @include('config.finePercentage.partials.form', ['finePercentage' => $finePercentage])
                </form>
            @else
                <form action="{{ route('fine-percentage.store') }}" method="post">
                    @include('config.finePercentage.partials.form')
                </form>
            @endif
        </x-slot>

    </x-layouts.card>
</x-app-layout>
