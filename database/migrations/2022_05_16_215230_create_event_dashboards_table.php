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
        Schema::create('event_dashboards', function (Blueprint $table) {
            $table->id();
            $table->string('job_id');
            $table->index('job_id');
            $table->string('status')->nullable();
            $table->json('errors')->nullable();
            $table->json('event_data')->nullable();
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
        Schema::dropIfExists('event_dashboards');
    }
};
