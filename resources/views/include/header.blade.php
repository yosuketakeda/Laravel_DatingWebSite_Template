<!DOCTYPE HTML>
<html>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="stylesheet" type="text/css" href="{{URL::asset('public/assets/css/main.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{URL::asset('public/assets/css/bootstrap.min.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{URL::asset('public/assets/css/jquery-ui.min.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{URL::asset('public/assets/css/croppie.min.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{URL::asset('public/assets/css/font-awesome.min.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{URL::asset('public/assets/css/owl.carousel.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{URL::asset('public/assets/css/owl.theme.default.css')}}" />
    <!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">-->

    <title>@yield('title')</title>
    <body>
        <div class="container nav-header"><!-- Start navbar -->
            <nav id="navbar" class="navbar navbar-inverse">
                <div class="container">
                    <div class="navbar-header">
                        <a href="{{ url('/') }}"><img src="{{url('public/assets/images/logo.png')}}"></a>
                        <button type="button" id="navtoggle1" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-menu" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <!-- <span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span> -->
                    </div>
                    <div id="main-menu" class="collapse navbar-collapse">
                        <ul class="nav navbar-nav" id="navbar-nav">
                            <li class="listbtn"><a href="{{url('/begleit')}}"><img src="{{url('public/assets/images/arrow.gif')}}">BEGLEITPERSON FINDEN</a></li>
                            <li class="listbtn"><a href="{{route('profile.invest', ['step' => 'step-1'])}}"><img src="{{url('public/assets/images/arrow.gif')}}">BEGLEITUNG ANBIETEN</a></li>
                            <li class="listbtn"><a href=""><img src="{{url('public/assets/images/arrow.gif')}}">SO FUNK TINIERT'S</a></li>
                            @if(Auth::Check())
                                <li class="listbtn"><a href="{{url('/login')}}"><img src="{{url('public/assets/images/arrow.gif')}}">ANMELDEN</a></li>
                                <li class="listbtn"><a href="{{url('/login')}}"><img src="{{url('public/assets/images/arrow.gif')}}">REGISTRIEREN</a></li>
                            @endif
                        </ul>
                    </div>
                </div>
            </nav>
        </div><!-- End navbar -->
        <div class="header">
            <div class="container">
                <div class="row">
                    <div class="col-sm-1 col-md-1"></div>
                    <div class="col-sm-2 col-md-2"><a href="{{url('/begleit')}}">BEGLEITPERSON FINDEN</a></span></div>
                    <div class="col-sm-2 col-md-2"><a href="{{route('profile.invest', ['step' => 'step-1'])}}">BEGLEITUNG ANBIETEN</a></div>
                    <div class="col-sm-2 col-md-2 logo">
                        <a href="{{ url('/') }}"><img src="{{url('public/assets/images/logo.png')}}"></a>
                    </div>
                    <div class="col-sm-2 col-md-2"><a>SO FUNKTINIERT'S</a></div>
                    <div class="col-sm-2 col-md-2 user">
                        @if(Auth::Check())
                            <div class ="user_icon">
                                <?php
                                    $directory_path = public_path('upload/users/'.Auth::user()->id.'/');
                                    $mode = 0777;
                                    @mkdir( $directory_path, $mode, false);
                                    $imgs = scandir($directory_path);
                                    $in = 0;
                                    foreach ($imgs as $img){
                                        if(strpos($img, ".png") !== false){
                                            $in = 1;
                                            //update DB Avarta
                                            $avara_path = Request::root().'/public/upload/users/'.Auth::user()->id.'/'.$img;
                                            break;
                                        }
                                    }
                                    if($in == 0){
                                        $avara_path = Request::root().'/public/assets/images/user_icon.png';
                                    }
                                    DB::table('usermeta')
                                        ->where('id',Auth::user()->id)
                                        ->update([
                                            'avarta_path' => $avara_path,
                                        ]);
                                        ?>
                                <img src="<?php echo $avara_path;?>">
                            </div>
                            <div class="user_info">
                                <p class="user_name">{{ Auth::user()->name }}</p>
                                <p class="percent">60% erreicht</p>
                                <ul class="header_on_logout">
                                    <li><a href="{{ route('profile.option',  ['option' => 'settings'])}}">Profil</a></li>
                                    <li><a href="{{url('logout')}}">Ausloggen</a></li>
                                </ul>
                            </div>
                        @else
                            <div class="user_action">
                                <div class="login">
                                    <a href="{{url('login')}}">ANMELDEN</a>
                                </div>
                                <div class="register">
                                    <a href="{{url('register')}}">REGISTRIEREN</a>
                                </div>
                            </div>
                        @endif
                    </div>
                    <div class="col-sm-1 col-md-1"></div>
                </div>
            </div>
        </div>
