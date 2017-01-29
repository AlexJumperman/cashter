<div class="row client-head">
    <div class="col-md-4">
        <div class="info-box bg-aqua">
            <span class="info-box-icon"><i class="fa fa-shopping-cart"></i></span>

            <div class="info-box-content">
                <h3 class="text-center">{{ $entry->company_title }}</h3>
                <h4 class="text-center">{{ $entry->client_type }}</h4>
            </div>
            <!-- /.info-box-content -->
        </div>
    </div>
    <div class="col-md-4">
        <div class="info-box bg-aqua">
            <span class="info-box-icon"><i class="fa fa-user"></i></span>

            <div class="info-box-content">
                <?php
                    $fio = explode(" ", $entry->chief_fio);
                    $fio_last = $fio[count($fio)-1];
                    unset($fio[count($fio)-1]);
                    $entry->chief_fio = implode(" ", $fio);
                ?>
                <h3 class="text-center">{{ $entry->chief_fio }}<br> {{ $fio_last }}</h3>
            </div>
            <!-- /.info-box-content -->
        </div>
    </div>
    <div class="col-md-4">
        <div class="info-box bg-aqua">
            <span class="info-box-icon"><i class="fa fa-key"></i></span>

            <div class="info-box-content">
                <h3 class="text-center line-height-60">{{ $entry->code }}</h3>
            </div>
            <!-- /.info-box-content -->
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-3">
        <div class="info-box">
            <span class="info-box-icon bg-aqua"><i class="fa fa-envelope-o"></i></span>
            <div class="info-box-content">
                <p>Договоров</p>
                <span class="info-box-number">{{ $entry->contracts->count() }}</span>
            </div>
            <!-- /.info-box-content -->
        </div>
    </div>
    <div class="col-md-3">
        <div class="info-box">
            <span class="info-box-icon bg-aqua"><i class="fa fa-envelope-o"></i></span>
            <div class="info-box-content">
                <p>Аппаратов</p>
                <span class="info-box-number">{{ $entry->cash_registers->count() }}</span>
            </div>
            <!-- /.info-box-content -->
        </div>
    </div>
    <div class="col-md-3">
        <div class="info-box">
            <span class="info-box-icon bg-aqua"><i class="fa fa-envelope-o"></i></span>
            <div class="info-box-content">
                <p>Месячный платеж</p>
                <span class="info-box-number">{{ $entry->total_pay }}</span>
            </div>
            <!-- /.info-box-content -->
        </div>
    </div>
    <div class="col-md-3">
        <div class="info-box">
            <span class="info-box-icon bg-aqua"><i class="fa fa-envelope-o"></i></span>
            <div class="info-box-content">
                <p>Задолженность</p>
                <span class="info-box-number">?</span>
            </div>
            <!-- /.info-box-content -->
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-6">
        <div class="box box-default box-solid collapsed-box">
            <div class="box-header with-border">
                <h4 class="box-title">Контактные данные</h4>

                <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i>
                    </button>
                </div>
                <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body" style="display: none;">
                <p>
                    <strong class="margin-r-5"><i class="fa fa-book margin-r-5"></i>Телефон</strong>
                    <span class="text-muted">
                        {{ $entry->phone }}
                    </span>
                </p>
                <p>
                    <strong class="margin-r-5"><i class="fa fa-book margin-r-5"></i> Email</strong>
                    <span class="text-muted">
                        {{ $entry->email }}
                    </span>
                </p>
                <p>
                    <strong class="margin-r-5"><i class="fa fa-book margin-r-5"></i> Фактический адрес</strong>
                    <span class="text-muted">
                        {{ $entry->address_defacto }}
                    </span>
                </p>
                <p>
                    <strong class="margin-r-5"><i class="fa fa-book margin-r-5"></i> Юридический адрес</strong>
                    <span class="text-muted">
                        {{ $entry->address_deuro }}
                    </span>
                </p>
            </div>
            <!-- /.box-body -->
        </div>
    </div>
    <div class="col-md-6">
        <div class="box box-default box-solid collapsed-box">
            <div class="box-header with-border">
                <h4 class="box-title">Банковские данные</h4>

                <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i>
                    </button>
                </div>
                <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body" style="display: none;">
                <p>
                    <strong class="margin-r-5"><i class="fa fa-book margin-r-5"></i> Название</strong>
                    <span class="text-muted">
                        {{ $entry->bank->title }}
                    </span>
                </p>

                <p>
                    <strong class="margin-r-5"><i class="fa fa-book margin-r-5"></i> МФО</strong>
                    <span class="text-muted">
                        {{ $entry->bank->mfo }}
                    </span>
                </p>

                <p>
                    <strong class="margin-r-5"><i class="fa fa-book margin-r-5"></i> Счет</strong>
                    <span class="text-muted">
                        {{ $entry->bank->account }}
                    </span>
                </p>

                <p>
                    <strong class="margin-r-5"><i class="fa fa-book margin-r-5"></i>Адрес</strong>
                    <span class="text-muted">
                        {{ $entry->bank->address }}
                    </span>
                </p>

            </div>
            <!-- /.box-body -->
        </div>
    </div>
