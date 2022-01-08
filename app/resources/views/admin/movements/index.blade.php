@extends('layouts.adm_layout')
@section('title', 'Перемещения')

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
            Перемещения позволяют регламентировать процесс отправки оборудования из одного филиала в другой. Алгоритм работы с перемещениями предполагает что отправляющая сторона формирует набор объектов
            перемещения (добавляет требуемые объекты в документ перемещения) и создаёт перемещение в статусе "Создано". После того как перемещение фактически отправляется в другой филиал, на форме
            перемещения нажимается кнопка "Отправить" и перемещениее принимает статус "Отправлено". Когда перемещаемые объекты фактически приходят в филиал получатель, на форме перемещения нажимается
            кнопка "Получить" и перемещение принимает статус "Получено", а все объекты перемещения меняют свой филиал на значение в поле "Филиал получатель".
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
                        <h1>Перемещения</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Главная</a></li>
                            <li class="breadcrumb-item active">Перемещения</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="card">
                <!-- Default box -->
                <div class="card-body">
                    <div class="table-responsive">
                        <table
                            class="table text-nowrap table-bordered table-hover ">
                            <thead>
                            <tr>
                                <th rowspan="1" colspan="1">id</th>
                                <th rowspan="1" colspan="1">Название</th>
                                <th rowspan="1" colspan="1">Описание</th>
                                <th rowspan="1" colspan="1">Филиал отправитель</th>
                                <th rowspan="1" colspan="1">Филиал получатель</th>
                                <th rowspan="1" colspan="1">Сотрудник отправитель</th>
                                <th rowspan="1" colspan="1">Сотрудник получатель</th>
                                <th rowspan="1" colspan="1">Компания</th>
                                <th rowspan="1" colspan="1">Статус обьектов перемещения</th>
                                <th rowspan="1" colspan="1">Статус</th>
                                <th rowspan="1" colspan="1">Дата создания</th>
                                <th rowspan="1" colspan="1">Создал</th>
                                <th rowspan="1" colspan="1">Дата отправки</th>
                                <th rowspan="1" colspan="1">Пользователь отправитель</th>
                                <th rowspan="1" colspan="1">Дата получения</th>
                                <th rowspan="1" colspan="1">Пользователь получатель</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr class="test_Alert">
                                <td>1</td>
                                <td>тест1</td>
                                <td><a href=""><i class="fas fa-file-alt"></i></a></td>
                                <td>Офис на тверской каб 112</td>
                                <td>Зепин Д.К</td>
                                <td>Тачалова К.Е</td>
                                <td>Рик</td>
                                <td>Перемещение</td>
                                <td>Создано</td>
                                <td>06.01.2022 14:09:34</td>
                                <td>USerName</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>0</td>
                                <td>тест</td>
                                <td><a href=""><i class="fas fa-file-alt"></i></a></td>
                                <td>Офис на тверской каб 112</td>
                                <td>Зепин Д.К</td>
                                <td>Тачалова К.Е</td>
                                <td>Рик</td>
                                <td>Перемещение</td>
                                <td>Создано</td>
                                <td>06.01.2022 14:09:34</td>
                                <td>USerName</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            </tbody>
                            <tfoot>
                            <tr>
                                <th rowspan="1" colspan="1">id</th>
                                <th rowspan="1" colspan="1">Название</th>
                                <th rowspan="1" colspan="1">Описание</th>
                                <th rowspan="1" colspan="1">Филиал отправитель</th>
                                <th rowspan="1" colspan="1">Филиал получатель</th>
                                <th rowspan="1" colspan="1">Сотрудник отправитель</th>
                                <th rowspan="1" colspan="1">Сотрудник получатель</th>
                                <th rowspan="1" colspan="1">Компания</th>
                                <th rowspan="1" colspan="1">Статус обьектов перемещения</th>
                                <th rowspan="1" colspan="1">Статус</th>
                                <th rowspan="1" colspan="1">Дата создания</th>
                                <th rowspan="1" colspan="1">Создал</th>
                                <th rowspan="1" colspan="1">Дата отправки</th>
                                <th rowspan="1" colspan="1">Пользователь отправитель</th>
                                <th rowspan="1" colspan="1">Дата получения</th>
                                <th rowspan="1" colspan="1">Пользователь получатель</th>
                            </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
            <div class="card">
                <!-- Default box -->
                <div class="card-body">
                    <div class="col-12">
                        <h2 class="float-left">Записи перемещения</h2>
                        <input type="submit" value="Добавить запись" class="btn btn-info float-right">
                    </div>
                    <div class="table-responsive">
                        <table
                            class="table text-nowrap table-bordered table-hover hid_table " style="display: none;">
                            <thead>
                            <tr>
                                <th rowspan="1" colspan="1">id</th>
                                <th rowspan="1" colspan="1">Вид</th>
                                <th rowspan="1" colspan="1">Тип</th>
                                <th rowspan="1" colspan="1">Модель</th>
                                <th rowspan="1" colspan="1">Компания</th>
                                <th rowspan="1" colspan="1">Филиал</th>
                                <th rowspan="1" colspan="1">Место</th>
                                <th rowspan="1" colspan="1">Статус</th>
                                <th rowspan="1" colspan="1">Сотрудник</th>
                                <th rowspan="1" colspan="1">Серийный номер</th>
                                <th rowspan="1" colspan="1">Инвентарный номер</th>
                                <th rowspan="1" colspan="1">Инв номер бухгалтерии	</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>0</td>
                                <td>Оборудование</td>
                                <td>Монитор</td>
                                <td>Nonema</td>
                                <td>Rik</td>
                                <td>Офис на тверской</td>
                                <td>Склад</td>
                                <td>На складе</td>
                                <td>Воронов А.К</td>
                                <td>SJDG65JH5JSD14</td>
                                <td>100024</td>
                                <td>2334</td>
                            </tr>
                            </tbody>
                            <tfoot>
                            <tr>
                                <th rowspan="1" colspan="1">id</th>
                                <th rowspan="1" colspan="1">Вид</th>
                                <th rowspan="1" colspan="1">Тип</th>
                                <th rowspan="1" colspan="1">Модель</th>
                                <th rowspan="1" colspan="1">Компания</th>
                                <th rowspan="1" colspan="1">Филиал</th>
                                <th rowspan="1" colspan="1">Место</th>
                                <th rowspan="1" colspan="1">Статус</th>
                                <th rowspan="1" colspan="1">Сотрудник</th>
                                <th rowspan="1" colspan="1">Серийный номер</th>
                                <th rowspan="1" colspan="1">Инвентарный номер</th>
                                <th rowspan="1" colspan="1">Инв номер бухгалтерии	</th>
                            </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
            <!-- /.card-body -->
            <!-- /.card -->
        </section>
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

        $('.test_Alert').click(function (){
            $('.hid_table').show();
            $('.hid_table').addClass('active');
        });

    </script>

@endsection
