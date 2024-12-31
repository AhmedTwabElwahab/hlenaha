<x-app bodyClass="g-sidenav-show bg-gray-200" >
    <x-navbars.sidebar activePage="drivers"></x-navbars.sidebar>
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <!-- Navbar -->
        <x-navbars.navs.auth titlePage=" {{__('drivers/index.add_new')}}" parent="{{__('drivers/index.drivers')}}"></x-navbars.navs.auth>
        <!-- End Navbar -->
        <div class="container-fluid px-2 px-md-4">
            <div class="row">
                <div class="col-12">
                    <div class="card my-4">
                        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                            <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                                <h6 class="text-white text-capitalize pe-3">{{__('drivers/index.add_new')}}</h6>
                            </div>
                        </div>
                        <div class="card-body mx-3 mx-md-4 mt-n6">
                            <div class="card card-plain h-100">
                                <div class="card-header pb-0 p-3">
                                    <div class="row">
                                        <div class="col-md-8 d-flex align-items-center">
                                            <h6 class="mb-3">{{__('drivers/index.add_new')}}</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body p-3">
                                    <x-error></x-error>
                                    <form method='POST' action='{{ route('driver.store') }}' enctype="multipart/form-data">
                                        @csrf
                                        <div class="row">
                                            <div class="mb-3 col-md-6">
                                                <label class="form-label">{{__('drivers/edit.email')}}</label>
                                                <input type="email" name="email" class="form-control border border-2 p-2" value='{{ old('email') }}'>
                                                @error('email')
                                                <p class='text-danger inputerror'>{{ $message }} </p>
                                                @enderror
                                            </div>

                                            <div class="mb-3 col-md-6">
                                                <label class="form-label">{{__('drivers/edit.name')}}</label>
                                                <input type="text" name="name" class="form-control border border-2 p-2" value='{{ old('name') }}'>
                                                @error('name')
                                                <p class='text-danger inputerror'>{{ $message }} </p>
                                                @enderror
                                            </div>

                                            <div class="mb-3 col-md-6">
                                                <label class="form-label">{{__('drivers/edit.id_number')}}</label>
                                                <input type="text" name="id_number" class="form-control border border-2 p-2" value='{{ old('id_number') }}'>
                                                @error('id_number')
                                                <p class='text-danger inputerror'>{{ $message }} </p>
                                                @enderror
                                            </div>

                                            <div class="mb-3 col-md-6">
                                                <label class="form-label">{{__('drivers/edit.phone')}}</label>
                                                <input type="number" name="phone" class="form-control border border-2 p-2" value='{{ old('phone') }}'>
                                                @error('phone')
                                                <p class='text-danger inputerror'>{{ $message }} </p>
                                                @enderror
                                            </div>

                                            <div class="mb-3 col-md-4">
                                                <label class="form-label">{{__('drivers/edit.province')}}</label>
                                                <select class="form-select border border-2 p-2"
                                                        name="province"
                                                        data-style="select-with-transition"
                                                        data-size="100"
                                                        id="province_id"
                                                >
                                                    <option value="">--</option>
                                                    @foreach($provinces as $province)
                                                        <option value="{{$province->name_ar}}">&nbsp;&nbsp; {{$province->name_ar}}</option>
                                                    @endforeach
                                                </select>
                                            </div>

                                            <div class="mb-3 col-md-4">
                                                <label class="form-label">{{__('drivers/edit.city')}}</label>
                                                <select class="form-select border border-2 p-2"
                                                        name="city"
                                                        data-style="select-with-transition"
                                                        data-size="100"
                                                        id="city_id"
                                                >
                                                    <option value="">--</option>
                                                    @foreach($cities as $city)
                                                        <option value="{{$city->name_ar}}">&nbsp;&nbsp; {{$city->name_ar}}</option>
                                                    @endforeach
                                                </select>
                                            </div>

                                            <div class="mb-3 col-md-4">
                                                <label class="form-label">{{__('drivers/edit.district')}}</label>
                                                <select class="form-select border border-2 p-2"
                                                        name="neighborhood"
                                                        data-style="select-with-transition"
                                                        data-size="100"
                                                        id="neighborhood_id"
                                                >
                                                    <option value="">--</option>
                                                    @foreach($neighborhoods as $neighborhood)
                                                        <option value="{{$neighborhood->name_ar}}">&nbsp;&nbsp; {{$neighborhood->name_ar}}</option>
                                                    @endforeach
                                                </select>
                                            </div>

                                            <div class="mb-3 col-md-4">
                                                <label class="form-label">{{__('drivers/edit.street')}}</label>
                                                <input type="text" name="street" class="form-control border border-2 p-2" value='{{ old('street') }}'>
                                                @error('street')
                                                <p class='text-danger inputerror'>{{ $message }} </p>
                                                @enderror
                                            </div>

                                            <div class="mb-3 col-md-4">
                                                <label class="form-label">{{__('drivers/edit.postal_code')}}</label>
                                                <input type="text" name="postal_code" class="form-control border border-2 p-2" value='{{ old('postal_code') }}'>
                                                @error('postal_code')
                                                <p class='text-danger inputerror'>{{ $message }} </p>
                                                @enderror
                                            </div>

                                            <div class="mb-3 col-md-4">
                                                <label class="form-label">{{__('drivers/edit.building_number')}}</label>
                                                <input type="text" name="building_number" class="form-control border border-2 p-2" value='{{ old('building_number') }}'>
                                                @error('building_number')
                                                <p class='text-danger inputerror'>{{ $message }} </p>
                                                @enderror
                                            </div>

                                            <div class="mb-3 col-md-6">
                                                <label class="form-label">{{__('drivers/edit.national_address_image')}}</label>
                                                <input type="file" name="national_address_image" class="form-control border border-2 p-2" value='{{ old('national_address_image') }}'>
                                                @error('national_address_image')
                                                <p class='text-danger inputerror'>{{ $message }} </p>
                                                @enderror
                                            </div>
                                            <div class="mb-3 col-md-6">
                                                <label class="form-label">{{__('drivers/edit.image')}}</label>
                                                <input type="file" name="image" class="form-control border border-2 p-2" value='{{ old('image') }}'>
                                                @error('image')
                                                <p class='text-danger inputerror'>{{ $message }} </p>
                                                @enderror
                                            </div>
                                            <div class="mb-3 col-md-6 form-check form-switch">
                                                <input class="form-check-input " type="checkbox"
                                                       name="status"
                                                       id="driver_active"
                                                       value="1">
                                                <label class="form-check-label" for="driver_active">{{__('drivers/edit.status')}}</label>
                                            </div>

                                        </div>
                                        <button type="submit" class="btn bg-gradient-dark">{{__('drivers/index.add')}}</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</x-app>
