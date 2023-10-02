<div role="alert" x-show="open" x-data="{ open: true }" x-transition
    class="rounded-xl border border-gray-100 shadow
        bg-white p-4 border-l-8 border-l-violet-500">

    <div class="flex items-start gap-8">
        <span class="text-violet-500 text-4xl">
            <i class="fa-solid fa-exclamation-circle"></i>
        </span>

        <div class="flex-1">
            <strong class="text-2xl block font-bold text-indigo-800">
                Informação
            </strong>

            <p class="mt-1 text-md text-gray-700">
                Nenhuma informação encontrada
            </p>

            <div class="mt-4 flex gap-2">
                <x-cancel-button title="Retroceder" />
            </div>
        </div>

        <button class="text-violet-400 transition hover:text-violet-600"
            x-on:click="open = !open">

            <i class="fa-solid fa-xmark fa-xl"></i>
        </button>
    </div>
</div>
