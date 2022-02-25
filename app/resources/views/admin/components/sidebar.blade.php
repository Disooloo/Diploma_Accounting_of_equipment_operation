<?
$references = [
    "team" => "Сотрудники",
    "company" => "Компании",
    "branches" => "Филиалы",
    "location" => "Местоположение",
    "status" => "Статусы",
    "workTime" => "График работы сотрудников",
    "organizations" => "Организации",
    "view_object" => "Виды обьектов",
    "type_object" => "Типы обьектов",
    "type_work" => "Типы работ",
    'admins' => "Пользователи",
    'mObject' => "Модели обьектов",
]

?>

<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        @if(\Illuminate\Support\Facades\Auth::user())
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="image">
                    <img src="{{ \Illuminate\Support\Facades\Auth::user()->img }}" class="img-circle elevation-2"
                         alt="User Image">
                </div>
                <div class="info">
                    <a href="{{route('my_profiles_user')}}"
                       class="d-block">{{ \Illuminate\Support\Facades\Auth::user()->name }}</a>
                </div>
            </div>
        @else
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">

                <div class="info">
                    <a href="{{route('my_profiles_user')}}"
                       class="d-block">Вы не авторизованны</a>
                </div>
            </div>
        @endif

    <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->
                <li class="nav-item menu-close">
                    <a href="#" class="nav-link">
                        <i class="fas fa-home mr-2"></i>
                        <p>
                            Главное
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="#" class="nav-link active">
                                {{-- <i class="far home nav-icon mr-2"></i> --}}
                                <i class="fas fa-home mr-2"></i>
                                <p>Рабочая область</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="fas fa-desktop mr-2"></i>
                                {{-- <i class="far fa-circle nav-icon"></i> --}}
                                <p>Объекты</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="fas fa-tools mr-2"></i>
                                <p>Ремонты</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="fas fa-monument mr-2"></i>
                                <p>Перемещения</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="fas fa-briefcase mr-2"></i>
                                <p>Работы</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('work_time.index')}}"
                               class="nav-link {{ request()->routeIs('work_time.index') ? 'active' : '' }}">
                                <i class="fas fa-chart-bar mr-2 "></i>
                                <p>{{$references['workTime']}}</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item menu-close">
                    <a href="#" class="nav-link @if($references){'active'} @endif">
                        <i class="fas fa-list mr-2"></i>
                        {{-- <i class="nav-icon fas fa-tachometer-alt"></i> --}}
                        <p>
                            Справочники
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('company.index')}}"
                               class="nav-link  {{ request()->routeIs('company.index') ? 'active' : '' }}">
                                <i class="far fa-building mr-2"></i>
                                <p>{{$references['company']}}</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('branches.index')}}"
                               class="nav-link {{ request()->routeIs('branches.index') ? 'active' : '' }}">
                                <i class="fas fa-code-branch mr-2"></i>
                                <p>{{$references['branches']}}</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('location.index')}}"
                               class="nav-link  {{ request()->routeIs('location.index') ? 'active' : '' }}">
                                <i class="fas fa-search-location mr-2"></i>
                                <p>{{$references['location']}}</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('status.index')}}"
                               class="nav-link {{ request()->routeIs('status.index') ? 'active' : '' }}">
                                <i class="fas fa-tag mr-2"></i>
                                <p>{{$references['status']}}</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('team.index') }}"
                               class="nav-link {{ request()->routeIs('team.index') ? 'active' : '' }}">
                                <i class="fas fa-users mr-2"></i>
                                {{--                                <p>Сотрудники</p>--}}
                                <p>{{$references['team']}}</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('organizations')}}"
                               class="nav-link {{ request()->routeIs('organizations') ? 'active' : '' }}">
                                <i class="far fa-building mr-2"></i>
                                <p>{{$references['organizations']}}</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('view_object')}}"
                               class="nav-link {{ request()->routeIs('view_object') ? 'active' : '' }}">
                                <i class="fas fa-object-group mr-2"></i>
                                <p>{{$references['view_object']}}</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('type_object')}}"
                               class="nav-link {{ request()->routeIs('type_object') ? 'active' : '' }}">
                                <i class="fas fa-vector-square mr-2"></i>
                                <p>{{$references['type_object']}}</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('model-object')}}" class="nav-link {{ request()->routeIs('model-object') ? 'active' : '' }}">
                                <i class="fab fa-buromobelexperte mr-2"></i>
                                <p>{{$references['mObject']}}</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('type_work')}}" class="nav-link {{ request()->routeIs('type_work') ? 'active' : '' }}">
                                <i class="fas fa-laptop-house mr-2"></i>
                                <p>{{$references['type_work']}}</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('full_user_adm')}}" class="nav-link {{ request()->routeIs('full_user_adm') ? 'active' : '' }}">
                                <i class="fas fa-user mr-2"></i>
                                <p>{{$references['admins']}}</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="" class="nav-link">
                        <i class="far fa-newspaper mr-2"></i>
                        <p>
                            Новости
                            <span class="right badge badge-danger">New</span>
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="" class="nav-link">
                        <i class="fas fa-info mr-2"></i>
                        <p>
                            Вики
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('processes.index')}}"
                       class="nav-link {{ request()->routeIs('processes.index') ? 'active' : '' }}">
                        <i class="fas fa-file-alt mr-2"></i>
                        <p>
                            Процессы
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('global_settings.index')}}"
                       class="nav-link {{ request()->routeIs('global_settings.index') ? 'active' : '' }}">
                        <i class="fas fa-cogs"></i>
                        <p>
                            Глобальные параметры
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>


