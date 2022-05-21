@extends('layouts.adm_layout')
@section('title', 'Виды обьектов')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <div class="callout callout-info ">
            <h5><i class="fas fa-info"></i> Подсказка:</h5>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet commodi dolore doloribus magnam nisi. Atque
            dignissimos in itaque obcaecati quod.
        </div>
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Виды обьектов</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route('home')}}">Главная</a></li>
                            <li class="breadcrumb-item active">Виды обьектов</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
        <!-- Main content -->
        @livewire("view-object-live")
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection
