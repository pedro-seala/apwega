<div class="flex gap-4">
    @csrf

    <div class="grid flex-1 grid-cols-1 gap-4 md:grid-cols-2 lg:grid-cols-3">

        <div>
            <x-input-label for="year">
                <i class="fa-solid fa-calendar"></i>
                <span class="ms-2">Ano lectivo</span>
            </x-label>

            <x-text-input type="text" name="year" id="year"
                value="{{ $schoolYear->year ?? old('year') }}" required />

        </div>

        <div>
            <x-input-label for="start">
                <i class="fa-solid fa-calendar-day"></i>
                <span class="ms-2">Início</span>
            </x-label>

            <x-text-input type="date" name="start" id="start"
                value="{{ $schoolYear->start ?? old('start') }}" />

        </div>

        <div>
            <x-input-label for="end">
                <i class="fa-solid fa-calendar-day"></i>
                <span class="ms-2">Fim do ano letivo</span>
            </x-label>

            <x-text-input type="date" name="end" id="end"
                value="{{ $schoolYear->end ?? old('end') }}" />

        </div>

    </div>

    <div class="flex items-end justify-end">
        <x-primary-button />
    </div>

</div>
