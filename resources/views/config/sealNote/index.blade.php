<x-app-layout>
    <x-layouts.card>

        <x-slot name="header" class="flex justify-between">
            <h1 class="h1">
                <i class="fa-regular fa-calendar"></i>
                <span>{{ __('Seal notes') }}</span>
            </h1>

            <x-add-btn :href="route('seal-notes.create')" />
        </x-slot>

        <x-slot name="content">

            @if ($sealNotes->count() > 0)
                <x-table.light>
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
                                Vedar
                            </th>

                            <th>
                                <i class="fa-solid fa-cog"></i>
                                Opções
                            </th>
                        </tr>
                    </x-slot>

                    <x-slot name="tbody">
                        @foreach ($sealNotes as $sealNote)
                            <tr class="tbody-row">
                                <td>
                                    {{ $sealNote->month->name }}
                                </td>

                                <td>
                                    {{ $sealNote->quarter->order }}
                                </td>

                                <td>
                                    {{ $sealNote->status ? 'Sim' : 'Não' }}
                                </td>

                                <td class="cog">
                                    <x-table.edit-btn
                                        :href="route('seal-notes.edit', $sealNote)" />

                                    <x-table.del-btn
                                        :action="route('seal-notes.destroy', $sealNote)" />

                                </td>
                            </tr>
                        @endforeach
                    </x-slot>
                </x-table.light>

                {{ $sealNotes->links() }}
            @else
                <x-table.alert-info />
            @endif
        </x-slot>

    </x-layouts.card>
</x-app-layout>
