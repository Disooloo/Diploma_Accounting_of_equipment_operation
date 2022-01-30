@extends('layouts.adm_layout')
@section('title', 'филиалы')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>филиалы</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Главная</a></li>
                            <li class="breadcrumb-item active">филиалы</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
            <div class="callout callout-info ">
                <h5><i class="fas fa-info"></i> Подсказка:</h5>
                Таблица филиалов/подразделений в которых физически находится оборудование. Под филиалом понимается
                отдельный офис, здание, магазин или город. В одном филиале может находится оборудование разных
                компаний - поэтому жесткой привязки филиала к компании нет.
            </div>
        </section>
        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card card-primary card-outline">
                            <div class="card-header">

                                <div class="col-12">
                                    <a data-fancybox href="#addBranches"
                                       class="btn btn-success float-right">Добавить</a>
                                </div>

                            </div>
                            <!-- /.card-header -->
                            <div class="card-body ">
                                <div class="table-responsive">
                                    <table class="table table-bordered table-striped table-hover">
                                        <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Филиал</th>
                                            <th>Описание</th>
                                            <th>Телефон</th>
                                            <th>Email</th>
                                            <th>Сайт</th>
                                            <th>Контактное лицо</th>
                                            <th>Адрес</th>
                                            <th>Реквизиты</th>
                                            <th>Примечание</th>
                                            <th>Изображение</th>
                                            <th>Действия</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($branches as $branch)
                                            <tr>
                                                <td>{{$branch->id}}</td>
                                                <td><a style="cursor: pointer">{{$branch->Branches_name}} </a></td>
                                                <td>{{$branch->Description}}</td>
                                                <td><a href="tel:{{$branch->Phone}}">{{$branch->Phone}}</a></td>
                                                <td>{{$branch->Email}}</td>
                                                <td><a href="{{$branch->link_site}}">Перейти</a></td>
                                                <td>{{$branch->Contact_person}}</td>
                                                <td>{{$branch->Adress}}   </td>
                                                <td><a data-fancybox href="#Requisites"><i class="fas fa-file-alt"></i></a>
                                                </td>
                                                <td><a data-fancybox href="#Note"><i class="fas fa-file-alt"></i></a>
                                                </td>
                                                <td><a data-fancybox href="#img"><i class="fas fa-images"></i></a></td>

                                                <div style="display: none; width: 500px;" id="Requisites"
                                                     class="fancybox dark-mode">
                                                    <h1>Реквизиты</h1>
                                                    <div class="dropdown-divider"></div>
                                                    <h2> {{$branch->Requisites}}</h2>
                                                </div>
                                                <div style="display: none;  width: 500px;" id="Note"
                                                     class="fancybox dark-mode">
                                                    <h1>Примечание</h1>
                                                    <div class="dropdown-divider"></div>
                                                    <h2>{{$branch->Note}}</h2>
                                                </div>
                                                <div style="display: none; width: 500px;" id="img"
                                                     class="fancybox dark-mode">
                                                    <img src="{{$branch->img}}" alt="img company" height="100%"
                                                         width="100%">
                                                </div>
                                                <td>
                                                    <a href="{{route('branches.edit', $branch->id )}}" class="btn btn-success mb-3"><i class="fas fa-pen "></i></a>
                                                    <form action="{{route('branches.destroy', $branch->id)}}"
                                                          method="POST">
                                                        @csrf
                                                        @method("DELETE")
                                                        <button type="submit" class="btn btn-danger"><i
                                                                class="fas fa-trash-alt"></i></button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                        <tfoot>
                                        <tr>
                                            <th>Id</th>
                                            <th>Филиал</th>
                                            <th>Описание</th>
                                            <th>Телефон</th>
                                            <th>Email</th>
                                            <th>Сайт</th>
                                            <th>Контактное лицо</th>
                                            <th>Адрес</th>
                                            <th>Реквизиты</th>
                                            <th>Примечание</th>
                                            <th>Изображение</th>
                                            <th>Действия</th>
                                        </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <div style="display: none; width: 900px;" id="addBranches" class="fancybox dark-mode">
        <form class="form-horizontal" action="{{route('branches.store')}}" method="post">
            @csrf
            <div class="card-body">
                <label>Добавление компании:</label>
                <div class="form-group row">
                    <label for="Branches_name" class="col-sm-2 col-form-label">Название филиала</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="Branches_name" name="Branches_name"
                               placeholder="Офис на тверской">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="Description" class="col-sm-2 col-form-label">Описание</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="Description" name="Description"
                               placeholder="Что за компания ?">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="Adress" class="col-sm-2 col-form-label">Адрес</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="Adress" name="Adress"
                               placeholder="Местоположение компании">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="link_site" class="col-sm-2 col-form-label">Ссылка на сайт</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control Dismissed_team_data" id="link_site" name="link_site"
                               placeholder="WWW.site.com">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="Phone" class="col-sm-2 col-form-label">Телефон</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control" id="Phone" name="Phone"
                               placeholder="79999999999">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="Email" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control" id="Email" name="Email"
                               placeholder="Email">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="Contact_person" class="col-sm-2 col-form-label">Представитель компании</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="Contact_person" name="Contact_person"
                               placeholder="Иванов Иван Ивановоч">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="Requisites" class="col-sm-2 col-form-label">Реквизиты</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="Requisites" name="Requisites"
                               placeholder="Реквезиты компании">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="Note" class="col-sm-2 col-form-label">Примечание</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="Note" name="Note"
                               placeholder="Предоставляет хорошие видокорты...">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="img" class="col-sm-2 col-form-label">Изображение</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="img"
                               name="img" placeholder="Не обязательно">
                    </div>
                </div>
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
                <button type="submit" class="btn btn-info">Отправить</button>
            </div>
            <!-- /.card-footer -->
        </form>
    </div>

@endsection
