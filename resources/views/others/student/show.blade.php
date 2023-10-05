<x-app-layout>
    <x-layouts.card>

        <x-slot name="header" class="flex flex-col md:flex-row justify-between">
            <h1 class="h1">
                <i class="fa-solid fa-user-circle"></i>
                Perfil do aluno
            </h1>

            <div class="space-x-4 my-2 md:my-0">
                <x-table.edit-btn :href="route('students.edit', $student)" />

                <x-table.del-btn :action="route('students.destroy', $student)" />
            </div>
        </x-slot>

        <x-slot name="content">
            <div class="flex flex-col lg:flex-row mb-6 gap-x-4 gap-y-6">
                <div class="flex justify-center items-center px-2">
                    <div
                        class="flex w-52 h-52 justify-center items-center hover:bg-gray-100
                                rounded-full bg-gray-50 border shadow-md cursor-pointer transition">

                        <div
                            class="flex w-32 h-32 justify-center items-center
                                        text-6xl text-indigo-500">

                            <i class="fa-solid fa-user"></i>
                        </div>
                    </div>
                </div>

                <div class="flex-1 grid grid-cols-1 lg:grid-cols-2 gap-4">
                    <div>
                        <x-input-label for="processNb" value="Nº Processo" />

                        <x-text-input type="text" id="processNb" :value="$student->processNb" :disabled="true" />

                    </div>

                    <div>
                        <x-input-label for="name" value="Nome" />

                        <x-text-input type="text" id="name" :value="$student->name" :disabled="true" required />

                    </div>

                    <div>
                        <x-input-label for="father" value="Nome do pai" />

                        <x-text-input type="text" id="father" :value="$student->father" :disabled="true" />

                    </div>

                    <div>
                        <x-input-label for="mother" value="Nome da mãe" />

                        <x-text-input type="text" id="mother" :value="$student->mother" :disabled="true" />

                    </div>

                    <div>
                        <x-input-label for="birthDate" value="Data de nascimento" />

                        <x-text-input type="date" id="birthDate" :value="$student->birthDate" :disabled="true" required />

                    </div>

                    <div>
                        <x-input-label for="naturalness" value="Naturalidade" />

                        <x-text-input type="text" id="naturalness" :value="$student->naturalness" :disabled="true" />

                    </div>

                    <div>
                        <x-input-label for="gender" value="Género" />

                        <x-select id="gender" class="w-full" disabled>
                            <option>
                                {{ $student->gender ? 'Masculino' : 'Feminino' }}
                            </option>
                        </x-select>
                    </div>

                    <div>
                        <x-input-label for="identityCard" value="BI/Cédula" />

                        <x-text-input type="text" id="identityCard" :value="$student->identityCard" :disabled="true" required />

                    </div>

                    <div>
                        <x-input-label for="icIssueDate" value="Data de emissão" />

                        <x-text-input type="date" id="icIssueDate" :value="$student->icIssueDate" :disabled="true" />

                    </div>

                    <div>
                        <x-input-label for="addres" value="Morada" />

                        <x-text-input type="text" id="addres" :value="$student->address" :disabled="true" />

                    </div>
                </div>
            </div>

            <div class="flex justify-end">
                <x-cancel-button title="Retroceder" />
            </div>
        </x-slot>

    </x-layouts.card>
</x-app-layout>
