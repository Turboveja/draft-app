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
        Schema::create('track_external_urls', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('external_url_id');
            $table->unsignedBigInteger('track_id');
            $table->timestamps();

            $table->foreign('track_id')->references('id')->on('tracks');
            $table->foreign('external_url_id')->references('id')->on('external_urls');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('track_external_urls');
    }
};
