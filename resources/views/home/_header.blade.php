<header class="background-main-color">
    <div class="container">
        <div class="header-output">
            <div class="header-in">
            <!--  <div class="col-lg-3 col-md-12 padding-left-30px">
                        <a id="logo" href="{{route('anasayfa')}}" class="d-inline-block margin-tb-10px"><img src="{{asset('assets')}}/img/quizler.png" alt=""></a>

                    </div>-->

            <!--<div class="col-lg-7 col-md-12 position-inherit">
                        <ul id="menu-main" class="white-link text-lg-center nav-menu ">
                            <li class="has-dropdown"><a href="{{route('anasayfa')}}">Anasayfa</a> </li>
                            <li><a href="{{route('anasayfa')}}">Bize Ulaşın</a> </li>
                        </ul>
                    </div> -->
                <div class="row">
                    @auth

                        <div class="col-7 col-xl-10 ">
                            <a id="logo" href="{{route('anasayfa')}}" class="d-inline-block margin-tb-10px"><img src="{{asset('assets')}}/img/quizler.png" alt=""></a>

                        </div>
                        <div class="col-5 col-xl-2 my-auto">
                            <div class="dropdown">
                                <button class="btn btn-dark" type="button" data-toggle="dropdown">|||<span class="caret"></span></button>

                                <ul class="dropdown-menu p-1">

                                    <li> @if(Auth::user()->type=='user')
                                            <a href="{{route('profile.show')}}" class="text-dark box-shadow text-medium"><i class="far fa-user text-small mr-1"></i>{{Auth::user()->name}}</a>
                                        @endif</li>

                                    <li>@if(Auth::user()->type=='teacher')
                                            <a href="{{ route('quizzes.index') }}" class="text-dark box-shadow text-medium"><i class="far fa-user text-small mr-1"></i>{{Auth::user()->name}}</a>
                                        @endif</li>

                                    <li><a href="{{route('admin_logout')}}"><i class="fa fa-sign-out"></i> Çıkış Yap</a></li>

                                </ul>

                            </div>
                        </div>
                    <!--<div class="flex p-1 ba-1  d-lg-block">
                            <div class="mt-1 d-block">
                                <hr class=" d-block d-sm-none mt-1.5">
                                @if(Auth::user()->type=='user')
                        <a href="{{route('profile.show')}}" class="text-white box-shadow text-extra-large"><i class="far fa-user"></i>{{Auth::user()->name}}</a>
                                @endif
                        @if(Auth::user()->type=='teacher')
                        <a href="{{ route('quizzes.index') }}" class="text-white box-shadow text-extra-large"><i class="far fa-user"></i>{{Auth::user()->name}}</a>
                                @endif
                        <ul class="list-unstyled">
                            <li><a href="{{route('admin_logout')}}"><i class="fa fa-sign-out"></i> Çıkış Yap</a></li>
                                </ul>
                            </div>
                        </div>-->
                    @endauth
                    @guest
                        <div class="col-7 col-xl-10 ">
                            <a id="logo" href="{{route('anasayfa')}}" class="d-inline-block margin-tb-10px"><img src="{{asset('assets')}}/img/quizler.png" alt=""></a>

                        </div>
                        <div class=" col-5 col-xl-2 my-auto">
                            <div class="dropdown">

                                <button class="btn btn-dark" type="button" data-toggle="dropdown">|||<span class="caret"></span></button>

                                <ul class="dropdown-menu p-1">

                                    <li class="mb-1"><a href="{{route('login')}}" ><i class="far fa-user mr-1"></i>Giriş Yap </a></li>

                                    <li><a href="{{route('register')}}"><i class="far fa-user mr-1"></i> Kayıt Ol</a></li>



                                </ul>

                            </div>
                        </div>


                    <!--<div class="col-lg-2 col-md-12 d-lg-block">
                            <hr class="margin-bottom-0px d-block">
                            <div class="text-white ba-1 box-shadow float-right padding-lr-23px padding-tb-23px text-extra-large">
                                <a href="{{route('login')}}" ><i class="far fa-user"></i>Giriş Yap </a><a href="{{route('register')}}"><i class="far fa-user"></i> Kayıt Ol</a>
                            </div>
                        </div> -->
                    @endguest

                </div>

            </div>

        </div>
    </div>
    </div>
</header>
<!-- // Header  -->




<!-- //container  -->

