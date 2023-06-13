<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('code');
            $table->string('name_ar')->nullable();
            $table->string('name_en')->nullable();
            $table->string('description_ar')->nullable();
            $table->string('description_en')->nullable();
            $table->string('note_vat_ar')->nullable();
            $table->string('note_vat_en')->nullable();
            $table->string('code_number')->nullable();
            $table->text('image')->nullable();
            $table->string('note')->nullable();
            $table->string('sort_by')->nullable();
            $table->integer('is_active')->default(0);
            $table->integer('make_as_new')->default('0');
            $table->integer('make_as_signature')->default('0');
            $table->unsignedBigInteger('parent_id')->nullable();
            $table->foreignId('business_id')->constrained('businesses');
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
        Schema::dropIfExists('categories');
    }
}
