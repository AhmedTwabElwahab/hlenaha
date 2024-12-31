@props(['titlePage','parent'])

<!-- Navbar -->
<nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur"
     navbar-scroll="true">
    <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 ">
                <li class="breadcrumb-item text-sm ps-2">
                    <a class="opacity-5 text-dark" href="{{route('dashboard')}}"><i class="material-icons">house</i></a>
                </li>
                @isset($parent)
                    <li class="breadcrumb-item text-sm ps-2">
                        <a class="opacity-5 text-dark" href="{{ url()->previous()}}">{{$parent}}</a>
                    </li>
                @endisset
                <li class="breadcrumb-item text-sm text-dark active" aria-current="page">{{ $titlePage }}</li>
            </ol>
            <h6 class="font-weight-bolder mb-0">{{ $titlePage }}</h6>
        </nav>
        <div class="collapse navbar-collapse mt-sm-0 mt-2 px-0" id="navbar">
            <form method="POST" action="{{ route('logout') }}" class="d-none" id="logout-form">
                @csrf
            </form>
            <ul class="navbar-nav me-auto ms-0 justify-content-end">
                <li class="nav-item dropdown ps-2 d-flex align-items-center">
                    <a class="nav-link text-body p-0" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="material-icons cursor-pointer" id="notification_ico">notifications_active</i>
                    </a>
                    <ul class="dropdown-menu px-2 py-3 me-sm-n4" id="no_ul" aria-labelledby="dropdownMenuButton">
                        <p>{{__('global.noMessages')}}</p>
                    </ul>
                </li>
                <li class="nav-item px-3 d-flex align-items-center">
                    <a href="{{route('user_profile')}}" class="nav-link text-body p-0">
                        <i class="material-icons">settings</i>
                    </a>
                </li>
                <li class="nav-item d-flex align-items-center">
                    <a href="javascript:;" class="nav-link text-body font-weight-bold px-0">
                        <i class="fa fa-user me-sm-1"></i>
                        <span class="d-sm-inline d-none"
                              onclick="event.preventDefault();document.getElementById('logout-form').submit();">{{__('global.logout')}}</span>
                    </a>
                </li>
                <li class="nav-item d-xl-none pe-3 d-flex align-items-center">
                    <a href="javascript:;" class="nav-link text-body p-0" id="iconNavbarSidenav">
                        <div class="sidenav-toggler-inner">
                            <i class="sidenav-toggler-line"></i>
                            <i class="sidenav-toggler-line"></i>
                            <i class="sidenav-toggler-line"></i>
                        </div>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- End Navbar -->

