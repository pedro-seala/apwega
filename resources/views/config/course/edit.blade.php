<x-app-layout>
    <x-layouts.card>

        <x-slot name="header">
            <h1 class="h1">
                <i class="fa-solid fa-graduation-cap"></i>
                {{ __('Course') }}
            </h1>
        </x-slot>

        <x-slot name="content">
            <form action="{{ route('courses.update', $course) }}"
                method="post" autocomplete="off">

                @method('patch')
                @include('config.course.partials.form', ['course' => $course])
            </form>
        </x-slot>
    </x-layouts.card>

</x-app-layout>
