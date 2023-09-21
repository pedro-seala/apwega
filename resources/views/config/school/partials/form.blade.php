<div class="grid grid-cols-1 lg:grid-cols-4 gap-y-8 gap-x-6">
    @csrf

    <div class="col-span-2">
        <x-input-label for="name">
            <i class="fa-solid fa-building"></i>
            Nome
        </x-input-label>

        <x-text-input type="text" name="name"
            value="{{ $school->name ?? old('name') }}" id="name" maxlength="128"
            required />

    </div>

    <div>
        <x-input-label for="email">
            <i class="fa-solid fa-envelope"></i>
            E-mail
        </x-input-label>

        <x-text-input type="email" name="email"
            value="{{ $school->email ?? old('email') }}" id="email" />

    </div>

    <div>
        <x-input-label for="phone">
            <i class="fa-solid fa-phone"></i>
            Telemóvel
        </x-input-label>

        <x-text-input type="tel" name="phone"
            value="{{ $school->phone ?? old('phone') }}" id="phone"
            maxlength="12" />

    </div>

    <div>
        <x-input-label for="alternative_phone">
            <i class="fa-solid fa-phone"></i>
            Telemóvel alternativo
        </x-input-label>

        <x-text-input type="tel" name="alternative_phone"
            value="{{ $school->alternative_phone ?? old('alternative_phone') }}"
            id="alternative_phone" maxlength="12" />

    </div>

    <div>
        <x-input-label for="province">
            <i class="fa-solid fa-map"></i>
            Província
        </x-input-label>

        <x-text-input type="text" name="province"
            value="{{ $school->province ?? old('province') }}" id="province"
            maxlength="24" />

    </div>

    <div>
        <x-input-label for="county">
            <i class="fa-solid fa-map"></i>
            Município
        </x-input-label>

        <x-text-input type="text" name="county"
            value="{{ $school->county ?? old('county') }}" id="county"
            maxlength="24" />

    </div>

    <div>
        <x-input-label for="town">
            <i class="fa-solid fa-map"></i>
            Bairro
        </x-input-label>

        <x-text-input name="town"
            value="{{ $school->town ?? old('town') }}"
            id="town" maxlength="32" />

    </div>

    <div>
        <x-input-label for="creation_document">
            <i class="fa-solid fa-file"></i>
            Decreto de criação
        </x-input-label>

        <x-text-input name="creation_document"
            value="{{ $school->creation_document ?? old('creation_document') }}"
            id="creation_document" maxlength="64" />

    </div>

</div>

<div class="mt-6 text-end md:mt-3">
    <x-cancel-button />

    <x-primary-button />
</div>
