<section class="content">
    <div class="card">
        <!-- Default box -->
        <div class="card-body ">
            @if($createData)
            <div class="card card-blue float-right col-md-5">
                <div class="card card-info">
                    <div class="card-header">
                        <h3 class="card-title">Добавление нового обьекта</h3>
                    </div>
                    <div class="card-body">
                        <!-- title -->
                        <div class="form-group">
                            <label>Название</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"> <i class="fas fa-heading"></i> </span>
                                </div>
                                <input wire:model="title" type="text" class="form-control">
                            </div>
                            <!-- /.input group -->
                        </div>
                        <!-- /.form group -->

                        <!-- description -->
                        <div class="form-group">
                            <label>Описание</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-audio-description"></i></span>
                                </div>
                                <textarea wire:model="description" type="text" class="form-control"></textarea>
                            </div>
                            <!-- /.input group -->
                        </div>
                        <!-- /.form group -->

                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                    <button wire:click="store" type="submit" class="btn btn-info ">Отправить</button>
                </div>
            </div>
            @else
                <div class="card card-blue float-right col-md-5">
                <div class="card card-warning">
                    <div class="card-header">
                        <h3 class="card-title">редактирование обьекта</h3>
                    </div>
                    <div class="card-body">
                        <!-- title -->
                        <div class="form-group">
                            <label>Название</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-heading"></i></span>
                                </div>
                                <input wire:model="title"  type="text" class="form-control" data-inputmask-alias="title" data-inputmask-inputformat="Название" data-mask="" inputmode="numeric">
                            </div>
                            <!-- /.input group -->
                        </div>
                        <!-- /.form group -->

                        <!-- description -->
                        <div class="form-group">
                            <label>Описание</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-audio-description"></i></span>
                                </div>
                                <textarea wire:model="description" type="text" class="form-control"></textarea>
                            </div>
                            <!-- /.input group -->
                        </div>
                        <!-- /.form group -->

                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                    <button wire:click="update" type="submit" id="cFlex" class="btn btn-info ">Редактировать</button>
                    <button wire:click="backAdd" type="button" class="btn btn-warning float-right">Вернуться к добавлению</button>
                </div>

            </div>
            @endif
        @foreach($v_obj as $v_ob)
                <div class="card card-blue  collapsed-card col-md-6">
                    <div class="card-header">
                        <h3 class="card-title"> {{$v_ob->title}}</h3>
                        <div class="card-tools">
                            <a type="button" class="btn btn-tool" data-card-widget="collapse"><i
                                    class="fas fa-plus"></i>
                            </a>
                            <a wire:click="edit({{$v_ob->id}})" type="button" class="btn btn-tool"><i
                                    class="fas fa-pen"></i>
                            </a>
                            <a wire:click="remove({{$v_ob->id}})" type="button" class="btn btn-tool"><i
                                    class="fas fa-trash-alt"></i>
                            </a>
                        </div>
                        <!-- /.card-tools -->
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body" style="display: none;">
                        {{$v_ob->description }}
                    </div>
                    <!-- /.card-body -->
                </div>
            @endforeach
        <!-- /.card-body -->
        </div>
    </div>
    <!-- /.card-body -->
    <!-- /.card -->
</section>
