<x-app-layout>
    <x-layouts.card>

        <x-slot name="header">
            <div class="flex justify-between">
                <h1 class="h1">
                    <i class="fa-solid fa-magnifying-glass-dollar"></i>
                    <span>{{ __('Last month of payment') }}</span>
                </h1>
            </div>
        </x-slot>

        <x-slot name="content">
            <x-table.light>
                <x-slot name="thead">
                    <tr>
                        <th>
                            <i class="fa-solid fa-chalkboard-user"></i>
                            Classe
                        </th>

                        <th>
                            <i class="fa-regular fa-calendar"></i>
                            Mês
                        </th>

                        <th class="cog">
                            <i class="fa-solid fa-cog"></i>
                            Opções
                        </th>
                    </tr>
                </x-slot>

                <x-slot name="tbody">
                    @foreach ($lastMonthPayments as $lastMonth)
                        <tr class="tbody-row">
                            <td>
                                {{ $lastMonth->school_class->level }}ª Classe
                            </td>

                            <td>
                                {{ $lastMonth->month->name }}
                            </td>

                            <td class="text-center">
                                <x-table.edit-btn
                                    :href="route('last-month-payment.edit', $lastMonth)" />

                            </td>
                        </tr>
                    @endforeach
                </x-slot>

            </x-table.light>
        </x-slot>

    </x-layouts.card>
</x-app-layout>
