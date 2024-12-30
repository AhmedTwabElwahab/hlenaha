<x-app bodyClass="g-sidenav-show bg-gray-200" >
    @push('css')
        <link rel="stylesheet" href="{{asset('css/messages/index.css')}}">
    @endpush
    <x-navbars.sidebar activePage="messages"></x-navbars.sidebar>
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <!-- Navbar -->
        <x-navbars.navs.auth titlePage="{{__('global.messages')}}"></x-navbars.navs.auth>
        <!-- End Navbar -->
        <x-error></x-error>
        <div class="container-fluid my-3 py-3">
            <div class="row mb-5">
                <div class="col-lg-3">
                    <div class="card position-sticky top-1">
                        <ul class="nav flex-column bg-white border-radius-lg p-3">
                            @foreach($users as $user)
                                <li class="nav-item @isset($web_user) @if($web_user->id == $user->id)bg-gradient-success active_nav  @endif @endisset">
                                    <a href="{{route('messages.show',$user)}}" class="d-flex py-2 px-1">
                                        <div>
                                            <img src="https://material-dashboard-laravel.creative-tim.com/assets/img/team-2.jpg"
                                                 class="avatar avatar-sm ms-3 border-radius-lg" alt="user1">
                                        </div>
                                        <div class="d-flex flex-column justify-content-center">
                                            <h6 class="mb-0 text-sm">{{$user->name}}</h6>
                                            <p class="text-xs text-secondary mb-0">{{$user->email}}</p>
                                        </div>
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>

                <div class="col-lg-9 mt-lg-0 mb-4">
                    @isset($web_user)
                        <div class="card card-body mb-4" id="profile">
                            <div class="row justify-content-center align-items-center text-center">
                                <div class="col-sm-auto col-8 my-auto">
                                    <div class="h-100">
                                        <h5 class="mb-1 font-weight-bolder">
                                            {{$web_user->name}}
                                        </h5>
                                        <p class="mb-0 font-weight-normal text-sm">
                                            {{$web_user->email}}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endisset
                    <div class="card card-body">
                        <div class="row justify-content-center align-items-center">
                            @isset($messages)
                                <div class="row chat-box" >
                                    <ul class="space-y-5" id="chat-container">
                                        @foreach($messages as $msg)
                                            @if($msg->sender_id == 1)
                                                <li class="our_msg mt-1">
                                                   {{$msg->message}}
                                                </li>
                                            @else
                                                <li class="send_msg mt-1">
                                                    {{$msg->message}}
                                                </li>
                                            @endif
                                        @endforeach
                                    </ul>
                                </div>
                            @else
                                <div class="row chat-box" >
                                   {{'يرجي تحديد اليوزر'}}
                                </div>
                            @endisset
                            <div class="row justify-content-center align-items-center">
                                <div class="col-11">
                                    <input type="text" id="message" name="msg" class="form-control border border-2 p-2" >
                                </div>
                                <div class="col-1">
                                    @isset($web_user)
                                        <a id="send" data-user="{{$web_user->id}}" href="">
                                            <i class="material-icons">send</i>
                                        </a>
                                    @else
                                        <a disabled="disabled" href="">
                                            <i class="material-icons">send</i>
                                        </a>
                                    @endisset
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    @push('js')
            <script src="{{asset('js/messages/index.js')}}"></script>
    @endpush
</x-app>

