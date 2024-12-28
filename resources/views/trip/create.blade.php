<x-app bodyClass="g-sidenav-show bg-gray-200" >
    <x-navbars.sidebar activePage="Trips"></x-navbars.sidebar>
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <!-- Navbar -->
        <x-navbars.navs.auth titlePage=" {{__('trip/index.add_trip')}}" parent="{{__('global.Trips')}}"></x-navbars.navs.auth>
        <!-- End Navbar -->
        <x-error></x-error>
        <div class="container-fluid px-2 px-md-4">
            <div class="page-header min-height-100 border-radius-xl mt-4"  style="background-image: linear-gradient(to left bottom, #002f6c, #00528f, #007392, #008f75, #28a745);">
                <span class="mask opacity-6">
                </span>
            </div>
            <div class="card card-body mx-3 mx-md-4 mt-n6">
                <div class="row gx-4 mb-2">
                    <div class="col-auto my-auto">
                        <div class="h-100">
                            <h5 class="mb-1">
                                {{__('global.Trips')}}
                            </h5>
                            <p class="mb-0 font-weight-normal text-sm">
                                {{__('trip/index.add_trip')}}
                            </p>
                        </div>
                    </div>
                </div>
                <div class="card card-plain h-100">
                    <div class="card-body p-3">
                        @if (session('status'))
                            <div class="row">
                                <div class="alert alert-success alert-dismissible text-white" role="alert">
                                    <span class="text-sm">{{ Session::get('status') }}</span>
                                    <button type="button" class="btn-close text-lg py-3 opacity-10"
                                            data-bs-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            </div>
                        @endif
                        <form method='POST' action='{{ route('trips.store') }}' enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="mb-3 col-md-6">
                                    <label for="driver_id">{{__('trip/index.driver')}}</label>
                                    <select class="form-select border border-2 p-2" name="driver_id" data-style="select-with-transition" title="" data-size="100" id="driver_id">
                                        <option value="" selected>--</option>
                                       @foreach($drivers as $driver)
                                            <option value="{{$driver->id}}">{{$driver->name}}</option>
                                       @endforeach
                                    </select>
                                    @error('driver_id')
                                        <p class='text-danger inputerror'>{{ $message }} </p>
                                    @enderror
                                </div>

                                <div class="mb-3 col-md-6">
                                    <label for="driver_id">{{__('trip/index.car')}}</label>
                                    <select class="form-select border border-2 p-2" name="car_id" data-style="select-with-transition" title="" data-size="100" id="car_id">
                                        <option value="">--</option>
                                        @foreach($cars as $car)
                                            <option value="{{$car->id}}" >{{$car->type ." ( ".$car->model.' ) '}}</option>
                                        @endforeach
                                    </select>
                                    @error('car_id')
                                    <p class='text-danger inputerror'>{{ $message }} </p>
                                    @enderror
                                </div>

                                <div class="mb-3 col-md-3">
                                    <label class="form-label">{{__('trip/index.date_start')}}</label>
                                    <input type="date" name="date_start" class="form-control border border-2 p-2" value='{{ old('date_start') }}'>
                                    @error('date_start')
                                        <p class='text-danger inputerror'>{{ $message }} </p>
                                    @enderror
                                </div>

                                <div class="mb-3 col-md-3">
                                    <label class="form-label">{{__('trip/index.kilo_start')}}</label>
                                    <input type="number" name="kilo_start" class="form-control border border-2 p-2" value='{{ old('kilo_start') }}'>
                                    @error('kilo_start')
                                        <p class='text-danger inputerror'>{{ $message }} </p>
                                    @enderror
                                </div>

                                <div class="mb-3 col-md-3">
                                    <label class="form-label">{{__('trip/index.date_end')}}</label>
                                    <input type="date" name="date_end" class="form-control border border-2 p-2" value='{{ old('date_end') }}'>
                                    @error('date_end')
                                    <p class='text-danger inputerror'>{{ $message }} </p>
                                    @enderror
                                </div>

                                <div class="mb-3 col-md-3">
                                    <label class="form-label">{{__('trip/index.kilo_end')}}</label>
                                    <input type="number" name="kilo_end" class="form-control border border-2 p-2" value='{{ old('kilo_end') }}'>
                                    @error('kilo_end')
                                        <p class='text-danger inputerror'>{{ $message }} </p>
                                    @enderror
                                </div>

                                <div class="mb-3 col-md-6 form-check form-switch">
                                    <input class="form-check-input " type="checkbox"
                                           name="status"
                                           id="trip_active"
                                           value="1"
                                    >
                                    <label class="form-check-label" for="trip_active">{{__('trip/index.status')}}</label>
                                </div>
                            </div>
                            <button type="submit" class="btn bg-gradient-dark">{{__('trip/index.add_trip')}}</button>
                        </form>

                    </div>
                </div>
            </div>

        </div>
    </main>
</x-app>
