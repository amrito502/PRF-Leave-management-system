<div :class="{ 'dark text-white-dark': $store.app.semidark }">

    @if (Auth::user() && Auth::user()->role == 2)
        {{-- ================HR-sidebar-start=============== --}}
        @include('components.control-sidebars.hr_sidebar')
        {{-- ================HR-sidebar-end=============== --}}
    @elseif (Auth::user() && Auth::user()->role == 1)
        {{-- ================Supervisor-sidebar-start=============== --}}
        @include('components.control-sidebars.supervisor_sidebar')
        {{-- ================Supervisor-sidebar-end=============== --}}
    @elseif (Auth::user() && Auth::user()->role == 0)
        {{-- ================Employee-sidebar-start=============== --}}
        @include('components.control-sidebars.employee_sidebar')
        {{-- ================Employee-sidebar-end=============== --}}
    @endif

</div>
