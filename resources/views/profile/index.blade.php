<x-app bodyClass="g-sidenav-show bg-gray-200" >
        <x-navbars.sidebar activePage="user profile"></x-navbars.sidebar>
        <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
            <!-- Navbar -->
            <x-navbars.navs.auth titlePage="{{__('profile/index.settings')}}"></x-navbars.navs.auth>
            <!-- End Navbar -->
            <x-error></x-error>
            <div class="container-fluid my-3 py-3">
                <div class="row mb-5">
                    <div class="col-lg-3">
                        <div class="card position-sticky top-1">
                            <ul class="nav flex-column bg-white border-radius-lg p-3">
                                <li class="nav-item">
                                    <a class="nav-link text-dark d-flex" data-scroll="" href="#profile">
                                        <i class="material-icons text-lg ms-2">person</i>
                                        <span class="text-sm">{{__('profile/index.profile')}}</span>
                                    </a>
                                </li>
                                <li class="nav-item pt-2">
                                    <a class="nav-link text-dark d-flex" data-scroll="" href="#basic-info">
                                        <i class="material-icons text-lg ms-2">receipt_long</i>
                                        <span class="text-sm">{{__('profile/index.Basic_Info')}}</span>
                                    </a>
                                </li>
                                <li class="nav-item pt-2">
                                    <a class="nav-link text-dark d-flex" data-scroll="" href="#password">
                                        <i class="material-icons text-lg ms-2">lock</i>
                                        <span class="text-sm">{{__('profile/index.Change_Password')}}</span>
                                    </a>
                                </li>
                                <li class="nav-item pt-2">
                                    <a class="nav-link text-dark d-flex" data-scroll="" href="#settings">
                                        <i class="material-icons text-lg ms-2">settings</i>
                                        <span class="text-sm">{{__('profile/index.settings')}}</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-9 mt-lg-0 mt-4">
                        <!-- Card Profile -->
                        <div class="card card-body" id="profile">
                            <div class="row justify-content-center align-items-center">
                                <div class="col-sm-auto col-8 my-auto">
                                    <div class="h-100">
                                        <h5 class="mb-1 font-weight-bolder">
                                            {{$user->name}}
                                        </h5>
                                        <p class="mb-0 font-weight-normal text-sm">
                                            {{$user->email}}
                                        </p>
                                    </div>
                                </div>
                                <div class="col-sm-auto me-sm-auto mt-sm-0 mt-3 d-flex">
                                    <label class="form-check-label mb-0">
                                        <h5 class="mb-1 font-weight-bolder">
                                            <a href="#settings">
                                                <i class="material-icons text-lg me-2">settings</i>
                                                {{__('profile/index.settings')}}
                                            </a>
                                        </h5>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <!-- Card Basic Info -->
                        <div class="card mt-4" id="basic-info">
                            <div class="card-header">
                                <h5> {{__('profile/index.Basic_Info')}}</h5>
                            </div>
                            <form id="profile_data_update" method='POST'  action='{{ route('user_profile.update',$user->id) }}' enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="card-body pt-0">
                                <div class="row">
                                    <div class="col-6">
                                        <div class="input-group input-group-static">
                                            <label>{{__('profile/index.name')}}</label>
                                            <input type="text" name="name" class="form-control" value="{{$user->name}}"
                                                   onfocus="focused(this)"
                                                   onfocusout="defocused(this)">
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="input-group input-group-static">
                                            <label>{{__('profile/index.email')}}</label>
                                            <input type="text" name="email" class="form-control" value="{{$user->email}}" onfocus="focused(this)" onfocusout="defocused(this)">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-4 col-6">
                                        <label class="form-label mt-3 ms-0">{{__('profile/index.gender')}}</label>
                                        <select class="form-select border border-2 p-2" name="gender" data-style="select-with-transition" title="" data-size="100" id="driver_id">
                                            <option value="" selected>--</option>
                                            <option value="{{__('profile/index.male')}}" @if($user->gender == __('profile/index.male')) selected @endif>{{__('profile/index.male')}}</option>
                                            <option value="{{__('profile/index.female')}}" @if($user->gender == __('profile/index.female')) selected @endif>{{__('profile/index.female')}}</option>
                                        </select>
                                        @error('birth_date')
                                            <p class='text-danger inputerror'>{{ $message }} </p>
                                        @enderror
                                    </div>
                                    <div class="col-sm-4">
                                        <label class="form-label mt-3 ms-0">{{__('profile/index.birth_date')}}</label>
                                        <input type="date" name="birth_date" class="form-control border border-2 p-2" value='{{ $user->birth_date }}'>
                                        @error('birth_date')
                                            <p class='text-danger inputerror'>{{ $message }} </p>
                                        @enderror
                                    </div>

                                    <div class="col-4 mt-4">
                                        <div class="input-group input-group-static">
                                            <label>{{__('profile/index.phone')}}</label>
                                            <input type="text" name="phone" class="form-control"  placeholder="059 000 0000"
                                                   value="{{$user->phone}}"
                                                   onfocus="focused(this)"
                                                   onfocusout="defocused(this)">
                                        </div>
                                        @error('phone')
                                            <p class='text-danger inputerror'>{{ $message }} </p>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-3">
                                        <button type="submit" form="profile_data_update" class="btn bg-gradient-success btn-sm float-end mt-6 mb-0">
                                            {{__('profile/index.update_data')}}
                                        </button>
                                    </div>
                                </div>
                            </div>
                            </form>
                        </div>
                        <!-- Card Change Password -->
                        <div class="card mt-4" id="password">
                            <div class="card-header">
                                <h5>{{__('profile/index.Change_Password_h')}}</h5>
                            </div>
                            <form id="change_password_update" method='POST'
                                  action='{{ route('user_profile.forgotPassword') }}'
                                  enctype="multipart/form-data">
                                @csrf
                                @method('PUT')

                                <div class="card-body pt-0">
                                <div class="input-group input-group-outline">
                                    <label class="form-label">{{__('profile/index.Current_password')}}</label>
                                    <input type="password" class="form-control"
                                           name="current_password"
                                           onfocus="focused(this)" onfocusout="defocused(this)">
                                </div>
                                <div class="input-group input-group-outline my-4">
                                    <label class="form-label">{{__('profile/index.new_password')}}</label>
                                    <input type="password" class="form-control"
                                           name="password"
                                           onfocus="focused(this)" onfocusout="defocused(this)">
                                </div>
                                <div class="input-group input-group-outline">
                                    <label class="form-label">{{__('profile/index.c_password')}}</label>
                                    <input type="password" class="form-control"
                                           name="password_confirmation"
                                           onfocus="focused(this)"
                                           onfocusout="defocused(this)">
                                </div>
                                <button type="submit" form="change_password_update" class="btn bg-gradient-success btn-sm float-end mt-4 mb-4">{{__('profile/index.Update_password')}}</button>
                            </div>
                            </form>
                        </div>
                        <!-- Card Change Password -->
                        <!-- Card Notifications -->
                        <div class="card mt-4" id="settings">
                            <div class="card-header">
                                <h5> {{__('profile/index.settings')}}</h5>
                                <p class="text-sm"> {{__('profile/index.settings_p')}}</p>
                            </div>
                            <div class="card-body pt-0">
                                <div class="table-responsive">
                                    <table class="table mb-0">
                                        <thead>
                                        <tr>
                                            <th class="ps-1" colspan="4">
                                                <p class="mb-0"> {{__('profile/index.settings_key')}}</p>
                                            </th>
                                            <th class="text-center">
                                                <p class="mb-0">{{__('profile/index.settings_value')}}</p>
                                            </th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="ps-1" colspan="4">
                                                    <div class="my-auto">
                                                        <span class="text-dark d-block text-sm"> <p class="mb-0"> {{__('profile/index.dark')}}</p></span>
                                                        <span class="text-xs font-weight-normal">
                                                            {{__('profile/index.dark_p')}}</span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-check form-switch mb-0 d-flex align-items-center justify-content-center">
                                                        <input class="form-check-input" type="checkbox" id="dark-version"
                                                               onclick="setDark(this)">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="ps-1" colspan="4">
                                                    <div class="my-auto">
                                                        <span class="text-dark d-block text-sm"><p class="mb-0">{{__('profile/index.notations')}}</p></span>
                                                        <span class="text-xs font-weight-normal">{{__('profile/index.notations_p')}}</span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-check form-switch mb-0 d-flex align-items-center justify-content-center">
                                                        <input class="form-check-input" checked="" type="checkbox" id="flexSwitchCheckDefault14">
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <x-footers.auth></x-footers.auth>
            </div>
        </main>
</x-app>

