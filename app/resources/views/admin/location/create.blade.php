@extends('layouts.adm_layout')
@section('title', 'Привязка к филиалу')

@section('content')

    <?php
    $coordsInput = '';


    ?>

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

    <div class="content-wrapper">


        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Привязка к филиалу</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Главная</a></li>
                            <li class="breadcrumb-item active">Привязка</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
        <div class="callout callout-info ">
            <h5><i class="fas fa-info"></i> Подсказка:</h5>
           Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam culpa eligendi labore porro quasi repellendus sed sit sunt ullam unde.

        </div>


        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card card-primary card-outline">

                            <form id="formCreateLocal">
                                <div class="m-4">

                                    <div class="card card-info">
                                        <div class="card-header">
                                            <h3 class="card-title">Заполните все поля</h3>
                                        </div>
                                        <div class="card-body">
                                            <!-- local -->
                                            <div class="form-group">
                                                <label>Локация:</label>

                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="fas fa-search-location"></i></span>
                                                    </div>
                                                    <input type="text" class="form-control" placeholder="Локация (Каб. директора)">
                                                </div>
                                                <!-- /.input group -->
                                            </div>
                                            <!-- /.form group -->

                                            <!-- branch -->
                                            <div class="form-group">
                                                <div class="form-group">
                                                    <label>Филиал</label>
                                                    <select class="form-control select2bs4 select2-hidden-accessible" style="width: 100%;" data-select2-id="17" tabindex="-1" aria-hidden="true">
                                                        <option>Alabama</option>
                                                        <option>Alaska</option>
                                                        <option>California</option>
                                                        <option>Delaware</option>
                                                        <option>Tennessee</option>
                                                        <option>Texas</option>
                                                        <option>Washington</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <!-- /.form group -->

                                                <!-- Description -->
                                            <div class="form-group">
                                                <label>Описание</label>

                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="fas fa-clipboard-list"></i></span>
                                                    </div>
                                                    <input type="text" class="form-control" placeholder="Описание">
                                                </div>
                                                <!-- /.input group -->
                                            </div>
                                            <!-- /.form group -->

                                            <div class="form-group">
                                                <label>Бух номер</label>

                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="fas fa-sort-numeric-up-alt"></i></span>
                                                    </div>
                                                    <input type="number" class="form-control" placeholder="Бух. номер (214)">
                                                </div>
                                                <!-- /.input group -->
                                            </div>
                                            <!-- /.form group -->

                                            <!-- phone  -->
                                            <div class="form-group">
                                                <label>phone</label>

                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="fas fa-phone"></i></span>
                                                    </div>
                                                    <input type="text" class="form-control" placeholder="79999999999">
                                                </div>
                                                <!-- /.input group -->
                                            </div>
                                            <!-- /.form group -->

                                            <!-- Adress  -->
                                            <div class="form-group">
                                                <label>Адрес</label>

                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="fas fa-map-marker-alt"></i></span>
                                                    </div>
                                                    <input type="text" class="form-control" placeholder="Адрес (Г.москва, улица, дом...)">
                                                </div>
                                                <!-- /.input group -->
                                            </div>
                                            <!-- /.form group -->

                                            <div class="form-group">
                                                <div id="map"></div>
                                                <input type="text" name="coordsInput" value="<?=$coordsInput?>" class="mt-2 text-black">

                                            <h1 id="asdasd">Координаты: <?=$coordsInput?></h1>
                                            </div>



                                        </div>
                                        <!-- /.card-body -->
                                    </div>
                                    <!-- /.card -->


                                </div>
                                <input type="submit" class="btn btn-success m-3" value="Отправиить">
                            </form>

                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->

                </div>


        </section>
        <!-- /.content -->
    </div>

    @section('custom_js')
@include('admin.location.map')
    @endsection
@endsection
