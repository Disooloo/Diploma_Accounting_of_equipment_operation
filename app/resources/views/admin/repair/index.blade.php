@extends('layouts.adm_layout')
@section('title', 'Ремонты')

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
            У ремонтов, в логике системы, существует три стадии которые рекомендуется проходить последовательно: 1. Открытие ремонта для оборудования (ввод даты поломки и описание неисправности). 2. Отправка
            оборудования в ремонт (ввод даты отправки и выбор сервисной организации). 3. Возврат оборудования из ремонта/закрытие ремонта (ввод даты возврата и стоимости ремонта). В ремонт можно вносить
            конментарии, изображения и файлы.
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
                        <h1>Ремонты</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Главная</a></li>
                            <li class="breadcrumb-item active">Ремонты</li>
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
                        <table id="example2"
                               class="table text-nowrap table-bordered table-hover dataTable dtr-inline">
                            <thead>
                            <tr>
                                <th>
                                    id
                                </th>
                                <th>
                                    Дата поломки
                                </th>
                                <th>
                                    Дата отправки
                                </th>
                                <th>
                                    Дата получения
                                </th>
                                <th>
                                    Статус
                                </th>
                                <th>
                                    Описание неисправности
                                </th>
                                <th rowspan="2">
                                    Примечание
                                </th>
                                <th>
                                    Стоимость
                                </th>
                                <th>
                                    Сервисная организация
                                </th>
                                <th>
                                    Создал
                                </th>
                                <th>
                                    Отправил
                                </th>
                                <th>
                                    Получил
                                </th>
                                <th>
                                    Обьект id
                                </th>
                                <th>
                                    Обьект вид
                                </th>
                                <th>
                                    Обьект тип
                                </th>
                                <th>
                                    Обьект модель
                                </th>
                                <th>
                                    Обьект компания
                                </th>
                                <th>
                                    Обьект филиал
                                </th>
                                <th>
                                    Обьект место
                                </th>
                                <th>
                                    Обьект статус
                                </th>
                                <th>
                                    Обьект сотрудник
                                </th>
                                <th>
                                    Обьект инвентарный номер
                                </th>
                                <th>
                                    Инв номер бухгалтерии
                                </th>
                                <th>
                                    Обьект серийный номерш
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr class="odd">
                                <td class="dtr-control sorting_1" tabindex="0">0</td>
                                <td>04.01.2022 10:41:20</td>
                                <td>04.01.2022 14:35:32</td>
                                <td>04.01.2022 15:35:32</td>
                                <td>Создан</td>
                                <td><a href=""><i class="fas fa-file-alt"></i></a></td>
                                <td><a href=""><i class="fas fa-file-alt"></i></a></td>
                                <td>200,00</td>
                                <td>ЗАО "Лидер Эксперт"</td>
                                <td>UserName</td>
                                <td>user1</td>
                                <td>user2</td>
                                <td>10</td>
                                <td>Оборудование</td>
                                <td>Монитор</td>
                                <td>BENQ FP92E</td>
                                <td>Эдельвейс</td>
                                <td>Офис на Невском, СПб</td>
                                <td>Склад</td>
                                <td>На складе ОК</td>
                                <td>Комаров А.</td>
                                <td>100010</td>
                                <td>01</td>
                                <td>11111111</td>
                            </tr>
                            <tr class="odd">
                                <td class="dtr-control sorting_1" tabindex="0">1</td>
                                <td>02.01.2022 10:41:20</td>
                                <td>02.01.2022 14:35:32</td>
                                <td>02.01.2022 15:35:32</td>
                                <td>Создан</td>
                                <td><a href=""><i class="fas fa-file-alt"></i></a></td>
                                <td><a href=""><i class="fas fa-file-alt"></i></a></td>
                                <td>250,00</td>
                                <td>ЗАО "Лидер Эксперт"</td>
                                <td>UserName</td>
                                <td>user3</td>
                                <td>user2</td>
                                <td>16</td>
                                <td>Оборудование</td>
                                <td>Монитор</td>
                                <td>BENQ FP92E</td>
                                <td>Эдельвейс</td>
                                <td>Офис на Невском, СПб</td>
                                <td>Склад</td>
                                <td>На складе ОК</td>
                                <td>Комаров А.</td>
                                <td>1020010</td>
                                <td>012</td>
                                <td>1113423</td>
                            </tr>
                            </tbody>
                            <tfoot>
                            <tr>
                                <th rowspan="1" colspan="1">id</th>
                                <th rowspan="1" colspan="1">Дата поломки</th>
                                <th rowspan="1" colspan="1">Дата отправки</th>
                                <th rowspan="1" colspan="1">Дата получения</th>
                                <th rowspan="1" colspan="1">Статус</th>
                                <th rowspan="1" colspan="1">Описание неисправности</th>
                                <th rowspan="1" colspan="1">Примечание</th>
                                <th rowspan="1" colspan="1">Стоимость</th>
                                <th rowspan="1" colspan="1">Сервисная организация</th>
                                <th rowspan="1" colspan="1">Создал</th>
                                <th rowspan="1" colspan="1">Отправил</th>
                                <th rowspan="1" colspan="1">Получил</th>
                                <th rowspan="1" colspan="1">Обьект id</th>
                                <th rowspan="1" colspan="1">Обьект вид</th>
                                <th rowspan="1" colspan="1">Обьект тип</th>
                                <th rowspan="1" colspan="1">Обьект модель</th>
                                <th rowspan="1" colspan="1">Обьект компания</th>
                                <th rowspan="1" colspan="1">Обьект филиал</th>
                                <th rowspan="1" colspan="1">Обьект место</th>
                                <th rowspan="1" colspan="1">Обьект статус</th>
                                <th rowspan="1" colspan="1">Обьект сотрудник</th>
                                <th rowspan="1" colspan="1">Обьект инвентарный номер</th>
                                <th rowspan="1" colspan="1">Инв номер бухгалтерии</th>
                                <th rowspan="1" colspan="1">Обьект серийный номер</th>
                            </tr>
                            </tfoot>
                        </table>
                    </div>
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
    <script>
        $(document).ready(function () {
            $('#dtHorizontalExample').DataTable({
                "scrollX": true
            });
            $('.dataTables_length').addClass('bs-select');
        });
    </script>

@endsection
