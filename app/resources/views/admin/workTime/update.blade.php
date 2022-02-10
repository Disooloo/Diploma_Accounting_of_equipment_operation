@extends('layouts.adm_layout')
@section('title', 'График смен')
@section('content')

@section('custom_css')
    <style>
        .in_d{
            width: 30px;
            color: black;
        }
    </style>
@endsection

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
                                    <h1 class="card-header">Вы редактируете {{$team['LastName']}} </h1>
                                    <div class="table-responsive">
                                        <form action="{{route('work_time.update', $wTime['id'])}}" method="POST">
                                            @csrf
                                            @method("PUT")
                                            <table class="table table-bordered table-striped table-hover">
                                                <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Сотрудник</th>
                                                    <th>1</th>
                                                    <th>2</th>
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
                                                </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>{{$wTime['id']}}</td>
                                                        <td>
                                                            <select name="name_team"
                                                                    class="form-control select2bs4 select2-hidden-accessible"
                                                                    style="width: 100px;" data-select2-id="17" tabindex="-1"
                                                                    aria-hidden="true">
                                                                @foreach($team as $teams)
                                                                    <option
                                                                        value="{{$teams->LastName}} {{$teams->FirstName}} {{$teams->Patronymic}}">{{$teams['LastName']}}  {{$teams['FirstName']}} {{$teams['Patronymic']}}
                                                                    </option>
                                                                @endforeach
                                                            </select>
                                                        </td>
                                                        <td><input class="input-group in_d" min="0" max="1"  type="number" name="d1" value="{{$wTime['d1']}}"></td>
                                                        <td><input class="input-group in_d" min="0" max="1"  type="number" name="d2" value="{{$wTime['d2']}}"></td>
                                                        <td><input class="input-group in_d" min="0" max="1"  type="number" name="d3" value="{{$wTime['d3']}}"></td>
                                                        <td><input class="input-group in_d" min="0" max="1"  type="number" name="d4" value="{{$wTime['d4']}}"></td>
                                                        <td><input class="input-group in_d" min="0" max="1"  type="number" name="d5" value="{{$wTime['d5']}}"></td>
                                                        <td><input class="input-group in_d" min="0" max="1"  type="number" name="d6" value="{{$wTime['d6']}}"></td>
                                                        <td><input class="input-group in_d" min="0" max="1"  type="number" name="d7" value="{{$wTime['d7']}}"></td>
                                                        <td><input class="input-group in_d" min="0" max="1"  type="number" name="d8" value="{{$wTime['d8']}}"></td>
                                                        <td><input class="input-group in_d" min="0" max="1"  type="number" name="d9" value="{{$wTime['d9']}}"></td>
                                                        <td><input class="input-group in_d" min="0" max="1"  type="number" name="d10" value="{{$wTime['d10']}}"></td>
                                                        <td><input class="input-group in_d" min="0" max="1"  type="number" name="d11" value="{{$wTime['d11']}}"></td>
                                                        <td><input class="input-group in_d" min="0" max="1"  type="number" name="d12" value="{{$wTime['d12']}}"></td>
                                                        <td><input class="input-group in_d" min="0" max="1"  type="number" name="d13" value="{{$wTime['d13']}}"></td>
                                                        <td><input class="input-group in_d" min="0" max="1"  type="number" name="d14" value="{{$wTime['d14']}}"></td>
                                                        <td><input class="input-group in_d" min="0" max="1"  type="number" name="d15" value="{{$wTime['d15']}}"></td>
                                                        <td><input class="input-group in_d" min="0" max="1"  type="number" name="d16" value="{{$wTime['d16']}}"></td>
                                                        <td><input class="input-group in_d" min="0" max="1"  type="number" name="d17" value="{{$wTime['d17']}}"></td>
                                                        <td><input class="input-group in_d" min="0" max="1"  type="number" name="d18" value="{{$wTime['d18']}}"></td>
                                                        <td><input class="input-group in_d" min="0" max="1"  type="number" name="d19" value="{{$wTime['d19']}}"></td>
                                                        <td><input class="input-group in_d" min="0" max="1"  type="number" name="d20" value="{{$wTime['d20']}}"></td>
                                                        <td><input class="input-group in_d" min="0" max="1"  type="number" name="d21" value="{{$wTime['d21']}}"></td>
                                                        <td><input class="input-group in_d" min="0" max="1"  type="number" name="d22" value="{{$wTime['d22']}}"></td>
                                                        <td><input class="input-group in_d" min="0" max="1"  type="number" name="d23" value="{{$wTime['d23']}}"></td>
                                                        <td><input class="input-group in_d" min="0" max="1"  type="number" name="d24" value="{{$wTime['d24']}}"></td>
                                                        <td><input class="input-group in_d" min="0" max="1"  type="number" name="d25" value="{{$wTime['d25']}}"></td>
                                                        <td><input class="input-group in_d" min="0" max="1"  type="number" name="d26" value="{{$wTime['d26']}}"></td>
                                                        <td><input class="input-group in_d" min="0" max="1"  type="number" name="d27" value="{{$wTime['d27']}}"></td>
                                                        <td><input class="input-group in_d" min="0" max="1"  type="number" name="d28" value="{{$wTime['d28']}}"></td>
                                                        <td><input class="input-group in_d" min="0" max="1"  type="number" name="d29" value="{{$wTime['d29']}}"></td>
                                                        <td><input class="input-group in_d" min="0" max="1"  type="number" name="d30" value="{{$wTime['d30']}}"></td>
                                                        <td><input class="input-group in_d" min="0" max="1"  type="number" name="d31" value="{{$wTime['d31']}}"></td>
                                                    </tr>
                                            </table>
                                            <input type="submit" value="Отправить" class="btn btn-success">
                                        </form>
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
