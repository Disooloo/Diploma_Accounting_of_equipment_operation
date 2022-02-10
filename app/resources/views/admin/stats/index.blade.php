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
                        <a data-fancybox href="#addStatus" class="btn btn-success float-left">Создать</a>
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
                            <li class="breadcrumb-item"><a href="{{route('home')}}">Главная</a></li>
                            <li class="breadcrumb-item active">Статусы</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="card">
                <div class="card-header">
                    <h1>Всего статусов: {{$stats_count}}</h1>
                </div>
                <!-- Default box -->
                <div class="card-body ">
                    @foreach($stats as $stat)
                        <div class="card card-primary collapsed-card col-md-6">
                            <div class="card-header">
                                <h3 class="card-title">#{{$stat->id}} {{$stat->title}}</h3>
                                <div class="card-tools">

                                    <button type="button" class="btn btn-tool" data-card-widget="collapse"><i
                                            class="fas fa-plus"></i>
                                    </button>
                                    <a href="{{route('status.edit', $stat->id )}}" type="button" class="btn btn-tool" ><i
                                            class="fas fa-pen"></i></i>
                                    </a>
                                    <a data-fancybox href="#DeleteStatus" class="btn btn-tool" ><i
                                            class="fas fa-trash-alt"></i></i>
                                    </a>

                                    <div style="display: none; width: 500px;" id="DeleteStatus"
                                         class="fancybox dark-mode">
                                       <h1>Вы точно хотите удалить ?</h1>
                                        <form action="{{route('status.destroy', $stat->id )}}"
                                              method="POST">
                                            @csrf
                                            @method("DELETE")
                                            <button type="submit" class="btn btn-danger " data-card-widget="collapse2">Удалить</i>
                                            </button>
                                        </form>
                                    </div>

                                </div>
                                <!-- /.card-tools -->
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body" style="display: none;">
                                {{$stat->description}}
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card-body -->
                    @endforeach
                </div>
            </div>
            <!-- /.card-body -->
            <!-- /.card -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <div style="display: none; width: 500px;" id="addStatus"
         class="fancybox dark-mode">
        <form action="{{route('status.store')}}" method="post">
            @csrf
            <div class="card card-warning">
                <div class="card-header">
                    <h3 class="card-title">Заполните все поля</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <form>
                        <div class="row">
                            <div class="col-md-12">
                                <!-- text input -->
                                <div class="form-group">
                                    <label>Название</label>
                                    <input type="text" name="title" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <!-- textarea -->
                                <div class="form-group">
                                    <label>Описание</label>
                                    <textarea name="description" class="form-control" rows="3"  style="height: 69px;"></textarea>
                                </div>
                            </div>

                        </div>
                        <input type="submit" value="Отправить" class="btn btn-info">
                    </form>
                </div>
                <!-- /.card-body -->
            </div>
        </form>
    </div>

@section('custom_js')
{{--    <script>--}}
{{--        $(document).ready(function () {--}}
{{--            $('#addform').on('submit', function (e) {--}}
{{--                e.preventDefault();--}}

{{--                $.ajax({--}}
{{--                    type: "POST",--}}
{{--                    url: "/status/add",--}}
{{--                    data: $('#addform').serialize(),--}}
{{--                    success: function (response) {--}}
{{--                        console.log(response);--}}
{{--                        $.fancybox.close;--}}
{{--                        alert("200");--}}
{{--                    },--}}
{{--                    error: function (error) {--}}
{{--                        console.log("error" + error);--}}
{{--                        alert(error);--}}
{{--                    }--}}
{{--                });--}}
{{--            });--}}
{{--        });--}}
{{--    </script>--}}

@endsection
@endsection
