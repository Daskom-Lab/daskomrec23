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
        Schema::table('plots', function (Blueprint $table) {
            $table->foreign('datacaas_id', 'fk_plots_to_datacaas')->references('id')
                ->on('datacaas')
                ->onDelete('cascade');
            $table->foreign('shifts_id', 'fk_plots_to_shifts')->references('id')
                ->on('shifts')
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
        Schema::table('plots', function (Blueprint $table) {
            $table->dropForeign('fk_plots_to_datacaas');
            $table->dropForeign('fk_plots_to_shifts');
        });
    }
};
