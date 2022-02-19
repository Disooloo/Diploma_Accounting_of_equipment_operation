
<section class="content">
    @include('admin.type_work.search')

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <div class="card card-primary card-outline">
                    <div class="card-body box-profile">
                        @if($createData)
                            <h3 class="profile-username text-center">Создание записи</h3>
                            @include('admin.type_work.create')
                        @else
                            <h3 class="profile-username text-center" id="addpost">Редактирование записи</h3>
                            @include('admin.type_objects.editT')
                        @endif
                    </div><!-- /.card-body -->
                </div><!-- /.card -->

            </div><!-- /.col -->
            <div class="col-md-6">
                <div class="card-header card card-primary card-outline ">
                    @if ($works_count >= 1)
                        @foreach($works as $work)
                            <div class="card card-blue collapsed-card col-md-12 ml-4 mr-4 mt-1"
                                 style="transition: all 0.15s ease 0s; height: inherit; width: inherit;">
                                <div class="card-header"><h3 class="card-title">#{{$work->id}} {{$work->title}}</h3>
                                    <div class="card-tools">
                                        <button type="button" class="btn btn-tool" data-card-widget="collapse"
                                                data-source="widgets.html"
                                                data-source-selector="#card-refresh-content"
                                                data-load-on-init="false"><i
                                                class="fas fa-plus"></i></button>
                                        <button type="button" wire:click="edit({{$work->id}})"
                                                class="btn btn-tool">
                                            <i class="fas fa-pen "></i></button>
                                        <button wire:click="remove({{$work->id}})" type="button"
                                                class="btn btn-tool" data-card-widget="remove"><i
                                                class="fas fa-times"></i></button>
                                    </div><!-- /.card-tools -->
                                </div><!-- /.card-header -->
                                <div class="card-body">
                                    <span style="border-bottom: 3px solid #3F6791">{{$work->description}}</span>
                                </div><!-- /.card-body -->
                            </div>
                        @endforeach
                        {{$works->links()}}
                    @else
                        <p>У вас нет записей.</p>
                    @endif
                </div>
            </div>

        </div>
    </div>
    <!-- /.col -->
    </div><!-- /.container-fluid -->
</section>

