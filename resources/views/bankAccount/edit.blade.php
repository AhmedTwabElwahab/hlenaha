<x-app bodyClass="g-sidenav-show bg-gray-200" >
    <x-navbars.sidebar activePage="banks"></x-navbars.sidebar>
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <!-- Navbar -->
        <x-navbars.navs.auth titlePage="{{__('bank/index.edit')}}" parent="{{__('bank/index.bank_Accounts')}}"></x-navbars.navs.auth>
        <!-- End Navbar -->
        <x-error></x-error>
        <div class="container-fluid px-2 px-md-4">
            <div class="page-header min-height-100 border-radius-xl mt-4">
                <span class="mask opacity-6">
                </span>
            </div>
            <div class="card card-body mx-3 mx-md-4 mt-n6">
                <div class="row gx-4 mb-2">
                    <div class="col-auto my-auto">
                        <div class="h-100">
                            <h5 class="mb-1">
                                {{__('bank/index.bank_Accounts')}}
                            </h5>
                            <p class="mb-0 font-weight-normal text-sm">
                                {{__('bank/index.edit_account_h')}}
                            </p>
                        </div>
                    </div>
                </div>
                <div class="card card-plain h-100">
                    <div class="card-body p-3">
                        <form method='POST' action='{{ route('bank_account.update',$account->id) }}' enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <div class="row">
                                <div class="mb-3 col-md-6">
                                    <label for="bank_account_name_id">{{__('bank/index.account_name')}}</label>
                                    <select class="form-select border border-2 p-2" name="bank_account_name_id" data-style="select-with-transition"  data-size="100" id="bank_account_name_id">
                                        <option value="">--</option>
                                        @foreach($banks as $bank)
                                            <option value="{{$bank->id}}" @if($bank->id == $account->bank_account_name_id) selected @endif>{{$bank->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label class="form-label">{{__('bank/index.account_number')}}</label>
                                    <input type="number" name="account_number" class="form-control border border-2 p-2"
                                           value='{{ old('account_number',$account->account_number) }}'>
                                    @error('account_number')
                                        <p class='text-danger inputerror'>{{ $message }} </p>
                                    @enderror
                                </div>
                            </div>

                            <div class="row">
                                <div class="mb-3 col-md-6">
                                    <label class="form-label">{{__('bank/index.iban')}}</label>
                                    <input type="number" name="iban" class="form-control border border-2 p-2" value='{{ old('iban',$account->iban) }}'>
                                    @error('iban')
                                        <p class='text-danger inputerror'>{{ $message }} </p>
                                    @enderror
                                </div>
                                <div class="mb-3 col-md-6 mt-5 form-check form-switch">
                                    <input class="form-check-input " type="checkbox" style="margin-left: -25px;"
                                           name="is_default"
                                           id="bank_active"
                                           value="1"
                                           @if($account->is_default === 1) checked @endif>
                                    <label class="form-check-label" for="bank_active">{{__('bank/index.is_default')}}</label>
                                </div>
                            </div>

                            <div class="row">
                                <div class="mb-3 col-md-12">
                                    <label for="floatingTextarea2">{{__('bank/index.disc')}}</label>
                                    <textarea class="form-control border border-2 p-2"
                                              placeholder="{{__('bank/index.disc_p')}}" id="floatingTextarea2" name="disc"
                                              rows="4" cols="50">{{ old('about', $account->disc) }}</textarea>
                                    @error('disc')
                                        <p class='text-danger inputerror'>{{ $message }} </p>
                                    @enderror
                                </div>
                            </div>
                            <button type="submit" class="btn bg-gradient-success">{{__('bank/index.update')}}</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
</x-app>

