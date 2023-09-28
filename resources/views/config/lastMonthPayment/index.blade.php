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
            <x-table.default caption="Classes">
                <x-slot name="thead">
                    <tr>
                        <th>
                            <i class="fa-solid fa-chalkboard-user"></i>
                            Classe
                        </th>

                        <th class="hsm">
                            <i class="fa-regular fa-calendar"></i>
                            Mês
                        </th>

                        <th class="text-end">
                            <i class="fa-solid fa-cog"></i>
                            Opções
                        </th>
                    </tr>
                </x-slot>

                <x-slot name="tbody">
                    @foreach ($lastMonths as $lastMonth)
                        <tr>
                            <td>
                                {{ $lastMonth->school_class->level }}ª Classe
                            </td>

                            <td class="hsm">
                                {{ $lastMonth->month->name }}
                            </td>

                            <td class="text-end">
                                <x-table.edit-btn
                                    :href="route('last-month-payment.edit', $lastMonth)" />

                            </td>
                        </tr>
                    @endforeach
                </x-slot>

            </x-table.default>
        </x-slot>

    </x-layouts.card>
</x-app-layout>
