<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOutputDsmChargePerBlocksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('output_dsm_charge_per_blocks', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer('block');
            $table->double('dsm_charge');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('output_dsm_charge_per_blocks');
    }
}
