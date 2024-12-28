<x-app bodyClass="g-sidenav-show bg-gray-200" >
    <x-navbars.sidebar activePage="banks"></x-navbars.sidebar>
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <!-- Navbar -->
        <x-navbars.navs.auth titlePage="{{__('bank/index.bank_Accounts')}}"></x-navbars.navs.auth>
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
                                {{__('bank/index.show')}}
                            </p>
                        </div>
                    </div>
                    <div class="col-6 me-auto text-start" style="margin-right: -18px">
                        <a class="btn bg-gradient-success mb-0" href="{{route('bank_account.create')}}">
                            <i class="material-icons text-sm">person_add</i>&nbsp;
                            &nbsp;{{__('bank/index.create_account')}}
                        </a>
                    </div>`
                </div>
                <div class="card card-plain h-100">
                    <div class="card-body p-3">
                        <ul class="list-group">
                            @foreach($BankAccounts as $account)
                                <li class="list-group-item border-0 d-flex p-4 mb-2 bg-gray-100 border-radius-lg">
                                    <div class="d-flex flex-column">
                                        <h6 class="mb-3 text-sm">{{$account->account_name}}</h6>
                                        <span class="mb-2 text-xs">
                                            {{__('bank/index.account_name')}}
                                            <span class="text-dark font-weight-bold ms-sm-2">{{$account->bank_name->name}}</span>
                                        </span>
                                        <span class="mb-2 text-xs">
                                            {{__('bank/index.account_number')}}
                                            <span class="text-dark ms-sm-2 font-weight-bold">{{$account->account_number}}</span>
                                        </span>
                                        <span class="text-xs">
                                            {{__('bank/index.iban')}}
                                            <span class="text-dark ms-sm-2 font-weight-bold">{{$account->iban}}</span>
                                        </span>
                                    </div>
                                    <div class="me-auto text-end">
                                        <form method="POST" id="DELETE_Bank_FORM_{{$account -> id}}" action="{{ route('bank_account.destroy', $account -> id) }}">
                                            @csrf
                                            <input type="hidden" name="_method" value="DELETE">
                                            <a class="btn btn-link text-danger text-gradient px-3 mb-0" data-bs-toggle="modal" data-bs-target="#DeleteModal_{{$account -> id}}">
                                                <i class="material-icons text-sm ms-2">delete</i>
                                                {{__('bank/index.delete')}}
                                            </a>
                                        </form>
                                        <x-modal id="DeleteModal_{{$account -> id}}" form_id="DELETE_Bank_FORM_{{$account -> id}}"></x-modal>

                                        <a class="btn btn-link text-dark px-3 mb-0" href="{{route('bank_account.edit',$account->id)}}">
                                            <i class="material-icons text-sm ms-2">edit</i>
                                            {{__('bank/index.edit')}}
                                        </a>
                                    </div>
                                </li>

                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>

    </main>
</x-app>

