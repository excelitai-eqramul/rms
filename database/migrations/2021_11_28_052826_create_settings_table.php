<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('outlet_id');
            $table->string('resturent_name');
            $table->string('logo_image')->nullable();
            $table->string('webside')->nullable();
            $table->string('date')->nullable();
            $table->string('time_zone')->nullable();
            $table->string('currency_symbol')->nullable();
            $table->string('currency_position')->nullable();
            $table->string('precision');
            $table->string('default_customer')->nullable();
            $table->string('default_payment_method')->nullable();
            $table->string('charge_type')->nullable();
            $table->string('percentage_amount')->nullable();
            $table->integer('status')->default(0);
            $table->string('export_daly')->nullable();
            $table->string('invoice_footer')->nullable();
            $table->string('printing_invoice')->nullable();
            $table->string('printing_bill')->nullable();
            $table->string('printing_kot')->nullable();
            $table->string('printing_bot')->nullable();
            $table->string('recept_printer')->nullable();
           
           
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
        Schema::dropIfExists('settings');
    }
}
