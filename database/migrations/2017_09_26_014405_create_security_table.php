<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSecurityTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('security', function (Blueprint $table) {
            $table->increments('id');
            $table->string('roomId');
            $table->date('date');
            $table->integer('transactionQuantity'); //* The statistic was based on card access transaction record (one time swipe in & one time swipe out)
            $table->timestamps();
        });

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-01-01"),
            'transactionQuantity' => rand(25,100),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-01-02"),
            'transactionQuantity' => rand(25,100),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-01-03"),
            'transactionQuantity' => rand(25,100),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-01-04"),
            'transactionQuantity' => rand(25,100),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-01-05"),
            'transactionQuantity' => rand(25,100),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-01-06"),
            'transactionQuantity' => rand(25,100),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-01-07"),
            'transactionQuantity' => rand(25,100),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-01-08"),
            'transactionQuantity' => rand(25,100),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-01-09"),
            'transactionQuantity' => rand(25,100),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-01-10"),
            'transactionQuantity' => rand(25,100),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-01-11"),
            'transactionQuantity' => rand(25,100),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-01-12"),
            'transactionQuantity' => rand(25,100),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-01-13"),
            'transactionQuantity' => rand(25,100),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-01-14"),
            'transactionQuantity' => rand(25,100),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-01-15"),
            'transactionQuantity' => rand(25,100),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-01-16"),
            'transactionQuantity' => rand(25,100),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-01-17"),
            'transactionQuantity' => rand(25,100),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-01-18"),
            'transactionQuantity' => rand(25,100),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-01-19"),
            'transactionQuantity' => rand(25,100),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-01-20"),
            'transactionQuantity' => rand(25,100),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-01-21"),
            'transactionQuantity' => rand(25,100),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-01-22"),
            'transactionQuantity' => rand(25,100),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-01-23"),
            'transactionQuantity' => rand(25,100),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-01-24"),
            'transactionQuantity' => rand(25,100),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-01-25"),
            'transactionQuantity' => rand(25,100),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-01-26"),
            'transactionQuantity' => rand(25,100),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-01-27"),
            'transactionQuantity' => rand(25,100),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-01-28"),
            'transactionQuantity' => rand(25,100),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-01-29"),
            'transactionQuantity' => rand(25,100),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-01-30"),
            'transactionQuantity' => rand(25,100),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-01-31"),
            'transactionQuantity' => rand(25,100),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-02-01"),
            'transactionQuantity' => rand(25,100),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-02-02"),
            'transactionQuantity' => rand(25,100),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-02-03"),
            'transactionQuantity' => rand(25,100),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-02-04"),
            'transactionQuantity' => rand(25,100),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-02-05"),
            'transactionQuantity' => rand(25,100),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-02-06"),
            'transactionQuantity' => rand(25,100),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-02-07"),
            'transactionQuantity' => rand(25,100),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-02-08"),
            'transactionQuantity' => rand(25,100),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-02-09"),
            'transactionQuantity' => rand(25,100),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-02-10"),
            'transactionQuantity' => rand(25,100),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-02-11"),
            'transactionQuantity' => rand(25,100),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-02-12"),
            'transactionQuantity' => rand(25,100),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-02-13"),
            'transactionQuantity' => rand(25,100),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-02-14"),
            'transactionQuantity' => rand(25,100),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-02-15"),
            'transactionQuantity' => rand(25,100),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-02-16"),
            'transactionQuantity' => rand(25,100),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-02-17"),
            'transactionQuantity' => rand(25,100),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-02-18"),
            'transactionQuantity' => rand(25,100),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-02-19"),
            'transactionQuantity' => rand(25,100),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-02-20"),
            'transactionQuantity' => rand(25,100),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-02-21"),
            'transactionQuantity' => rand(25,100),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-02-22"),
            'transactionQuantity' => rand(25,100),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-02-23"),
            'transactionQuantity' => rand(25,100),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-02-24"),
            'transactionQuantity' => rand(25,100),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-02-25"),
            'transactionQuantity' => rand(25,100),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-02-26"),
            'transactionQuantity' => rand(25,100),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-02-27"),
            'transactionQuantity' => rand(25,100),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-02-28"),
            'transactionQuantity' => rand(25,100),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-02-29"),
            'transactionQuantity' => rand(25,100),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-03-01"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-03-02"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-03-03"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-03-04"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-03-05"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-03-06"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-03-07"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-03-08"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-03-09"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-03-10"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-03-11"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-03-12"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-03-13"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-03-14"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-03-15"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-03-16"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-03-17"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-03-18"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-03-19"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-03-20"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-03-21"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-03-22"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-03-23"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-03-24"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-03-25"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-03-26"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-03-27"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-03-28"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-03-29"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-03-30"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-03-31"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-04-01"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-04-02"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-04-03"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-04-04"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-04-05"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-04-06"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-04-07"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-04-08"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-04-09"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-04-10"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-04-11"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-04-12"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-04-13"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-04-14"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-04-15"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-04-16"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-04-17"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-04-18"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-04-19"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-04-20"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-04-21"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-04-22"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-04-23"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-04-24"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-04-25"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-04-26"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-04-27"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-04-28"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-04-29"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-04-30"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-05-01"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-05-02"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-05-03"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-05-05"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-05-05"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-05-06"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-05-07"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-05-08"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-05-09"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-05-10"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-05-11"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-05-12"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-05-13"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-05-14"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-05-15"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-05-16"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-05-17"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-05-18"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-05-19"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-05-20"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-05-21"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-05-22"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-05-23"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-05-24"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-05-25"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-05-26"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-05-27"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-05-28"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-05-29"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-05-30"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-05-31"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-06-01"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-06-02"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-06-03"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-06-05"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-06-05"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-06-06"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-06-07"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-06-08"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-06-09"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-06-10"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-06-11"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-06-12"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-06-13"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-06-14"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-06-15"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-06-16"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-06-17"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-06-18"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-06-19"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-06-20"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-06-21"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-06-22"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-06-23"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-06-24"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-06-25"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-06-26"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-06-27"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-06-28"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-06-29"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-06-30"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-07-01"),
            'transactionQuantity' => rand(25,100),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-07-02"),
            'transactionQuantity' => rand(25,100),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-07-03"),
            'transactionQuantity' => rand(25,100),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-07-05"),
            'transactionQuantity' => rand(25,100),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-07-05"),
            'transactionQuantity' => rand(25,100),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-07-06"),
            'transactionQuantity' => rand(25,100),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-07-07"),
            'transactionQuantity' => rand(25,100),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-07-08"),
            'transactionQuantity' => rand(25,100),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-07-09"),
            'transactionQuantity' => rand(25,100),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-07-10"),
            'transactionQuantity' => rand(25,100),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-07-11"),
            'transactionQuantity' => rand(25,100),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-07-12"),
            'transactionQuantity' => rand(25,100),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-07-13"),
            'transactionQuantity' => rand(25,100),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-07-14"),
            'transactionQuantity' => rand(25,100),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-07-15"),
            'transactionQuantity' => rand(25,100),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-07-16"),
            'transactionQuantity' => rand(25,100),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-07-17"),
            'transactionQuantity' => rand(25,100),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-07-18"),
            'transactionQuantity' => rand(25,100),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-07-19"),
            'transactionQuantity' => rand(25,100),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-07-20"),
            'transactionQuantity' => rand(25,100),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-07-21"),
            'transactionQuantity' => rand(25,100),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-07-22"),
            'transactionQuantity' => rand(25,100),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-07-23"),
            'transactionQuantity' => rand(25,100),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-07-24"),
            'transactionQuantity' => rand(25,100),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-07-25"),
            'transactionQuantity' => rand(25,100),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-07-26"),
            'transactionQuantity' => rand(25,100),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-07-27"),
            'transactionQuantity' => rand(25,100),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-07-28"),
            'transactionQuantity' => rand(25,100),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-07-29"),
            'transactionQuantity' => rand(25,100),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-07-30"),
            'transactionQuantity' => rand(25,100),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-07-31"),
            'transactionQuantity' => rand(25,100),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-08-01"),
            'transactionQuantity' => rand(25,100),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-08-02"),
            'transactionQuantity' => rand(25,100),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-08-03"),
            'transactionQuantity' => rand(25,100),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-08-05"),
            'transactionQuantity' => rand(25,100),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-08-05"),
            'transactionQuantity' => rand(25,100),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-08-06"),
            'transactionQuantity' => rand(25,100),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-08-07"),
            'transactionQuantity' => rand(25,100),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-08-08"),
            'transactionQuantity' => rand(25,100),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-08-09"),
            'transactionQuantity' => rand(25,100),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-08-10"),
            'transactionQuantity' => rand(25,100),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-08-11"),
            'transactionQuantity' => rand(25,100),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-08-12"),
            'transactionQuantity' => rand(25,100),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-08-13"),
            'transactionQuantity' => rand(25,100),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-08-14"),
            'transactionQuantity' => rand(25,100),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-08-15"),
            'transactionQuantity' => rand(25,100),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-08-16"),
            'transactionQuantity' => rand(25,100),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-08-17"),
            'transactionQuantity' => rand(25,100),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-08-18"),
            'transactionQuantity' => rand(25,100),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-08-19"),
            'transactionQuantity' => rand(25,100),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-08-20"),
            'transactionQuantity' => rand(25,100),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-08-21"),
            'transactionQuantity' => rand(25,100),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-08-22"),
            'transactionQuantity' => rand(25,100),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-08-23"),
            'transactionQuantity' => rand(25,100),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-08-24"),
            'transactionQuantity' => rand(25,100),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-08-25"),
            'transactionQuantity' => rand(25,100),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-08-26"),
            'transactionQuantity' => rand(25,100),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-08-27"),
            'transactionQuantity' => rand(25,100),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-08-28"),
            'transactionQuantity' => rand(25,100),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-08-29"),
            'transactionQuantity' => rand(25,100),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-08-30"),
            'transactionQuantity' => rand(25,100),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-08-31"),
            'transactionQuantity' => rand(25,100),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-09-01"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-09-02"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-09-03"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-09-05"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-09-05"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-09-06"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-09-07"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-09-08"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-09-09"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-09-10"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-09-11"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-09-12"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-09-13"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-09-14"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-09-15"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-09-16"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-09-17"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-09-18"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-09-19"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-09-20"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-09-21"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-09-22"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-09-23"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-09-24"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-09-25"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-09-26"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-09-27"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-09-28"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-09-29"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-09-30"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-10-01"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-10-02"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-10-03"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-10-05"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-10-05"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-10-06"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-10-07"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-10-08"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-10-09"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-10-10"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-10-11"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-10-12"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-10-13"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-10-14"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-10-15"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-10-16"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-10-17"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-10-18"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-10-19"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-10-20"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-10-21"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-10-22"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-10-23"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-10-24"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-10-25"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-10-26"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-10-27"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-10-28"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-10-29"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-10-30"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-10-31"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-11-01"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-11-02"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-11-03"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-11-05"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-11-05"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-11-06"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-11-07"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-11-08"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-11-09"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-11-10"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-11-11"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-11-12"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-11-13"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-11-14"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-11-15"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-11-16"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-11-17"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-11-18"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-11-19"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-11-20"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-11-21"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-11-22"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-11-23"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-11-24"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-11-25"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-11-26"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-11-27"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-11-28"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-11-29"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-11-30"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-12-01"),
            'transactionQuantity' => rand(25,100),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-12-02"),
            'transactionQuantity' => rand(25,100),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-12-03"),
            'transactionQuantity' => rand(25,100),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-12-05"),
            'transactionQuantity' => rand(25,100),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-12-05"),
            'transactionQuantity' => rand(25,100),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-12-06"),
            'transactionQuantity' => rand(25,100),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-12-07"),
            'transactionQuantity' => rand(25,100),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-12-08"),
            'transactionQuantity' => rand(25,100),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-12-09"),
            'transactionQuantity' => rand(25,100),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-12-10"),
            'transactionQuantity' => rand(25,100),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-12-11"),
            'transactionQuantity' => rand(25,100),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-12-12"),
            'transactionQuantity' => rand(25,100),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-12-13"),
            'transactionQuantity' => rand(25,100),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-12-14"),
            'transactionQuantity' => rand(25,100),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-12-15"),
            'transactionQuantity' => rand(25,100),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-12-16"),
            'transactionQuantity' => rand(25,100),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-12-17"),
            'transactionQuantity' => rand(25,100),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-12-18"),
            'transactionQuantity' => rand(25,100),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-12-19"),
            'transactionQuantity' => rand(25,100),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-12-20"),
            'transactionQuantity' => rand(25,100),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-12-21"),
            'transactionQuantity' => rand(25,100),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-12-22"),
            'transactionQuantity' => rand(25,100),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-12-23"),
            'transactionQuantity' => rand(25,100),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-12-24"),
            'transactionQuantity' => rand(25,100),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-12-25"),
            'transactionQuantity' => rand(25,100),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-12-26"),
            'transactionQuantity' => rand(25,100),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-12-27"),
            'transactionQuantity' => rand(25,100),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-12-28"),
            'transactionQuantity' => rand(25,100),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-12-29"),
            'transactionQuantity' => rand(25,100),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-12-30"),
            'transactionQuantity' => rand(25,100),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2000-12-31"),
            'transactionQuantity' => rand(25,100),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-01-01"),
            'transactionQuantity' => rand(25,100),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-01-02"),
            'transactionQuantity' => rand(25,100),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-01-03"),
            'transactionQuantity' => rand(25,100),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-01-04"),
            'transactionQuantity' => rand(25,100),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-01-05"),
            'transactionQuantity' => rand(25,100),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-01-06"),
            'transactionQuantity' => rand(25,100),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-01-07"),
            'transactionQuantity' => rand(25,100),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-01-08"),
            'transactionQuantity' => rand(25,100),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-01-09"),
            'transactionQuantity' => rand(25,100),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-01-10"),
            'transactionQuantity' => rand(25,100),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-01-11"),
            'transactionQuantity' => rand(25,100),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-01-12"),
            'transactionQuantity' => rand(25,100),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-01-13"),
            'transactionQuantity' => rand(25,100),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-01-14"),
            'transactionQuantity' => rand(25,100),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-01-15"),
            'transactionQuantity' => rand(25,100),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-01-16"),
            'transactionQuantity' => rand(25,100),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-01-17"),
            'transactionQuantity' => rand(25,100),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-01-18"),
            'transactionQuantity' => rand(25,100),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-01-19"),
            'transactionQuantity' => rand(25,100),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-01-20"),
            'transactionQuantity' => rand(25,100),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-01-21"),
            'transactionQuantity' => rand(25,100),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-01-22"),
            'transactionQuantity' => rand(25,100),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-01-23"),
            'transactionQuantity' => rand(25,100),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-01-24"),
            'transactionQuantity' => rand(25,100),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-01-25"),
            'transactionQuantity' => rand(25,100),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-01-26"),
            'transactionQuantity' => rand(25,100),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-01-27"),
            'transactionQuantity' => rand(25,100),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-01-28"),
            'transactionQuantity' => rand(25,100),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-01-29"),
            'transactionQuantity' => rand(25,100),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-01-30"),
            'transactionQuantity' => rand(25,100),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-01-31"),
            'transactionQuantity' => rand(25,100),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-02-01"),
            'transactionQuantity' => rand(25,100),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-02-02"),
            'transactionQuantity' => rand(25,100),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-02-03"),
            'transactionQuantity' => rand(25,100),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-02-04"),
            'transactionQuantity' => rand(25,100),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-02-05"),
            'transactionQuantity' => rand(25,100),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-02-06"),
            'transactionQuantity' => rand(25,100),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-02-07"),
            'transactionQuantity' => rand(25,100),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-02-08"),
            'transactionQuantity' => rand(25,100),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-02-09"),
            'transactionQuantity' => rand(25,100),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-02-10"),
            'transactionQuantity' => rand(25,100),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-02-11"),
            'transactionQuantity' => rand(25,100),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-02-12"),
            'transactionQuantity' => rand(25,100),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-02-13"),
            'transactionQuantity' => rand(25,100),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-02-14"),
            'transactionQuantity' => rand(25,100),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-02-15"),
            'transactionQuantity' => rand(25,100),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-02-16"),
            'transactionQuantity' => rand(25,100),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-02-17"),
            'transactionQuantity' => rand(25,100),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-02-18"),
            'transactionQuantity' => rand(25,100),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-02-19"),
            'transactionQuantity' => rand(25,100),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-02-20"),
            'transactionQuantity' => rand(25,100),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-02-21"),
            'transactionQuantity' => rand(25,100),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-02-22"),
            'transactionQuantity' => rand(25,100),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-02-23"),
            'transactionQuantity' => rand(25,100),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-02-24"),
            'transactionQuantity' => rand(25,100),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-02-25"),
            'transactionQuantity' => rand(25,100),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-02-26"),
            'transactionQuantity' => rand(25,100),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-02-27"),
            'transactionQuantity' => rand(25,100),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-02-28"),
            'transactionQuantity' => rand(25,100),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-03-01"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-03-02"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-03-03"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-03-04"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-03-05"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-03-06"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-03-07"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-03-08"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-03-09"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-03-10"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-03-11"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-03-12"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-03-13"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-03-14"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-03-15"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-03-16"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-03-17"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-03-18"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-03-19"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-03-20"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-03-21"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-03-22"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-03-23"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-03-24"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-03-25"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-03-26"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-03-27"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-03-28"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-03-29"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-03-30"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-03-31"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-04-01"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-04-02"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-04-03"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-04-04"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-04-05"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-04-06"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-04-07"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-04-08"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-04-09"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-04-10"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-04-11"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-04-12"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-04-13"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-04-14"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-04-15"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-04-16"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-04-17"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-04-18"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-04-19"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-04-20"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-04-21"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-04-22"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-04-23"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-04-24"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-04-25"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-04-26"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-04-27"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-04-28"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-04-29"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-04-30"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-05-01"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-05-02"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-05-03"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-05-05"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-05-05"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-05-06"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-05-07"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-05-08"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-05-09"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-05-10"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-05-11"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-05-12"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-05-13"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-05-14"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-05-15"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-05-16"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-05-17"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-05-18"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-05-19"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-05-20"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-05-21"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-05-22"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-05-23"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-05-24"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-05-25"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-05-26"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-05-27"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-05-28"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-05-29"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-05-30"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-05-31"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-06-01"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-06-02"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-06-03"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-06-05"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-06-05"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-06-06"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-06-07"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-06-08"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-06-09"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-06-10"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-06-11"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-06-12"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-06-13"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-06-14"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-06-15"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-06-16"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-06-17"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-06-18"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-06-19"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-06-20"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-06-21"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-06-22"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-06-23"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-06-24"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-06-25"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-06-26"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-06-27"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-06-28"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-06-29"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-06-30"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-07-01"),
            'transactionQuantity' => rand(25,100),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-07-02"),
            'transactionQuantity' => rand(25,100),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-07-03"),
            'transactionQuantity' => rand(25,100),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-07-05"),
            'transactionQuantity' => rand(25,100),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-07-05"),
            'transactionQuantity' => rand(25,100),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-07-06"),
            'transactionQuantity' => rand(25,100),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-07-07"),
            'transactionQuantity' => rand(25,100),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-07-08"),
            'transactionQuantity' => rand(25,100),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-07-09"),
            'transactionQuantity' => rand(25,100),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-07-10"),
            'transactionQuantity' => rand(25,100),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-07-11"),
            'transactionQuantity' => rand(25,100),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-07-12"),
            'transactionQuantity' => rand(25,100),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-07-13"),
            'transactionQuantity' => rand(25,100),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-07-14"),
            'transactionQuantity' => rand(25,100),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-07-15"),
            'transactionQuantity' => rand(25,100),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-07-16"),
            'transactionQuantity' => rand(25,100),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-07-17"),
            'transactionQuantity' => rand(25,100),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-07-18"),
            'transactionQuantity' => rand(25,100),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-07-19"),
            'transactionQuantity' => rand(25,100),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-07-20"),
            'transactionQuantity' => rand(25,100),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-07-21"),
            'transactionQuantity' => rand(25,100),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-07-22"),
            'transactionQuantity' => rand(25,100),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-07-23"),
            'transactionQuantity' => rand(25,100),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-07-24"),
            'transactionQuantity' => rand(25,100),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-07-25"),
            'transactionQuantity' => rand(25,100),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-07-26"),
            'transactionQuantity' => rand(25,100),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-07-27"),
            'transactionQuantity' => rand(25,100),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-07-28"),
            'transactionQuantity' => rand(25,100),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-07-29"),
            'transactionQuantity' => rand(25,100),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-07-30"),
            'transactionQuantity' => rand(25,100),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-07-31"),
            'transactionQuantity' => rand(25,100),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-08-01"),
            'transactionQuantity' => rand(25,100),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-08-02"),
            'transactionQuantity' => rand(25,100),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-08-03"),
            'transactionQuantity' => rand(25,100),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-08-05"),
            'transactionQuantity' => rand(25,100),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-08-05"),
            'transactionQuantity' => rand(25,100),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-08-06"),
            'transactionQuantity' => rand(25,100),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-08-07"),
            'transactionQuantity' => rand(25,100),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-08-08"),
            'transactionQuantity' => rand(25,100),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-08-09"),
            'transactionQuantity' => rand(25,100),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-08-10"),
            'transactionQuantity' => rand(25,100),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-08-11"),
            'transactionQuantity' => rand(25,100),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-08-12"),
            'transactionQuantity' => rand(25,100),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-08-13"),
            'transactionQuantity' => rand(25,100),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-08-14"),
            'transactionQuantity' => rand(25,100),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-08-15"),
            'transactionQuantity' => rand(25,100),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-08-16"),
            'transactionQuantity' => rand(25,100),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-08-17"),
            'transactionQuantity' => rand(25,100),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-08-18"),
            'transactionQuantity' => rand(25,100),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-08-19"),
            'transactionQuantity' => rand(25,100),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-08-20"),
            'transactionQuantity' => rand(25,100),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-08-21"),
            'transactionQuantity' => rand(25,100),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-08-22"),
            'transactionQuantity' => rand(25,100),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-08-23"),
            'transactionQuantity' => rand(25,100),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-08-24"),
            'transactionQuantity' => rand(25,100),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-08-25"),
            'transactionQuantity' => rand(25,100),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-08-26"),
            'transactionQuantity' => rand(25,100),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-08-27"),
            'transactionQuantity' => rand(25,100),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-08-28"),
            'transactionQuantity' => rand(25,100),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-08-29"),
            'transactionQuantity' => rand(25,100),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-08-30"),
            'transactionQuantity' => rand(25,100),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-08-31"),
            'transactionQuantity' => rand(25,100),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-09-01"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-09-02"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-09-03"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-09-05"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-09-05"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-09-06"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-09-07"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-09-08"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-09-09"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-09-10"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-09-11"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-09-12"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-09-13"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-09-14"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-09-15"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-09-16"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-09-17"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-09-18"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-09-19"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-09-20"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-09-21"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-09-22"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-09-23"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-09-24"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-09-25"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-09-26"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-09-27"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-09-28"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-09-29"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-09-30"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-10-01"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-10-02"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-10-03"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-10-05"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-10-05"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-10-06"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-10-07"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-10-08"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-10-09"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-10-10"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-10-11"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-10-12"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-10-13"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-10-14"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-10-15"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-10-16"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-10-17"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-10-18"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-10-19"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-10-20"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-10-21"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-10-22"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-10-23"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-10-24"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-10-25"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-10-26"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-10-27"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-10-28"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-10-29"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-10-30"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-10-31"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-11-01"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-11-02"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-11-03"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-11-05"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-11-05"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-11-06"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-11-07"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-11-08"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-11-09"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-11-10"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-11-11"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-11-12"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-11-13"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-11-14"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-11-15"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-11-16"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-11-17"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-11-18"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-11-19"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-11-20"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-11-21"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-11-22"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-11-23"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-11-24"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-11-25"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-11-26"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-11-27"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-11-28"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-11-29"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-11-30"),
            'transactionQuantity' => rand(100, 300),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-12-01"),
            'transactionQuantity' => rand(25,100),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-12-02"),
            'transactionQuantity' => rand(25,100),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-12-03"),
            'transactionQuantity' => rand(25,100),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-12-05"),
            'transactionQuantity' => rand(25,100),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-12-05"),
            'transactionQuantity' => rand(25,100),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-12-06"),
            'transactionQuantity' => rand(25,100),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-12-07"),
            'transactionQuantity' => rand(25,100),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-12-08"),
            'transactionQuantity' => rand(25,100),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-12-09"),
            'transactionQuantity' => rand(25,100),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-12-10"),
            'transactionQuantity' => rand(25,100),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-12-11"),
            'transactionQuantity' => rand(25,100),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-12-12"),
            'transactionQuantity' => rand(25,100),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-12-13"),
            'transactionQuantity' => rand(25,100),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-12-14"),
            'transactionQuantity' => rand(25,100),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-12-15"),
            'transactionQuantity' => rand(25,100),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-12-16"),
            'transactionQuantity' => rand(25,100),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-12-17"),
            'transactionQuantity' => rand(25,100),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-12-18"),
            'transactionQuantity' => rand(25,100),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-12-19"),
            'transactionQuantity' => rand(25,100),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-12-20"),
            'transactionQuantity' => rand(25,100),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-12-21"),
            'transactionQuantity' => rand(25,100),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-12-22"),
            'transactionQuantity' => rand(25,100),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-12-23"),
            'transactionQuantity' => rand(25,100),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-12-24"),
            'transactionQuantity' => rand(25,100),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-12-25"),
            'transactionQuantity' => rand(25,100),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-12-26"),
            'transactionQuantity' => rand(25,100),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-12-27"),
            'transactionQuantity' => rand(25,100),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-12-28"),
            'transactionQuantity' => rand(25,100),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-12-29"),
            'transactionQuantity' => rand(25,100),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-12-30"),
            'transactionQuantity' => rand(25,100),
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "X999",
            'date' => date("2001-12-31"),
            'transactionQuantity' => rand(25,100),
        ));
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('security');
    }
}
