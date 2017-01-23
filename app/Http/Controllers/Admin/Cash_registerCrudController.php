<?php

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;
use App\Models\Cash_register;

// VALIDATION: change the requests to match your own file names if you need form validation
use App\Http\Requests\Cash_registerRequest as StoreRequest;
use App\Http\Requests\Cash_registerRequest as UpdateRequest;

class Cash_registerCrudController extends CrudController
{

    public function setUp()
    {

        /*
		|--------------------------------------------------------------------------
		| BASIC CRUD INFORMATION
		|--------------------------------------------------------------------------
		*/
        $this->crud->setModel("App\Models\Cash_register");
        $this->crud->setRoute("cash_register");
        $this->crud->setEntityNameStrings('Аппарат', 'Аппараты');

        /*
		|--------------------------------------------------------------------------
		| BASIC CRUD INFORMATION
		|--------------------------------------------------------------------------
		*/

        $this->crud->setFromDb();

        // ------ CRUD FIELDS
        // $this->crud->addField($options, 'update/create/both');
        // $this->crud->addFields($array_of_arrays, 'update/create/both');
        // $this->crud->removeField('name', 'update/create/both');
        // $this->crud->removeFields($array_of_names, 'update/create/both');
        $this->crud->addField([
            'type' => 'select2',
            'name' => 'contract_id',
            'label' => 'Номер договора',
            'entity' => 'contract_id',
            'attribute' => 'contract_id',
            'model' => 'App\Models\Contract'
        ]);

        $this->crud->addField([
            'type' => 'select2',
            'name' => 'title_id',
            'label' => 'Наименование',
            'entity' => 'title_id',
            'attribute' => 'title',
            'model' => 'App\Models\Register_type'
        ]);

        $this->crud->addField(['name' => 'create_number', 'label' => 'Заводской номер']);
        $this->crud->addField(['name' => 'fiscal_number', 'label' => 'Фискальный номер']);

        $this->crud->addField([
            'name' => 'date_creation',
            'label' => 'Дата производства',
            'type' => 'date_picker',
            'date_picker_options' => [
                'todayBtn' => true,
                'format' => 'dd-mm-yyyy',
                'language' => 'ru'
            ]
        ]);

        $this->crud->addField([
            'name' => 'date_registration',
            'label' => 'Дата регистрации',
            'type' => 'date_picker',
            'date_picker_options' => [
                'todayBtn' => true,
                'format' => 'dd-mm-yyyy',
                'language' => 'ru'
            ]
        ]);

        $this->crud->addField(['name' => 'address', 'label' => 'Адрес']);

        $this->crud->addField([
            'type' => 'select2',
            'name' => 'tariff_id',
            'label' => 'Тариф',
            'entity' => 'tariff_id',
            'attribute' => 'rate',
            'model' => 'App\Models\Tariff'
        ]);

        // ------ CRUD COLUMNS
        // $this->crud->addColumn(); // add a single column, at the end of the stack
        // $this->crud->addColumns(); // add multiple columns, at the end of the stack
        // $this->crud->removeColumn('column_name'); // remove a column from the stack
        // $this->crud->removeColumns(['column_name_1', 'column_name_2']); // remove an array of columns from the stack
        // $this->crud->setColumnDetails('column_name', ['attribute' => 'value']); // adjusts the properties of the passed in column (by name)
        // $this->crud->setColumnsDetails(['column_1', 'column_2'], ['attribute' => 'value']);
        $this->crud->removeColumns(['contract_id', 'address']);
        $this->crud->setColumnDetails('title_id', ['label' => 'Наименование', 'type' => "model_function", 'function_name' => 'get_register_type']);
        $this->crud->setColumnDetails('create_number', ['label' => 'Заводской номер']);
        $this->crud->setColumnDetails('fiscal_number', ['label' => 'Фискальный номер']);
        $this->crud->setColumnDetails('date_creation', ['label' => 'Дата производства']);
        $this->crud->setColumnDetails('date_registration', ['label' => 'Дата регистрации']);
//        $this->crud->setColumnDetails('address', ['label' => 'Адрес']);
        $this->crud->setColumnDetails('tariff_id', ['label' => 'Тариф', 'type' => "model_function", 'function_name' => 'get_tariff']);

        // ------ CRUD BUTTONS
        // possible positions: 'beginning' and 'end'; defaults to 'beginning' for the 'line' stack, 'end' for the others;
        // $this->crud->addButton($stack, $name, $type, $content, $position); // add a button; possible types are: view, model_function
        // $this->crud->addButtonFromModelFunction($stack, $name, $model_function_name, $position); // add a button whose HTML is returned by a method in the CRUD model
        // $this->crud->addButtonFromView($stack, $name, $view, $position); // add a button whose HTML is in a view placed at resources\views\vendor\backpack\crud\buttons
        // $this->crud->removeButton($name);
        // $this->crud->removeButtonFromStack($name, $stack);

        // ------ CRUD ACCESS
        // $this->crud->allowAccess(['list', 'create', 'update', 'reorder', 'delete']);
        // $this->crud->denyAccess(['list', 'create', 'update', 'reorder', 'delete']);

        // ------ CRUD REORDER
        // $this->crud->enableReorder('label_name', MAX_TREE_LEVEL);
        // NOTE: you also need to do allow access to the right users: $this->crud->allowAccess('reorder');

        // ------ CRUD DETAILS ROW
        // $this->crud->enableDetailsRow();
        // NOTE: you also need to do allow access to the right users: $this->crud->allowAccess('details_row');
        // NOTE: you also need to do overwrite the showDetailsRow($id) method in your EntityCrudController to show whatever you'd like in the details row OR overwrite the views/backpack/crud/details_row.blade.php

        // ------ REVISIONS
        // You also need to use \Venturecraft\Revisionable\RevisionableTrait;
        // Please check out: https://laravel-backpack.readme.io/docs/crud#revisions
        // $this->crud->allowAccess('revisions');

        // ------ AJAX TABLE VIEW
        // Please note the drawbacks of this though:
        // - 1-n and n-n columns are not searchable
        // - date and datetime columns won't be sortable anymore
        // $this->crud->enableAjaxTable();

        // ------ DATATABLE EXPORT BUTTONS
        // Show export to PDF, CSV, XLS and Print buttons on the table view.
        // Does not work well with AJAX datatables.
        // $this->crud->enableExportButtons();

        // ------ ADVANCED QUERIES
        // $this->crud->addClause('active');
        // $this->crud->addClause('type', 'car');
        // $this->crud->addClause('where', 'name', '==', 'car');
        // $this->crud->addClause('whereName', 'car');
        // $this->crud->addClause('whereHas', 'posts', function($query) {
        //     $query->activePosts();
        // });
        // $this->crud->with(); // eager load relationships
        // $this->crud->orderBy();
        // $this->crud->groupBy();
        // $this->crud->limit();
    }

	public function store(StoreRequest $request)
	{
		// your additional operations before save here
        $redirect_location = parent::storeCrud();
        // your additional operations after save here
        // use $this->data['entry'] or $this->crud->entry
        return $redirect_location;
	}

	public function update(UpdateRequest $request)
	{
		// your additional operations before save here
        $redirect_location = parent::updateCrud();
        // your additional operations after save here
        // use $this->data['entry'] or $this->crud->entry
        return $redirect_location;
	}
}
