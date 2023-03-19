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
        Schema::table('statuses', function (Blueprint $table) {
            $table->foreign('datacaas_id', 'fk_statuses_to_datacaas')->references('id')
                ->on('datacaas')
                ->onDelete('cascade');
            $table->foreign('stages_id', 'fk_statuses_to_stages')->references('id')
                ->on('stages')
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
        Schema::table('statuses', function (Blueprint $table) {
            $table->dropForeign('fk_statuses_to_datacaas');
            $table->dropForeign('fk_statuses_to_stages');
        });
    }
};
