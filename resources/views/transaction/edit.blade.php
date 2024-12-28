<x-app bodyClass="g-sidenav-show bg-gray-200" >
    <x-navbars.sidebar activePage="transaction"></x-navbars.sidebar>
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <!-- Navbar -->
        <x-navbars.navs.auth titlePage="{{__('transaction/index.edit')}}" parent="{{__('transaction/index.transaction')}}"></x-navbars.navs.auth>
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
                                {{__('transaction/index.transaction')}}
                            </h5>
                            <p class="mb-0 font-weight-normal text-sm">
                                {{__('transaction/index.edit_t_h')}}
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 my-sm-auto me-sm-auto ms-sm-0 mx-auto mt-3 d-flex justify-content-end">
                        <div class="nav-wrapper position-relative end-0">
                            <form method="POST" id="DELETE_DRIVER_FORM" action="{{ route('transaction.destroy', $transaction -> id) }}">
                                @csrf
                                <input type="hidden" name="_method" value="DELETE">
                                <button class="btn btn-icon btn-2 btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#DeleteModal">
                                    <span class="btn-inner--icon">
                                        {{__('transaction/index.delete')}}
                                        <i class="material-icons">delete</i>
                                    </span>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="card card-plain h-100">
                    <div class="card-body p-3">
                        <form method='POST' action='{{ route('transaction.update',$transaction->id) }}' enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <div class="row">
                                <div class="mb-3 col-md-12">
                                    <label for="driver_id">{{__('transaction/index.driver')}}</label>
                                    <select class="form-select border border-2 p-2" name="driver_id" data-style="select-with-transition"  data-size="100" id="driver_id">
                                        <option value="">--</option>
                                        @foreach($drivers as $driver)
                                            <option value="{{$driver->id}}"
                                                    data-user_id="{{$driver->user_id}}"
                                                    @if($driver->id == $transaction->driver_id) selected @endif>&nbsp;&nbsp; {{$driver->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="row">
                                <div class="mb-3 col-md-6">
                                    <label for="bank_account_id">{{__('transaction/index.from')}}</label>
                                    <select class="form-select border border-2 p-2"
                                            name="bank_account_id"
                                            data-style="select-with-transition"
                                            data-size="100"
                                            id="bank_account_id"
                                    >
                                        <option value="">--</option>
                                        @foreach($ourBankAccounts as $bank)
                                            <option value="{{$bank->id}}"
                                                    @if($bank->id == $transaction->bank_account_id) selected @endif>&nbsp;&nbsp; {{$bank->bank_name->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label for="driver_bank_account_id">{{__('transaction/index.to')}}</label>
                                    <select class="form-select border border-2 p-2" name="driver_bank_account_id" data-style="select-with-transition"  data-size="100" id="driver_bank_account_id">
                                        <option value="">--</option>
                                        @foreach($sendToBankAccounts as $bank)
                                            <option value="{{$bank->id}}"
                                                    @if($bank->id == $transaction->driver_bank_account_id) selected @endif>&nbsp;&nbsp; {{$bank->bank_name->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="row">
                                <div class="mb-3 col-md-6">
                                    <label class="form-label">{{__('transaction/index.amount')}}</label>
                                    <input type="number" min="0" step="0.01" name="amount" class="form-control border border-2 p-2" value='{{ old('amount',$transaction->amount) }}'>
                                    @error('amount')
                                        <p class='text-danger inputerror'>{{ $message }} </p>
                                    @enderror
                                </div>

                                <div class="mb-3 col-md-6">
                                    <label class="form-label">{{__('transaction/index.date')}}</label>
                                    <input type="date" name="date" class="form-control border border-2 p-2" value='{{ old('date',$transaction->date) }}'>
                                    @error('date')
                                    <p class='text-danger inputerror'>{{ $message }} </p>
                                    @enderror
                                </div>
                            </div>

                            <div class="row">
                                <div class="mb-3 col-md-12">
                                    <label for="floatingTextarea2">{{__('transaction/index.description')}}</label>
                                    <textarea class="form-control border border-2 p-2"
                                              placeholder="{{__('transaction/index.description_p')}}" id="floatingTextarea2" name="description"
                                              rows="4" cols="50">{{ old('about', $transaction->description) }}</textarea>
                                    @error('description')
                                        <p class='text-danger inputerror'>{{ $message }} </p>
                                    @enderror
                                </div>
                            </div>

                            <button type="submit" class="btn bg-gradient-success">{{__('transaction/index.update')}}</button>
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
    @push('js')
        <script src="{{asset('js/transaction/edit.js')}}"></script>
    @endpush
</x-app>


