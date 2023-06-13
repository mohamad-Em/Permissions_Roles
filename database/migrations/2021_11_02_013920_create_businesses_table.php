<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBusinessesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('businesses', function (Blueprint $table) {
            $table->id();
            $table->string('business_name')->nullable();
            $table->string('slug_business_name')->nullable();
            $table->string('solutions_choosen')->nullable();
            $table->integer('tablet_menu')->default(0);
            $table->integer('qr_mobile_menu')->default(0);
            $table->integer('delivery_pick_up_menu')->default(0);
            $table->integer('hotel_in_room_poolside_menu')->default(0);
            $table->string('business_email')->nullable();
            $table->string('code_number')->nullable();
            $table->integer('is_active')->default(1);
            $table->date('business_start_at')->nullable();
            $table->date('business_end_at')->nullable();
            $table->foreignId('user_id')->nullable();
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
        Schema::dropIfExists('businesses');
    }
}
