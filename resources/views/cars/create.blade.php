<x-app bodyClass="g-sidenav-show bg-gray-200" >
    <x-navbars.sidebar activePage="cars"></x-navbars.sidebar>
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <!-- Navbar -->
        <x-navbars.navs.auth titlePage=" {{__('cars/index.create_car')}}" parent="{{__('cars/index.cars')}}"></x-navbars.navs.auth>
        <!-- End Navbar -->
        <div class="container-fluid px-2 px-md-4">
            <div class="page-header min-height-300 border-radius-xl mt-4"  style="background-image: linear-gradient(to left bottom, #002f6c, #00528f, #007392, #008f75, #28a745);">
                <span class="mask opacity-6">
                </span>
            </div>
            <div class="card card-body mx-3 mx-md-4 mt-n6">
                <div class="card card-plain h-100">
                    <div class="card-body p-3">
                        <form method='POST' action='{{ route('cars.store') }}' enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="mb-3 col-md-6">
                                    <label class="form-label">{{__('cars/edit.type')}}</label>
                                    <input type="text" name="type" class="form-control border border-2 p-2" value='{{ old('type') }}'>
                                    @error('type')
                                        <p class='text-danger inputerror'>{{ $message }} </p>
                                    @enderror
                                </div>

                                <div class="mb-3 col-md-6">
                                    <label class="form-label">{{__('cars/edit.brand')}}</label>
                                    <input type="text" name="brand" class="form-control border border-2 p-2" value='{{ old('brand') }}'>
                                    @error('brand')
                                        <p class='text-danger inputerror'>{{ $message }} </p>
                                    @enderror
                                </div>

                                <div class="mb-3 col-md-6">
                                    <label class="form-label">{{__('cars/edit.model')}}</label>
                                    <input type="text" name="model" class="form-control border border-2 p-2" value='{{ old('model') }}'>
                                    @error('model')
                                        <p class='text-danger inputerror'>{{ $message }} </p>
                                    @enderror
                                </div>

                                <div class="mb-3 col-md-6">
                                    <label class="form-label">{{__('cars/edit.year')}}</label>
                                    <input type="text" name="year" class="form-control border border-2 p-2" value='{{ old('year') }}'>
                                    @error('year')
                                    <p class='text-danger inputerror'>{{ $message }} </p>
                                    @enderror
                                </div>

                                <div class="mb-3 col-md-4">
                                    <label class="form-label">{{__('cars/edit.color')}}</label>
                                    <input type="text" name="color" class="form-control border border-2 p-2" value='{{ old('color') }}'>
                                    @error('color')
                                        <p class='text-danger inputerror'>{{ $message }} </p>
                                    @enderror
                                </div>

                                <div class="mb-3 col-md-4">
                                    <label class="form-label">{{__('cars/edit.price_day')}}</label>
                                    <input type="number" name="price_day" class="form-control border border-2 p-2" value='{{ old('price_day') }}'>
                                    @error('price_day')
                                        <p class='text-danger inputerror'>{{ $message }} </p>
                                    @enderror
                                </div>

                                <div class="mb-3 col-md-4">
                                    <label class="form-label">{{__('cars/edit.kilo')}}</label>
                                    <input type="text" name="kilo" class="form-control border border-2 p-2" value='{{ old('kilo') }}'>
                                    @error('kilo')
                                        <p class='text-danger inputerror'>{{ $message }} </p>
                                    @enderror
                                </div>

                                <div class="mb-3 col-md-4">
                                    <label class="form-label">{{__('cars/edit.insurance')}}</label>
                                    <input type="text" name="insurance" class="form-control border border-2 p-2" value='{{ old('insurance') }}'>
                                    @error('insurance')
                                        <p class='text-danger inputerror'>{{ $message }} </p>
                                    @enderror
                                </div>

                                <div class="mb-3 col-md-4">
                                    <label class="form-label">{{__('cars/edit.insurance_expiry')}}</label>
                                    <input type="date" name="insurance_expiry" class="form-control border border-2 p-2" value='{{ old('insurance_expiry') }}'>
                                    @error('insurance_expiry')
                                        <p class='text-danger inputerror'>{{ $message }} </p>
                                    @enderror
                                </div>

                                <div class="mb-3 col-md-12">
                                    <label for="floatingTextarea2">{{__('cars/edit.description')}}</label>
                                    <textarea class="form-control border border-2 p-2"
                                              placeholder="{{__('cars/edit.description_p')}}" id="floatingTextarea2" name="description"
                                              rows="4" cols="50">{{ old('about') }}</textarea>
                                    @error('description')
                                        <p class='text-danger inputerror'>{{ $message }} </p>
                                    @enderror
                                </div>

                                <div class="mb-3 col-md-6 form-check form-switch">
                                    <input class="form-check-input " type="checkbox"
                                           name="status"
                                           id="cars_active"
                                           value="1">
                                    <label class="form-check-label" for="cars_active">{{__('cars/edit.status')}}</label>
                                </div>

                            </div>
                            <button type="submit" class="btn bg-gradient-dark">{{__('cars/edit.add')}}</button>
                        </form>

                    </div>
                </div>
            </div>

        </div>
    </main>
</x-app>
