@extends('layouts.adm_layout')
@section('title', 'Глобальные настройки')

@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <div class="callout callout-info ">
            <h5><i class="fas fa-info"></i> Подсказка:</h5>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto consequatur culpa cumque doloribus iste
            laudantium optio placeat ratione sint veniam.
        </div>

        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1> Глобальные параметры </h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="/1">Главная</a></li>
                            <li class="breadcrumb-item active">параметры</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        @foreach($params as $param)
        <div class="card">
                <div class="row ml-3 mr-3 mt-3">
                    <div class="col-md-5">
                        <!-- Widget: user widget style 1 -->
                        <div class="card card-widget widget-user shadow-lg">
                            <!-- Add the bg color to the header using any of the bg-* classes -->
                            <div class="widget-user-header text-white"
                                 style="background: url('https://catherineasquithgallery.com/uploads/posts/2021-02/1614443107_25-p-temnii-fon-abstraktsii-37.jpg') center center;">
                                <h3 class="widget-user-username text-right">{{$param->general_manager}}</h3>
                                <h5 class="widget-user-desc text-right">Генеральный директор</h5>
                            </div>
                            <div class="widget-user-image">
                                <img class="img-circle"  style="height: 100px; width: 100px;" src="{{$param->img_general_manager}}"
                                     alt="User Avatar">
                            </div>
                            <div class="card-footer">
                                <div class="row">
                                    <div class="col-sm-4 border-right">
                                        <div class="description-block">
                                            <h5 class="description-header mb-3">Работает с</h5>
                                            <span class="description-text">{{$param->getting_started}}</span>
                                        </div>
                                        <!-- /.description-block -->
                                    </div>
                                    <!-- /.col -->
                                    <div class="col-sm-4 border-right">
                                        <div class="description-block">
                                            <h5 class="description-header mb-3">Приемная</h5>
                                            <p class="description-text"><a href="tel:{{$param->phone}}">{{$param->phone}}</a></p>
                                        </div>
                                        <!-- /.description-block -->
                                    </div>
                                    <!-- /.col -->
                                    <div class="col-sm-4">
                                        <div class="description-block">
                                            <h5 class="description-header mt-5"><a href="#">Подробнее</a></h5>
                                        </div>
                                        <!-- /.description-block -->
                                    </div>
                                    <!-- /.col -->
                                </div>
                                <!-- /.row -->
                            </div>
                        </div>
                        <!-- /.widget-user -->
                    </div>

                </div>
        </div>
        <div class="card">
            <div class="row ml-3 mr-3 mt-3">
                <div class="col-md-3 col-sm-6 col-12">
                    <div class="info-box">
                        <span class="info-box-icon bg-info"><i class="fas fa-city"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">Город</span>
                            <span class="info-box-number">{{$param->city}}</span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <!-- /.col -->
                <div class="col-md-3 col-sm-6 col-12">
                    <div class="info-box">
                        <span class="info-box-icon bg-success"><i class="fas fa-building"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">Компания</span>
                            <span class="info-box-number">{{$param->company_name}}</span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <!-- /.col -->
                <div class="col-md col-sm-6 col-12">
                    <div class="info-box">
                        <span class="info-box-icon bg-warning"><i class="fas fa-map-marker-alt"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">Адрес</span>
                            <span class="info-box-number">{{$param->company_adress}}</span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <!-- /.col -->
            </div>
        </div>
        @endforeach
        <div style="display: none; width: 500px; color: black" id="hidden" class="fancybox">
            <h2>Контент из скрытого div</h2>
        </div>
        <!--/.fancybox-->
    </div>
    <!-- /.content-wrapper -->

@section('custom_js')

@endsection
@endsection
