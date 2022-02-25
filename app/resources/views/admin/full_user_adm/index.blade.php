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

        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Администрация</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route('home')}}">Главная</a></li>
                            <li class="breadcrumb-item active">Администрация</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        @livewire("admins-live")
        <!-- /.content -->
    </div>
@endsection
