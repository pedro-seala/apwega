<x-app-layout>
    <x-layouts.card>

        <x-slot name="header" class="flex justify-between">
            <h1 class="h1">
                <i class="fa-regular fa-file-lines"></i>
                <span>{{ __('Payment description') }}</span>
            </h1>

            <x-table.edit-btn :add="true"
                :href="route('payment-descriptions.create')" />

        </x-slot>

        <x-slot name="content">
            @if ($paymentDescriptions->count() > 0)

                <x-table.default>
                    <x-slot name="thead">
                        <tr>
                            <th>
                                <i class="fa-solid fa-file-lines"></i>
                                Descrição
                            </th>

                            <th class="hsm">
                                <i class="fa-regular fa-user"></i>
                                Destinatário
                            </th>

                            <th class="hsm">
                                <i class="fa-regular fa-square"></i>
                                Estado
                            </th>

                            <th>
                                <i class="fa-solid fa-cog"></i>
                                Opções
                            </th>
                        </tr>
                    </x-slot>

                    <x-slot name="tbody">
                        @foreach ($paymentDescriptions as $paymentDescription)
                            <tr>
                                <td>
                                    {{ $paymentDescription->description }}
                                </td>

                                <td class="hsm">
                                    {{ $paymentDescription->entity ? 'Funcionário' : 'Aluno' }}
                                </td>

                                <td class="hsm">
                                    {{ $paymentDescription->status ? 'Activo' : 'Inactivo' }}
                                </td>

                                <td class="space-x-2 text-center">
                                    <x-table.edit-btn
                                        :href="route('payment-descriptions.edit', $paymentDescription)" />

                                    <x-table.del-btn
                                        :action="route('payment-descriptions.destroy', $paymentDescription)" />

                                </td>
                            </tr>
                        @endforeach
                    </x-slot>
                </x-table.default>

                {{ $paymentDescriptions->links() }}
            @else
                <x-table.alert-info />
            @endif
        </x-slot>

    </x-layouts.card>
</x-app-layout>
