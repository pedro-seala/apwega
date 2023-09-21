@csrf

<div class="flex flex-col lg:flex-row gap-4">

    <div class="w-full md:w-1/2">
        <x-input-label for="">
            <i class="fa-solid fa-graduation-cap"></i>
            <span class="ms-2">Curso</span>
            </x-label>

            <x-text-input type="text" name="name" id="name"
                value="{{ $course->name ?? old('name') }}" required />

    </div>

    <div class="flex items-end justify-end gap-2">
        <x-cancel-button />

        <x-primary-button />
    </div>

</div>
