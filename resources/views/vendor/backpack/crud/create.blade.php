@extends('backpack::layout')

@section('header')
	{{--<section class="content-header">
	  <h1>
	    Новый <span class="text-lowercase">{{ $crud->entity_name }}</span>
	  </h1>
	</section>--}}
@endsection

@section('content')
<div class="row">
	<div class="col-md-8 col-md-offset-2">
		<!-- Default box -->
		{{--@if ($crud->hasAccess('list'))
			<a href="{{ url($crud->route) }}"><i class="fa fa-angle-double-left"></i> Вернуться в  <span class="text-lowercase">{{ $crud->entity_name_plural }}</span></a><br><br>
		@endif--}}

		  {!! Form::open(array('url' => $crud->route, 'method' => 'post', 'files'=>$crud->hasUploadFields('create'))) !!}
		  <div class="box">

		    <div class="box-header with-border">
		      <h3 class="box-title">Новый {{ $crud->entity_name }}</h3>
		    </div>
		    <div class="box-body row">
		      <!-- load the view from the application if it exists, otherwise load the one in the package -->
		      @if(view()->exists('vendor.backpack.crud.form_content'))
		      	@include('vendor.backpack.crud.form_content', ['fields' => $crud->getFields('create')])
		      @else
		      	@include('crud::form_content', ['fields' => $crud->getFields('create')])
		      @endif
		    </div><!-- /.box-body -->
		    <div class="box-footer">
		    	<div class="form-group hidden">
		    	  <span>{{ trans('backpack::crud.after_saving') }}:</span>
		          <div class="radio">
		            <label>
		              <input type="radio" name="redirect_after_save" value="{{ $crud->route }}" checked="">
		              {{ trans('backpack::crud.go_to_the_table_view') }}
		            </label>
		          </div>
		          <div class="radio">
		            <label>
		              <input type="radio" name="redirect_after_save" value="{{ $crud->route.'/create' }}">
		              {{ trans('backpack::crud.let_me_add_another_item') }}
		            </label>
		          </div>
		          <div class="radio">
		            <label>
		              <input type="radio" name="redirect_after_save" value="current_item_edit">
		              {{ trans('backpack::crud.edit_the_new_item') }}
		            </label>
		          </div>
		        </div>

			  <button type="submit" class="btn btn-success ladda-button" data-style="zoom-in"><span class="ladda-label"><i class="fa fa-save"></i> Добавить</span></button>
		      <a onclick="history.go(-1);" class="btn btn-default ladda-button" data-style="zoom-in"><span class="ladda-label">Отмена</span></a>
		    </div><!-- /.box-footer-->

		  </div><!-- /.box -->
		  {!! Form::close() !!}
	</div>
</div>

@endsection
