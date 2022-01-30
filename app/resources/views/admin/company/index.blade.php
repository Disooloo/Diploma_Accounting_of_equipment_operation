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
                Компания указывается в документах и платежах, позволяя тем самым, разделить документы и платежи по
                разным юридическим лицам. Реквизиты компании и логотип используются в печатных формах. Если
                компания только одна, то желательно прописать её параметры в строке с ID = 1 так как компания с этим ID
                везде указана как компания по умолчанию.
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
                                    <a data-fancybox href="#addCompany"
                                       class="btn btn-success float-right">Добавить</a>

                                    <a href="#"
                                       class="btn btn-warning float-right mr-3">Выгрузить</a>

                                </div>

                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table style="max-width: 50%;"
                                           class="table table-bordered table-striped table-hover">
                                        <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Название компании</th>
                                            <th>Описание</th>
                                            <th>Адрес</th>
                                            <th>Сайт</th>
                                            <th>Email</th>
                                            <th>Контактное лицо</th>
                                            <th>Реквизиты</th>
                                            <th>Примечание</th>
                                            <th>Изображение</th>
                                            <th>Действие</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($company as $comp)
                                            <tr>
                                                <td>{{$comp->id}}</td>
                                                <td><a href="{{route('company.edit', $comp->id )}}"
                                                       style="cursor: pointer">{{$comp->Company_name}} </a></td>
                                                <td>{{$comp->Description}}</td>
                                                <td>{{$comp->company_adress}}</td>
                                                <td><a href="{{$comp->link_site}}">Перейти</a></td>
                                                <td>{{$comp->Email}}</td>
                                                <td>{{$comp->Contact_person}}</td>
                                                <td><a data-fancybox href="#Requisites"><i class="fas fa-file-alt"></i></a>
                                                </td>
                                                <td><a data-fancybox href="#Note"><i class="fas fa-file-alt"></i></a>
                                                </td>
                                                <td><a data-fancybox href="#img"><i class="fas fa-images"></i></a></td>
                                                <td>
                                                    <a href="{{route('company.edit', $comp->id)}}"
                                                       class="btn btn-success mb-3"><i class="fas fa-pen "></i></a>

                                                    <form action="{{route('company.destroy', $comp->id )}}"
                                                          method="POST">
                                                        @csrf
                                                        @method("DELETE")
                                                        {{--                                                        <button type="submit" class="btn btn-danger"><i class="fas fa-trash-alt danger"></i></button>--}}
                                                        <button type="submit" class="btn btn-danger"><i
                                                                class="fas fa-trash-alt"></i></button>
                                                    </form>

                                                </td>
                                            </tr>
                                            <div style="display: none; width: 500px;" id="Requisites"
                                                 class="fancybox dark-mode">
                                                <h1>Реквизиты</h1>
                                                <div class="dropdown-divider"></div>
                                                <h2> {{$comp->Requisites}}</h2>
                                            </div>
                                            <div style="display: none;  width: 500px;" id="Note"
                                                 class="fancybox dark-mode">
                                                <h1>Примечание</h1>
                                                <div class="dropdown-divider"></div>
                                                <h2>{{$comp->Note}}</h2>
                                            </div>
                                            <div style="display: none; width: 500px;" id="img"
                                                 class="fancybox dark-mode">
                                                <img src="{{$comp->img}}" alt="img company" height="100%" width="100%">
                                            </div>
                                        @endforeach
                                        </tbody>
                                        <tfoot>
                                        <tr>
                                            <th>Id</th>
                                            <th>Название компании</th>
                                            <th>Описание</th>
                                            <th>Адрес</th>
                                            <th>Сайт</th>
                                            <th>Email</th>
                                            <th>Контактное лицо</th>
                                            <th>Реквизиты</th>
                                            <th>Примечание</th>
                                            <th>Изображение</th>
                                            <th>Действие</th>
                                        </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        {{$company->links()}}

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
    <div style="display: none; width: 900px;" id="addCompany" class="fancybox dark-mode">
        <form class="form-horizontal" action="{{route('company.store')}}" method="post">
            @csrf
            <div class="card-body">
                <label>Добавление компании:</label>
                <div class="form-group row">
                    <label for="Company_name" class="col-sm-2 col-form-label">Название компании</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="Company_name" name="Company_name"
                               placeholder="ООО название компании">
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
                    <label for="company_adress" class="col-sm-2 col-form-label">Адрес компании</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="company_adress" name="company_adress"
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
