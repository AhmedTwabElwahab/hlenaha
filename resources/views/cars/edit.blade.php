<x-app bodyClass="g-sidenav-show bg-gray-200" >
    <x-navbars.sidebar activePage="cars"></x-navbars.sidebar>
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <!-- Navbar -->
        <x-navbars.navs.auth titlePage=" {{__('cars/index.edit_cars')}}" parent="{{__('cars/index.cars')}}"></x-navbars.navs.auth>
        <!-- End Navbar -->
        <div class="container-fluid px-2 px-md-4">
            <div class="page-header min-height-300 border-radius-xl mt-4"  style="background-image: linear-gradient(to left bottom, #002f6c, #00528f, #007392, #008f75, #28a745);">
                <span class="mask opacity-6">
                </span>
            </div>
            <div class="card card-body mx-3 mx-md-4 mt-n6">
                <div class="row gx-4 mb-2">
                    <div class="col-lg-4 col-md-6 my-sm-auto me-sm-auto ms-sm-0 mx-auto mt-3 d-flex justify-content-end">
                        <div class="nav-wrapper position-relative end-0">
                            <form method="POST" id="DELETE_cars_FORM" action="{{ route('cars.destroy', $car -> id) }}">
                                @csrf
                                <input type="hidden" name="_method" value="DELETE">
                                <button class="btn btn-icon btn-2 btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#DeleteModal">
                                    <span class="btn-inner--icon">
                                        <i class="material-icons">delete</i>
                                        {{__('cars/edit.delete_cars')}}
                                    </span>
                                </button>
                            </form>
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
                        @if (Session::has('demo'))
                            <div class="row">
                                <div class="alert alert-danger alert-dismissible text-white" role="alert">
                                    <span class="text-sm">{{ Session::get('demo') }}</span>
                                    <button type="button" class="btn-close text-lg py-3 opacity-10"
                                            data-bs-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            </div>
                        @endif
                        <form method='POST' action='{{ route('cars.update',$car->id) }}' enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <div class="mb-3 col-md-6">
                                    <label class="form-label">{{__('cars/edit.type')}}</label>
                                    <input type="text" name="type" class="form-control border border-2 p-2" value='{{ old('type', $car->type) }}'>
                                    @error('type')
                                        <p class='text-danger inputerror'>{{ $message }} </p>
                                    @enderror
                                </div>

                                <div class="mb-3 col-md-6">
                                    <label class="form-label">{{__('cars/edit.brand')}}</label>
                                    <input type="text" name="brand" class="form-control border border-2 p-2" value='{{ old('brand', $car->brand) }}'>
                                    @error('brand')
                                        <p class='text-danger inputerror'>{{ $message }} </p>
                                    @enderror
                                </div>

                                <div class="mb-3 col-md-6">
                                    <label class="form-label">{{__('cars/edit.model')}}</label>
                                    <input type="text" name="model" class="form-control border border-2 p-2" value='{{ old('model', $car->model) }}'>
                                    @error('model')
                                        <p class='text-danger inputerror'>{{ $message }} </p>
                                    @enderror
                                </div>

                                <div class="mb-3 col-md-6">
                                    <label class="form-label">{{__('cars/edit.year')}}</label>
                                    <input type="text" name="year" class="form-control border border-2 p-2" value='{{ old('year',$car->year) }}'>
                                    @error('year')
                                    <p class='text-danger inputerror'>{{ $message }} </p>
                                    @enderror
                                </div>

                                <div class="mb-3 col-md-4">
                                    <label class="form-label">{{__('cars/edit.color')}}</label>
                                    <input type="text" name="color" class="form-control border border-2 p-2" value='{{ old('color',$car->color) }}'>
                                    @error('color')
                                        <p class='text-danger inputerror'>{{ $message }} </p>
                                    @enderror
                                </div>

                                <div class="mb-3 col-md-4">
                                    <label class="form-label">{{__('cars/edit.price_day')}}</label>
                                    <input type="number" name="price_day" class="form-control border border-2 p-2" value='{{ old('price_day',$car->price_day) }}'>
                                    @error('price_day')
                                        <p class='text-danger inputerror'>{{ $message }} </p>
                                    @enderror
                                </div>

                                <div class="mb-3 col-md-4">
                                    <label class="form-label">{{__('cars/edit.kilo')}}</label>
                                    <input type="text" name="kilo" class="form-control border border-2 p-2" value='{{ old('kilo',$car->kilo) }}'>
                                    @error('kilo')
                                        <p class='text-danger inputerror'>{{ $message }} </p>
                                    @enderror
                                </div>

                                <div class="mb-3 col-md-4">
                                    <label class="form-label">{{__('cars/edit.insurance')}}</label>
                                    <input type="text" name="insurance" class="form-control border border-2 p-2" value='{{ old('insurance',$car->insurance) }}'>
                                    @error('insurance')
                                        <p class='text-danger inputerror'>{{ $message }} </p>
                                    @enderror
                                </div>

                                <div class="mb-3 col-md-4">
                                    <label class="form-label">{{__('cars/edit.insurance_expiry')}}</label>
                                    <input type="date" name="insurance_expiry" class="form-control border border-2 p-2" value='{{ old('insurance_expiry',$car->insurance_expiry) }}'>
                                    @error('insurance_expiry')
                                        <p class='text-danger inputerror'>{{ $message }} </p>
                                    @enderror
                                </div>

                                <div class="mb-3 col-md-12">
                                    <label for="floatingTextarea2">{{__('cars/edit.description')}}</label>
                                    <textarea class="form-control border border-2 p-2"
                                              placeholder="{{__('cars/edit.description_p')}}" id="floatingTextarea2" name="description"
                                              rows="4" cols="50">{{ old('about', $car->description) }}</textarea>
                                    @error('description')
                                        <p class='text-danger inputerror'>{{ $message }} </p>
                                    @enderror
                                </div>

                                <div class="mb-3 col-md-6 form-check form-switch">
                                    <input class="form-check-input " type="checkbox"
                                           name="status"
                                           id="cars_active"
                                           value="1"
                                           @if($car->status === 1) checked @endif>
                                    <label class="form-check-label" for="cars_active">{{__('cars/edit.status')}}</label>
                                </div>

                            </div>
                            <button type="submit" class="btn bg-gradient-dark">{{__('cars/edit.edit_c')}}</button>
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
                    <button type="submit" form="DELETE_cars_FORM" class="btn bg-gradient-primary">{{__('global.sure')}}</button>
                </div>
            </div>
        </div>
    </div>
    {{--    END  MODEL SECTION --}}
</x-app>
