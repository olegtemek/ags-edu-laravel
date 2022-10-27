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
        Schema::create('vacancies', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('title_kz')->nullable();
            $table->string('title_en')->nullable();
            $table->longText('description');
            $table->longText('description_en')->nullable();
            $table->longText('description_kz')->nullable();
            $table->json('req');
            $table->json('req_en')->nullable();
            $table->json('req_kz')->nullable();
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
        Schema::dropIfExists('vacancies');
    }
};
