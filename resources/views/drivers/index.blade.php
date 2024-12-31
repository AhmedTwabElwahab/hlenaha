<x-app bodyClass="g-sidenav-show bg-gray-200" >
    <x-navbars.sidebar activePage="drivers"></x-navbars.sidebar>
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <!-- Navbar -->
        <x-navbars.navs.auth titlePage=" {{__('drivers/index.drivers')}}"></x-navbars.navs.auth>
        <!-- End Navbar -->
        <div class="container-fluid py-4">
            @if (session('status'))
                <div class="row">
                    <div class="col-12">
                        <div class="alert alert-success alert-dismissible text-white" role="alert">
                            <span class="text-sm">{{ Session::get('status') }}</span>
                            <button type="button" class="btn-close text-lg py-3 opacity-10"
                                    data-bs-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    </div>
                </div>
            @endif
            <div class="row">
                <div class="col-12">
                    <div class="card my-4">
                        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                            <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                                <h6 class="text-white text-capitalize pe-3">{{__('global.drivers')}}</h6>
                            </div>
                        </div>
                        <div class="card-body px-0 pb-2">
                            <div class="row gx-4 mb-2">
                                <div class="col-6">
                                    <form method="get" action="{{route('driver.index')}}">
                                        <div class="ms-md-auto pe-md-3 d-flex align-items-center">
                                            <div class="input-group input-group-outline">
                                                <label class="form-label"> بحث....... </label>
                                                <input type="text" name="search" class="form-control">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="col-6 text-start" style="margin-right: -18px">
                                    <a class="btn bg-gradient-dark mb-0" href="{{route('driver.create')}}">
                                        <i class="material-icons text-sm">person_add</i>&nbsp;
                                        &nbsp;{{__('drivers/index.create_driver')}}
                                    </a>
                                </div>`
                            </div>
                            <div class="table-responsive p-0">
                                <table class="table align-items-center mb-0">
                                    <thead>
                                    <tr>
                                        <th
                                            class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            {{__('drivers/index.drivers')}}
                                        </th>
                                        <th
                                            class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 pe-2">
                                            {{__('drivers/index.address')}}
                                        </th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            {{__('drivers/index.phone')}}
                                        </th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            {{__('drivers/index.Status')}}
                                        </th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            {{__('drivers/index.balance')}}
                                        </th>

                                        <th class="text-secondary opacity-7"> {{__('drivers/index.control')}}</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($drivers as $driver)

                                            <tr>
                                                <td>
                                                    <div class="d-flex px-2 py-1">
                                                        <div>
                                                            @if($driver->image)
                                                                <img src="{{ asset($driver->image) }}"
                                                                     class="avatar avatar-sm ms-3 border-radius-lg"
                                                                     alt="user1">
                                                            @else
                                                                <img src="{{ asset(DEFUlAT_USER_IMAGE) }}"
                                                                     class="avatar avatar-sm ms-3 border-radius-lg"
                                                                     alt="user1">
                                                            @endif
                                                        </div>
                                                        <div class="d-flex flex-column justify-content-center">
                                                            <h6 class="mb-0 text-sm">{{$driver->name}}</h6>
                                                            <p class="text-xs text-secondary mb-0">{{$driver->id_number}}
                                                            </p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <p class="text-xs font-weight-bold mb-0">{{$driver->province}}</p>
                                                    <p class="text-xs text-secondary mb-0">{{$driver->city}}</p>
                                                </td>
                                                <td class="align-middle text-center">
                                                    <span class="text-secondary text-xs font-weight-bold">{{$driver->user->phone}}</span>
                                                </td>
                                                <td class="align-middle text-center text-sm">
                                                    @if($driver->status)
                                                        <span class="badge badge-sm bg-gradient-success">{{__('drivers/index.Online')}}</span>
                                                    @else
                                                        <span class="badge badge-sm bg-gradient-danger">{{__('drivers/index.offline')}}</span>
                                                    @endif
                                                </td>
                                                <td class="align-middle text-center">
                                                    <span class="text-secondary text-xs font-weight-bold">{{$driver->balance}}</span>
                                                </td>
                                                <td class="align-middle">
                                                    <a href="{{route('driver.edit',$driver->id)}}"
                                                       class="text-secondary font-weight-bold text-xs">
                                                        <i class="material-icons">edit</i>
                                                    </a>
                                                    <a href="{{route('bank_account.driver',$driver->id)}}"
                                                       class="text-secondary font-weight-bold text-xs">
                                                        <i class="material-icons">account_balance</i>
                                                    </a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                <div class="d-flex justify-content-around">
                                    <x-pagination :pagination="$drivers"></x-pagination>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <x-footers.auth></x-footers.auth>
        </div>
    </main>
</x-app>
