


<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}"/>
    <title>@yield('title')</title>


    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="{{asset('plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}">
    <!-- iCheck -->
    <link rel="stylesheet" href="{{asset('plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
    <!-- ./Kanban -->

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->

    <!-- login start -->

    @yield('custom_css')
</head>
<body >

<style>


    /* register */


    .tab-content>.tab-pane {
        display: block;
        border-radius: 20px;
    }

    #myTabContent
    {
        position: relative;
        width: 100%;
        height: 370px;
        z-index: 5;
        overflow: hidden;
    }

    #myTabContent .tab-pane
    {
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

    .register .register-right ul .nav-item:a.active~#myTabContent #login,
    .register .register-right ul .nav-item:a.active~#myTabContent .content-2,
    .register .register-right ul .nav-item:a.active~#myTabContent #newuser,
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

    body{
        background: -webkit-linear-gradient(left,  #1143a6, #00c6ff);
    }
    .register {
        background: -webkit-linear-gradient(left,  #1143a6, #00c6ff);
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
    #myTab  .nav-item {
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
        color:  #1143a6;
        border: 1px solid  #1143a6;
        border-top-left-radius: 1.5rem;
        border-bottom-left-radius: 1.5rem;
    }

    .register-heading {
        text-align: center;
        color:  #1143a6;
    }

    #login.active
    {

        -webkit-transform: translateX(0px);
        transform: translateX(0px);
        z-index: 100;
        -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=100)";
        filter: alpha(opacity=100);
        opacity: 1;
        -webkit-transition: all ease-out 0.2s 0.1s;
        transition: all ease-out 0.2s 0.1s;

    }
    #newuser.active
    {

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
<!-- /.content-wrapper -->
    <div class="container register">
        <div class="row">
            <div class="col-md-3 register-left">
                <img src="https://image.ibb.co/n7oTvU/logo_white.png" alt="" />
                <h3>Добро пожаловать</h3>
                <p>Система по учету !</p>
            </div>
            <div class="col-md-9 register-right">
                <ul class="nav nav-tabs nav-justified" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active mb-2" id="login-tab" data-toggle="tab" href="#login" role="tab" aria-controls="login" aria-selected="true">Войти</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mb-2" id="newuser-tab" data-toggle="tab" href="#newuser" role="tab" aria-controls="newuser" aria-selected="false">Регистрация</a>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="login" role="tabpanel" aria-labelledby="login-tab">
                        <h3 class="register-heading">Авторизация</h3>
                        <div class="row register-form">
                            <div class="col-md-12 profile_card">
                                <form class="form-inline">
                                    <div class="form-group">
                                        <i class="fa fa-envelope-o"></i>
                                        <input type="text" class="form-control" placeholder="Email"  />
                                    </div>
                                    <div class="form-group">
                                        <i class="fa fa-lock"></i>
                                        <input type="password" class="form-control" placeholder="Пароль"  />
                                    </div>
                                    <div class="float-right">
                                        <input type="submit" class="btn btn-primary" value="Войти" />
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade show" id="newuser" role="tabpanel" aria-labelledby="newuser-tab">
                        <h3 class="register-heading">Регистрация</h3>
                        <div class="row register-form">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Имя *" />
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Фамилия *"  />
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Email *"  />
                                </div>
                                <div class="form-group">
                                    <input type="text" maxlength="10" minlength="10" class="form-control" placeholder="Телефон *" />
                                </div>

                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="password" class="form-control" placeholder="Пароль *"  />
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" placeholder="Повторите пароль *" />
                                </div>
                                <div class="float-right">
                                    <input type="submit" class="btn btn-primary" value="Регистрировать" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{asset('/plugins/jquery/jquery.min.js')}}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{asset('/plugins/jquery-ui/jquery-ui.min.js')}}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script src="{{asset('/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- ChartJS -->

</body>
</html>



