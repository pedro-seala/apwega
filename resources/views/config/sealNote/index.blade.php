<x-app-layout>
    <x-layouts.card>

        <x-slot name="header" class="flex justify-between">
            <h1 class="h1">
                <i class="fa-regular fa-calendar"></i>
                <span>{{ __('Seal note') }}</span>
            </h1>

            <x-add-btn :href="route('seal-notes.create')" />
        </x-slot>

        <x-slot name="content">

            @if ($sealNotes->count() > 0)
                <x-table.default caption="Vedadas">
                    <x-slot name="thead">
                        <tr>
                            <th>
                                <i class="fa-solid fa-calendar"></i>
                                Mês
                            </th>

                            <th class="hidden lg:table-cell">
                                <i class="fa-solid fa-calendar-day"></i>
                                Trimestre
                            </th>

                            <th class="hidden lg:table-cell">
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
                            <tr>
                                <td>
                                    {{ $sealNote->month->name }}
                                </td>

                                <td class="hidden lg:table-cell">
                                    {{ $sealNote->quarter->order }}
                                </td>

                                <td class="hidden lg:table-cell">
                                    {{ $sealNote->status ? 'Sim' : 'Não' }}
                                </td>

                                <td class="space-x-2 text-center">
                                    <x-table.edit-btn
                                        :href="route('seal-notes.edit', $sealNote)" />

                                    <x-table.del-btn
                                        :action="route('seal-notes.destroy', $sealNote)" />

                                </td>
                            </tr>
                        @endforeach
                    </x-slot>
                </x-table.default>

                {{ $sealNotes->links() }}
            @else
                <x-table.alert-info />
            @endif
        </x-slot>

    </x-layouts.card>
</x-app-layout>
