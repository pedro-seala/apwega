<x-app-layout>
    <x-layouts.card>

        <x-slot name="header">
            <h1 class="h1">
                <i class="fa-regular fa-file-lines"></i>
                {{ __('Payment description') }}
            </h1>
        </x-slot>

        <x-slot name="content">
            <form action="{{ route('payment-descriptions.update', $paymentDescription) }}"
                method="post" autocomplete="off">

                @method('patch')
                @include('config.paymentDesc.partials.form', ['paymentDescription' => $paymentDescription])
            </form>
        </x-slot>

    </x-layouts.card>
</x-app-layout>
