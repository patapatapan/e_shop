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
        Schema::create('custom', function (Blueprint $table) {
            $table->id();
            $table->string('email')->unique();
            $table->string('password', 20);
            $table->string('name', 50);
            $table->string('nickname', 20)->nullable();
            $table->boolean('sexual')->default(1);
            $table->string('tele', 20)->nullable();
            $table->string('mobile', 20);
            $table->datetime('born');
            $table->string('country');
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
        Schema::dropIfExists('custom');
    }
};
