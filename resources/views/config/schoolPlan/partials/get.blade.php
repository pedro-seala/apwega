<div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
    <div class="p-4 my-2 bg-white rounded-lg shadow-md">
        <form action="{{ route('school-plans.get') }}" method="post">
            @csrf

            <div class="grid grid-cols-1 gap-4 md:grid-cols-4">
                <div class="md:col-span-2">
                    <x-input-label for="course" value="Curso" />

                    <x-select name="course_id" id="course" class="select2" required>
                        <option>
                        </option>

                        @foreach ($model->courses() as $course)
                            <option value="{{ $course->id }}">
                                {{ $course->name }}
                            </option>
                        @endforeach
                    </x-select>
                </div>

                <div>
                    <x-input-label for="class" value="Classe" />

                    <x-select name="class_id" id="class" class="select2" required>
                        <option>
                        </option>

                        @foreach ($model->school_classes() as $class)
                            <option value="{{ $class->id }}">
                                {{ $class->level }}ª Classe
                            </option>
                        @endforeach
                    </x-select>
                </div>

                <div class="flex items-end">
                    <x-primary-button :search="true" />
                </div>
            </div>

        </form>

    </div>
</div>
