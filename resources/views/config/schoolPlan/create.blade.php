<x-app-layout>
    <x-layouts.card>

        <x-slot name="header">
            <h1 class="h1">
                <i class="fa-regular fa-bookmark"></i>
                {{ __('School plan') }}
            </h1>
        </x-slot>

        <x-slot name="content">
            <form action="{{ route('school-plans.store') }}"
                method="post" autocomplete="off">

                @include('config.schoolPlan.partials.form')
            </form>
        </x-slot>

    </x-layouts.card>
</x-app-layout>
