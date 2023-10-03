<x-app-layout>
    <x-layouts.card>

        <x-slot name="header">
            <h1 class="h1">
                <i class="fa-solid fa-graduation-cap"></i>
                {{ __('Courses') }}
            </h1>
        </x-slot>

        <x-slot name="content">
            <form action="{{ route('courses.store') }}"
                method="post" autocomplete="off">

                @include('config.course.partials.form')
            </form>
        </x-slot>

    </x-layouts.card>

    <x-layouts.card>
        <x-slot name="header" class="hidden">
        </x-slot>

        <x-slot name="content">
            <x-table.light>

                <x-slot name="thead">
                    <tr>
                        <th>
                            <i class="fa-solid fa-graduation-cap"></i>
                            Cursos
                        </th>
                    </tr>
                </x-slot>

                <x-slot name="tbody">
                    @foreach ($courses as $course)
                        <tr class="tbody-row">
                            <td>
                                {{ $course->name }}
                            </td>
                        </tr>
                    @endforeach
                </x-slot>

            </x-table.light>
        </x-slot>

    </x-layouts.card>
</x-app-layout>
