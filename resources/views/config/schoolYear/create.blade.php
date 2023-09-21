<x-app-layout>
    <x-layouts.card>

        <x-slot name="header">
            <h1 class="h1">
                <i class="fa-solid fa-calendar-day"></i>
                {{ __('School year') }}
            </h1>
        </x-slot>

        <x-slot name="content">
            <form action="{{ route('school-years.store') }}"
                method="post" autocomplete="off">

                @include('config.schoolYear.partials.form')
            </form>
        </x-slot>

    </x-layouts.card>

    <x-layouts.card>
        <x-slot name="header" class="hidden">
        </x-slot>

        <x-slot name="content">
            <x-table.default caption="Recentemente adicionados">
                <x-slot name="thead">
                    <tr>
                        <th>
                            <i class="fa-solid fa-calendar"></i>
                            Ano lectivo
                        </th>

                        <th>
                            <i class="fa-solid fa-calendar-day"></i>
                            Início
                        </th>

                        <th>
                            <i class="fa-solid fa-calendar-day"></i>
                            Fim
                        </th>
                    </tr>
                </x-slot>

                <x-slot name="tbody">
                    @foreach ($schoolYears as $schoolYear)
                        <tr>
                            <td>
                                {{ $schoolYear->year }}
                            </td>

                            <td>
                                {{ $schoolYear->date_format($schoolYear->start) }}
                            </td>

                            <td>
                                {{ $schoolYear->date_format($schoolYear->end) }}
                            </td>
                        </tr>
                    @endforeach
                </x-slot>

            </x-table.default>
        </x-slot>

    </x-layouts.card>
</x-app-layout>
