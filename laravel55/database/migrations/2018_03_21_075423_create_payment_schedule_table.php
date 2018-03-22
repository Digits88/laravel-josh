<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePaymentScheduleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payment_schedule', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('Srial_no');
            $table->string('Due_DateofPayment');
            $table->string('Installment_Amount');
            $table->string('Paid');
            $table->string('Balance');
            $table->string('Date_of_Payment');
            $table->string('Remarks');
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
        Schema::dropIfExists('payment_schedule');
    }
}
