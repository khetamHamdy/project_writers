<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('logo', 255);
            $table->string('info_email', 255)->nullable();
            $table->string('mobile', 20)->nullable();
            $table->string('image', 255)->nullable();
            $table->integer('is_maintenance_mode')->default(0)->comment('0->off , 1->on');
            $table->string('facebook', 191);
            $table->string('linkedin', 191);
            $table->text('whatsapp');
            $table->text('twitter')->nullable();
            $table->text('seo_in_body')->nullable();
            $table->integer('tax_amount')->nullable();
            $table->text('currency')->nullable();
            $table->text('seo_in_header')->nullable();
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
        Schema::dropIfExists('settings');
    }
}
