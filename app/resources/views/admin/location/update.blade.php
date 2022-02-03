@extends('layouts.adm_layout')
@section('title', 'Редактирование местоположения')

@section('content')
    <style>
        .dtHorizontalExampleWrapper {
            max-width: 600px;
            margin: 0 auto;
        }

        #dtHorizontalExample th, td {
            white-space: nowrap;
        }

        table.dataTable thead .sorting:after,
        table.dataTable thead .sorting:before,
        table.dataTable thead .sorting_asc:after,
        table.dataTable thead .sorting_asc:before,
        table.dataTable thead .sorting_asc_disabled:after,
        table.dataTable thead .sorting_asc_disabled:before,
        table.dataTable thead .sorting_desc:after,
        table.dataTable thead .sorting_desc:before,
        table.dataTable thead .sorting_desc_disabled:after,
        table.dataTable thead .sorting_desc_disabled:before {
            bottom: .5em;
        }

        li {
            list-style: none;

        }

        #map {
            width: 100%;
            height: 500px;
        }
    </style>

    <div class="content-wrapper">


        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Привязка к филиалу</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Главная</a></li>
                            <li class="breadcrumb-item active">Привязка</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
        <div class="callout callout-info ">
            <h5><i class="fas fa-info"></i> Подсказка:</h5>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam culpa eligendi labore porro quasi
            repellendus sed sit sunt ullam unde.

        </div>


        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card card-primary card-outline">

                            <form id="formCreateLocal" action="{{route('location.update', $location['id'] )}}"
                                  method="post">
                                @csrf
                                @method("PUT")
                                <div class="m-4">
                                    <div class="card card-info">
                                        <div class="card-header">
                                            <h3 class="card-title">Заполните все поля</h3>
                                        </div>

                                        <div class="card-body">
                                            <!-- local -->
                                            <div class="form-group">
                                                <label>Локация:</label>

                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i
                                                                class="fas fa-search-location"></i></span>
                                                    </div>
                                                    <input type="text" class="form-control"
                                                           placeholder="Локация (Каб. директора)" name="local" value="{{$location['local']}}">
                                                </div>
                                                <!-- /.input group -->
                                            </div>
                                            <!-- /.form group -->

                                            <!-- branch -->
                                            <div class="form-group">
                                                <div class="form-group">
                                                    <label>Филиал</label>
                                                    <select name="id_branches"
                                                            class="form-control select2bs4 select2-hidden-accessible"
                                                            style="width: 100%;" data-select2-id="17" tabindex="-1"
                                                            aria-hidden="true">
                                                        @foreach($branches as $branch)
                                                            <option
                                                                value="{{$branch->Branches_name}}">{{$branch->Branches_name}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <!-- /.form group -->

                                            <!-- Description -->
                                            <div class="form-group">
                                                <label>Описание</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i
                                                                class="fas fa-clipboard-list"></i></span>
                                                    </div>
                                                    <input type="text" class="form-control" placeholder="Описание"
                                                           name="Description" value="{{$location['Description']}}">
                                                </div>
                                                <!-- /.input group -->
                                            </div>
                                            <!-- /.form group -->

                                            {{-- Accountant_code--}}
                                            <div class="form-group">
                                                <label>Бух номер</label>

                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i
                                                                class="fas fa-sort-numeric-up-alt"></i></span>
                                                    </div>
                                                    <input type="number" class="form-control"
                                                           placeholder="Бух. номер (214)" name="Accountant_code" value="{{$location['Accountant_code']}}">
                                                </div>
                                                <!-- /.input group -->
                                            </div>
                                            <!-- /.form group -->

                                            <!-- phone  -->
                                            <div class="form-group">
                                                <label>phone</label>

                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i
                                                                class="fas fa-phone"></i></span>
                                                    </div>
                                                    <input type="number" class="form-control" placeholder="79999999999"
                                                           name="phone" value="{{$location['phone']}}">
                                                </div>
                                                <!-- /.input group -->
                                            </div>
                                            <!-- /.form group -->

                                            <!-- Adress  -->
                                            <div class="form-group">
                                                <label>Адрес</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i
                                                                class="fas fa-map-marker-alt"></i></span>
                                                    </div>
                                                    <input type="text" class="form-control"
                                                           placeholder="Г.москва, улица, дом..." name="Adress" value="{{$location['Adress']}}">
                                                </div>
                                                <!-- /.input group -->
                                            </div>
                                            <!-- /.form group -->

                                            {{-- Cordinates--}}
                                            <div class="form-group">
                                                <label>Координаты</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i
                                                                class="fas fa-map-marker-alt"></i></span>
                                                    </div>
                                                    <input type="text" class="form-control"
                                                           placeholder="56.125281, 69.441993" name="Cordinates" value="{{$location['Cordinates']}}">
                                                </div>
                                                <a data-fancybox href="#findCoordination">Получить координаты</a>
                                            </div>

                                            <!-- Site -->
                                            <div class="form-group">
                                                <label>Сайт</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">
                                                            <i class="fas fa-sitemap"></i></span>
                                                    </div>
                                                    <input type="text" class="form-control" placeholder="www.site.com"
                                                           name="Site" value="{{$location['Site']}}">
                                                </div>
                                                <!-- /.input group -->
                                            </div>
                                            <!-- /.form group -->

                                            <!-- Email -->
                                            <div class="form-group">
                                                <label>Email</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i
                                                                class="fas fa-envelope"></i></span>
                                                    </div>
                                                    <input type="email" class="form-control" placeholder="test@mail.ru"
                                                           name="Email" value="{{$location['Email']}}">
                                                </div>
                                                <!-- /.input group -->
                                            </div>
                                            <!-- /.form group -->

                                            <!-- Contact_person -->
                                            <div class="form-group">
                                                <label>Контактное лицо</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="fas fa-user-check"></i></span>
                                                    </div>
                                                    <input type="text" class="form-control" placeholder="Иванов И.В"
                                                           name="Contact_person" value="{{$location['Contact_person']}}">
                                                </div>
                                                <!-- /.input group -->
                                            </div>
                                            <!-- /.form group -->

                                            <!-- Requisites -->
                                            <div class="form-group">
                                                <label>Реквизиты</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i
                                                                class="fas fa-credit-card"></i></span>
                                                    </div>
                                                    <input type="text" class="form-control"
                                                           placeholder="4000 99230 02223 222332" name="Requisites" value="{{$location['Requisites']}}">
                                                </div>
                                                <!-- /.input group -->
                                            </div>
                                            <!-- /.form group -->

                                            <!-- Note -->
                                            <div class="form-group">
                                                <label>Примечание</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="far fa-clipboard"></i></span>
                                                    </div>
                                                    <input type="text" class="form-control" placeholder="Примечание"
                                                           name="Note" value="{{$location['Note']}}">
                                                </div>
                                                <!-- /.input group -->
                                            </div>
                                            <!-- /.form group -->

                                            <!-- img -->
                                            <div class="form-group">
                                                <label>Изображение</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i
                                                                class="fas fa-image"></i></span>
                                                    </div>
                                                    <input type="text" class="form-control"
                                                           placeholder="https://www.stratecent.com/Images/client_mini.jpg"
                                                           value="{{$location['img']}}"
                                                           name="img">
                                                </div>
                                                <img src="{{$location['img']}}" width="250px" alt="">
                                                <!-- /.input group -->
                                            </div>
                                            <!-- /.form group -->

                                        </div>
                                        <!-- /.card-body -->
                                    </div>
                                    <!-- /.card -->


                                </div>
                                <input type="submit" class="btn btn-success m-3" value="Отправиить">
                            </form>
                            <a href="{{route('location.index')}}" class="btn btn-info">Вернуться</a>
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->

                </div>


        </section>
        <!-- /.content -->
    </div>

    <div style="display: none; width: 900px" id="findCoordination" class="fancybox dark-mode">
        <section>
            <div id="accordion">
                <div class="card card-primary">
                    <div class="card-header">
                        <h4 class="card-title w-100">
                            <a class="d-block w-100 collapsed" data-toggle="collapse" href="#collapseOne"
                               aria-expanded="false">
                                Как получить координаты
                            </a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <ol>

                            <li>1. <a href="https://yandex.ru/maps/11173/ishim/?ll=69.483768%2C56.111112&z=12.8"
                                      target="blank">Перейти на сайт</a></li>
                            <li><img src="{{asset('dist/img/credit/map1.png')}}" alt=""></li>
                            <li>2. Найти место которое вы хотите добавить</li>
                            <li>3. ПКМ -> Что здесь ? -> В левом углу появятся координаты местав</li>
                            <li><img src="{{asset('dist/img/map2.png')}}" alt=""></li>
                            <li>4. Встовляем в строку координаты.</li>
                            <li>5. Продлолжаем заполнение.</li>
                        </ol>
                    </div>

                </div>
            </div>
        </section>
    </div>

@section('custom_js')

@endsection
@endsection
