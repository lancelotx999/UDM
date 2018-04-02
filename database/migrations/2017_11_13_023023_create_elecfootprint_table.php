<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateElecfootprintTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('electricity', function (Blueprint $table) {
            $table->increments('id');
            $table->string('roomId');
            $table->date('date');
            $table->decimal('electricity', 3, 1);
            $table->timestamps();
        });

        DB::table('electricity')->insert(
        array(
            'roomId' => "A207",
            'date' => date("2016-03-01"),
            'electricity' => 23.3,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "A207",
            'date' => date("2016-03-02"),
            'electricity' => 27,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "A207",
            'date' => date("2016-03-03"),
            'electricity' => 35.2,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "A207",
            'date' => date("2016-03-04"),
            'electricity' => 21,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "A207",
            'date' => date("2016-03-05"),
            'electricity' => 22,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "A207",
            'date' => date("2016-03-06"),
            'electricity' => 33.4,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "A207",
            'date' => date("2016-03-07"),
            'electricity' => 29.2,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "A207",
            'date' => date("2016-03-08"),
            'electricity' => 22.9,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "A207",
            'date' => date("2016-03-09"),
            'electricity' => 28,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "A207",
            'date' => date("2016-03-10"),
            'electricity' => 22,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "A207",
            'date' => date("2016-03-11"),
            'electricity' => 33.5,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "A207",
            'date' => date("2016-03-12"),
            'electricity' => 24.8,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "A207",
            'date' => date("2016-03-13"),
            'electricity' => 33.8,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "A207",
            'date' => date("2016-03-14"),
            'electricity' => 13,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "A207",
            'date' => date("2016-03-15"),
            'electricity' => 22,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "A207",
            'date' => date("2016-03-16"),
            'electricity' => 33,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "A207",
            'date' => date("2016-03-17"),
            'electricity' => 21,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "A207",
            'date' => date("2016-03-18"),
            'electricity' => 34.8,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "A207",
            'date' => date("2016-03-19"),
            'electricity' => 34.9,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "A207",
            'date' => date("2016-03-20"),
            'electricity' => 22.8,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "A207",
            'date' => date("2016-03-21"),
            'electricity' => 34.3,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "A207",
            'date' => date("2016-03-22"),
            'electricity' => 26.7,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "A207",
            'date' => date("2016-03-23"),
            'electricity' => 21.1,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "A207",
            'date' => date("2016-03-24"),
            'electricity' => 14.3,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "A207",
            'date' => date("2016-03-25"),
            'electricity' => 33.1,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "A207",
            'date' => date("2016-03-26"),
            'electricity' => 33.7,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "A207",
            'date' => date("2016-03-27"),
            'electricity' => 21.4,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "A207",
            'date' => date("2016-03-28"),
            'electricity' => 32.9,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "A207",
            'date' => date("2016-03-29"),
            'electricity' => 32,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "A207",
            'date' => date("2016-03-30"),
            'electricity' => 35,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "A207",
            'date' => date("2016-03-31"),
            'electricity' => 34.2,
        ));

                DB::table('electricity')->insert(
        array(
            'roomId' => "A207",
            'date' => date("2016-04-01"),
            'electricity' => 23.9,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "A207",
            'date' => date("2016-04-02"),
            'electricity' => 25,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "A207",
            'date' => date("2016-04-03"),
            'electricity' => 25,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "A207",
            'date' => date("2016-04-04"),
            'electricity' => 25,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "A207",
            'date' => date("2016-04-05"),
            'electricity' => 28,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "A207",
            'date' => date("2016-04-06"),
            'electricity' => 24,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "A207",
            'date' => date("2016-04-07"),
            'electricity' => 34,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "A207",
            'date' => date("2016-04-08"),
            'electricity' => 29,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "A207",
            'date' => date("2016-04-09"),
            'electricity' => 24,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "A207",
            'date' => date("2016-04-10"),
            'electricity' => 14,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "A207",
            'date' => date("2016-04-11"),
            'electricity' => 23,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "A207",
            'date' => date("2016-04-12"),
            'electricity' => 33.7,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "A207",
            'date' => date("2016-04-13"),
            'electricity' => 23,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "A207",
            'date' => date("2016-04-14"),
            'electricity' => 21.6,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "A207",
            'date' => date("2016-04-15"),
            'electricity' => 14.4,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "A207",
            'date' => date("2016-04-16"),
            'electricity' => 29.5,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "A207",
            'date' => date("2016-04-17"),
            'electricity' => 17.3,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "A207",
            'date' => date("2016-04-18"),
            'electricity' => 32.8,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "A207",
            'date' => date("2016-04-19"),
            'electricity' => 35.1,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "A207",
            'date' => date("2016-04-20"),
            'electricity' => 19.8,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "A207",
            'date' => date("2016-04-21"),
            'electricity' => 15.8,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "A207",
            'date' => date("2016-04-22"),
            'electricity' => 27.2,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "A207",
            'date' => date("2016-04-23"),
            'electricity' => 22.3,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "A207",
            'date' => date("2016-04-24"),
            'electricity' => 34.9,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "A207",
            'date' => date("2016-04-25"),
            'electricity' => 14.1,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "A207",
            'date' => date("2016-04-26"),
            'electricity' => 19.7,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "A207",
            'date' => date("2016-04-27"),
            'electricity' => 35,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "A207",
            'date' => date("2016-04-28"),
            'electricity' => 17,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "A207",
            'date' => date("2016-04-29"),
            'electricity' => 29.1,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "A207",
            'date' => date("2016-04-30"),
            'electricity' => 21.2,
        ));

                DB::table('electricity')->insert(
        array(
            'roomId' => "A207",
            'date' => date("2016-05-01"),
            'electricity' => 14.9,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "A207",
            'date' => date("2016-05-02"),
            'electricity' => 35,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "A207",
            'date' => date("2016-05-03"),
            'electricity' => 17.1,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "A207",
            'date' => date("2016-05-04"),
            'electricity' => 32,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "A207",
            'date' => date("2016-05-05"),
            'electricity' => 32.8,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "A207",
            'date' => date("2016-05-06"),
            'electricity' => 14.8,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "A207",
            'date' => date("2016-05-07"),
            'electricity' => 32.8,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "A207",
            'date' => date("2016-05-08"),
            'electricity' => 15.8,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "A207",
            'date' => date("2016-05-09"),
            'electricity' => 15.8,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "A207",
            'date' => date("2016-05-10"),
            'electricity' => 34.8,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "A207",
            'date' => date("2016-05-11"),
            'electricity' => 17.5,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "A207",
            'date' => date("2016-05-12"),
            'electricity' => 33.9,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "A207",
            'date' => date("2016-05-13"),
            'electricity' => 22,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "A207",
            'date' => date("2016-05-14"),
            'electricity' => 29.9,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "A207",
            'date' => date("2016-05-15"),
            'electricity' => 19,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "A207",
            'date' => date("2016-05-16"),
            'electricity' => 16,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "A207",
            'date' => date("2016-05-17"),
            'electricity' => 33,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "A207",
            'date' => date("2016-05-18"),
            'electricity' => 24.8,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "A207",
            'date' => date("2016-05-19"),
            'electricity' => 26.1,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "A207",
            'date' => date("2016-05-20"),
            'electricity' => 32.8,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "A207",
            'date' => date("2016-05-21"),
            'electricity' => 15.8,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "A207",
            'date' => date("2016-05-22"),
            'electricity' => 18.8,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "A207",
            'date' => date("2016-05-23"),
            'electricity' => 18,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "A207",
            'date' => date("2016-05-24"),
            'electricity' => 34.7,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "A207",
            'date' => date("2016-05-25"),
            'electricity' => 31.1,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "A207",
            'date' => date("2016-05-26"),
            'electricity' => 25.3,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "A207",
            'date' => date("2016-05-27"),
            'electricity' => 19.2,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "A207",
            'date' => date("2016-05-28"),
            'electricity' => 18.8,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "A207",
            'date' => date("2016-05-29"),
            'electricity' => 16.1,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "A207",
            'date' => date("2016-05-30"),
            'electricity' => 34.1,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "A207",
            'date' => date("2016-05-31"),
            'electricity' => 19.3,
        ));

                DB::table('electricity')->insert(
        array(
            'roomId' => "A302",
            'date' => date("2016-03-01"),
            'electricity' => 23.3,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "A302",
            'date' => date("2016-03-02"),
            'electricity' => 27,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "A302",
            'date' => date("2016-03-03"),
            'electricity' => 35.2,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "A302",
            'date' => date("2016-03-04"),
            'electricity' => 21,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "A302",
            'date' => date("2016-03-05"),
            'electricity' => 22,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "A302",
            'date' => date("2016-03-06"),
            'electricity' => 33.4,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "A302",
            'date' => date("2016-03-07"),
            'electricity' => 29.2,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "A302",
            'date' => date("2016-03-08"),
            'electricity' => 22.9,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "A302",
            'date' => date("2016-03-09"),
            'electricity' => 28,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "A302",
            'date' => date("2016-03-10"),
            'electricity' => 22,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "A302",
            'date' => date("2016-03-11"),
            'electricity' => 33.5,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "A302",
            'date' => date("2016-03-12"),
            'electricity' => 24.8,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "A302",
            'date' => date("2016-03-13"),
            'electricity' => 33.8,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "A302",
            'date' => date("2016-03-14"),
            'electricity' => 13,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "A302",
            'date' => date("2016-03-15"),
            'electricity' => 22,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "A302",
            'date' => date("2016-03-16"),
            'electricity' => 33,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "A302",
            'date' => date("2016-03-17"),
            'electricity' => 21,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "A302",
            'date' => date("2016-03-18"),
            'electricity' => 34.8,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "A302",
            'date' => date("2016-03-19"),
            'electricity' => 34.9,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "A302",
            'date' => date("2016-03-20"),
            'electricity' => 22.8,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "A302",
            'date' => date("2016-03-21"),
            'electricity' => 34.3,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "A302",
            'date' => date("2016-03-22"),
            'electricity' => 26.7,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "A302",
            'date' => date("2016-03-23"),
            'electricity' => 21.1,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "A302",
            'date' => date("2016-03-24"),
            'electricity' => 14.3,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "A302",
            'date' => date("2016-03-25"),
            'electricity' => 33.1,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "A302",
            'date' => date("2016-03-26"),
            'electricity' => 33.7,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "A302",
            'date' => date("2016-03-27"),
            'electricity' => 21.4,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "A302",
            'date' => date("2016-03-28"),
            'electricity' => 32.9,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "A302",
            'date' => date("2016-03-29"),
            'electricity' => 32,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "A302",
            'date' => date("2016-03-30"),
            'electricity' => 35,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "A302",
            'date' => date("2016-03-31"),
            'electricity' => 34.2,
        ));

                DB::table('electricity')->insert(
        array(
            'roomId' => "A302",
            'date' => date("2016-04-01"),
            'electricity' => 23.9,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "A302",
            'date' => date("2016-04-02"),
            'electricity' => 25,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "A302",
            'date' => date("2016-04-03"),
            'electricity' => 25,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "A302",
            'date' => date("2016-04-04"),
            'electricity' => 25,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "A302",
            'date' => date("2016-04-05"),
            'electricity' => 28,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "A302",
            'date' => date("2016-04-06"),
            'electricity' => 24,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "A302",
            'date' => date("2016-04-07"),
            'electricity' => 34,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "A302",
            'date' => date("2016-04-08"),
            'electricity' => 29,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "A302",
            'date' => date("2016-04-09"),
            'electricity' => 24,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "A302",
            'date' => date("2016-04-10"),
            'electricity' => 14,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "A302",
            'date' => date("2016-04-11"),
            'electricity' => 23,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "A302",
            'date' => date("2016-04-12"),
            'electricity' => 33.7,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "A302",
            'date' => date("2016-04-13"),
            'electricity' => 23,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "A302",
            'date' => date("2016-04-14"),
            'electricity' => 21.6,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "A302",
            'date' => date("2016-04-15"),
            'electricity' => 14.4,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "A302",
            'date' => date("2016-04-16"),
            'electricity' => 29.5,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "A302",
            'date' => date("2016-04-17"),
            'electricity' => 17.3,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "A302",
            'date' => date("2016-04-18"),
            'electricity' => 32.8,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "A302",
            'date' => date("2016-04-19"),
            'electricity' => 35.1,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "A302",
            'date' => date("2016-04-20"),
            'electricity' => 19.8,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "A302",
            'date' => date("2016-04-21"),
            'electricity' => 15.8,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "A302",
            'date' => date("2016-04-22"),
            'electricity' => 27.2,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "A302",
            'date' => date("2016-04-23"),
            'electricity' => 22.3,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "A302",
            'date' => date("2016-04-24"),
            'electricity' => 34.9,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "A302",
            'date' => date("2016-04-25"),
            'electricity' => 14.1,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "A302",
            'date' => date("2016-04-26"),
            'electricity' => 19.7,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "A302",
            'date' => date("2016-04-27"),
            'electricity' => 35,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "A302",
            'date' => date("2016-04-28"),
            'electricity' => 17,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "A302",
            'date' => date("2016-04-29"),
            'electricity' => 29.1,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "A302",
            'date' => date("2016-04-30"),
            'electricity' => 21.2,
        ));

                DB::table('electricity')->insert(
        array(
            'roomId' => "A302",
            'date' => date("2016-05-01"),
            'electricity' => 14.9,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "A302",
            'date' => date("2016-05-02"),
            'electricity' => 35,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "A302",
            'date' => date("2016-05-03"),
            'electricity' => 17.1,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "A302",
            'date' => date("2016-05-04"),
            'electricity' => 32,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "A302",
            'date' => date("2016-05-05"),
            'electricity' => 32.8,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "A302",
            'date' => date("2016-05-06"),
            'electricity' => 14.8,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "A302",
            'date' => date("2016-05-07"),
            'electricity' => 32.8,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "A302",
            'date' => date("2016-05-08"),
            'electricity' => 15.8,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "A302",
            'date' => date("2016-05-09"),
            'electricity' => 15.8,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "A302",
            'date' => date("2016-05-10"),
            'electricity' => 34.8,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "A302",
            'date' => date("2016-05-11"),
            'electricity' => 17.5,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "A302",
            'date' => date("2016-05-12"),
            'electricity' => 33.9,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "A302",
            'date' => date("2016-05-13"),
            'electricity' => 22,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "A302",
            'date' => date("2016-05-14"),
            'electricity' => 29.9,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "A302",
            'date' => date("2016-05-15"),
            'electricity' => 19,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "A302",
            'date' => date("2016-05-16"),
            'electricity' => 16,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "A302",
            'date' => date("2016-05-17"),
            'electricity' => 33,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "A302",
            'date' => date("2016-05-18"),
            'electricity' => 24.8,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "A302",
            'date' => date("2016-05-19"),
            'electricity' => 26.1,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "A302",
            'date' => date("2016-05-20"),
            'electricity' => 32.8,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "A302",
            'date' => date("2016-05-21"),
            'electricity' => 15.8,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "A302",
            'date' => date("2016-05-22"),
            'electricity' => 18.8,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "A302",
            'date' => date("2016-05-23"),
            'electricity' => 18,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "A302",
            'date' => date("2016-05-24"),
            'electricity' => 34.7,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "A302",
            'date' => date("2016-05-25"),
            'electricity' => 31.1,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "A302",
            'date' => date("2016-05-26"),
            'electricity' => 25.3,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "A302",
            'date' => date("2016-05-27"),
            'electricity' => 19.2,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "A302",
            'date' => date("2016-05-28"),
            'electricity' => 18.8,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "A302",
            'date' => date("2016-05-29"),
            'electricity' => 16.1,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "A302",
            'date' => date("2016-05-30"),
            'electricity' => 34.1,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "A302",
            'date' => date("2016-05-31"),
            'electricity' => 19.3,
        ));

                DB::table('electricity')->insert(
        array(
            'roomId' => "B408",
            'date' => date("2016-03-01"),
            'electricity' => 23.3,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B408",
            'date' => date("2016-03-02"),
            'electricity' => 27,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B408",
            'date' => date("2016-03-03"),
            'electricity' => 35.2,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B408",
            'date' => date("2016-03-04"),
            'electricity' => 21,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B408",
            'date' => date("2016-03-05"),
            'electricity' => 22,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B408",
            'date' => date("2016-03-06"),
            'electricity' => 33.4,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B408",
            'date' => date("2016-03-07"),
            'electricity' => 29.2,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B408",
            'date' => date("2016-03-08"),
            'electricity' => 22.9,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B408",
            'date' => date("2016-03-09"),
            'electricity' => 28,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B408",
            'date' => date("2016-03-10"),
            'electricity' => 22,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B408",
            'date' => date("2016-03-11"),
            'electricity' => 33.5,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B408",
            'date' => date("2016-03-12"),
            'electricity' => 24.8,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B408",
            'date' => date("2016-03-13"),
            'electricity' => 33.8,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B408",
            'date' => date("2016-03-14"),
            'electricity' => 13,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B408",
            'date' => date("2016-03-15"),
            'electricity' => 22,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B408",
            'date' => date("2016-03-16"),
            'electricity' => 33,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B408",
            'date' => date("2016-03-17"),
            'electricity' => 21,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B408",
            'date' => date("2016-03-18"),
            'electricity' => 34.8,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B408",
            'date' => date("2016-03-19"),
            'electricity' => 34.9,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B408",
            'date' => date("2016-03-20"),
            'electricity' => 22.8,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B408",
            'date' => date("2016-03-21"),
            'electricity' => 34.3,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B408",
            'date' => date("2016-03-22"),
            'electricity' => 26.7,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B408",
            'date' => date("2016-03-23"),
            'electricity' => 21.1,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B408",
            'date' => date("2016-03-24"),
            'electricity' => 14.3,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B408",
            'date' => date("2016-03-25"),
            'electricity' => 33.1,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B408",
            'date' => date("2016-03-26"),
            'electricity' => 33.7,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B408",
            'date' => date("2016-03-27"),
            'electricity' => 21.4,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B408",
            'date' => date("2016-03-28"),
            'electricity' => 32.9,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B408",
            'date' => date("2016-03-29"),
            'electricity' => 32,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B408",
            'date' => date("2016-03-30"),
            'electricity' => 35,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B408",
            'date' => date("2016-03-31"),
            'electricity' => 34.2,
        ));

                DB::table('electricity')->insert(
        array(
            'roomId' => "B408",
            'date' => date("2016-04-01"),
            'electricity' => 23.9,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B408",
            'date' => date("2016-04-02"),
            'electricity' => 25,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B408",
            'date' => date("2016-04-03"),
            'electricity' => 25,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B408",
            'date' => date("2016-04-04"),
            'electricity' => 25,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B408",
            'date' => date("2016-04-05"),
            'electricity' => 28,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B408",
            'date' => date("2016-04-06"),
            'electricity' => 24,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B408",
            'date' => date("2016-04-07"),
            'electricity' => 34,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B408",
            'date' => date("2016-04-08"),
            'electricity' => 29,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B408",
            'date' => date("2016-04-09"),
            'electricity' => 24,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B408",
            'date' => date("2016-04-10"),
            'electricity' => 14,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B408",
            'date' => date("2016-04-11"),
            'electricity' => 23,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B408",
            'date' => date("2016-04-12"),
            'electricity' => 33.7,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B408",
            'date' => date("2016-04-13"),
            'electricity' => 23,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B408",
            'date' => date("2016-04-14"),
            'electricity' => 21.6,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B408",
            'date' => date("2016-04-15"),
            'electricity' => 14.4,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B408",
            'date' => date("2016-04-16"),
            'electricity' => 29.5,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B408",
            'date' => date("2016-04-17"),
            'electricity' => 17.3,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B408",
            'date' => date("2016-04-18"),
            'electricity' => 32.8,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B408",
            'date' => date("2016-04-19"),
            'electricity' => 35.1,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B408",
            'date' => date("2016-04-20"),
            'electricity' => 19.8,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B408",
            'date' => date("2016-04-21"),
            'electricity' => 15.8,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B408",
            'date' => date("2016-04-22"),
            'electricity' => 27.2,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B408",
            'date' => date("2016-04-23"),
            'electricity' => 22.3,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B408",
            'date' => date("2016-04-24"),
            'electricity' => 34.9,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B408",
            'date' => date("2016-04-25"),
            'electricity' => 14.1,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B408",
            'date' => date("2016-04-26"),
            'electricity' => 19.7,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B408",
            'date' => date("2016-04-27"),
            'electricity' => 35,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B408",
            'date' => date("2016-04-28"),
            'electricity' => 17,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B408",
            'date' => date("2016-04-29"),
            'electricity' => 29.1,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B408",
            'date' => date("2016-04-30"),
            'electricity' => 21.2,
        ));

                DB::table('electricity')->insert(
        array(
            'roomId' => "B408",
            'date' => date("2016-05-01"),
            'electricity' => 14.9,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B408",
            'date' => date("2016-05-02"),
            'electricity' => 35,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B408",
            'date' => date("2016-05-03"),
            'electricity' => 17.1,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B408",
            'date' => date("2016-05-04"),
            'electricity' => 32,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B408",
            'date' => date("2016-05-05"),
            'electricity' => 32.8,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B408",
            'date' => date("2016-05-06"),
            'electricity' => 14.8,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B408",
            'date' => date("2016-05-07"),
            'electricity' => 32.8,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B408",
            'date' => date("2016-05-08"),
            'electricity' => 15.8,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B408",
            'date' => date("2016-05-09"),
            'electricity' => 15.8,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B408",
            'date' => date("2016-05-10"),
            'electricity' => 34.8,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B408",
            'date' => date("2016-05-11"),
            'electricity' => 17.5,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B408",
            'date' => date("2016-05-12"),
            'electricity' => 33.9,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B408",
            'date' => date("2016-05-13"),
            'electricity' => 22,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B408",
            'date' => date("2016-05-14"),
            'electricity' => 29.9,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B408",
            'date' => date("2016-05-15"),
            'electricity' => 19,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B408",
            'date' => date("2016-05-16"),
            'electricity' => 16,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B408",
            'date' => date("2016-05-17"),
            'electricity' => 33,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B408",
            'date' => date("2016-05-18"),
            'electricity' => 24.8,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B408",
            'date' => date("2016-05-19"),
            'electricity' => 26.1,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B408",
            'date' => date("2016-05-20"),
            'electricity' => 32.8,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B408",
            'date' => date("2016-05-21"),
            'electricity' => 15.8,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B408",
            'date' => date("2016-05-22"),
            'electricity' => 18.8,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B408",
            'date' => date("2016-05-23"),
            'electricity' => 18,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B408",
            'date' => date("2016-05-24"),
            'electricity' => 34.7,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B408",
            'date' => date("2016-05-25"),
            'electricity' => 31.1,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B408",
            'date' => date("2016-05-26"),
            'electricity' => 25.3,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B408",
            'date' => date("2016-05-27"),
            'electricity' => 19.2,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B408",
            'date' => date("2016-05-28"),
            'electricity' => 18.8,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B408",
            'date' => date("2016-05-29"),
            'electricity' => 16.1,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B408",
            'date' => date("2016-05-30"),
            'electricity' => 34.1,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B408",
            'date' => date("2016-05-31"),
            'electricity' => 19.3,
        ));

                DB::table('electricity')->insert(
        array(
            'roomId' => "B507",
            'date' => date("2016-03-01"),
            'electricity' => 23.3,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B507",
            'date' => date("2016-03-02"),
            'electricity' => 27,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B507",
            'date' => date("2016-03-03"),
            'electricity' => 35.2,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B507",
            'date' => date("2016-03-04"),
            'electricity' => 21,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B507",
            'date' => date("2016-03-05"),
            'electricity' => 22,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B507",
            'date' => date("2016-03-06"),
            'electricity' => 33.4,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B507",
            'date' => date("2016-03-07"),
            'electricity' => 29.2,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B507",
            'date' => date("2016-03-08"),
            'electricity' => 22.9,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B507",
            'date' => date("2016-03-09"),
            'electricity' => 28,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B507",
            'date' => date("2016-03-10"),
            'electricity' => 22,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B507",
            'date' => date("2016-03-11"),
            'electricity' => 33.5,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B507",
            'date' => date("2016-03-12"),
            'electricity' => 24.8,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B507",
            'date' => date("2016-03-13"),
            'electricity' => 33.8,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B507",
            'date' => date("2016-03-14"),
            'electricity' => 13,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B507",
            'date' => date("2016-03-15"),
            'electricity' => 22,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B507",
            'date' => date("2016-03-16"),
            'electricity' => 33,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B507",
            'date' => date("2016-03-17"),
            'electricity' => 21,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B507",
            'date' => date("2016-03-18"),
            'electricity' => 34.8,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B507",
            'date' => date("2016-03-19"),
            'electricity' => 34.9,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B507",
            'date' => date("2016-03-20"),
            'electricity' => 22.8,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B507",
            'date' => date("2016-03-21"),
            'electricity' => 34.3,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B507",
            'date' => date("2016-03-22"),
            'electricity' => 26.7,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B507",
            'date' => date("2016-03-23"),
            'electricity' => 21.1,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B507",
            'date' => date("2016-03-24"),
            'electricity' => 14.3,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B507",
            'date' => date("2016-03-25"),
            'electricity' => 33.1,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B507",
            'date' => date("2016-03-26"),
            'electricity' => 33.7,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B507",
            'date' => date("2016-03-27"),
            'electricity' => 21.4,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B507",
            'date' => date("2016-03-28"),
            'electricity' => 32.9,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B507",
            'date' => date("2016-03-29"),
            'electricity' => 32,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B507",
            'date' => date("2016-03-30"),
            'electricity' => 35,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B507",
            'date' => date("2016-03-31"),
            'electricity' => 34.2,
        ));

                DB::table('electricity')->insert(
        array(
            'roomId' => "B507",
            'date' => date("2016-04-01"),
            'electricity' => 23.9,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B507",
            'date' => date("2016-04-02"),
            'electricity' => 25,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B507",
            'date' => date("2016-04-03"),
            'electricity' => 25,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B507",
            'date' => date("2016-04-04"),
            'electricity' => 25,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B507",
            'date' => date("2016-04-05"),
            'electricity' => 28,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B507",
            'date' => date("2016-04-06"),
            'electricity' => 24,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B507",
            'date' => date("2016-04-07"),
            'electricity' => 34,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B507",
            'date' => date("2016-04-08"),
            'electricity' => 29,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B507",
            'date' => date("2016-04-09"),
            'electricity' => 24,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B507",
            'date' => date("2016-04-10"),
            'electricity' => 14,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B507",
            'date' => date("2016-04-11"),
            'electricity' => 23,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B507",
            'date' => date("2016-04-12"),
            'electricity' => 33.7,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B507",
            'date' => date("2016-04-13"),
            'electricity' => 23,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B507",
            'date' => date("2016-04-14"),
            'electricity' => 21.6,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B507",
            'date' => date("2016-04-15"),
            'electricity' => 14.4,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B507",
            'date' => date("2016-04-16"),
            'electricity' => 29.5,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B507",
            'date' => date("2016-04-17"),
            'electricity' => 17.3,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B507",
            'date' => date("2016-04-18"),
            'electricity' => 32.8,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B507",
            'date' => date("2016-04-19"),
            'electricity' => 35.1,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B507",
            'date' => date("2016-04-20"),
            'electricity' => 19.8,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B507",
            'date' => date("2016-04-21"),
            'electricity' => 15.8,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B507",
            'date' => date("2016-04-22"),
            'electricity' => 27.2,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B507",
            'date' => date("2016-04-23"),
            'electricity' => 22.3,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B507",
            'date' => date("2016-04-24"),
            'electricity' => 34.9,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B507",
            'date' => date("2016-04-25"),
            'electricity' => 14.1,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B507",
            'date' => date("2016-04-26"),
            'electricity' => 19.7,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B507",
            'date' => date("2016-04-27"),
            'electricity' => 35,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B507",
            'date' => date("2016-04-28"),
            'electricity' => 17,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B507",
            'date' => date("2016-04-29"),
            'electricity' => 29.1,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B507",
            'date' => date("2016-04-30"),
            'electricity' => 21.2,
        ));

                DB::table('electricity')->insert(
        array(
            'roomId' => "B507",
            'date' => date("2016-05-01"),
            'electricity' => 14.9,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B507",
            'date' => date("2016-05-02"),
            'electricity' => 35,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B507",
            'date' => date("2016-05-03"),
            'electricity' => 17.1,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B507",
            'date' => date("2016-05-04"),
            'electricity' => 32,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B507",
            'date' => date("2016-05-05"),
            'electricity' => 32.8,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B507",
            'date' => date("2016-05-06"),
            'electricity' => 14.8,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B507",
            'date' => date("2016-05-07"),
            'electricity' => 32.8,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B507",
            'date' => date("2016-05-08"),
            'electricity' => 15.8,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B507",
            'date' => date("2016-05-09"),
            'electricity' => 15.8,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B507",
            'date' => date("2016-05-10"),
            'electricity' => 34.8,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B507",
            'date' => date("2016-05-11"),
            'electricity' => 17.5,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B507",
            'date' => date("2016-05-12"),
            'electricity' => 33.9,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B507",
            'date' => date("2016-05-13"),
            'electricity' => 22,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B507",
            'date' => date("2016-05-14"),
            'electricity' => 29.9,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B507",
            'date' => date("2016-05-15"),
            'electricity' => 19,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B507",
            'date' => date("2016-05-16"),
            'electricity' => 16,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B507",
            'date' => date("2016-05-17"),
            'electricity' => 33,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B507",
            'date' => date("2016-05-18"),
            'electricity' => 24.8,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B507",
            'date' => date("2016-05-19"),
            'electricity' => 26.1,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B507",
            'date' => date("2016-05-20"),
            'electricity' => 32.8,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B507",
            'date' => date("2016-05-21"),
            'electricity' => 15.8,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B507",
            'date' => date("2016-05-22"),
            'electricity' => 18.8,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B507",
            'date' => date("2016-05-23"),
            'electricity' => 18,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B507",
            'date' => date("2016-05-24"),
            'electricity' => 34.7,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B507",
            'date' => date("2016-05-25"),
            'electricity' => 31.1,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B507",
            'date' => date("2016-05-26"),
            'electricity' => 25.3,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B507",
            'date' => date("2016-05-27"),
            'electricity' => 19.2,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B507",
            'date' => date("2016-05-28"),
            'electricity' => 18.8,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B507",
            'date' => date("2016-05-29"),
            'electricity' => 16.1,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B507",
            'date' => date("2016-05-30"),
            'electricity' => 34.1,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B507",
            'date' => date("2016-05-31"),
            'electricity' => 19.3,
        ));

                DB::table('electricity')->insert(
        array(
            'roomId' => "B603",
            'date' => date("2016-03-01"),
            'electricity' => 23.3,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B603",
            'date' => date("2016-03-02"),
            'electricity' => 27,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B603",
            'date' => date("2016-03-03"),
            'electricity' => 35.2,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B603",
            'date' => date("2016-03-04"),
            'electricity' => 21,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B603",
            'date' => date("2016-03-05"),
            'electricity' => 22,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B603",
            'date' => date("2016-03-06"),
            'electricity' => 33.4,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B603",
            'date' => date("2016-03-07"),
            'electricity' => 29.2,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B603",
            'date' => date("2016-03-08"),
            'electricity' => 22.9,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B603",
            'date' => date("2016-03-09"),
            'electricity' => 28,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B603",
            'date' => date("2016-03-10"),
            'electricity' => 22,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B603",
            'date' => date("2016-03-11"),
            'electricity' => 33.5,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B603",
            'date' => date("2016-03-12"),
            'electricity' => 24.8,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B603",
            'date' => date("2016-03-13"),
            'electricity' => 33.8,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B603",
            'date' => date("2016-03-14"),
            'electricity' => 13,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B603",
            'date' => date("2016-03-15"),
            'electricity' => 22,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B603",
            'date' => date("2016-03-16"),
            'electricity' => 33,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B603",
            'date' => date("2016-03-17"),
            'electricity' => 21,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B603",
            'date' => date("2016-03-18"),
            'electricity' => 34.8,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B603",
            'date' => date("2016-03-19"),
            'electricity' => 34.9,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B603",
            'date' => date("2016-03-20"),
            'electricity' => 22.8,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B603",
            'date' => date("2016-03-21"),
            'electricity' => 34.3,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B603",
            'date' => date("2016-03-22"),
            'electricity' => 26.7,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B603",
            'date' => date("2016-03-23"),
            'electricity' => 21.1,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B603",
            'date' => date("2016-03-24"),
            'electricity' => 14.3,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B603",
            'date' => date("2016-03-25"),
            'electricity' => 33.1,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B603",
            'date' => date("2016-03-26"),
            'electricity' => 33.7,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B603",
            'date' => date("2016-03-27"),
            'electricity' => 21.4,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B603",
            'date' => date("2016-03-28"),
            'electricity' => 32.9,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B603",
            'date' => date("2016-03-29"),
            'electricity' => 32,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B603",
            'date' => date("2016-03-30"),
            'electricity' => 35,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B603",
            'date' => date("2016-03-31"),
            'electricity' => 34.2,
        ));

                DB::table('electricity')->insert(
        array(
            'roomId' => "B603",
            'date' => date("2016-04-01"),
            'electricity' => 23.9,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B603",
            'date' => date("2016-04-02"),
            'electricity' => 25,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B603",
            'date' => date("2016-04-03"),
            'electricity' => 25,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B603",
            'date' => date("2016-04-04"),
            'electricity' => 25,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B603",
            'date' => date("2016-04-05"),
            'electricity' => 28,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B603",
            'date' => date("2016-04-06"),
            'electricity' => 24,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B603",
            'date' => date("2016-04-07"),
            'electricity' => 34,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B603",
            'date' => date("2016-04-08"),
            'electricity' => 29,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B603",
            'date' => date("2016-04-09"),
            'electricity' => 24,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B603",
            'date' => date("2016-04-10"),
            'electricity' => 14,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B603",
            'date' => date("2016-04-11"),
            'electricity' => 23,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B603",
            'date' => date("2016-04-12"),
            'electricity' => 33.7,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B603",
            'date' => date("2016-04-13"),
            'electricity' => 23,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B603",
            'date' => date("2016-04-14"),
            'electricity' => 21.6,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B603",
            'date' => date("2016-04-15"),
            'electricity' => 14.4,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B603",
            'date' => date("2016-04-16"),
            'electricity' => 29.5,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B603",
            'date' => date("2016-04-17"),
            'electricity' => 17.3,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B603",
            'date' => date("2016-04-18"),
            'electricity' => 32.8,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B603",
            'date' => date("2016-04-19"),
            'electricity' => 35.1,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B603",
            'date' => date("2016-04-20"),
            'electricity' => 19.8,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B603",
            'date' => date("2016-04-21"),
            'electricity' => 15.8,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B603",
            'date' => date("2016-04-22"),
            'electricity' => 27.2,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B603",
            'date' => date("2016-04-23"),
            'electricity' => 22.3,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B603",
            'date' => date("2016-04-24"),
            'electricity' => 34.9,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B603",
            'date' => date("2016-04-25"),
            'electricity' => 14.1,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B603",
            'date' => date("2016-04-26"),
            'electricity' => 19.7,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B603",
            'date' => date("2016-04-27"),
            'electricity' => 35,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B603",
            'date' => date("2016-04-28"),
            'electricity' => 17,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B603",
            'date' => date("2016-04-29"),
            'electricity' => 29.1,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B603",
            'date' => date("2016-04-30"),
            'electricity' => 21.2,
        ));

                DB::table('electricity')->insert(
        array(
            'roomId' => "B603",
            'date' => date("2016-05-01"),
            'electricity' => 14.9,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B603",
            'date' => date("2016-05-02"),
            'electricity' => 35,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B603",
            'date' => date("2016-05-03"),
            'electricity' => 17.1,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B603",
            'date' => date("2016-05-04"),
            'electricity' => 32,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B603",
            'date' => date("2016-05-05"),
            'electricity' => 32.8,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B603",
            'date' => date("2016-05-06"),
            'electricity' => 14.8,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B603",
            'date' => date("2016-05-07"),
            'electricity' => 32.8,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B603",
            'date' => date("2016-05-08"),
            'electricity' => 15.8,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B603",
            'date' => date("2016-05-09"),
            'electricity' => 15.8,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B603",
            'date' => date("2016-05-10"),
            'electricity' => 34.8,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B603",
            'date' => date("2016-05-11"),
            'electricity' => 17.5,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B603",
            'date' => date("2016-05-12"),
            'electricity' => 33.9,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B603",
            'date' => date("2016-05-13"),
            'electricity' => 22,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B603",
            'date' => date("2016-05-14"),
            'electricity' => 29.9,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B603",
            'date' => date("2016-05-15"),
            'electricity' => 19,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B603",
            'date' => date("2016-05-16"),
            'electricity' => 16,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B603",
            'date' => date("2016-05-17"),
            'electricity' => 33,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B603",
            'date' => date("2016-05-18"),
            'electricity' => 24.8,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B603",
            'date' => date("2016-05-19"),
            'electricity' => 26.1,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B603",
            'date' => date("2016-05-20"),
            'electricity' => 32.8,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B603",
            'date' => date("2016-05-21"),
            'electricity' => 15.8,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B603",
            'date' => date("2016-05-22"),
            'electricity' => 18.8,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B603",
            'date' => date("2016-05-23"),
            'electricity' => 18,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B603",
            'date' => date("2016-05-24"),
            'electricity' => 34.7,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B603",
            'date' => date("2016-05-25"),
            'electricity' => 31.1,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B603",
            'date' => date("2016-05-26"),
            'electricity' => 25.3,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B603",
            'date' => date("2016-05-27"),
            'electricity' => 19.2,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B603",
            'date' => date("2016-05-28"),
            'electricity' => 18.8,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B603",
            'date' => date("2016-05-29"),
            'electricity' => 16.1,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B603",
            'date' => date("2016-05-30"),
            'electricity' => 34.1,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B603",
            'date' => date("2016-05-31"),
            'electricity' => 19.3,
        ));

                DB::table('electricity')->insert(
        array(
            'roomId' => "G706",
            'date' => date("2016-03-01"),
            'electricity' => 23.3,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "G706",
            'date' => date("2016-03-02"),
            'electricity' => 27,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "G706",
            'date' => date("2016-03-03"),
            'electricity' => 35.2,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "G706",
            'date' => date("2016-03-04"),
            'electricity' => 21,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "G706",
            'date' => date("2016-03-05"),
            'electricity' => 22,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "G706",
            'date' => date("2016-03-06"),
            'electricity' => 33.4,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "G706",
            'date' => date("2016-03-07"),
            'electricity' => 29.2,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "G706",
            'date' => date("2016-03-08"),
            'electricity' => 22.9,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "G706",
            'date' => date("2016-03-09"),
            'electricity' => 28,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "G706",
            'date' => date("2016-03-10"),
            'electricity' => 22,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "G706",
            'date' => date("2016-03-11"),
            'electricity' => 33.5,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "G706",
            'date' => date("2016-03-12"),
            'electricity' => 24.8,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "G706",
            'date' => date("2016-03-13"),
            'electricity' => 33.8,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "G706",
            'date' => date("2016-03-14"),
            'electricity' => 13,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "G706",
            'date' => date("2016-03-15"),
            'electricity' => 22,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "G706",
            'date' => date("2016-03-16"),
            'electricity' => 33,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "G706",
            'date' => date("2016-03-17"),
            'electricity' => 21,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "G706",
            'date' => date("2016-03-18"),
            'electricity' => 34.8,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "G706",
            'date' => date("2016-03-19"),
            'electricity' => 34.9,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "G706",
            'date' => date("2016-03-20"),
            'electricity' => 22.8,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "G706",
            'date' => date("2016-03-21"),
            'electricity' => 34.3,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "G706",
            'date' => date("2016-03-22"),
            'electricity' => 26.7,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "G706",
            'date' => date("2016-03-23"),
            'electricity' => 21.1,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "G706",
            'date' => date("2016-03-24"),
            'electricity' => 14.3,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "G706",
            'date' => date("2016-03-25"),
            'electricity' => 33.1,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "G706",
            'date' => date("2016-03-26"),
            'electricity' => 33.7,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "G706",
            'date' => date("2016-03-27"),
            'electricity' => 21.4,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "G706",
            'date' => date("2016-03-28"),
            'electricity' => 32.9,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "G706",
            'date' => date("2016-03-29"),
            'electricity' => 32,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "G706",
            'date' => date("2016-03-30"),
            'electricity' => 35,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "G706",
            'date' => date("2016-03-31"),
            'electricity' => 34.2,
        ));

                DB::table('electricity')->insert(
        array(
            'roomId' => "G706",
            'date' => date("2016-04-01"),
            'electricity' => 23.9,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "G706",
            'date' => date("2016-04-02"),
            'electricity' => 25,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "G706",
            'date' => date("2016-04-03"),
            'electricity' => 25,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "G706",
            'date' => date("2016-04-04"),
            'electricity' => 25,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "G706",
            'date' => date("2016-04-05"),
            'electricity' => 28,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "G706",
            'date' => date("2016-04-06"),
            'electricity' => 24,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "G706",
            'date' => date("2016-04-07"),
            'electricity' => 34,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "G706",
            'date' => date("2016-04-08"),
            'electricity' => 29,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "G706",
            'date' => date("2016-04-09"),
            'electricity' => 24,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "G706",
            'date' => date("2016-04-10"),
            'electricity' => 14,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "G706",
            'date' => date("2016-04-11"),
            'electricity' => 23,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "G706",
            'date' => date("2016-04-12"),
            'electricity' => 33.7,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "G706",
            'date' => date("2016-04-13"),
            'electricity' => 23,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "G706",
            'date' => date("2016-04-14"),
            'electricity' => 21.6,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "G706",
            'date' => date("2016-04-15"),
            'electricity' => 14.4,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "G706",
            'date' => date("2016-04-16"),
            'electricity' => 29.5,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "G706",
            'date' => date("2016-04-17"),
            'electricity' => 17.3,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "G706",
            'date' => date("2016-04-18"),
            'electricity' => 32.8,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "G706",
            'date' => date("2016-04-19"),
            'electricity' => 35.1,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "G706",
            'date' => date("2016-04-20"),
            'electricity' => 19.8,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "G706",
            'date' => date("2016-04-21"),
            'electricity' => 15.8,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "G706",
            'date' => date("2016-04-22"),
            'electricity' => 27.2,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "G706",
            'date' => date("2016-04-23"),
            'electricity' => 22.3,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "G706",
            'date' => date("2016-04-24"),
            'electricity' => 34.9,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "G706",
            'date' => date("2016-04-25"),
            'electricity' => 14.1,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "G706",
            'date' => date("2016-04-26"),
            'electricity' => 19.7,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "G706",
            'date' => date("2016-04-27"),
            'electricity' => 35,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "G706",
            'date' => date("2016-04-28"),
            'electricity' => 17,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "G706",
            'date' => date("2016-04-29"),
            'electricity' => 29.1,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "G706",
            'date' => date("2016-04-30"),
            'electricity' => 21.2,
        ));

                DB::table('electricity')->insert(
        array(
            'roomId' => "G706",
            'date' => date("2016-05-01"),
            'electricity' => 14.9,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "G706",
            'date' => date("2016-05-02"),
            'electricity' => 35,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "G706",
            'date' => date("2016-05-03"),
            'electricity' => 17.1,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "G706",
            'date' => date("2016-05-04"),
            'electricity' => 32,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "G706",
            'date' => date("2016-05-05"),
            'electricity' => 32.8,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "G706",
            'date' => date("2016-05-06"),
            'electricity' => 14.8,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "G706",
            'date' => date("2016-05-07"),
            'electricity' => 32.8,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "G706",
            'date' => date("2016-05-08"),
            'electricity' => 15.8,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "G706",
            'date' => date("2016-05-09"),
            'electricity' => 15.8,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "G706",
            'date' => date("2016-05-10"),
            'electricity' => 34.8,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "G706",
            'date' => date("2016-05-11"),
            'electricity' => 17.5,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "G706",
            'date' => date("2016-05-12"),
            'electricity' => 33.9,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "G706",
            'date' => date("2016-05-13"),
            'electricity' => 22,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "G706",
            'date' => date("2016-05-14"),
            'electricity' => 29.9,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "G706",
            'date' => date("2016-05-15"),
            'electricity' => 19,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "G706",
            'date' => date("2016-05-16"),
            'electricity' => 16,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "G706",
            'date' => date("2016-05-17"),
            'electricity' => 33,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "G706",
            'date' => date("2016-05-18"),
            'electricity' => 24.8,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "G706",
            'date' => date("2016-05-19"),
            'electricity' => 26.1,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "G706",
            'date' => date("2016-05-20"),
            'electricity' => 32.8,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "G706",
            'date' => date("2016-05-21"),
            'electricity' => 15.8,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "G706",
            'date' => date("2016-05-22"),
            'electricity' => 18.8,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "G706",
            'date' => date("2016-05-23"),
            'electricity' => 18,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "G706",
            'date' => date("2016-05-24"),
            'electricity' => 34.7,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "G706",
            'date' => date("2016-05-25"),
            'electricity' => 31.1,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "G706",
            'date' => date("2016-05-26"),
            'electricity' => 25.3,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "G706",
            'date' => date("2016-05-27"),
            'electricity' => 19.2,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "G706",
            'date' => date("2016-05-28"),
            'electricity' => 18.8,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "G706",
            'date' => date("2016-05-29"),
            'electricity' => 16.1,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "G706",
            'date' => date("2016-05-30"),
            'electricity' => 34.1,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "G706",
            'date' => date("2016-05-31"),
            'electricity' => 19.3,
        ));

                DB::table('electricity')->insert(
        array(
            'roomId' => "E002",
            'date' => date("2016-03-01"),
            'electricity' => 32.3,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "E002",
            'date' => date("2016-03-02"),
            'electricity' => 35,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "E002",
            'date' => date("2016-03-03"),
            'electricity' => 14.2,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "E002",
            'date' => date("2016-03-04"),
            'electricity' => 28,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "E002",
            'date' => date("2016-03-05"),
            'electricity' => 32,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "E002",
            'date' => date("2016-03-06"),
            'electricity' => 23.4,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "E002",
            'date' => date("2016-03-07"),
            'electricity' => 29.2,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "E002",
            'date' => date("2016-03-08"),
            'electricity' => 18.9,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "E002",
            'date' => date("2016-03-09"),
            'electricity' => 24,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "E002",
            'date' => date("2016-03-10"),
            'electricity' => 30,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "E002",
            'date' => date("2016-03-11"),
            'electricity' => 23.5,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "E002",
            'date' => date("2016-03-12"),
            'electricity' => 14.8,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "E002",
            'date' => date("2016-03-13"),
            'electricity' => 23.8,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "E002",
            'date' => date("2016-03-14"),
            'electricity' => 23,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "E002",
            'date' => date("2016-03-15"),
            'electricity' => 14,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "E002",
            'date' => date("2016-03-16"),
            'electricity' => 32,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "E002",
            'date' => date("2016-03-17"),
            'electricity' => 22,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "E002",
            'date' => date("2016-03-18"),
            'electricity' => 23.8,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "E002",
            'date' => date("2016-03-19"),
            'electricity' => 14.9,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "E002",
            'date' => date("2016-03-20"),
            'electricity' => 35.8,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "E002",
            'date' => date("2016-03-21"),
            'electricity' => 27.3,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "E002",
            'date' => date("2016-03-22"),
            'electricity' => 23.7,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "E002",
            'date' => date("2016-03-23"),
            'electricity' => 32.1,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "E002",
            'date' => date("2016-03-24"),
            'electricity' => 23.3,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "E002",
            'date' => date("2016-03-25"),
            'electricity' => 28.1,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "E002",
            'date' => date("2016-03-26"),
            'electricity' => 16.7,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "E002",
            'date' => date("2016-03-27"),
            'electricity' => 14.4,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "E002",
            'date' => date("2016-03-28"),
            'electricity' => 27.9,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "E002",
            'date' => date("2016-03-29"),
            'electricity' => 25.8,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "E002",
            'date' => date("2016-03-30"),
            'electricity' => 24.9,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "E002",
            'date' => date("2016-03-31"),
            'electricity' => 23.2,
        ));

                DB::table('electricity')->insert(
        array(
            'roomId' => "E002",
            'date' => date("2016-04-01"),
            'electricity' => 22.9,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "E002",
            'date' => date("2016-04-02"),
            'electricity' => 21,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "E002",
            'date' => date("2016-04-03"),
            'electricity' => 32,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "E002",
            'date' => date("2016-04-04"),
            'electricity' => 32,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "E002",
            'date' => date("2016-04-05"),
            'electricity' => 29.9,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "E002",
            'date' => date("2016-04-06"),
            'electricity' => 14,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "E002",
            'date' => date("2016-04-07"),
            'electricity' => 23.8,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "E002",
            'date' => date("2016-04-08"),
            'electricity' => 26.8,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "E002",
            'date' => date("2016-04-09"),
            'electricity' => 35.3,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "E002",
            'date' => date("2016-04-10"),
            'electricity' => 26,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "E002",
            'date' => date("2016-04-11"),
            'electricity' => 16,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "E002",
            'date' => date("2016-04-12"),
            'electricity' => 31,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "E002",
            'date' => date("2016-04-13"),
            'electricity' => 27,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "E002",
            'date' => date("2016-04-14"),
            'electricity' => 24.6,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "E002",
            'date' => date("2016-04-15"),
            'electricity' => 20.4,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "E002",
            'date' => date("2016-04-16"),
            'electricity' => 19.5,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "E002",
            'date' => date("2016-04-17"),
            'electricity' => 27.3,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "E002",
            'date' => date("2016-04-18"),
            'electricity' => 22.8,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "E002",
            'date' => date("2016-04-19"),
            'electricity' => 32.1,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "E002",
            'date' => date("2016-04-20"),
            'electricity' => 18.8,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "E002",
            'date' => date("2016-04-21"),
            'electricity' => 24.8,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "E002",
            'date' => date("2016-04-22"),
            'electricity' => 27.2,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "E002",
            'date' => date("2016-04-23"),
            'electricity' => 32.8,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "E002",
            'date' => date("2016-04-24"),
            'electricity' => 14.9,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "E002",
            'date' => date("2016-04-25"),
            'electricity' => 24.1,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "E002",
            'date' => date("2016-04-26"),
            'electricity' => 30.7,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "E002",
            'date' => date("2016-04-27"),
            'electricity' => 27,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "E002",
            'date' => date("2016-04-28"),
            'electricity' => 30,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "E002",
            'date' => date("2016-04-29"),
            'electricity' => 26.1,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "E002",
            'date' => date("2016-04-30"),
            'electricity' => 33.2,
        ));

                DB::table('electricity')->insert(
        array(
            'roomId' => "E002",
            'date' => date("2016-05-01"),
            'electricity' => 29.9,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "E002",
            'date' => date("2016-05-02"),
            'electricity' => 23,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "E002",
            'date' => date("2016-05-03"),
            'electricity' => 20.1,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "E002",
            'date' => date("2016-05-04"),
            'electricity' => 22,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "E002",
            'date' => date("2016-05-05"),
            'electricity' => 22.8,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "E002",
            'date' => date("2016-05-06"),
            'electricity' => 19.8,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "E002",
            'date' => date("2016-05-07"),
            'electricity' => 22.8,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "E002",
            'date' => date("2016-05-08"),
            'electricity' => 26.8,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "E002",
            'date' => date("2016-05-09"),
            'electricity' => 34.8,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "E002",
            'date' => date("2016-05-10"),
            'electricity' => 22.8,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "E002",
            'date' => date("2016-05-11"),
            'electricity' => 28.5,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "E002",
            'date' => date("2016-05-12"),
            'electricity' => 23,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "E002",
            'date' => date("2016-05-13"),
            'electricity' => 27,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "E002",
            'date' => date("2016-05-14"),
            'electricity' => 15,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "E002",
            'date' => date("2016-05-15"),
            'electricity' => 30,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "E002",
            'date' => date("2016-05-16"),
            'electricity' => 34,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "E002",
            'date' => date("2016-05-17"),
            'electricity' => 21,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "E002",
            'date' => date("2016-05-18"),
            'electricity' => 14.8,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "E002",
            'date' => date("2016-05-19"),
            'electricity' => 16.1,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "E002",
            'date' => date("2016-05-20"),
            'electricity' => 27.8,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "E002",
            'date' => date("2016-05-21"),
            'electricity' => 34.8,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "E002",
            'date' => date("2016-05-22"),
            'electricity' => 27.8,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "E002",
            'date' => date("2016-05-23"),
            'electricity' => 23,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "E002",
            'date' => date("2016-05-24"),
            'electricity' => 14.7,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "E002",
            'date' => date("2016-05-25"),
            'electricity' => 17.8,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "E002",
            'date' => date("2016-05-26"),
            'electricity' => 19.3,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "E002",
            'date' => date("2016-05-27"),
            'electricity' => 31.2,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "E002",
            'date' => date("2016-05-28"),
            'electricity' => 32.2,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "E002",
            'date' => date("2016-05-29"),
            'electricity' => 18.1,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "E002",
            'date' => date("2016-05-30"),
            'electricity' => 26.1,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "E002",
            'date' => date("2016-05-31"),
            'electricity' => 35.1,
        ));

                DB::table('electricity')->insert(
        array(
            'roomId' => "E104",
            'date' => date("2016-03-01"),
            'electricity' => 32.3,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "E104",
            'date' => date("2016-03-02"),
            'electricity' => 35,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "E104",
            'date' => date("2016-03-03"),
            'electricity' => 14.2,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "E104",
            'date' => date("2016-03-04"),
            'electricity' => 28,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "E104",
            'date' => date("2016-03-05"),
            'electricity' => 32,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "E104",
            'date' => date("2016-03-06"),
            'electricity' => 23.4,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "E104",
            'date' => date("2016-03-07"),
            'electricity' => 29.2,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "E104",
            'date' => date("2016-03-08"),
            'electricity' => 18.9,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "E104",
            'date' => date("2016-03-09"),
            'electricity' => 24,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "E104",
            'date' => date("2016-03-10"),
            'electricity' => 30,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "E104",
            'date' => date("2016-03-11"),
            'electricity' => 23.5,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "E104",
            'date' => date("2016-03-12"),
            'electricity' => 14.8,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "E104",
            'date' => date("2016-03-13"),
            'electricity' => 23.8,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "E104",
            'date' => date("2016-03-14"),
            'electricity' => 23,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "E104",
            'date' => date("2016-03-15"),
            'electricity' => 14,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "E104",
            'date' => date("2016-03-16"),
            'electricity' => 32,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "E104",
            'date' => date("2016-03-17"),
            'electricity' => 22,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "E104",
            'date' => date("2016-03-18"),
            'electricity' => 23.8,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "E104",
            'date' => date("2016-03-19"),
            'electricity' => 14.9,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "E104",
            'date' => date("2016-03-20"),
            'electricity' => 35.8,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "E104",
            'date' => date("2016-03-21"),
            'electricity' => 27.3,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "E104",
            'date' => date("2016-03-22"),
            'electricity' => 23.7,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "E104",
            'date' => date("2016-03-23"),
            'electricity' => 32.1,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "E104",
            'date' => date("2016-03-24"),
            'electricity' => 23.3,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "E104",
            'date' => date("2016-03-25"),
            'electricity' => 28.1,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "E104",
            'date' => date("2016-03-26"),
            'electricity' => 16.7,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "E104",
            'date' => date("2016-03-27"),
            'electricity' => 14.4,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "E104",
            'date' => date("2016-03-28"),
            'electricity' => 27.9,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "E104",
            'date' => date("2016-03-29"),
            'electricity' => 25.8,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "E104",
            'date' => date("2016-03-30"),
            'electricity' => 24.9,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "E104",
            'date' => date("2016-03-31"),
            'electricity' => 23.2,
        ));

                DB::table('electricity')->insert(
        array(
            'roomId' => "E104",
            'date' => date("2016-04-01"),
            'electricity' => 22.9,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "E104",
            'date' => date("2016-04-02"),
            'electricity' => 21,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "E104",
            'date' => date("2016-04-03"),
            'electricity' => 32,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "E104",
            'date' => date("2016-04-04"),
            'electricity' => 32,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "E104",
            'date' => date("2016-04-05"),
            'electricity' => 29.9,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "E104",
            'date' => date("2016-04-06"),
            'electricity' => 14,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "E104",
            'date' => date("2016-04-07"),
            'electricity' => 23.8,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "E104",
            'date' => date("2016-04-08"),
            'electricity' => 26.8,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "E104",
            'date' => date("2016-04-09"),
            'electricity' => 35.3,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "E104",
            'date' => date("2016-04-10"),
            'electricity' => 26,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "E104",
            'date' => date("2016-04-11"),
            'electricity' => 16,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "E104",
            'date' => date("2016-04-12"),
            'electricity' => 31,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "E104",
            'date' => date("2016-04-13"),
            'electricity' => 27,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "E104",
            'date' => date("2016-04-14"),
            'electricity' => 24.6,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "E104",
            'date' => date("2016-04-15"),
            'electricity' => 20.4,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "E104",
            'date' => date("2016-04-16"),
            'electricity' => 19.5,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "E104",
            'date' => date("2016-04-17"),
            'electricity' => 27.3,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "E104",
            'date' => date("2016-04-18"),
            'electricity' => 22.8,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "E104",
            'date' => date("2016-04-19"),
            'electricity' => 32.1,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "E104",
            'date' => date("2016-04-20"),
            'electricity' => 18.8,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "E104",
            'date' => date("2016-04-21"),
            'electricity' => 24.8,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "E104",
            'date' => date("2016-04-22"),
            'electricity' => 27.2,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "E104",
            'date' => date("2016-04-23"),
            'electricity' => 32.8,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "E104",
            'date' => date("2016-04-24"),
            'electricity' => 14.9,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "E104",
            'date' => date("2016-04-25"),
            'electricity' => 24.1,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "E104",
            'date' => date("2016-04-26"),
            'electricity' => 30.7,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "E104",
            'date' => date("2016-04-27"),
            'electricity' => 27,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "E104",
            'date' => date("2016-04-28"),
            'electricity' => 30,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "E104",
            'date' => date("2016-04-29"),
            'electricity' => 26.1,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "E104",
            'date' => date("2016-04-30"),
            'electricity' => 33.2,
        ));

                DB::table('electricity')->insert(
        array(
            'roomId' => "E104",
            'date' => date("2016-05-01"),
            'electricity' => 29.9,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "E104",
            'date' => date("2016-05-02"),
            'electricity' => 23,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "E104",
            'date' => date("2016-05-03"),
            'electricity' => 20.1,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "E104",
            'date' => date("2016-05-04"),
            'electricity' => 22,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "E104",
            'date' => date("2016-05-05"),
            'electricity' => 22.8,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "E104",
            'date' => date("2016-05-06"),
            'electricity' => 19.8,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "E104",
            'date' => date("2016-05-07"),
            'electricity' => 22.8,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "E104",
            'date' => date("2016-05-08"),
            'electricity' => 26.8,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "E104",
            'date' => date("2016-05-09"),
            'electricity' => 34.8,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "E104",
            'date' => date("2016-05-10"),
            'electricity' => 22.8,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "E104",
            'date' => date("2016-05-11"),
            'electricity' => 28.5,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "E104",
            'date' => date("2016-05-12"),
            'electricity' => 23,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "E104",
            'date' => date("2016-05-13"),
            'electricity' => 27,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "E104",
            'date' => date("2016-05-14"),
            'electricity' => 15,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "E104",
            'date' => date("2016-05-15"),
            'electricity' => 30,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "E104",
            'date' => date("2016-05-16"),
            'electricity' => 34,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "E104",
            'date' => date("2016-05-17"),
            'electricity' => 21,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "E104",
            'date' => date("2016-05-18"),
            'electricity' => 14.8,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "E104",
            'date' => date("2016-05-19"),
            'electricity' => 16.1,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "E104",
            'date' => date("2016-05-20"),
            'electricity' => 27.8,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "E104",
            'date' => date("2016-05-21"),
            'electricity' => 34.8,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "E104",
            'date' => date("2016-05-22"),
            'electricity' => 27.8,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "E104",
            'date' => date("2016-05-23"),
            'electricity' => 23,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "E104",
            'date' => date("2016-05-24"),
            'electricity' => 14.7,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "E104",
            'date' => date("2016-05-25"),
            'electricity' => 17.8,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "E104",
            'date' => date("2016-05-26"),
            'electricity' => 19.3,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "E104",
            'date' => date("2016-05-27"),
            'electricity' => 31.2,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "E104",
            'date' => date("2016-05-28"),
            'electricity' => 32.2,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "E104",
            'date' => date("2016-05-29"),
            'electricity' => 18.1,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "E104",
            'date' => date("2016-05-30"),
            'electricity' => 26.1,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "E104",
            'date' => date("2016-05-31"),
            'electricity' => 35.1,
        ));

                DB::table('electricity')->insert(
        array(
            'roomId' => "B217",
            'date' => date("2016-03-01"),
            'electricity' => 32.3,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B217",
            'date' => date("2016-03-02"),
            'electricity' => 35,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B217",
            'date' => date("2016-03-03"),
            'electricity' => 14.2,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B217",
            'date' => date("2016-03-04"),
            'electricity' => 28,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B217",
            'date' => date("2016-03-05"),
            'electricity' => 32,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B217",
            'date' => date("2016-03-06"),
            'electricity' => 23.4,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B217",
            'date' => date("2016-03-07"),
            'electricity' => 29.2,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B217",
            'date' => date("2016-03-08"),
            'electricity' => 18.9,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B217",
            'date' => date("2016-03-09"),
            'electricity' => 24,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B217",
            'date' => date("2016-03-10"),
            'electricity' => 30,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B217",
            'date' => date("2016-03-11"),
            'electricity' => 23.5,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B217",
            'date' => date("2016-03-12"),
            'electricity' => 14.8,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B217",
            'date' => date("2016-03-13"),
            'electricity' => 23.8,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B217",
            'date' => date("2016-03-14"),
            'electricity' => 23,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B217",
            'date' => date("2016-03-15"),
            'electricity' => 14,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B217",
            'date' => date("2016-03-16"),
            'electricity' => 32,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B217",
            'date' => date("2016-03-17"),
            'electricity' => 22,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B217",
            'date' => date("2016-03-18"),
            'electricity' => 23.8,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B217",
            'date' => date("2016-03-19"),
            'electricity' => 14.9,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B217",
            'date' => date("2016-03-20"),
            'electricity' => 35.8,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B217",
            'date' => date("2016-03-21"),
            'electricity' => 27.3,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B217",
            'date' => date("2016-03-22"),
            'electricity' => 23.7,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B217",
            'date' => date("2016-03-23"),
            'electricity' => 32.1,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B217",
            'date' => date("2016-03-24"),
            'electricity' => 23.3,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B217",
            'date' => date("2016-03-25"),
            'electricity' => 28.1,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B217",
            'date' => date("2016-03-26"),
            'electricity' => 16.7,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B217",
            'date' => date("2016-03-27"),
            'electricity' => 14.4,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B217",
            'date' => date("2016-03-28"),
            'electricity' => 27.9,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B217",
            'date' => date("2016-03-29"),
            'electricity' => 25.8,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B217",
            'date' => date("2016-03-30"),
            'electricity' => 24.9,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B217",
            'date' => date("2016-03-31"),
            'electricity' => 23.2,
        ));

                DB::table('electricity')->insert(
        array(
            'roomId' => "B217",
            'date' => date("2016-04-01"),
            'electricity' => 22.9,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B217",
            'date' => date("2016-04-02"),
            'electricity' => 21,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B217",
            'date' => date("2016-04-03"),
            'electricity' => 32,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B217",
            'date' => date("2016-04-04"),
            'electricity' => 32,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B217",
            'date' => date("2016-04-05"),
            'electricity' => 29.9,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B217",
            'date' => date("2016-04-06"),
            'electricity' => 14,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B217",
            'date' => date("2016-04-07"),
            'electricity' => 23.8,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B217",
            'date' => date("2016-04-08"),
            'electricity' => 26.8,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B217",
            'date' => date("2016-04-09"),
            'electricity' => 35.3,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B217",
            'date' => date("2016-04-10"),
            'electricity' => 26,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B217",
            'date' => date("2016-04-11"),
            'electricity' => 16,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B217",
            'date' => date("2016-04-12"),
            'electricity' => 31,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B217",
            'date' => date("2016-04-13"),
            'electricity' => 27,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B217",
            'date' => date("2016-04-14"),
            'electricity' => 24.6,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B217",
            'date' => date("2016-04-15"),
            'electricity' => 20.4,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B217",
            'date' => date("2016-04-16"),
            'electricity' => 19.5,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B217",
            'date' => date("2016-04-17"),
            'electricity' => 27.3,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B217",
            'date' => date("2016-04-18"),
            'electricity' => 22.8,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B217",
            'date' => date("2016-04-19"),
            'electricity' => 32.1,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B217",
            'date' => date("2016-04-20"),
            'electricity' => 18.8,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B217",
            'date' => date("2016-04-21"),
            'electricity' => 24.8,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B217",
            'date' => date("2016-04-22"),
            'electricity' => 27.2,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B217",
            'date' => date("2016-04-23"),
            'electricity' => 32.8,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B217",
            'date' => date("2016-04-24"),
            'electricity' => 14.9,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B217",
            'date' => date("2016-04-25"),
            'electricity' => 24.1,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B217",
            'date' => date("2016-04-26"),
            'electricity' => 30.7,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B217",
            'date' => date("2016-04-27"),
            'electricity' => 27,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B217",
            'date' => date("2016-04-28"),
            'electricity' => 30,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B217",
            'date' => date("2016-04-29"),
            'electricity' => 26.1,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B217",
            'date' => date("2016-04-30"),
            'electricity' => 33.2,
        ));

                DB::table('electricity')->insert(
        array(
            'roomId' => "B217",
            'date' => date("2016-05-01"),
            'electricity' => 29.9,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B217",
            'date' => date("2016-05-02"),
            'electricity' => 23,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B217",
            'date' => date("2016-05-03"),
            'electricity' => 20.1,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B217",
            'date' => date("2016-05-04"),
            'electricity' => 22,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B217",
            'date' => date("2016-05-05"),
            'electricity' => 22.8,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B217",
            'date' => date("2016-05-06"),
            'electricity' => 19.8,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B217",
            'date' => date("2016-05-07"),
            'electricity' => 22.8,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B217",
            'date' => date("2016-05-08"),
            'electricity' => 26.8,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B217",
            'date' => date("2016-05-09"),
            'electricity' => 34.8,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B217",
            'date' => date("2016-05-10"),
            'electricity' => 22.8,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B217",
            'date' => date("2016-05-11"),
            'electricity' => 28.5,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B217",
            'date' => date("2016-05-12"),
            'electricity' => 23,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B217",
            'date' => date("2016-05-13"),
            'electricity' => 27,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B217",
            'date' => date("2016-05-14"),
            'electricity' => 15,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B217",
            'date' => date("2016-05-15"),
            'electricity' => 30,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B217",
            'date' => date("2016-05-16"),
            'electricity' => 34,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B217",
            'date' => date("2016-05-17"),
            'electricity' => 21,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B217",
            'date' => date("2016-05-18"),
            'electricity' => 14.8,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B217",
            'date' => date("2016-05-19"),
            'electricity' => 16.1,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B217",
            'date' => date("2016-05-20"),
            'electricity' => 27.8,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B217",
            'date' => date("2016-05-21"),
            'electricity' => 34.8,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B217",
            'date' => date("2016-05-22"),
            'electricity' => 27.8,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B217",
            'date' => date("2016-05-23"),
            'electricity' => 23,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B217",
            'date' => date("2016-05-24"),
            'electricity' => 14.7,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B217",
            'date' => date("2016-05-25"),
            'electricity' => 17.8,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B217",
            'date' => date("2016-05-26"),
            'electricity' => 19.3,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B217",
            'date' => date("2016-05-27"),
            'electricity' => 31.2,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B217",
            'date' => date("2016-05-28"),
            'electricity' => 32.2,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B217",
            'date' => date("2016-05-29"),
            'electricity' => 18.1,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B217",
            'date' => date("2016-05-30"),
            'electricity' => 26.1,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B217",
            'date' => date("2016-05-31"),
            'electricity' => 35.1,
        ));

                DB::table('electricity')->insert(
        array(
            'roomId' => "A301",
            'date' => date("2016-03-01"),
            'electricity' => 32.3,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "A301",
            'date' => date("2016-03-02"),
            'electricity' => 35,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "A301",
            'date' => date("2016-03-03"),
            'electricity' => 14.2,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "A301",
            'date' => date("2016-03-04"),
            'electricity' => 28,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "A301",
            'date' => date("2016-03-05"),
            'electricity' => 32,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "A301",
            'date' => date("2016-03-06"),
            'electricity' => 23.4,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "A301",
            'date' => date("2016-03-07"),
            'electricity' => 29.2,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "A301",
            'date' => date("2016-03-08"),
            'electricity' => 18.9,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "A301",
            'date' => date("2016-03-09"),
            'electricity' => 24,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "A301",
            'date' => date("2016-03-10"),
            'electricity' => 30,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "A301",
            'date' => date("2016-03-11"),
            'electricity' => 23.5,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "A301",
            'date' => date("2016-03-12"),
            'electricity' => 14.8,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "A301",
            'date' => date("2016-03-13"),
            'electricity' => 23.8,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "A301",
            'date' => date("2016-03-14"),
            'electricity' => 23,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "A301",
            'date' => date("2016-03-15"),
            'electricity' => 14,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "A301",
            'date' => date("2016-03-16"),
            'electricity' => 32,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "A301",
            'date' => date("2016-03-17"),
            'electricity' => 22,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "A301",
            'date' => date("2016-03-18"),
            'electricity' => 23.8,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "A301",
            'date' => date("2016-03-19"),
            'electricity' => 14.9,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "A301",
            'date' => date("2016-03-20"),
            'electricity' => 35.8,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "A301",
            'date' => date("2016-03-21"),
            'electricity' => 27.3,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "A301",
            'date' => date("2016-03-22"),
            'electricity' => 23.7,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "A301",
            'date' => date("2016-03-23"),
            'electricity' => 32.1,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "A301",
            'date' => date("2016-03-24"),
            'electricity' => 23.3,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "A301",
            'date' => date("2016-03-25"),
            'electricity' => 28.1,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "A301",
            'date' => date("2016-03-26"),
            'electricity' => 16.7,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "A301",
            'date' => date("2016-03-27"),
            'electricity' => 14.4,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "A301",
            'date' => date("2016-03-28"),
            'electricity' => 27.9,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "A301",
            'date' => date("2016-03-29"),
            'electricity' => 25.8,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "A301",
            'date' => date("2016-03-30"),
            'electricity' => 24.9,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "A301",
            'date' => date("2016-03-31"),
            'electricity' => 23.2,
        ));

                DB::table('electricity')->insert(
        array(
            'roomId' => "A301",
            'date' => date("2016-04-01"),
            'electricity' => 22.9,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "A301",
            'date' => date("2016-04-02"),
            'electricity' => 21,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "A301",
            'date' => date("2016-04-03"),
            'electricity' => 32,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "A301",
            'date' => date("2016-04-04"),
            'electricity' => 32,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "A301",
            'date' => date("2016-04-05"),
            'electricity' => 29.9,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "A301",
            'date' => date("2016-04-06"),
            'electricity' => 14,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "A301",
            'date' => date("2016-04-07"),
            'electricity' => 23.8,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "A301",
            'date' => date("2016-04-08"),
            'electricity' => 26.8,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "A301",
            'date' => date("2016-04-09"),
            'electricity' => 35.3,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "A301",
            'date' => date("2016-04-10"),
            'electricity' => 26,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "A301",
            'date' => date("2016-04-11"),
            'electricity' => 16,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "A301",
            'date' => date("2016-04-12"),
            'electricity' => 31,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "A301",
            'date' => date("2016-04-13"),
            'electricity' => 27,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "A301",
            'date' => date("2016-04-14"),
            'electricity' => 24.6,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "A301",
            'date' => date("2016-04-15"),
            'electricity' => 20.4,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "A301",
            'date' => date("2016-04-16"),
            'electricity' => 19.5,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "A301",
            'date' => date("2016-04-17"),
            'electricity' => 27.3,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "A301",
            'date' => date("2016-04-18"),
            'electricity' => 22.8,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "A301",
            'date' => date("2016-04-19"),
            'electricity' => 32.1,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "A301",
            'date' => date("2016-04-20"),
            'electricity' => 18.8,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "A301",
            'date' => date("2016-04-21"),
            'electricity' => 24.8,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "A301",
            'date' => date("2016-04-22"),
            'electricity' => 27.2,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "A301",
            'date' => date("2016-04-23"),
            'electricity' => 32.8,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "A301",
            'date' => date("2016-04-24"),
            'electricity' => 14.9,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "A301",
            'date' => date("2016-04-25"),
            'electricity' => 24.1,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "A301",
            'date' => date("2016-04-26"),
            'electricity' => 30.7,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "A301",
            'date' => date("2016-04-27"),
            'electricity' => 27,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "A301",
            'date' => date("2016-04-28"),
            'electricity' => 30,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "A301",
            'date' => date("2016-04-29"),
            'electricity' => 26.1,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "A301",
            'date' => date("2016-04-30"),
            'electricity' => 33.2,
        ));

                DB::table('electricity')->insert(
        array(
            'roomId' => "A301",
            'date' => date("2016-05-01"),
            'electricity' => 29.9,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "A301",
            'date' => date("2016-05-02"),
            'electricity' => 23,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "A301",
            'date' => date("2016-05-03"),
            'electricity' => 20.1,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "A301",
            'date' => date("2016-05-04"),
            'electricity' => 22,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "A301",
            'date' => date("2016-05-05"),
            'electricity' => 22.8,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "A301",
            'date' => date("2016-05-06"),
            'electricity' => 19.8,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "A301",
            'date' => date("2016-05-07"),
            'electricity' => 22.8,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "A301",
            'date' => date("2016-05-08"),
            'electricity' => 26.8,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "A301",
            'date' => date("2016-05-09"),
            'electricity' => 34.8,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "A301",
            'date' => date("2016-05-10"),
            'electricity' => 22.8,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "A301",
            'date' => date("2016-05-11"),
            'electricity' => 28.5,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "A301",
            'date' => date("2016-05-12"),
            'electricity' => 23,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "A301",
            'date' => date("2016-05-13"),
            'electricity' => 27,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "A301",
            'date' => date("2016-05-14"),
            'electricity' => 15,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "A301",
            'date' => date("2016-05-15"),
            'electricity' => 30,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "A301",
            'date' => date("2016-05-16"),
            'electricity' => 34,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "A301",
            'date' => date("2016-05-17"),
            'electricity' => 21,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "A301",
            'date' => date("2016-05-18"),
            'electricity' => 14.8,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "A301",
            'date' => date("2016-05-19"),
            'electricity' => 16.1,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "A301",
            'date' => date("2016-05-20"),
            'electricity' => 27.8,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "A301",
            'date' => date("2016-05-21"),
            'electricity' => 34.8,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "A301",
            'date' => date("2016-05-22"),
            'electricity' => 27.8,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "A301",
            'date' => date("2016-05-23"),
            'electricity' => 23,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "A301",
            'date' => date("2016-05-24"),
            'electricity' => 14.7,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "A301",
            'date' => date("2016-05-25"),
            'electricity' => 17.8,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "A301",
            'date' => date("2016-05-26"),
            'electricity' => 19.3,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "A301",
            'date' => date("2016-05-27"),
            'electricity' => 31.2,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "A301",
            'date' => date("2016-05-28"),
            'electricity' => 32.2,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "A301",
            'date' => date("2016-05-29"),
            'electricity' => 18.1,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "A301",
            'date' => date("2016-05-30"),
            'electricity' => 26.1,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "A301",
            'date' => date("2016-05-31"),
            'electricity' => 35.1,
        ));

                DB::table('electricity')->insert(
        array(
            'roomId' => "B412",
            'date' => date("2016-03-01"),
            'electricity' => 32.3,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B412",
            'date' => date("2016-03-02"),
            'electricity' => 35,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B412",
            'date' => date("2016-03-03"),
            'electricity' => 14.2,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B412",
            'date' => date("2016-03-04"),
            'electricity' => 28,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B412",
            'date' => date("2016-03-05"),
            'electricity' => 32,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B412",
            'date' => date("2016-03-06"),
            'electricity' => 23.4,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B412",
            'date' => date("2016-03-07"),
            'electricity' => 29.2,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B412",
            'date' => date("2016-03-08"),
            'electricity' => 18.9,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B412",
            'date' => date("2016-03-09"),
            'electricity' => 24,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B412",
            'date' => date("2016-03-10"),
            'electricity' => 30,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B412",
            'date' => date("2016-03-11"),
            'electricity' => 23.5,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B412",
            'date' => date("2016-03-12"),
            'electricity' => 14.8,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B412",
            'date' => date("2016-03-13"),
            'electricity' => 23.8,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B412",
            'date' => date("2016-03-14"),
            'electricity' => 23,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B412",
            'date' => date("2016-03-15"),
            'electricity' => 14,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B412",
            'date' => date("2016-03-16"),
            'electricity' => 32,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B412",
            'date' => date("2016-03-17"),
            'electricity' => 22,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B412",
            'date' => date("2016-03-18"),
            'electricity' => 23.8,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B412",
            'date' => date("2016-03-19"),
            'electricity' => 14.9,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B412",
            'date' => date("2016-03-20"),
            'electricity' => 35.8,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B412",
            'date' => date("2016-03-21"),
            'electricity' => 27.3,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B412",
            'date' => date("2016-03-22"),
            'electricity' => 23.7,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B412",
            'date' => date("2016-03-23"),
            'electricity' => 32.1,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B412",
            'date' => date("2016-03-24"),
            'electricity' => 23.3,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B412",
            'date' => date("2016-03-25"),
            'electricity' => 28.1,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B412",
            'date' => date("2016-03-26"),
            'electricity' => 16.7,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B412",
            'date' => date("2016-03-27"),
            'electricity' => 14.4,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B412",
            'date' => date("2016-03-28"),
            'electricity' => 27.9,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B412",
            'date' => date("2016-03-29"),
            'electricity' => 25.8,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B412",
            'date' => date("2016-03-30"),
            'electricity' => 24.9,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B412",
            'date' => date("2016-03-31"),
            'electricity' => 23.2,
        ));

                DB::table('electricity')->insert(
        array(
            'roomId' => "B412",
            'date' => date("2016-04-01"),
            'electricity' => 22.9,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B412",
            'date' => date("2016-04-02"),
            'electricity' => 21,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B412",
            'date' => date("2016-04-03"),
            'electricity' => 32,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B412",
            'date' => date("2016-04-04"),
            'electricity' => 32,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B412",
            'date' => date("2016-04-05"),
            'electricity' => 29.9,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B412",
            'date' => date("2016-04-06"),
            'electricity' => 14,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B412",
            'date' => date("2016-04-07"),
            'electricity' => 23.8,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B412",
            'date' => date("2016-04-08"),
            'electricity' => 26.8,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B412",
            'date' => date("2016-04-09"),
            'electricity' => 35.3,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B412",
            'date' => date("2016-04-10"),
            'electricity' => 26,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B412",
            'date' => date("2016-04-11"),
            'electricity' => 16,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B412",
            'date' => date("2016-04-12"),
            'electricity' => 31,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B412",
            'date' => date("2016-04-13"),
            'electricity' => 27,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B412",
            'date' => date("2016-04-14"),
            'electricity' => 24.6,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B412",
            'date' => date("2016-04-15"),
            'electricity' => 20.4,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B412",
            'date' => date("2016-04-16"),
            'electricity' => 19.5,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B412",
            'date' => date("2016-04-17"),
            'electricity' => 27.3,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B412",
            'date' => date("2016-04-18"),
            'electricity' => 22.8,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B412",
            'date' => date("2016-04-19"),
            'electricity' => 32.1,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B412",
            'date' => date("2016-04-20"),
            'electricity' => 18.8,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B412",
            'date' => date("2016-04-21"),
            'electricity' => 24.8,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B412",
            'date' => date("2016-04-22"),
            'electricity' => 27.2,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B412",
            'date' => date("2016-04-23"),
            'electricity' => 32.8,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B412",
            'date' => date("2016-04-24"),
            'electricity' => 14.9,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B412",
            'date' => date("2016-04-25"),
            'electricity' => 24.1,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B412",
            'date' => date("2016-04-26"),
            'electricity' => 30.7,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B412",
            'date' => date("2016-04-27"),
            'electricity' => 27,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B412",
            'date' => date("2016-04-28"),
            'electricity' => 30,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B412",
            'date' => date("2016-04-29"),
            'electricity' => 26.1,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B412",
            'date' => date("2016-04-30"),
            'electricity' => 33.2,
        ));

                DB::table('electricity')->insert(
        array(
            'roomId' => "B412",
            'date' => date("2016-05-01"),
            'electricity' => 29.9,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B412",
            'date' => date("2016-05-02"),
            'electricity' => 23,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B412",
            'date' => date("2016-05-03"),
            'electricity' => 20.1,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B412",
            'date' => date("2016-05-04"),
            'electricity' => 22,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B412",
            'date' => date("2016-05-05"),
            'electricity' => 22.8,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B412",
            'date' => date("2016-05-06"),
            'electricity' => 19.8,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B412",
            'date' => date("2016-05-07"),
            'electricity' => 22.8,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B412",
            'date' => date("2016-05-08"),
            'electricity' => 26.8,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B412",
            'date' => date("2016-05-09"),
            'electricity' => 34.8,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B412",
            'date' => date("2016-05-10"),
            'electricity' => 22.8,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B412",
            'date' => date("2016-05-11"),
            'electricity' => 28.5,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B412",
            'date' => date("2016-05-12"),
            'electricity' => 23,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B412",
            'date' => date("2016-05-13"),
            'electricity' => 27,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B412",
            'date' => date("2016-05-14"),
            'electricity' => 15,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B412",
            'date' => date("2016-05-15"),
            'electricity' => 30,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B412",
            'date' => date("2016-05-16"),
            'electricity' => 34,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B412",
            'date' => date("2016-05-17"),
            'electricity' => 21,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B412",
            'date' => date("2016-05-18"),
            'electricity' => 14.8,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B412",
            'date' => date("2016-05-19"),
            'electricity' => 16.1,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B412",
            'date' => date("2016-05-20"),
            'electricity' => 27.8,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B412",
            'date' => date("2016-05-21"),
            'electricity' => 34.8,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B412",
            'date' => date("2016-05-22"),
            'electricity' => 27.8,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B412",
            'date' => date("2016-05-23"),
            'electricity' => 23,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B412",
            'date' => date("2016-05-24"),
            'electricity' => 14.7,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B412",
            'date' => date("2016-05-25"),
            'electricity' => 17.8,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B412",
            'date' => date("2016-05-26"),
            'electricity' => 19.3,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B412",
            'date' => date("2016-05-27"),
            'electricity' => 31.2,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B412",
            'date' => date("2016-05-28"),
            'electricity' => 32.2,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B412",
            'date' => date("2016-05-29"),
            'electricity' => 18.1,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B412",
            'date' => date("2016-05-30"),
            'electricity' => 26.1,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B412",
            'date' => date("2016-05-31"),
            'electricity' => 35.1,
        ));

                DB::table('electricity')->insert(
        array(
            'roomId' => "E504",
            'date' => date("2016-03-01"),
            'electricity' => 32.3,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "E504",
            'date' => date("2016-03-02"),
            'electricity' => 35,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "E504",
            'date' => date("2016-03-03"),
            'electricity' => 14.2,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "E504",
            'date' => date("2016-03-04"),
            'electricity' => 28,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "E504",
            'date' => date("2016-03-05"),
            'electricity' => 32,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "E504",
            'date' => date("2016-03-06"),
            'electricity' => 23.4,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "E504",
            'date' => date("2016-03-07"),
            'electricity' => 29.2,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "E504",
            'date' => date("2016-03-08"),
            'electricity' => 18.9,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "E504",
            'date' => date("2016-03-09"),
            'electricity' => 24,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "E504",
            'date' => date("2016-03-10"),
            'electricity' => 30,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "E504",
            'date' => date("2016-03-11"),
            'electricity' => 23.5,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "E504",
            'date' => date("2016-03-12"),
            'electricity' => 14.8,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "E504",
            'date' => date("2016-03-13"),
            'electricity' => 23.8,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "E504",
            'date' => date("2016-03-14"),
            'electricity' => 23,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "E504",
            'date' => date("2016-03-15"),
            'electricity' => 14,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "E504",
            'date' => date("2016-03-16"),
            'electricity' => 32,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "E504",
            'date' => date("2016-03-17"),
            'electricity' => 22,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "E504",
            'date' => date("2016-03-18"),
            'electricity' => 23.8,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "E504",
            'date' => date("2016-03-19"),
            'electricity' => 14.9,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "E504",
            'date' => date("2016-03-20"),
            'electricity' => 35.8,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "E504",
            'date' => date("2016-03-21"),
            'electricity' => 27.3,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "E504",
            'date' => date("2016-03-22"),
            'electricity' => 23.7,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "E504",
            'date' => date("2016-03-23"),
            'electricity' => 32.1,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "E504",
            'date' => date("2016-03-24"),
            'electricity' => 23.3,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "E504",
            'date' => date("2016-03-25"),
            'electricity' => 28.1,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "E504",
            'date' => date("2016-03-26"),
            'electricity' => 16.7,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "E504",
            'date' => date("2016-03-27"),
            'electricity' => 14.4,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "E504",
            'date' => date("2016-03-28"),
            'electricity' => 27.9,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "E504",
            'date' => date("2016-03-29"),
            'electricity' => 25.8,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "E504",
            'date' => date("2016-03-30"),
            'electricity' => 24.9,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "E504",
            'date' => date("2016-03-31"),
            'electricity' => 23.2,
        ));

                DB::table('electricity')->insert(
        array(
            'roomId' => "E504",
            'date' => date("2016-04-01"),
            'electricity' => 22.9,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "E504",
            'date' => date("2016-04-02"),
            'electricity' => 21,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "E504",
            'date' => date("2016-04-03"),
            'electricity' => 32,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "E504",
            'date' => date("2016-04-04"),
            'electricity' => 32,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "E504",
            'date' => date("2016-04-05"),
            'electricity' => 29.9,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "E504",
            'date' => date("2016-04-06"),
            'electricity' => 14,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "E504",
            'date' => date("2016-04-07"),
            'electricity' => 23.8,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "E504",
            'date' => date("2016-04-08"),
            'electricity' => 26.8,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "E504",
            'date' => date("2016-04-09"),
            'electricity' => 35.3,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "E504",
            'date' => date("2016-04-10"),
            'electricity' => 26,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "E504",
            'date' => date("2016-04-11"),
            'electricity' => 16,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "E504",
            'date' => date("2016-04-12"),
            'electricity' => 31,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "E504",
            'date' => date("2016-04-13"),
            'electricity' => 27,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "E504",
            'date' => date("2016-04-14"),
            'electricity' => 24.6,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "E504",
            'date' => date("2016-04-15"),
            'electricity' => 20.4,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "E504",
            'date' => date("2016-04-16"),
            'electricity' => 19.5,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "E504",
            'date' => date("2016-04-17"),
            'electricity' => 27.3,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "E504",
            'date' => date("2016-04-18"),
            'electricity' => 22.8,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "E504",
            'date' => date("2016-04-19"),
            'electricity' => 32.1,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "E504",
            'date' => date("2016-04-20"),
            'electricity' => 18.8,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "E504",
            'date' => date("2016-04-21"),
            'electricity' => 24.8,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "E504",
            'date' => date("2016-04-22"),
            'electricity' => 27.2,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "E504",
            'date' => date("2016-04-23"),
            'electricity' => 32.8,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "E504",
            'date' => date("2016-04-24"),
            'electricity' => 14.9,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "E504",
            'date' => date("2016-04-25"),
            'electricity' => 24.1,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "E504",
            'date' => date("2016-04-26"),
            'electricity' => 30.7,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "E504",
            'date' => date("2016-04-27"),
            'electricity' => 27,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "E504",
            'date' => date("2016-04-28"),
            'electricity' => 30,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "E504",
            'date' => date("2016-04-29"),
            'electricity' => 26.1,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "E504",
            'date' => date("2016-04-30"),
            'electricity' => 33.2,
        ));

                DB::table('electricity')->insert(
        array(
            'roomId' => "E504",
            'date' => date("2016-05-01"),
            'electricity' => 29.9,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "E504",
            'date' => date("2016-05-02"),
            'electricity' => 23,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "E504",
            'date' => date("2016-05-03"),
            'electricity' => 20.1,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "E504",
            'date' => date("2016-05-04"),
            'electricity' => 22,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "E504",
            'date' => date("2016-05-05"),
            'electricity' => 22.8,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "E504",
            'date' => date("2016-05-06"),
            'electricity' => 19.8,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "E504",
            'date' => date("2016-05-07"),
            'electricity' => 22.8,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "E504",
            'date' => date("2016-05-08"),
            'electricity' => 26.8,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "E504",
            'date' => date("2016-05-09"),
            'electricity' => 34.8,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "E504",
            'date' => date("2016-05-10"),
            'electricity' => 22.8,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "E504",
            'date' => date("2016-05-11"),
            'electricity' => 28.5,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "E504",
            'date' => date("2016-05-12"),
            'electricity' => 23,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "E504",
            'date' => date("2016-05-13"),
            'electricity' => 27,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "E504",
            'date' => date("2016-05-14"),
            'electricity' => 15,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "E504",
            'date' => date("2016-05-15"),
            'electricity' => 30,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "E504",
            'date' => date("2016-05-16"),
            'electricity' => 34,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "E504",
            'date' => date("2016-05-17"),
            'electricity' => 21,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "E504",
            'date' => date("2016-05-18"),
            'electricity' => 14.8,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "E504",
            'date' => date("2016-05-19"),
            'electricity' => 16.1,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "E504",
            'date' => date("2016-05-20"),
            'electricity' => 27.8,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "E504",
            'date' => date("2016-05-21"),
            'electricity' => 34.8,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "E504",
            'date' => date("2016-05-22"),
            'electricity' => 27.8,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "E504",
            'date' => date("2016-05-23"),
            'electricity' => 23,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "E504",
            'date' => date("2016-05-24"),
            'electricity' => 14.7,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "E504",
            'date' => date("2016-05-25"),
            'electricity' => 17.8,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "E504",
            'date' => date("2016-05-26"),
            'electricity' => 19.3,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "E504",
            'date' => date("2016-05-27"),
            'electricity' => 31.2,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "E504",
            'date' => date("2016-05-28"),
            'electricity' => 32.2,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "E504",
            'date' => date("2016-05-29"),
            'electricity' => 18.1,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "E504",
            'date' => date("2016-05-30"),
            'electricity' => 26.1,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "E504",
            'date' => date("2016-05-31"),
            'electricity' => 35.1,
        ));

                DB::table('electricity')->insert(
        array(
            'roomId' => "B611",
            'date' => date("2016-03-01"),
            'electricity' => 32.3,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B611",
            'date' => date("2016-03-02"),
            'electricity' => 35,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B611",
            'date' => date("2016-03-03"),
            'electricity' => 14.2,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B611",
            'date' => date("2016-03-04"),
            'electricity' => 28,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B611",
            'date' => date("2016-03-05"),
            'electricity' => 32,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B611",
            'date' => date("2016-03-06"),
            'electricity' => 23.4,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B611",
            'date' => date("2016-03-07"),
            'electricity' => 29.2,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B611",
            'date' => date("2016-03-08"),
            'electricity' => 18.9,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B611",
            'date' => date("2016-03-09"),
            'electricity' => 24,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B611",
            'date' => date("2016-03-10"),
            'electricity' => 30,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B611",
            'date' => date("2016-03-11"),
            'electricity' => 23.5,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B611",
            'date' => date("2016-03-12"),
            'electricity' => 14.8,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B611",
            'date' => date("2016-03-13"),
            'electricity' => 23.8,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B611",
            'date' => date("2016-03-14"),
            'electricity' => 23,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B611",
            'date' => date("2016-03-15"),
            'electricity' => 14,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B611",
            'date' => date("2016-03-16"),
            'electricity' => 32,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B611",
            'date' => date("2016-03-17"),
            'electricity' => 22,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B611",
            'date' => date("2016-03-18"),
            'electricity' => 23.8,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B611",
            'date' => date("2016-03-19"),
            'electricity' => 14.9,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B611",
            'date' => date("2016-03-20"),
            'electricity' => 35.8,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B611",
            'date' => date("2016-03-21"),
            'electricity' => 27.3,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B611",
            'date' => date("2016-03-22"),
            'electricity' => 23.7,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B611",
            'date' => date("2016-03-23"),
            'electricity' => 32.1,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B611",
            'date' => date("2016-03-24"),
            'electricity' => 23.3,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B611",
            'date' => date("2016-03-25"),
            'electricity' => 28.1,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B611",
            'date' => date("2016-03-26"),
            'electricity' => 16.7,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B611",
            'date' => date("2016-03-27"),
            'electricity' => 14.4,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B611",
            'date' => date("2016-03-28"),
            'electricity' => 27.9,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B611",
            'date' => date("2016-03-29"),
            'electricity' => 25.8,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B611",
            'date' => date("2016-03-30"),
            'electricity' => 24.9,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B611",
            'date' => date("2016-03-31"),
            'electricity' => 23.2,
        ));

                DB::table('electricity')->insert(
        array(
            'roomId' => "B611",
            'date' => date("2016-04-01"),
            'electricity' => 22.9,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B611",
            'date' => date("2016-04-02"),
            'electricity' => 21,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B611",
            'date' => date("2016-04-03"),
            'electricity' => 32,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B611",
            'date' => date("2016-04-04"),
            'electricity' => 32,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B611",
            'date' => date("2016-04-05"),
            'electricity' => 29.9,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B611",
            'date' => date("2016-04-06"),
            'electricity' => 14,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B611",
            'date' => date("2016-04-07"),
            'electricity' => 23.8,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B611",
            'date' => date("2016-04-08"),
            'electricity' => 26.8,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B611",
            'date' => date("2016-04-09"),
            'electricity' => 35.3,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B611",
            'date' => date("2016-04-10"),
            'electricity' => 26,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B611",
            'date' => date("2016-04-11"),
            'electricity' => 16,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B611",
            'date' => date("2016-04-12"),
            'electricity' => 31,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B611",
            'date' => date("2016-04-13"),
            'electricity' => 27,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B611",
            'date' => date("2016-04-14"),
            'electricity' => 24.6,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B611",
            'date' => date("2016-04-15"),
            'electricity' => 20.4,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B611",
            'date' => date("2016-04-16"),
            'electricity' => 19.5,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B611",
            'date' => date("2016-04-17"),
            'electricity' => 27.3,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B611",
            'date' => date("2016-04-18"),
            'electricity' => 22.8,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B611",
            'date' => date("2016-04-19"),
            'electricity' => 32.1,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B611",
            'date' => date("2016-04-20"),
            'electricity' => 18.8,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B611",
            'date' => date("2016-04-21"),
            'electricity' => 24.8,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B611",
            'date' => date("2016-04-22"),
            'electricity' => 27.2,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B611",
            'date' => date("2016-04-23"),
            'electricity' => 32.8,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B611",
            'date' => date("2016-04-24"),
            'electricity' => 14.9,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B611",
            'date' => date("2016-04-25"),
            'electricity' => 24.1,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B611",
            'date' => date("2016-04-26"),
            'electricity' => 30.7,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B611",
            'date' => date("2016-04-27"),
            'electricity' => 27,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B611",
            'date' => date("2016-04-28"),
            'electricity' => 30,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B611",
            'date' => date("2016-04-29"),
            'electricity' => 26.1,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B611",
            'date' => date("2016-04-30"),
            'electricity' => 33.2,
        ));

                DB::table('electricity')->insert(
        array(
            'roomId' => "B611",
            'date' => date("2016-05-01"),
            'electricity' => 29.9,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B611",
            'date' => date("2016-05-02"),
            'electricity' => 23,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B611",
            'date' => date("2016-05-03"),
            'electricity' => 20.1,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B611",
            'date' => date("2016-05-04"),
            'electricity' => 22,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B611",
            'date' => date("2016-05-05"),
            'electricity' => 22.8,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B611",
            'date' => date("2016-05-06"),
            'electricity' => 19.8,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B611",
            'date' => date("2016-05-07"),
            'electricity' => 22.8,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B611",
            'date' => date("2016-05-08"),
            'electricity' => 26.8,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B611",
            'date' => date("2016-05-09"),
            'electricity' => 34.8,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B611",
            'date' => date("2016-05-10"),
            'electricity' => 22.8,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B611",
            'date' => date("2016-05-11"),
            'electricity' => 28.5,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B611",
            'date' => date("2016-05-12"),
            'electricity' => 23,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B611",
            'date' => date("2016-05-13"),
            'electricity' => 27,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B611",
            'date' => date("2016-05-14"),
            'electricity' => 15,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B611",
            'date' => date("2016-05-15"),
            'electricity' => 30,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B611",
            'date' => date("2016-05-16"),
            'electricity' => 34,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B611",
            'date' => date("2016-05-17"),
            'electricity' => 21,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B611",
            'date' => date("2016-05-18"),
            'electricity' => 14.8,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B611",
            'date' => date("2016-05-19"),
            'electricity' => 16.1,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B611",
            'date' => date("2016-05-20"),
            'electricity' => 27.8,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B611",
            'date' => date("2016-05-21"),
            'electricity' => 34.8,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B611",
            'date' => date("2016-05-22"),
            'electricity' => 27.8,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B611",
            'date' => date("2016-05-23"),
            'electricity' => 23,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B611",
            'date' => date("2016-05-24"),
            'electricity' => 14.7,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B611",
            'date' => date("2016-05-25"),
            'electricity' => 17.8,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B611",
            'date' => date("2016-05-26"),
            'electricity' => 19.3,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B611",
            'date' => date("2016-05-27"),
            'electricity' => 31.2,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B611",
            'date' => date("2016-05-28"),
            'electricity' => 32.2,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B611",
            'date' => date("2016-05-29"),
            'electricity' => 18.1,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B611",
            'date' => date("2016-05-30"),
            'electricity' => 26.1,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "B611",
            'date' => date("2016-05-31"),
            'electricity' => 35.1,
        ));

                DB::table('electricity')->insert(
        array(
            'roomId' => "G704",
            'date' => date("2016-03-01"),
            'electricity' => 32.3,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "G704",
            'date' => date("2016-03-02"),
            'electricity' => 35,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "G704",
            'date' => date("2016-03-03"),
            'electricity' => 14.2,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "G704",
            'date' => date("2016-03-04"),
            'electricity' => 28,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "G704",
            'date' => date("2016-03-05"),
            'electricity' => 32,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "G704",
            'date' => date("2016-03-06"),
            'electricity' => 23.4,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "G704",
            'date' => date("2016-03-07"),
            'electricity' => 29.2,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "G704",
            'date' => date("2016-03-08"),
            'electricity' => 18.9,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "G704",
            'date' => date("2016-03-09"),
            'electricity' => 24,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "G704",
            'date' => date("2016-03-10"),
            'electricity' => 30,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "G704",
            'date' => date("2016-03-11"),
            'electricity' => 23.5,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "G704",
            'date' => date("2016-03-12"),
            'electricity' => 14.8,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "G704",
            'date' => date("2016-03-13"),
            'electricity' => 23.8,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "G704",
            'date' => date("2016-03-14"),
            'electricity' => 23,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "G704",
            'date' => date("2016-03-15"),
            'electricity' => 14,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "G704",
            'date' => date("2016-03-16"),
            'electricity' => 32,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "G704",
            'date' => date("2016-03-17"),
            'electricity' => 22,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "G704",
            'date' => date("2016-03-18"),
            'electricity' => 23.8,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "G704",
            'date' => date("2016-03-19"),
            'electricity' => 14.9,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "G704",
            'date' => date("2016-03-20"),
            'electricity' => 35.8,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "G704",
            'date' => date("2016-03-21"),
            'electricity' => 27.3,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "G704",
            'date' => date("2016-03-22"),
            'electricity' => 23.7,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "G704",
            'date' => date("2016-03-23"),
            'electricity' => 32.1,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "G704",
            'date' => date("2016-03-24"),
            'electricity' => 23.3,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "G704",
            'date' => date("2016-03-25"),
            'electricity' => 28.1,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "G704",
            'date' => date("2016-03-26"),
            'electricity' => 16.7,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "G704",
            'date' => date("2016-03-27"),
            'electricity' => 14.4,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "G704",
            'date' => date("2016-03-28"),
            'electricity' => 27.9,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "G704",
            'date' => date("2016-03-29"),
            'electricity' => 25.8,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "G704",
            'date' => date("2016-03-30"),
            'electricity' => 24.9,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "G704",
            'date' => date("2016-03-31"),
            'electricity' => 23.2,
        ));

                DB::table('electricity')->insert(
        array(
            'roomId' => "G704",
            'date' => date("2016-04-01"),
            'electricity' => 22.9,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "G704",
            'date' => date("2016-04-02"),
            'electricity' => 21,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "G704",
            'date' => date("2016-04-03"),
            'electricity' => 32,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "G704",
            'date' => date("2016-04-04"),
            'electricity' => 32,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "G704",
            'date' => date("2016-04-05"),
            'electricity' => 29.9,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "G704",
            'date' => date("2016-04-06"),
            'electricity' => 14,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "G704",
            'date' => date("2016-04-07"),
            'electricity' => 23.8,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "G704",
            'date' => date("2016-04-08"),
            'electricity' => 26.8,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "G704",
            'date' => date("2016-04-09"),
            'electricity' => 35.3,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "G704",
            'date' => date("2016-04-10"),
            'electricity' => 26,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "G704",
            'date' => date("2016-04-11"),
            'electricity' => 16,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "G704",
            'date' => date("2016-04-12"),
            'electricity' => 31,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "G704",
            'date' => date("2016-04-13"),
            'electricity' => 27,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "G704",
            'date' => date("2016-04-14"),
            'electricity' => 24.6,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "G704",
            'date' => date("2016-04-15"),
            'electricity' => 20.4,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "G704",
            'date' => date("2016-04-16"),
            'electricity' => 19.5,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "G704",
            'date' => date("2016-04-17"),
            'electricity' => 27.3,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "G704",
            'date' => date("2016-04-18"),
            'electricity' => 22.8,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "G704",
            'date' => date("2016-04-19"),
            'electricity' => 32.1,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "G704",
            'date' => date("2016-04-20"),
            'electricity' => 18.8,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "G704",
            'date' => date("2016-04-21"),
            'electricity' => 24.8,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "G704",
            'date' => date("2016-04-22"),
            'electricity' => 27.2,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "G704",
            'date' => date("2016-04-23"),
            'electricity' => 32.8,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "G704",
            'date' => date("2016-04-24"),
            'electricity' => 14.9,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "G704",
            'date' => date("2016-04-25"),
            'electricity' => 24.1,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "G704",
            'date' => date("2016-04-26"),
            'electricity' => 30.7,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "G704",
            'date' => date("2016-04-27"),
            'electricity' => 27,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "G704",
            'date' => date("2016-04-28"),
            'electricity' => 30,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "G704",
            'date' => date("2016-04-29"),
            'electricity' => 26.1,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "G704",
            'date' => date("2016-04-30"),
            'electricity' => 33.2,
        ));

                DB::table('electricity')->insert(
        array(
            'roomId' => "G704",
            'date' => date("2016-05-01"),
            'electricity' => 29.9,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "G704",
            'date' => date("2016-05-02"),
            'electricity' => 23,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "G704",
            'date' => date("2016-05-03"),
            'electricity' => 20.1,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "G704",
            'date' => date("2016-05-04"),
            'electricity' => 22,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "G704",
            'date' => date("2016-05-05"),
            'electricity' => 22.8,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "G704",
            'date' => date("2016-05-06"),
            'electricity' => 19.8,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "G704",
            'date' => date("2016-05-07"),
            'electricity' => 22.8,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "G704",
            'date' => date("2016-05-08"),
            'electricity' => 26.8,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "G704",
            'date' => date("2016-05-09"),
            'electricity' => 34.8,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "G704",
            'date' => date("2016-05-10"),
            'electricity' => 22.8,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "G704",
            'date' => date("2016-05-11"),
            'electricity' => 28.5,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "G704",
            'date' => date("2016-05-12"),
            'electricity' => 23,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "G704",
            'date' => date("2016-05-13"),
            'electricity' => 27,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "G704",
            'date' => date("2016-05-14"),
            'electricity' => 15,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "G704",
            'date' => date("2016-05-15"),
            'electricity' => 30,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "G704",
            'date' => date("2016-05-16"),
            'electricity' => 34,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "G704",
            'date' => date("2016-05-17"),
            'electricity' => 21,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "G704",
            'date' => date("2016-05-18"),
            'electricity' => 14.8,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "G704",
            'date' => date("2016-05-19"),
            'electricity' => 16.1,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "G704",
            'date' => date("2016-05-20"),
            'electricity' => 27.8,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "G704",
            'date' => date("2016-05-21"),
            'electricity' => 34.8,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "G704",
            'date' => date("2016-05-22"),
            'electricity' => 27.8,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "G704",
            'date' => date("2016-05-23"),
            'electricity' => 23,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "G704",
            'date' => date("2016-05-24"),
            'electricity' => 14.7,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "G704",
            'date' => date("2016-05-25"),
            'electricity' => 17.8,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "G704",
            'date' => date("2016-05-26"),
            'electricity' => 19.3,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "G704",
            'date' => date("2016-05-27"),
            'electricity' => 31.2,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "G704",
            'date' => date("2016-05-28"),
            'electricity' => 32.2,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "G704",
            'date' => date("2016-05-29"),
            'electricity' => 18.1,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "G704",
            'date' => date("2016-05-30"),
            'electricity' => 26.1,
        ));

        DB::table('electricity')->insert(
        array(
            'roomId' => "G704",
            'date' => date("2016-05-31"),
            'electricity' => 35.1,
        ));
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
