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

<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card card-primary card-outline">
                    <div class="card-header">

                        <div class="col-12">
                            <a data-fancybox href="#addOrg"
                               class="btn btn-success float-right">Добавить</a>
                        </div>

                    </div>
                    <!-- /.card-header -->
                    <div class="card-body ">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Название организации</th>
                                    <th>Описание</th>
                                    <th>Email</th>
                                    <th>Телефон</th>
                                    <th>Сайт</th>
                                    <th>Контактное лицо</th>
                                    <th>Адрес</th>
                                    <th>Примечание</th>
                                    <th>Реквизиты</th>
                                    <th>Изображение</th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($orgns as $orgn)
                                    <tr>
                                        <td>{{$orgn->id}}</td>
                                        <td><a style="cursor: pointer">{{$orgn->title}}</a></td>
                                        <td>{{$orgn->description}}</td>
                                        <td>{{$orgn->email}}</td>
                                        <td><a href="tel//{{$orgn->phone}}"></a> {{$orgn->phone}}</td>
                                        <td>{{$orgn->site}}</td>
                                        <td>{{$orgn->contact_person}}</td>
                                        <td>{{$orgn->address}}</td>
                                        <td>
                                            <a data-fancybox href="#Note"><i class="fas fa-file-alt"></i></a>
                                        </td>
                                        <td>
                                            <a data-fancybox href="#Requisites"><i class="fas fa-file-alt"></i></a>
                                        </td>
                                        <td>
                                            <a data-fancybox href="#img"><i class="fas fa-images"></i></a>
                                        </td>


                                        <td>
                                            <a data-fancybox href="#updateOrg" wire:click="edit({{$orgn->id}})"
                                               class="btn btn-info"><i
                                                    class="fas fa-pen "></i></a>

                                            <a wire:click="remove({{$orgn->id}})" type="submit"
                                               class="btn btn-danger"><i
                                                    class="fas fa-trash-alt"></i></a>

                                        </td>
                                    </tr>

                                    <div style="display: none; width: 500px;" id="Requisites"
                                         class="fancybox dark-mode">
                                        <h1>Реквизиты</h1>
                                        <div class="dropdown-divider"></div>
                                        <h2> {{$orgn->requisites}}</h2>
                                        <input type="text" value="{{$orgn->requisites}}" class="input-group mt-2"
                                               style="color: #000">
                                    </div>
                                    <div style="display: none;  width: 500px;" id="Note"
                                         class="fancybox dark-mode">
                                        <h1>Примечание</h1>
                                        <div class="dropdown-divider"></div>
                                        <h2>{{$orgn->note}}</h2>
                                    </div>
                                    <div style="display: none; width: 500px;" id="img"
                                         class="fancybox dark-mode">
                                        <img src="{{$orgn->img}}" alt="img company" height="100%"
                                             width="100%">
                                    </div>
                                @endforeach
                                </tbody>
                                <tfoot>
                                <tr>
                                    <th>Id</th>
                                    <th>Название организации</th>
                                    <th>Описание</th>
                                    <th>Email</th>
                                    <th>Телефон</th>
                                    <th>Сайт</th>
                                    <th>Контактное лицо</th>
                                    <th>Адрес</th>
                                    <th>Примечание</th>
                                    <th>Реквизиты</th>
                                    <th>Изображение</th>
                                    <th></th>
                                </tr>
                                </tfoot>
                            </table>
                        </div>
                        <div class="paginate mt-3 mb-3">
                            {{$orgns->links()}}
                        </div>
                        <div id="map"></div>
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
<div style="display: none; width: 900px;" id="updateOrg" class="fancybox dark-mode">
    <form wire:submit.prevent="update">
        <div class="card-body">
            <label>Редактирование компании:</label>
            <div class="form-group row">
                <label for="title" class="col-sm-2 col-form-label">Название компании</label>
                <div class="col-sm-10">
                    <input wire:model="title" type="text" class="form-control" id="title"
                           placeholder="ООО рога и копыта">
                    <span class="text-danger">
                        @error('title')
                        {{$message}}
                        @enderror
                    </span>
                </div>
            </div>

            <div class="form-group row">
                <label for="Description" class="col-sm-2 col-form-label">Описание</label>
                <div class="col-sm-10">
                    <input wire:model="description" type="text" class="form-control" id="Description"
                           placeholder="Что за компания ?">
                    <span class="text-danger">
                        @error('description')
                        {{$message}}
                        @enderror
                    </span>
                </div>
            </div>
            <div class="form-group row">
                <label for="Email" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                    <input wire:model="email" type="email" class="form-control" id="Email"
                           placeholder="Email">
                    <span class="text-danger">
                        @error('email')
                        {{$message}}
                        @enderror
                    </span>
                </div>
            </div>
            <div class="form-group row">
                <label for="Phone" class="col-sm-2 col-form-label">Телефон</label>
                <div class="col-sm-10">
                    <input wire:model="phone" type="number" class="form-control" id="Phone"
                           placeholder="79999999999">
                    <span class="text-danger">
                        @error('phone')
                        {{$message}}
                        @enderror
                    </span>
                </div>
            </div>

            <div class="form-group row">
                <label for="link_site" class="col-sm-2 col-form-label">Ссылка на сайт</label>
                <div class="col-sm-10">
                    <input wire:model="site" type="text" class="form-control Dismissed_team_data" id="link_site"
                           placeholder="WWW.site.com">
                    <span class="text-danger">
                        @error('site')
                        {{$message}}
                        @enderror
                    </span>
                </div>
            </div>
            <div class="form-group row">
                <label for="Contact_person" class="col-sm-2 col-form-label">Представитель компании</label>
                <div class="col-sm-10">
                    <input wire:model="contact_person" type="text" class="form-control" id="Contact_person"
                           placeholder="Иванов Иван Ивановоч">
                    <span class="text-danger">
                        @error('contact_person')
                        {{$message}}
                        @enderror
                    </span>
                </div>
            </div>

            <div class="form-group row">
                <label for="Adress" class="col-sm-2 col-form-label">Адрес</label>
                <div class="col-sm-10">
                    <input wire:model="address" type="text" class="form-control" id="Adress"
                           placeholder="Местоположение компании">
                    <span class="text-danger">
                        @error('address')
                        {{$message}}
                        @enderror
                    </span>
                </div>
            </div>

            <div class="form-group row">
                <label>Координаты</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                            <span class="input-group-text"><i
                                    class="fas fa-map-marker-alt"></i></span>
                    </div>
                    <input wire:model="coordinate" type="text" class="form-control"
                           placeholder="56.125281, 69.441993">
                    <span class="text-danger">
                        @error('coordinate')
                        {{$message}}
                        @enderror
                    </span>
                </div>
                <a data-fancybox href="#findCoordination">Получить координаты</a>
            </div>

            <div class="form-group row">
                <label for="Note" class="col-sm-2 col-form-label">Примечание</label>
                <div class="col-sm-10">
                    <input wire:model="note" type="text" class="form-control" id="Note"
                           placeholder="Хорошая компания...">
                    <span class="text-danger">
                        @error('note')
                        {{$message}}
                        @enderror
                    </span>
                </div>
            </div>
            <div class="form-group row">
                <label for="Requisites" class="col-sm-2 col-form-label">Реквизиты</label>
                <div class="col-sm-10">
                    <input wire:model="requisites" type="text" class="form-control" id="Requisites"
                           placeholder="Реквезиты компании">
                    <span class="text-danger">
                        @error('requisites')
                        {{$message}}
                        @enderror
                    </span>
                </div>
            </div>

            <div class="form-group row">
                <label for="img" class="col-sm-2 col-form-label">Изображение</label>
                <div class="col-sm-10">
                    <input wire:model="img" type="text" class="form-control" id="img"
                           value="https://crimea-news.net/media/k2/items/src/5108b0ca2eed78054d2975cb63791f3e.jpg"
                           placeholder="Ссылка на ихображение">
                    <span class="text-danger">
                        @error('img')
                        {{$message}}
                        @enderror
                    </span>
                </div>
            </div>
            <div class="form-group row">
                <img wire:model="img">
            </div>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
            <button type="submit" id="cFlex" class="btn btn-info ">Отправить</button>
        </div>
    </form>
    <!-- /.card-footer -->
