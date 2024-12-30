@props(['activePage'])

<aside
    class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-end me-3 rotate-caret  bg-gradient-dark"
    id="sidenav-main">
    <div class="sidenav-header">
        <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute start-0 top-0 d-none d-xl-none"
           aria-hidden="true" id="iconSidenav"></i>
        <a class="navbar-brand m-0 d-flex text-wrap align-items-center" href=" {{ route('dashboard') }} ">
            <img src="{{ asset('assets') }}/img/logo-ct.png" class="navbar-brand-img mx-2 h-100" alt="main_logo">
            <span class="ms-1 font-weight-bold text-white">{{ __('global.project_name') }}</span>
        </a>
    </div>
    <hr class="horizontal light mt-0 mb-2">
    <div class="collapse navbar-collapse px-0 w-auto  max-height-vh-100" id="sidenav-collapse-main">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link {{ $activePage == 'dashboard' ? 'active bg-gradient-success' : '' }}" href="{{ route('dashboard') }}">
                    <div class="text-white text-center ms-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons-round opacity-10">dashboard</i>
                    </div>
                    <span class="nav-link-text me-1">{{__('global.dashboard')}}</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ $activePage == 'drivers' ? 'active bg-gradient-success' : '' }}"  href="{{ route('driver.index') }}">
                    <div class="text-white text-center ms-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons-round opacity-10">groups</i>
                    </div>
                    <span class="nav-link-text me-1">{{__('global.drivers')}}</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ $activePage == 'cars' ? 'active bg-gradient-success' : '' }}"  href="{{ route('cars.index') }}">
                    <div class="text-white text-center ms-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons-round opacity-10">directions_car</i>
                    </div>
                    <span class="nav-link-text me-1">{{__('global.cars')}}</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ $activePage == 'Trips' ? 'active bg-gradient-success' : '' }}"  href="{{ route('trips.index') }}">
                    <div class="text-white text-center ms-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons-round opacity-10">mode_of_travel</i>
                    </div>
                    <span class="nav-link-text me-1">{{__('global.Trips')}}</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ $activePage == 'banks' ? 'active bg-gradient-success' : '' }}" href="{{ route('bank_account') }}">
                    <div class="text-white text-center ms-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">assured_workload</i>
                    </div>
                    <span class="nav-link-text me-1">{{__('global.bank_account')}}</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ $activePage == 'transaction' ? 'active bg-gradient-success' : '' }}" href="{{ route('transaction.index') }}">
                    <div class="text-white text-center ms-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">cached</i>
                    </div>
                    <span class="nav-link-text me-1">{{__('global.transaction')}}</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ $activePage == 'user profile' ? 'active bg-gradient-success' : '' }}" href="{{ route('user_profile') }}">
                    <div class="text-white text-center ms-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons-round opacity-10">person</i>
                    </div>
                    <span class="nav-link-text me-1">{{__('global.personalInfo')}}</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ $activePage == 'messages' ? 'active bg-gradient-success' : '' }}" href="{{ route('messages.index') }}">
                    <div class="text-white text-center ms-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">chat</i>
                    </div>
                    <span class="nav-link-text me-1">{{__('global.messages')}}</span>
                </a>
            </li>

        </ul>
    </div>
</aside>
