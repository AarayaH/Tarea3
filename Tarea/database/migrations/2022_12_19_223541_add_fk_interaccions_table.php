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
        Schema::table('interaccions', function (Blueprint $table){
            $table->unsignedBigInteger('inteper_id')->nullable();
            $table->foreign('inteper_id')->references('id')->on('perros');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('interaccions', function (Blueprint $table){
            $table->dropForeign('inteper_id');
            $table->dropForeign('intepercand_id');
        });
    }
};
