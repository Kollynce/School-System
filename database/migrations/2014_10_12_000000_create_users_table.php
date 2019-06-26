<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('adm')->unique()->nullable();
            $table->string('course')->nullable();
            $table->string('gudian_name')->nullable();
            $table->integer('phone_number')->nullable();
            $table->integer('id_number')->nullable();
            $table->integer('year_joined')->nullable();
            $table->integer('current_year')->nullable();
            $table->integer('gudian_number')->nullable();
            $table->string('gender')->nullable();
            $table->string('county')->nullable();
            $table->string('district')->nullable();
            $table->string('division')->nullable();
            $table->string('dob')->nullable();
            $table->string('user_type')->default('student');
            $table->string('avatar')->default('avatar.png');
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