</div>

<div class="box box-default box-solid">
        <div class="box-header with-border">
            <h4 class="box-title">Договоры <a href="{{ url(config('backpack.base.route_prefix', 'admin')."/contract/create/$entry->id") }}" class="btn btn-xs btn-primary"><i class="fa fa-plus"></i> Новый Договор</a></h4>

            <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
            </div>
            <!-- /.box-tools -->
        </div>
        <!-- /.box-header -->
        <div class="box-body" style="display: block;">

            <div class="box-group" id="accordion">
                <!-- we are adding the .panel class so bootstrap.js collapse plugin detects it -->
                <div class="box-header with-border">
                    <div class="row">
                        <div class="col-md-2">
                            <h4 class="box-title">Номер<br> договора</h4>
                        </div>
                        <div class="col-md-2 text-center">
                            <h4 class="box-title">Дата<br> заключения</h4>
                        </div>
                        <div class="col-md-2 text-center">
                            <h4 class="box-title">Дата<br> окончания</h4>
                        </div>
                        <div class="col-md-2 text-center">
                            <h4 class="box-title">Всего<br> аппаратов</h4>
                        </div>
                        <div class="col-md-2 text-center">
                            <h4 class="box-title">Всего<br> к оплате</h4>
                        </div>
                        <div class="col-md-2 text-center">
                            <h4 class="box-title">Действия</h4>
                        </div>
                    </div>
                </div>
                @foreach($entry->contracts()->get() as $contract)
                    <div class="panel box box-primary">
                        <div class="box-header with-border">
                                <div class="row">
                                    <div class="col-md-2">
                                        <h4 class="box-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse{{ $contract->id }}" aria-expanded="false" class="collapsed">
                                                <i class="fa  fa-toggle-down"></i> {{ $contract->contract_id }}
                                            </a>
                                        </h4>
                                    </div>
                                    <div class="col-md-2 text-center">
                                        <h4 class="box-title">{{ $contract->date_start }}</h4>
                                    </div>
                                    <div class="col-md-2 text-center">
                                        <h4 class="box-title">{{ $contract->date_end }}</h4>
                                    </div>
                                    <div class="col-md-2 text-center">
                                        <h4 class="box-title">{{ $contract->cash_registers()->count() }}</h4>
                                    </div>
                                    <div class="col-md-2 text-center">
                                        <h4 class="box-title">{{ $contract->total_pay }}</h4>
                                    </div>
                                    <div class="col-md-2 text-center">
                                        <a href="{{ url(config('backpack.base.route_prefix', 'admin')."/contract/$contract->id/edit") }}" class="btn btn-xs btn-primary"><i class="fa fa-edit"></i></a>
                                        <a href="{{ url(config('backpack.base.route_prefix', 'admin')."/contract/$contract->id") }}" class="btn btn-xs btn-primary" data-button-type="delete" data-parent-type="div.panel"><i class="fa fa-trash"></i></a>
                                    </div>
                                </div>
                        </div>
                        <div id="collapse{{ $contract->id }}" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
                            <div class="box box-default box-solid">
                                <div class="box-header with-border">
                                    <h4 class="box-title">Аппараты <a href="{{ url(config('backpack.base.route_prefix', 'admin')."/cash_register/create/$contract->id") }}" class="btn btn-xs btn-primary"><i class="fa fa-plus"></i> Новый Аппарат</a></h4>
                                </div>

                                <div class="box-body" style="display: block;">
                                    <div class="box-body">
                                        <table class="table table-hover">
                                            <tbody><tr>
                                                <th>Наимено<br>вание</th>
                                                <th class="text-center">Заводской<br> номер</th>
                                                <th class="text-center">Фискальный<br> номер</th>
                                                <th class="text-center">Дата<br> производства</th>
                                                <th class="text-center">Дата<br> регистрации</th>
                                                {{--<th>Адрес</th>--}}
                                                <th class="text-center">Тариф</th>
                                                <th class="text-center">Действия</th>
                                            </tr>
                                            @foreach($contract->cash_registers()->get() as $cash_register)
                                                <tr>
                                                    <td>{{ $cash_register->register_type }}</td>
                                                    <td class="text-center">{{ $cash_register->create_number }}</td>
                                                    <td class="text-center">{{ $cash_register->fiscal_number }}</td>
                                                    <td class="text-center">{{ $cash_register->date_creation }}</td>
                                                    <td class="text-center">{{ $cash_register->date_registration }}</td>
                                                    {{--<td>{{ $cash_register->address }}</td>--}}
                                                    <td class="text-center">{{ $cash_register->tariff_rate }}</td>
                                                    <td class="text-center">
                                                        <a href="{{ url(config('backpack.base.route_prefix', 'admin')."/cash_register/$cash_register->id/edit") }}" class="btn btn-xs btn-primary"><i class="fa fa-edit"></i></a>
                                                        <a href="{{ url(config('backpack.base.route_prefix', 'admin')."/cash_register/$cash_register->id") }}" class="btn btn-xs btn-primary" data-button-type="delete" data-parent-type="tr"><i class="fa fa-trash"></i></a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                            </tbody></table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <!-- /.box-body -->
    </div>

