<div class="row">
    <div class="col-md-4">
        <div class="info-box bg-aqua">
            <span class="info-box-icon"><i class="fa fa-user"></i></span>

            <div class="info-box-content">
                <h3 class="text-center">{{ $entry->chief_fio }}</h3>
            </div>
            <!-- /.info-box-content -->
        </div>
    </div>
    <div class="col-md-4">
        <div class="info-box bg-aqua">
            <span class="info-box-icon"><i class="fa fa-shopping-cart"></i></span>

            <div class="info-box-content">
                <h4 class="text-center">{{ $entry->company_title }}</h4>
                <h5 class="text-center">{{ $entry->get_client_type() }}</h5>
            </div>
            <!-- /.info-box-content -->
        </div>
    </div>
    <div class="col-md-4">
        <div class="info-box bg-aqua">
            <span class="info-box-icon"><i class="fa fa-key"></i></span>

            <div class="info-box-content">
                <h3 class="text-center">{{ $entry->code }}</h3>
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
                <span class="info-box-number">2</span>
            </div>
            <!-- /.info-box-content -->
        </div>
    </div>
    <div class="col-md-3">
        <div class="info-box">
            <span class="info-box-icon bg-aqua"><i class="fa fa-envelope-o"></i></span>
            <div class="info-box-content">
                <p>Аппаратов</p>
                <span class="info-box-number">7</span>
            </div>
            <!-- /.info-box-content -->
        </div>
    </div>
    <div class="col-md-3">
        <div class="info-box">
            <span class="info-box-icon bg-aqua"><i class="fa fa-envelope-o"></i></span>
            <div class="info-box-content">
                <p>Месячный платеж</p>
                <span class="info-box-number">1025</span class="info-box-number">
            </div>
            <!-- /.info-box-content -->
        </div>
    </div>
    <div class="col-md-3">
        <div class="info-box">
            <span class="info-box-icon bg-aqua"><i class="fa fa-envelope-o"></i></span>
            <div class="info-box-content">
                <p>Задолженность</p>
                <span class="info-box-number">350</span>
            </div>
            <!-- /.info-box-content -->
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-6">
        <div class="box box-default box-solid">
            <div class="box-header with-border">
                <h4 class="box-title">Контактные данные</h4>

                <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                    </button>
                </div>
                <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body" style="display: block;">
                <strong><i class="fa fa-book margin-r-5"></i> Телефон</strong>
                <p class="text-muted">
                    {{ $entry->phone }}
                </p>
                <strong><i class="fa fa-book margin-r-5"></i> Email</strong>
                <p class="text-muted">
                    {{ $entry->email }}
                </p>
                <strong><i class="fa fa-book margin-r-5"></i> Фактический адрес</strong>
                <p class="text-muted">
                    {{ $entry->address_defacto }}
                </p>
                <strong><i class="fa fa-book margin-r-5"></i> Юридический адрес</strong>
                <p class="text-muted">
                    {{ $entry->address_deuro }}
                </p>
            </div>
            <!-- /.box-body -->
        </div>
    </div>
    <div class="col-md-6">
        <div class="box box-default box-solid">
            <div class="box-header with-border">
                <h4 class="box-title">Банковские данные</h4>

                <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                    </button>
                </div>
                <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body" style="display: block;">
                <strong><i class="fa fa-book margin-r-5"></i> Название</strong>
                <p class="text-muted">
                    Приват
                </p>
                <strong><i class="fa fa-book margin-r-5"></i> МФО</strong>
                <p class="text-muted">
                    987654321
                </p>
                <strong><i class="fa fa-book margin-r-5"></i> Счет</strong>
                <p class="text-muted">
                    123456789
                </p>
                <strong><i class="fa fa-book margin-r-5"></i>Адрес</strong>
                <p class="text-muted">
                    {{ $entry->address_deuro }}
                </p>
            </div>
            <!-- /.box-body -->
        </div>
    </div>
</div>

