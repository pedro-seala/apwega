<x-app-layout>
    <x-layouts.card>

        <x-slot name="header" class="flex justify-between">
            <h1 class="h1">
                <i class="fa-solid fa-building-columns"></i>
                <span>{{ __('Banks') }}</span>
            </h1>

            <x-add-btn :href="route('banks.create')" />
        </x-slot>

        <x-slot name="content">
            @if ($banks->count() > 0)
                <x-table.light caption="Bancos">

                    <x-slot name="thead">
                        <tr>
                            <th>
                                <i class="fa-solid fa-building-columns"></i>
                                Banco
                            </th>

                            <th>
                                Abreviatura
                            </th>

                            <th>
                                <i class="fa-solid fa-money-check"></i>
                                Nº de conta
                            </th>

                            <th>
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
                            <tr class="tbody-row">
                                <td>
                                    {{ $bank->name }}
                                </td>

                                <td>
                                    {{ $bank->abbreviation }}
                                </td>

                                <td>
                                    {{ $bank->account_number }}
                                </td>

                                <td>
                                    {{ $bank->iban }}
                                </td>

                                <td class="cog">

                                    <x-table.edit-btn
                                        :href="route('banks.edit', $bank)" />

                                    <x-table.del-btn
                                        :action="route('banks.destroy', $bank)" />

                                </td>
                            </tr>
                        @endforeach
                    </x-slot>

                </x-table.light>

                {{ $banks->links() }}
            @else
                <x-table.alert-info />
            @endif
        </x-slot>

    </x-layouts.card>
</x-app-layout>
