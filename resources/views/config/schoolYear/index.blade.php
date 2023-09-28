<x-app-layout>
    <x-layouts.card>

        <x-slot name="header" class="flex justify-between">
            <h1 class="h1">
                <i class="fa-solid fa-calendar-day"></i>
                <span>{{ __('School year') }}</span>
            </h1>

            <x-add-btn :href="route('school-years.create')" />
        </x-slot>

        <x-slot name="content">
            @if ($schoolYears->count() > 0)
                <x-table.default caption="Retrospectiva">

                    <x-slot name="thead">
                        <tr>
                            <th>
                                <i class="fa-solid fa-calendar"></i>
                                Ano lectivo
                            </th>

                            <th class="hsm">
                                <i class="fa-solid fa-calendar-day"></i>
                                Início
                            </th>

                            <th class="hsm">
                                <i class="fa-solid fa-calendar-day"></i>
                                Fim
                            </th>

                            <th>
                                <i class="fa-solid fa-cog"></i>
                                Opções
                            </th>
                        </tr>
                    </x-slot>

                    <x-slot name="tbody">
                        @foreach ($schoolYears as $schoolYear)
                            <tr>
                                <td>
                                    {{ $schoolYear->year }}
                                </td>

                                <td class="hsm">
                                    {{ $schoolYear->date_format($schoolYear->start) }}
                                </td>

                                <td class="hsm">
                                    {{ $schoolYear->date_format($schoolYear->end) }}
                                </td>

                                <td class="cog">

                                    <x-table.edit-btn
                                        :href="route('school-years.edit', $schoolYear)" />

                                    <x-table.del-btn
                                        :action="route('school-years.destroy', $schoolYear)" />

                                </td>
                            </tr>
                        @endforeach
                    </x-slot>

                </x-table.default>

                {{ $schoolYears->links() }}
            @else
                <x-table.alert-info />
            @endif
        </x-slot>

    </x-layouts.card>
</x-app-layout>
