<div class="card content-wrapper kanban" style="margin-left: 0px;">
    <section class="content-header">
        <div class="container-flui">
            <div class="row">
                <div class="col-sm-6">
                    <h1>CRM</h1>
                </div>

                <div class="col-sm-6 d-none d-sm-block">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Главная</a></li>
                        <li class="breadcrumb-item active">CRM</li>
                    </ol>
                </div>
                <div class="col-sm-6 mt-3">
                    <div class="form-group">
                        <select class="custom-select">
                            <option>Сотрудники</option>
                            <option>Пользователи</option>
                            <option>Доставка</option>
                            <option>Новая 1</option>
                            <option>НОвая 2</option>
                        </select>
                    </div>
                </div>
                <div class="col-sm-6 mt-3">

                    <div class="input-group mb-3 ">
                        @if($addGroupState)
                            <div class="form-group" wire:submit.privent="save">

                                <input wire:model.defer="title" type="text" class="form-control"
                                       placeholder="Добавить новую категорию">
                                <div class="input-group-append">
                                    <button wire:click="storeGroup">
                                        Добавить
                                    </button>
                                </div>
                            </div>
                        @else
                            <div class="input-group-append">

                                <button wire:click="addGroup">
                                    Добавить
                                </button>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="content pb-3">
        <div wire:sortable="sorting" wire:sortable-group="sorting" class="container-fluid h-100">
            @foreach($groups as $group)
                <div wire:key="group-{{ $group->id }}" wire:sortable.item="{{ $group->id }}"
                     class="card card-row card-secondary">
                    <div class="card-header">
                        <h3 wire:sortable.handle class="card-title col-md-8">
                            {{$group->title}}
                        </h3>
                        <div class="card-tools ">
                            <a href="#" class="btn btn-tool btn-link"># {{$group->id}}</a>
                            <a wire:click="removeGroup({{$group->id}})" class="btn btn-tool ml-4"><i
                                    class="fas fa-trash-alt"></i></a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div wire:sortable-group.item-group="{{ $group->id }}">

                            @foreach($group->teams as $team)
                                <div wire:key="team-{{ $team->id }}" wire:sortable-group.item="{{ $team->id }}">
                                    <div class="card card-info card-outline">
                                        <div class="card-header">
                                            <h5 class="card-title ">{{$team->title}}</h5>
                                            <div class="card-tools ">
                                                <a href="#" class="btn btn-tool btn-link"># {{$team->id}}</a>
                                                <a wire:click="removeCard({{$team->id}})" class="btn btn-tool"><i
                                                        class="fas fa-trash-alt"></i></a>
                                                {{--                                                <a href="#" id="" class="btn btn-tool">--}}
                                                {{--                                                    <i class="fas fa-pen"></i>--}}
                                                {{--                                                </a>--}}
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            @endforeach
                            <a data-fancybox href="#addCard" style="cursor:pointer;">Добавить</a>
                        </div>


                        <div style="display: none; width: 95%;" id="addTeams" class="fancybox dark-mode">


                            <div class="col-md-12">
                                <div class="card card-info">
                                    <div class="card-header">
                                        <h3 class="card-title">Создание нового сотрудника</h3>
                                    </div>
                                    @if(count($errors) > 0)
                                        <div class="alert alert-danger" role="alert">
                                            <ul>
                                                @foreach($errors->all() as $error)
                                                    <li>{{$error}}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif
                                    <div class="card-body">

                                        <!--title-->
                                        <div class="form-group">
                                            <label>Отображение в карточке</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i
                                                            class="fas fa-id-card-alt"></i></span>
                                                </div>
                                                <input wire:model.defer="title" type="text" class="form-control"
                                                       placeholder="title">
                                                <input wire:model.defer="group_id" type="number" class="form-control"
                                                       placeholder="id группы">

                                            </div>
                                            <!-- /.input group -->
                                        </div>
                                        <!-- /.form group -->
                                        <!--FirstName-->
                                        <div class="form-group">
                                            <label>Заполните информацил о сотруднике</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                        <span class="input-group-text">
                                                            <i class="fas fa-user"></i>
                                                        </span>
                                                </div>
                                                <input wire:model.defer="FirstName" type="text"
                                                       class="form-control"
                                                       placeholder="Имя" required>
                                            </div>
                                            <!-- /.input group -->
                                        </div>
                                        <!-- /.form group -->
                                        <!-- LastName -->
                                        <div class="form-group">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                        <span class="input-group-text"><i
                                                                class="fas fa-user"></i></span>
                                                </div>
                                                <input wire:model.defer="LastName" type="text"
                                                       class="form-control"
                                                       placeholder="Фамилия">
                                            </div>
                                            <!-- /.input group -->
                                        </div>
                                        <!-- /.form group -->
                                        <!--Patronymic-->
                                        <div class="form-group">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                        <span class="input-group-text"><i
                                                                class="fas fa-user"></i></span>
                                                </div>
                                                <input wire:model.defer="Patronymic" type="text"
                                                       class="form-control" placeholder="Отчество">
                                            </div>
                                            <!-- /.input group -->
                                        </div>
                                        <!-- Post -->
                                        <div class="form-group">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                        <span class="input-group-text"><i
                                                                class="fas fa-address-card"></i></span>
                                                </div>
                                                <input wire:model.defer="Post" type="text" class="form-control"
                                                       placeholder="Должность">
                                            </div>
                                            <!-- /.input group -->
                                        </div>
                                        <!-- /.Post -->
                                        <!-- Description -->
                                        <div class="form-group">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                        <span class="input-group-text"><i
                                                                class="fas fa-audio-description"></i></span>
                                                </div>
                                                <input wire:model.defer="Description" type="text"
                                                       class="form-control" placeholder="Описание">
                                            </div>
                                            <!-- /.input group -->
                                        </div>
                                        <!-- /.Description -->
                                        <!-- Adress -->
                                        <div class="form-group">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                        <span class="input-group-text"><i
                                                                class="fas fa-map-marker-alt"></i></span>
                                                </div>
                                                <input wire:model.defer="Adress" type="text"
                                                       class="form-control"
                                                       placeholder="Адрес">
                                            </div>
                                            <!-- /.input group -->
                                        </div>
                                        <!-- /.Adress -->
                                        <!-- phone mask -->
                                        <div class="form-group">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                        <span class="input-group-text"><i
                                                                class="fas fa-phone"></i></span>
                                                </div>
                                                <input wire:model.defer="phone" type="text" class="form-control"
                                                       placeholder="Телефон">
                                            </div>
                                            <!-- /.input group -->
                                        </div>
                                        <!-- /.form group -->
                                        <!-- ServeseNumber -->
                                        <div class="form-group">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                        <span class="input-group-text"><i
                                                                class="fas fa-list-ol"></i></span>
                                                </div>
                                                <input wire:model.defer="ServeseNumber" type="text"
                                                       class="form-control"
                                                       placeholder="Сервисный номер">
                                            </div>
                                            <!-- /.input group -->
                                        </div>
                                        <!-- /.form-group -->
                                        <!-- Department -->
                                        <div class="form-group">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                        <span class="input-group-text"><i
                                                                class="fas fa-building"></i></span>
                                                </div>
                                                <input wire:model.defer="Department" type="text"
                                                       class="form-control" placeholder="Отдел">
                                            </div>
                                            <!-- /.input group -->
                                        </div>
                                        <!-- /.form-group -->
                                        <!-- Company -->
                                        <div class="form-group">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                        <span class="input-group-text"><i
                                                                class="fas fa-building"></i></span>
                                                </div>
                                                <input wire:model.defer="Company" type="text"
                                                       class="form-control"
                                                       placeholder="Компания">
                                            </div>
                                            <!-- /.input group -->
                                        </div>
                                        <!-- /.form-group -->
                                        <!-- Branch -->
                                        <div class="form-group">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                        <span class="input-group-text"><i
                                                                class="fas fa-code-branch"></i></span>
                                                </div>
                                                <input wire:model.defer="Branch" type="text"
                                                       class="form-control"
                                                       placeholder="Филиал">
                                            </div>
                                            <!-- /.input group -->
                                        </div>
                                        <!-- /.form-group -->
                                        <!-- Education -->
                                        <div class="form-group">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                        <span class="input-group-text"><i
                                                                class="fas fa-user-graduate"></i></span>
                                                </div>
                                                <input wire:model.defer="Education" type="text"
                                                       class="form-control"
                                                       placeholder="Образование">
                                            </div>
                                            <!-- /.input group -->
                                        </div>
                                        <!-- /.form-group -->
                                        <!-- Skill -->
                                        <div class="form-group">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i
                                                            class="fas fa-book-open"></i></span>
                                                </div>
                                                <input wire:model.defer="Skill" type="text" class="form-control"
                                                       placeholder="Навыки">
                                            </div>
                                            <!-- /.input group -->
                                        </div>
                                        <!-- /.form-group -->
                                        <!-- email -->
                                        <div class="form-group">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                        <span class="input-group-text"><i
                                                                class="far fa-envelope"></i></span>
                                                </div>
                                                <input wire:model.defer="email" type="email"
                                                       class="form-control"
                                                       placeholder="email">
                                            </div>
                                            <!-- /.input group -->
                                        </div>
                                        <!-- /.form-group -->

                                        <button wire:click="storeCard({{$group->id}})" onclick="closeFB()"
                                                style="cursor:pointer;">
                                            Добавить
                                        </button>
                                    </div>
                                    <!-- /.card-body -->
                                </div>
                                <!-- /.card -->
                            </div>
                        </div>

                    </div>
                </div>
            @endforeach
        </div>
    </section>
</div>

<script>
    function closeFB() {
        $.fancybox.close();
    }
</script>
{{--wire:click="storeCard({{$group->id}})"--}}

