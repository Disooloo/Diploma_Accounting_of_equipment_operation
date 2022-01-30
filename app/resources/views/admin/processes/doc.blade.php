<div style="display: none; width: 800px; color: black" id="NDA1openFormWord" class="fancybox dark-mode">
    <form action="{{route('processesFile.nda_word')}}" method="post">
        @csrf
        <div class="card card-info">
            <div class="card-header">
                <h3 class="card-title">Заявление о неразглошении</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form class="form-horizontal">
                <div class="card-body">
                    <label>Данные работодателя:</label>
                    <div class="form-group row">
                        <label for="inputGeneral_manager" class="col-sm-2 col-form-label">Генеральный
                            директор</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputGeneral_manager" name="general_manager"
                                   placeholder="ФИО генерального директора" value="@foreach($Global_param as $Global_params){{$Global_params->general_manager}}@endforeach">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="inputCity" class="col-sm-2 col-form-label">Город</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputCity" name="city"
                                   placeholder="Город в котором находится компания" value="@foreach($Global_param as $Global_params){{$Global_params->city}}@endforeach">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputPassword3" class="col-sm-2 col-form-label">Компания</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputPassword3" name="company"
                                   placeholder="ООО Название компании" value="@foreach($Global_param as $Global_params){{$Global_params->company_name}}@endforeach">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputDate" class="col-sm-2 col-form-label">Дата</label>
                        <div class="col-sm-10">
                            <input type="date" class="form-control Dismissed_team_data" id="inputDateNDA" name="date"
                                   placeholder="Дата заключение договора">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputCompany_adress" class="col-sm-2 col-form-label">Адрес компании</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputCompany_adress" name="company_adress"
                                   placeholder="Адрес компании" value="@foreach($Global_param as $Global_params){{$Global_params->company_adress}}@endforeach">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputCompany_KPP" class="col-sm-2 col-form-label">КПП работодателя</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputCompany_KPP" name="company_KPP"
                                   placeholder="КПП работодателя" value="@foreach($Global_param as $Global_params){{$Global_params->company_KPP}}@endforeach">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputCompany_INN" class="col-sm-2 col-form-label">ИНН работодателя</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputCompany_INN" name="company_INN"
                                   placeholder="ИНН" value="@foreach($Global_param as $Global_params){{$Global_params->company_INN}}@endforeach">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputCompany_chet" class="col-sm-2 col-form-label">Расчетный счет
                            работодателя</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputCompany_chet" name="company_chet"
                                   placeholder="р/счет №" value="@foreach($Global_param as $Global_params){{$Global_params->company_chet}}@endforeach">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputCompany_bink" class="col-sm-2 col-form-label">БИК работодателя</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputCompany_bink" name="company_bink"
                                   placeholder="БИК" value="@foreach($Global_param as $Global_params){{$Global_params->company_bink}}@endforeach">
                        </div>
                    </div>
                    <label>Данные сотрудника:</label>
                    <div class="form-group row">
                        <label for="inputWorker" class="col-sm-2 col-form-label">Работник</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputWorker" name="worker"
                                   placeholder=" ФИО Работника">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputWorker_pass" class="col-sm-2 col-form-label">Паспорт сотрудника</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputWorker_pass" name="worker_pass"
                                   placeholder="Паспорт сотрудника...">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputWorker_pass_time" class="col-sm-2 col-form-label">Дата выдачи
                            паспорта</label>
                        <div class="col-sm-10">
                            <input type="date" class="form-control" id="inputWorker_pass_time"
                                   name="worker_pass_time" placeholder="Паспорт выдан">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputWorker_pass_adress" class="col-sm-2 col-form-label">Адрес выдачи
                            паспорта</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputWorker_pass_adress"
                                   name="worker_pass_adress" placeholder="Адрес выдачи паспорта">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputWorker_adress" class="col-sm-2 col-form-label">Адрес сотрудника</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputWorker_adress" name="worker_adress"
                                   placeholder="Адрес сотрудника">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputWorker_straxjvka" class="col-sm-2 col-form-label">Страховка
                            сотрудника</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputWorker_straxjvka"
                                   name="worker_straxjvka" placeholder="Страховое свидетельство">
                        </div>
                    </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                    <button type="submit" class="btn btn-info">Скачать</button>
                </div>
                <!-- /.card-footer -->
            </form>
        </div>
    </form>
</div> <!-- Договор о неразглошение конф информации -->
<div style="display: none; width: 800px; color: black" id="Vacation1OpenFormWord" class="fancybox dark-mode">
    <form action="{{route('processesFile.vacation')}}" method="post">
        @csrf
        <div class="card card-info">
            <div class="card-header">
                <h3 class="card-title">Заявление на получение отпуска</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form class="form-horizontal">
                <div class="card-body">
                    <label>Данные работодателя:</label>
                    <div class="form-group row">
                        <label for="inputGeneral_manager" class="col-sm-2 col-form-label">Генеральный
                            директор</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputGeneral_manager" name="general_manager"
                                   placeholder="ФИО генерального директора" value="@foreach($Global_param as $Global_params){{$Global_params->general_manager}}@endforeach">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="inputPassword3" class="col-sm-2 col-form-label">Компания</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputPassword3" name="company"
                                   placeholder="ООО Название компании" value="@foreach($Global_param as $Global_params){{$Global_params->company_name}}@endforeach">
                        </div>
                    </div>


                    <label>Данные сотрудника:</label>
                    <div class="form-group row">
                        <label for="inputWorker" class="col-sm-2 col-form-label">Данные о сотруднике</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputWorker" name="worker"
                                   placeholder="Иванов И.И">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputWorkePost" class="col-sm-2 col-form-label">Должность</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputWorkePost" name="worker_post"
                                   placeholder="Должность сотрудника">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputDateStart" class="col-sm-2 col-form-label">Начало отпуска
                        </label>
                        <div class="col-sm-10">
                            <input type="date" class="form-control" id="inputDateStart"
                                   name="dateStart" placeholder="Дата начало отпуска">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="inputDateEND" class="col-sm-2 col-form-label">Конец отпуска</label>
                        <div class="col-sm-10">
                            <input type="date" class="form-control" id="inputDateEND" name="dateEND"
                                   placeholder="Дата окончание отпуска">
                        </div>
                    </div>


                    <div class="form-group row" style="display: none;">
                        <input type="date"  class="form-control Dismissed_team_data" id="Dismissed_team_data_Vacation" name="date">
                    </div>

                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                    <button type="submit" class="btn btn-info">Скачать</button>
                </div>
                <!-- /.card-footer -->
            </form>
        </div>
    </form>
</div> <!-- Заявление на отпуск-->


<script>
    document.getElementById('inputDateNDA').valueAsDate = new Date();
    document.getElementById('Dismissed_team_data_Vacation').valueAsDate = new Date();
</script>

