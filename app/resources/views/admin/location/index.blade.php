@extends('layouts.adm_layout')
@section('title', 'Местоположение')


@section('custom_css')
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
@endsection
@section('content')



    <div class="content-wrapper">


        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Местоположение</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Главная</a></li>
                            <li class="breadcrumb-item active">Местоположение</li>
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

                            <!-- /.card-header -->
                            <div class="card-body ">
                                <div class="card-header">
                                    <a href="{{route('location.create')}}" class="mr-5">Привязать</a>
                                    <a href="{{route('export_location')}}">Выгрузить</a>

                                </div>
                                <div class="table-responsive">
                                    <table id="tb_departments"
                                           class="table text-nowrap table-bordered table-hover dataTable dtr-inline">
                                        <thead>
                                        <tr>
                                            <th>id</th>
                                            <th>Местоположение</th>
                                            <th>Привязка к филиалу</th>
                                            <th>Описание</th>
                                            <th>Бух номер местоположения</th>
                                            <th>Телефон</th>
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
                                        @foreach($location  as $local)

                                            <tr>
                                                <td>
                                                    <li class="visible">
                                                        <a tabindex="{{$local->id}}" class="all btn text-white textBol"
                                                           data-coords="{{$local->Cordinates}}"
                                                           data-id="{{$local->id}}">{{$local->id}}</a>
                                                    </li>
                                                </td>
                                                <td><a style="cursor: pointer">{{$local->local}}</a></td>
                                                <td>
                                                    {{$local->id_branches}}
                                                </td>
                                                <td>{{$local->Description}}</td>
                                                <td>{{$local->Accountant_code}}</td>
                                                <td>{{$local->phone}}</td>
                                                <td>{{$local->Adress}}</td>
                                                <td><a href="{{$local->Site}}">Перейти</a></td>
                                                <td>{{$local->Email}}</td>
                                                <td> {{$local->Contact_person}}</td>
                                                <td><a data-fancybox href="#Requisites"><i class="fas fa-file-alt"></i></a>
                                                </td>
                                                <td><a data-fancybox href="#Note"><i class="fas fa-file-alt"></i></a>
                                                </td>
                                                <td><a data-fancybox href="#img"><i class="fas fa-images"></i></a></td>

                                                <div style="display: none; width: 500px;" id="Requisites"
                                                     class="fancybox dark-mode">
                                                    <h1>Реквизиты</h1>
                                                    <div class="dropdown-divider"></div>
                                                    <h2> {{$local->Requisites}}</h2>
                                                </div>
                                                <div style="display: none;  width: 500px;" id="Note"
                                                     class="fancybox dark-mode">
                                                    <h1>Примечание</h1>
                                                    <div class="dropdown-divider"></div>
                                                    <h2>{{$local->Note}}</h2>
                                                </div>
                                                <div style="display: none; width: 500px;" id="img"
                                                     class="fancybox dark-mode">
                                                    <img src="{{$local->img}}" alt="img company" height="100%"
                                                         width="100%">
                                                </div>
                                                <td>
                                                    <a href="{{route('location.edit', $local->id )}}" class="btn btn-success mb-3"><i class="fas fa-pen "></i></a>
                                                    <form action="{{route('location.destroy', $local->id)}}"
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
                                            <th>Местоположение</th>
                                            <th>Привязка к филиалу</th>
                                            <th>Описание</th>
                                            <th>Бух номер местоположения</th>
                                            <th>Телефон</th>
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
                                <div class="paginate mt-3 mb-3">
                                    {{$location->links()}}
                                </div>
                                <div id="map"></div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->

                </div>


        </section>
        <!-- /.content -->
    </div>
@section('custom_js')


    <script src="https://api-maps.yandex.ru/2.1/?apikey=ваш API-ключ&lang=ru_RU"></script>

    <script>
        <script src="https://api-maps.yandex.ru/2.1/?lang=ru-RU" type="text/javascript"></script>
    <!-- /.container-fluid -->
    <script type="text/javascript">

        ymaps.ready(init);

        function init() {
            var myMap = new ymaps.Map("map", {
                center: [56.11281, 56.11281],
                zoom: 16,
            }, {
                searchControlProvider: 'yandex#search'
            });

            var myCollection = new ymaps.GeoObjectCollection();

            <?php foreach ($location as $local): ?>
            var myPlacemark = new ymaps.Placemark([
                <?php echo $local['Cordinates']; ?>
            ], {
                balloonContentHeader: 'Локация: <a href = "#"><?=$local['local']; ?></a><br>' + 'Филиал: <a href = "#"><?=$local['id_branches']; ?></a><br>' +
                    '<span class="description"><?=$local['Email']; ?></span>',
                balloonContentBody: '<a href="tel:+<?=$local['phone'];?>">+<?=$local['phone'];?></a><br/>' +
                    '<img src="<?=$local['img'];?>" width="150px"> <br/> <a href="<?=$local['Site'];?>">Перейти на сайт</a>',
                {{--balloonContentFooter: <?php echo $local['Description'];?>,--}}

            }, {
                preset: 'islands#nightDotIcon',
                iconColor: '#0000ff'
            });
            myCollection.add(myPlacemark);
            <?php endforeach; ?>

            myMap.geoObjects.add(myCollection);

            // Сделаем у карты автомасштаб чтобы были видны все метки.
            myMap.setBounds(myCollection.getBounds(), {checkZoomRange: true, zoomMargin: 9});
        }
    </script>

    <script>
        $('#editID').click(function () {
            alert('Редактирование записи');
        });
        $(document).ready(function () {
            $('#dtHorizontalExample').DataTable({
                "scrollX": true
            });
            $('.dataTables_length').addClass('bs-select');
        });


    </script>
@endsection
@endsection
