@extends('layouts.adm_layout')
@section('title', 'Глобальные настройки')

@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <div class="callout callout-info ">
            <h5><i class="fas fa-info"></i> Подсказка:</h5>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto consequatur culpa cumque doloribus iste
            laudantium optio placeat ratione sint veniam.
        </div>

        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1> Глобальные параметры </h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="/1">Главная</a></li>
                            <li class="breadcrumb-item active">параметры</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        @livewire("global-settings")



    </div>
    <!-- /.content-wrapper -->


@endsection
