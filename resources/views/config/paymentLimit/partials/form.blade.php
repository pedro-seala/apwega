@csrf
<div class="grid grid-cols-1 lg:grid-cols-3 gap-4 lg:gap-8">
    <div>
        <x-input-label for="month_case">
            <i class="fa-solid fa-calendar"></i>
            Mês
        </x-input-label>

        <x-select name="month_case" id="month_case" class="w-full" required>
            @isset($paymentLimit)
                <option value="{{ $paymentLimit->month_case }}">
                    {{ $paymentLimit->month_case ? 'Mês seguinte' : 'Mês corrente' }}
                </option>

                @switch($paymentLimit->month_case)
                    @case(1)
                        <option value="0">
                            Mês corrente
                        </option>
                    @break

                    @case(0)
                        <option value="1">
                            Mês seguinte
                        </option>
                    @break
                @endswitch
            @else
                <option value="0">
                    Mês corrente
                </option>

                <option value="1">
                    Mês seguinte
                </option>
            @endisset
        </x-select>
    </div>

    <div>
        <x-input-label for="day">
            <i class="fa-solid fa-calendar-day"></i>
            Dia
        </x-input-label>

        <x-text-input type="number" step="7" min="1" max="31" name="day"
            value="{{ $paymentLimit->day ?? '29' }}" required />

    </div>

    <div class="inline-flex items-end">
        <x-primary-button />
    </div>
</div>
