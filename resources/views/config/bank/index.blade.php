<x-app-layout>
    <x-layouts.card>

        <x-slot name="header" class="flex justify-between">
            <h1 class="h1">
                <i class="fa-solid fa-building-columns"></i>
                <span>{{ __('Bank') }}</span>
            </h1>

            <x-add-btn :href="route('banks.create')" />
        </x-slot>

        <x-slot name="content">
            @if ($banks->count() > 0)
                <x-table.default caption="Bancos">

                    <x-slot name="thead">
                        <tr>
                            <th>
                                <i class="fa-solid fa-building-columns"></i>
                                Banco
                            </th>

                            <th class="hidden lg:table-cell">
                                Abreviatura
                            </th>

                            <th class="hidden lg:table-cell">
                                <i class="fa-solid fa-money-check"></i>
                                Nº de conta
                            </th>

                            <th class="hidden lg:table-cell">
                                <i class="fa-solid fa-money-check-dollar"></i>
                                IBAN
                            </th>

                            <th>
                                <i class="fa-solid fa-cog"></i>
                                Opções
                            </th>
                        </tr>
                    </x-slot>

                    <x-slot name="tbody">
                        @foreach ($banks as $bank)
                            <tr>
                                <td>
                                    {{ $bank->name }}
                                </td>

                                <td class="hidden lg:table-cell">
                                    {{ $bank->abbreviation }}
                                </td>

                                <td class="hidden lg:table-cell">
                                    {{ $bank->account_number }}
                                </td>

                                <td class="hidden lg:table-cell">
                                    {{ $bank->iban }}
                                </td>

                                <td class="space-x-2 text-center">

                                    <x-table.edit-btn
                                        :href="route('banks.edit', $bank)" />

                                    <x-table.del-btn
                                        :action="route('banks.destroy', $bank)" />

                                </td>
                            </tr>
                        @endforeach
                    </x-slot>

                </x-table.default>

                {{ $banks->links() }}
            @else
                <x-table.alert-info />
            @endif
        </x-slot>

    </x-layouts.card>
</x-app-layout>
