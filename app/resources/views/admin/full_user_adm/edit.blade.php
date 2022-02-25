<div class="card card-header card card-primary card-outline card-blue col-md-6">
    <div class="card card-warning">
        <div class="card-header">
            <h3 class="card-title">Редактирование администратора</h3>
        </div>
        <div class="card-body">
            <div class="card-body">
                <!-- title -->
                <div class="form-group">
                    <label>Имя</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                                                    <span class="input-group-text"> <i
                                                            class="fas fa-heading"></i> </span>
                        </div>
                        <input wire:model="name" type="text" class="form-control">
                    </div>
                    <!-- /.input group -->
                </div>
                <!-- /.form group -->

                <!-- email -->
                <div class="form-group">
                    <label>Email</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                                                        <span class="input-group-text"><i
                                                                class="fas fa-file"></i></span>
                        </div>
                        <input wire:model="email" type="email"
                               class="form-control"/>
                    </div>
                    <!-- /.input group -->
                </div>
                <!-- /.form group -->



                <!-- img -->
                <div class="form-group">
                    <label>Картинка</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i
                                                    class="fas fa-file"></i></span>
                        </div>
                        <input wire:model="img" type="text"
                               class="form-control"/>
                    </div>
                    <!-- /.input group -->
                </div>
                <!-- /.form group -->

                <!-- role -->
                <div class="form-group">
                    <label>Роль</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i
                                                    class="fas fa-file"></i></span>
                        </div>
                        <input wire:model="is_admin" type="number" maxlength="1" min="0" max="1"
                               class="form-control"/>
                    </div>
                    <!-- /.input group -->
                </div>
                <!-- /.form group -->

                <!-- block_login -->
                <div class="form-group">
                    <label>Блокировака входа</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i
                                                    class="fas fa-file"></i></span>
                        </div>
                        <input wire:model="dop1_boolean" type="number" maxlength="1"  min="0" max="1"
                               class="form-control"/>
                    </div>
                    <!-- /.input group -->
                </div>
                <!-- /.form group -->


            </div>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card-body -->
    <div class="card-footer">
        <button wire:click="update" type="submit" class="btn btn-info">Редактировать
        </button>
        <button wire:click="add_back" type="submit" class="btn btn-warning">Назад</button>
    </div>
</div>

<div class="col-md-6">
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



