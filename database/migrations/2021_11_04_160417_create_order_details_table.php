<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_details', function (Blueprint $table) {
            $table->id();
            $table->integer('daily_number')->nullable();
            $table->integer('order_number')->nullable();
            $table->double('qty')->nullable();
            $table->decimal('price', 11, 9)->nullable();
            $table->decimal('amount', 11, 9)->nullable();
            $table->decimal('discount', 11, 9)->nullable();
            $table->string('note')->nullable();
            $table->foreignId('order_id')->references('id')->on('orders');
            $table->foreignId('business_id')->nullable()->references('id')->on('businesses');
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
        Schema::dropIfExists('order_details');
    }
}
