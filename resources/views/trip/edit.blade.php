<x-app bodyClass="g-sidenav-show bg-gray-200" >
    <x-navbars.sidebar activePage="Trips"></x-navbars.sidebar>
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <!-- Navbar -->
        <x-navbars.navs.auth titlePage=" {{__('trip/index.edit_trip')}}" parent="{{__('global.Trips')}}"></x-navbars.navs.auth>
        <!-- End Navbar -->
        <div class="container-fluid px-2 px-md-4">
            <div class="page-header min-height-100 border-radius-xl mt-4"  style="background-image: linear-gradient(to left bottom, #002f6c, #00528f, #007392, #008f75, #28a745);">

            </div>
            <div class="card card-body mx-3 mx-md-4 mt-n6">
                <div class="row gx-4 mb-2">
                    <div class="col-auto my-auto">
                        <div class="h-100">
                            <h5 class="mb-1">
                                {{__('global.Trips')}}
                            </h5>
                            <p class="mb-0 font-weight-normal text-sm">
                                {{__('trip/index.edit_trip')}}
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 my-sm-auto me-sm-auto ms-sm-0 mx-auto mt-3 d-flex justify-content-end">
                        <div class="nav-wrapper position-relative end-0">
                            <form method="POST" id="DELETE_DRIVER_FORM" action="{{ route('trips.destroy', $trip -> id) }}">
                                @csrf
                                <input type="hidden" name="_method" value="DELETE">
                                <button class="btn btn-icon btn-2 btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#DeleteModal">
                                    <span class="btn-inner--icon">
                                        {{__('trip/index.delete_trip')}}
                                        <i class="material-icons">delete</i>
                                    </span>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="card card-plain h-100">
                    <div class="card-body p-3">
                        <div class="container-fluid px-2 px-md-4">
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
                        </div>
                        {{--        Display all errors--}}
                        <div class="container-fluid px-2 px-md-4">
                            @foreach($errors->all() as $error)
                                <div class="row">
                                    <div class="alert alert-danger alert-dismissible text-white" role="alert">
                                        <span class="text-sm">{{ $error }}</span>
                                        <button type="button" class="btn-close text-lg py-3 opacity-10"
                                                data-bs-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        {{--        Display all errors--}}
                        <form method='POST' action='{{ route('trips.update',$trip->id) }}' enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <div class="row">

                                <div class="mb-3 col-md-6">
                                    <label for="driver_id">{{__('trip/index.driver')}}</label>
                                    <select class="form-select border border-2 p-2" name="driver_id" data-style="select-with-transition" title="" data-size="100" id="driver_id">
                                        <option value="">--</option>
                                       @foreach($drivers as $driver)
                                            <option value="{{$driver->id}}" @if($driver->id == $trip->driver_id) selected @endif>{{$driver->name}}</option>
                                       @endforeach
                                    </select>
                                </div>

                                <div class="mb-3 col-md-6">
                                    <label for="driver_id">{{__('trip/index.car')}}</label>
                                    <select class="form-select border border-2 p-2" name="car_id" data-style="select-with-transition" title="" data-size="100" id="car_id">
                                        <option value="">--</option>
                                        @foreach($cars as $car)
                                            <option value="{{$car->id}}" @if($car->id == $trip->car_id) selected @endif>{{$car->type ." ( ".$car->model.' ) '}}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="mb-3 col-md-3">
                                    <label class="form-label">{{__('trip/index.date_start')}}</label>
                                    <input type="date" name="date_start" class="form-control border border-2 p-2" value='{{ old('date_start',$trip->date_start) }}'>
                                    @error('date_start')
                                        <p class='text-danger inputerror'>{{ $message }} </p>
                                    @enderror
                                </div>

                                <div class="mb-3 col-md-3">
                                    <label class="form-label">{{__('trip/index.kilo_start')}}</label>
                                    <input type="number" name="kilo_start" class="form-control border border-2 p-2" value='{{ old('kilo_start',$trip->kilo_start) }}'>
                                    @error('kilo_start')
                                        <p class='text-danger inputerror'>{{ $message }} </p>
                                    @enderror
                                </div>

                                <div class="mb-3 col-md-3">
                                    <label class="form-label">{{__('trip/index.date_end')}}</label>
                                    <input type="date" name="date_end" class="form-control border border-2 p-2" value='{{ old('date_end',$trip->date_end) }}'>
                                    @error('date_end')
                                    <p class='text-danger inputerror'>{{ $message }} </p>
                                    @enderror
                                </div>

                                <div class="mb-3 col-md-3">
                                    <label class="form-label">{{__('trip/index.kilo_end')}}</label>
                                    <input type="number" name="kilo_end" class="form-control border border-2 p-2" value='{{ old('kilo_end',$trip->kilo_end) }}'>
                                    @error('kilo_end')
                                        <p class='text-danger inputerror'>{{ $message }} </p>
                                    @enderror
                                </div>

                                <div class="mb-3 col-md-6 form-check form-switch">
                                    <input class="form-check-input " type="checkbox"
                                           name="status"
                                           id="trip_active"
                                           value="1"
                                           @if($trip->status === 1) checked @endif>
                                    <label class="form-check-label" for="trip_active">{{__('trip/index.status')}}</label>
                                </div>
                            </div>
                            <button type="submit" class="btn bg-gradient-dark">{{__('trip/index.edit')}}</button>
                        </form>

                    </div>
                </div>
            </div>

        </div>
    </main>

    {{--        MODEL SECTION --}}
    <!-- Modal -->
    <div class="modal fade" id="DeleteModal" tabindex="-1" role="dialog" aria-labelledby="DeleteModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title font-weight-normal" id="DeleteModalLabel">{{__('global.sure_title')}}</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    {{__('global.sure_delete_p')}}
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">{{__('global.close')}}</button>
                    <button type="submit" form="DELETE_DRIVER_FORM" class="btn bg-gradient-primary">{{__('global.sure')}}</button>
                </div>
            </div>
        </div>
    </div>
    {{--    END  MODEL SECTION --}}
</x-app>
