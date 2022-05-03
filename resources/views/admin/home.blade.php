@extends('layouts.admin_layout')

@section('title', 'Главная')

@section('content')
	<!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12">
            <h1 class="m-0">Статистика</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- statistics -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>{{$posts_count}}</h3>

                <p>Посты</p>
              </div>
              <div class="icon">
                <i class="ion ion-document"></i>
              </div>
              <a href="#" class="small-box-footer"> Подробно<i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>{{$products_count}}</h3>

                <p>Продукты</p>
              </div>
              <div class="icon">
                <i class="ion ion-grid"></i>
              </div>
              <a href="#" class="small-box-footer">Подробно<i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>{{$orders_count}}</h3>

                <p>Онлайн заказы</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="#" class="small-box-footer">Подробно<i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>{{$media_count}}</h3>

                <p>Медиа и Фото</p>
              </div>
              <div class="icon">
                <i class="ion ion-images"></i>
              </div>
              <a href="#" class="small-box-footer">Подробно <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
        </div>
        <div class="row">
        	<div class="col-12">
	        	@if (session('success'))
	                <div class="alert alert-success p-1" role="alert">
	                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
	                    <i class="icon fa fa-check"></i>{{ session('success') }}
	                </div>
	            @endif
            </div>
        </div>
        <div class="row">
        	<div class="col-md-6">
	          <div class="card card-secondary">
	            <div class="card-header">
	              <h3 class="card-title">Баннер</h3>
	            </div>
	            <form class="form-validate" action="{{ route('banner-submit') }}"  method="POST" >
	            	@csrf
		            <div class="card-body">
		            	<div class="form-group">
			                <label for="bannerTitle">Заголовок</label>
			                <textarea id="bannerTitle" name="bannerTitle" 
			                class="form-control" maxlength="170" 
			                required rows="4" style="margin-top: 0px; margin-bottom: 0px; height: 106px;">{{$banner->title}}</textarea>
		              	</div>
			            <div class="form-group">
			                <label for="bannerDesc">Подробно</label>
			                <textarea id="bannerDesc" name="bannerDesc" 
			                class="form-control" rows="4" required maxlength="200" 
			                style="margin-top: 0px; margin-bottom: 0px; height: 106px;">{{$banner->desc}}</textarea>
			            </div>
			            <div class="form-group">
			                <label for="callTitle">Заголовок звонка</label>
			                <input type="text" id="callTitle" class="form-control" value="{{$banner->call_text}}" name="callTitle" required maxlength="110" >
		              	</div>
		              	<div class="form-group">
		                	<label>Кнопка позвонить:</label>

			                <div class="input-group">
			                    <div class="input-group-prepend">
			                    	<span class="input-group-text"><i class="fas fa-phone"></i></span>
			                    </div>
			                    <input type="phone" id="callNumber" name="callNumber" maxlength="20"  
			                    onkeyup="this.value = this.value.replace (/[^0-9+]/, '')" placeholder="+___ (__) ___ __ __" maxlength="13" 
			                    class="form-control item" value="{{$banner->call_number}}" required>
			                </div>
			                <!-- /.input group -->
	                	</div>
		            </div>
		            <!-- /.card-body -->
		            <div class="card-footer">
	                	<button type="submit" class="btn btn-primary">Сохронить</button>
	                </div>
		        </form>
	          </div>
	          <!-- /.card -->
	          <div class="card card-secondary">
	           <div class="card-header">
	              <h3 class="card-title">О Компании</h3>
	            </div>
	            <form class="form-validate" action="{{ route('about-submit') }}"  method="POST" >
	            	@csrf
		            <div class="card-body">
		              	<div class="form-group">
			                <label for="companyTitle">Заголовок Компании</label>
			                <input type="text" id="companyTitle" name="companyTitle" required class="form-control" value="{{$about->title}}" maxlength="200" >
		              	</div>
			            <div class="form-group">
			                <label for="companyDesc">Подробно о нас</label>
			                <textarea id="companyDesc" name="companyDesc" 
			                class="form-control" required rows="4" maxlength="300" 
			                style="margin-top: 0px; margin-bottom: 0px; height: 106px;">{{$about->desc}}</textarea>
			            </div>
		            </div>
	            	<!-- /.card-body -->
	            	<div class="card-footer">
	                	<button type="submit" class="btn btn-primary">Сохронить</button>
	                </div>
	            </form>
	          </div>
	          <!-- /.card -->
	        </div>
	    	<div class="col-md-6">
	         	<div class="card card-secondary">
	            	<div class="card-header">
	              		<h3 class="card-title">Основные Данные RGD</h3>
	            	</div>
	            	<form class="form-validate" action="{{ route('main-submit') }}"  method="POST" >
	            	@csrf
			            <div class="card-body">
			              	<div class="form-group">
				                <label for="adress">Адресс</label>
				                <input type="text" id="adress" name="adress" class="form-control" required value="{{$main->adress}}" maxlength="50" >
			              	</div>
			              	<div class="form-group">
				                <label for="work_time">Время работы</label>
				                <input type="text" id="work_time" name="work_time" class="form-control" required value="{{$main->work_time}}" maxlength="50" >
			             	</div>
			             	<div class="form-group">
			                  <label>Телефон 1:</label>

			                  <div class="input-group">
			                    <div class="input-group-prepend">
			                      <span class="input-group-text"><i class="fas fa-phone"></i></span>
			                    </div>
			                    <input type="phone" id="tel_one" name="tel_one" 
			                    onkeyup="this.value = this.value.replace (/[^0-9+]/, '')" placeholder="+___ (__) ___ __ __" maxlength="13" class="form-control item" value="{{$main->tel_one}}" required>
			                  </div>
			                  <!-- /.input group -->
		                	</div>
		                	<div class="form-group">
		                  		<label>Телефон 2:</label>
			                  	<div class="input-group">
				                    <div class="input-group-prepend">
				                      <span class="input-group-text"><i class="fas fa-phone"></i></span>
				                    </div>
				                     <input type="phone" id="tel_two" name="tel_two" 
				                     onkeyup="this.value = this.value.replace (/[^0-9+]/, '')" placeholder="+___ (__) ___ __ __" 
				                     maxlength="13" class="form-control item" value="{{$main->tel_two}}" >
			                  	</div>
			                  	<!-- /.input group -->
		                	</div>
			            </div>
			            <!-- /.card-body -->
			            <div class="card-footer">
		                	<button type="submit" class="btn btn-primary">Сохронить</button>
		                </div>
	            	</form>
	          	</div>
	          <!-- /.card -->
	        </div>    
	    </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
    <!-- JQVMap -->
	<script src="/admin/plugins/jqvmap/jquery.vmap.min.js"></script>
	<script src="/admin/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
 
@endsection
