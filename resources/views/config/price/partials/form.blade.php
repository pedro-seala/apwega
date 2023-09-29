@csrf

<div class="grid grid-cols-1 gap-4 {{ !$entity ? 'md:grid-cols-3' : 'md:grid-cols-2' }}">
    {{-- Description --}}
    <div>
        <x-input-label for="payment_description_id">
            <i class="fa-solid fa-comment"></i>
            <span class="ms-2">Descrição</span>
        </x-input-label>

        <x-select name="payment_description_id" id="payment_description_id" class="select2" required>
            @isset($price)
                <option value="{{ $price->payment_description->id }}">
                    {{ $price->payment_description->description }}
                </option>

                @foreach ($model->payment_descriptions() as $paymentDescription)
                    @if ($paymentDescription->id <> $price->payment_description->id)
                        <option value="{{ $paymentDescription->id }}">
                            {{ $paymentDescription->description }}
                        </option>
                    @endif
                @endforeach
            @else
                <option>
                </option>

                @foreach ($model->payment_descriptions() as $paymentDescription)
                    <option value="{{ $paymentDescription->id }}">
                        {{ $paymentDescription->description }}
                    </option>
                @endforeach
            @endisset
        </x-select>
    </div>

    {{-- Class --}}
    @if (!$entity)
        <div>
            <x-input-label for="school_class_id">
                <i class="fa-regular fa-circle"></i>
                <span class="ms-2">Classe</span>
            </x-input-label>

            <x-select name="school_class_id" id="school_class_id" class="w-full" required>
                @isset($price)
                    <option value="{{ $price->school_class_id }}">
                        {{ $price->school_class->level }}ª Classe
                    </option>

                    @foreach ($model->school_classes() as $class)
                        @if ($class->id <> $price->school_class_id)
                            <option value="{{ $class->id }}">
                                {{ $class->level }}ª Classe
                            </option>
                        @endif
                    @endforeach
                @else
                    <option disabled selected>
                        Selecione uma opção
                    </option>

                    @foreach ($model->school_classes() as $class)
                        <option value="{{ $class->id }}">
                            {{ $class->level }}ª Classe
                        </option>
                    @endforeach
                @endisset
            </x-select>
        </div>
    @endif

    {{-- Price --}}
    <div>
        <x-input-label for="price">
            <i class="fa-regular fa-money-bill-1"></i>
            <span class="ms-2">Preço</span>
        </x-input-label>

        <x-text-input type="text" name="price"
            value="{{ $price->price ?? old('price') }}" required />

    </div>

    {{-- Course --}}
    @if (!$entity)
        <div>
            <x-input-label for="course_id">
                <i class="fa-solid fa-graduation-cap"></i>
                <span class="ms-2">Curso</span>
            </x-input-label>

            <x-select name="course_id" id="course_id" class="select2" required>
                @isset($price)
                    <option value="{{ $price->course->id }}">
                        {{ $price->course->name }}
                    </option>

                    @foreach ($model->courses() as $course)
                        @if ($course->id <> $price->course->id)
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
    @endif

    {{-- School year --}}
    @if (!$entity)
        <div>
            <x-input-label for="school_year_id">
                <i class="fa-regular fa-calendar"></i>
                <span class="ms-2">Ano letivo</span>
            </x-input-label>

            <x-select name="school_year_id" id="school_year_id" class="w-full" required>
                @isset($price)
                    <option value="{{ $price->school_year->id }}">
                        {{ $price->school_year->year }}
                    </option>

                    @foreach ($model->school_years() as $schoolYear)
                        @if ($schoolYear->id != $price->school_year->id)
                            <option value="{{ $schoolYear->id }}">
                                {{ $schoolYear->year }}
                            </option>
                        @endif
                    @endforeach
                @else
                    <option disabled selected>
                        Selecione uma opção
                    </option>

                    @foreach ($model->school_years() as $schoolYear)
                        <option value="{{ $schoolYear->id }}">
                            {{ $schoolYear->year }}
                        </option>
                    @endforeach
                @endisset
            </x-select>
        </div>
    @endif

    {{-- Entity param --}}
    <input type="hidden" name="entity" value="{{ $entity }}" />
</div>

<div class="mt-6 text-end lg:mt-3">
    <x-cancel-button />

    <x-primary-button />
</div>
