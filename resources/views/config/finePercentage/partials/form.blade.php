@csrf
<div class="grid grid-cols-1 lg:grid-cols-3 gap-4 lg:gap-8">
    <div class="lg:col-start-2 lg:cols-span-2">
        <x-input-label for="percentage">
            <i class="fa-solid fa-percent"></i>
            <span class="ms-1">Percentagem</span>
        </x-input-label>

        <x-text-input name="percentage" class="font-bold text-stone-400" id="percentage"
            value="{{ $finePercentage->percentage ?? '0.00' }}" />
    </div>

    <div class="inline-flex items-end">
        <x-primary-button />
    </div>
</div>
