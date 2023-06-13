<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLocationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('locations', function (Blueprint $table) {
            $table->id();
            $table->string('location_name')->nullable();
            $table->string('location_identifi')->nullable();
            $table->string('logo')->nullable();
            $table->text('location_address')->nullable();
            $table->decimal('location_long')->nullable();
            $table->decimal('location_latit')->nullable();
            $table->string('city')->nullable();
            $table->string('country')->nullable();
            $table->string('state')->nullable();
            $table->string('postal')->nullable();
            $table->string('phone')->nullable();
            $table->string('time_unity')->nullable();
            $table->string('web_site')->nullable();
            $table->string('instagram_site')->nullable();
            $table->string('facebook_site')->nullable();
            $table->string('twitter_site')->nullable();
            $table->string('snapchat_site')->nullable();
            $table->string('zomato_site')->nullable();
            $table->string('tiktok_site')->nullable();
            $table->foreignId('user_id')->constrained('users');
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
        Schema::dropIfExists('locations');
    }
}
