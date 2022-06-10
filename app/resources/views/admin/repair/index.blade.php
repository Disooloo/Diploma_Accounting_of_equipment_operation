@extends('layouts.adm_layout')
@section('title', 'Ремонты')

@section('content')

    <style>
        .dtHorizontalExampleWrapper {
            max-width: 600px;
            margin: 0 auto;
        }

        #dtHorizontalExample th, td {
            white-space: nowrap;
        }

        a {
            transition: all 500ms ease;
        }

        a:hover {
            border-bottom: 3px solid #fff;
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
    <style>
        .img_style {
            width: 50px;
            color: #fff;
        }

        .img_style:hover {
            color: #3F6791;
        }
    </style>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <div class="callout callout-info ">
            <h5><i class="fas fa-info"></i> Подсказка:</h5>
            У ремонтов, в логике системы, существует три стадии которые рекомендуется проходить последовательно: 1.
            Открытие ремонта для оборудования (ввод даты поломки и описание неисправности). 2. Отправка
            оборудования в ремонт (ввод даты отправки и выбор сервисной организации). 3. Возврат оборудования из
            ремонта/закрытие ремонта (ввод даты возврата и стоимости ремонта). В ремонт можно вносить
            конментарии, изображения и файлы.
        </div>

        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Ремонты</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route('home')}}">Главная</a></li>
                            <li class="breadcrumb-item active">Ремонты</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="card">
                <!-- Default box -->
                <div class="card-body">

                    <div class="card" style="position:relative;">
                        <div class="item m-3 d-flex ">
                            <p class="ml-4">В обработке: <span><b>{{$count_processing}}</b></span></p>
                            <p class="ml-4">Отказов: <span><b>{{$count_rejection}}</b></span></p>
                            <p class="ml-4">В ремонте: <span><b>{{$count_repair13}}</b></span></p>

                            <a href="#" style="right: 10px; top: 10px; position: absolute"
                               class="btn text-white active-38734">Выгрузить</a>
                        </div>

                    </div>
                    <div class="table-responsive">
                        <table id="example2"
                               class="table text-nowrap table-bordered table-hover "
                               aria-describedby="example2_info">
                            <thead>
                            <tr class="asd-a2344">
                                <th rowspan="1" colspan="1">Действие</th>
                                <th rowspan="1" colspan="1">id</th>
                                <th rowspan="1" colspan="1">Статус</th>
                                <th rowspan="1" colspan="1">Вид</th>
                                <th rowspan="1" colspan="1">Тип</th>
                                <th rowspan="1" colspan="1">Модель</th>
                                <th rowspan="1" colspan="1">Изображение</th>

                                <th rowspan="1" colspan="1">Дата отправки</th>
                                <th rowspan="1" colspan="1">Дата выхода из строя</th>
                                <th rowspan="1" colspan="1">Статус поломки</th>
                                <th rowspan="1" colspan="1">Описание поломки</th>
                                <th rowspan="1" colspan="1">Стоимость</th>
                                <th rowspan="1" colspan="1">Сервисная организация</th>
                                <th rowspan="1" colspan="1">Сотрудник создал</th>
                                <th rowspan="1" colspan="1">Сотрудник отправил</th>
                                <th rowspan="1" colspan="1">Сотрудник получил</th>
                            </tr>
                            </thead>
                            <tbody>

                            @forelse($models as $model)
                                @if($model->repairPosition < 4 && $model->repairPosition > 0)
                                    <tr class="odd">
                                        <td>
                                            <div class="col-md-4">
                                                <div class="col-md-2"
                                                     style="display: flex; height: 75px;">
                                                    <button wire:click="edit({{$model->id}})" class="btn btn-info"><i
                                                            class="fas fa-pen"></i>
                                                    </button>
                                                    <a href="{{route('model-object.edit', $model->id)}}" type="button"
                                                       class="btn btn-warning"
                                                       wire:click="repair({{$model->id}})"
                                                    >
                                                        <i class="fas fa-hammer"></i>
                                                    </a>

                                                    <form target="_myFrame"
                                                          style="width: 50px;"
                                                          action="{{route('processesFile.Cardinal')}}" method="post">
                                                        @csrf
                                                        @include('admin.model_object.Cardinal')

                                                        <button type="submit"
                                                                class="btn btn-secondary"><i
                                                                class="fas fa-id-card"></i>
                                                        </button>
                                                    </form>

                                                    <button wire:click="remove({{$model->id}})" class="btn btn-danger">
                                                        <i
                                                            class="fas fa-trash-alt "></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </td>
                                        <td>{{$model->id}}</td>
                                        <td>
                                            @if($model->repairPosition == 1)
                                                <p style="color: #b6b63a">Ремонт в обработке</p>
                                            @elseif($model->repairPosition == 2)
                                                <p style="color: #f12828">Сервисная компания отказалась в ремонте</p>
                                            @elseif($model->repairPosition == 3)
                                                <p style="color: #38a42e">Оборудование в ремонте</p>
                                            @endif
                                        </td>
                                        <td>{{$model->title_view}}</td>
                                        <td>{{$model->title_type}}</td>
                                        <td>{{$model->title_model}}</td>
                                        <td>
                                            <a href="{{$model->object_img}}">
                                                <img
                                                    src="{{$model->object_img}}"
                                                    width="150px"></a>
                                        </td>
                                        <td>{{$model->dateDispatch}}</td>
                                        <td>{{$model->dateBreakdown}}</td>
                                        <td>{{$model->statusRepair}}</td>
                                        <td>{{$model->noteRepair}}</td>
                                        <td>{{$model->sum}}
                                            <sum>₽</sum>
                                        </td>

                                        <td>{{$model->servesOrganization}}</td>
                                        <td>{{$model->teamCreate}}</td>
                                        <td>{{$model->teamSent}}</td>
                                        <td>{{$model->teamReceived}}</td>
                                    </tr>
                                @endif
                            @empty
                                <p class="m-3">Не найдено записей -> <a wire:click="addCard" class="njkj-2837643">
                                        добавить
                                        новую</a></p>
                                <style>
                                    .asd-a2344 {
                                        display: none;
                                    }

                                    .njkj-2837643 {
                                        cursor: pointer;
                                    }
                                </style>
                            @endforelse
                            </tbody>
                            <tfoot>
                            <tr class="asd-a2344">
                                <th rowspan="1" colspan="1">Действие</th>
                                <th rowspan="1" colspan="1">id</th>
                                <th rowspan="1" colspan="1">Статус</th>
                                <th rowspan="1" colspan="1">Вид</th>
                                <th rowspan="1" colspan="1">Тип</th>
                                <th rowspan="1" colspan="1">Модель</th>
                                <th rowspan="1" colspan="1">Изображение</th>

                                <th rowspan="1" colspan="1">Дата отправки</th>
                                <th rowspan="1" colspan="1">Дата выхода из строя</th>
                                <th rowspan="1" colspan="1">Статус поломки</th>
                                <th rowspan="1" colspan="1">Описание поломки</th>
                                <th rowspan="1" colspan="1">Стоимость</th>
                                <th rowspan="1" colspan="1">Сервисная организация</th>
                                <th rowspan="1" colspan="1">Сотрудник создал</th>
                                <th rowspan="1" colspan="1">Сотрудник отправил</th>
                                <th rowspan="1" colspan="1">Сотрудник получил</th>
                            </tr>
                            </tfoot>
                        </table>
                    </div>
                {{$models->links()}}
                <!--/.fancybox-->
                </div>
            </div>
            <!-- /.card-body -->
            <!-- /.card -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <script>
        $(document).ready(function () {
            $('#dtHorizontalExample').DataTable({
                "scrollX": true
            });
            $('.dataTables_length').addClass('bs-select');
        });
    </script>

@endsection
