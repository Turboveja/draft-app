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
        Schema::create('albums', function (Blueprint $table) {
            $table->id();
            $table->uuid('uuid');
            $table->string('name');
            $table->unsignedBigInteger('artist_id');
            $table->unsignedBigInteger('album_type_id');
            $table->dateTime('release_date')->nullable();
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('artist_id')->references('id')->on('artists');
            $table->foreign('album_type_id')->references('id')->on('album_types');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('albums');
    }
};
