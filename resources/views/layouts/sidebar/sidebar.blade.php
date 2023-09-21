<div class="hidden py-2 lg:flex"
    x-data="{
        open: true,
        toggle() {
            this.open = !this.open
        },
    }">

    {{-- sidebar-fixed --}}
    @include('layouts.sidebar.fixed-sidebar')

    {{-- sidebar-nav --}}
    @include('layouts.sidebar.sidebar-nav')
</div>
