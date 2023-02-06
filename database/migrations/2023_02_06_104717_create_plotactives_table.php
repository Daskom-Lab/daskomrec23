<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('plotactives', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->boolean('isPlotActive');
            $table->unsignedBigInteger('datacaas_id');
            $table->foreign('datacaas_id')->references('id')
                ->on('datacaas')
                ->onDelete('cascade');
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
        Schema::dropIfExists('plotactives');
    }
};
