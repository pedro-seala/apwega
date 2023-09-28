<x-app-layout>
    <x-layouts.card>

        <x-slot name="header">
            <div class="flex justify-between">
                <h1 class="h1">
                    <i class="fa-solid fa-graduation-cap"></i>
                    <span>{{ __('Course') }}</span>
                </h1>

                <x-add-btn :href="route('courses.create')" />
            </div>
        </x-slot>

        <x-slot name="content">
            @if ($courses->count() > 0)
                <x-table.default caption="Lista de cursos">

                    <x-slot name="thead">
                        <tr>
                            <th>
                                <i class="fa-solid fa-calendar"></i>
                                Curso
                            </th>

                            <th>
                                <i class="fa-solid fa-cog"></i>
                                Opções
                            </th>
                        </tr>
                    </x-slot>

                    <x-slot name="tbody">
                        @foreach ($courses as $course)
                            <tr>
                                <td>
                                    {{ $course->name }}
                                </td>

                                <td class="space-x-4 text-center">

                                    <x-table.edit-btn
                                        :href="route('courses.edit', $course)" />

                                    <x-table.del-btn
                                        :action="route('courses.destroy', $course)" />

                                </td>
                            </tr>
                        @endforeach
                    </x-slot>

                </x-table.default>

                {{ $courses->links() }}
            @else
                <x-table.alert-info />
            @endif
        </x-slot>

    </x-layouts.card>
</x-app-layout>
