<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('code_number')->nullable();
            $table->string('daily_number')->nullable();
            $table->string('date')->nullable();
            $table->string('delivery_date_arrive')->nullable();
            $table->string('delivery_date_update')->nullable();
            $table->string('customer_name')->nullable();
            $table->string('customer_phone')->nullable();
            $table->string('customer_email')->nullable();
            $table->decimal('total',11,9)->nullable();
            $table->decimal('discount',11,9)->nullable();
            $table->decimal('discount_percent',11,9)->default(0);
            $table->decimal('extra',11,9)->nullable();
            $table->decimal('tax',11,9)->nullable();
            $table->decimal('service',11,9)->nullable();
            $table->string('status')->default('open');
            $table->integer('printed')->nullable()->default(0);
            $table->integer('export')->nullable()->default(0);
            $table->string('note')->nullable();
            $table->foreignId('table_id')->nullable()->constrained('tables')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('waiter_id')->nullable()->constrained('waiters')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('business_id')->nullable()->constrained('businesses')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('payment_id')->nullable()->constrained('payments')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('status_id')->constrained('statuses')->onUpdate('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('orders');
    }
}
