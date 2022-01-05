@extends('layouts.adm_layout')
@section('title', 'User Name')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Профиль | UserName</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Главная</a></li>
                            <li class="breadcrumb-item active">Профиль | User Name</li>
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
                                         src="../../dist/img/user4-128x128.jpg"
                                         alt="User profile picture">
                                </div>

                                <h3 class="profile-username text-center">Нина Михтуре</h3>

                                <p class="text-muted text-center">Программный инженер</p>

                                <ul class="list-group list-group-unbordered mb-3">
                                    <li class="list-group-item">
                                        <b>Табельный номер</b> <a class="float-right">0922</a>
                                    </li>
                                    <li class="list-group-item">
                                        <b>Отдел</b> <a class="float-right">Внедрения</a>
                                    </li>
                                    <li class="list-group-item">
                                        <b>Компания</b> <a class="float-right">ООО рога и копыта</a>
                                    </li>
                                    <li class="list-group-item">
                                        <b>Филиал</b> <a class="float-right">Офис на тверской</a>
                                    </li>
                                </ul>

                                <a href="#" class="btn btn-primary btn-block"><b>Уволить</b></a>
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
                                    Степень бакалавра компьютерных наук Университета Теннесси в Ноксвилле
                                </p>

                                <hr>

                                <strong><i class="fas fa-map-marker-alt mr-1"></i> Местоположение</strong>

                                <p class="text-muted">Г. Москва, лерская, 49</p>

                                <hr>

                                <strong><i class="fas fa-pencil-alt mr-1"></i>Навыки</strong>

                                <p class="text-muted">
                                    <span class="tag tag-danger">UI Design</span>
                                    <span class="tag tag-success">Coding</span>
                                    <span class="tag tag-info">Javascript</span>
                                    <span class="tag tag-warning">PHP</span>
                                    <span class="tag tag-primary">Node.js</span>
                                </p>

                                <hr>

                                <strong><i class="far fa-file-alt mr-1"></i>Записи</strong>

                                <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam
                                    fermentum enim neque.</p>
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
                          03.02.2021
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
                                                        <a href="#" class="btn btn-primary btn-sm">Прочитать
                                                            требования</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- END timeline item -->
                                            <!-- timeline item -->
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
                                                                            <a style="cursor: pointer">Ссылка</a>
                                                                        </td>

                                                                    </tr>
                                                                    <tr>
                                                                        <td>2.</td>
                                                                        <td>Пенсионное страхование</td>
                                                                        <td>
                                                                            <a style="cursor: pointer">Ссылка</a>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>3.</td>
                                                                        <td>мед. полис</td>
                                                                        <td>
                                                                            <a style="cursor: pointer">Ссылка</a>
                                                                        </td>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                            <!-- /.card-body -->
                                                            <div class="card-footer clearfix">
                                                                <ul class="pagination pagination-sm m-0 float-right">
                                                                    <li class="page-item"><a class="page-link" href="#">«</a>
                                                                    </li>
                                                                    <li class="page-item"><a class="page-link" href="#">1</a>
                                                                    </li>
                                                                    <li class="page-item"><a class="page-link" href="#">2</a>
                                                                    </li>
                                                                    <li class="page-item"><a class="page-link" href="#">3</a>
                                                                    </li>
                                                                    <li class="page-item"><a class="page-link" href="#">»</a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- END timeline item -->
                                            <!-- timeline item -->

                                            <!-- END timeline item -->

                                            <!-- timeline time label -->
                                            <div class="time-label">
                        <span class="bg-danger">
                          04.01.2022
                        </span>
                                            </div>
                                            <!-- /.timeline-label -->
                                            <!-- timeline item -->
                                            <div>
                                                <i class="fas fa-user-minus bg-purple"></i>

                                                <div class="timeline-item">

                                                    <h3 class="timeline-header"><a href="#">Системная информация </a>
                                                        Уволен из организации</h3>
                                                    <div class="timeline-body">
                                                        <table class="table table-bordered">
                                                            <thead>
                                                            <tr>
                                                                <th style="width: 10px">#</th>
                                                                <th>Закрепленное оборудование</th>
                                                                <th>Позиция</th>
                                                            </tr>
                                                            </thead>
                                                            <tbody>
                                                            <tr>
                                                                <td>1.</td>
                                                                <td>PC 122234</td>
                                                                <td>
                                                                    <a>Сдал</a>
                                                                </td>

                                                            </tr>
                                                            <tr>
                                                                <td>2.</td>
                                                                <td>Клавиатуру 434</td>
                                                                <td>
                                                                    <a>Сдал</a>
                                                                </td>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- END timeline item -->
                                            <div>
                                                <i class="far fa-clock bg-gray"></i>

                                                <div class="timeline-item">

                                                    <h3 class="timeline-header"><a href="#">Системная информация </a>
                                                    </h3>
                                                    <div class="timeline-body">
                                                        <a href="#" class="btn btn-danger btn-sm">Удалить сотрудника из
                                                            БД</a>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <!-- /.tab-pane -->

                                    <div class="tab-pane" id="settings">
                                        <form class="form-horizontal">
                                            <div class="form-group row">
                                                <label for="inputName" class="col-sm-2 col-form-label">Имя</label>
                                                <div class="col-sm-10">
                                                    <input type="email" class="form-control" id="inputName"
                                                           placeholder="Имя">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="inputName1" class="col-sm-2 col-form-label">Фамилия</label>
                                                <div class="col-sm-10">
                                                    <input type="email" class="form-control" id="inputName1"
                                                           placeholder="Фамилия">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="inputName2" class="col-sm-2 col-form-label">Отчество</label>
                                                <div class="col-sm-10">
                                                    <input type="email" class="form-control" id="inputName2"
                                                           placeholder="Отчество">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                                                <div class="col-sm-10">
                                                    <input type="email" class="form-control" id="inputEmail"
                                                           placeholder="Email">
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label for="inputExperience"
                                                       class="col-sm-2 col-form-label">Навыки</label>
                                                <div class="col-sm-10">
                                                    <textarea class="form-control" id="inputExperience"
                                                              placeholder="Навыки"></textarea>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="inputExperience1" class="col-sm-2 col-form-label">Образование</label>
                                                <div class="col-sm-10">
                                                    <textarea class="form-control" id="inputExperience1"
                                                              placeholder="Образование"></textarea>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="inputExperience2"
                                                       class="col-sm-2 col-form-label">Записи</label>
                                                <div class="col-sm-10">
                                                    <textarea class="form-control" id="inputExperience2"
                                                              placeholder="Записи"></textarea>
                                                </div>
                                            </div>


                                            <div class="form-group row">
                                                <div class="offset-sm-2 col-sm-10">
                                                    <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox"> Я согласен с правилами и
                                                            условиями</a>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="offset-sm-2 col-sm-10">
                                                    <button type="submit" class="btn btn-danger">Изменить</button>
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
        <!-- /.content -->
    </div>
@endsection