</div>
<div style="display: none; width: 900px;" id="addOrg" class="fancybox dark-mode">
    <div class="card-body">
        <label>Добавление компании:</label>
        <div class="form-group row">
            <label for="title" class="col-sm-2 col-form-label">Название компании</label>
            <div class="col-sm-10">
                <input wire:model="title" type="text" class="form-control" id="title"
                       placeholder="ООО рога и копыта">
            </div>
        </div>

        <div class="form-group row">
            <label for="Description" class="col-sm-2 col-form-label">Описание</label>
            <div class="col-sm-10">
                <input wire:model="description" type="text" class="form-control" id="Description"
                       placeholder="Что за компания ?">
            </div>
        </div>
        <div class="form-group row">
            <label for="Email" class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-10">
                <input wire:model="email" type="email" class="form-control" id="Email"
                       placeholder="Email">
            </div>
        </div>
        <div class="form-group row">
            <label for="Phone" class="col-sm-2 col-form-label">Телефон</label>
            <div class="col-sm-10">
                <input wire:model="phone" type="number" class="form-control" id="Phone"
                       placeholder="79999999999">
            </div>
        </div>

        <div class="form-group row">
            <label for="link_site" class="col-sm-2 col-form-label">Ссылка на сайт</label>
            <div class="col-sm-10">
                <input wire:model="site" type="text" class="form-control Dismissed_team_data" id="link_site"
                       placeholder="WWW.site.com">
            </div>
        </div>
        <div class="form-group row">
            <label for="Contact_person" class="col-sm-2 col-form-label">Представитель компании</label>
            <div class="col-sm-10">
                <input wire:model="contact_person" type="text" class="form-control" id="Contact_person"
                       placeholder="Иванов Иван Ивановоч">
            </div>
        </div>

        <div class="form-group row">
            <label for="Adress" class="col-sm-2 col-form-label">Адрес</label>
            <div class="col-sm-10">
                <input wire:model="address" type="text" class="form-control" id="Adress"
                       placeholder="Местоположение компании">
            </div>
        </div>

        <div class="form-group row">
            <label>Координаты</label>
            <div class="input-group">
                <div class="input-group-prepend">
                            <span class="input-group-text"><i
                                    class="fas fa-map-marker-alt"></i></span>
                </div>
                <input wire:model="coordinate" type="text" class="form-control"
                       placeholder="56.125281, 69.441993">
            </div>
            <a data-fancybox href="#findCoordination">Получить координаты</a>
        </div>

        <div class="form-group row">
            <label for="Note" class="col-sm-2 col-form-label">Примечание</label>
            <div class="col-sm-10">
                <input wire:model="note" type="text" class="form-control" id="Note"
                       placeholder="Хорошая компания...">
            </div>
        </div>
        <div class="form-group row">
            <label for="Requisites" class="col-sm-2 col-form-label">Реквизиты</label>
            <div class="col-sm-10">
                <input wire:model="requisites" type="text" class="form-control" id="Requisites"
                       placeholder="Реквезиты компании">
            </div>
        </div>


        <div class="form-group row">
            <label for="img" class="col-sm-2 col-form-label">Изображение</label>
            <div class="col-sm-10">
                <input wire:model="img" type="text" class="form-control" id="img"
                       value="https://crimea-news.net/media/k2/items/src/5108b0ca2eed78054d2975cb63791f3e.jpg"
                       placeholder="Ссылка на ихображение">
            </div>
        </div>
    </div>
    <!-- /.card-body -->
    <div class="card-footer">
        <button wire:click="store" type="submit" id="cFlex" class="btn btn-info ">Отправить</button>
    </div>
    <!-- /.card-footer -->
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
    <script src="https://api-maps.yandex.ru/2.1/?apikey=ваш API-ключ&lang=ru_RU"></script>

    <script>
        <script src="https://api-maps.yandex.ru/2.1/?lang=ru-RU" type="text/javascript"></script>
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

            <?php foreach ($orgns as $local): ?>
            var myPlacemark = new ymaps.Placemark([
                <?php echo $local['coordinate']; ?>
            ], {
                balloonContentHeader: 'Компания: <a href = "#"><?=$local['title']; ?></a><br>' + 'Ответсвенный: <a href = "#"><?=$local['contact_person']; ?></a><br>' +
                    '<span class="description"><?=$local['email']; ?></span>',
                balloonContentBody: '<a href="tel:+<?=$local['phone'];?>">+<?=$local['phone'];?></a><br/>' +
                    '<img src="<?=$local['img'];?>" width="150px"> <br/> <a href="<?=$local['site'];?>">Перейти на сайт</a>',
                balloonContentFooter: '<?= $local['description'];?>',

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
        $('#cFlex').click(function () {
            $.fancybox.close();
        });
    </script>
@endsection
