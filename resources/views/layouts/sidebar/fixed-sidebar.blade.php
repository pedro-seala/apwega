<div class="flex flex-col px-2 gap-y-8">
    {{-- Hamburguer --}}
    <x-sidebar.btn x-on:click="toggle()">
        <i class="fa-solid fa-bars fa-xl"></i>
    </x-sidebar.btn>

    {{-- Home --}}
    <x-sidebar.btn-link href="{{ route('dashboard') }}">
        <i class="fa-solid fa-home fa-xl"></i>
    </x-sidebar.btn-link>

    {{-- Users --}}
    <x-sidebar.btn-link>
        <i class="fa-solid fa-users fa-xl"></i>
    </x-sidebar.btn-link>

    {{-- Help --}}
    <x-sidebar.btn-link>
        <i class="fa-solid fa-comment fa-xl"></i>
    </x-sidebar.btn-link>
</div>
