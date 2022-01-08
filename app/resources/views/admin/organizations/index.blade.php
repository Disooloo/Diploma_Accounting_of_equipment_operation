@extends('layouts.adm_layout')
@section('title', 'Организации')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Организации</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Главная</a></li>
                            <li class="breadcrumb-item active">Организации</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
            <div class="callout callout-info ">
                <h5><i class="fas fa-info"></i> Подсказка:</h5>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea eligendi enim labore laborum officia
                possimus quod sapiente sunt tempora tenetur?
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
                                <div class="table-responsive">
                                    <table class="table table-bordered table-striped">
                                        <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Название организации</th>
                                            <th>Описание</th>
                                            <th>Email</th>
                                            <th>Телефон</th>
                                            <th>Сайт</th>
                                            <th>Контактное лицо</th>
                                            <th>Адрес</th>
                                            <th>Примечание</th>
                                            <th>Реквизиты</th>
                                            <th>Изображение</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>0</td>
                                            <td><a style="cursor: pointer">ООО "Компьютер сити"</a></td>
                                            <td>Компьютеры, принтеры, программы</td>
                                            <td>support@compusity.ru</td>
                                            <td>(495) 769-21-53</td>
                                            <td>www.compusity.ru</td>
                                            <td>Ситцев Дмитрий</td>
                                            <td>Москва, ул. Народная д.3</td>
                                            <td><a href=""><i class="fas fa-file-alt"></i></a></td>
                                            <td><a href=""><i class="fas fa-file-alt"></i></a></td>
                                            <td><a data-fancybox href="#hidden">
                                                    <i class="fas fa-image"></i></a></td>
                                        </tr>
                                        <td>1</td>
                                        <td>ЗАО "Полимедиа"</td>
                                        <td>Проекционное оборудование</td>
                                        <td>support@polymedia.ru</td>
                                        <td>(495) 123-45-67</td>
                                        <td>www.polymedia.ru</td>
                                        <td>Домин Вадим</td>
                                        <td>Москва, ул. Разная д.99</td>
                                        <td><a href=""><i class="fas fa-file-alt"></i></a></td>
                                        <td><a href=""><i class="fas fa-file-alt"></i></a></td>
                                        <td><a data-fancybox href="#hidden">
                                                <i class="fas fa-image"></i></a></td>
                                        </tr>
                                        </tbody>
                                        <tfoot>
                                        <tr>
                                            <th>Id</th>
                                            <th>Название организации</th>
                                            <th>Описание</th>
                                            <th>Email</th>
                                            <th>Телефон</th>
                                            <th>Сайт</th>
                                            <th>Контактное лицо</th>
                                            <th>Адрес</th>
                                            <th>Примечание</th>
                                            <th>Реквизиты</th>
                                            <th>Изображение</th>
                                        </tr>
                                        </tfoot>
                                    </table>
                                </div>
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
    <div style="display: none; width: 500px;" id="hidden" class="fancybox">
        <h2>Контент из скрытого div</h2>
        <img src="https://becompact.ru/upload/iblock/2ec/2ec3eba0b51ea40b19e5d8edf817eb54.jpg"
             width="250px" alt="">
    </div>
    <!--/.fancybox-->

@endsection
