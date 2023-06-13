<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()

    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('last_name');
            $table->integer('is_admin')->default(0);

            $table->string('subscriber_full_name')->nullable();
            $table->string('job_title')->nullable();
            $table->integer('notify_email')->default(0);
            $table->integer('notify_new')->default(0);
            $table->integer('notify_weekly_report')->default(0);
            $table->integer('notify_comments')->default(0);
            $table->integer('notify_orders')->default(0);
            $table->integer('notify_sms')->default(0);
            $table->integer('is_subscriber')->default(0);
            $table->string('phone_number')->nullable();
            $table->string('city')->nullable();
            $table->foreignId('city_id')->nullable();

            $table->integer('waiter_name')->nullable();
            $table->integer('is_waiter')->default(0);
            $table->integer('bin_code')->nullable();
            $table->string('code_number')->nullable();
            $table->integer('parent_id')->nullable();

            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->integer('is_active')->default(0);

            $table->date('start_at')->nullable();
            $table->date('end_at')->nullable();

            $table->rememberToken();
            $table->foreignId('current_team_id')->nullable();
            $table->string('profile_photo_path', 2048)->nullable();
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
        Schema::dropIfExists('users');
    }
}
