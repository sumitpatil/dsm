<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMasterMahagencoLocationUnitStageCapacitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('master_mahagenco_location_unit_stage_capacities', function (Blueprint $table) {
            $table->id();
            $table->text('location');
            $table->text('unit');
            $table->text('stage');
            $table->float('capacity');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('master_mahagenco_location_unit_stage_capacities');
    }
}
