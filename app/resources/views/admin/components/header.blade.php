<!-- Preloader -->
<div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="{{asset('/dist/img/logo.png')}}" alt="Logo" height="60" width="60">
</div>

<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-dark">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
    </ul>


    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <!-- Notifications Dropdown Menu -->
        <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="#">
                <i class="far fa-bell"></i>
                <span class="badge badge-warning navbar-badge">{{$notifications_count}}</span>
            </a>

            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                <span class="dropdown-item dropdown-header"> {{$notifications_count}} Увидомлений</span>
                    <?php $i = 0 ?>
                    @foreach($notifications as $notification)
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item mb-3">
                            <i class="fas fa-envelope mr-2"></i> #{{$notification->id}} {{$notification->title}}
                            <span class="float-right text-muted text-sm">{{$notification->create}}</span>
                        </a>
                         @if (++$i == 5) <?break?> @endif
                @endforeach

                <div class="dropdown-divider"></div>
                <a href="{{route('notification.index')}}" class="dropdown-item dropdown-footer">Все увидомления</a>
            </div>

        </li>
        <li class="nav-item">
            <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                <i class="fas fa-expand-arrows-alt"></i>
            </a>
        </li>
    </ul>
</nav>
<!-- /.navbar -->
