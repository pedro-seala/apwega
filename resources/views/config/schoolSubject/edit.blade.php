<x-app-layout>
    <x-layouts.card>

        <x-slot name="header">
            <h1 class="h1">
                <i class="fa-solid fa-chalkboard-user"></i>
                {{ __('Subject') }}
            </h1>
        </x-slot>

        <x-slot name="content">
            <form action="{{ route('school-subjects.update', $schoolSubject) }}"
                method="post" autocomplete="off">

                @method('patch')
                @include('config.schoolSubject.partials.form', ['schoolSubject' => $schoolSubject])
            </form>
        </x-slot>

    </x-layouts.card>
</x-app-layout>
