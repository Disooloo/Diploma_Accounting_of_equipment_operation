@extends('layouts.adm_layout')
@section('title', "Профиль сотрудника")

@section('content')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Профиль | {{$team['FirstName']}} {{$team['LastName']}}</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Главная</a></li>
                            <li class="breadcrumb-item active">Профиль</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-3">
                        <!-- Profile Image -->
                        <div class="card card-primary card-outline">
                            <div class="card-body box-profile">
                                <div class="text-center">
                                    <img class="profile-user-img img-fluid img-circle"
                                         src="{{$team['Avatar']}}"
                                         alt="User profile picture">
                                </div>

                                <h3 class="profile-username text-center">{{$team['FirstName']}} {{$team['LastName']}}</h3>

                                <p class="text-muted text-center">{{$team['Post']}}</p>

                                <ul class="list-group list-group-unbordered mb-3">
                                    <li class="list-group-item">
                                        <b>Табельный номер</b> <a class="float-right">{{$team['ServeseNumber']}}</a>
                                    </li>
                                    <li class="list-group-item">
                                        <b>Отдел</b> <a class="float-right">{{$team['Department']}}</a>
                                    </li>
                                    <li class="list-group-item">
                                        <b>Компания</b> <a class="float-right">{{$team['Company']}}</a>
                                    </li>
                                    <li class="list-group-item">
                                        <b>Филиал</b> <a class="float-right">{{$team['Branch']}}</a>
                                    </li>
                                </ul>
                                <form method="post" action="{{route('team.update', $team->id)}}">
                                    @csrf
                                    @method('PUT')
                                    <input type="hidden" value="1" name="Dismissed_team">

                                    @if($team['Dismissed_team'] == 0)
                                        <input type="date" style="color:black" name="Dismissed" id="Dismissed_team_data"
                                               name="Dismissed">
                                        <script>
                                            document.getElementById('Dismissed_team_data').valueAsDate = new Date();
                                        </script>

                                        <input value="Уволить" type="submit" id="Successfully_dismissed_employee"
                                               class="btn btn-danger btn-block Successfully_dismissed_employee"/>
                                    @else
                                        <form method="post">
                                            @csrf
                                            @method('PUT')
                                            <div class="col-md-12 mt-3">
                                                <input type="date" name="Dismissed" style="display: none "
                                                       id="Dismissed_team_data" name="Dismissed">
                                                <input type=hidden value="0" name="Dismissed_team" id="Dismissed_team"/>
                                                <input value="Восстановить" type="submit"
                                                       id="Successfully_restored_employee"
                                                       class="btn btn-primary btn-block Successfully_restored_employee"/>
                                            </div>
                                            <script>

                                                document.getElementById('Dismissed_team_data').valueAsDate = new Date();
                                            </script>
                                        </form>
                                    @endif
                                </form>


                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->

                        <!-- About Me Box -->
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">О сотруднике</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <strong><i class="fas fa-book mr-1"></i> Образование</strong>

                                <p class="text-muted">
                                    {{$team['Education']}}
                                </p>

                                <hr>

                                <strong><i class="fas fa-map-marker-alt mr-1"></i> Местоположение</strong>

                                <p class="text-muted">  {{$team['Adress']}}</p>

                                <hr>

                                <strong><i class="fas fa-pencil-alt mr-1"></i>Навыки</strong>

                                <p class="text-muted">
                                    <span class="tag tag-info"> {{$team['Skill']}}</span>

                                </p>

                                <hr>

                                <strong><i class="far fa-file-alt mr-1"></i>Записи</strong>

                                <p class="text-muted">{{$team['Description']}}</p>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                    <div class="col-md-9">
                        <div class="card card-primary card-outline">
                            <div class="card-header p-2">
                                <ul class="nav nav-pills">
                                    <li class="nav-item"><a class="nav-link active" href="#timeline" data-toggle="tab">Данные
                                            сотрудника</a></li>
                                    <li class="nav-item"><a class="nav-link" href="#settings" data-toggle="tab">Настройки</a>
                                    </li>
                                </ul>
                            </div><!-- /.card-header -->
                            <div class="card-body">
                                <div class="tab-content">


                                    <div class="active tab-pane" id="timeline">
                                        <!-- The timeline -->
                                        <div class="timeline timeline-inverse">
                                            <!-- timeline time label -->
                                            <div class="time-label">
                                                <span class="bg-success">
                                                    {{$team['Hired']}}
                                                </span>
                                            </div>
                                            <!-- /.timeline-label -->
                                            <!-- timeline item -->
                                            <div>
                                                <i class="fas fa-envelope bg-primary"></i>

                                                <div class="timeline-item">
                                                    <h3 class="timeline-header"><a href="#">Системная информация</a>
                                                        принят(а) на работу</h3>

                                                    <div class="timeline-body">
                                                        Прибывшему сотруднику просьба прочитать требования и внутренние
                                                        правила компании.
                                                    </div>
                                                    <div class="timeline-footer">
                                                        <a data-fancybox href="#requirements"
                                                           class="btn btn-primary btn-sm">Прочитать
                                                            требования</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- END timeline item -->
                                            <!-- timeline item -->
                                            @if($team['dop1_id'] == 1)
                                                <div>
                                                    <i class="fas fa-user bg-info"></i>

                                                    <div class="timeline-item">


                                                        <h3 class="timeline-header border-0"><a href="#">Системная
                                                                информация</a> документы сотрудника
                                                        </h3>
                                                        <div class="timeline-footer">
                                                            <div class="card">

                                                                <!-- /.card-header -->
                                                                <div class="card-body">
                                                                    <table class="table table-bordered">
                                                                        <thead>
                                                                        <tr>
                                                                            <th style="width: 10px">#</th>
                                                                            <th>Документ</th>
                                                                            <th>Скачать</th>
                                                                        </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                        <tr>
                                                                            <td>1.</td>
                                                                            <td>Паспорт</td>
                                                                            <td>
                                                                                <a href=" {{$team['Password']}}"
                                                                                   style="cursor: pointer">Ссылка</a>
                                                                            </td>

                                                                        </tr>
                                                                        <tr>
                                                                            <td>2.</td>
                                                                            <td>Пенсионное страхование</td>
                                                                            <td>
                                                                                <a href=" {{$team['PensionInsurant']}}"
                                                                                   style="cursor: pointer">Ссылка</a>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>3.</td>
                                                                            <td>мед. полис</td>
                                                                            <td>
                                                                                <a href=" {{$team['MedicalPolicy']}}"
                                                                                   style="cursor: pointer">Ссылка</a>
                                                                            </td>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                                <!-- /.card-body -->
                                                                <div class="card-footer clearfix">
                                                                    <ul class="pagination pagination-sm m-0 float-right">
                                                                        <li class="page-item"><a class="page-link"
                                                                                                 href="#">«</a>
                                                                        </li>
                                                                        <li class="page-item"><a class="page-link"
                                                                                                 href="#">1</a>
                                                                        </li>
                                                                        <li class="page-item"><a class="page-link"
                                                                                                 href="#">2</a>
                                                                        </li>
                                                                        <li class="page-item"><a class="page-link"
                                                                                                 href="#">3</a>
                                                                        </li>
                                                                        <li class="page-item"><a class="page-link"
                                                                                                 href="#">»</a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endif
                                        <!-- END timeline item -->
                                            <!-- timeline item -->

                                            <!-- END timeline item -->

                                            <!-- timeline time label -->

                                            @if($team['Dismissed_team'] == 1)

                                                <div class="time-label">
                                                <span class="bg-danger">
                                                    {{$team['Dismissed']}}
                                                </span>
                                                </div>
                                                <!-- /.timeline-label -->
                                                <!-- timeline item -->
                                                <div>
                                                    <i class="fas fa-user-minus bg-purple"></i>

                                                    <div class="timeline-item">

                                                        <h3 class="timeline-header"><a href="#">Системная
                                                                информация </a>
                                                            Уволен из организации</h3>
                                                        <div class="timeline-body">
                                                            @foreach($team as $teams)
                                                                <table class="table table-bordered">
                                                                    <thead>
                                                                    <tr>
                                                                        <th style="width: 10px">id</th>
                                                                        <th>Закрепленное оборудование</th>
                                                                        <th>Позиция</th>
                                                                    </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                    <tr>
                                                                        <td>0</td>
                                                                        <td>Оборудование 2</td>
                                                                        <td>
                                                                            <a>@if($team['passed'] == 0) Не сдал @else
                                                                                    сдал @endif</a>
                                                                        </td>

                                                                    </tr>
                                                                    </tbody>
                                                                </table>
                                                            @endforeach
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- END timeline item -->
                                                <div>
                                                    <i class="far fa-clock bg-gray"></i>

                                                    <div class="timeline-item">

                                                        <h3 class="timeline-header"><a href="#">Системная
                                                                информация </a>
                                                        </h3>
                                                        <div class="timeline-body">
                                                            <a href="#" class="btn btn-danger btn-sm">Удалить сотрудника
                                                                из
                                                                БД</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                    <!-- /.tab-pane -->
                                    <div class="tab-pane" id="settings">
                                        <form class="form-horizontal" action="{{route('teamSettings', $team->id)}}">
                                            @csrf
                                            @method('PUT')
                                            <div class="form-group row">
                                                <label for="FirstName" class="col-sm-2 col-form-label">Имя</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" id="FirstName"
                                                           name="FirstName"
                                                           placeholder="Имя" value="{{$team['FirstName']}}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="LastName" class="col-sm-2 col-form-label">Фамилия</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" id="LastName"
                                                           placeholder="Фамилия" value="{{$team['LastName']}}"
                                                           name="LastName">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="Patronymic" class="col-sm-2 col-form-label">Отчество</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" id="Patronymic"
                                                           placeholder="Отчество" value="{{$team['Patronymic']}}"
                                                           name="Patronymic">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="email" class="col-sm-2 col-form-label">Email</label>
                                                <div class="col-sm-10">
                                                    <input type="email" class="form-control" id="email"
                                                           placeholder="Email" value="{{$team['email']}}" name="email">
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label for="Skill"
                                                       class="col-sm-2 col-form-label">Навыки</label>
                                                <div class="col-sm-10">
                                                    <textarea class="form-control" id="Skill"
                                                              placeholder="Навыки"
                                                              name="Skill">{{$team['Skill']}}</textarea>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="Education"
                                                       class="col-sm-2 col-form-label">Образование</label>
                                                <div class="col-sm-10">
                                                    <textarea class="form-control" id="Education"
                                                              placeholder="Образование"
                                                              name="Education">{{$team['Education']}}</textarea>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="Description"
                                                       class="col-sm-2 col-form-label">Записи</label>
                                                <div class="col-sm-10">
                                                    <textarea class="form-control" id="Description"
                                                              placeholder="Записи"
                                                              name="Description">{{$team['Description']}}</textarea>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="Avatar" class="col-sm-2 col-form-label">Аватарка</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" id="Avatar"
                                                           placeholder="Аватарка" value="{{$team['Avatar']}}"
                                                           name="Avatar">
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <div class="form-group row">
                                                    <div class="offset-sm-2 col-sm-10">
                                                        <input type="submit"
                                                               class="btn btn-info" value="Изменить"/>
                                                    </div>
                                                </div>
                                        </form>
                                    </div>
                                    <!-- /.tab-pane -->
                                </div>
                                <!-- /.tab-content -->
                            </div><!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>
        <div style="display: none; width: 60%; height: 60%; color: black" id="requirements" class="fancybox">
            <h2>Прочитай Внимательно!!!</h2>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec dignissim <br>
                vulputate eros.
            </p>
            <p>
                Donec hendrerit efficitur ex vitae euismod. Maecenas ut leo vitae ipsum dictum <br>
                cursus vel vitae nulla.
            </p>
            <form method="post" action="{{route('dop1team', $team->id)}}">
                @csrf
                @method('POST')
                <div class="form-group">
                    <div class="icheck-primary col-md-12">
                        @if($team['dop1_id'] == 0)
                            <input type="radio" class="radio1" id="allow">
                        @else
                            <input type="radio" checked class="radio1" id="allow">
                        @endif
                        <label for="allow">
                            Я прочитал.
                        </label>
                    </div>
                    <div class="col-md-12 mt-3">
                        <input type=hidden value="1" name="dop1_id"/>
                        <input type=submit id=submit value=Отправить class="btn btn-info"/>
                    </div>

                </div>
            </form>
        </div>
        <!-- /.content -->
    </div>


@section('castom_js')
    <script>

    </script>
@endsection
@endsection
