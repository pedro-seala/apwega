<div class="flex flex-col gap-4 md:flex-row">
    @csrf

    <div class="grid flex-1 grid-cols-1 gap-8 md:grid-cols-3">
        <div>
            <x-input-label for="month_id">
                <i class="fa-solid fa-calendar"></i>
                <span class="ms-2">Mês</span>
            </x-input-label>

            <x-select name="month_id" id="month_id" class="select2" required>
                @isset($sealNote)
                    <option value="{{ $sealNote->month_id }}">
                        {{ $sealNote->month->name }}
                    </option>

                    @foreach ($months as $month)
                        @if ($month->id <> $sealNote->month_id)
                            <option value="{{ $month->id }}">
                                {{ $month->name }}
                            </option>
                        @endif
                    @endforeach
                @else
                    @foreach ($months as $month)
                        <option value="{{ $month->id }}">
                            {{ $month->name }}
                        </option>
                    @endforeach
                @endisset
            </x-select>
        </div>

        <div>
            <x-input-label for="quarter_id">
                <i class="fa-solid fa-calendar-day"></i>
                <span class="ms-2">Trimestre</span>
            </x-input-label>

            <x-select id="quarter_id" name="quarter_id" class="w-full" required>
                @isset($sealNote)
                    <option value="{{ $sealNote->quarter_id }}">
                        {{ $sealNote->quarter->order }}
                    </option>

                    @foreach ($quarters as $quarter)
                        @if ($quarter->id <> $sealNote->quarter_id)
                            <option value="{{ $quarter->id }}">
                                {{ $quarter->order }}
                            </option>
                        @endif
                    @endforeach
                @else
                    @foreach ($quarters as $quarter)
                        <option value="{{ $quarter->id }}">
                            {{ $quarter->order }}
                        </option>
                    @endforeach
                @endisset
            </x-select>
        </div>

        <div>
            <x-input-label for="status">
                <i class="fa-regular fa-square"></i>
                <span class="ms-2">Estado</span>
            </x-input-label>

            <x-select name="status" id="status" class="w-full" required>
                @isset($sealNote)
                    <option value="{{ $sealNote->status }}">
                        {{ $sealNote->status ? 'Sim' : 'Não' }}
                    </option>

                    @if ($sealNote->status)
                        <option value="0">
                            Não
                        </option>
                    @else
                        <option value="1">
                            Sim
                        </option>
                    @endif
                @else
                    <option value="1">
                        Sim
                    </option>

                    <option value="0">
                        Não
                    </option>
                @endisset
            </x-select>
        </div>
    </div>

    <div class="flex items-end justify-end">
        <x-primary-button class="mb-2" />
    </div>
</div>
