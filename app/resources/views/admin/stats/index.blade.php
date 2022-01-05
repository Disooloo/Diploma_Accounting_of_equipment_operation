@extends('layouts.adm_layout')
@section('title', 'Статусы')

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
                            <label>Фильтр по тэгу</label>
                            <select class="form-control select2 select2-hidden-accessible" style="width: 100%;"
                                    data-select2-id="9" tabindex="-1" aria-hidden="true">
                                <option selected="selected" data-select2-id="11"></option>
                                <option>Активный</option>
                                <option>Беда</option>
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
                        <h1>Статусы</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Главная</a></li>
                            <li class="breadcrumb-item active">Статусы</li>
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
                    <div class="card card-primary collapsed-card col-md-6">
                        <div class="card-header">
                            <h3 class="card-title">К списанию</h3>

                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i
                                        class="fas fa-plus"></i>
                                </button>
                                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i
                                        class="fas fa-pen"></i></i>
                                </button>
                                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i
                                        class="fas fa-trash-alt"></i></i>
                                </button>
                            </div>
                            <!-- /.card-tools -->
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body" style="display: none;">
                            Подготовлено к списанию
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <div class="card card-primary collapsed-card col-md-6">
                        <div class="card-header">
                            <h3 class="card-title">На складе ОК</h3>

                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i
                                        class="fas fa-plus"></i>
                                </button>
                                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i
                                        class="fas fa-pen"></i></i>
                                </button>
                                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i
                                        class="fas fa-trash-alt"></i></i>
                                </button>
                            </div>
                            <!-- /.card-tools -->
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body" style="display: none;">
                            Находится на складе в рабочем состоянии
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <div class="card card-primary collapsed-card col-md-6">
                        <div class="card-header">
                            <h3 class="card-title">На складе новый</h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i
                                        class="fas fa-plus"></i>
                                </button>
                                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i
                                        class="fas fa-pen"></i></i>
                                </button>
                                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i
                                        class="fas fa-trash-alt"></i></i>
                                </button>
                            </div>
                            <!-- /.card-tools -->
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body" style="display: none;">
                            Находится на складе в рабочем состоянии до этого не спользовался
                        </div>
                        <!-- /.card-body -->
                    </div>
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
