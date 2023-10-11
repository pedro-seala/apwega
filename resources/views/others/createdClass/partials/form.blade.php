<div class="flex flex-col">
    @csrf

    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 mb-4">
        <div>
            <x-input-label for="school_year_id" value="Ano letivo" />

            <x-select name="school_year_id"
                id="school_year_id" class="py-1 px-2" required>

                <option value="{{ $model->current_year()->id }}">
                    {{ $model->current_year()->year }}
                </option>
            </x-select>

            <x-input-error :messages="$errors->get('school_year_id')" class="mt-2" />
        </div>

        <div class="flex flex-col justify-center">
            <x-input-label for="classes" value="Classe" />

            <x-select name="school_class_id" id="classes" class="select2" required>
                @isset($createdClass)
                    <option value="{{ $createdClass->school_class->id }}" selected>
                        {{ $createdClass->school_class->level }}ª Classe
                    </option>

                    @foreach ($model->school_classes() as $class)
                        @if ($createdClass->school_class->level != $class->level)
                            <option value="{{ $class->id }}">
                                {{ $class->level }}ª Classe
                            </option>
                        @endif
                    @endforeach
                @else
                    <option value="{{ old('school_class_id') }}">
                    </option>

                    @foreach ($model->school_classes() as $class)
                        <option value="{{ $class->id }}">
                            {{ $class->level }}ª Classe
                        </option>
                    @endforeach
                @endisset
            </x-select>

            <x-input-error :messages="$errors->get('school_class_id')" class="mt-2" />
        </div>

        <div>
            <x-input-label for="day_period" value="Período" />

            <x-select name="day_period" class="py-1 px-2" required>
                @isset($createdClass)
                    <option value="{{ $createdClass->day_period }}">
                        {{ $createdClass->day_period }}
                    </option>

                    @if ($createdClass->day_period != 'Manhã')
                        <option value="Manhã">
                            Manhã
                        </option>
                    @endif

                    @if ($createdClass->day_period != 'Tarde')
                        <option value="Tarde">
                            Tarde
                        </option>
                    @endif

                    @if ($createdClass->day_period != 'Noite')
                        <option value="Noite">
                            Noite
                        </option>
                    @endif
                @else
                    <option value="{{ old('day_period') }}">
                    </option>

                    <option value="Manhã">
                        Manhã
                    </option>

                    <option value="Tarde">
                        Tarde
                    </option>

                    <option value="Noite">
                        Noite
                    </option>
                @endisset
            </x-select>

            <x-input-error :messages="$errors->get('day_period')" class="mt-2" />
        </div>

        <div class="flex flex-col justify-center lg:col-span-2">
            <x-input-label for="courses" value="Curso" />

            <x-select name="course_id" id="courses" class="select2" required>
                @isset($createdClass)
                    <option value="{{ $createdClass->course->id }}" selected>
                        {{ $createdClass->course->name }}
                    </option>

                    @foreach ($model->courses() as $course)
                        @if ($createdClass->course->name != $course->name)
                            <option value="{{ $course->id }}">
                                {{ $course->name }}
                            </option>
                        @endif
                    @endforeach
                @else
                    <option value="{{ old('course_id') }}">
                    </option>

                    @foreach ($model->courses() as $course)
                        <option value="{{ $course->id }}">
                            {{ $course->name }}
                        </option>
                    @endforeach
                @endisset
            </x-select>

            <x-input-error :messages="$errors->get('course_id')" class="mt-2" />
        </div>

        <div>
            <x-input-label for='description' value="Descritivo" />

            <x-text-input type="text" name="description" class="py-1 px-2"
                value="{{ $createdClass->description ?? old('description') }}"
                placeholder="exemplo: AC1" pattern="([A-Z]{2})([0-9]+)" required />

            <x-input-error :messages="$errors->get('description')" class="mt-2" />

        </div>

        <div>
            <x-input-label for='room_number' value="Nº da sala" />

            <x-text-input type="number" name="room_number" class="py-1 px-2"
                value="{{ $createdClass->room_number ?? old('room_number') }}" required />

            <x-input-error :messages="$errors->get('room_number')" class="mt-2" />

        </div>

        <div>
            <x-input-label for='student_limit' value="Nº de alunos" />

            <x-text-input type="number" name="student_limit" class="py-1 px-2"
                value="{{ $createdClass->student_limit ?? old('student_limit') }}" required />

            <x-input-error :messages="$errors->get('student_limit')" class="mt-2" />

        </div>
    </div>

    <div class="flex items-end justify-end">
        <x-cancel-button />

        <x-primary-button />
    </div>
</div>
