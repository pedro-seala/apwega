<x-app-layout>
    <x-layouts.card>

        <x-slot name="header">
            <h1 class="h1">
                {{ __('Create') }}
            </h1>
        </x-slot>

        <x-slot name="content">
            <form action="{{ route('schools.store') }}"
                method="post" autocomplete="off">

                @include('config.school.partials.form')
            </form>
        </x-slot>

    </x-layouts.card>
</x-app-layout>
