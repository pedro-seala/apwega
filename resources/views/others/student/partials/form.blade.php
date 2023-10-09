<div class="flex flex-col">
    @csrf

    <div class="flex flex-col lg:flex-row mb-4 gap-x-4 gap-y-5">
        <div class="flex justify-center items-center px-2">
            <div
                class="flex w-52 h-52 justify-center items-center hover:bg-gray-100
                        rounded-full bg-gray-50 border shadow-md transition">

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
                    :value="$student->processNb ?? old('processNb')" />

                <x-input-error :messages="$errors->get('processNb')" class="mt-2" />

            </div>

            <div>
                <x-input-label for="name" value="Nome" />

                <x-text-input type="text" name="name" id="name"
                    :value="$student->name ?? old('name')" maxLength="64" required />

                <x-input-error :messages="$errors->get('name')" class="mt-2" />

            </div>

            <div>
                <x-input-label for="father" value="Nome do pai" />

                <x-text-input type="text" name="father" id="father"
                    :value="$student->father ?? old('father')" maxLength="64" />

                <x-input-error :messages="$errors->get('father')" class="mt-2" />

            </div>

            <div>
                <x-input-label for="mother" value="Nome da mãe" />

                <x-text-input type="text" name="mother" id="mother"
                    :value="$student->mother ?? old('mother')" maxLength="64" />

                <x-input-error :messages="$errors->get('mother')" class="mt-2" />

            </div>

            <div>
                <x-input-label for="birthDate" value="Data de nascimento" />

                <x-text-input type="date" name="birthDate" id="birthDate"
                    :value="$student->birthDate ?? old('birthDate')" required />

                <x-input-error :messages="$errors->get('birthDate')" class="mt-2" />

            </div>

            <div class="flex flex-col justify-center">
                <x-input-label for="counties">
                    <i class="fa-solid fa-map"></i>
                    Municipio de naturalidade:
                    <span class="text-gray-600">
                        {{$student->county->name ?? '' }}
                    </span>
                </x-input-label>

                <x-select name="county_id" id="counties" >
                    @isset($student)
                        <option value="{{ $student->county_id }}" selected>
                        </option>
                    @else
                        <option value="{{ old('county_id') }}" selected>
                        </option>
                    @endisset
                </x-select>

                <x-input-error :messages="$errors->get('county_id')" class="mt-2" />
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

                <x-input-error :messages="$errors->get('gender')" class="mt-2" />
            </div>

            <div>
                <x-input-label for="identityCard" value="BI/Cédula" />

                <x-text-input type="text" name="identityCard" id="identityCard"
                    :value="$student->identityCard ?? old('identityCard')"
                    maxLength="14" required />

                <x-input-error :messages="$errors->get('identityCard')" class="mt-2" />

            </div>

            <div>
                <x-input-label for="icIssueDate" value="Data de emissão" />

                <x-text-input type="date" name="icIssueDate" id="icIssueDate"
                    :value="$student->icIssueDate ?? old('icIssueDate')" />

                <x-input-error :messages="$errors->get('icIssueDate')" class="mt-2" />

            </div>

            <div>
                <x-input-label for="address" value="Morada" />

                <x-text-input type="text" name="address" id="address"
                    :value="$student->address ?? old('address')" maxLength="32" />

                <x-input-error :messages="$errors->get('address')" class="mt-2" />

            </div>

            <div>
                <x-input-label for="phone" value="Telemóvel" />

                <x-text-input type="tel" name="phone" id="phone"
                    :value="$student->phone ?? old('phone')" maxLength="24" />

                <x-input-error :messages="$errors->get('phone')" class="mt-2" />

            </div>

            <div>
                <x-input-label for="alternative_phone" value="Telemóvel alternativo" />

                <x-text-input type="tel" name="alternative_phone" id="alternative_phone"
                    :value="$student->alternative_phone ?? old('alternative_phone')" maxLength="24" />

                <x-input-error :messages="$errors->get('alternative_phone')" class="mt-2" />

            </div>

        </div>
    </div>

    <div class="flex items-end justify-end">
        <x-cancel-button />

        <x-primary-button />
    </div>
</div>
