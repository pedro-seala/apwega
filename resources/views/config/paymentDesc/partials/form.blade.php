<div class="flex gap-4">
    @csrf

    <div class="flex flex-col flex-1 gap-8 md:flex-row">
        <div class="flex-1">
            <x-input-label for="description">
                <i class="fa-solid fa-comment"></i>
                <span class="ms-2">Descrição</span>
            </x-input-label>

            <x-text-input type="text" name="description" id="description"
                value="{{ $paymentDescription->description ?? old('description') }}" required />

        </div>

        <div>
            <x-input-label for="entity">
                <i class="fa-regular fa-user"></i>
                <span class="ms-2">Entidade</span>
            </x-input-label>

            <x-select name="entity" id="entity">
                @isset($paymentDescription)
                    <option value="{{ $paymentDescription->entity }}">
                        {{ $paymentDescription->entity ? 'Funcionário' : 'Aluno' }}
                    </option>

                    @if ($paymentDescription->entity)
                        <option value="0">Aluno</option>
                    @else
                        <option value="1">Funcionário</option>
                    @endif
                @else
                    <option value="1">
                        Funcionário
                    </option>

                    <option value="0">
                        Aluno
                    </option>
                @endisset
            </x-select>
        </div>

        <div>
            <x-input-label for="status">
                <i class="fa-regular fa-square"></i>
                <span class="ms-2">Estado</span>
            </x-input-label>

            <x-select name="status" id="status">
                @isset($paymentDescription)
                    <option value="{{ $paymentDescription->status }}">
                        {{ $paymentDescription->status ? 'Activo' : 'Inactivo' }}
                    </option>

                    @if ($paymentDescription->status)
                        <option value="0">Inactivo</option>
                    @else
                        <option value="1">Activo</option>
                    @endif
                @else
                    <option value="1">
                        Activo
                    </option>

                    <option value="0">
                        Inactivo
                    </option>
                @endisset
            </x-select>

        </div>

    </div>

    <div class="flex items-end justify-end">
        <x-primary-button />
    </div>

</div>
