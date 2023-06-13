<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name_ar')->nullable();
            $table->string('note_ar')->nullable();
            $table->string('name_en')->nullable();
            $table->string('note_en')->nullable();
            $table->text('image')->nullable();
            $table->longText('video')->nullable();
            $table->string('code_number')->nullable();
            $table->decimal('price', 10, 2)->nullable();
            $table->decimal('price_2', 10, 2)->nullable();
            $table->decimal('price_3', 10, 2)->nullable();
            $table->integer('preperation_time')->default(0);
            $table->integer('max_preparation_time')->nullable();
            $table->integer('is_active')->default(1);
            $table->integer('make_as_new')->default('0');
            $table->integer('make_as_sold')->default('0');
            $table->integer('display_nutrition_fact')->default('0');
            $table->bigInteger('category_code');
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
        Schema::dropIfExists('products');
    }
}
