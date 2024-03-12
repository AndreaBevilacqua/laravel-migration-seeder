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
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('agency',30);
            $table->string('departures_station',100);
            $table->string('arrivals_station',100);
            $table->string('departure_time',100);
            $table->string('arrival_time',100);
            $table->smallInteger('train_code')->unsigned();
            $table->tinyInteger('carriages_code')->unsigned();
            $table->boolean('in_time')->default(1);
            $table->boolean('is_canceled')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trains');
    }
};
