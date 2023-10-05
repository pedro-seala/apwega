<x-app-layout>
    <x-layouts.card>

        <x-slot name="header" class="flex justify-between">
            <h1 class="h1">
                <i class="fa-solid fa-school"></i>
                {{ __('School') }}
            </h1>

            <a href="{{ route('schools.edit', $school) }}"
                class="bg-white hover:bg-slate-50 transition
                        focus:ring-2 focus:ring-offset-2 focus:ring-bg-slate-200
                        py-1 px-2 uppercase rounded-md text-sm font-semibold border
                        border-slate-300 text-slate-500 shadow-sm">

                <i class="fa-solid fa-edit"></i>
                {{ __('Edit') }}
            </a>
        </x-slot>

        <x-slot name="content">
            {{-- School's info --}}
            <div class="grid grid-cols-1 md:grid-cols-3 gap-y-6 gap-x-4">
                <div class="lg:col-span-2">
                    <x-input-label for="nome">
                        <i class="fa-solid fa-building"></i>
                        Nome
                    </x-input-label>
                    <x-text-input :disabled="true" value="{{ $school->name }}" />
                </div>

                <div>
                    <x-input-label for="email">
                        <i class="fa-solid fa-envelope"></i>
                        E-mail
                    </x-input-label>
                    <x-text-input :disabled="true" value="{{ $school->email }}" />
                </div>

                <div>
                    <x-input-label for="telefone">
                        <i class="fa-solid fa-phone"></i>
                        Telefone
                    </x-input-label>
                    <x-text-input :disabled="true" value="{{ $school->phone }}" />
                </div>

                <div>
                    <x-input-label for="telAlternativo">
                        <i class="fa-solid fa-phone"></i>
                        Telefone alternativo
                    </x-input-label>
                    <x-text-input :disabled="true" value="{{ $school->alternative_phone }}" />
                </div>

                <div>
                    <x-input-label for="province">
                        <i class="fa-solid fa-map"></i>
                        Província
                    </x-input-label>
                    <x-text-input :disabled="true" value="{{ $school->province }}" />
                </div>

                <div>
                    <x-input-label for="county">
                        <i class="fa-solid fa-map"></i>
                        Município
                    </x-input-label>
                    <x-text-input :disabled="true" value="{{ $school->county }}" />
                </div>

                <div>
                    <x-input-label for="town">
                        <i class="fa-solid fa-map"></i>
                        Bairro
                    </x-input-label>
                    <x-text-input :disabled="true" value="{{ $school->town }}" />
                </div>

                <div>
                    <x-input-label for="creation_document">
                        <i class="fa-solid fa-file"></i>
                        Decreto de criação
                    </x-input-label>
                    <x-text-input :disabled="true" value="{{ $school->creation_document }}" />
                </div>
            </div>
        </x-slot>

    </x-layouts.card>
</x-app-layout>
