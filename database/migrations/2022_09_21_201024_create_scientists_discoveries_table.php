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
        Schema::create('scientists_discoveries', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('scientist_id');
            $table->unsignedBigInteger('discovery_id');
            $table->date('discovery_date');
            $table->foreign('scientist_id')->references('id')->on('scientists');
            $table->foreign('discovery_id')->references('id')->on('discoveries');
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
        Schema::dropIfExists('scientists_discoveries');
    }
};
