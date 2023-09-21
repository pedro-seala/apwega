<x-app-layout>
    <x-layouts.card>

        <x-slot name="header">
            <h1 class="h1">
                <i class="fa-solid fa-school"></i>
                {{ __('School') }}
            </h1>
        </x-slot>

        <x-slot name="content">
            <form action="{{ route('schools.update', $school) }}"
                method="post" autocomplete="off">

                @method('patch')
                @include('config.school.partials.form', ['school' => $school])
            </form>
        </x-slot>

    </x-layouts.card>
</x-app-layout>
