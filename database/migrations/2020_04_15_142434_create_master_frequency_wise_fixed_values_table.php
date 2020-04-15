<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMasterFrequencyWiseFixedValuesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('master_frequency_wise_fixed_values', function (Blueprint $table) {
            $table->id();
            $table->double('frequency');
            $table->double('fixed_sum_val');
            $table->double('fixed_mul_val');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('master_frequency_wise_fixed_values');
    }
}
