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
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('NIK')->unique();
            $table->string('birth_place');
            $table->date('birth_date');
            $table->string('religion');
            $table->string('gender');
            $table->string('occupation');
            $table->string('home_block');
            $table->smallInteger('home_number');
            $table->string('KTP');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('old_password');
            $table->boolean('is_admin')->default(false);
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