<div class="box box-default box-solid">
        <div class="box-header with-border">
            <h4 class="box-title">Договоры</h4>

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
                        <div class="col-md-3">
                            <h4 class="box-title">Номер договора</h4>
                        </div>
                        <div class="col-md-3">
                            <h4 class="box-title">Дата заключения</h4>
                        </div>
                        <div class="col-md-3">
                            <h4 class="box-title">Дата окончания</h4>
                        </div>
                        <div class="col-md-3">
                            <h4 class="box-title">Действия</h4>
                        </div>
                    </div>
                </div>
                <div class="panel box box-primary">
                    <div class="box-header with-border">
                            <div class="row">
                                <div class="col-md-3">
                                    <h4 class="box-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" class="collapsed">
                                            359
                                        </a>
                                    </h4>
                                </div>
                                <div class="col-md-3">
                                    <h4 class="box-title">01-01-2017</h4>
                                </div>
                                <div class="col-md-3">
                                    <h4 class="box-title">30-01-2017</h4>
                                </div>
                                <div class="col-md-3">
                                    <a href="" class="btn btn-xs btn-default"><i class="fa fa-edit"></i></a>
                                    <a href="" class="btn btn-xs btn-default" data-button-type="delete"><i class="fa fa-trash"></i></a>
                                </div>
                            </div>
                    </div>
                    <div id="collapseOne" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
                        <div class="box-body">
                            <table class="table table-hover">
                                <tbody><tr>
                                    <th>Наименование</th>
                                    <th>Заводской номер</th>
                                    <th>Фискальный номер</th>
                                    <th>Дата производства</th>
                                    <th>Дата регистрации</th>
                                    <th>Адрес</th>
                                    <th>Тариф</th>
                                    <th>Действия</th>
                                </tr>
                                <tr>
                                    <td>Мини</td>
                                    <td>123456789</td>
                                    <td>987654321</td>
                                    <td>01-01-2015</td>
                                    <td>01-01-2017</td>
                                    <td>Ровеньки, ул. Шевченко 15, кв.2</td>
                                    <td>250</td>
                                    <td>
                                        <a href="" class="btn btn-xs btn-default"><i class="fa fa-edit"></i></a>
                                        <a href="" class="btn btn-xs btn-default" data-button-type="delete"><i class="fa fa-trash"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Мини</td>
                                    <td>123456789</td>
                                    <td>987654321</td>
                                    <td>01-01-2015</td>
                                    <td>01-01-2017</td>
                                    <td>Ровеньки, ул. Шевченко 15, кв.2</td>
                                    <td>250</td>
                                    <td>
                                        <a href="" class="btn btn-xs btn-default"><i class="fa fa-edit"></i></a>
                                        <a href="" class="btn btn-xs btn-default" data-button-type="delete"><i class="fa fa-trash"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Мини</td>
                                    <td>123456789</td>
                                    <td>987654321</td>
                                    <td>01-01-2015</td>
                                    <td>01-01-2017</td>
                                    <td>Ровеньки, ул. Шевченко 15, кв.2</td>
                                    <td>250</td>
                                    <td>
                                        <a href="" class="btn btn-xs btn-default"><i class="fa fa-edit"></i></a>
                                        <a href="" class="btn btn-xs btn-default" data-button-type="delete"><i class="fa fa-trash"></i></a>
                                    </td>
                                </tr>
                                </tbody></table>
                        </div>
                    </div>
                </div>
                <div class="panel box box-primary">
                    <div class="box-header with-border">
                        <div class="row">
                            <div class="col-md-3">
                                <h4 class="box-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" class="collapsed">
                                        126
                                    </a>
                                </h4>
                            </div>
                            <div class="col-md-3">
                                <h4 class="box-title">01-01-2017</h4>
                            </div>
                            <div class="col-md-3">
                                <h4 class="box-title">30-01-2017</h4>
                            </div>
                            <div class="col-md-3">
                                <a href="" class="btn btn-xs btn-default"><i class="fa fa-edit"></i></a>
                                <a href="" class="btn btn-xs btn-default" data-button-type="delete"><i class="fa fa-trash"></i></a>
                            </div>
                        </div>
                    </div>
                    <div id="collapseTwo" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
                        <div class="box-body">
                            <table class="table table-hover">
                                <tbody><tr>
                                    <th>Наименование</th>
                                    <th>Заводской номер</th>
                                    <th>Фискальный номер</th>
                                    <th>Дата производства</th>
                                    <th>Дата регистрации</th>
                                    <th>Адрес</th>
                                    <th>Тариф</th>
                                    <th>Действия</th>
                                </tr>
                                <tr>
                                    <td>Мини</td>
                                    <td>123456789</td>
                                    <td>987654321</td>
                                    <td>01-01-2015</td>
                                    <td>01-01-2017</td>
                                    <td>Ровеньки, ул. Шевченко 15, кв.2</td>
                                    <td>250</td>
                                    <td>
                                        <a href="" class="btn btn-xs btn-default"><i class="fa fa-edit"></i></a>
                                        <a href="" class="btn btn-xs btn-default" data-button-type="delete"><i class="fa fa-trash"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Мини</td>
                                    <td>123456789</td>
                                    <td>987654321</td>
                                    <td>01-01-2015</td>
                                    <td>01-01-2017</td>
                                    <td>Ровеньки, ул. Шевченко 15, кв.2</td>
                                    <td>250</td>
                                    <td>
                                        <a href="" class="btn btn-xs btn-default"><i class="fa fa-edit"></i></a>
                                        <a href="" class="btn btn-xs btn-default" data-button-type="delete"><i class="fa fa-trash"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Мини</td>
                                    <td>123456789</td>
                                    <td>987654321</td>
                                    <td>01-01-2015</td>
                                    <td>01-01-2017</td>
                                    <td>Ровеньки, ул. Шевченко 15, кв.2</td>
                                    <td>250</td>
                                    <td>
                                        <a href="" class="btn btn-xs btn-default"><i class="fa fa-edit"></i></a>
                                        <a href="" class="btn btn-xs btn-default" data-button-type="delete"><i class="fa fa-trash"></i></a>
                                    </td>
                                </tr>
                                </tbody></table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.box-body -->
    </div>
