<x-app bodyClass="g-sidenav-show bg-gray-200" >
    <x-navbars.sidebar activePage="transaction"></x-navbars.sidebar>
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <!-- Navbar -->
        <x-navbars.navs.auth titlePage="{{__('transaction/index.transaction')}}"></x-navbars.navs.auth>
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
                                {{__('transaction/index.show')}}
                            </p>
                        </div>
                    </div>
                    <div class="col-6 me-auto text-start" style="margin-right: -18px">
                        <a class="btn bg-gradient-success mb-0" href="{{route('transaction.create')}}">
                            <i class="material-icons text-sm">add</i>&nbsp;
                            &nbsp;{{__('transaction/index.create')}}
                        </a>
                    </div>`
                </div>
                <div class="card card-plain h-100">
                    <div class="card-body p-3">
                        <div class="table-responsive p-0">
                            <table class="table align-items-center mb-0">
                                <thead>
                                <tr>
                                    <th
                                        class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        {{__('transaction/index.driver')}}
                                    </th>
                                    <th
                                        class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 pe-2">
                                        {{__('transaction/index.from')}}
                                    </th>
                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        {{__('transaction/index.to')}}
                                    </th>
                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        {{__('transaction/index.amount')}}
                                    </th>
                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        {{__('transaction/index.date')}}
                                    </th>
                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        {{__('transaction/index.fees')}}
                                    </th>

                                    <th class="text-secondary opacity-7"></th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($transactions as $transaction)
                                    <tr>
                                        <td>
                                            <div class="d-flex px-2 py-1">
                                                <div>
                                                    @if($transaction->driver->image)
                                                        <img src="{{ asset($transaction->driver->image) }}"
                                                             class="avatar avatar-sm ms-3 border-radius-lg"
                                                             alt="user1">
                                                    @else
                                                        <img src="{{ asset(DEFUlAT_USER_IMAGE) }}"
                                                             class="avatar avatar-sm ms-3 border-radius-lg"
                                                             alt="user1">
                                                    @endif
                                                </div>
                                                <div class="d-flex flex-column justify-content-center">
                                                    <h6 class="mb-0 text-sm">{{$transaction->driver->name}}</h6>
                                                    <p class="text-xs text-secondary mb-0">{{$transaction->driver->id_number}}
                                                    </p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="align-middle text-center">
                                            <p class="text-xs font-weight-bold mb-0">{{$transaction->ourBankAccount->bank_name->name}}</p>
                                            <p class="text-xs text-secondary mb-0">{{$transaction->ourBankAccount->account_number}}</p>
                                        </td>
                                        <td>
                                            <p class="text-xs font-weight-bold mb-0">{{$transaction->bankAccount->bank_name->name}}</p>
                                            <p class="text-xs text-secondary mb-0">{{$transaction->bankAccount->account_number}}</p>
                                        </td>
                                        <td class="align-middle text-center">
                                            <span class="text-secondary text-xs font-weight-bold">{{$transaction->amount}}</span>
                                        </td>
                                        <td class="align-middle text-center">
                                            <span class="text-secondary text-xs font-weight-bold">{{$transaction->date}}</span>
                                        </td>

                                        <td class="align-middle text-center">
                                            <span class="text-secondary text-xs font-weight-bold">{{$transaction->fees}}</span>
                                        </td>
                                        <td class="align-middle">
                                            <a href="{{route('transaction.edit',$transaction->id)}}"
                                               class="text-secondary font-weight-bold text-xs">
                                                <i class="material-icons">edit</i>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="d-flex justify-content-around">
                                <x-pagination :pagination="$transactions"></x-pagination>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main>
</x-app>

