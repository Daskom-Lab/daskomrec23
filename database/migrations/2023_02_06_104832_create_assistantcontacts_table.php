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
        Schema::create('assistantcontacts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->longText('photo');
            $table->string('ascod', 3);
            $table->string('name');
            $table->string('nohp');
            $table->string('line');
            $table->string('instagram');
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
        Schema::dropIfExists('assistantcontacts');
    }
};
