@if ($crud->hasAccess('delete'))
	<a href="{{ url($crud->route.'/'.$entry->getKey()) }}" class="btn btn-xs btn-primary" data-button-type="delete"><i class="fa fa-trash"></i></a>
@endif