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
               Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt, totam.
            </div>
        </section>
        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card card-primary card-outline">
                            <form class="form-horizontal" action="{{route('company.update', $company['id'])}}" method="post">
                                @csrf
                                @method("PUT")
                                <div class="card-body">
                                    <label>Редактирование компании:</label>
                                    <div class="dropdown-divider"></div>
                                    <div class="form-group row">
                                        <label for="Company_name" class="col-sm-2 col-form-label">Название компании</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="Company_name" name="Company_name"
                                                   placeholder="ООО название компании" value="{{$company['Company_name']}}">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="Description" class="col-sm-2 col-form-label">Описание</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="Description" name="Description"
                                                   placeholder="Что за компания ?" value="{{$company['Description']}}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="company_adress" class="col-sm-2 col-form-label">Адрес компании</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="company_adress" name="company_adress"
                                                   placeholder="Местоположение компании" value="{{$company['company_adress']}}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="link_site" class="col-sm-2 col-form-label">Ссылка на сайт</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control Dismissed_team_data" id="link_site" name="link_site"
                                                   placeholder="WWW.site.com" value="{{$company['link_site']}}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="Email" class="col-sm-2 col-form-label">Email</label>
                                        <div class="col-sm-10">
                                            <input type="email" class="form-control" id="Email" name="Email"
                                                   placeholder="Email" value="{{$company['Email']}}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="Contact_person" class="col-sm-2 col-form-label">Представитель компании</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="Contact_person" name="Contact_person"
                                                   placeholder="Иванов Иван Ивановоч" value="{{$company['Contact_person']}}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="Requisites" class="col-sm-2 col-form-label">Реквизиты</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="Requisites" name="Requisites"
                                                   placeholder="Реквезиты компании" value="{{$company['Requisites']}}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="Note" class="col-sm-2 col-form-label">Примечание</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="Note" name="Note"
                                                   placeholder="Предоставляет хорошие видокорты..." value="{{$company['Note']}}">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="img" class="col-sm-2 col-form-label">Изображение</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="img"
                                                   name="img" placeholder="Не обязательно" value="{{$company['img']}}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <img src="{{$company['img']}}" width="250px" >
                                    </div>

                                </div>
                                <!-- /.card-body -->
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-info">Отправить</button>

                                </div>
                                <!-- /.card-footer -->
                            </form>
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







@endsection
