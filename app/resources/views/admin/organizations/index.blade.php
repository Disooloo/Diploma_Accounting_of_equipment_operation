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
        @livewire("organizations-live")
        <!-- /.content -->
    </div>

    <!--/.fancybox-->

@endsection
