<x-app bodyClass="g-sidenav-show bg-gray-200" >
    <x-navbars.sidebar activePage="cars"></x-navbars.sidebar>
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <!-- Navbar -->
        <x-navbars.navs.auth titlePage=" {{__('cars/index.cars')}}"></x-navbars.navs.auth>
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
                                <h6 class="text-white text-capitalize pe-3">{{__('cars/index.cars')}}</h6>
                            </div>
                        </div>
                        <div class="card-body px-0 pb-2">
                            <div class="row gx-4 mb-2">
                                <div class="col-6">
                                    <form method="get" action="{{route('cars.index')}}">
                                        <div class="ms-md-auto pe-md-3 d-flex align-items-center">
                                            <div class="input-group input-group-outline">
                                                <label class="form-label"> بحث....... </label>
                                                <input type="text" name="search" class="form-control">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="col-6 text-start" style="margin-right: -18px">
                                    <a class="btn bg-gradient-dark mb-0" href="{{route('cars.create')}}">
                                        <i class="material-icons text-sm">local_taxi</i>&nbsp;
                                        &nbsp;{{__('cars/index.create_car')}}
                                    </a>
                                </div>`
                            </div>
                            <div class="table-responsive p-0">
                                <table class="table align-items-center mb-0">
                                    <thead>
                                    <tr>
                                        <th
                                            class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            {{__('cars/index.type')}}
                                        </th>
                                        <th
                                            class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 pe-2">
                                            {{__('cars/index.brand')}}
                                        </th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            {{__('cars/index.model')}}
                                        </th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            {{__('cars/index.insurance')}}
                                        </th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            {{__('cars/index.status')}}
                                        </th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            {{__('cars/index.description')}}
                                        </th>

                                        <th class="text-secondary opacity-7"> {{__('cars/index.control')}}</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($cars as $car)

                                            <tr>
                                                <td>
                                                    <div class="d-flex px-2 py-1">
                                                        <div class="d-flex flex-column justify-content-center">
                                                            <h6 class="mb-0 text-sm">{{$car->type}}</h6>
                                                            <p class="text-xs text-secondary mb-0">{{$car->color}}
                                                            </p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <p class="text-xs font-weight-bold mb-0">{{$car->brand}}</p>
                                                    <p class="text-xs text-secondary mb-0">{{$car->year}}</p>
                                                </td>
                                                <td class="align-middle text-center">
                                                    <span class="text-secondary text-xs font-weight-bold">{{$car->model}}</span>
                                                </td>
                                                <td class="align-middle text-center">
                                                    <p class="text-xs font-weight-bold mb-0">{{$car->insurance}}</p>
                                                    <p class="text-xs text-secondary mb-0">{{$car->insurance_expiry}}</p>
                                                </td>
                                                <td class="align-middle text-center text-sm">
                                                    @if($car->status)
                                                        <span class="badge badge-sm bg-gradient-success">{{__('cars/index.Online')}}</span>
                                                    @else
                                                        <span class="badge badge-sm bg-gradient-danger">{{__('cars/index.offline')}}</span>
                                                    @endif
                                                </td>
                                                <td class="align-middle text-center">
                                                    <span class="text-secondary text-xs font-weight-bold">{{$car->description}}</span>
                                                </td>
                                                <td class="align-middle">
                                                    <a href="{{route('cars.edit',$car->id)}}"
                                                       class="text-secondary font-weight-bold text-xs">
                                                        <i class="material-icons">edit</i>
                                                    </a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                <div class="d-flex justify-content-around">
                                    <x-pagination :pagination="$cars"></x-pagination>
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
