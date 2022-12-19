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
        Schema::table('perros', function (Blueprint $table){
            $table->string('per_nombre', 255)->nullable();
            $table->string('per_descripcion',255)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('perros', function (Blueprint $table){
            $table->dropColumn('per_nombre');
            $table->dropColumn('per_descripcion');
        });
    }
};
