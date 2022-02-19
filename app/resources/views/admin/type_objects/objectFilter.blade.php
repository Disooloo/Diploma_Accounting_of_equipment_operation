<div class="card card-primary card-outline">
    <div class="card-body box-profile">
        <h3 class="profile-username text-center">Новигация</h3>

        <div class="btn-group btn-group-toggle mt-3" data-toggle="buttons">
            <label class="btn btn-secondary active mr-3">
                <input wire:click="editOn" type="radio" name="options" id="option_a1" autocomplete="off" checked> Создание обьекта
            </label>
            <label class="btn btn-secondary">
                <input wire:click="editoff" type="radio" name="options" id="option_a2" autocomplete="off"> Привязка к обьекту
            </label>
        </div>

    </div><!-- /.card-body -->
</div>
