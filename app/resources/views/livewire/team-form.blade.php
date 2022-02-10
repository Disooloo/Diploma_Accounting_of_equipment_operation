<section class="content">

    <div class="card card-solid">
        <div class="card-body pb-0">
            <div class="row">

                @foreach($teams as $team)
                    <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch flex-column">
                        <div class="card bg-light d-flex flex-fill">
                            <div class="card-header text-muted border-bottom-0">
                                {{$team->Post}}
                            </div>
                            <div class="card-body pt-0">
                                <div class="row">
                                    <div class="col-7">
                                        <h2 class="lead"><b>{{$team->FirstName}} {{$team->LastName}}</b></h2>
                                        <p class="text-muted text-sm"><b>Описание: </b> {{$team->Description}} </p>
                                        <ul class="ml-4 mb-0 fa-ul text-muted">
                                            <li class="small"><span class="fa-li"><i
                                                        class="fas fa-lg fa-building"></i></span> Адрес:
                                                <span>{{$team->Adress}}</span>
                                            </li>
                                            <li class="small"><span class="fa-li"><i
                                                        class="fas fa-lg fa-phone"></i></span>Телефон:
                                                <a href="tel:{{$team->Phone}}"> {{$team->Phone}}</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-5 text-center">
                                        <img src="{{$team->Avatar}}" alt="user-avatar"
                                             class="img-circle img-fluid">
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <div class="text-right">
                                    <a href="#" class="btn btn-sm bg-teal">
                                        <i class="fas fa-comments"></i>
                                    </a>
                                    <a href="{{route('team.show', $team->id)}}" class="btn btn-sm btn-primary">
                                        <i class="fas fa-user"></i> Просмотреть
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </div>
    <!-- /.card-body -->
    <div class="card-footer">
        <nav aria-label="Contacts Page Navigation">
            {{$teams->links()}}
        </nav>
    </div>
    <!-- /.card-footer -->
    </div>
</section>


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

                    <!--FirstName-->
                    <div class="form-group">
                        <label>Заполните информацил о сотруднике</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                                        <span class="input-group-text">
                                                            <i class="fas fa-user"></i>
                                                        </span>
                            </div>
                            <input wire:model="FirstName" type="text"
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
                            <input wire:model="LastName" type="text"
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
                            <input wire:model="Patronymic" type="text"
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
                            <input wire:model="Post" type="text" class="form-control"
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
                            <input wire:model="Description" type="text"
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
                            <input wire:model="Adress" type="text"
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
                            <input wire:model="phone" type="text" class="form-control"
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
                            <input wire:model="ServeseNumber" type="text"
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
                            <input wire:model="Department" type="text"
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
                            <input wire:model="Company" type="text"
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
                            <input wire:model="Branch" type="text"
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
                            <input wire:model="Education" type="text"
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
                            <input wire:model="Skill" type="text" class="form-control"
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
                            <input wire:model="email" type="email"
                                   class="form-control"
                                   placeholder="email">
                        </div>
                        <!-- /.input group -->
                    </div>
                    <!-- /.form-group -->

                    <button wire:click="add"
                            style="cursor:pointer;">
                        Добавить
                    </button>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
    </div>

