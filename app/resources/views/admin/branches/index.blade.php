@extends('layouts.adm_layout')
@section('title', 'филиалы')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>филиалы</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Главная</a></li>
                            <li class="breadcrumb-item active">филиалы</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
            <div class="callout callout-info ">
                <h5><i class="fas fa-info"></i> Подсказка:</h5>
                Таблица филиалов/подразделений в которых физически находится оборудование. Под филиалом понимается
                отдельный офис, здание, магазин или город. В одном филиале может находится оборудование разных
                компаний - поэтому жесткой привязки филиала к компании нет.
            </div>
        </section>
        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card card-primary card-outline">
                            <div class="card-header">

                                <div class="col-12">
                                    <input type="submit" value="Добавить"
                                           class="btn 						btn-success float-right">
                                </div>

                            </div>
                            <!-- /.card-header -->
                            <div class="card-body ">
                                <table class="table table-bordered table-striped">
                                    <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Филиал</th>
                                        <th>Описание</th>
                                        <th>Телефон</th>
                                        <th>Email</th>
                                        <th>Сайт</th>
                                        <th>Контактное лицо</th>
                                        <th>Адрес</th>
                                        <th>Реквизиты</th>
                                        <th>Примечание</th>
                                        <th>Изображение</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>0</td>
                                        <td><a style="cursor: pointer">Netscape Browser 8 </a></td>
                                        <td>Win 98SE+</td>
                                        <td>1.7</td>
                                        <td>1.7</td>
                                        <td>1.7</td>
                                        <td>1.7</td>
                                        <td>A</td>
                                        <td>A</td>
                                        <td> a</td>
                                    </tr>
                                    </tbody>
                                    <tfoot>
                                    <tr>
                                        <th>Id</th>
                                        <th>Филиал</th>
                                        <th>Описание</th>
                                        <th>Телефон</th>
                                        <th>Email</th>
                                        <th>Сайт</th>
                                        <th>Контактное лицо</th>
                                        <th>Адрес</th>
                                        <th>Реквизиты</th>
                                        <th>Примечание</th>
                                        <th>Изображение</th>
                                    </tr>
                                    </tfoot>
                                </table>

                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>

@endsection
