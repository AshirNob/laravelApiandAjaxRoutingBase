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
            $table->string('username')->nullable();
            $table->string('full_name')->nullable();
            $table->string('email')->unique();
            $table->string('phone_number')->nullable();
            $table->string('profile_img')->nullable();
            $table->integer("account")->default(0);
            $table->integer("role")->default(4);
            $table->string('ip')->nullable();
            $table->DateTime('date_of_joining')->nullable();
            $table->DateTime('last_login_time')->nullable();
            $table->enum('is_new_user', ['Yes', 'No'])->nullable();
            $table->string('token')->nullable();
            $table->string('device_id')->nullable();
            $table->enum('email_verfication_status', ['verified', 'Not-Verified'])->nullable();
            $table->smallInteger('status')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
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
