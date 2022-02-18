<div class="card card-primary card-outline">
    <div class="card-body box-profile">
        <h3 class="profile-username text-center">Фильтр по обьектам</h3>

        @if($v_obj)
            <ul class="navigation-nav">
                <li>
                    <a href="#"
                       class="active"
                    >Все записи</a>
                </li>
                @foreach ($v_obj as $category)
                    <li class="nav-item">
                        * <a href=""
                             class="active"
                        >{{ $category->title }} <sup>{{ $category->count }}</sup></a>
                    </li>
                @endforeach
            </ul>

        @else
            <span>У вас нет видов обьекта</span><a href="{{route('view_object')}}">Добавить новый
                вид</a>
        @endif

    </div><!-- /.card-body -->
</div>
