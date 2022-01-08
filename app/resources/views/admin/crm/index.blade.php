@extends('layouts.adm_layout')
@section('title', 'SRM')

@section('content')

    <style>
        .dtHorizontalExampleWrapper {
            max-width: 600px;
            margin: 0 auto;
        }

        #dtHorizontalExample th, td {
            white-space: nowrap;
        }

        table.dataTable thead .sorting:after,
        table.dataTable thead .sorting:before,
        table.dataTable thead .sorting_asc:after,
        table.dataTable thead .sorting_asc:before,
        table.dataTable thead .sorting_asc_disabled:after,
        table.dataTable thead .sorting_asc_disabled:before,
        table.dataTable thead .sorting_desc:after,
        table.dataTable thead .sorting_desc:before,
        table.dataTable thead .sorting_desc_disabled:after,
        table.dataTable thead .sorting_desc_disabled:before {
            bottom: .5em;
        }

        li {
            list-style: none;

        }

        #map {
            width: 100%;
            height: 500px;
        }
    </style>
    <style>
        .img_style {
            width: 50px;
            color: #fff;
        }

        .img_style:hover {
            color: #3F6791;
        }
    </style>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <div class="callout callout-info ">
            <h5><i class="fas fa-info"></i> Подсказка:</h5>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto consequatur culpa cumque doloribus iste
            laudantium optio placeat ratione sint veniam.
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
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Поиск...</label>
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
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Фильтр</label>
                            <select class="form-control select2 select2-hidden-accessible" style="width: 100%;"
                                    data-select2-id="9" tabindex="-1" aria-hidden="true">
                                <option selected="selected" data-select2-id="11"></option>
                                <option>Админ</option>
                                <option>Пользователь</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-6">
                        <input type="submit" value="Создать" class="btn btn-success float-left">
                    </div>
                    <div class="col-6">
                        <input type="submit" value="Применить фильтр" class="btn btn-info float-right">
                    </div>
                </div>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- Content Header (Page header) -->
        <div class="card content-wrapper kanban" style="margin-left: 0px;">
            <section class="content-header">
                <div class="container-flui">
                    <div class="row">
                        <div class="col-sm-6">
                            <h1>SRM</h1>
                        </div>


                        <div class="col-sm-6 d-none d-sm-block">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Главная</a></li>
                                <li class="breadcrumb-item active">SRM</li>
                            </ol>
                        </div>
                        <div class="col-sm-6 mt-3">
                            <div class="form-group">
                                <select class="custom-select">
                                    <option>Сотрудники</option>
                                    <option>Пользователи</option>
                                    <option>Доставка</option>
                                    <option>Новая 1</option>
                                    <option>НОвая 2</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-6 mt-3">
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="Добавить новую каттегорию">
                                <div class="input-group-append">
                                    <a href="#">
                                        <span class="input-group-text"><i class="fas fa-plus"></i></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="content pb-3">
                <div class="container-fluid h-100">
                    <div class="card card-row card-secondary">
                        <div class="card-header">
                            <h3 class="card-title">
                                Добавление пользователя
                            </h3>
                        </div>
                        <div class="card-body">
                            <div class="card card-info card-outline">
                                <div class="card-header">
                                    <h5 class="card-title">User 1</h5>
                                    <div class="card-tools">
                                        <a href="#" class="btn btn-tool btn-link">#3</a>
                                        <a href="#" class="btn btn-tool">
                                            <i class="fas fa-pen"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="card card-primary card-outline">
                                <div class="card-header">
                                    <h5 class="card-title">user 2</h5>
                                    <div class="card-tools">
                                        <a href="#" class="btn btn-tool btn-link">#4</a>
                                        <a href="#" class="btn btn-tool">
                                            <i class="fas fa-pen"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card card-row card-primary">
                        <div class="card-header">
                            <h3 class="card-title">
                                Инструктаж
                            </h3>
                        </div>
                        <div class="card-body">
                            <div class="card card-primary card-outline">
                                <div class="card-header">
                                    <h5 class="card-title">user 3</h5>
                                    <div class="card-tools">
                                        <a href="#" class="btn btn-tool btn-link">#5</a>
                                        <a href="#" class="btn btn-tool">
                                            <i class="fas fa-pen"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card card-row card-default">
                        <div class="card-header bg-info">
                            <h3 class="card-title">
                                Док процесс
                            </h3>
                        </div>
                        <div class="card-body">
                            <div class="card card-light card-outline">
                                <div class="card-header">
                                    <h5 class="card-title">user6</h5>
                                    <div class="card-tools">
                                        <a href="#" class="btn btn-tool btn-link">#2</a>
                                        <a href="#" class="btn btn-tool">
                                            <i class="fas fa-pen"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <p>
                                        <a href="" class="btn btn-info">Заявление 1</a>
                                        <a href="" class="btn btn-info m-3">Заявление 2</a>
                                        <a href="" class="btn btn-info">Заявление 3</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card card-row card-success">
                        <div class="card-header">
                            <h3 class="card-title">
                                Готов
                            </h3>
                        </div>
                        <div class="card-body">
                            <div class="card card-primary card-outline">
                                <div class="card-header">
                                    <h5 class="card-title">User 5</h5>
                                    <div class="card-tools">
                                        <a href="#" class="btn btn-tool btn-link">#1</a>
                                        <a href="#" class="btn btn-tool">
                                            <i class="fas fa-pen"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>

        <!-- Main content -->

        <!-- /.content -->

        <div style="display: none; width: 500px;" id="hidden" class="fancybox">
            <h2>Контент из скрытого div</h2>
            <img src="https://becompact.ru/upload/iblock/2ec/2ec3eba0b51ea40b19e5d8edf817eb54.jpg"
                 width="250px" alt="">
        </div>
        <!--/.fancybox-->
    </div>
    <!-- /.content-wrapper -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="{{asset('/dist/js/fancybox/jquery.fancybox.min.js')}}"></script>
    <script>
        $(document).ready(function () {
            $('#dtHorizontalExample').DataTable({
                "scrollX": true
            });
            $('.dataTables_length').addClass('bs-select');
        });

        $('.test_Alert').click(function () {
            $('.hid_table').show();
            $('.hid_table').addClass('active');
        });

    </script>

@endsection
