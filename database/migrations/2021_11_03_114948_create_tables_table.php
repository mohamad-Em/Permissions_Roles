<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTablesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tables', function (Blueprint $table) {
            $table->id();
            $table->string('code_id')->nullable();
            $table->string('name_ar')->nullable();
            $table->string('name_en')->nullable();
            $table->longText('qr_code')->nullable();
            $table->integer('is_active')->default(0);
            $table->integer('table_count')->default(1);
            $table->integer('start_of')->default(1);
            $table->string('code_number')->nullable();
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
        Schema::dropIfExists('tables');
    }
}
