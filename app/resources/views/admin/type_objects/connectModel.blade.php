<div class="card card-blue mt-3">
    <div class="card card-info">
        <div class="card-header">
            <h3 class="card-title">Привязка к обьекту обьекту</h3>
        </div>
        <div class="card-body">

            <!-- title -->
            <div class="form-group">
                <label>Название обьекта</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                                                    <span class="input-group-text"> <i
                                                            class="fas fa-heading"></i> </span>
                    </div>
                    <input wire:model="title" type="text" class="form-control">
                </div>
                <!-- /.input group -->
            </div>
            <!-- /.form group -->

            <!-- type -->
            <div class="form-group">
                <label>Тип обьекта</label>
                <select wire:model="tobject_id"
                        class="form-control select2bs4 select2-hidden-accessible"
                        style="width: 100%;" data-select2-id="17" tabindex="-1"
                        aria-hidden="true">
                    <option value="Не выбранно">Не выбранно</option>
                    @foreach($t_obj as $t_obr)
                        <option
                            value="{{$t_obr->id}}">#{{$t_obr->id}} {{$t_obr->title}}</option>
                    @endforeach
                </select>
            </div>
            <!-- /.form group -->

            <!-- description -->
            <div class="form-group">
                <label>Описание</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i
                                                                class="fas fa-file"></i></span>
                    </div>
                    <textarea wire:model="viewDescription" type="text"
                              class="form-control"></textarea>
                </div>
                <!-- /.input group -->
            </div>
            <!-- /.form group -->

            <!-- model -->
            <div class="form-group">
                <label>Модель</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                                                    <span class="input-group-text"> <i
                                                            class="fas fa-file-alt"></i> </span>
                    </div>
                    <input wire:model="model" type="text" class="form-control">
                </div>
                <!-- /.input group -->
            </div>
            <!-- /.form group -->

            <!-- img -->
            <div class="form-group">
                <label>Картинка</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                                                    <span class="input-group-text"> <i
                                                            class="fas fa-image"></i> </span>
                    </div>
                    <input wire:model="img" type="text" class="form-control">
                </div>
                <!-- /.input group -->
            </div>
            <!-- /.form group -->
            <select wire:model="team_title"
                    class="form-control select2bs4 select2-hidden-accessible"
                    style="width: 100%;" data-select2-id="17" tabindex="-1"
                    aria-hidden="true">
                <option value="Не выбранно">Не выбранно</option>
                @foreach($team as $teams)
                    <option
                        value="#{{$teams->id}} {{$teams->LastName}}{{$teams->FirstName}}{{$teams->Patronymic}}">
                        #{{$teams->id}} {{$teams->LastName}}{{$teams->FirstName}}{{$teams->Patronymic}}</option>
                @endforeach
            </select>
            <div>
                <a href="{{route('team.create')}}">Добавить сотрудника</a>
            </div>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card-body -->

    <div class="card-footer">
        <button wire:click="storeView" type="submit" class="btn btn-info ">Добавить</button>
    </div>
</div>

