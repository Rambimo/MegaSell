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
        Schema::create('smartphone', function (Blueprint $table) {
            $table->id();
            $table->string('merk', 15)->nullable();
            $table->string('seri', 30)->nullable();
            $table->string('processor', 50)->nullable();
            $table->string('display', 50)->nullable();
            $table->string('kamera', 50)->nullable();
            $table->string('battery', 20)->nullable();
            $table->string('harga', 25)->nullable();
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
        Schema::dropIfExists('smartphones');
    }
};
