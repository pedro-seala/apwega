<x-app-layout>
    <x-layouts.card>

        <x-slot name="header">
            <h1 class="h1">
                <i class="fa-regular fa-paste"></i>
                {{ __('Payment description') }}
            </h1>
        </x-slot>

        <x-slot name="content">
            <form action="{{ route('payment-descriptions.store') }}"
                method="post" autocomplete="off">

                @include('config.paymentDesc.partials.form')
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
                            <i class="fa-regular fa-file-lines"></i>
                            Descrição
                        </th>

                        <th>
                            <i class="fa-regular fa-user"></i>
                            Destinatário
                        </th>

                        <th>
                            <i class="fa-regular fa-circle"></i>
                            Estado
                        </th>
                    </tr>
                </x-slot>

                <x-slot name="tbody">
                    @foreach ($paymentDescriptions as $paymentDescription)
                        <tr>
                            <td>
                                {{ $paymentDescription->description }}
                            </td>

                            <td>
                                {{ $paymentDescription->entity ? 'Funcionário' : 'Aluno' }}
                            </td>

                            <td>
                                {{ $paymentDescription->status ? 'Sim' : 'Não' }}
                            </td>
                        </tr>
                    @endforeach
                </x-slot>

            </x-table.default>
        </x-slot>

    </x-layouts.card>
</x-app-layout>
