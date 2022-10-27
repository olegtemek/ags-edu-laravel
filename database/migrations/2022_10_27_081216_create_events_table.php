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
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->string('video')->nullable();
            $table->integer('section');
            $table->longText('title')->nullable();
            $table->longText('title_en')->nullable();
            $table->longText('title_kz')->nullable();
            $table->longText('title_video')->nullable();
            $table->longText('title_video_en')->nullable();
            $table->longText('title_video_kz')->nullable();
            $table->longText('image')->nullable();
            $table->longText('slug')->nullable();
            $table->longText('description')->nullable();
            $table->longText('description_kz')->nullable();
            $table->longText('description_en')->nullable();
            $table->longText('seo_title')->nullable();
            $table->longText('seo_description')->nullable();
            $table->longText('seo_title_en')->nullable();
            $table->longText('seo_description_en')->nullable();
            $table->longText('seo_title_kz')->nullable();
            $table->longText('seo_description_kz')->nullable();
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
        Schema::dropIfExists('events');
    }
};
