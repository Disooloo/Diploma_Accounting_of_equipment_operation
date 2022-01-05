@extends('layouts.adm_layout')
@section('title', 'Модель обьектов')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <div class="callout callout-info ">
            <h5><i class="fas fa-info"></i> Подсказка:</h5>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet commodi dolore doloribus magnam nisi. Atque
            dignissimos in itaque obcaecati quod.
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
                            <label>Фильтр по обьекту</label>
                            <select class="form-control select2 select2-hidden-accessible" style="width: 100%;"
                                    data-select2-id="9" tabindex="-1" aria-hidden="true">
                                <option selected="selected" data-select2-id="11"></option>
                                <option>Оборудование</option>
                                <option>Программы</option>
                                <option>Расходники</option>
                                <option>Комплектующие</option>
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
                        <h1>Модель обьектов</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Главная</a></li>
                            <li class="breadcrumb-item active">Модель обьектов</li>
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
                                Вид <i class="fas fa-sort" style="cursor: pointer"></i>
                            </th>
                            <th class="sorting" tabindex="0" aria-controls="example2"
                                rowspan="1" colspan="1"
                                aria-label="Platform(s): activate to sort column ascending">
                                Тип <i class="fas fa-sort" style="cursor: pointer"></i>
                            </th>
                            <th class="sorting" tabindex="0" aria-controls="example2"
                                rowspan="1" colspan="1"
                                aria-label="Engine version: activate to sort column ascending">
                                Модель <i class="fas fa-sort"
                                          style="cursor: pointer"></i>
                            </th>
                            <th class="sorting" tabindex="0" aria-controls="example2"
                                rowspan="1" colspan="1"
                                aria-label="CSS grade: activate to sort column ascending">
                                Описание <i class="fas fa-sort"
                                            style="cursor: pointer"></i>
                            </th>
                            <th class="sorting" tabindex="0" aria-controls="example2"
                                rowspan="1" colspan="1"
                                aria-label="CSS grade: activate to sort column ascending">
                                Изображение <i class="fas fa-sort"
                                               style="cursor: pointer"></i>
                            </th>
                            <th class="sorting" tabindex="0" aria-controls="example2"
                                rowspan="1" colspan="1"
                                aria-label="CSS grade: activate to sort column ascending">
                                Действие
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr class="odd">
                            <td class="dtr-control sorting_1" tabindex="0">0</td>
                            <td>Оборудование</td>
                            <td>Компьютер</td>
                            <td>DEPO</td>
                            <td>Description</td>
                            <td>
                                <a href="https://becompact.ru/upload/iblock/2ec/2ec3eba0b51ea40b19e5d8edf817eb54.jpg">
                                    <img
                                        src="https://becompact.ru/upload/iblock/2ec/2ec3eba0b51ea40b19e5d8edf817eb54.jpg"
                                        width="150px"></a></td>
                            <td>
                                <a href="#" class="btn btn-info mr-3"><i class="fas fa-pen"></i></a>
                                <a href="#" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a>
                            </td>

                        </tr>
                        <tr class="odd">
                            <td class="dtr-control sorting_1" tabindex="0">1</td>
                            <td>Оборудование</td>
                            <td>Компьютер</td>
                            <td>HP DC7700</td>
                            <td>Description</td>
                            <td>
                                <a href="https://becompact.ru/upload/iblock/2ec/2ec3eba0b51ea40b19e5d8edf817eb54.jpg">
                                    <img
                                        src="https://becompact.ru/upload/iblock/2ec/2ec3eba0b51ea40b19e5d8edf817eb54.jpg"
                                        width="150px"></a></td>
                            <td>
                                <a href="#" class="btn btn-info mr-3"><i class="fas fa-pen"></i></a>
                                <a href="#" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a>
                            </td>
                        </tr>
                        </tbody>
                        <tfoot>
                        <tr>
                            <th rowspan="1" colspan="1">id</th>
                            <th rowspan="1" colspan="1">Вид</th>
                            <th rowspan="1" colspan="1">Тип</th>
                            <th rowspan="1" colspan="1">Модель</th>
                            <th rowspan="1" colspan="1">Описание</th>
                            <th rowspan="1" colspan="1">Изображение</th>
                            <th rowspan="1" colspan="1">Действие</th>
                        </tr>
                        </tfoot>
                    </table>
                    <!-- /.card-body -->
                </div>
            </div>
            <!-- /.card-body -->
            <!-- /.card -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection
