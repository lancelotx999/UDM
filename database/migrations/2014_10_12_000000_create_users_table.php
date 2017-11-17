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
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('role')->default('user');
            $table->rememberToken();
            $table->timestamps();
        });

        DB::table('users')->insert(
        array(
            'name' => "Sean Lee",
            'email' => "4308131@UDM.com",
            'password' => bcrypt("4308131"),
            'role' => "admin",
        ));

        DB::table('users')->insert(
        array(
            'name' => "Kenneth Yeo",
            'email' => "4332466@UDM.com",
            'password' => bcrypt("4332466"),
            'role' => "admin",
        ));        

        DB::table('users')->insert(
        array(
            'name' => "Kevin Wong",
            'email' => "4310128@SCVMS.com",
            'password' => bcrypt("4310128"),
            'role' => "user",
        ));

        DB::table('users')->insert(
        array(
            'name' => "Leslie Ling",
            'email' => "4331990@UDM.com",
            'password' => bcrypt("4331990"),
            'role' => "user",
        ));
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
