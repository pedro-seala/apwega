<div class="grid grid-cols-1 gap-4 md:grid-cols-3">
    @csrf

    <div class="lg:col-span-2">
        <x-input-label for="courses">
            Curso
        </x-input-label>

        <x-select name="course_id" id="courses" class="select2" required>
            @isset($schoolPlan)
                <option value="{{ $schoolPlan->course->id }}" selected>
                    {{ $schoolPlan->course->name }}
                </option>

                @foreach ($model->courses() as $course)
                    @if ($schoolPlan->course->name <> $course->name)
                        <option value="{{ $course->id }}">
                            {{ $course->name }}
                        </option>
                    @endif
                @endforeach
            @else
                <option>
                </option>

                @foreach ($model->courses() as $course)
                    <option value="{{ $course->id }}">
                        {{ $course->name }}
                    </option>
                @endforeach
            @endisset
        </x-select>
    </div>

    <div>
        <x-input-label for="classes">
            Classe
        </x-input-label>

        <x-select name="school_class_id" id="classes" class="select2" required>
            @isset($schoolPlan)
                <option value="{{ $schoolPlan->school_class->id }}" selected>
                    {{ $schoolPlan->school_class->level }}ª Classe
                </option>

                @foreach ($model->school_classes() as $class)
                    @if ($schoolPlan->school_class->level <> $class->level)
                        <option value="{{ $class->id }}">
                            {{ $class->level }}ª Classe
                        </option>
                    @endif
                @endforeach
            @else
                <option>
                </option>

                @foreach ($model->school_classes() as $class)
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

    <div>
        <x-input-label for="subjects">
            Disciplina
        </x-input-label>

        <x-select name="school_subject_id" id="subjects" class="select2" required>
            @isset($schoolPlan)
                <option value="{{ $schoolPlan->school_subject->id }}" selected>
                    {{ $schoolPlan->school_subject->name }}
                </option>

                @foreach ($model->school_subjects() as $school_subject)
                    @if ($schoolPlan->school_subject->name <> $school_subject->name)
                        <option value="{{ $school_subject->id }}">
                            {{ $school_subject->name }}
                        </option>
                    @endif
                @endforeach
            @else
                <option>
                </option>

                @foreach ($model->school_subjects() as $school_subject)
                    <option value="{{ $school_subject->id }}">
                        {{ $school_subject->name }}
                    </option>
                @endforeach
            @endisset
        </x-select>
    </div>

    <div>
        <x-input-label for="subject-category">
            Categoria da disciplina
        </x-input-label>

        <x-select name="subject_category_id" id="subject-category" class="select2" required>
            @isset($schoolPlan)
                <option value="{{ $schoolPlan->subject_category->id }}" selected>
                    {{ $schoolPlan->subject_category->name }}
                </option>

                @foreach ($model->subject_categories() as $subject_category)
                    @if ($schoolPlan->subject_category->name <> $subject_category->name)
                        <option value="{{ $subject_category->id }}">
                            {{ $subject_category->name }}
                        </option>
                    @endif
                @endforeach
            @else
                <option>
                </option>

                @foreach ($model->subject_categories() as $subject_category)
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

        <x-text-input name="time" id="time" class="p-1"
            value="{{ $schoolPlan->time ?? old('time') }}" />

    </div>
</div>

<div class="mt-6 text-end lg:mt-6">
    <x-cancel-button />

    <x-primary-button />
</div>
