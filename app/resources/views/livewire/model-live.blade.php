<section class="content">
    <div class="card">
        <!-- Default box -->
        <div class="card-body card-primary card-outline ">
            <div class="card-header">
                <div class="btn-group btn-group-toggle mt-3" data-toggle="buttons">
                    <label class="btn btn-secondary active mr-3">
                        <input wire:click="editOn" type="radio" name="options" id="option_a1" autocomplete="off"
                               checked> Все записи
                    </label>
                    <label class="btn btn-secondary mr-3">
                        <input wire:click="addCard" type="radio" name="options" id="option_a2" autocomplete="off">
                        Добавить
                    </label>
                </div>
                <a href="{{route('export_model_object')}}" class="btn btn-secondary mr-2 mt-3">Выгрузить</a>
            </div>
            @if($storeOn)
                <div class="table-responsive">
                    <table id="example2"
                           class="table text-nowrap table-bordered table-hover "
                           aria-describedby="example2_info">
                        <thead>
                        <tr>
                            <th rowspan="1" colspan="1">Дуйствие</th>
                            <th rowspan="1" colspan="1">id</th>
                            <th rowspan="1" colspan="1">Вид</th>
                            <th rowspan="1" colspan="1">Тип</th>
                            <th rowspan="1" colspan="1">Модель</th>
                            <th rowspan="1" colspan="1">Сотрудник</th>
                            <th rowspan="1" colspan="1">Описание</th>
                            <th rowspan="1" colspan="1">Изображение</th>
                            <th rowspan="1" colspan="1">Компания</th>
                            <th rowspan="1" colspan="1">Филиал</th>
                            <th rowspan="1" colspan="1">Статус</th>
                            <th rowspan="1" colspan="1">Серийный номер</th>
                            <th rowspan="1" colspan="1">Инвентарный номер</th>
                            <th rowspan="1" colspan="1">Инв номер бухгалтерии</th>
                            <th rowspan="1" colspan="1">Номер партии</th>
                            <th rowspan="1" colspan="1">Место</th>
                            <th rowspan="1" colspan="1">Код продукта</th>
                            <th rowspan="1" colspan="1">Код активации</th>
                            <th rowspan="1" colspan="1">Кол-во</th>
                            <th rowspan="1" colspan="1">Стоимость</th>
                            <th rowspan="1" colspan="1">сумма</th>
                            <th rowspan="1" colspan="1">Поставщик</th>
                            <th rowspan="1" colspan="1">Сервисная организация</th>
                            <th rowspan="1" colspan="1">Дата инвентаризации</th>
                            <th rowspan="1" colspan="1">Участие в инвентаризации</th>
                            <th rowspan="1" colspan="1">Гарантия до</th>
                            <th rowspan="1" colspan="1">Лицензия до</th>
                            <th rowspan="1" colspan="1">Дата создания</th>
                            <th rowspan="1" colspan="1">Списал</th>
                            <th rowspan="1" colspan="1">Id заказа</th>
                            <th rowspan="1" colspan="1">Домен</th>
                            <th rowspan="1" colspan="1">Сетивое имя</th>
                            <th rowspan="1" colspan="1">IP адрес</th>
                            <th rowspan="1" colspan="1">MAC Адрес</th>
                            <th rowspan="1" colspan="1">Примечание</th>
                            <th rowspan="1" colspan="1">Дата изменения</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($models as $model)
                            <tr class="odd">
                                <td>
                                    <div class="col-md-4">
                                        <div class="col-md-2">
                                            <button wire:click="edit({{$model->id}})" class="btn btn-info mr-3"><i
                                                    class="fas fa-pen"></i>
                                            </button>

                                            <button wire:click="edit({{$model->id}})" class="btn btn-warning mr-3"><i
                                                    class="fas fa-hammer"></i>
                                            </button>
                                        </div>
                                        <div class="col-md-2">
                                            <form target="_myFrame"
                                                  action="{{route('processesFile.Cardinal')}}" method="post">
                                                @csrf
                                                @include('admin.model_object.Cardinal')

                                                <button type="submit"  style="width: 106px; margin-top: 5px; margin-bottom: 5px;" class="btn btn-secondary mr-3"><i
                                                        class="fas fa-id-card"></i>
                                                </button>
                                            </form>

                                            <button style="width: 106px;" wire:click="remove({{$model->id}})" class="btn btn-danger"><i
                                                    class="fas fa-trash-alt"></i>
                                            </button>
                                        </div>
                                    </div>

                                </td>
                                <td>{{$model->id}}</td>
                                <td>{{$model->title_view}}</td>
                                <td>{{$model->title_type}}</td>
                                <td>{{$model->title_model}}</td>
                                <td>{{$model->title_teams}}</td>
                                <td>{{$model->title_description}}</td>
                                <td>
                                    <a href="{{$model->object_img}}">
                                        <img
                                            src="{{$model->object_img}}"
                                            width="150px"></a>
                                </td>
                                <td>{{$model->title_company}}</td>
                                <td>{{$model->title_branch}}</td>
                                <td>{{$model->title_status}}</td>
                                <td>{{$model->number_system}}</td>
                                <td>{{$model->number_individual}}</td>
                                <td>{{$model->number_individual_bix}}</td>
                                <td>{{$model->number_parties}}</td>
                                <td>{{$model->title_spawn}}</td>
                                <td>{{$model->code_product}}</td>
                                <td>{{$model->code_activation}}</td>
                                <td>{{$model->number_Quantity}}</td>
                                <td>{{$model->money_cost}} ₽</td>
                                <td>{{$model->money_sum}} ₽</td>
                                <td>{{$model->title_seller}}</td>
                                <td>{{$model->service_organization}}</td>
                                <td>{{$model->data_inventory}}</td>
                                <td>
                                    @if($model->inventory_boolean == 1)
                                        Нужна инвенторизация
                                    @else
                                        Не нужна инвенторизация
                                    @endif
                                </td>
                                <td>{{$model->warranty_do}}</td>
                                <td>{{$model->license_do}}</td>
                                <td>{{$model->created_at}}</td>
                                <td>{{$model->title_wrote}}</td>
                                <td>{{$model->id_order}}</td>
                                <td>{{$model->title_domain}}</td>
                                <td>{{$model->system_name}}</td>
                                <td>{{$model->ip_address}}</td>
                                <td>{{$model->MAC_address}}</td>
                                <td>{{$model->title_note}}</td>
                                <td>{{$model->updated_at}}</td>

                            </tr>
                        @endforeach
                        </tbody>
                        <tfoot>
                        <tr>
                            <th rowspan="1" colspan="1">Дуйствие</th>
                            <th rowspan="1" colspan="1">id</th>
                            <th rowspan="1" colspan="1">Вид</th>
                            <th rowspan="1" colspan="1">Тип</th>
                            <th rowspan="1" colspan="1">Модель</th>
                            <th rowspan="1" colspan="1">Сотрудник</th>
                            <th rowspan="1" colspan="1">Описание</th>
                            <th rowspan="1" colspan="1">Изображение</th>
                            <th rowspan="1" colspan="1">Компания</th>
                            <th rowspan="1" colspan="1">Филиал</th>
                            <th rowspan="1" colspan="1">Статус</th>
                            <th rowspan="1" colspan="1">Серийный номер</th>
                            <th rowspan="1" colspan="1">Инвентарный номер</th>
                            <th rowspan="1" colspan="1">Инв номер бухгалтерии</th>
                            <th rowspan="1" colspan="1">Номер партии</th>
                            <th rowspan="1" colspan="1">Место</th>
                            <th rowspan="1" colspan="1">Код продукта</th>
                            <th rowspan="1" colspan="1">Код активации</th>
                            <th rowspan="1" colspan="1">Кол-во</th>
                            <th rowspan="1" colspan="1">Стоимость</th>
                            <th rowspan="1" colspan="1">сумма</th>
                            <th rowspan="1" colspan="1">Поставщик</th>
                            <th rowspan="1" colspan="1">Сервисная организация</th>
                            <th rowspan="1" colspan="1">Дата инвентаризации</th>
                            <th rowspan="1" colspan="1">Участие в инвентаризации</th>
                            <th rowspan="1" colspan="1">Гарантия до</th>
                            <th rowspan="1" colspan="1">Лицензия до</th>
                            <th rowspan="1" colspan="1">Дата создания</th>
                            <th rowspan="1" colspan="1">Списал</th>
                            <th rowspan="1" colspan="1">Id заказа</th>
                            <th rowspan="1" colspan="1">Домен</th>
                            <th rowspan="1" colspan="1">Сетивое имя</th>
                            <th rowspan="1" colspan="1">IP адрес</th>
                            <th rowspan="1" colspan="1">MAC Адрес</th>
                            <th rowspan="1" colspan="1">Примечание</th>
                            <th rowspan="1" colspan="1">Дата изменения</th>
                        </tr>
                        </tfoot>
                    </table>
                </div>
            {{$models->links()}}
        @else
            @include('admin.model_object.create')
        @endif
        <!-- /.card-body -->
        </div>
    </div>
    <!-- /.card-body -->
    <!-- /.card -->
</section>
<!-- /.content -->
