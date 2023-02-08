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
        Schema::create('losts', function (Blueprint $table) {
            $table->id();
            $table->string('full_name')->nullable()->index();
            $table->string('city')->nullable()->index();
            $table->string('district')->nullable()->index();
            $table->string('contact')->nullable()->index();
            $table->string('status')->nullable()->index();
            $table->string('saver')->nullable()->index();
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
        Schema::dropIfExists('losts');
    }
};
