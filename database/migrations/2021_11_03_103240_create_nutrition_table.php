<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNutritionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nutrition', function (Blueprint $table) {
            $table->id();
            $table->string('serving_size')->nullable();
            $table->string('calories')->nullable();
            $table->string('calories_from_fat')->nullable();
            $table->string('total_fat_gr')->nullable();
            $table->string('total_fat_percent')->nullable();
            $table->string('saturated_fat_gr')->default(0);
            $table->string('saturated_fat_percent')->default(0);
            $table->string('trans_fat_gr')->default(0);
            $table->string('trans_fat_percent')->default(0);

            $table->string('cholesterol_mg')->nullable();
            $table->string('cholesterol_percent')->nullable();
            $table->string('sodium_mg')->nullable();
            $table->string('sodium_percent')->default(0);
            $table->string('total_carbonhydrate_gr')->default(0);
            $table->string('total_carbonhydrate_percent')->default(0);
            $table->string('dietary_fiber_gr')->default(0);
            $table->string('dietary_fiber_percent')->default(0);

            $table->string('sugars_gr')->nullable();
            $table->string('sugars_percent')->nullable();
            $table->string('protein_gr')->nullable();
            $table->string('protein_percent')->default(0);
            $table->string('vitamin_A')->default(0);
            $table->string('vitamin_C')->default(0);
            $table->string('calcium')->default(0);
            $table->string('iron')->default(0);

            $table->integer('is_active')->default(1);
            $table->integer('view_nutrition_infos')->default(0);
            $table->foreignId('user_id')->constrained('users');
            $table->foreignId('product_id')->constrained('products');
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
        Schema::dropIfExists('nutrition');
    }
}
