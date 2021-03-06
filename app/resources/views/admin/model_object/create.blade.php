<style>
    .formwitch {
        min-width: 900px;
        /*background: #000;*/
    }

    form {
        width: 100%;
    }

    .cardHis {
        min-width: 400px;
        margin-left: -400px;
    }

    .ffg {
        max-width: 100vw;
    }
</style>
<?php

?>

<div style="display: flex" class="col-md-8">

    @if($estistart)
        @foreach($models as $model)
            <form action="{{route('mode_object_create')}}" method="POST" class="formwitch">
                @csrf
                @method('post')
                <div class="card card-header card card-primary card-outline card-blue col-md-6">
                    <div class="card card-info">
                        <div class="card-header">
                            <h3 class="card-title">Создание модели обьекта</h3>
                        </div>
                        <div class="card-body">
                            <!-- views -->
                            <div class="form-group">
                                <label>Вид обьекта</label>
                                <div class="input-group">

                                    <select name="title_view"
                                            class="form-control select2bs4 select2-hidden-accessible"
                                            style="width: 100%;" data-select2-id="17" tabindex="-1"
                                            aria-hidden="true">
                                        <option disabled value="title_view"></option>
                                        <option disabled>Не выбрано</option>
                                        @foreach($viewss as $vi)
                                            <option
                                                value="{{$vi->title}}"> {{$vi->title}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div> @error('views'){{ $message }}@enderror </div>
                                <!-- /.input group -->
                            </div>
                            <!-- /.form group -->

                            <!-- title_type -->
                            <div class="form-group">
                                <label>Тип модели</label>
                                <div class="input-group">
                                    <select name="title_type"
                                            class="form-control select2bs4 select2-hidden-accessible"
                                            style="width: 100%;">
                                        <option disabled value="title_type"></option>
                                        <option disabled>Не выбрано</option>
                                        @foreach($typess as $type)
                                            <option
                                                value="{{$type->title}}"
                                            >{{$type->title}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div> @error('type'){{ $message }}@enderror </div>
                                <!-- /.input group -->
                            </div>
                            <!-- /.form group -->

                            <!-- title_teams -->
                            <div class="form-group">
                                <label>Сотрудник</label>
                                <div class="input-group">
                                    <select name="title_teams"
                                            class="form-control select2bs4 select2-hidden-accessible"
                                            style="width: 100%;">
                                        <option disabled value="title_teams"></option>
                                        <option disabled>Не выбрано</option>
                                        @foreach($teamss as $te)
                                            <option
                                                value="{{$te->LastName}} {{$te->FirstName}} {{$te->Patronymic}}"
                                            >{{$te->LastName}} {{$te->FirstName}} {{$te->Patronymic}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div> @error('type'){{ $message }}@enderror </div>
                                <!-- /.input group -->
                            </div>
                            <!-- /.form group -->

                            <!-- title_model -->
                            <div class="form-group">
                                <label>Модель</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                            <span class="input-group-text"><i
                                                    class="fas fa-file"></i></span>
                                    </div>
                                    <input name="title_model" type="text"
                                           class="form-control" value="{{$model->title_model}}"/>
                                </div>
                                <!-- /.input group -->
                            </div>
                            <div> @error('model'){{ $message }}@enderror </div>

                            <!-- /.form group -->

                            <!-- object_img -->
                            <div class="form-group">
                                <label>Картинка</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-image"></i></span>
                                    </div>
                                    <input wire:model="img" name="object_img" type="text"
                                           class="form-control" value="{{$model->object_img}}"/>
                                </div>
                                <!-- /.input group -->
                                <div> @error('img'){{ $message }}@enderror </div>
                            </div>
                            <!-- /.form group -->

                            <!-- title_description -->
                            <div class="form-group">
                                <label>Описание</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-file"></i></span>
                                    </div>
                                    <input name="title_description" value="{{$model->title_description}}"
                                           style="min-height: 50px" type="text" class="form-control"/>
                                </div>
                                <!-- /.input group -->
                            </div>
                            <!-- /.form group -->
                            <div> @error('description'){{ $message }}@enderror </div>

                            <!-- title_company -->
                            <div class="form-group">
                                <label>Компания</label>
                                <select name="title_company"
                                        class="form-control select2bs4 select2-hidden-accessible"
                                        style="width: 100%;">
                                    <option disabled value="title_company"></option>
                                    <option disabled >Не выбрано</option>
                                    @foreach($company as $comp)
                                        <option
                                            value="#{{$comp->id}} {{$comp->Company_name}}"
                                        >#{{$comp->id}} {{$comp->Company_name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <!-- /.form group -->

                            <!-- title_branch -->
                            <div class="form-group">
                                <label>Филиал</label>
                                <select name="title_branch"
                                        class="form-control select2bs4 select2-hidden-accessible"
                                        style="width: 100%;">
                                    <option disabled value="title_branch"></option>
                                    <option disabled>Не выбрано</option>
                                    @foreach($branch as $bran)
                                        <option
                                            value="#{{$bran->id}} {{$bran->Branches_name}}"
                                        >#{{$bran->id}} {{$bran->Branches_name}}</option>
                                    @endforeach
                                </select>
                                <!-- /.input group -->
                            </div>
                            <!-- /.form group -->

                            <!-- title_status -->
                            <div class="form-group">
                                <label>Статус</label>
                                <select name="title_status"
                                        class="form-control select2bs4 select2-hidden-accessible"
                                        style="width: 100%;">

                                    <option disabled value="title_status"></option>
                                    <option disabled>Не выбрано</option>
                                    @foreach($status as $stat)
                                        <option
                                            value="{{$stat->title}}"
                                        >#{{$stat->id}} {{$stat->title}}</option>
                                    @endforeach
                                </select>
                                <!-- /.input group -->
                            </div>
                            <!-- /.form group -->

                            <!-- number_system -->
                            <div class="form-group">
                                <label>Серийный номер</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                            <span class="input-group-text"><i
                                                    class="fas fa-file"></i></span>
                                    </div>
                                    <input name="number_system" type="number"
                                           class="form-control" value="{{$model->number_system}}"/>
                                </div>
                                <!-- /.input group -->
                            </div>
                            <!-- /.form group -->

                            <!-- number_individual -->
                            <div class="form-group">
                                <label>Инвентарный номер</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                            <span class="input-group-text"><i
                                                    class="fas fa-file"></i></span>
                                    </div>
                                    <input name="number_individual" type="number"
                                           class="form-control" value="{{$model->number_individual}}"/>
                                </div>
                                <!-- /.input group -->
                            </div>
                            <!-- /.form group -->

                            <!-- number_individual_bix -->
                            <div class="form-group">
                                <label>Инв номер бухгалтерии</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                            <span class="input-group-text"><i
                                                    class="fas fa-file"></i></span>
                                    </div>
                                    <input name="number_individual_bix" type="number"
                                           class="form-control" value="{{$model->number_individual_bix}}"/>
                                </div>
                                <!-- /.input group -->
                            </div>
                            <!-- /.form group -->

                            <!-- number_parties -->
                            <div class="form-group">
                                <label>Номер партии</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                            <span class="input-group-text"><i
                                                    class="fas fa-file"></i></span>
                                    </div>
                                    <input name="number_parties" type="number"
                                           class="form-control" value="{{$model->number_parties}}"/>
                                </div>
                                <!-- /.input group -->
                            </div>
                            <!-- /.form group -->


                            <!-- title_spawn -->
                            <div class="form-group">
                                <label>Место</label>
                                <select name="title_spawn"
                                        class="form-control select2bs4 select2-hidden-accessible"
                                        style="width: 100%;">
                                    <option disabled value="title_spawn"></option>
                                    <option disabled >Не выбрано</option>
                                    @foreach($t_spawn as $spawn)
                                        <option
                                            value="#{{$spawn->id}} {{$spawn->local}} | {{$spawn->id_branches}}"
                                        >#{{$spawn->id}} {{$spawn->local}} | {{$spawn->id_branches}}</option>
                                    @endforeach
                                </select>
                                <!-- /.input group -->
                            </div>
                            <!-- /.form group -->

                            <!-- code_product -->
                            <div class="form-group">
                                <label>Код продукта</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                            <span class="input-group-text"><i
                                                    class="fas fa-file"></i></span>
                                    </div>
                                    <input name="code_product" type="number"
                                           class="form-control" value="{{$model->code_product}}"/>
                                </div>
                                <!-- /.input group -->
                            </div>
                            <!-- /.form group -->

                            <!-- code_activation -->
                            <div class="form-group">
                                <label>Код активации</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                            <span class="input-group-text"><i
                                                    class="fas fa-file"></i></span>
                                    </div>
                                    <input name="code_activation" type="number"
                                           class="form-control" value="{{$model->code_activation}}"/>
                                </div>
                                <!-- /.input group -->
                            </div>
                            <!-- /.form group -->

                            <!-- number_Quantity -->
                            <div class="form-group">
                                <label>Кол-во</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                            <span class="input-group-text"><i
                                                    class="fas fa-file"></i></span>
                                    </div>
                                    <input wire:model="number_Quantity" name="number_Quantity" type="number"
                                           class="form-control" value="{{$model->number_Quantity}}"/>
                                </div>
                                <!-- /.input group -->
                            </div>
                            <!-- /.form group -->

                            <!-- money_cost -->
                            <div class="form-group">
                                <label>Стоимость за шт</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                            <span class="input-group-text"><i
                                                    class="fas fa-file"></i></span>
                                    </div>
                                    <input wire:model="money_cost" name="money_cost" type="number"
                                           class="form-control" placeholder="250,10" value="{{$model->money_cost}}"/>
                                </div>
                                <!-- /.input group -->
                            </div>
                            <!-- /.form group -->

                            <!-- money_sum -->
                            <div class="form-group">
                                <label>Сумма</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                            <span class="input-group-text"><i
                                                    class="fas fa-file"></i></span>
                                    </div>
                                    <input name="money_sum" type="number" value="{{$number_Quantity*$money_cost}}"
                                           class="form-control"/>
                                </div>
                                <!-- /.input group -->
                            </div>
                            <!-- /.form group -->

                            <!-- title_seller -->
                            <div class="form-group">
                                <label>Поставщик</label>
                                <select name="title_seller"
                                        class="form-control select2bs4 select2-hidden-accessible"
                                        style="width: 100%;">
                                    <option disabled value="title_seller"></option>
                                    <option disabled >Не выбрано</option>
                                    @foreach($company as $comp)
                                        <option
                                            value="#{{$comp->id}} {{$comp->Company_name}}"
                                        >#{{$comp->id}} {{$comp->Company_name}}</option>
                                    @endforeach
                                </select>
                                <!-- /.input group -->
                            </div>
                            <!-- /.form group -->

                            <!-- service_organization -->
                            <div class="form-group">
                                <label>Сервисная организация</label>
                                <select name="service_organization"
                                        class="form-control select2bs4 select2-hidden-accessible"
                                        style="width: 100%;">
                                    <option disabled value="service_organization"></option>
                                    <option disabled>Не выбрано</option>
                                    @foreach($oganizations as $oganization)
                                        <option
                                            value="#{{$oganization->id}} {{$oganization->title}}"
                                        >#{{$oganization->id}} {{$oganization->title}}</option>
                                    @endforeach
                                </select>
                                <!-- /.input group -->
                            </div>
                            <!-- /.form group -->

                            <!-- data_inventory -->
                            <div class="form-group">
                                <label>Дата инвентаризации</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                            <span class="input-group-text"><i
                                                    class="fas fa-file"></i></span>
                                    </div>
                                    <input name="data_inventory" type="date"
                                           class="form-control" value="{{$model->data_inventory}}"/>
                                </div>
                                <!-- /.input group -->
                            </div>
                            <!-- /.form group -->


                            <!-- warranty_do -->
                            <div class="form-group">
                                <label>Гарантия до</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                            <span class="input-group-text"><i
                                                    class="fas fa-file"></i></span>
                                    </div>
                                    <input name="warranty_do" type="date"
                                           class="form-control" value="{{$model->warranty_do}}"/>
                                </div>
                                <!-- /.input group -->
                            </div>
                            <!-- /.form group -->


                            <!-- license_do -->
                            <div class="form-group">
                                <label>Лицензия до</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                            <span class="input-group-text"><i
                                                    class="fas fa-file"></i></span>
                                    </div>
                                    <input name="license_do" type="date"
                                           class="form-control" value="{{$model->license_do}}"/>
                                </div>
                                <!-- /.input group -->
                            </div>
                            <!-- /.form group -->


                            <!-- title_wrote -->
                            <div class="form-group">
                                <label>Списал </label>
                                <select name="title_wrote"
                                        class="form-control select2bs4 select2-hidden-accessible"
                                        style="width: 100%;">
                                    <option value="title_wrote"></option>
                                    <option >Не списанно</option>
                                    @foreach($teamss as $te)
                                        <option
                                            value="{{$te->LastName}} {{$te->FirstName}} {{$te->Patronymic}}"
                                        >{{$te->LastName}} {{$te->FirstName}} {{$te->Patronymic}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <!-- /.form group -->

                            <input name="inventory_boolean" type="hidden"
                                   class="form-control" value="1"/>

                            <!-- id_order -->
                            <div class="form-group">
                                <label>ID заказа</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                            <span class="input-group-text"><i
                                                    class="fas fa-file"></i></span>
                                    </div>
                                    <input name="id_order" type="number"
                                           class="form-control" value="{{$model->id_order}}"/>
                                </div>
                                <!-- /.input group -->
                            </div>
                            <!-- /.form group -->

                            <!-- title_domain -->
                            <div class="form-group">
                                <label>Доменное имя</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                            <span class="input-group-text"><i
                                                    class="fas fa-file"></i></span>
                                    </div>
                                    <input name="title_domain" type="text"
                                           class="form-control" value="{{$model->title_domain}}"/>
                                </div>
                                <!-- /.input group -->
                            </div>
                            <!-- /.form group -->

                            <!-- system_name -->
                            <div class="form-group">
                                <label>Системное имя</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                            <span class="input-group-text"><i
                                                    class="fas fa-file"></i></span>
                                    </div>
                                    <input name="system_name" type="text"
                                           class="form-control" value="{{$model->system_name}}"/>
                                </div>
                                <!-- /.input group -->
                            </div>
                            <!-- /.form group -->

                            <!-- ip_address -->
                            <div class="form-group">
                                <label>IP Адресс</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                            <span class="input-group-text"><i
                                                    class="fas fa-file"></i></span>
                                    </div>
                                    <input name="ip_address" type="text"
                                           class="form-control" value="{{$model->ip_address}}"/>
                                </div>
                                <!-- /.input group -->
                            </div>
                            <!-- /.form group -->

                            <!-- MAC_address -->
                            <div class="form-group">
                                <label>MAC адресс</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                            <span class="input-group-text"><i
                                                    class="fas fa-file"></i></span>
                                    </div>
                                    <input name="MAC_address" type="text"
                                           class="form-control" value="{{$model->MAC_address}}"/>
                                </div>
                                <!-- /.input group -->
                            </div>
                            <!-- /.form group -->

                            <!-- title_note -->
                            <div class="form-group">
                                <label>Примечение</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                            <span class="input-group-text"><i
                                                    class="fas fa-file"></i></span>
                                    </div>
                                    <input name="title_note" type="text"
                                           class="form-control" value="{{$model->title_note}}"/>
                                </div>
                                <!-- /.input group -->
                            </div>
                            <!-- /.form group -->


                            <div class="card-footer">
                                <button type="submit" class="btn btn-info">Добавить</button>
                            </div>
                        </div>

                    </div>
                    <!-- /.card-body -->

                </div>

            </form>
        @endforeach
    @else
        <form action="{{route('mode_object_create')}}" method="POST" class="formwitch">
            @csrf
            @method('post')
            <div class="card card-header card card-primary card-outline card-blue col-md-6">
                <div class="card card-info">
                    <div class="card-header">
                        <h3 class="card-title">Создание модели обьекта</h3>
                    </div>
                    <div class="card-body">
                        <!-- views -->
                        <div class="form-group">
                            <label>Вид обьекта</label>
                            <div class="input-group">

                                <select name="title_view"
                                        class="form-control select2bs4 select2-hidden-accessible"
                                        style="width: 100%;" data-select2-id="17" tabindex="-1"
                                        aria-hidden="true">
                                    <option disabled value="title_view"></option>
                                    <option selected>Не выбрано</option>
                                    @foreach($viewss as $vi)
                                        <option
                                            value="{{$vi->title}}"> {{$vi->title}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div> @error('views'){{ $message }}@enderror </div>
                            <!-- /.input group -->
                        </div>
                        <!-- /.form group -->

                        <!-- title_type -->
                        <div class="form-group">
                            <label>Тип модели</label>
                            <div class="input-group">
                                <select name="title_type"
                                        class="form-control select2bs4 select2-hidden-accessible"
                                        style="width: 100%;">
                                    <option disabled value="title_type"></option>
                                    <option selected>Не выбрано</option>
                                    @foreach($typess as $type)
                                        <option
                                            value="{{$type->title}}"
                                        >{{$type->title}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div> @error('type'){{ $message }}@enderror </div>
                            <!-- /.input group -->
                        </div>
                        <!-- /.form group -->

                        <!-- title_teams -->
                        <div class="form-group">
                            <label>Сотрудник</label>
                            <div class="input-group">
                                <select name="title_teams"
                                        class="form-control select2bs4 select2-hidden-accessible"
                                        style="width: 100%;">
                                    <option disabled value="title_teams"></option>
                                    <option selected>Не выбрано</option>
                                    @foreach($teamss as $te)
                                        <option
                                            value="{{$te->LastName}} {{$te->FirstName}} {{$te->Patronymic}}"
                                        >{{$te->LastName}} {{$te->FirstName}} {{$te->Patronymic}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div> @error('type'){{ $message }}@enderror </div>
                            <!-- /.input group -->
                        </div>
                        <!-- /.form group -->

                        <!-- title_model -->
                        <div class="form-group">
                            <label>Модель</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                            <span class="input-group-text"><i
                                                    class="fas fa-file"></i></span>
                                </div>
                                <input name="title_model" type="text"
                                       class="form-control"/>
                            </div>
                            <!-- /.input group -->
                        </div>
                        <div> @error('model'){{ $message }}@enderror </div>

                        <!-- /.form group -->

                        <!-- object_img -->
                        <div class="form-group">
                            <label>Картинка</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-image"></i></span>
                                </div>
                                <input wire:model="img" name="object_img" type="text"
                                       class="form-control"/>
                            </div>
                            <!-- /.input group -->
                            <div> @error('img'){{ $message }}@enderror </div>
                        </div>
                        <!-- /.form group -->

                        <!-- title_description -->
                        <div class="form-group">
                            <label>Описание</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-file"></i></span>
                                </div>
                                <textarea name="title_description" class="form-control">
                                </textarea>
                            </div>
                            <!-- /.input group -->
                        </div>
                        <!-- /.form group -->
                        <div> @error('description'){{ $message }}@enderror </div>

                        <!-- title_company -->
                        <div class="form-group">
                            <label>Компания</label>
                            <select name="title_company"
                                    class="form-control select2bs4 select2-hidden-accessible"
                                    style="width: 100%;">
                                <option disabled selected>Не выбрано</option>
                                @foreach($company as $comp)
                                    <option
                                        value="#{{$comp->id}} {{$comp->Company_name}}"
                                    >#{{$comp->id}} {{$comp->Company_name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <!-- /.form group -->

                        <!-- title_branch -->
                        <div class="form-group">
                            <label>Филиал</label>
                            <select name="title_branch"
                                    class="form-control select2bs4 select2-hidden-accessible"
                                    style="width: 100%;">
                                <option disabled selected>Не выбрано</option>
                                @foreach($branch as $bran)
                                    <option
                                        value="#{{$bran->id}} {{$bran->Branches_name}}"
                                    >#{{$bran->id}} {{$bran->Branches_name}}</option>
                                @endforeach
                            </select>
                            <!-- /.input group -->
                        </div>
                        <!-- /.form group -->

                        <!-- title_status -->
                        <div class="form-group">
                            <label>Статус</label>
                            <select name="title_status"
                                    class="form-control select2bs4 select2-hidden-accessible"
                                    style="width: 100%;">
                                <option disabled selected>Не выбрано</option>
                                @foreach($status as $stat)
                                    <option
                                        value="{{$stat->title}}"
                                    >#{{$stat->id}} {{$stat->title}}</option>
                                @endforeach
                            </select>
                            <!-- /.input group -->
                        </div>
                        <!-- /.form group -->

                        <!-- number_system -->
                        <div class="form-group">
                            <label>Серийный номер</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                            <span class="input-group-text"><i
                                                    class="fas fa-file"></i></span>
                                </div>
                                <input name="number_system" type="number"
                                       class="form-control"/>
                            </div>
                            <!-- /.input group -->
                        </div>
                        <!-- /.form group -->

                        <!-- number_individual -->
                        <div class="form-group">
                            <label>Инвентарный номер</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                            <span class="input-group-text"><i
                                                    class="fas fa-file"></i></span>
                                </div>
                                <input name="number_individual" type="number"
                                       class="form-control"/>
                            </div>
                            <!-- /.input group -->
                        </div>
                        <!-- /.form group -->

                        <!-- number_individual_bix -->
                        <div class="form-group">
                            <label>Инв номер бухгалтерии</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                            <span class="input-group-text"><i
                                                    class="fas fa-file"></i></span>
                                </div>
                                <input name="number_individual_bix" type="number"
                                       class="form-control"/>
                            </div>
                            <!-- /.input group -->
                        </div>
                        <!-- /.form group -->

                        <!-- number_parties -->
                        <div class="form-group">
                            <label>Номер партии</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                            <span class="input-group-text"><i
                                                    class="fas fa-file"></i></span>
                                </div>
                                <input name="number_parties" type="number"
                                       class="form-control"/>
                            </div>
                            <!-- /.input group -->
                        </div>
                        <!-- /.form group -->


                        <!-- title_spawn -->
                        <div class="form-group">
                            <label>Место</label>
                            <select name="title_spawn"
                                    class="form-control select2bs4 select2-hidden-accessible"
                                    style="width: 100%;">
                                <option disabled selected>Не выбрано</option>
                                @foreach($t_spawn as $spawn)
                                    <option
                                        value="#{{$spawn->id}} {{$spawn->local}} | {{$spawn->id_branches}}"
                                    >#{{$spawn->id}} {{$spawn->local}} | {{$spawn->id_branches}}</option>
                                @endforeach
                            </select>
                            <!-- /.input group -->
                        </div>
                        <!-- /.form group -->

                        <!-- code_product -->
                        <div class="form-group">
                            <label>Код продукта</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                            <span class="input-group-text"><i
                                                    class="fas fa-file"></i></span>
                                </div>
                                <input name="code_product" type="number"
                                       class="form-control"/>
                            </div>
                            <!-- /.input group -->
                        </div>
                        <!-- /.form group -->

                        <!-- code_activation -->
                        <div class="form-group">
                            <label>Код активации</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                            <span class="input-group-text"><i
                                                    class="fas fa-file"></i></span>
                                </div>
                                <input name="code_activation" type="number"
                                       class="form-control"/>
                            </div>
                            <!-- /.input group -->
                        </div>
                        <!-- /.form group -->

                        <!-- number_Quantity -->
                        <div class="form-group">
                            <label>Кол-во</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                            <span class="input-group-text"><i
                                                    class="fas fa-file"></i></span>
                                </div>
                                <input wire:model="number_Quantity" name="number_Quantity" type="number"
                                       class="form-control"/>
                            </div>
                            <!-- /.input group -->
                        </div>
                        <!-- /.form group -->

                        <!-- money_cost -->
                        <div class="form-group">
                            <label>Стоимость за шт</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                            <span class="input-group-text"><i
                                                    class="fas fa-file"></i></span>
                                </div>
                                <input wire:model="money_cost" name="money_cost" type="number"
                                       class="form-control" placeholder="250,10"/>
                            </div>
                            <!-- /.input group -->
                        </div>
                        <!-- /.form group -->


                        <!-- money_sum -->
                        <div class="form-group">
                            <label>Сумма</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                            <span class="input-group-text"><i
                                                    class="fas fa-file"></i></span>
                                </div>
                                <input name="money_sum" type="number" value="{{$number_Quantity*$money_cost}}"
                                       class="form-control"/>
                            </div>
                            <!-- /.input group -->
                        </div>
                        <!-- /.form group -->

                        <!-- title_seller -->
                        <div class="form-group">
                            <label>Поставщик</label>
                            <select name="title_seller"
                                    class="form-control select2bs4 select2-hidden-accessible"
                                    style="width: 100%;">
                                <option disabled selected>Не выбрано</option>
                                @foreach($company as $comp)
                                    <option
                                        value="#{{$comp->id}} {{$comp->Company_name}}"
                                    >#{{$comp->id}} {{$comp->Company_name}}</option>
                                @endforeach
                            </select>
                            <!-- /.input group -->
                        </div>
                        <!-- /.form group -->

                        <!-- service_organization -->
                        <div class="form-group">
                            <label>Сервисная организация</label>
                            <select name="service_organization"
                                    class="form-control select2bs4 select2-hidden-accessible"
                                    style="width: 100%;">
                                <option disabled selected>Не выбрано</option>
                                @foreach($oganizations as $oganization)
                                    <option
                                        value="#{{$oganization->id}} {{$oganization->title}}"
                                    >#{{$oganization->id}} {{$oganization->title}}</option>
                                @endforeach
                            </select>
                            <!-- /.input group -->
                        </div>
                        <!-- /.form group -->

                        <!-- data_inventory -->
                        <div class="form-group">
                            <label>Дата инвентаризации</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                            <span class="input-group-text"><i
                                                    class="fas fa-file"></i></span>
                                </div>
                                <input name="data_inventory" type="date"
                                       class="form-control"/>
                            </div>
                            <!-- /.input group -->
                        </div>
                        <!-- /.form group -->


                        <!-- warranty_do -->
                        <div class="form-group">
                            <label>Гарантия до</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                            <span class="input-group-text"><i
                                                    class="fas fa-file"></i></span>
                                </div>
                                <input name="warranty_do" type="date"
                                       class="form-control"/>
                            </div>
                            <!-- /.input group -->
                        </div>
                        <!-- /.form group -->


                        <!-- license_do -->
                        <div class="form-group">
                            <label>Лицензия до</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                            <span class="input-group-text"><i
                                                    class="fas fa-file"></i></span>
                                </div>
                                <input name="license_do" type="date"
                                       class="form-control"/>
                            </div>
                            <!-- /.input group -->
                        </div>
                        <!-- /.form group -->


                        <!-- title_wrote -->
                        <div class="form-group">
                            <label>Списал </label>
                            <select name="title_wrote"
                                    class="form-control select2bs4 select2-hidden-accessible"
                                    style="width: 100%;">
                                <option selected>Не списанно</option>
                                @foreach($teamss as $te)
                                    <option
                                        value="{{$te->LastName}} {{$te->FirstName}} {{$te->Patronymic}}"
                                    >{{$te->LastName}} {{$te->FirstName}} {{$te->Patronymic}}</option>
                                @endforeach
                            </select>
                        </div>
                        <!-- /.form group -->

                        <input name="inventory_boolean" type="hidden"
                               class="form-control" value="0"/>

                        <!-- id_order -->
                        <div class="form-group">
                            <label>ID заказа</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                            <span class="input-group-text"><i
                                                    class="fas fa-file"></i></span>
                                </div>
                                <input name="id_order" type="number"
                                       class="form-control"/>
                            </div>
                            <!-- /.input group -->
                        </div>
                        <!-- /.form group -->

                        <!-- title_domain -->
                        <div class="form-group">
                            <label>Доменное имя</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                            <span class="input-group-text"><i
                                                    class="fas fa-file"></i></span>
                                </div>
                                <input name="title_domain" type="text"
                                       class="form-control"/>
                            </div>
                            <!-- /.input group -->
                        </div>
                        <!-- /.form group -->

                        <!-- system_name -->
                        <div class="form-group">
                            <label>Системное имя</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                            <span class="input-group-text"><i
                                                    class="fas fa-file"></i></span>
                                </div>
                                <input name="system_name" type="text"
                                       class="form-control"/>
                            </div>
                            <!-- /.input group -->
                        </div>
                        <!-- /.form group -->

                        <!-- ip_address -->
                        <div class="form-group">
                            <label>IP Адресс</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                            <span class="input-group-text"><i
                                                    class="fas fa-file"></i></span>
                                </div>
                                <input name="ip_address" type="text"
                                       class="form-control"/>
                            </div>
                            <!-- /.input group -->
                        </div>
                        <!-- /.form group -->

                        <!-- MAC_address -->
                        <div class="form-group">
                            <label>MAC адресс</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                            <span class="input-group-text"><i
                                                    class="fas fa-file"></i></span>
                                </div>
                                <input name="MAC_address" type="text"
                                       class="form-control"/>
                            </div>
                            <!-- /.input group -->
                        </div>
                        <!-- /.form group -->

                        <!-- title_note -->
                        <div class="form-group">
                            <label>Примечение</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                            <span class="input-group-text"><i
                                                    class="fas fa-file"></i></span>
                                </div>
                                <input name="title_note" type="text"
                                       class="form-control"/>
                            </div>
                            <!-- /.input group -->
                        </div>
                        <!-- /.form group -->


                        <div class="card-footer">
                            <button type="submit" class="btn btn-info">Добавить</button>
                        </div>
                    </div>

                </div>
                <!-- /.card-body -->

            </div>

        </form>
    @endif
    <div class="d-block">

        <div class="cardHis">
            <div class="card-header card card-primary card-outline ">
                <div class="card-body">
                    @if($img)
                        <img src="{{$img}}"
                             class="img-fluid" alt="">
                    @else
                        <h1>Добавте картинку</h1>
                    @endif
                </div>
                <!-- /.card-body -->
            </div>
        </div>

        <div class="cardHis mt-5 " style="margin-top: 150px;">
            <div class="card-header card card-primary card-outline ">
                <div class="card-body">
                    <p>Вид обьекта</p>
                    <p>
                        Программа, мебель, оборудование и тд. Добавить <a href="{{route('view_object')}}">вид
                            обьекта</a>
                    </p>
                </div>
            </div>
        </div>

        <div class="cardHis mt-5 " style="margin-top: 150px;">
            <div class="card-header card card-primary card-outline ">
                <div class="card-body">
                    <p>Тип обьекта</p>
                    <p>Ноутбук, принтер, exel и тд. Добавить <a href="{{route('type_object')}}">тип модели</a></p>
                </div>
            </div>
        </div>

        <div class="cardHis mt-5 " style="margin-top: 150px;">
            <div class="card-header card card-primary card-outline ">
                <div class="card-body">
                    <p>Сотрудник который будет ответственный за обьект</p>
                    <p>Если нет нужного. Добавить <a href="{{route('team.index')}}">нового сотрудника</a></p>
                </div>
            </div>
        </div>

        <div class="cardHis mt-5 " style="margin-top: 150px;">
            <div class="card-header card card-primary card-outline ">
                <div class="card-body">
                    <p>Компания в которой находится данный обьект</p>
                    <p>Если нет нужного. Добавить <a href="{{route('company.index')}}">новую компанию</a></p>
                </div>
            </div>
        </div>


        <div class="cardHis mt-5 " style="margin-top: 150px;">
            <div class="card-header card card-primary card-outline ">
                <div class="card-body">
                    <p>Местоположение</p>
                    <p>Если нет нужного. Добавить <a href="{{route('location.index')}}">новое место</a></p>
                </div>
            </div>
        </div>

        <div class="cardHis mt-5 " style="margin-top: 150px;">
            <div class="card-header card card-primary card-outline ">
                <div class="card-body">
                    <p>Поставщик</p>
                    <p>Если нет нужного. Добавить <a href="{{route('location.index')}}">нового поставщика</a></p>
                </div>
            </div>
        </div>

        <div class="cardHis mt-5 " style="margin-top: 150px;">
            <div class="card-header card card-primary card-outline ">
                <div class="card-body">
                    <p>Сервисная организация</p>
                    <p>Если нет нужного. Добавить <a href="{{route('location.index')}}">новую сервисная организацию</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
