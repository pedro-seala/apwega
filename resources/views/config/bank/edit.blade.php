<x-app-layout>
    <x-layouts.card>

        <x-slot name="header">
            <h1 class="h1">
                <i class="fa-solid fa-building-columns"></i>
                {{ __('Bank') }}
            </h1>
        </x-slot>

        <x-slot name="content">
            <form action="{{ route('banks.update', $bank) }}"
                method="post" autocomplete="off">

                @method('patch')
                @include('config.bank.partials.form', ['bank' => $bank])
            </form>
        </x-slot>

    </x-layouts.card>
</x-app-layout>
