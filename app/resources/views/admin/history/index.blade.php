@extends('layouts.adm_layout')
@section('title', 'История зменения')

@section('content')

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
            Все записи истории изменений по всем таблицам. Можно выбирать конкретную форму для просмотра истории
            изменений или нажать крестик в выпадающем списке форм и просматривать сразу все записи
            изменений по всем формам. По умолчанию история изменений отключена для всех форм. Включение ведения истории
            изменений производится отдельно для каждой формы через Параметры" (пункт меню
            "Параметры в верхнем правом углу любой табличной формы). На форме параметров необходимо поставить галку
            Вести историю изменений".
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
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>История зменения</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Главная</a></li>
                            <li class="breadcrumb-item active">История зменения</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="card">
                <!-- Default box -->
                <div class="card-body ">
                    <table id="example2"
                           class="table table-bordered table-hover dataTable dtr-inline"
                           aria-describedby="example2_info">
                        <thead>
                        <tr>
                            <th class="sorting sorting_asc" tabindex="0"
                                aria-controls="example2" rowspan="1" colspan="1"
                                aria-sort="ascending"
                                aria-label="Rendering engine: activate to sort column descending">
                                id <i class="fas fa-sort" style="cursor: pointer"></i>
                            </th>
                            <th class="sorting" tabindex="0" aria-controls="example2"
                                rowspan="1" colspan="1"
                                aria-label="Browser: activate to sort column ascending">
                                Дата <i class="fas fa-sort" style="cursor: pointer"></i>
                            </th>
                            <th class="sorting" tabindex="0" aria-controls="example2"
                                rowspan="1" colspan="1"
                                aria-label="Platform(s): activate to sort column ascending">
                                Роль <i class="fas fa-sort" style="cursor: pointer"></i>
                            </th>
                            <th class="sorting" tabindex="0" aria-controls="example2"
                                rowspan="1" colspan="1"
                                aria-label="Engine version: activate to sort column ascending">
                                Имя <i class="fas fa-sort"
                                       style="cursor: pointer"></i>
                            </th>
                            <th class="sorting" tabindex="0" aria-controls="example2"
                                rowspan="1" colspan="1"
                                aria-label="CSS grade: activate to sort column ascending">
                                Форма <i class="fas fa-sort"
                                         style="cursor: pointer"></i>
                            </th>
                            <th class="sorting" tabindex="0" aria-controls="example2"
                                rowspan="1" colspan="1"
                                aria-label="CSS grade: activate to sort column ascending">
                                Ключ <i class="fas fa-sort"
                                        style="cursor: pointer"></i>
                            </th>
                            <th class="sorting" tabindex="0" aria-controls="example2"
                                rowspan="1" colspan="1"
                                aria-label="CSS grade: activate to sort column ascending">
                                Поле <i class="fas fa-sort"
                                        style="cursor: pointer"></i>
                            </th>
                            <th class="sorting" tabindex="0" aria-controls="example2"
                                rowspan="1" colspan="1"
                                aria-label="CSS grade: activate to sort column ascending">
                                Старое значение <i class="fas fa-sort"
                                                   style="cursor: pointer"></i>
                            </th>
                            <th class="sorting" tabindex="0" aria-controls="example2"
                                rowspan="1" colspan="1"
                                aria-label="CSS grade: activate to sort column ascending">
                                Новое значение <i class="fas fa-sort"
                                                  style="cursor: pointer"></i>
                            </th>

                        </tr>
                        </thead>
                        <tbody>
                        <tr class="odd">
                            <td class="dtr-control sorting_1" tabindex="0">0</td>
                            <td>04.01.2022 14:35:32</td>
                            <td>Админ</td>
                            <td>Username</td>
                            <td>Обьект</td>
                            <td>30</td>
                            <td>Стоимость</td>
                            <td>0</td>
                            <td>20000</td>
                        </tr>
                        <tr class="odd">
                            <td class="dtr-control sorting_1" tabindex="0">1</td>
                            <td>04.01.2022 14:39:32</td>
                            <td>Админ</td>
                            <td>UserName</td>
                            <td>Обьект</td>
                            <td>31</td>
                            <td>ID</td>
                            <td>Новая запись</td>
                            <td>30</td>
                        </tr>
                        </tbody>
                        <tfoot>
                        <tr>
                            <th rowspan="1" colspan="1">id</th>
                            <th rowspan="1" colspan="1">Дата</th>
                            <th rowspan="1" colspan="1">Роль</th>
                            <th rowspan="1" colspan="1">Имя</th>
                            <th rowspan="1" colspan="1">Форма</th>
                            <th rowspan="1" colspan="1">Ключ</th>
                            <th rowspan="1" colspan="1">Поле</th>
                            <th rowspan="1" colspan="1">Старое значение</th>
                            <th rowspan="1" colspan="1">Новое значение</th>
                        </tr>
                        </tfoot>
                    </table>
                    <!-- /.card-body -->
                    <div style="display: none; width: 500px;" id="hidden" class="fancybox">
                        <h2>Контент из скрытого div</h2>
                        <img src="https://becompact.ru/upload/iblock/2ec/2ec3eba0b51ea40b19e5d8edf817eb54.jpg"
                             width="250px" alt="">
                    </div>
                    <!--/.fancybox-->
                </div>
            </div>
            <!-- /.card-body -->
            <!-- /.card -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="{{asset('/dist/js/fancybox/jquery.fancybox.min.js')}}"></script>

@endsection
