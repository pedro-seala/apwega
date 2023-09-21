<div class="grid grid-cols-1 gap-4 md:grid-cols-3">
    @csrf

    <div class="col-span-2">
        <x-input-label for="course_id">
            Curso
        </x-input-label>

        <x-select name="course_id" id="course_id" class="select2" required>
            @isset($schoolPlan)
                <option value="{{ $schoolPlan->course->id }}" selected>
                    {{ $schoolPlan->course->name }}
                </option>

                @foreach ($courses as $course)
                    @if ($schoolPlan->course->name <> $course->name)
                        <option value="{{ $course->id }}">
                            {{ $course->name }}
                        </option>
                    @endif
                @endforeach
            @else
                <option>
                    {{-- first and empty option --}}
                </option>

                @foreach ($courses as $course)
                    <option value="{{ $course->id }}">
                        {{ $course->name }}
                    </option>
                @endforeach
            @endisset
        </x-select>
    </div>

    <div>
        <x-input-label for="school_classe_id">
            Classe
        </x-input-label>

        <x-select name="school_class_id" id="school_class_id" class="w-full" required>
            @isset($schoolPlan)
                <option value="{{ $schoolPlan->school_class->id }}" selected>
                    {{ $schoolPlan->school_class->level }}ª Classe
                </option>

                @foreach ($classes as $class)
                    @if ($schoolPlan->school_class->level <> $class->level)
                        <option value="{{ $class->id }}">
                            {{ $class->level }}ª Classe
                        </option>
                    @endif
                @endforeach
            @else
                <option selected disabled>
                    Selecione uma classe
                </option>

                @foreach ($classes as $class)
                    <option value="{{ $class->id }}">
                        {{ $class->level }}
                        ª Classe
                    </option>
                @endforeach
            @endisset
        </x-select>
    </div>
</div>

<div class="grid grid-cols-1 gap-4 mt-4 md:grid-cols-3">

    <div class="col-span-2">
        <x-input-label for="subject_id">
            Disciplina
        </x-input-label>

        <x-select name="subject_id" id="subject_id" class="select2" required>
            @isset($schoolPlan)
                <option value="{{ $schoolPlan->subject->id }}" selected>
                    {{ $schoolPlan->subject->name }}
                </option>

                @foreach ($subjects as $subject)
                    @if ($schoolPlan->subject->name <> $subject->name)
                        <option value="{{ $subject->id }}">
                            {{ $subject->name }}
                        </option>
                    @endif
                @endforeach
            @else
                <option>
                    {{-- first and empty option --}}
                </option>

                @foreach ($subjects as $subject)
                    <option value="{{ $subject->id }}">
                        {{ $subject->name }}
                    </option>
                @endforeach
            @endisset
        </x-select>
    </div>

    <div>
        <x-input-label for="subject_category_id">
            Categoria da disciplina
        </x-input-label>

        <x-select name="subject_category_id" id="subject_category_id" class="select2" required>
            @isset($schoolPlan)
                <option value="{{ $schoolPlan->subject_category->id }}" selected>
                    {{ $schoolPlan->subject_category->name }}
                </option>

                @foreach ($subject_categories as $subject_category)
                    @if ($schoolPlan->subject_category->name <> $subject_category->name)
                        <option value="{{ $subject_category->id }}">
                            {{ $subject_category->name }}
                        </option>
                    @endif
                @endforeach
            @else
                <option>
                    {{-- first and empty option --}}
                </option>

                @foreach ($subject_categories as $subject_category)
                    <option value="{{ $subject_category->id }}">
                        {{ $subject_category->name }}
                    </option>
                @endforeach
            @endisset
        </x-select>
    </div>

    <div>
        <x-input-label for="time">
            Carga horária
        </x-input-label>

        <x-text-input name="time" id="time"
            value="{{ $schoolPlan->time ?? old('time') }}" />

    </div>
</div>

<div class="mt-6 text-end lg:mt-3">
    <x-cancel-button />

    <x-primary-button />
</div>
