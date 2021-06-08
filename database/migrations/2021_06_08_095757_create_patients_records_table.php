<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatientsRecordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patients_records', function (Blueprint $table) {
            $table->id();
            $table->string('date');
            $table->string('time');
            $table->text('concerns');
            $table->text('service_request');
            $table->string('cancel_chckbx');
            $table->string('rebooked_chckbx');
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
        Schema::dropIfExists('patients_records');
    }
}
