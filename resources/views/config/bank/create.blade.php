<x-app-layout>
    <x-layouts.card>

        <x-slot name="header">
            <h1 class="h1">
                <i class="fa-solid fa-building-columns"></i>
                {{ __('Bank') }}
            </h1>
        </x-slot>

        <x-slot name="content">
            <form action="{{ route('banks.store') }}"
                method="post" autocomplete="off">

                @include('config.bank.partials.form')
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
                            <i class="fa-solid fa-building-columns"></i>
                            Banco
                        </th>
                        <th>
                            <i class="fa-regular circle"></i>
                            Abreviatura
                        </th>
                        <th>
                            <i class="fa-regular fa-square"></i>
                            Nº de conta
                        </th>
                        <th>
                            <i class="fa-regular fa-square"></i>
                            IBAN
                        </th>
                    </tr>
                </x-slot>

                <x-slot name="tbody">
                    @foreach ($banks as $bank)
                        <tr>
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
                        </tr>
                    @endforeach
                </x-slot>

            </x-table.default>
        </x-slot>

    </x-layouts.card>
</x-app-layout>
