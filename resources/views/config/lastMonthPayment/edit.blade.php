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
            <form action="{{ route('last-month-payment.update', $lastMonthPayment) }}"
                method="post">

                @method('patch')
                @csrf

                <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
                    <div class="lg:col-start-2">
                        <x-input-label for="month_id">
                            <i class="fa-solid fa-calendar"></i>
                            <span class="ms-2">
                                Último mês de mensalidade
                            </span>
                        </x-input-label>

                        <x-select name="month_id" id="month_id" class="select2" required>
                            @isset($lastMonthPayment)
                                <option value="{{ $lastMonthPayment->month_id }}">
                                    {{ $lastMonthPayment->month->name }}
                                </option>

                                @foreach ($model->months() as $month)
                                    @if ($month->id <> $lastMonthPayment->month_id)
                                        <option value="{{ $month->id }}">
                                            {{ $month->name }}
                                        </option>
                                    @endif
                                @endforeach
                            @else
                                @foreach ($model->months() as $month)
                                    <option value="{{ $month->id }}">
                                        {{ $month->name }}
                                    </option>
                                @endforeach
                            @endisset
                        </x-select>
                    </div>

                    <div class="inline-flex items-end">
                        <x-primary-button />
                    </div>
                </div>

            </form>
        </x-slot>

    </x-layouts.card>
</x-app-layout>
