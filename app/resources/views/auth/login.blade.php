@extends('layouts.app')


@section('content')

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

    <style>

        .tab-content > .tab-pane {
            display: block;
            border-radius: 20px;
        }

        #myTabContent {
            position: relative;
            width: 100%;
            height: 370px;
            z-index: 5;
            overflow: hidden;
        }

        #myTabContent .tab-pane {
            position: absolute;
            top: 0;
            padding: 10px 40px;
            z-index: 1;
            opacity: 0;
            -webkit-transition: all linear 0.3s;
            -moz-transition: all linear 0.3s;
            -o-transition: all linear 0.3s;
            -ms-transition: all linear 0.3s;
            transition: all linear 0.3s;
        }

        #login,
        .content-3 {
            -webkit-transform: translateX(-250px);
            -moz-transform: translateX(-250px);
            -o-transform: translateX(-250px);
            -ms-transform: translateX(-250px);
            transform: translateX(-250px);
        }

        #newuser,
        .content-4 {
            -webkit-transform: translateX(250px);
            -moz-transform: translateX(250px);
            -o-transform: translateX(250px);
            -ms-transform: translateX(250px);
            transform: translateX(250px);
        }

        .register .register-right ul .nav-item:a.active ~ #myTabContent #login,
        .register .register-right ul .nav-item:a.active ~ #myTabContent .content-2,
        .register .register-right ul .nav-item:a.active ~ #myTabContent #newuser,
        {
            -webkit-transform: translateX(0px);
            -moz-transform: translateX(0px);
            -o-transform: translateX(0px);
            -ms-transform: translateX(0px);
            transform: translateX(0px);
            z-index: 100;
            -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=100)";
            filter: alpha(opacity=100);
            opacity: 1;
            -webkit-transition: all ease-out 0.2s 0.1s;
            -moz-transition: all ease-out 0.2s 0.1s;
            -o-transition: all ease-out 0.2s 0.1s;
            -ms-transition: all ease-out 0.2s 0.1s;
            transition: all ease-out 0.2s 0.1s;
        }


        @keyframes page {
            0% {
                left: 0;
            }
            50% {
                left: 10px;
            }
            100% {
                left: 0;
            }
        }

        @-moz-keyframes page {
            0% {
                left: 0;
            }
            50% {
                left: 10px;
            }
            100% {
                left: 0;
            }
        }

        @-webkit-keyframes page {
            0% {
                left: 0;
            }
            50% {
                left: 10px;
            }
            100% {
                left: 0;
            }
        }

        @-ms-keyframes page {
            0% {
                left: 0;
            }
            50% {
                left: 10px;
            }
            100% {
                left: 0;
            }
        }

        @-o-keyframes page {
            0% {
                left: 0;
            }
            50% {
                left: 10px;
            }
            100% {
                left: 0;
            }
        }

        body {
            background: -webkit-linear-gradient(left, #1143a6, #00c6ff);
        }

        .register {
            background: -webkit-linear-gradient(left, #1143a6, #00c6ff);
            margin-top: 3%;
            padding: 3%;
        }

        .register-left {
            text-align: center;
            color: #fff;
            margin-top: 4%;
        }

        .register-left input {
            border: none;
            border-radius: 1.5rem;
            padding: 2%;
            width: 60%;
            background: #f8f9fa;
            font-weight: bold;
            color: #383d41;
            margin-top: 30%;
            margin-bottom: 3%;
            cursor: pointer;
        }

        .register-right {
            background: #f8f9fa;
            border-top-left-radius: 15% 50%;
            border-bottom-left-radius: 15% 50%;
        }

        .register-left img {
            margin-top: 15%;
            margin-bottom: 5%;
            width: 25%;
            -webkit-animation: mover 2s infinite alternate;
            animation: mover 1s infinite alternate;
        }

        @-webkit-keyframes mover {
            0% {
                transform: translateY(0);
            }
            100% {
                transform: translateY(-20px);
            }
        }

        @keyframes mover {
            0% {
                transform: translateY(0);
            }
            100% {
                transform: translateY(-20px);
            }
        }

        .register-left p {
            font-weight: lighter;
            padding: 12%;
            margin-top: -9%;
        }

        .register .register-form {

        }


        .register .nav-tabs {
            margin-top: 1%;
            border: none;
            background: #0062cc;
            border-radius: 20px;
            width: 35%;
            float: right;
        }

        #myTab .nav-item {
            padding: 5px 3px;
            text-align: center;
            display: block;
            margin: 0px 6px;
        }

        .register .nav-tabs .nav-link {
            padding: 10px 8px;
            height: 25px;
            color: #fff;
            font-size: 13px;
            border-top-right-radius: 1.5rem;
            border-bottom-right-radius: 1.5rem;
        }

        .register .nav-tabs .nav-link:hover {
            border: none;
        }

        .register .nav-tabs .nav-link.active {
            color: #1143a6;
            border: 1px solid #1143a6;
            border-top-left-radius: 1.5rem;
            border-bottom-left-radius: 1.5rem;
        }

        .register-heading {
            text-align: center;
            color: #1143a6;
        }

        #login.active {

            -webkit-transform: translateX(0px);
            transform: translateX(0px);
            z-index: 100;
            -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=100)";
            filter: alpha(opacity=100);
            opacity: 1;
            -webkit-transition: all ease-out 0.2s 0.1s;
            transition: all ease-out 0.2s 0.1s;

        }

        #newuser.active {

            -webkit-transform: translateX(0px);
            transform: translateX(0px);
            z-index: 100;
            -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=100)";
            filter: alpha(opacity=100);
            opacity: 1;
            -webkit-transition: all ease-out 0.2s 0.1s;
            transition: all ease-out 0.2s 0.1s;

        }
    </style>

    <div class="container register">
        <div class="row">
            <div class="col-md-3 register-left">
                <img src="https://image.ibb.co/n7oTvU/logo_white.png" alt=""/>
                <h3>?????????? ????????????????????</h3>
                <p>?????????????? ???? ?????????? ???????????? ????????????????????????!</p>
            </div>
            <div class="col-md-9 register-right">
                <ul class="nav nav-tabs nav-justified" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active mb-2" id="login-tab" data-toggle="tab" href="#login" role="tab"
                           aria-controls="login" aria-selected="true">??????????</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mb-2" id="newuser-tab" data-toggle="tab" href="#newuser" role="tab"
                           aria-controls="newuser" aria-selected="false">??????????????????????</a>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="login" role="tabpanel" aria-labelledby="login-tab">
                        <h3 class="register-heading">?????????????????????? ???????????????????????????? </h3>
                        <div class="row register-form">
                            <div class="col-md-12 profile_card">

                                <form class="form-inline" method="POST" action="{{ route('login') }}">
                                    @csrf
                                    <div class="form-group">
                                        <i class="fa fa-envelope-o"></i>
                                        <input id="email" type="text"
                                               class="form-control @error('email') is-invalid @enderror" name="email"
                                               value="{{ old('email') }}" required autocomplete="email" autofocus
                                               placeholder="Email"/>
                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>


                                    <div class="form-group">
                                        <i class="fa fa-lock"></i>
                                        <input id="password" type="password"
                                               class="form-control @error('password') is-invalid @enderror"
                                               name="password"
                                               required autocomplete="current-password" placeholder="????????????"/>
                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                    <div class="float-right">
                                        <input type="submit" class="btn btn-primary" value=" {{ __('??????????') }}"/>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade show" id="newuser" role="tabpanel" aria-labelledby="newuser-tab">
                        <h3 class="register-heading">??????????????????????</h3>
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <div class="row register-form">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input id="name" type="text"
                                               class="form-control  @error('name') is-invalid @enderror" name="name"
                                               value="{{ old('name') }}" required autocomplete="name" autofocus
                                               placeholder="?????? *"/>
                                        @error('name')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <input id="email" type="email"
                                               class="form-control @error('email') is-invalid @enderror" name="email"
                                               value="{{ old('email') }}" required autocomplete="email"
                                               placeholder="Email *"/>

                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password"
                                               required autocomplete="new-password" placeholder="???????????? *"/>
                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <input id="password-confirm" type="password" class="form-control" placeholder="?????????????????? ???????????? *"
                                               name="password_confirmation" required autocomplete="new-password"/>
                                    </div>
                                    <div class="float-right">
                                        <input type="submit" class="btn btn-primary" value="????????????????????????????"/>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery -->
    <script src="{{asset('/plugins/jquery/jquery.min.js')}}"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script src="{{asset('/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
@endsection
