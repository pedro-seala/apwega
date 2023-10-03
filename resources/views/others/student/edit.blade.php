<x-app-layout>
    <x-layouts.card>

        <x-slot name="header">
            <h1 class="h1">
                <i class="fa-solid fa-user"></i>
                {{ __('Students') }}
            </h1>
        </x-slot>

        <x-slot name="content">
            <form action="{{ route('students.update', $student) }}"
                method="post" autocomplete="off">

                @method('patch')
                @include('others.student.partials.form', ['student' => $student])
            </form>
        </x-slot>

    </x-layouts.card>
</x-app-layout>
