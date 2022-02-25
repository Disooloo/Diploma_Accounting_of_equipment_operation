<style>
    .formwitch {
        min-width: 900px;
        /*background: #000;*/
    }

    form {
        width: 100%;
    }

    .cardHis {
        min-width: 400px;
        margin-left: -400px;
    }

    .ffg {
        max-width: 100vw;
    }
</style>

<div style="display: flex" class="col-md-8">

    <form action="{{route('mode_object_create')}}" method="POST" class="formwitch">
        @csrf
        <div class="card card-header card card-primary card-outline card-blue col-md-6">
            <div class="card card-info">
                <div class="card-header">
                    <h3 class="card-title">Создание модели обьекта</h3>
                </div>

                <div class="card-body">
                    <div class="card-body">

                        <!-- views -->
                        <div class="form-group">
                            <label>Вид обьекта</label>
                            <div class="input-group">

                                <select name="title_view"
                                        class="form-control select2bs4 select2-hidden-accessible"
                                        style="width: 100%;" data-select2-id="17" tabindex="-1"
                                        aria-hidden="true">
                                    <option disabled selected>Не ввыбрано</option>
                                    @foreach($viewss as $vi)
                                        <option
                                            value="{{$vi->title}}"> {{$vi->title}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div> @error('views'){{ $message }}@enderror </div>
                            <!-- /.input group -->
                        </div>
                        <!-- /.form group -->

                        <!-- type -->
                        <div class="form-group">
                            <label>Тип модели</label>
                            <div class="input-group">
                                <select name="title_type"
                                        class="form-control select2bs4 select2-hidden-accessible"
                                        style="width: 100%;">
                                    <option disabled selected>Не ввыбрано</option>
                                    @foreach($typess as $type)
                                        <option
                                            value="{{$type->title}}"
                                        >{{$type->title}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div> @error('type'){{ $message }}@enderror </div>
                            <!-- /.input group -->
                        </div>
                        <!-- /.form group -->

                        <!-- title_teams -->
                        <div class="form-group">
                            <label>Сотрудник</label>
                            <div class="input-group">
                                <select name="title_teams"
                                        class="form-control select2bs4 select2-hidden-accessible"
                                        style="width: 100%;">
                                    <option disabled selected>Не ввыбрано</option>
                                    @foreach($teamss as $te)
                                        <option
                                            value="{{$te->LastName}} {{$te->FirstName}} {{$te->Patronymic}}"
                                        >{{$te->LastName}} {{$te->FirstName}} {{$te->Patronymic}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div> @error('type'){{ $message }}@enderror </div>
                            <!-- /.input group -->
                        </div>
                        <!-- /.form group -->

                        <!-- model -->
                        <div class="form-group">
                            <label>Модель</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                            <span class="input-group-text"><i
                                                    class="fas fa-file"></i></span>
                                </div>
                                <input name="title_model" type="text"
                                       class="form-control"/>
                            </div>
                            <!-- /.input group -->
                        </div>
                        <div> @error('model'){{ $message }}@enderror </div>

                        <!-- /.form group -->

                        <!-- img -->
                        <div class="form-group">
                            <label>Картинка</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-image"></i></span>
                                </div>
                                <input wire:model="img" name="object_img" type="text"
                                       class="form-control"/>
                            </div>
                            <!-- /.input group -->
                            <div> @error('img'){{ $message }}@enderror </div>
                        </div>
                        <!-- /.form group -->

                        <!-- description -->
                        <div class="form-group">
                            <label>Описание</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-file"></i></span>
                                </div>
                                <textarea name="title_description" class="form-control"> </textarea>
                            </div>
                            <!-- /.input group -->
                        </div>
                        <!-- /.form group -->
                        <div> @error('description'){{ $message }}@enderror </div>
                    </div>
                </div>
                <!-- /.card-body -->

            </div>
            <!-- /.card-body -->
            <div class="card-footer">
                <button type="submit" class="btn btn-info">Добавить
                </button>
                <button wire:click="add_back" type="submit" class="btn btn-warning">Назад</button>
            </div>
        </div>
    </form>

    <div class="cardHis">
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
</div>



