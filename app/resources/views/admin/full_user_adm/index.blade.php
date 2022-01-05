@extends('layouts.adm_layout')
@section('title', 'Пользователи')

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
            Пользователь это логин сотрудника который работает с программой. У всех кто пользуется программой, должен
            быть свой логин в системе, чтобы можно было понимать кто и когда создавал или изменял данные
            в системе. Каждому пользователю необходимо указать его
            роль, от которой зависит набор прав и доступов.
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
                        <h1>Пользователи</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Главная</a></li>
                            <li class="breadcrumb-item active">Пользователи</li>
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
                                Имя <i class="fas fa-sort" style="cursor: pointer"></i>
                            </th>
                            <th class="sorting" tabindex="0" aria-controls="example2"
                                rowspan="1" colspan="1"
                                aria-label="Platform(s): activate to sort column ascending">
                                Email <i class="fas fa-sort" style="cursor: pointer"></i>
                            </th>
                            <th class="sorting" tabindex="0" aria-controls="example2"
                                rowspan="1" colspan="1"
                                aria-label="Engine version: activate to sort column ascending">
                                Описание <i class="fas fa-sort"
                                            style="cursor: pointer"></i>
                            </th>
                            <th class="sorting" tabindex="0" aria-controls="example2"
                                rowspan="1" colspan="1"
                                aria-label="CSS grade: activate to sort column ascending">
                                Последний вход <i class="fas fa-sort"
                                                  style="cursor: pointer"></i>
                            </th>
                            <th class="sorting" tabindex="0" aria-controls="example2"
                                rowspan="1" colspan="1"
                                aria-label="CSS grade: activate to sort column ascending">
                                Изображение
                            </th>
                            <th class="sorting" tabindex="0" aria-controls="example2"
                                rowspan="1" colspan="1"
                                aria-label="CSS grade: activate to sort column ascending">
                                Роль <i class="fas fa-sort"
                                        style="cursor: pointer"></i>
                            </th>
                            <th class="sorting" tabindex="0" aria-controls="example2"
                                rowspan="1" colspan="1"
                                aria-label="CSS grade: activate to sort column ascending">
                                Заблокировать вход в систему
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
                            <td>User Name</td>
                            <td>test@mail.ru</td>
                            <td>description</td>
                            <td>06.01.2022</td>
                            <td>
                                <a href="https://becompact.ru/upload/iblock/2ec/2ec3eba0b51ea40b19e5d8edf817eb54.jpg">
                                    <i class="fas fa-image img_style"></i></a></td>
                            <td style="color: #6ef36e">Админ</td>
                            <td>
                                <div class="icheck-danger d-inline">
                                    <input type="radio" name="r2" id="radioDanger1">
                                    <label for="radioDanger1">
                                    </label>
                                </div>
                            </td>
                            <td>
                                <a href="#" class="btn btn-info mr-3"><i class="fas fa-pen"></i></a>
                                <a href="#" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a>
                            </td>

                        </tr>
                        <tr class="odd">
                            <td class="dtr-control sorting_1" tabindex="0">1</td>
                            <td>User1</td>
                            <td>test1@mail.ru</td>
                            <td>description</td>
                            <td>02.01.2022</td>
                            <td>
                                <a href="https://becompact.ru/upload/iblock/2ec/2ec3eba0b51ea40b19e5d8edf817eb54.jpg">
                                    <i class="fas fa-image img_style"></i></a></td>
                            <td style="color: #68d7ec">Пользователь</td>
                            <td>
                                <div class="icheck-danger d-inline">
                                    <input type="radio" name="r2" checked id="radioDanger1">
                                    <label for="radioDanger1">
                                    </label>
                                </div>
                            </td>
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
                            <th rowspan="1" colspan="1">Роль</th>
                            <th rowspan="1" colspan="1">Заблокировать вход в систему</th>
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
