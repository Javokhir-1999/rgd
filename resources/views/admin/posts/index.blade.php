@extends('/layouts.admin_layout')

@section('title', 'Посты')

@section('content')
	<!-- section-articles -->
	<div class="container">
	    <div class="row section-articles mb-5">
	      <div class="col-12 text-center py-3">  
	        <h5>Посты</h5>
	      </div> 
	      <div class="col-12">
	        <div class="row row-cols-1 row-cols-md-3 g-4">

	          <div class="col">
	            <div class="card h-100">
	              <img src="img/articles/1.jpg" class="card-img-top" alt="...">
	              <div class="card-body">
	                <p>
	                  <h5 class="card-title">Почему прием чистой воды так полезно</h5><br />
	                  <small class="text-muted">статья</small>
	                </p>
	                <p class="card-text">Насколько выгодно использование фильтров для воды чем питье из кулеров или постоянной покупки бутылочной воды</p>
	              </div>
	              <div class="card-footer text-end">
	                <button data-bs-toggle="modal" type="button" 
	                  class="btn btn-info btn-sm">Изменить</button>
	                  <button data-bs-toggle="modal" type="button" 
	                  class="btn btn-danger btn-sm delete-btn">Удалить</button>
	              </div>
	            </div>
	          </div>

	        </div>
	      </div>
	    </div>
    </div>
@endsection