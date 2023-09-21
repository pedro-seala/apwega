<x-app-layout>
    <x-layouts.card>

        <x-slot name="header">
            <h1 class="h1">
                <i class="fa-solid fa-chalkboard-user"></i>
                {{ __('Subject') }}
            </h1>
        </x-slot>

        <x-slot name="content">
            <form action="{{ route('school-subjects.store') }}"
                method="post" autocomplete="off">

                @include('config.schoolSubject.partials.form')
            </form>
        </x-slot>

    </x-layouts.card>

    <x-layouts.card>
        <x-slot name="header" class="hidden">
        </x-slot>

        <x-slot name="content">
            <x-table.default caption="Recentemente registadas">
                <x-slot name="thead">
                    <tr>
                        <th>
                            <i class="fa-solid fa-chalkboard-user"></i>
                            Nome
                        </th>

                        <th>
                            <i class="fa-regular fa-circle"></i>
                            Abreviatura
                        </th>

                        <th>
                            <i class="fa-regular fa-square"></i>
                            Estado
                        </th>
                    </tr>
                </x-slot>

                <x-slot name="tbody">
                    @foreach ($schoolSubjects as $schoolSubject)
                        <tr>
                            <td>
                                {{ $schoolSubject->name }}
                            </td>

                            <td>
                                {{ $schoolSubject->abbreviation }}
                            </td>

                            <td>
                                {{ $schoolSubject->status ? 'Activo' : 'Inactivo' }}
                            </td>
                        </tr>
                    @endforeach
                </x-slot>

            </x-table.default>
        </x-slot>

    </x-layouts.card>
</x-app-layout>
