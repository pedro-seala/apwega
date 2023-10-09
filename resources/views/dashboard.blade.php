<x-app-layout>
    <x-layouts.card>

        <x-slot name="header">
            <div class="h1">
                <i class="fa-solid fa-chart-pie"></i>
                {{ __('Dashboard') }}
            </div>
        </x-slot>

        <x-slot name="content">

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                {{-- Registered students --}}
                <article class="rounded-xl border bg-gray-50 p-6 shadow-md">
                    <div class="flex items-center justify-between">
                        <div>
                            {{-- Entity --}}
                            <p class="text-gray-500 mb-1">
                                Alunos inscritos
                            </p>

                            {{-- Number --}}
                            <p class="text-4xl font-medium text-indigo-500">
                                350
                            </p>
                        </div>

                        {{-- Icon --}}
                        <span class="rounded-full flex justify-center items-center
                                    w-24 h-24 bg-white text-blue-600 border">

                            <i class="fa-solid fa-user fa-2xl"></i>
                        </span>
                    </div>

                    {{-- statistic --}}
                    <div class="mt-3 flex gap-1 text-green-600">
                        <i class="fa-solid fa-chart-line"></i>

                        <p class="flex gap-2 text-sm">
                            <span class="font-medium">
                                76.81%
                            </span>

                            <span class="text-gray-500">
                                Desde a semana passada
                            </span>
                        </p>
                    </div>
                </article>

                {{-- Enrolled students --}}
                <article class="rounded-xl border bg-gray-50 p-6 shadow-md">
                    <div class="flex items-center justify-between">
                        <div>
                            {{-- Entity --}}
                            <p class="text-gray-500 mb-1">
                                Alunos matriculados
                            </p>

                            {{-- Number --}}
                            <p class="text-4xl font-medium text-indigo-500">
                                346
                            </p>
                        </div>

                        {{-- Icon --}}
                        <span class="rounded-full flex justify-center items-center
                                    w-24 h-24 bg-white text-blue-600 border">

                            <i class="fa-solid fa-user fa-2xl"></i>
                        </span>
                    </div>

                    {{-- statistic --}}
                    <div class="mt-3 flex gap-1 text-green-600">
                        <i class="fa-solid fa-chart-line"></i>

                        <p class="flex gap-2 text-sm">
                            <span class="font-medium">
                                89.81%
                            </span>

                            <span class="text-gray-500">
                                Desde a semana passada
                            </span>
                        </p>
                    </div>
                </article>

                {{-- Classrooms --}}
                <article class="rounded-xl border bg-gray-50 p-6 shadow-md">
                    <div class="flex items-center justify-between">
                        <div>
                            {{-- Entity --}}
                            <p class="text-gray-500 mb-1">
                                Salas de aulas
                            </p>

                            {{-- Number --}}
                            <p class="text-4xl font-medium text-indigo-500">
                                24
                            </p>
                        </div>

                        {{-- Icon --}}
                        <span class="rounded-full flex justify-center items-center
                                    w-24 h-24 bg-white text-blue-600 border">

                                <i class="fa-solid fa-chalkboard fa-2xl"></i>
                        </span>
                    </div>

                    {{-- statistic --}}
                    <div class="mt-3 flex gap-1 text-green-600">
                        <i class="fa-solid fa-chart-line"></i>

                        <p class="flex gap-2 text-sm">
                            <span class="font-medium">
                                14%
                            </span>

                            <span class="text-gray-500">
                                Desde o ano passado
                            </span>
                        </p>
                    </div>
                </article>

                {{-- Classrooms --}}
                <article class="rounded-xl border bg-gray-50 p-6 shadow-md">
                    <div class="flex items-center justify-between">
                        <div>
                            {{-- Entity --}}
                            <p class="text-gray-500 mb-1">
                                Turmas
                            </p>

                            {{-- Number --}}
                            <p class="text-4xl font-medium text-indigo-500">
                                72
                            </p>
                        </div>

                        {{-- Icon --}}
                        <span class="rounded-full flex justify-center items-center
                                    w-24 h-24 bg-white text-blue-600 border">

                                <i class="fa-solid fa-chalkboard-user fa-2xl"></i>
                        </span>
                    </div>

                    {{-- statistic --}}
                    <div class="mt-3 flex gap-1 text-green-600">
                        <i class="fa-solid fa-chart-line"></i>

                        <p class="flex gap-2 text-sm">
                            <span class="font-medium">
                                48.82%
                            </span>

                            <span class="text-gray-500">
                                Desde o ano passado
                            </span>
                        </p>
                    </div>
                </article>

            </div>

        </x-slot>

    </x-layouts.card>
</x-app-layout>
