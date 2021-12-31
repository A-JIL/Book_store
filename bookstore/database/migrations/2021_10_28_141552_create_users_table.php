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
            $table->String('Name',25);
            $table->String('Role',25)->default("User");
            $table->String('Email',50);
            $table->String('Address',150);
            $table->String('Kindle_id',50)->default('null');
            $table->String('Pincode',7);
            $table->String('Password',50);
            $table->boolean('Status')->default(0);
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
