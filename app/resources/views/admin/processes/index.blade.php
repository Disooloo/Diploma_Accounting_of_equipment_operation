@extends('layouts.adm_layout')
@section('title', 'Процессы')

@section('content')

    <div class="content-wrapper">
        <div class="callout callout-info " .>
            <h5><i class="fas fa-info"></i> Подсказка:</h5>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut eum incidunt iste itaque maiores officia qui
            quibusdam quis rerum sapiente!
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
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Выберите должность</label>
                            <select class="form-control select2 select2-hidden-accessible" style="width: 100%;"
                                    data-select2-id="9" tabindex="-1" aria-hidden="true">
                                <option selected="selected" data-select2-id="11"></option>
                                <option>Дизайнер</option>
                                <option disabled="disabled">Художник (disabled)</option>
                                <option>Программист</option>
                                <option>Сис. Админ</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Поиск контактов</label>
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
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Фильтр по</label>
                            <select class="form-control select2 select2-hidden-accessible" style="width: 100%;"
                                    data-select2-id="9" tabindex="-1" aria-hidden="true">
                                <option selected="selected" data-select2-id="11"></option>
                                <option>Дате добавления</option>
                                <option>Номеру телефону</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-md-6">
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
                    <div class="col-12">
                        <input type="submit" value="Применить фильтр"
                               class="btn 						btn-success float-right">
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
                        <h1>Процессы</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Главная</a></li>
                            <li class="breadcrumb-item active">Процессы</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
        <!-- Main content -->

        <section class="content">
            <div class="container-fluid">
                <h5 class="mb-2">
                    <button class="btn btn-info">Добавить</button>
                </h5>
                <div class="row">
                    <div class="col-md-3 col-sm-6 col-12">
                        <div class="info-box">
                            <span class="info-box-icon bg-info"><i class="fas fa-calendar-times"></i></span>
                            <div class="info-box-content">
                                <span class="info-box-text" title="Договор о неразглошении">NDA</span>
                                <span class="info-box-number"> <a data-fancybox href="#openFormWord"
                                                                  style="cursor: pointer">Открыть</a> </span>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                        <!-- /.info-box -->
                    </div>
                    <!-- /.col -->

                </div>
                <!-- /.row -->
            </div>
        </section>

        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <div style="display: none; width: 800px; color: black" id="openFormWord" class="fancybox dark-mode">
        <form action="{{route('processesFile.nda_word')}}" method="post" >
            @csrf
            <div class="card card-info">
                <div class="card-header">
                    <h3 class="card-title">Заявление о неразглошении</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form class="form-horizontal">
                    <div class="card-body">
                        <label>Данные работодателя:</label>
                        <div class="form-group row">
                            <label for="inputGeneral_manager" class="col-sm-2 col-form-label">Генеральный
                                директор</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="inputGeneral_manager" name="general_manager"
                                       placeholder="ФИО генерального директора">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="inputCity" class="col-sm-2 col-form-label">Город</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="inputCity" name="city"
                                       placeholder="Город в котором находится компания">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword3" class="col-sm-2 col-form-label">Компания</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="inputPassword3" name="company"
                                       placeholder="ООО Название компании">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputDate" class="col-sm-2 col-form-label">Дата</label>
                            <div class="col-sm-10">
                                <input type="date" class="form-control" id="inputDate" name="date"
                                       placeholder="Дата заключение договора">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputCompany_adress" class="col-sm-2 col-form-label">Адрес компании</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="inputCompany_adress" name="company_adress"
                                       placeholder="Адрес компании">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputCompany_KPP" class="col-sm-2 col-form-label">КПП работодателя</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="inputCompany_KPP" name="company_KPP"
                                       placeholder="КПП работодателя">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputCompany_INN" class="col-sm-2 col-form-label">ИНН работодателя</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="inputCompany_INN" name="company_INN"
                                       placeholder="ИНН">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputCompany_chet" class="col-sm-2 col-form-label">Расчетный счет
                                работодателя</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="inputCompany_chet" name="company_chet"
                                       placeholder="р/счет №">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputCompany_bink" class="col-sm-2 col-form-label">БИК работодателя</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="inputCompany_bink" name="company_bink"
                                       placeholder="БИК">
                            </div>
                        </div>
                        <label>Данные сотрудника:</label>
                        <div class="form-group row">
                            <label for="inputWorker" class="col-sm-2 col-form-label">Работник</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="inputWorker" name="worker"
                                       placeholder=" ФИО Работника">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputWorker_pass" class="col-sm-2 col-form-label">Паспорт сотрудника</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="inputWorker_pass" name="worker_pass"
                                       placeholder="Паспорт сотрудника...">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputWorker_pass_time" class="col-sm-2 col-form-label">Дата выдачи
                                паспорта</label>
                            <div class="col-sm-10">
                                <input type="date" class="form-control" id="inputWorker_pass_time"
                                       name="worker_pass_time" placeholder="Паспорт выдан">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputWorker_pass_adress" class="col-sm-2 col-form-label">Адрес выдачи
                                паспорта</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="inputWorker_pass_adress"
                                       name="worker_pass_adress" placeholder="Адрес выдачи паспорта">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputWorker_adress" class="col-sm-2 col-form-label">Адрес сотрудника</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="inputWorker_adress" name="worker_adress"
                                       placeholder="Адрес сотрудника">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputWorker_straxjvka" class="col-sm-2 col-form-label">Страховка
                                сотрудника</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="inputWorker_straxjvka"
                                       name="worker_straxjvka" placeholder="Страховое свидетельство">
                            </div>
                        </div>
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                        <button type="submit" class="btn btn-info">Скачать</button>
                    </div>
                    <!-- /.card-footer -->
                </form>
            </div>
        </form>
    </div>

@endsection
