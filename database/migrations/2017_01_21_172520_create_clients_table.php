<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('client_type');
            $table->string('chief_fio');
            $table->string('company_title')->nullable();
            $table->integer('code');
            $table->string('phone')->nullable();
            $table->string('email')->nullable();
            $table->string('address_defacto')->nullable();
            $table->string('address_deuro')->nullable();
            $table->longText('common_info')->nullable();
            $table->integer('bank_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('clients');
    }
}
