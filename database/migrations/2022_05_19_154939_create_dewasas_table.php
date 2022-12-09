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
        Schema::create('dewasas', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('jk');
            $table->integer('usia');
            $table->float('bb');
            $table->float('tb');
            $table->integer('tensi');
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
        Schema::dropIfExists('dewasas');
    }
};
