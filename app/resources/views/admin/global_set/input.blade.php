<div class="card card-blue mt-3">
    <div class="card card-info">
        <div class="card-header">
            <h3 class="card-title">Добавление глобальных настроек</h3>
        </div>
        <div class="card-body">

            <!-- general_manager -->
            <div class="form-group">
                <label>ФИО Генерального директора </label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"> <i
                                class="fas fa-heading"></i> </span>
                    </div>
                    <input wire:model="general_manager" type="text" class="form-control">
                </div>
                <!-- /.input group -->
            </div>
            <!-- /.form group -->

            <!-- img_general_manager -->
            <div class="form-group">
                <label>Фото Ген. Директора </label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"> <i
                                class="fas fa-heading"></i> </span>
                    </div>
                    <input wire:model="img_general_manager" type="text" class="form-control">
                </div>
                <!-- /.input group -->
            </div>
            <!-- /.form group -->

            <!-- city -->
            <div class="form-group">
                <label>Город </label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"> <i
                                class="fas fa-heading"></i> </span>
                    </div>
                    <input wire:model="city" type="text" class="form-control">
                </div>
                <!-- /.input group -->
            </div>
            <!-- /.form group -->

            <!-- company_name -->
            <div class="form-group">
                <label>Название компаниии </label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"> <i
                                class="fas fa-heading"></i> </span>
                    </div>
                    <input wire:model="company_name" type="text" class="form-control">
                </div>
                <!-- /.input group -->
            </div>
            <!-- /.form group -->

            <!-- company_adress -->
            <div class="form-group">
                <label>Адресс компании </label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"> <i
                                class="fas fa-heading"></i> </span>
                    </div>
                    <input wire:model="company_adress" type="text" class="form-control">
                </div>
                <!-- /.input group -->
            </div>
            <!-- /.form group -->

            <!-- company_INN -->
            <div class="form-group">
                <label>ИНН компании </label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"> <i
                                class="fas fa-heading"></i> </span>
                    </div>
                    <input wire:model="company_INN" type="number" class="form-control">
                </div>
                <!-- /.input group -->
            </div>
            <!-- /.form group -->

            <!-- company_KPP -->
            <div class="form-group">
                <label>КПП компании </label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"> <i
                                class="fas fa-heading"></i> </span>
                    </div>
                    <input wire:model="company_KPP" type="number" class="form-control">
                </div>
                <!-- /.input group -->
            </div>
            <!-- /.form group -->

            <!-- company_chet -->
            <div class="form-group">
                <label>Р/С компании </label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"> <i
                                class="fas fa-heading"></i> </span>
                    </div>
                    <input wire:model="company_chet" type="number" class="form-control">
                </div>
                <!-- /.input group -->
            </div>
            <!-- /.form group -->

            <!-- company_bink -->
            <div class="form-group">
                <label>Бинк компании </label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"> <i
                                class="fas fa-heading"></i> </span>
                    </div>
                    <input wire:model="company_bink" type="number" class="form-control">
                </div>
                <!-- /.input group -->
            </div>
            <!-- /.form group -->

            <!-- phone -->
            <div class="form-group">
                <label>Телефон</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"> <i
                                class="fas fa-heading"></i> </span>
                    </div>
                    <input wire:model="phone" id="phone" type="number" class="form-control" placeholder="79999999999">
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

