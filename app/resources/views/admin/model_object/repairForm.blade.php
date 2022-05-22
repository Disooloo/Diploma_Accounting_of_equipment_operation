@extends('layouts.adm_layout')
@section('title')
    {{$modelObject['title_type']}} {{$modelObject['title_model']}}
@endsection

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <div class="callout callout-info ">
            <h5><i class="fas fa-info"></i> Подсказка:</h5>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci, aliquam, aliquid beatae commodi consectetur cumque dicta dolores earum est et excepturi facilis harum id ipsa ipsum nemo nesciunt praesentium tempore!
        </div>
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Обработка в ремонт | #{{$modelObject['id']}} {{$modelObject['title_type']}} {{$modelObject['title_model']}} </h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Главная</a></li>
                            <li class="breadcrumb-item active">Отправка в ремонт</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <!-- left column -->
                    <div class="col-md-12">
                        <!-- jquery validation -->
                        <div class="card card-primary">
                            <div class="card-header">
                                <h2 class="card-title">Отправить <b> #{{$modelObject['id']}} {{$modelObject['title_type']}} {{$modelObject['title_model']}}</b>
                                    на ремонт </h2>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->

                            <form action="{{route('model-object.update', $modelObject['id'])}}" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="card-body">
                                    <div class="form-group">
                                        <label>Кто создал</label>
                                        <input value="{{\Illuminate\Support\Facades\Auth::user()->name}}" disabled
                                               type="text"
                                               name="teamSent" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Дата поломки</label>
                                        <input type="date" value="{{date('Y-m-d')}}" name="dateBreakdown"
                                               class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Дата отправки</label>
                                        <input type="date" value="{{date('Y-m-d')}}" name="dateDispatch"
                                               class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Что неисправно ?</label>
                                        <input type="text" value="{{$modelObject['statusRepair']}}" name="statusRepair"
                                               class="form-control"
                                               placeholder="Не включается монитор на ноутбуке">
                                    </div>
                                    <div class="form-group">
                                        <label>Что стоит знать перед ремонтом ?</label>
                                        <input type="text" value="{{$modelObject['statusRepair']}}" name="statusRepair"
                                               class="form-control"
                                               placeholder="У ноутбук приятная клавиатура, не нужно ее чинить ">
                                    </div>
                                    <div class="form-group">
                                        <label>Стоимость ремонта</label>
                                        <input type="number" value="{{$modelObject['sum']}}" name="sum"
                                               class="form-control"
                                               placeholder="Если уже известна стоимость. ">
                                    </div>
                                    <div class="form-group">
                                        <label>Сервисная организация</label>
                                        <select name="service_organization"
                                                class="form-control select2bs4 select2-hidden-accessible"
                                                style="width: 100%;">
                                            <option value="service_organization"></option>
                                            <option>Сами чиним</option>
                                            @foreach($oganizations as $oganization)
                                                <option
                                                    value="#{{$oganization->id}} {{$oganization->title}}"
                                                >#{{$oganization->id}} {{$oganization->title}}</option>
                                            @endforeach
                                        </select>
                                        <a href="{{route('organizations')}}" target="_blank">Нет нужной организации</a>
                                        <!-- /.input group -->
                                    </div>
                                </div>
                                <!-- /.card-body -->
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-success">Отправить</button>
                                    <a href="{{route('model-object.index')}}" class="btn btn-warning">Назад</a>
                                </div>
                            </form>
                        </div>
                        <!-- /.card -->
                    </div>
                    <!--/.col (left) -->
                    <!-- right column -->
                    <div class="col-md-6">

                    </div>
                    <!--/.col (right) -->
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>

    </div>
    <!-- /.content-wrapper -->
@endsection

