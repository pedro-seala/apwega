<x-app-layout>
    <x-layouts.card>

        <x-slot name="header">
            <h1 class="h1">
                <i class="fa-solid fa-calendar-day"></i>
                {{ __('School year') }}
            </h1>
        </x-slot>

        <x-slot name="content">
            <form action="{{ route('school-years.update', $schoolYear) }}"
                method="post" autocomplete="off">

                @method('patch')
                @include('config.schoolYear.partials.form', ['schoolYear' => $schoolYear])
            </form>
        </x-slot>

    </x-layouts.card>
</x-app-layout>
