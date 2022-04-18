<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTranInstitutionSensorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tran_institution_sensors', function (Blueprint $table) {
            $table->id();
            $table->foreignId('institution_id')->constrained('institution');
            $table->foreignId('sensors_id')->constrained('sensors');
            $table->string('serial_number')->nullable();
            $table->date('expired_date')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('tran_institution_sensors');
    }
}
