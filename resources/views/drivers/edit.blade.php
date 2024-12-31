<x-app bodyClass="g-sidenav-show bg-gray-200" >
    <x-navbars.sidebar activePage="drivers"></x-navbars.sidebar>
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <!-- Navbar -->
        <x-navbars.navs.auth titlePage=" {{__('drivers/index.edit_driver')}}" parent="{{__('drivers/index.drivers')}}"></x-navbars.navs.auth>
        <!-- End Navbar -->
        <div class="container-fluid px-2 px-md-4">
            <div class="page-header min-height-300 border-radius-xl mt-4"  style="background-image: linear-gradient(to left bottom, #002f6c, #00528f, #007392, #008f75, #28a745);">
                <span class="mask opacity-6">
                </span>
            </div>
            <div class="card card-body mx-3 mx-md-4 mt-n6">
                <div class="row gx-4 mb-2">
                    <div class="col-auto">
                        <div class="avatar avatar-xl position-relative">
                            <img src="{{ asset($driver->image) }}" alt="profile_image"
                                 class="w-100 border-radius-lg shadow-sm">
                        </div>
                    </div>
                    <div class="col-auto my-auto">
                        <div class="h-100">
                            <h5 class="mb-1">
                                {{ $driver->name }}
                            </h5>
                            <p class="mb-0 font-weight-normal text-sm">
                                {{ $driver->user->email }}
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 my-sm-auto me-sm-auto ms-sm-0 mx-auto mt-3 d-flex justify-content-end">
                        <div class="nav-wrapper position-relative end-0">
                            <form method="POST" id="DELETE_DRIVER_FORM" action="{{ route('driver.destroy', $driver -> id) }}">
                                @csrf
                                <input type="hidden" name="_method" value="DELETE">
                                <button class="btn btn-icon btn-2 btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#DeleteModal">
                                    <span class="btn-inner--icon">
                                        {{__('drivers/edit.delete_driver')}}
                                        <i class="material-icons">delete</i>
                                    </span>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="card card-plain h-100">
                    <div class="card-body p-3">
                        <x-error></x-error>
                        <form method='POST' action='{{ route('driver.update',$driver->id) }}' enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <div class="mb-3 col-md-6">
                                    <label class="form-label">{{__('drivers/edit.email')}}</label>
                                    <input type="email" name="email" class="form-control border border-2 p-2" value='{{ old('email', $driver->user->email) }}'>
                                    @error('email')
                                        <p class='text-danger inputerror'>{{ $message }} </p>
                                    @enderror
                                </div>

                                <div class="mb-3 col-md-6">
                                    <label class="form-label">{{__('drivers/edit.name')}}</label>
                                    <input type="text" name="name" class="form-control border border-2 p-2" value='{{ old('name', $driver->name) }}'>
                                    @error('name')
                                        <p class='text-danger inputerror'>{{ $message }} </p>
                                    @enderror
                                </div>

                                <div class="mb-3 col-md-6">
                                    <label class="form-label">{{__('drivers/edit.id_number')}}</label>
                                    <input type="text" name="id_number" class="form-control border border-2 p-2" value='{{ old('id_number', $driver->id_number) }}'>
                                    @error('id_number')
                                        <p class='text-danger inputerror'>{{ $message }} </p>
                                    @enderror
                                </div>

                                <div class="mb-3 col-md-6">
                                    <label class="form-label">{{__('drivers/edit.phone')}}</label>
                                    <input type="number" name="phone" class="form-control border border-2 p-2" value='{{ old('phone',$driver->user->phone) }}'>
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
                                            <option @if($driver->province == $province->name_ar) selected @endif value="{{$province->name_ar}}">&nbsp;&nbsp;{{$province->name_ar}}</option>
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
                                            <option value="{{$city->name_ar}}" @if($city->name_ar == $driver->city) selected @endif>&nbsp;&nbsp; {{$city->name_ar}}</option>
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
                                            <option value="{{$neighborhood->name_ar}}" @if($neighborhood->name_ar == $driver->neighborhood) selected @endif>&nbsp;&nbsp; {{$neighborhood->name_ar}}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="mb-3 col-md-4">
                                    <label class="form-label">{{__('drivers/edit.street')}}</label>
                                    <input type="text" name="street" class="form-control border border-2 p-2" value='{{ old('street',$driver->street) }}'>
                                    @error('street')
                                        <p class='text-danger inputerror'>{{ $message }} </p>
                                    @enderror
                                </div>

                                <div class="mb-3 col-md-4">
                                    <label class="form-label">{{__('drivers/edit.postal_code')}}</label>
                                    <input type="text" name="postal_code" class="form-control border border-2 p-2" value='{{ old('postal_code',$driver->postal_code) }}'>
                                    @error('postal_code')
                                        <p class='text-danger inputerror'>{{ $message }} </p>
                                    @enderror
                                </div>

                                <div class="mb-3 col-md-4">
                                    <label class="form-label">{{__('drivers/edit.building_number')}}</label>
                                    <input type="text" name="building_number" class="form-control border border-2 p-2" value='{{ old('building_number',$driver->building_number) }}'>
                                    @error('building_number')
                                        <p class='text-danger inputerror'>{{ $message }} </p>
                                    @enderror
                                </div>

                                <div class="mb-3 col-md-6">
                                    <label class="form-label">{{__('drivers/edit.national_address_image')}}</label>
                                    <input type="file" name="national_address_image" class="form-control border border-2 p-2" value='{{ old('national_address_image',$driver->national_address_image) }}'>
                                    @error('national_address_image')
                                        <p class='text-danger inputerror'>{{ $message }} </p>
                                    @enderror
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label class="form-label">{{__('drivers/edit.image')}}</label>
                                    <input type="file" name="image" class="form-control border border-2 p-2" value='{{ old('image',$driver->image) }}'>
                                    @error('image')
                                        <p class='text-danger inputerror'>{{ $message }} </p>
                                    @enderror
                                </div>
                                <div class="mb-3 col-md-6 form-check form-switch">
                                    <input class="form-check-input " type="checkbox"
                                           name="status"
                                           id="driver_active"
                                           value="1"
                                           @if($driver->status === 1) checked @endif>
                                    <label class="form-check-label" for="driver_active">{{__('drivers/edit.status')}}</label>
                                </div>
                                <div class="mb-3 col-md-6">

                                </div>

                            </div>
                            <button type="submit" class="btn bg-gradient-dark">Submit</button>
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
