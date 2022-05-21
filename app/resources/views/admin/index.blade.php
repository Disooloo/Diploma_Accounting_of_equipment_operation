@extends('layouts.adm_layout')
@section('title', 'Главная')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Учет работы оборудования</h1>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>

        <section class="content">
            <div class="container-fluid">
                <!-- Small boxes (Stat box) -->
                <div class="row">
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-info">
                            <div class="inner">
                                <h3> {{$model_stats_job}} / <span> {{$model_count}} </span></h3>

                                <p>В работе</p>
                            </div>
                            <div class="icon">
                                <i class="fas fa-desktop"></i>
                            </div>
                            <a href="#" class="small-box-footer">Перейти <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-success">
                            <div class="inner">
                                <h3>{{$model_count*$model_stats_job/100 }}<sup style="font-size: 20px">%</sup></h3>

                                <p>Нагруженность</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-stats-bars"></i>
                            </div>
                            <a href="#" class="small-box-footer">Перейти <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-info">
                            <div class="inner">
                                <h3>{{$team_count}}</h3>

                                <p>Сотрудников компании</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-person-add"></i>
                            </div>
                            <a href="#" class="small-box-footer">Перейти <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-danger">
                            <div class="inner">
                                <h3>{{$model_stats_warehouse}}</h3>

                                <p>На складе</p>
                            </div>
                            <div class="icon">
                                <i class="fas fa-warehouse"></i>
                            </div>
                            <a href="#" class="small-box-footer">Перейти <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->
                </div>
                <!-- /.row -->
                <!-- /.card -->
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Сотрудники компании</h3>

                        <div class="card-tools">
                            <span class="badge badge-danger">8 новых сотрудников</span>
                            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body p-0">
                        <ul class="users-list clearfix">
                            @foreach($teams as $team)
                                <li>
                                    <img src="{{$team->Avatar}}" alt="User Image">
                                    <a class="users-list-name" href="{{route('team.show', $team->id)}}">{{$team->LastName}} {{$team->FirstName}}</a>
                                    <span class="users-list-date">{{$team->Hired}}</span>
                                </li>
                            @endforeach
                        </ul>
                        <!-- /.users-list -->
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer text-center">
                        <a href="{{route('team.index')}}">Все сотрудники</a>
                    </div>
                    <!-- /.card-footer -->
                </div>
                <!-- Main row -->


                <!-- /.row (main row) -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->


    </div>

@endsection
