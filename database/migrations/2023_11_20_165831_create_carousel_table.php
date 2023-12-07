<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarouselTable extends Migration
{
    public function up()
    {
        Schema::create('carousel', function (Blueprint $table) {
            $table->id();
            $table->foreignId('carousel_img_id')->constrained('gallery')->onDelete('cascade'); 
        });
    }

    public function down()
    {
        Schema::dropIfExists('carousel');
    }
}
