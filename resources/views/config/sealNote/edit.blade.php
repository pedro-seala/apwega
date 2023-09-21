<x-app-layout>
    <x-layouts.card>

        <x-slot name="header" class="flex justify-between">
            <h1 class="h1">
                <i class="fa-solid fa-calendar"></i>
                {{ __('Seal note') }}
            </h1>
        </x-slot>

        <x-slot name="content">
            <form action="{{ route('seal-notes.update', $sealNote) }}"
                method="post" autocomplete="off">

                @method('patch')
                @include('config.sealNote.partials.form', ['sealNote' => $sealNote])
            </form>
        </x-slot>

    </x-layouts.card>
</x-app-layout>
