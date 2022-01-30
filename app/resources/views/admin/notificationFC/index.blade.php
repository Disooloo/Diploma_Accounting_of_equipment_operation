@extends('layouts.adm_layout')
@section('title', 'Увидомление')

@section('content')
    <div class="content-wrapper">
        <div class="callout callout-info">
            <h5><i class="fas fa-info"></i> Подсказка:</h5>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut eum incidunt iste itaque maiores officia qui
            quibusdam quis rerum sapiente!
        </div>
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Увидомление</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route('home')}}">Главная</a></li>
                            <li class="breadcrumb-item active">Увидомление</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
        <!-- Main content -->
        <div class="card">
            <h1 class="cm-header ml-3 mt-2">Всего увидомлений: {{$notifications_count}} | На странице: {{$notifications->count()}}</h1>
            <div class="row mt-3 ml-3 mr-3">
                @foreach($notifications as $notification)
                    <div class="col-md-3">
                        <div class="card card-primary collapsed-card">
                            <div class="card-header">
                                <h3 class="card-title">#{{$notification->id}} {{$notification->title}}</h3>

                                <div class="card-tools" style="display: flex;">
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse"><i
                                            class="fas fa-plus"></i>
                                    </button>
                                    <form id="form" action="{{route('notification.destroy', $notification['id'] )}}"
                                          method="post">
                                        @csrf
                                        @method("DELETE")
                                        <button type="submit" class="btn btn-tool" data-card-widget="collapse1"><i
                                                class="fas fa-trash-alt"></i>
                                        </button>
                                    </form>
                                </div>
                                <!-- /.card-tools -->
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body" style="display: none;">
                                {{$notification->description}}
                                <div class="dropdown-divider"></div>
                                <p>Созданно: {{$notification->create}}</p>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
            @endforeach


            <!-- /.col -->
            </div>
            <div class="links mr-3"  >
                {{$notifications->links()}}
            </div>

        </div>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

@section('custom_js')
    <script>

    </script>
@endsection
@endsection
