@extends('layouts.adm_layout')
@section('title', 'Местоположение')

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
            Редактирование записи происходит по клику на id записи. Чтоб просмотреть местоположение, кликните по
            названию филиала.

        </div>
        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card card-primary card-outline">
                            <div class="card-header">

                                {{--                                <div class="col-12">--}}
                                {{--                                    <input type="submit" value="Добавить" class="btn 						btn-success float-right">--}}
                                {{--                                </div>--}}

                            </div>
                            <!-- /.card-header -->
                            <div class="card-body ">
                                <div class="table-responsive">
                                    <table id="tb_departments" class="table text-nowrap">
                                        <thead>
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
                                            <th>Место "Склад"</th>
                                            <th>Место "Ремонт"</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>
                                                <li class="visible">
                                                    <a tabindex="0" class="all btn text-white textBol"
                                                       data-coords="55.75089601550643,37.83907298046876"
                                                       data-id="1">0</a>
                                                </li>
                                            </td>
                                            <td><a style="cursor: pointer">Аналитический отдел </a></td>
                                            <td>Офис на тверской</td>
                                            <td>1.7</td>
                                            <td>1.7</td>
                                            <td>1.7</td>
                                            <td>1.7</td>
                                            <td>A</td>
                                            <td>A</td>
                                            <td> a</td>
                                            <td> a</td>
                                            <td> a</td>
                                            <td> a</td>
                                            <td><input type="checkbox" value="true"></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <li class="visible">
                                                    <a tabindex="0" class="all btn text-white"
                                                       data-coords="55.75089601550643,38.83907298046876"
                                                       data-id="2">1</a>
                                                </li>
                                            </td>
                                            <td><a style="cursor: pointer">Аналитический отдел </a></td>
                                            <td>Офис на тверской</td>
                                            <td>1.7</td>
                                            <td>1.7</td>
                                            <td>1.7</td>
                                            <td>1.7</td>
                                            <td>A</td>
                                            <td>A</td>
                                            <td> a</td>
                                            <td> a</td>
                                            <td> a</td>
                                            <td> a</td>
                                            <td><input type="checkbox" value="true"></td>
                                            <td><input type="checkbox" value="false"></td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td><a style="cursor: pointer">Аналитический отдел </a></td>
                                            <td>Офис на тверской</td>
                                            <td>1.7</td>
                                            <td>1.7</td>
                                            <td>1.7</td>
                                            <td>1.7</td>
                                            <td>A</td>
                                            <td>A</td>
                                            <td> a</td>
                                            <td> a</td>
                                            <td> a</td>
                                            <td> a</td>
                                            <td><input type="checkbox" value="true"></td>
                                            <td><input type="checkbox" checked></td>
                                        </tr>
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
                                            <th>Место "Склад"</th>
                                            <th>Место "Ремонт"</th>
                                        </tr>
                                        </tfoot>
                                    </table>
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


                <div id="map"></div>
                <script src="https://api-maps.yandex.ru/2.1/?apikey=ваш API-ключ&lang=ru_RU"></script>
                <script>
                    function init() {
                        let arr = [];

                        let myMap = new ymaps.Map("map", {
                            center: [55.76, 37.64],
                            zoom: 7
                        });

                        function markers() {

                            myMap.setCenter([55.76, 37.64], 7, {
                                checkZoomRange: true
                            });

                            myMap.geoObjects.removeAll()

                            arr = [];
                            let i = 0;

                            document.querySelectorAll('.btn').forEach((el) => {
                                let coords = el.getAttribute('data-coords');

                                let id = el.getAttribute('data-id');

                                let coordsArr = coords.split(',');

                                let result = coordsArr.map(function (x) {
                                    return Number(x);
                                });

                                arr.push('placemark' + i);
                                i++;

                                arr[i] = new ymaps.Placemark(result, {
                                    'id': id,
                                    // Зададим содержимое заголовка балуна.
                                    balloonContentHeader: '<a href = "#">Рога и копыта</a><br>' +
                                        '<span class="description">Сеть кинотеатров</span>',
                                    // Зададим содержимое основной части балуна.
                                    balloonContentBody: '<a href="tel:+7-123-456-78-90">+7 (123) 456-78-90</a><br/>' +
                                        '<b>Ближайшие сеансы</b> <br/> Сеансов нет.',
                                    // Зададим содержимое нижней части балуна.
                                    balloonContentFooter: 'Информация предоставлена:<br/>OOO "Рога и копыта"',
                                    // Зададим содержимое всплывающей подсказки.
                                    hintContent: 'Рога и копыта'
                                });

                                myMap.geoObjects.add(arr[i]);

                                delete arr[0];
                            });
                        }

                        markers();

                        myMap.events.add('boundschange', function () {
                            let res = ymaps.geoQuery(myMap.geoObjects)

                            let visibleObjects = res.searchInside(myMap).addToMap(myMap);

                            let visibleArray = visibleObjects._objects;

                            let $item = document.querySelectorAll('.btn');

                            $item.forEach((el) => {

                                el.closest('li').style.display = 'none';
                            });

                            for (let i = 0; i < visibleArray.length; i++) {
                                let id = visibleArray[i].properties._data.id;


                                document.querySelectorAll(`.btn[data-id="${id}"]`).forEach((el) => {
                                    el.closest('li').style.display = 'block';
                                });
                            }
                            if (!visibleArray.length) {

                            }

                        });
                    }

                    ymaps.ready(init);
                </script>
        </section>
        <!-- /.content -->
    </div>

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
