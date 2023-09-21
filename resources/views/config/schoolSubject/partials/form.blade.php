<div class="flex gap-4">
    @csrf

    <div class="flex flex-1 gap-8">

        <div class="flex-1">
            <x-input-label for="nome">
                <i class="fa-solid fa-chalkboard-user"></i>
                <span class="ms-2">Nome</span>
            </x-input-label>

            <x-text-input type="text" name="name" id="name"
                value="{{ $schoolSubject->name ?? old('name') }}" required />

        </div>

        <div>
            <x-input-label for="abbreviation">
                <i class="fa-regular fa-circle"></i>
                <span class="ms-2">Abreviatura</span>
            </x-input-label>

            <x-text-input type="text" name="abbreviation"
                value="{{ $schoolSubject->abbreviation ?? old('abbreviation') }}"
                id="abbreviation" />

        </div>

        <div>
            <x-input-label for="status">
                <i class="fa-regular fa-square"></i>
                <span class="ms-2">Estado</span>
            </x-input-label>

            <x-select name="status" id="status">
                @isset($schoolSubject)
                    <option value="{{ $schoolSubject->status }}">
                        {{ (bool) $schoolSubject->status ? 'Activo' : 'Inactivo' }}
                    </option>

                    @if ($schoolSubject->status)
                        <option value="0">Inactivo</option>
                    @else
                        <option value="1">Activo</option>
                    @endif
                @else
                    <option value="1">Activo</option>
                    <option value="0">Inactivo</option>
                @endisset
            </x-select>
        </div>
    </div>

    <div class="flex items-end justify-end">
        <x-primary-button />
    </div>

</div>
