@extends('backpack::layout')

@section('header')
	<section class="content-header">
	  <h1>
	    Редактировать <span class="text-lowercase">{{ $crud->entity_name }}</span>
	  </h1>
	</section>
@endsection

@section('content')
<div class="row">
	<div class="col-md-8 col-md-offset-2">
		<!-- Default box -->
		@if ($crud->hasAccess('list'))
			<a href="{{ url($crud->route) }}"><i class="fa fa-angle-double-left"></i> Вернуться в <span class="text-lowercase">{{ $crud->entity_name_plural }}</span></a><br><br>
		@endif

		  {!! Form::open(array('url' => $crud->route.'/'.$entry->getKey(), 'method' => 'put', 'files'=>$crud->hasUploadFields('update', $entry->getKey()))) !!}
		  <div class="box">
		    <div class="box-header with-border">
		      <h3 class="box-title">Редактировать</h3>
		    </div>
		    <div class="box-body row">
		      <!-- load the view from the application if it exists, otherwise load the one in the package -->
		      @if(view()->exists('vendor.backpack.crud.form_content'))
		      	@include('vendor.backpack.crud.form_content')
		      @else
		      	@include('crud::form_content', ['fields' => $crud->getFields('update', $entry->getKey())])
		      @endif
		    </div><!-- /.box-body -->
		    <div class="box-footer">

			  <button type="submit" class="btn btn-success ladda-button" data-style="zoom-in"><span class="ladda-label"><i class="fa fa-save"></i> Сохранить</span></button>
		      <a href="{{ url($crud->route) }}" class="btn btn-default ladda-button" data-style="zoom-in"><span class="ladda-label">Отмена</span></a>
		    </div><!-- /.box-footer-->
		  </div><!-- /.box -->
		  {!! Form::close() !!}
	</div>
</div>
@endsection
