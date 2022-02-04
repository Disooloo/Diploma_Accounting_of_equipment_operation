@extends('layouts.adm_layout')
@section('title', 'Компании')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Компании</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Главная</a></li>
                            <li class="breadcrumb-item active">Компании</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
            <div class="callout callout-info ">
                <h5><i class="fas fa-info"></i> Подсказка:</h5>
               Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nulla, omnis.
            </div>
        </section>
        <!-- Main content -->
            <div class="card dark-mode m-5">
                <div class="card-header">
                    <h1>test</h1>
                    <a href="{{route('home')}}" class="btn btn-danger">Кнопка</a>
                </div>
            </div>
        <!-- /.content -->
    </div>
@endsection
