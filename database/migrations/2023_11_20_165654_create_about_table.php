<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('about', function (Blueprint $table) {
            $table->integer('abt_id',11);
            $table->string('experience',100);
            $table->string('minitext',100);
            $table->string('judul',100);
            $table->string('abt_desc',1000);
            $table->string('extra_txt',100);
        });
    }

    public function down()
    {
        Schema::dropIfExists('about');
    }
};
