<x-app-layout>
    <x-layouts.card>

        <x-slot name="header" class="flex justify-between">
            <h1 class="h1">
                <i class="fa-solid fa-money-bill-transfer"></i>
                <span>{{ __('Price table') }}</span>
            </h1>

            <x-add-btn :href="route('prices.create', ['entity' => $entity])" />
        </x-slot>

        <x-slot name="content">
            @if ($prices->count() > 0)
                <x-table.light>

                    <x-slot name="thead">
                        <tr>
                            @if (!$entity)
                                <th>
                                    <i class="fa-regular fa-circle"></i>
                                    Classe
                                </th>
                            @endif

                            <th>
                                <i class="fa-solid fa-comment"></i>
                                Descrição
                            </th>

                            <th>
                                <i class="fa-regular fa-money-bill-1"></i>
                                Preço
                            </th>

                            <th>
                                <i class="fa-solid fa-cog"></i>
                                Opções
                            </th>
                        </tr>
                    </x-slot>

                    <x-slot name="tbody">
                        @foreach ($prices as $price)
                            <tr class="tbody-row">
                                @if (!$entity)
                                    <td>
                                        {{ $price->school_class->level }}ª Classe
                                    </td>
                                @endif

                                <td>
                                    {{ $price->payment_description->description }}
                                </td>

                                <td class="font-bold text-slate-500 text-end">
                                    {{ $price->price }}
                                    <kbd class="p-1 rounded-lg bg-slate-200">
                                        kz
                                    </kbd>
                                </td>

                                <td class="cog">
                                    <x-table.edit-btn
                                        :href="route('prices.edit', [$price, 'entity' => $entity])" />

                                    <x-table.del-btn
                                        :action="route('prices.destroy', $price)" />

                                </td>
                            </tr>
                        @endforeach
                    </x-slot>
                </x-table.light>

                {{ $prices->appends(['entity' => $entity])->links() }}
            @else
                <x-table.alert-info />
            @endif
        </x-slot>

    </x-layouts.card>
</x-app-layout>
