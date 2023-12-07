<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('units', function (Blueprint $table) {
            $table->id('unit_id');
            $table->unsignedBigInteger('gallery_id');
            $table->foreign('gallery_id')->references('gallery_id')->on('gallery');
            $table->text('display1');
            $table->text('display2');
            $table->text('display3');
            $table->text('display4');
            $table->text('display5');
            $table->text('display6');
            $table->text('display7');
            $table->text('display8');
            $table->string('unit_name', 100);
            $table->string('subjudul', 1000);
            $table->string('room', 1000);
            $table->string('category', 50);
            $table->string('units_desc', 2000);
            $table->string('location_link', 2000);
            $table->string('price', 100);
            $table->string('availability', 50);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('units');
    }
};
