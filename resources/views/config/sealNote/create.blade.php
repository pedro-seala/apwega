<x-app-layout>
    <x-layouts.card>

        <x-slot name="header">
            <h1 class="h1">
                <i class="fa-solid fa-calendar"></i>
                {{ __('Seal note') }}
            </h1>
        </x-slot>

        <x-slot name="content">
            <form action="{{ route('seal-notes.store') }}"
                method="post" autocomplete="off">

                @include('config.sealNote.partials.form')
            </form>
        </x-slot>

    </x-layouts.card>

    <x-layouts.card>
        <x-slot name="header" class="hidden">
        </x-slot>

        <x-slot name="content">
            <x-table.default caption="Recentemente registados">

                <x-slot name="thead">
                    <tr>
                        <th>
                            <i class="fa-solid fa-calendar"></i>
                            Mês
                        </th>

                        <th>
                            <i class="fa-solid fa-calendar-day"></i>
                            Trimestre
                        </th>

                        <th>
                            <i class="fa-regular fa-square"></i>
                            Estado
                        </th>
                    </tr>
                </x-slot>

                <x-slot name="tbody">
                    @foreach ($sealNotes as $sealNote)
                        <tr>
                            <td>
                                {{ $sealNote->month->name }}
                            </td>

                            <td>
                                {{ $sealNote->quarter->order }}
                            </td>

                            <td>
                                {{ $sealNote->status ? 'Sim' : 'Não' }}
                            </td>
                        </tr>
                    @endforeach
                </x-slot>

            </x-table.default>
        </x-slot>

    </x-layouts.card>
</x-app-layout>
