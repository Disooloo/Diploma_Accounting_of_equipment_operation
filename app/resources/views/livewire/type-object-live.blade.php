<section class="content">
    <div class="container-fluid">
        <div class="row">

            @if(!$sView)
                <div class="col-md-6"><!-- Profile Image -->

                    @include('admin.type_objects.objectFilter')

                    <div class="card card-primary card-outline">
                        <div class="card-body box-profile">
                            @if($createData)
                                <h3 class="profile-username text-center" id="addpost">Создание записи</h3>
                                @include('admin.type_objects.createT')
                            @else
                                <h3 class="profile-username text-center" id="addpost">Редактирование записи</h3>
                                @include('admin.type_objects.editT')
                            @endif
                        </div><!-- /.card-body -->
                    </div><!-- /.card -->


                </div><!-- /.col -->
               
            @endif
        <!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</section>

