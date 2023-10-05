@props(['id', 'action' => ''])

<div {{ $attributes->merge(['class' => "inline"]) }}
    x-data="{
        showModal: false,
        toggleModal() {
            this.showModal = !this.showModal
        }
    }"

    @keydown.escape="toggleModal">

    {{-- Trigger for Modal --}}
    <button class="p-1 text-xs font-semibold
                text-white uppercase bg-red-600 rounded-md
                focus:ring-2 focus:ring-red-600 focus:ring-offset-2
                hover:bg-red-700 hover:text-red-50"

        type="button" @click="toggleModal">

        <i class="fa-solid fa-trash"></i>
        {{ __('Delete') }}
    </button>

    {{-- Modal --}}
    <div class="fixed inset-0 z-30 flex items-center
                justify-center overflow-hidden bg-black bg-opacity-50"

        x-show="showModal"
        x-transition
        x-cloak>

        {{-- Modal inner --}}
        <div class="w-full md:w-1/2 lg:w-1/3 px-6 py-4
                    mx-auto text-left bg-white rounded-lg shadow-lg"

            @click.away="toggleModal">

            {{-- Title / Close --}}
            <div class="flex items-center justify-between p-4 text-zinc-500">
                <h5 class="mr-3 text-xl font-semibold max-w-none">
                    <i class="fa-solid fa-exclamation-circle"></i>
                    Deseja realmente apagar?
                </h5>

                <button type="button" class="z-50 cursor-pointer" @click="toggleModal">
                    <i class="fa-solid fa-times fa-xl"></i>
                </button>
            </div>

            {{-- Content --}}
            <div class="flex justify-end gap-8 pt-8 mt-8">
                <form action="{{ $action }}" method="POST">
                    @csrf
                    @method('delete')

                    <x-danger-button>
                        <i class="fa-solid fa-trash"></i>
                        <span class="ms-1">{{ __('Delete') }}</span>
                    </x-danger-button>
                </form>
            </div>
        </div>
    </div>

</div>
