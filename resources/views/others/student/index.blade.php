<x-app-layout>
    <x-layouts.card>

        <x-slot name="header" class="flex justify-between">
            <h1 class="h1">
                <i class="fa-solid fa-user"></i>
                <span>{{ __('Student') }}</span>
            </h1>

            <x-add-btn :href="route('students.create')" />
        </x-slot>

        <x-slot name="content">
            @if ($students->count() > 0)
                <x-table.default caption="Lista de alunos">
                    <x-slot name="thead">
                        <tr>
                            <th>
                                <i class="fa-solid fa-vcard"></i>
                                Nº do processo
                            </th>

                            <th>
                                <i class="fa-solid fa-user"></i>
                                Nome
                            </th>

                            <th>
                                <i class="fa-solid fa-cog"></i>
                                Opções
                            </th>
                        </tr>
                    </x-slot>

                    <x-slot name="tbody">
                        @foreach ($students as $student)
                            <tr>
                                <td>
                                    {{ $student->processNb }}
                                </td>

                                <td>
                                    {{ $student->name }}
                                </td>

                                <td class="cog">
                                    <x-table.edit-btn
                                        :href="route('students.edit', $student)" />

                                    <x-table.del-btn
                                        :action="route('students.destroy', $student)" />
                                </td>
                            </tr>
                        @endforeach
                    </x-slot>

                </x-table.default>

                {{ $students->links() }}
            @else
                <x-table.alert-info />
            @endif
        </x-slot>

    </x-layouts.card>
</x-app-layout>
