<x-app-layout>
    <x-layouts.card>

        <x-slot name="header">
            <div class="h1">
                <i class="fa-solid fa-computer"></i>
                {{ __('Dashboard') }}
            </div>
        </x-slot>

        <x-slot name="content">
            {{ __("You're logged in!") }}
        </x-slot>

    </x-layouts.card>
</x-app-layout>
