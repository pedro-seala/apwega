<div
    {{ $attributes->merge([
        'class' => 'flex flex-col gap-4 lg:gap-8
        bg-gradient-to-r from-indigo-100 via-zinc-50 to-indigo-100
        rounded-lg p-3 mb-4 lg:p-6 text-center border-l-8
        border-indigo-400 shadow-md'
    ]) }}>

    <h3 class="text-lg font-bold text-indigo-600">
        <i class="fa-solid fa-exclamation-circle"></i>
        Nada para exibir
    </h3>
    <p class="text-indigo-500">
        Não foram encontrados dados
    </p>

    <div class="inline-flex justify-center">
        <x-cancel-button title="Retroceder" />
    </div>
</div>
