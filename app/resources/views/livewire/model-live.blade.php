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
                <table id="example2"
                       class="table table-bordered table-hover dataTable dtr-inline"
                       aria-describedby="example2_info">
                    <thead>
                    <tr>
                        <th class="sorting sorting_asc" tabindex="0"
                            aria-controls="example2" rowspan="1" colspan="1"
                            aria-sort="ascending"
                            aria-label="Rendering engine: activate to sort column descending">
                            id <i class="fas fa-sort" style="cursor: pointer"></i>
                        </th>
                        <th class="sorting" tabindex="0" aria-controls="example2"
                            rowspan="1" colspan="1"
                            aria-label="Browser: activate to sort column ascending">
                            Вид <i class="fas fa-sort" style="cursor: pointer"></i>
                        </th>
                        <th class="sorting" tabindex="0" aria-controls="example2"
                            rowspan="1" colspan="1"
                            aria-label="Platform(s): activate to sort column ascending">
                            Тип <i class="fas fa-sort" style="cursor: pointer"></i>
                        </th>
                        <th class="sorting" tabindex="0" aria-controls="example2"
                            rowspan="1" colspan="1"
                            aria-label="Platform(s): activate to sort column ascending">
                            Сотрудник <i class="fas fa-sort" style="cursor: pointer"></i>
                        </th>
                        <th class="sorting" tabindex="0" aria-controls="example2"
                            rowspan="1" colspan="1"
                            aria-label="Engine version: activate to sort column ascending">
                            Модель <i class="fas fa-sort"
                                      style="cursor: pointer"></i>
                        </th>
                        <th class="sorting" tabindex="0" aria-controls="example2"
                            rowspan="1" colspan="1"
                            aria-label="CSS grade: activate to sort column ascending">
                            Описание <i class="fas fa-sort"
                                        style="cursor: pointer"></i>
                        </th>
                        <th class="sorting" tabindex="0" aria-controls="example2"
                            rowspan="1" colspan="1"
                            aria-label="CSS grade: activate to sort column ascending">
                            Изображение <i class="fas fa-sort"
                                           style="cursor: pointer"></i>
                        </th>
                        <th class="sorting" tabindex="0" aria-controls="example2"
                            rowspan="1" colspan="1"
                            aria-label="CSS grade: activate to sort column ascending">
                            Действие
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($models as $model)
                        <tr class="odd">
                            <td class="dtr-control sorting_1" tabindex="0">{{$model->id}}</td>
                            <td>{{$model->title_view}}</td>
                            <td>{{$model->title_type}}</td>
                            <td>{{$model->title_teams}}</td>
                            <td>{{$model->title_model}}</td>
                            <td>{{$model->title_description}}</td>
                            <td>
                                <a href="{{$model->object_img}}">
                                    <img
                                        src="{{$model->object_img}}"
                                        width="150px"></a></td>
                            <td>
                                <button wire:click="edit({{$model->id}})" class="btn btn-info mr-3"><i
                                        class="fas fa-pen"></i></button>
                                <button wire:click="remove({{$model->id}})" class="btn btn-danger"><i
                                        class="fas fa-trash-alt"></i></button>
                            </td>

                        </tr>
                    @endforeach
                    </tbody>
                    <tfoot>
                    <tr>
                        <th rowspan="1" colspan="1">id</th>
                        <th rowspan="1" colspan="1">Вид</th>
                        <th rowspan="1" colspan="1">Тип</th>
                        <th rowspan="1" colspan="1">Сотрудник</th>
                        <th rowspan="1" colspan="1">Модель</th>
                        <th rowspan="1" colspan="1">Описание</th>
                        <th rowspan="1" colspan="1">Изображение</th>
                        <th rowspan="1" colspan="1">Действие</th>
                    </tr>
                    </tfoot>
                </table>
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
