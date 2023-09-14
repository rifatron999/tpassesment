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
         Schema::create('combined_data', function (Blueprint $table) {
            $table->id();
            $table->integer('shop_id')->nullable();
            $table->integer('code')->nullable();
            $table->integer('success')->nullable();
            $table->string('extra')->nullable();
            $table->json('data')->nullable();
            $table->integer('timestamp')->nullable();
            $table->string('seller_id')->nullable();
            $table->integer('message_type')->nullable();
            $table->string('site')->nullable();
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
        Schema::dropIfExists('combined_data');
    }
};
