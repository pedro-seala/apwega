<x-app-layout>
    <x-layouts.card>

        <x-slot name="header">
            <h1 class="h1">
                <i class="fa-solid fa-money-bill-transfer"></i>
                {{ __('Price table') }}
            </h1>
        </x-slot>

        <x-slot name="content">
            <form action="{{ route('prices.store', ['entity' => $entity]) }}"
                method="post" autocomplete="off">

                @include('config.price.partials.form')
            </form>
        </x-slot>

    </x-layouts.card>

    <x-layouts.card>
        <x-slot name="header" class="hidden">
        </x-slot>

        <x-slot name="content">
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
                        </tr>
                    @endforeach
                </x-slot>

            </x-table.light>
        </x-slot>

    </x-layouts.card>
</x-app-layout>
