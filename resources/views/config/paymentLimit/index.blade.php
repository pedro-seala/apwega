<x-app-layout>
    <x-layouts.card>

        <x-slot name="header">
            <div class="flex justify-between">
                <h1 class="h1">
                    <i class="fa-solid fa-circle-dollar-to-slot"></i>
                    <span>{{ __('Payment limit') }}</span>
                </h1>
            </div>
        </x-slot>

        <x-slot name="content">
            @if ($paymentLimit)
                <form action="{{ route('payment-limit.update', $paymentLimit) }}"
                    method="post" autocomplete="off">

                    @method('patch')
                    @include('config.paymentLimit.partials.form', ['paymentLimit' => $paymentLimit])
                </form>
            @else
                <form action="{{ route('payment-limit.store') }}"
                    method="post" autocomplete="off">

                    @include('config.paymentLimit.partials.form')
                </form>
            @endif
        </x-slot>

    </x-layouts.card>
</x-app-layout>
