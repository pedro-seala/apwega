<x-app-layout>
    <x-layouts.card>

        <x-slot name="header">
            <h1 class="h1">
                <i class="fa-regular fa-bookmark"></i>
                {{ __('School plan') }}
            </h1>
        </x-slot>

        <x-slot name="content">
            <form action="{{ route('school-plans.update', $schoolPlan) }}"
                method="post" autocomplete="off">

                @method('patch')
                @include('config.schoolPlan.partials.form', ['schoolPlan' => $schoolPlan])
            </form>
        </x-slot>

    </x-layouts.card>
</x-app-layout>
