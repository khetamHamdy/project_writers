<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWriterPlatformsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('writer_platforms', function (Blueprint $table) {
            $table->id();
            $table->foreignId('writer_id')->constrained('writers')->onDelete('cascade');
            $table->string('name_platform');
            $table->string('url_platform');
            $table->string('image_platform')->nullable();
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
        Schema::dropIfExists('writer_platforms');
    }
}
