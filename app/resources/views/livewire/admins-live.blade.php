<section class="content">
    <div class="container-fluid">
        @if(!$openSearch)

            <div class="input-group-append">
                <button wire:click="btnOpenSearch" type="submit" class="btn btn-lg btn-default">
                    <i class="fa fa-search"></i>
                </button>
            </div>
        @else
            @include('admin.full_user_adm.filter')
        @endif

        <div class="row">
            <!-- Default box -->
            @if(!$showEdit)
                <div class="card-body ">
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
                                Имя <i class="fas fa-sort" style="cursor: pointer"></i>
                            </th>
                            <th class="sorting" tabindex="0" aria-controls="example2"
                                rowspan="1" colspan="1"
                                aria-label="Platform(s): activate to sort column ascending">
                                Email <i class="fas fa-sort" style="cursor: pointer"></i>
                            </th>
                            </th>
                            <th class="sorting" tabindex="0" aria-controls="example2"
                                rowspan="1" colspan="1"
                                aria-label="CSS grade: activate to sort column ascending">
                                Дата регистрации <i class="fas fa-sort"
                                                    style="cursor: pointer"></i>
                            </th>
                            <th class="sorting" tabindex="0" aria-controls="example2"
                                rowspan="1" colspan="1"
                                aria-label="CSS grade: activate to sort column ascending">
                                Изображение
                            </th>
                            <th class="sorting" tabindex="0" aria-controls="example2"
                                rowspan="1" colspan="1"
                                aria-label="CSS grade: activate to sort column ascending">
                                Роль <i class="fas fa-sort"
                                        style="cursor: pointer"></i>
                            </th>
                            <th class="sorting" tabindex="0" aria-controls="example2"
                                rowspan="1" colspan="1"
                                aria-label="CSS grade: activate to sort column ascending">
                                 Вход в систему
                            </th>
                            <th class="sorting" tabindex="0" aria-controls="example2"
                                rowspan="1" colspan="1"
                                aria-label="CSS grade: activate to sort column ascending">
                                Действие
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($admins as $admin)
                            <tr class="odd">
                                <td class="dtr-control sorting_1" tabindex="0">{{$admin->id}}</td>
                                <td>{{$admin->name}}</td>
                                <td>{{$admin->email}}</td>
                                <td>{{$admin->created_at}}</td>
                                <td>
                                    <a data-fancybox href="#image">
                                        <i class="fas fa-image img_style"></i></a></td>

                                <div style="display: none; width: 500px;" id="image" class="fancybox dark-mode">
                                    <img src="{{$admin->img}}"
                                         width="250px" alt="">
                                </div>
                                <!--/.fancybox-->
                                @if($admin->is_admin == 1)
                                    <td style="color: #6ef36e">Администратор</td>

                                @else
                                    <td style="color: #d57205">Менеджер</td>
                                @endif
                                <td>
                                    @if($admin->dop1_boolean === 1)
                                        <i class="fas fa-window-close"></i>
                                    @else <i class="fas fa-check"></i>
                                    @endif
                                </td>
                                <td>
                                    <button wire:click="edit({{$admin->id}})" class="btn btn-info mr-3"><i
                                            class="fas fa-pen"></i></button>
                                    <button wire:click="remove({{$admin->id}})" class="btn btn-danger"><i
                                            class="fas fa-trash-alt"></i></button>
                                </td>

                            </tr>
                        @endforeach
                        </tbody>
                        <tfoot>
                        <tr>
                            <th rowspan="1" colspan="1">id</th>
                            <th rowspan="1" colspan="1">Имя</th>
                            <th rowspan="1" colspan="1">Email</th>
                            <th rowspan="1" colspan="1"> Дата регистрации</th>
                            <th rowspan="1" colspan="1">Изображение</th>
                            <th rowspan="1" colspan="1">Роль</th>
                            <th rowspan="1" colspan="1">Вход в систему</th>
                            <th rowspan="1" colspan="1">Действие</th>
                        </tr>
                        </tfoot>
                    </table>
                    <!-- /.card-body -->

                </div>
            @else
                @include('admin.full_user_adm.edit')
            @endif
        </div>
    </div>
</section>
