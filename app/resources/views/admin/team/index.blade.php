@extends('layouts.adm_layout')
@section('title', 'Сотрудники')

@section('content')
	 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
			<div class="callout callout-info ">
              <h5><i class="fas fa-info"></i> Подсказка:</h5>
             Таблица сотрудников компании. Можно привязывать различное оборудование и программы к определенному сотруднику. Часто имя сотрудника используют для закрепления за ним выданного ему личного или
						мобильного оборудования, чтобы потом (например, при увольнении) было удобно отследить, что он должен вернуть.
    		</div>
			<div class="card card-default container col-md-12" >
          <div class="card-header">
            <h3 class="card-title">Фильтр</h3>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse">
                <i class="fas fa-minus"></i>
              </button>
            </div>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <div class="row">
              <div class="col-md-6">
								<div class="form-group">
                  <label>Выберите должность</label>
                  <select class="form-control select2 select2-hidden-accessible" style="width: 100%;" data-select2-id="9" tabindex="-1" aria-hidden="true">
                    <option selected="selected" data-select2-id="11"></option>
                    <option>Дизайнер</option>
                    <option disabled="disabled">Художник (disabled)</option>
                    <option>Программист</option>
                    <option>Сис. Админ</option>
                  </select>
                </div>
              </div>
							 <div class="col-md-6">
								<div class="form-group">
                  <label>Поиск контактов</label>
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
							<div class="col-md-6">
								<div class="form-group">
                  <label>Фильтр по</label>
                  <select class="form-control select2 select2-hidden-accessible" style="width: 100%;" data-select2-id="9" tabindex="-1" aria-hidden="true">
                    <option selected="selected" data-select2-id="11"></option>
                    <option>Дате добавления</option>
                    <option>Номеру телефону</option>
                  </select>
                </div>
              </div>
							
							<div class="col-md-6">
								<div class="form-group">
                  <label>Фильтр по тэгу</label>
                  <select class="form-control select2 select2-hidden-accessible" style="width: 100%;" data-select2-id="9" tabindex="-1" aria-hidden="true">
                    <option selected="selected" data-select2-id="11"></option>
                    <option>Активный</option>
                    <option>Беда </option>
                  </select>
                </div>
              </div>
								<div class="col-12">
          			<input type="submit" value="Применить фильтр" class="btn 						btn-success float-right">
        			</div>
            </div>
          </div>
					
          <!-- /.card-body -->
    </div>
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Сотрудники</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Главная</a></li>
              <li class="breadcrumb-item active">Сотрудники</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card card-solid">
        <div class="card-body pb-0">
          <div class="row">
            <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch flex-column">
              <div class="card bg-light d-flex flex-fill">
                <div class="card-header text-muted border-bottom-0">
                  Дизайнер
                </div>
                <div class="card-body pt-0">
                  <div class="row">
                    <div class="col-7">
                      <h2 class="lead"><b>Николай Персон</b></h2>
                      <p class="text-muted text-sm"><b>Описание: </b> Web Designer / UX / Graphic Artist / Coffee Lover </p>
                      <ul class="ml-4 mb-0 fa-ul text-muted">
                        <li class="small"><span class="fa-li"><i class="fas fa-lg fa-building"></i></span> Адрес: Г.Москва, ул. Перская, д. 43 </li>
                        <li class="small"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span>Телефон: <a href="tel:+79999992222"> +79999992222</a></li>
                      </ul>
                    </div>
                    <div class="col-5 text-center">
                      <img src="../../dist/img/user1-128x128.jpg" alt="user-avatar" class="img-circle img-fluid">
                    </div>
                  </div>
                </div>
                <div class="card-footer">
                  <div class="text-right">
                    <a href="#" class="btn btn-sm bg-teal">
                      <i class="fas fa-comments"></i>
                    </a>
                    <a href="#" class="btn btn-sm btn-primary">
                      <i class="fas fa-user"></i> Просмотреть
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch flex-column">
              <div class="card bg-light d-flex flex-fill">
                <div class="card-header text-muted border-bottom-0">
                  Дизайнер
                </div>
                <div class="card-body pt-0">
                  <div class="row">
                    <div class="col-7">
                      <h2 class="lead"><b>Николай Персон</b></h2>
                      <p class="text-muted text-sm"><b>Описание: </b> Web Designer / UX / Graphic Artist / Coffee Lover </p>
                      <ul class="ml-4 mb-0 fa-ul text-muted">
                        <li class="small"><span class="fa-li"><i class="fas fa-lg fa-building"></i></span> Адрес: Г.Москва, ул. Перская, д. 43 </li>
                        <li class="small"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span>Телефон: <a href="tel:+79999992222"> +79999992222</a></li>
                      </ul>
                    </div>
                    <div class="col-5 text-center">
                      <img src="../../dist/img/user1-128x128.jpg" alt="user-avatar" class="img-circle img-fluid">
                    </div>
                  </div>
                </div>
                <div class="card-footer">
                  <div class="text-right">
                    <a href="#" class="btn btn-sm bg-teal">
                      <i class="fas fa-comments"></i>
                    </a>
                    <a href="#" class="btn btn-sm btn-primary">
                      <i class="fas fa-user"></i> Просмотреть
                    </a>
                  </div>
                </div>
              </div>
            </div>
						 <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch flex-column">
              <div class="card bg-light d-flex flex-fill">
                <div class="card-header text-muted border-bottom-0">
                  Дизайнер
                </div>
                <div class="card-body pt-0">
                  <div class="row">
                    <div class="col-7">
                      <h2 class="lead"><b>Николай Персон</b></h2>
                      <p class="text-muted text-sm"><b>Описание: </b> Web Designer / UX / Graphic Artist / Coffee Lover </p>
                      <ul class="ml-4 mb-0 fa-ul text-muted">
                        <li class="small"><span class="fa-li"><i class="fas fa-lg fa-building"></i></span> Адрес: Г.Москва, ул. Перская, д. 43 </li>
                        <li class="small"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span>Телефон: <a href="tel:+79999992222"> +79999992222</a></li>
                      </ul>
                    </div>
                    <div class="col-5 text-center">
                      <img src="../../dist/img/user1-128x128.jpg" alt="user-avatar" class="img-circle img-fluid">
                    </div>
                  </div>
                </div>
                <div class="card-footer">
                  <div class="text-right">
                    <a href="#" class="btn btn-sm bg-teal">
                      <i class="fas fa-comments"></i>
                    </a>
                    <a href="#" class="btn btn-sm btn-primary">
                      <i class="fas fa-user"></i> Просмотреть
                    </a>
                  </div>
                </div>
              </div>
            </div>
						 <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch flex-column">
              <div class="card bg-light d-flex flex-fill">
                <div class="card-header text-muted border-bottom-0">
                  Дизайнер
                </div>
                <div class="card-body pt-0">
                  <div class="row">
                    <div class="col-7">
                      <h2 class="lead"><b>Николай Персон</b></h2>
                      <p class="text-muted text-sm"><b>Описание: </b> Web Designer / UX / Graphic Artist / Coffee Lover </p>
                      <ul class="ml-4 mb-0 fa-ul text-muted">
                        <li class="small"><span class="fa-li"><i class="fas fa-lg fa-building"></i></span> Адрес: Г.Москва, ул. Перская, д. 43 </li>
                        <li class="small"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span>Телефон: <a href="tel:+79999992222"> +79999992222</a></li>
                      </ul>
                    </div>
                    <div class="col-5 text-center">
                      <img src="../../dist/img/user1-128x128.jpg" alt="user-avatar" class="img-circle img-fluid">
                    </div>
                  </div>
                </div>
                <div class="card-footer">
                  <div class="text-right">
                    <a href="#" class="btn btn-sm bg-teal">
                      <i class="fas fa-comments"></i>
                    </a>
                    <a href="#" class="btn btn-sm btn-primary">
                      <i class="fas fa-user"></i> Просмотреть
                    </a>
                  </div>
                </div>
              </div>
            </div>
						 <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch flex-column">
              <div class="card bg-light d-flex flex-fill">
                <div class="card-header text-muted border-bottom-0">
                  Дизайнер
                </div>
                <div class="card-body pt-0">
                  <div class="row">
                    <div class="col-7">
                      <h2 class="lead"><b>Николай Персон</b></h2>
                      <p class="text-muted text-sm"><b>Описание: </b> Web Designer / UX / Graphic Artist / Coffee Lover </p>
                      <ul class="ml-4 mb-0 fa-ul text-muted">
                        <li class="small"><span class="fa-li"><i class="fas fa-lg fa-building"></i></span> Адрес: Г.Москва, ул. Перская, д. 43 </li>
                        <li class="small"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span>Телефон: <a href="tel:+79999992222"> +79999992222</a></li>
                      </ul>
                    </div>
                    <div class="col-5 text-center">
                      <img src="../../dist/img/user1-128x128.jpg" alt="user-avatar" class="img-circle img-fluid">
                    </div>
                  </div>
                </div>
                <div class="card-footer">
                  <div class="text-right">
                    <a href="#" class="btn btn-sm bg-teal">
                      <i class="fas fa-comments"></i>
                    </a>
                    <a href="#" class="btn btn-sm btn-primary">
                      <i class="fas fa-user"></i> Просмотреть
                    </a>
                  </div>
                </div>
              </div>
            </div>
						 <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch flex-column">
              <div class="card bg-light d-flex flex-fill">
                <div class="card-header text-muted border-bottom-0">
                  Дизайнер
                </div>
                <div class="card-body pt-0">
                  <div class="row">
                    <div class="col-7">
                      <h2 class="lead"><b>Николай Персон</b></h2>
                      <p class="text-muted text-sm"><b>Описание: </b> Web Designer / UX / Graphic Artist / Coffee Lover </p>
                      <ul class="ml-4 mb-0 fa-ul text-muted">
                        <li class="small"><span class="fa-li"><i class="fas fa-lg fa-building"></i></span> Адрес: Г.Москва, ул. Перская, д. 43 </li>
                        <li class="small"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span>Телефон: <a href="tel:+79999992222"> +79999992222</a></li>
                      </ul>
                    </div>
                    <div class="col-5 text-center">
                      <img src="../../dist/img/user1-128x128.jpg" alt="user-avatar" class="img-circle img-fluid">
                    </div>
                  </div>
                </div>
                <div class="card-footer">
                  <div class="text-right">
                    <a href="#" class="btn btn-sm bg-teal">
                      <i class="fas fa-comments"></i>
                    </a>
                    <a href="#" class="btn btn-sm btn-primary">
                      <i class="fas fa-user"></i> Просмотреть
                    </a>
                  </div>
                </div>
              </div>
            </div>
						 <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch flex-column">
              <div class="card bg-light d-flex flex-fill">
                <div class="card-header text-muted border-bottom-0">
                  Дизайнер
                </div>
                <div class="card-body pt-0">
                  <div class="row">
                    <div class="col-7">
                      <h2 class="lead"><b>Николай Персон</b></h2>
                      <p class="text-muted text-sm"><b>Описание: </b> Web Designer / UX / Graphic Artist / Coffee Lover </p>
                      <ul class="ml-4 mb-0 fa-ul text-muted">
                        <li class="small"><span class="fa-li"><i class="fas fa-lg fa-building"></i></span> Адрес: Г.Москва, ул. Перская, д. 43 </li>
                        <li class="small"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span>Телефон: <a href="tel:+79999992222"> +79999992222</a></li>
                      </ul>
                    </div>
                    <div class="col-5 text-center">
                      <img src="../../dist/img/user1-128x128.jpg" alt="user-avatar" class="img-circle img-fluid">
                    </div>
                  </div>
                </div>
                <div class="card-footer">
                  <div class="text-right">
                    <a href="#" class="btn btn-sm bg-teal">
                      <i class="fas fa-comments"></i>
                    </a>
                    <a href="#" class="btn btn-sm btn-primary">
                      <i class="fas fa-user"></i> Просмотреть
                    </a>
                  </div>
                </div>
              </div>
            </div>
             
            </div>
          </div>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
          <nav aria-label="Contacts Page Navigation">
            <ul class="pagination justify-content-center m-0">
              <li class="page-item active"><a class="page-link" href="#">1</a></li>
              <li class="page-item"><a class="page-link" href="#">2</a></li>
              <li class="page-item"><a class="page-link" href="#">3</a></li>
              <li class="page-item"><a class="page-link" href="#">4</a></li>
              <li class="page-item"><a class="page-link" href="#">5</a></li>
              <li class="page-item"><a class="page-link" href="#">6</a></li>
              <li class="page-item"><a class="page-link" href="#">7</a></li>
              <li class="page-item"><a class="page-link" href="#">8</a></li>
            </ul>
          </nav>
        </div>
        <!-- /.card-footer -->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection