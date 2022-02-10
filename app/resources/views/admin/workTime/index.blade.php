@extends('layouts.adm_layout')
@section('title', 'График смен')

@section('content')


    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <div class="callout callout-info ">
            <h5><i class="fas fa-info"></i> Подсказка:</h5>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex, hic.
        </div>
        <div class="card card-default collapsed-card container col-md-12">
            <div class="card-header ">
                <h3 class="card-title">Параметры</h3>

                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                        <i class="fas fa-plus"></i>
                    </button>
                </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Поиск...</label>
                            <form action="post">
                                <div class="input-group">
                                    <input type="search" class="form-control form-control-lg" placeholder="...">
                                    <div class="input-group-append">
                                        <button type="submit" class="btn btn-lg btn-default">
                                            <i class="fa fa-search"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Какой месяц ?</label>
                            <select class="form-control select2 select2-hidden-accessible" style="width: 100%;"
                                    data-select2-id="9" tabindex="-1" aria-hidden="true">

                                @foreach($mon as $mons)
                                    <option>{{$mons->title}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="col-6">
                        <a data-fancybox href="#add" class="btn btn-success float-left">Создать</a>
                    </div>
                    <div class="col-6">
                        <input type="submit" value="Применить фильтр" class="btn btn-info float-right">
                    </div>
                </div>
            </div>

            <!-- /.card-body -->
        </div>

        <!-- Main content -->

        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card card-primary card-outline">

                            <div class="card-body">
                                <div class="tab-content">
                                    <h1 class="card-header">График сотрудников на Январь 2022 </h1>
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-striped table-hover">
                                            <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Сотрудник</th>
                                                <th>1</th>
                                                <th>3</th>
                                                <th>4</th>
                                                <th>5</th>
                                                <th>6</th>
                                                <th>7</th>
                                                <th>8</th>
                                                <th>9</th>
                                                <th>10</th>
                                                <th>11</th>
                                                <th>12</th>
                                                <th>13</th>
                                                <th>14</th>
                                                <th>15</th>
                                                <th>16</th>
                                                <th>17</th>
                                                <th>18</th>
                                                <th>19</th>
                                                <th>20</th>
                                                <th>21</th>
                                                <th>22</th>
                                                <th>23</th>
                                                <th>24</th>
                                                <th>25</th>
                                                <th>26</th>
                                                <th>27</th>
                                                <th>28</th>
                                                <th>29</th>
                                                <th>30</th>
                                                <th>31</th>
                                                <th>Действие</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($wTime as $wTimes)
                                                <tr>
                                                    <td>{{$wTimes->id}}</td>
                                                    <td>{{$wTimes->name_team}}</td>
                                                    <td>{{$wTimes->d1}}</td>
                                                    <td>{{$wTimes->d2}}</td>
                                                    <td>{{$wTimes->d3}}</td>
                                                    <td>{{$wTimes->d4}}</td>
                                                    <td>{{$wTimes->d5}}</td>
                                                    <td>{{$wTimes->d6}}</td>
                                                    <td>{{$wTimes->d7}}</td>
                                                    <td>{{$wTimes->d8}}</td>
                                                    <td>{{$wTimes->d9}}</td>
                                                    <td>{{$wTimes->d10}}</td>
                                                    <td>{{$wTimes->d11}}</td>
                                                    <td>{{$wTimes->d12}}</td>
                                                    <td>{{$wTimes->d13}}</td>
                                                    <td>{{$wTimes->d14}}</td>
                                                    <td>{{$wTimes->d15}}</td>
                                                    <td>{{$wTimes->d16}}</td>
                                                    <td>{{$wTimes->d17}}</td>
                                                    <td>{{$wTimes->d18}}</td>
                                                    <td>{{$wTimes->d19}}</td>
                                                    <td>{{$wTimes->d20}}</td>
                                                    <td>{{$wTimes->d21}}</td>
                                                    <td>{{$wTimes->d22}}</td>
                                                    <td>{{$wTimes->d23}}</td>
                                                    <td>{{$wTimes->d24}}</td>
                                                    <td>{{$wTimes->d25}}</td>
                                                    <td>{{$wTimes->d26}}</td>
                                                    <td>{{$wTimes->d27}}</td>
                                                    <td>{{$wTimes->d28}}</td>
                                                    <td>{{$wTimes->d29}}</td>
                                                    <td>{{$wTimes->d30}}</td>
                                                    <td>
                                                        <a href="{{route('work_time.edit', $wTimes->id)}}" class="btn btn-success mb-3"><i
                                                                class="fas fa-pen "></i></a>
                                                        <form action=""
                                                              method="POST">
                                                            @csrf
                                                            @method("DELETE")
                                                            <button type="submit" class="btn btn-danger"><i
                                                                    class="fas fa-trash-alt"></i></button>
                                                        </form>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </table>
                                    </div>

                                </div>
                                <!-- /.tab-content -->
                            </div><!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>


        <!-- /.content -->
        <script src="http://code.jquery.com/jquery.min.js"></script>

        <div style="display: none; width: 50%; height: 50%;" id="add" class="fancybox dark-mode">
            <form class="form-horizontal" action="{{route('work_time.store')}}" method="post">
                @csrf
                <div class="form-group">
                    <label>Сотрудники</label>
                    <select name="name_team"
                            class="form-control select2bs4 select2-hidden-accessible"
                            style="width: 100%;" data-select2-id="17" tabindex="-1"
                            aria-hidden="true">
                        @foreach($team as $teams)
                            <option
                                value="{{$teams->LastName}}">{{$teams->LastName}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label>На какой месяц</label>
                    <select name="dop1"
                            class="form-control select2bs4 select2-hidden-accessible"
                            style="width: 100%;" data-select2-id="17" tabindex="-1"
                            aria-hidden="true">
                            @foreach($mon as $mons)
                                <option
                                    value="{{$mons->title}}">{{$mons->title}}</option>
                            @endforeach
                    </select>
                </div>
                <input type="hidden" name="general_manager" value="@foreach($gparams as $a) {{$a->general_manager}} @endforeach">
                <input type="submit" class="btn btn-success" value="Отправить">
            </form>
        </div>
@endsection
