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
            'roomId' => "A207",
            'date' => "3/1/2016",
            'transactionQuantity' => "555",
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "A207",
            'date' => "3/2/2016",
            'transactionQuantity' => "462",
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "A207",
            'date' => "3/3/2016",
            'transactionQuantity' => "478",
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "A207",
            'date' => "3/4/2016",
            'transactionQuantity' => "368",
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "A207",
            'date' => "3/5/2016",
            'transactionQuantity' => "175",
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "A207",
            'date' => "3/6/2016",
            'transactionQuantity' => "241",
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "A207",
            'date' => "3/7/2016",
            'transactionQuantity' => "690",
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "A207",
            'date' => "3/8/2016",
            'transactionQuantity' => "652",
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "A207",
            'date' => "3/9/2016",
            'transactionQuantity' => "482",
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "A207",
            'date' => "3/10/2016",
            'transactionQuantity' => "642",
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "A207",
            'date' => "3/11/2016",
            'transactionQuantity' => "480",
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "A207",
            'date' => "3/12/2016",
            'transactionQuantity' => "241",
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "A207",
            'date' => "3/13/2016",
            'transactionQuantity' => "283",
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "A207",
            'date' => "3/14/2016",
            'transactionQuantity' => "697",
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "A207",
            'date' => "3/15/2016",
            'transactionQuantity' => "662",
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "A207",
            'date' => "3/16/2016",
            'transactionQuantity' => "646",
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "A207",
            'date' => "3/17/2016",
            'transactionQuantity' => "690",
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "A207",
            'date' => "3/18/2016",
            'transactionQuantity' => "542",
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "A207",
            'date' => "3/19/2016",
            'transactionQuantity' => "197",
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "A207",
            'date' => "3/20/2016",
            'transactionQuantity' => "269",
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "A207",
            'date' => "3/21/2016",
            'transactionQuantity' => "674",
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "A207",
            'date' => "3/22/2016",
            'transactionQuantity' => "735",
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "A207",
            'date' => "3/23/2016",
            'transactionQuantity' => "646",
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "A207",
            'date' => "3/24/2016",
            'transactionQuantity' => "768",
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "A207",
            'date' => "3/25/2016",
            'transactionQuantity' => "327",
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "A207",
            'date' => "3/26/2016",
            'transactionQuantity' => "382",
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "A207",
            'date' => "3/27/2016",
            'transactionQuantity' => "390",
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "A207",
            'date' => "3/28/2016",
            'transactionQuantity' => "836",
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "A207",
            'date' => "3/29/2016",
            'transactionQuantity' => "879",
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "A207",
            'date' => "3/30/2016",
            'transactionQuantity' => "847",
        ));

        DB::table('security')->insert(
        array(
            'roomId' => "A207",
            'date' => "3/31/2016",
            'transactionQuantity' => "945",
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
