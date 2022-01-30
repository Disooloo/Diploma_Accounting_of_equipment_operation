@extends('layouts.adm_layout')
@section('title', 'Процессы')

@section('content')

    <div class="content-wrapper">
        <div class="callout callout-info " .>
            <h5><i class="fas fa-info"></i> Подсказка:</h5>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut eum incidunt iste itaque maiores officia qui
            quibusdam quis rerum sapiente!
        </div>
        <div class="card card-default collapsed-card container col-md-12">
            <div class="card-header ">
                <h3 class="card-title">Фильтр</h3>

                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                        <i class="fas fa-plus"></i>
                    </button>
                </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Выберите должность</label>
                            <select class="form-control select2 select2-hidden-accessible" style="width: 100%;"
                                    data-select2-id="9" tabindex="-1" aria-hidden="true">
                                <option selected="selected" data-select2-id="11"></option>
                                <option>Дизайнер</option>
                                <option disabled="disabled">Художник (disabled)</option>
                                <option>Программист</option>
                                <option>Сис. Админ</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Поиск контактов</label>
                            <form action="post">
                                <div class="input-group">
                                    <input type="search" class="form-control form-control-lg" placeholder="...">
                                    <div class="input-group-append">
                                        <button type="submit" class="btn btn-lg btn-default">
                                            <i class="fa fa-search"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>

                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Фильтр по</label>
                            <select class="form-control select2 select2-hidden-accessible" style="width: 100%;"
                                    data-select2-id="9" tabindex="-1" aria-hidden="true">
                                <option selected="selected" data-select2-id="11"></option>
                                <option>Дате добавления</option>
                                <option>Номеру телефону</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Фильтр по тэгу</label>
                            <select class="form-control select2 select2-hidden-accessible" style="width: 100%;"
                                    data-select2-id="9" tabindex="-1" aria-hidden="true">
                                <option selected="selected" data-select2-id="11"></option>
                                <option>Активный</option>
                                <option>Беда</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-12">
                        <input type="submit" value="Применить фильтр"
                               class="btn 						btn-success float-right">
                    </div>
                </div>
            </div>

            <!-- /.card-body -->
        </div>
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Процессы</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route('home')}}">Главная</a></li>
                            <li class="breadcrumb-item active">Процессы</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
        <!-- Main content -->

        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-3 col-sm-6 col-12">
                        <div class="info-box">
                            <span class="info-box-icon bg-info"><i class="fas fa-calendar-times"></i></span>
                            <div class="info-box-content">
                                <span class="info-box-text" title="Договор о неразглошении">NDA</span>
                                <span class="info-box-number"> <a data-fancybox href="#NDA1openFormWord"
                                                                  style="cursor: pointer">Открыть</a> </span>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                        <!-- /.info-box -->
                    </div>
                    <!-- /.col -->
                    <div class="col-md-3 col-sm-6 col-12">
                        <div class="info-box">
                            <span class="info-box-icon bg-info"><i class="fas fa-plane-departure"></i></span>
                            <div class="info-box-content">
                                <span class="info-box-text" title="Договор о неразглошении">Отпуск</span>
                                <span class="info-box-number"> <a data-fancybox href="#Vacation1OpenFormWord"
                                                                  style="cursor: pointer">Открыть</a> </span>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                        <!-- /.info-box -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
        </section>

        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

@include('admin.processes.doc')
@endsection
