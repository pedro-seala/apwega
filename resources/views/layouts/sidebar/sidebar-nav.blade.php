<div id="sidebar-nav"
    class="flex-1 p-2 overflow-y-auto bg-white border rounded-md shadow-lg"
    data-overlayscrollbars-initialize x-show="open" x-transition>

    <div class="flex flex-col gap-y-4">
        {{-- administrative area --}}
        <x-sidebar.dropdown>
            <x-slot name="trigger">
                <i class="fa-regular fa-folder-open"></i>
                Área administrativa
            </x-slot>

            <x-slot name="content">
                {{-- student --}}
                <x-sidebar.dropdown-link>
                    <i class="fa-solid fa-user-plus"></i>
                    Registar aluno
                </x-sidebar.dropdown-link>

                {{-- naturalness --}}
                <x-sidebar.dropdown-link>
                    <i class="fa-solid fa-map"></i>
                    Registar naturalidade
                </x-sidebar.dropdown-link>

                {{-- school enrollment --}}
                <x-sidebar.dropdown class="m-1 border-0">
                    <x-slot name="trigger">
                        <i class="fa-solid fa-inbox"></i>
                        Matrícula
                    </x-slot>

                    <x-slot name="content">
                        <x-sidebar.dropdown-link>
                            <i class="fa-solid fa-plus-circle"></i>
                            Realizar matrícula
                        </x-sidebar.dropdown-link>

                        <x-sidebar.dropdown-link>
                            <i class="fa-regular fa-folder"></i>
                            Dados da matrícula
                        </x-sidebar.dropdown-link>

                        <x-sidebar.dropdown-link>
                            <i class="fa-regular fa-folder"></i>
                            Situação da matrícula
                        </x-sidebar.dropdown-link>

                        {{-- receipts --}}
                        <x-sidebar.dropdown class="m-1 border-0">
                            <x-slot name="trigger">
                                <i class="fa-solid fa-file"></i>
                                Imprimir recibo
                            </x-slot>

                            <x-slot name="content">
                                <x-sidebar.dropdown-link>
                                    <i class="fa-solid fa-file-lines"></i>
                                    Matrícula
                                </x-sidebar.dropdown-link>

                                <x-sidebar.dropdown-link>
                                    <i class="fa-solid fa-file-lines"></i>
                                    Anulação
                                </x-sidebar.dropdown-link>
                            </x-slot>
                        </x-sidebar.dropdown>
                    </x-slot>
                </x-sidebar.dropdown>
            </x-slot>
        </x-sidebar.dropdown>

        {{-- pedagogical area --}}
        <x-sidebar.dropdown>

            <x-slot name="trigger">
                <i class="fa-solid fa-book-open"></i>
                Área pedagógica
            </x-slot>

            <x-slot name="content">
                {{-- classrooms --}}
                <x-sidebar.dropdown class="m-1 border-0">
                    <x-slot name="trigger">
                        <i class="fa-solid fa-inbox"></i>
                        Turmas
                    </x-slot>

                    <x-slot name="content">
                        <x-sidebar.dropdown-link>
                            <i class="fa-solid fa-plus-circle"></i>
                            Criar turma
                        </x-sidebar.dropdown-link>

                        <x-sidebar.dropdown-link>
                            <i class="fa-solid fa-user-plus"></i>
                            Inserir aluno na turma
                        </x-sidebar.dropdown-link>

                        <x-sidebar.dropdown-link>
                            <i class="fa-solid fa-edit"></i>
                            Mudar número de ordem
                        </x-sidebar.dropdown-link>

                        {{-- change classroom student --}}
                        <x-sidebar.dropdown class="m-1 border-0">

                            <x-slot name="trigger">
                                <i class="fa-solid fa-edit"></i>
                                Mudar turma do aluno
                            </x-slot>

                            <x-slot name="content">
                                <x-sidebar.dropdown-link>
                                    <i class="fa-solid fa-search"></i>
                                    Pesquisar por turma
                                </x-sidebar.dropdown-link>

                                <x-sidebar.dropdown-link>
                                    <i class="fa-solid fa-search"></i>
                                    Pesquisar por aluno
                                </x-sidebar.dropdown-link>
                            </x-slot>

                        </x-sidebar.dropdown>
                    </x-slot>
                </x-sidebar.dropdown>

                {{-- teachers' classroom --}}
                <x-sidebar.dropdown-link>
                    <i class="fa-regular fa-circle"></i>
                    Turmas do professor
                </x-sidebar.dropdown-link>

                {{-- Notes --}}
                <x-sidebar.dropdown-link>
                    <i class="fa-regular fa-paste"></i>
                    Lançar notas
                </x-sidebar.dropdown-link>
            </x-slot>

        </x-sidebar.dropdown>

        {{-- financial area --}}
        <x-sidebar.dropdown>

            <x-slot name="trigger">
                <i class="fa-solid fa-chart-line"></i>
                Área financeira
            </x-slot>

            <x-slot name="content">
                <x-sidebar.dropdown-link>
                    <i class="fa-solid fa-money-bill-trend-up"></i>
                    Pagamentos
                </x-sidebar.dropdown-link>
            </x-slot>

        </x-sidebar.dropdown>

        {{-- config --}}
        <x-sidebar.dropdown>
            <x-slot name="trigger">
                <i class="fa-solid fa-cog"></i>
                Configurações
            </x-slot>

            <x-slot name="content" class="flex flex-col gap-y-2">
                {{-- School --}}
                <x-sidebar.nav-link href="{{ route('schools.index') }}">
                    <i class="fa-solid fa-school"></i>
                    {{ __('School') }}
                </x-sidebar.nav-link>

                {{-- Dropdown for pedigogical area --}}
                <x-sidebar.dropdown class="transition-all">

                    <x-slot name="trigger">
                        <i class="fa-solid fa-book-open"></i>
                        Área pedagógica
                    </x-slot>

                    <x-slot name="content">
                        <x-sidebar.dropdown-link href="{{ route('school-years.index') }}">
                            <i class="fa-solid fa-calendar"></i>
                            {{ __('School year') }}
                        </x-sidebar.dropdown-link>

                        <x-sidebar.dropdown-link href="{{ route('school-subjects.index') }}">
                            <i class="fa-solid fa-book"></i>
                            {{ __('Subjects') }}
                        </x-sidebar.dropdown-link>

                        <x-sidebar.dropdown-link href="{{ route('courses.index') }}">
                            <i class="fa-solid fa-graduation-cap"></i>
                            {{ __('Courses') }}
                        </x-sidebar.dropdown-link>

                        <x-sidebar.dropdown-link href="{{ route('school-plans.index') }}">
                            <i class="fa-regular fa-bookmark"></i>
                            {{ __('School plan') }}
                        </x-sidebar.dropdown-link>
                    </x-slot>

                </x-sidebar.dropdown>

                {{-- Dropdown for financial area --}}
                <x-sidebar.dropdown class="transition-all">

                    <x-slot name="trigger">
                        <i class="fa-solid fa-chart-line"></i>
                        Área financeira
                    </x-slot>

                    <x-slot name="content">
                        <x-sidebar.dropdown-link href="{{ route('banks.index') }}">
                            <i class="fa-solid fa-building-columns"></i>
                            {{ __('Banks') }}
                        </x-sidebar.dropdown-link>

                        <x-sidebar.dropdown-link href="{{ route('payment-descriptions.index') }}">
                            <i class="fa-solid fa-comments-dollar"></i>
                            {{ __('Payment description') }}
                        </x-sidebar.dropdown-link>

                        <x-sidebar.dropdown-link href="{{ route('seal-notes.index') }}">
                            <i class="fa-regular fa-calendar"></i>
                            {{ __('Seal notes') }}
                        </x-sidebar.dropdown-link>

                        <x-sidebar.dropdown-link href="/prices?entity=0">
                            <i class="fa-solid fa-money-bills"></i>
                            {{ __('Price table') }} - Alunos
                        </x-sidebar.dropdown-link>

                        <x-sidebar.dropdown-link href="/prices?entity=1">
                            <i class="fa-solid fa-money-bills"></i>
                            {{ __('Price table') }} - Funcionários
                        </x-sidebar.dropdown-link>

                        <x-sidebar.dropdown-link href="{{ route('fine-percentage.index') }}">
                            <i class="fa-solid fa-percent"></i>
                            {{ __('Fine percentage') }}
                        </x-sidebar.dropdown-link>

                        <x-sidebar.dropdown-link href="{{ route('payment-limit.index') }}">
                            <i class="fa-solid fa-circle-dollar-to-slot"></i>
                            {{ __('Payment limit') }}
                        </x-sidebar.dropdown-link>

                        <x-sidebar.dropdown-link href="{{ route('last-month-payment.index') }}">
                            <i class="fa-solid fa-filter-circle-dollar"></i>
                            {{ __('Last month of payment') }}
                        </x-sidebar.dropdown-link>
                    </x-slot>

                </x-sidebar.dropdown>
            </x-slot>
        </x-sidebar.dropdown>
    </div>
</div>
