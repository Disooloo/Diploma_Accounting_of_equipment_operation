<section class="content">
    <div class="container-fluid">
        <div class="row">

            @if($sView)
                <div class="col-md-6">

                    @include('admin.type_objects.objectFilter')
                    @if($editOn)
                        <div class="card card-primary card-outline">
                            <div class="card-body box-profile">
                                @if($createData)
                                    <h3 class="profile-username text-center" id="addpost">Создание записи</h3>
                                    @include('admin.type_objects.createT')
                                @else
                                    <h3 class="profile-username text-center" id="addpost">Редактирование записи</h3>
                                    @include('admin.type_objects.editT')
                                @endif
                            </div><!-- /.card-body -->
                        </div><!-- /.card -->
                    @else
                        @include('admin.type_objects.connectModel')
                    @endif

                </div><!-- /.col -->
                <div class="col-md-6">
                    <div class="card-header card card-primary card-outline ">
                        @if ($t_obj_count >= 1)
                            @foreach($t_obj as $t_ob)
                                <div class="card card-blue collapsed-card col-md-12 ml-4 mr-4 mt-3"
                                     style="transition: all 0.15s ease 0s; height: inherit; width: inherit;">
                                    <div class="card-header"><h3 class="card-title">#{{$t_ob->id}} {{$t_ob->title}}</h3>
                                        <div class="card-tools">
                                            <button type="button" class="btn btn-tool" data-card-widget="collapse"
                                                    data-source="widgets.html"
                                                    data-source-selector="#card-refresh-content"
                                                    data-load-on-init="false"><i
                                                    class="fas fa-plus"></i></button>
                                            <button type="button" wire:click="showVtype({{$t_ob->id}})"
                                                    class="btn btn-tool"><i
                                                    class="fas fa-expand"></i></button>
                                            <button type="button" wire:click="edit_type({{$t_ob->id}})"
                                                    class="btn btn-tool">
                                                <i class="fas fa-pen "></i></button>
                                            <button wire:click="removet({{$t_ob->id}})" type="button"
                                                    class="btn btn-tool" data-card-widget="remove"><i
                                                    class="fas fa-times"></i></button>
                                        </div><!-- /.card-tools -->
                                    </div><!-- /.card-header -->
                                    <div class="card-body">
                                        <span style="border-bottom: 3px solid #3F6791">{{$t_ob->description}}</span>
                                    </div><!-- /.card-body -->
                                </div>
                            @endforeach
                        @else
                            <p>У вас нет записей.</p> <a href=""></a>
                        @endif
                    </div>
                </div>
            @else
                <div class="content">
                    <div class="container">
                        <button wire:click="backMain" class="btn">Вернуться</button>

                        <div class="card-body">
                            <div class="col-6">
                                <a data-fancybox href="#addTypeView"
                                   class="btn btn-success float-right mb-2 ml-3">Добавить</a>
                                <a href="#" class="btn btn-warning float-right mb-2">Выгрузить</a>
                            </div>
                            <table id="example2"
                                   class="table table-bordered table-hover dataTable dtr-inline"
                                   aria-describedby="example2_info">
                                <thead>
                                <tr>
                                    <th class="sorting sorting_asc" tabindex="0"
                                        aria-controls="example2" rowspan="1" colspan="1"
                                        aria-sort="ascending"
                                        aria-label="Rendering engine: activate to sort column descending">
                                        id <i class="fas fa-sort"
                                              style="cursor: pointer"></i>
                                    </th>
                                    <th class="sorting" tabindex="0"
                                        aria-controls="example2"
                                        rowspan="1" colspan="1"
                                        aria-label="Browser: activate to sort column ascending">
                                        Вид <i class="fas fa-sort"
                                               style="cursor: pointer"></i>
                                    </th>
                                    <th class="sorting" tabindex="0"
                                        aria-controls="example2"
                                        rowspan="1" colspan="1"
                                        aria-label="Platform(s): activate to sort column ascending">
                                        Тип <i class="fas fa-sort"
                                               style="cursor: pointer"></i>
                                    </th>
                                    <th class="sorting" tabindex="0"
                                        aria-controls="example2"
                                        rowspan="1" colspan="1"
                                        aria-label="Engine version: activate to sort column ascending">
                                        Модель <i class="fas fa-sort"
                                                  style="cursor: pointer"></i>
                                    </th>
                                    <th class="sorting" tabindex="0"
                                        aria-controls="example2"
                                        rowspan="1" colspan="1"
                                        aria-label="CSS grade: activate to sort column ascending">
                                        Описание <i class="fas fa-sort"
                                                    style="cursor: pointer"></i>
                                    </th>
                                    <th class="sorting" tabindex="0"
                                        aria-controls="example2"
                                        rowspan="1" colspan="1"
                                        aria-label="CSS grade: activate to sort column ascending">
                                        Изображение <i class="fas fa-sort"
                                                       style="cursor: pointer"></i>
                                    </th>
                                    <th class="sorting" tabindex="0"
                                        aria-controls="example2"
                                        rowspan="1" colspan="1"
                                        aria-label="CSS grade: activate to sort column ascending">
                                        Действие
                                    </th>
                                </tr>
                                </thead>
                                <tbody>
                                {{--                                @foreach($t_obj->products as $da)--}}
                                {{--                                    <tr>--}}
                                {{--                                        <td>{{$da['id']}}</td>--}}
                                {{--                                        <td>{{$da['title']}}</td>--}}
                                {{--                                    </tr>--}}
                                {{--                                @endforeach--}}
                                {{--                                @foreach($t_obj as $t_obj_views)--}}
                                {{--                                    <tr class="odd">--}}
                                {{--                                        <td class="dtr-control sorting_1"--}}
                                {{--                                            tabindex="0">{{$t_obj_views->id}}</td>--}}
                                {{--                                        <td>{{$t_obj_views->title}}</td>--}}
                                {{--                                        <td>{{$t_obj_views->model}}</td>--}}
                                {{--                                        <td>{{$t_obj_views->description}}</td>--}}
                                {{--                                        <td>--}}
                                {{--                                            <a href="{{$t_obj_views->img}}">--}}
                                {{--                                                <img--}}
                                {{--                                                    src="{{$t_obj_views->img}}"--}}
                                {{--                                                    width="150px"></a></td>--}}
                                {{--                                        <td>--}}
                                {{--                                            <a href="#" class="btn btn-info mr-3"><i--}}
                                {{--                                                    class="fas fa-pen"></i></a>--}}
                                {{--                                            <a href="#" class="btn btn-danger"><i--}}
                                {{--                                                    class="fas fa-trash-alt"></i></a>--}}
                                {{--                                        </td>--}}

                                {{--                                    </tr>--}}
                                {{--                                @endforeach--}}
                                </tbody>
                                <tfoot>
                                <tr>
                                    <th rowspan="1" colspan="1">id</th>
                                    <th rowspan="1" colspan="1">Вид</th>
                                    <th rowspan="1" colspan="1">Тип</th>
                                    <th rowspan="1" colspan="1">Модель</th>
                                    <th rowspan="1" colspan="1">Описание</th>
                                    <th rowspan="1" colspan="1">Изображение</th>
                                    <th rowspan="1" colspan="1">Действие</th>
                                </tr>
                                </tfoot>
                            </table>
                        </div>

                    </div><!-- /.card -->
                </div>
        </div>
    </div>
@endif
<!-- /.col -->
    </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</section>

