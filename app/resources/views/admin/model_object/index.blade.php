@extends('layouts.adm_layout')
@section('title', 'Модель обьектов')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <div class="callout callout-info ">
            <h5><i class="fas fa-info"></i> Подсказка:</h5>
            Таблица объектов учитываемых в организации. К объекту можно привязать другой объект во вкладке "Содержимое". Для объектов можно вести учет ремонтов, перемещений, работ. Для этого в соответствующей вкладке создаётся новая запись. К объекту можно прикрепить изображения и файлы а так же посмотреть историю изменения свойств. В меню "Печать" можно распечатать инвентарную этикетку и карточку объекта.
        </div>
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Модель обьектов</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Главная</a></li>
                            <li class="breadcrumb-item active">Модель обьектов</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
        <!-- Main content -->
        @livewire("model-live")
    </div>
    <!-- /.content-wrapper -->
@endsection
