<div class="flex flex-col gap-4">
    @csrf

    <div class="grid flex-1 grid-cols-1 gap-4 md:grid-cols-2">
        <div>
            <x-input-label for="name">
                <i class="fa-solid fa-building-columns"></i>
                <span class="ms-2">Nome</span>
            </x-input-label>

            <x-text-input type="text" name="name" id="name"
                value="{{ $bank->name ?? old('name') }}" required />

        </div>

        <div>
            <x-input-label for="abbreviation">
                <i class="fa-solid fa-piggy-bank"></i>
                <span class="ms-2">Abreviatura</span>
            </x-input-label>

            <x-text-input type="text" name="abbreviation"
                value="{{ $bank->abbreviation ?? old('abbreviation') }}"
                id="abbreviation" />

        </div>

        <div>
            <x-input-label for="account_number">
                <i class="fa-solid fa-money-check"></i>
                <span class="ms-2">Nº de conta</span>
            </x-input-label>

            <x-text-input type="text" name="account_number"
                value="{{ $bank->account_number ?? old('account_number') }}"
                id="account_number" placeholder="" />

        </div>

        <div>
            <x-input-label for="iban">
                <i class="fa-solid fa-money-check-dollar"></i>
                <span class="ms-2">IBAN</span>
            </x-input-label>

            <x-text-input type="text" name="iban"
                value="{{ $bank->iban ?? old('iban') }}" id="iban" />

        </div>
    </div>

    <div class="mt-6 text-end lg:mt-2">
        <x-cancel-button />

        <x-primary-button />
    </div>
</div>
