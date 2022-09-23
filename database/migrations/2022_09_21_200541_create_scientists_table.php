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
        Schema::create('scientists', function (Blueprint $table) {
            $table->id();
            $table->string('name',100);
            $table->string('lastname',100);
            $table->date('birthday');
            $table->date('death');
            $table->text('biography');
            $table->string('url_signature');
            $table->string('url_scientist');
            $table->unsignedBigInteger('science_id');
            $table->string('slug');
            $table->foreign('science_id')->references('id')->on('sciences');
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
        Schema::dropIfExists('scientists');
    }
};
