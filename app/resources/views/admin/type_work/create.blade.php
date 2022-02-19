<div class="card card-blue mt-3">
    <div class="card card-info">
        <div class="card-header">
            <h3 class="card-title">Создание вида работ</h3>
        </div>
        <div class="card-body">
            <!-- title -->
            <div class="form-group">
                <label>Наименование</label>
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

            <!-- description -->
            <div class="form-group">
                <label>Описание</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i
                                class="fas fa-file"></i></span>
                    </div>
                    <textarea wire:model="description" type="text"
                              class="form-control"></textarea>
                </div>
                <!-- /.input group -->
            </div>
            <!-- /.form group -->
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card-body -->
    <div class="card-footer">
        <button wire:click="store" type="submit" class="btn btn-info ">Добавить</button>
    </div>
</div>

