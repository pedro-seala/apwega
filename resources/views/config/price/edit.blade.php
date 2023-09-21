<x-app-layout>
    <x-layouts.card>

        <x-slot name="header">
            <h1 class="h1">
                <i class="fa-solid fa-money-bill"></i>
                {{ __('Price table') }}
            </h1>
        </x-slot>

        <x-slot name="content">
            <form action="{{ route('prices.update', [$price, 'entity' => $entity]) }}"
                method="post" autocomplete="off">

                @method('patch')
                @include('config.price.partials.form', ['price' => $price])
            </form>

        </x-slot>
    </x-layouts.card>

</x-app-layout>