<!-- Button trigger modal -->
<button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
    Тестовая оплата
</button>

<!-- Modal -->
<div class="modal fade bs-example-modal-lg" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Оплата</h4>
            </div>
            <div class="modal-body">
                <table class="table table-hover">
                    <tbody><tr>
                        <th>Аппарат</th>
                        <th>Тариф</th>
                        <th>11-2016<br>ноябрь</th>
                        <th>12-2016<br>декабрь</th>
                        <th>01-2017<br>январь</th>
                        <th>02-2017<br>февраль</th>
                        <th>03-2017<br>март</th>
                    </tr>
                    <tr>
                        <td>Era</td>
                        <td>150</td>
                        <td><input type="checkbox" checked disabled></td>
                        <td><input type="checkbox"></td>
                        <td><input type="checkbox"></td>
                        <td><input type="checkbox"></td>
                        <td><input type="checkbox"></td>
                    </tr>
                    <tr>
                        <td>Era</td>
                        <td>250</td>
                        <td><input type="checkbox" checked disabled></td>
                        <td><input type="checkbox" checked disabled></td>
                        <td><input type="checkbox"></td>
                        <td><input type="checkbox"></td>
                        <td><input type="checkbox"></td>
                    </tr>
                    <tr>
                        <td>Era</td>
                        <td>250</td>
                        <td><input type="checkbox" checked disabled></td>
                        <td><input type="checkbox"></td>
                        <td><input type="checkbox"></td>
                        <td><input type="checkbox"></td>
                        <td><input type="checkbox"></td>
                    </tr>
                    <tr>
                        <td>Era</td>
                        <td>300</td>
                        <td><input type="checkbox" checked disabled></td>
                        <td><input type="checkbox" checked disabled></td>
                        <td><input type="checkbox"></td>
                        <td><input type="checkbox"></td>
                        <td><input type="checkbox"></td>
                    </tr>
                    </tbody></table>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
                <button type="button" class="btn btn-primary">Оплатить</button>
            </div>
        </div>
    </div>
</div>

@section('after_scripts')

    <script type="text/javascript">
        jQuery(document).ready(function($) {

            // make the delete button work in the first result page
            register_delete_button_action();

            function register_delete_button_action() {
                $("[data-button-type=delete]").unbind('click');
                // CRUD Delete
                // ask for confirmation before deleting an item
                $("[data-button-type=delete]").click(function(e) {
                    e.preventDefault();
                    var delete_button = $(this);
                    var delete_url = $(this).attr('href');

                    if (confirm("{{ trans('backpack::crud.delete_confirm') }}") == true) {
                        $.ajax({
                            url: delete_url,
                            type: 'DELETE',
                            success: function(result) {
                                // Show an alert with the result
                                new PNotify({
                                    title: "{{ trans('backpack::crud.delete_confirmation_title') }}",
                                    text: "{{ trans('backpack::crud.delete_confirmation_message') }}",
                                    type: "success"
                                });
                                // delete the row from the table
                                delete_button.parentsUntil(delete_button.attr('data-parent-type')).parent().remove();

                            },
                            error: function(result) {
                                // Show an alert with the result
                                new PNotify({
                                    title: "{{ trans('backpack::crud.delete_confirmation_not_title') }}",
                                    text: "{{ trans('backpack::crud.delete_confirmation_not_message') }}",
                                    type: "warning"
                                });
                            }
                        });
                    } else {
                        new PNotify({
                            title: "{{ trans('backpack::crud.delete_confirmation_not_deleted_title') }}",
                            text: "{{ trans('backpack::crud.delete_confirmation_not_deleted_message') }}",
                            type: "info"
                        });
                    }
                });
            }

            });
    </script>

@endsection
