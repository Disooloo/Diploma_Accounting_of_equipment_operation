@extends('layouts.adm_layout')
@section('title', 'Добавление сотрудника')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <div class="callout callout-info ">
            <h5><i class="fas fa-info"></i> Подсказка:</h5>
            Таблица сотрудников компании. Можно привязывать различное оборудование и программы к определенному
            сотруднику. Часто имя сотрудника используют для закрепления за ним выданного ему личного или
            мобильного оборудования, чтобы потом (например, при увольнении) было удобно отследить, что он должен
            вернуть.
        </div>
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Сотрудники</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route('team.index')}}">Назад</a></li>
                            <li class="breadcrumb-item active">Добавление сотрудника</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <div class="card">
            <form action="{{route('team.store')}}" method="post">
                @csrf
                <div class="col-md-12">
                    <div class="card card-info">
                        <div class="card-header">
                            <h3 class="card-title">Создание нового сотрудника</h3>
                        </div>
                        <form action="{{route('team.store')}}">
                            <div class="card-body">
                                <!--FirstName-->
                                <div class="form-group">
                                    <label>Заполните информацил о сотруднике</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                                        <span class="input-group-text">
                                                            <i class="fas fa-user"></i>
                                                        </span>
                                        </div>
                                        <input name="FirstName" type="text"
                                               class="form-control"
                                               placeholder="Имя" required>
                                    </div>
                                    <!-- /.input group -->
                                </div>
                                <!-- /.form group -->
                                <!-- LastName -->
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                                        <span class="input-group-text"><i
                                                                class="fas fa-user"></i></span>
                                        </div>
                                        <input name="LastName" type="text"
                                               class="form-control"
                                               placeholder="Фамилия">
                                    </div>
                                    <!-- /.input group -->
                                </div>
                                <!-- /.form group -->
                                <!--Patronymic-->
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                                        <span class="input-group-text"><i
                                                                class="fas fa-user"></i></span>
                                        </div>
                                        <input name="Patronymic" type="text"
                                               class="form-control" placeholder="Отчество">
                                    </div>
                                    <!-- /.input group -->
                                </div>
                                <!-- Post -->
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                                        <span class="input-group-text"><i
                                                                class="fas fa-address-card"></i></span>
                                        </div>
                                        <input name="Post" type="text" class="form-control"
                                               placeholder="Должность">
                                    </div>
                                    <!-- /.input group -->
                                </div>
                                <!-- /.Post -->
                                <!-- Description -->
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                                        <span class="input-group-text"><i
                                                                class="fas fa-audio-description"></i></span>
                                        </div>
                                        <input name="Description" type="text"
                                               class="form-control" placeholder="Описание">
                                    </div>
                                    <!-- /.input group -->
                                </div>
                                <!-- /.Description -->
                                <!-- Adress -->
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                                        <span class="input-group-text"><i
                                                                class="fas fa-map-marker-alt"></i></span>
                                        </div>
                                        <input name="Adress" type="text"
                                               class="form-control"
                                               placeholder="Адрес">
                                    </div>
                                    <!-- /.input group -->
                                </div>
                                <!-- /.Adress -->
                                <!-- phone mask -->
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                                        <span class="input-group-text"><i
                                                                class="fas fa-phone"></i></span>
                                        </div>
                                        <input name="phone" type="text" class="form-control"
                                               placeholder="Телефон">
                                    </div>
                                    <!-- /.input group -->
                                </div>
                                <!-- /.form group -->
                                <!-- ServeseNumber -->
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                                        <span class="input-group-text"><i
                                                                class="fas fa-list-ol"></i></span>
                                        </div>
                                        <input name="ServeseNumber" type="text"
                                               class="form-control"
                                               placeholder="Сервисный номер">
                                    </div>
                                    <!-- /.input group -->
                                </div>
                                <!-- /.form-group -->
                                <!-- Department -->
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                                        <span class="input-group-text"><i
                                                                class="fas fa-building"></i></span>
                                        </div>
                                        <input name="Department" type="text"
                                               class="form-control" placeholder="Отдел">
                                    </div>
                                    <!-- /.input group -->
                                </div>
                                <!-- /.form-group -->

                                <!-- Company -->
                                <div class="form-group">
                                    <select name="Company"
                                            class="form-control select2bs4 select2-hidden-accessible"
                                            style="width: 100%;" data-select2-id="17" tabindex="-1"
                                            aria-hidden="true">
                                        <option value="Компания не выбрана">Компания не выбрана</option>
                                        @foreach($company as $comp)
                                            <option
                                                value="{{$comp->Company_name}}">{{$comp->Company_name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <!-- /.form-group -->


                                <!-- Branch -->
                                <div class="form-group">
                                    <select name="Branch"
                                            class="form-control select2bs4 select2-hidden-accessible"
                                            style="width: 100%;" data-select2-id="17" tabindex="-1"
                                            aria-hidden="true">
                                        <option value="Филиал не выбрана">Филиал не выбрана</option>
                                        @foreach($branch as $bran)
                                            <option
                                                value="{{$bran->Branches_name}}">{{$bran->Branches_name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <!-- /.form-group -->


                                <!-- Education -->
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                                        <span class="input-group-text"><i
                                                                class="fas fa-user-graduate"></i></span>
                                        </div>
                                        <input name="Education" type="text"
                                               class="form-control"
                                               placeholder="Образование">
                                    </div>
                                    <!-- /.input group -->
                                </div>
                                <!-- /.form-group -->
                                <!-- Skill -->
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                                    <span class="input-group-text"><i
                                                            class="fas fa-book-open"></i></span>
                                        </div>
                                        <input name="Skill" type="text" class="form-control"
                                               placeholder="Навыки">
                                    </div>
                                    <!-- /.input group -->
                                </div>
                                <!-- /.form-group -->
                                <!-- email -->
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                                        <span class="input-group-text"><i
                                                                class="far fa-envelope"></i></span>
                                        </div>
                                        <input name="email" type="email"
                                               class="form-control"
                                               placeholder="email">
                                    </div>
                                    <!-- /.input group -->
                                </div>
                                <!-- /.form-group -->

                                <input type="submit"
                                       style="cursor:pointer;" value="Добавить" />
                            </div>
                        </form>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </form>
        </div>
    <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->



@endsection
