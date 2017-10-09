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
            'roomId' => "B207",
            'date' => date("2016-03-01"),
            'transactionQuantity' => 542,
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "B207",
            'date' => date("2016-03-02"),
            'transactionQuantity' => 741,
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "B207",
            'date' => date("2016-03-03"),
            'transactionQuantity' => 652,
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "B207",
            'date' => date("2016-03-04"),
            'transactionQuantity' => 514,
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "B207",
            'date' => date("2016-03-05"),
            'transactionQuantity' => 214,
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "B207",
            'date' => date("2016-03-06"),
            'transactionQuantity' => 226,
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "B207",
            'date' => date("2016-03-07"),
            'transactionQuantity' => 666,
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "B207",
            'date' => date("2016-03-08"),
            'transactionQuantity' => 652,
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "B207",
            'date' => date("2016-03-09"),
            'transactionQuantity' => 519,
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "B207",
            'date' => date("2016-03-10"),
            'transactionQuantity' => 524,
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "B207",
            'date' => date("2016-03-11"),
            'transactionQuantity' => 555,
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "B207",
            'date' => date("2016-03-12"),
            'transactionQuantity' => 600,
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "B207",
            'date' => date("2016-03-13"),
            'transactionQuantity' => 652,
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "B207",
            'date' => date("2016-03-14"),
            'transactionQuantity' => 697,
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "B207",
            'date' => date("2016-03-15"),
            'transactionQuantity' => 452,
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "B207",
            'date' => date("2016-03-16"),
            'transactionQuantity' => 420,
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "B207",
            'date' => date("2016-03-17"),
            'transactionQuantity' => 666,
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "B207",
            'date' => date("2016-03-18"),
            'transactionQuantity' => 540,
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "B207",
            'date' => date("2016-03-19"),
            'transactionQuantity' => 250,
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "B207",
            'date' => date("2016-03-20"),
            'transactionQuantity' => 300,
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "B207",
            'date' => date("2016-03-21"),
            'transactionQuantity' => 700,
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "B207",
            'date' => date("2016-03-22"),
            'transactionQuantity' => 722,
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "B207",
            'date' => date("2016-03-23"),
            'transactionQuantity' => 800,
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "B207",
            'date' => date("2016-03-24"),
            'transactionQuantity' => 600,
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "B207",
            'date' => date("2016-03-25"),
            'transactionQuantity' => 245,
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "B207",
            'date' => date("2016-03-26"),
            'transactionQuantity' => 542,
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "B207",
            'date' => date("2016-03-27"),
            'transactionQuantity' => 555,
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "B207",
            'date' => date("2016-03-28"),
            'transactionQuantity' => 600,
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "B207",
            'date' => date("2016-03-29"),
            'transactionQuantity' => 621,
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "B207",
            'date' => date("2016-03-30"),
            'transactionQuantity' => 847,
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "B207",
            'date' => date("2016-03-31"),
            'transactionQuantity' => 956,
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "A207",
            'date' => date("2016-03-01"),
            'transactionQuantity' => 555,
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "A207",
            'date' => date("2016-03-02"),
            'transactionQuantity' => 462,
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "A207",
            'date' => date("2016-03-03"),
            'transactionQuantity' => 478,
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "A207",
            'date' => date("2016-03-04"),
            'transactionQuantity' => 368,
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "A207",
            'date' => date("2016-03-05"),
            'transactionQuantity' => 175,
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "A207",
            'date' => date("2016-03-06"),
            'transactionQuantity' => 241,
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "A207",
            'date' => date("2016-03-07"),
            'transactionQuantity' => 690,
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "A207",
            'date' => date("2016-03-08"),
            'transactionQuantity' => 652,
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "A207",
            'date' => date("2016-03-09"),
            'transactionQuantity' => 482,
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "A207",
            'date' => date("2016-03-10"),
            'transactionQuantity' => 642,
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "A207",
            'date' => date("2016-03-11"),
            'transactionQuantity' => 480,
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "A207",
            'date' => date("2016-03-12"),
            'transactionQuantity' => 241,
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "A207",
            'date' => date("2016-03-13"),
            'transactionQuantity' => 283,
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "A207",
            'date' => date("2016-03-14"),
            'transactionQuantity' => 697,
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "A207",
            'date' => date("2016-03-15"),
            'transactionQuantity' => 662,
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "A207",
            'date' => date("2016-03-16"),
            'transactionQuantity' => 646,
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "A207",
            'date' => date("2016-03-17"),
            'transactionQuantity' => 690,
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "A207",
            'date' => date("2016-03-18"),
            'transactionQuantity' => 542,
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "A207",
            'date' => date("2016-03-19"),
            'transactionQuantity' => 197,
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "A207",
            'date' => date("2016-03-20"),
            'transactionQuantity' => 269,
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "A207",
            'date' => date("2016-03-21"),
            'transactionQuantity' => 674,
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "A207",
            'date' => date("2016-03-22"),
            'transactionQuantity' => 735,
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "A207",
            'date' => date("2016-03-23"),
            'transactionQuantity' => 646,
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "A207",
            'date' => date("2016-03-24"),
            'transactionQuantity' => 768,
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "A207",
            'date' => date("2016-03-25"),
            'transactionQuantity' => 327,
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "A207",
            'date' => date("2016-03-26"),
            'transactionQuantity' => 382,
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "A207",
            'date' => date("2016-03-27"),
            'transactionQuantity' => 390,
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "A207",
            'date' => date("2016-03-28"),
            'transactionQuantity' => 836,
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "A207",
            'date' => date("2016-03-29"),
            'transactionQuantity' => 879,
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "A207",
            'date' => date("2016-03-30"),
            'transactionQuantity' => 847,
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "A207",
            'date' => date("2016-03-31"),
            'transactionQuantity' => 945,
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
