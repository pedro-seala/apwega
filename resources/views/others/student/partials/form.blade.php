<div class="flex flex-col">
    @csrf

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

                <x-text-input type="text" name="processNb" id="processNb"
                    value="{{ $student->processNb ?? old('processNb') }}" />

            </div>

            <div>
                <x-input-label for="name" value="Nome" />

                <x-text-input type="text" name="name" id="name"
                    value="{{ $student->name ?? old('name') }}" required />

            </div>

            <div>
                <x-input-label for="father" value="Nome do pai" />

                <x-text-input type="text" name="father" id="father"
                    value="{{ $student->father ?? old('father') }}" />

            </div>

            <div>
                <x-input-label for="mother" value="Nome da mãe" />

                <x-text-input type="text" name="mother" id="mother"
                    value="{{ $student->mother ?? old('mother') }}" />

            </div>

            <div>
                <x-input-label for="birthDate" value="Data de nascimento" />

                <x-text-input type="date" name="birthDate" id="birthDate"
                    value="{{ $student->birthDate ?? old('birthDate') }}" required />

            </div>

            <div>
                <x-input-label for="naturalness" value="Naturalidade" />

                <x-text-input type="text" name="naturalness" id="naturalness"
                    value="{{ $student->naturalness ?? old('naturalness') }}" />

            </div>

            <div>
                <x-input-label for="gender" value="Género" />

                <x-select name="gender" id="gender" class="w-full">
                    @isset($student)
                        <option value="{{ $student->gender }}">
                            {{ $student->gender ? 'Masculino' : 'Feminino' }}
                        </option>

                        @if ($student->gender)
                            <option value="0">
                                Feminino
                            </option>
                        @else
                            <option value="1">
                                Masculino
                            </option>
                        @endif
                    @else
                        <option value="1" selected>
                            Masculino
                        </option>

                        <option value="0">
                            Feminino
                        </option>
                    @endisset
                </x-select>


            </div>

            <div>
                <x-input-label for="identityCard" value="BI/Cédula" />

                <x-text-input type="text" name="identityCard" id="identityCard"
                    value="{{ $student->identityCard ?? old('identityCard') }}" required />

            </div>

            <div>
                <x-input-label for="icIssueDate" value="Data de emissão" />

                <x-text-input type="date" name="icIssueDate" id="icIssueDate"
                    value="{{ $student->icIssueDate ?? old('icIssueDate') }}" />

            </div>

            <div>
                <x-input-label for="icExpirationDate" value="Data de expiração" />

                <x-text-input type="date" name="icExpirationDate" id="icExpirationDate"
                    value="{{ $student->icExpirationDate ?? old('icExpirationDate') }}" />

            </div>

            <div>
                <x-input-label for="addres" value="Morada" />

                <x-text-input type="text" name="address" id="addres"
                    value="{{ $student->address ?? old('address') }}" />

            </div>

        </div>
    </div>

    <div class="flex items-end justify-end">
        <x-primary-button />
    </div>
</div>
