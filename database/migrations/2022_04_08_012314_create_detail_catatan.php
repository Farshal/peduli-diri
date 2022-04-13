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
        Schema::create('detail_catatan', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('users_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
            $table->float('body_temperature');
            $table->string('location');
            $table->string('tanggal');
            $table->string('jam');  
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
        Schema::dropIfExists('detail_catatan');
    }
};
