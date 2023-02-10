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
        Schema::table('plotactives', function (Blueprint $table) {
            $table->foreign('datacaas_id', 'fk_plotactives_to_datacaas')->references('id')
                ->on('datacaas')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('plotactives', function (Blueprint $table) {
            $table->dropForeign('fk_plotactives_to_datacaas');
        });
    }
};
