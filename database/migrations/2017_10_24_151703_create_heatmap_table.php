<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHeatmapTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('heatmap', function (Blueprint $table) {
            $table->increments('id');
            $table->string('roomId');
            $table->date('date');
            $table->decimal('temperature', 3, 1);
            $table->timestamps();
        });


        DB::table('heatmap')->insert(
        array(
            'roomId' => "G001",
            'date' => date("2016-03-01"),
            'temperature' => 21.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G001",
            'date' => date("2016-03-02"),
            'temperature' => 35,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G001",
            'date' => date("2016-03-03"),
            'temperature' => 15,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G001",
            'date' => date("2016-03-04"),
            'temperature' => 33,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G001",
            'date' => date("2016-03-05"),
            'temperature' => 22,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G001",
            'date' => date("2016-03-06"),
            'temperature' => 16.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G001",
            'date' => date("2016-03-07"),
            'temperature' => 29.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G001",
            'date' => date("2016-03-08"),
            'temperature' => 23.4,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G001",
            'date' => date("2016-03-09"),
            'temperature' => 24,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G001",
            'date' => date("2016-03-10"),
            'temperature' => 30,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G001",
            'date' => date("2016-03-11"),
            'temperature' => 22.5,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G001",
            'date' => date("2016-03-12"),
            'temperature' => 34.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G001",
            'date' => date("2016-03-13"),
            'temperature' => 23,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G001",
            'date' => date("2016-03-14"),
            'temperature' => 15,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G001",
            'date' => date("2016-03-15"),
            'temperature' => 32,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G001",
            'date' => date("2016-03-16"),
            'temperature' => 25,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G001",
            'date' => date("2016-03-17"),
            'temperature' => 22,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G001",
            'date' => date("2016-03-18"),
            'temperature' => 14.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G001",
            'date' => date("2016-03-19"),
            'temperature' => 34,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G001",
            'date' => date("2016-03-20"),
            'temperature' => 22.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G001",
            'date' => date("2016-03-21"),
            'temperature' => 25,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G001",
            'date' => date("2016-03-22"),
            'temperature' => 30,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G001",
            'date' => date("2016-03-23"),
            'temperature' => 31.2,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G001",
            'date' => date("2016-03-24"),
            'temperature' => 19.2,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G001",
            'date' => date("2016-03-25"),
            'temperature' => 17.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G001",
            'date' => date("2016-03-26"),
            'temperature' => 26.7,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G001",
            'date' => date("2016-03-27"),
            'temperature' => 23.4,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G001",
            'date' => date("2016-03-28"),
            'temperature' => 17.9,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G001",
            'date' => date("2016-03-29"),
            'temperature' => 15.7,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G001",
            'date' => date("2016-03-30"),
            'temperature' => 24,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G001",
            'date' => date("2016-03-31"),
            'temperature' => 26.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G001",
            'date' => date("2016-04-01"),
            'temperature' => 27.3,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G001",
            'date' => date("2016-04-02"),
            'temperature' => 18,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G001",
            'date' => date("2016-04-03"),
            'temperature' => 32,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G001",
            'date' => date("2016-04-04"),
            'temperature' => 30,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G001",
            'date' => date("2016-04-05"),
            'temperature' => 27.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G001",
            'date' => date("2016-04-06"),
            'temperature' => 18,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G001",
            'date' => date("2016-04-07"),
            'temperature' => 23.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G001",
            'date' => date("2016-04-08"),
            'temperature' => 26.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G001",
            'date' => date("2016-04-09"),
            'temperature' => 34.9,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G001",
            'date' => date("2016-04-10"),
            'temperature' => 22,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G001",
            'date' => date("2016-04-11"),
            'temperature' => 14,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G001",
            'date' => date("2016-04-12"),
            'temperature' => 31,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G001",
            'date' => date("2016-04-13"),
            'temperature' => 27,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G001",
            'date' => date("2016-04-14"),
            'temperature' => 24.6,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G001",
            'date' => date("2016-04-15"),
            'temperature' => 20.4,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G001",
            'date' => date("2016-04-16"),
            'temperature' => 19.5,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G001",
            'date' => date("2016-04-17"),
            'temperature' => 27.3,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G001",
            'date' => date("2016-04-18"),
            'temperature' => 22.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G001",
            'date' => date("2016-04-19"),
            'temperature' => 32.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G001",
            'date' => date("2016-04-20"),
            'temperature' => 18.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G001",
            'date' => date("2016-04-21"),
            'temperature' => 24.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G001",
            'date' => date("2016-04-22"),
            'temperature' => 27.2,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G001",
            'date' => date("2016-04-23"),
            'temperature' => 32.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G001",
            'date' => date("2016-04-24"),
            'temperature' => 14.9,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G001",
            'date' => date("2016-04-25"),
            'temperature' => 24.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G001",
            'date' => date("2016-04-26"),
            'temperature' => 30.7,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G001",
            'date' => date("2016-04-27"),
            'temperature' => 27,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G001",
            'date' => date("2016-04-28"),
            'temperature' => 30,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G001",
            'date' => date("2016-04-29"),
            'temperature' => 26.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G001",
            'date' => date("2016-04-30"),
            'temperature' => 33.2,
        ));

                DB::table('heatmap')->insert(
        array(
            'roomId' => "G001",
            'date' => date("2016-05-01"),
            'temperature' => 29.9,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G001",
            'date' => date("2016-05-02"),
            'temperature' => 23,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G001",
            'date' => date("2016-05-03"),
            'temperature' => 20.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G001",
            'date' => date("2016-05-04"),
            'temperature' => 22,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G001",
            'date' => date("2016-05-05"),
            'temperature' => 22.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G001",
            'date' => date("2016-05-06"),
            'temperature' => 19.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G001",
            'date' => date("2016-05-07"),
            'temperature' => 22.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G001",
            'date' => date("2016-05-08"),
            'temperature' => 26.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G001",
            'date' => date("2016-05-09"),
            'temperature' => 34.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G001",
            'date' => date("2016-05-10"),
            'temperature' => 22.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G001",
            'date' => date("2016-05-11"),
            'temperature' => 28.5,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G001",
            'date' => date("2016-05-12"),
            'temperature' => 23,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G001",
            'date' => date("2016-05-13"),
            'temperature' => 27,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G001",
            'date' => date("2016-05-14"),
            'temperature' => 15,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G001",
            'date' => date("2016-05-15"),
            'temperature' => 30,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G001",
            'date' => date("2016-05-16"),
            'temperature' => 34,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G001",
            'date' => date("2016-05-17"),
            'temperature' => 21,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G001",
            'date' => date("2016-05-18"),
            'temperature' => 14.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G001",
            'date' => date("2016-05-19"),
            'temperature' => 16.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G001",
            'date' => date("2016-05-20"),
            'temperature' => 27.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G001",
            'date' => date("2016-05-21"),
            'temperature' => 34.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G001",
            'date' => date("2016-05-22"),
            'temperature' => 27.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G001",
            'date' => date("2016-05-23"),
            'temperature' => 23,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G001",
            'date' => date("2016-05-24"),
            'temperature' => 14.7,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G001",
            'date' => date("2016-05-25"),
            'temperature' => 17.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G001",
            'date' => date("2016-05-26"),
            'temperature' => 19.3,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G001",
            'date' => date("2016-05-27"),
            'temperature' => 31.2,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G001",
            'date' => date("2016-05-28"),
            'temperature' => 32.2,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G001",
            'date' => date("2016-05-29"),
            'temperature' => 18.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G001",
            'date' => date("2016-05-30"),
            'temperature' => 26.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G001",
            'date' => date("2016-05-31"),
            'temperature' => 35.1,
        ));

                DB::table('heatmap')->insert(
        array(
            'roomId' => "B001",
            'date' => date("2016-03-01"),
            'temperature' => 23.3,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B001",
            'date' => date("2016-03-02"),
            'temperature' => 27,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B001",
            'date' => date("2016-03-03"),
            'temperature' => 35.2,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B001",
            'date' => date("2016-03-04"),
            'temperature' => 21,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B001",
            'date' => date("2016-03-05"),
            'temperature' => 22,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B001",
            'date' => date("2016-03-06"),
            'temperature' => 33.4,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B001",
            'date' => date("2016-03-07"),
            'temperature' => 29.2,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B001",
            'date' => date("2016-03-08"),
            'temperature' => 22.9,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B001",
            'date' => date("2016-03-09"),
            'temperature' => 28,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B001",
            'date' => date("2016-03-10"),
            'temperature' => 22,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B001",
            'date' => date("2016-03-11"),
            'temperature' => 33.5,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B001",
            'date' => date("2016-03-12"),
            'temperature' => 24.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B001",
            'date' => date("2016-03-13"),
            'temperature' => 33.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B001",
            'date' => date("2016-03-14"),
            'temperature' => 13,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B001",
            'date' => date("2016-03-15"),
            'temperature' => 22,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B001",
            'date' => date("2016-03-16"),
            'temperature' => 33,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B001",
            'date' => date("2016-03-17"),
            'temperature' => 21,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B001",
            'date' => date("2016-03-18"),
            'temperature' => 34.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B001",
            'date' => date("2016-03-19"),
            'temperature' => 34.9,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B001",
            'date' => date("2016-03-20"),
            'temperature' => 22.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B001",
            'date' => date("2016-03-21"),
            'temperature' => 34.3,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B001",
            'date' => date("2016-03-22"),
            'temperature' => 26.7,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B001",
            'date' => date("2016-03-23"),
            'temperature' => 21.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B001",
            'date' => date("2016-03-24"),
            'temperature' => 14.3,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B001",
            'date' => date("2016-03-25"),
            'temperature' => 33.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B001",
            'date' => date("2016-03-26"),
            'temperature' => 33.7,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B001",
            'date' => date("2016-03-27"),
            'temperature' => 21.4,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B001",
            'date' => date("2016-03-28"),
            'temperature' => 32.9,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B001",
            'date' => date("2016-03-29"),
            'temperature' => 32,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B001",
            'date' => date("2016-03-30"),
            'temperature' => 35,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B001",
            'date' => date("2016-03-31"),
            'temperature' => 34.2,
        ));

                DB::table('heatmap')->insert(
        array(
            'roomId' => "B001",
            'date' => date("2016-04-01"),
            'temperature' => 23.9,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B001",
            'date' => date("2016-04-02"),
            'temperature' => 25,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B001",
            'date' => date("2016-04-03"),
            'temperature' => 25,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B001",
            'date' => date("2016-04-04"),
            'temperature' => 25,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B001",
            'date' => date("2016-04-05"),
            'temperature' => 28,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B001",
            'date' => date("2016-04-06"),
            'temperature' => 24,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B001",
            'date' => date("2016-04-07"),
            'temperature' => 34,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B001",
            'date' => date("2016-04-08"),
            'temperature' => 29,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B001",
            'date' => date("2016-04-09"),
            'temperature' => 24,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B001",
            'date' => date("2016-04-10"),
            'temperature' => 14,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B001",
            'date' => date("2016-04-11"),
            'temperature' => 23,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B001",
            'date' => date("2016-04-12"),
            'temperature' => 26,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B001",
            'date' => date("2016-04-13"),
            'temperature' => 21,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B001",
            'date' => date("2016-04-14"),
            'temperature' => 14,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B001",
            'date' => date("2016-04-15"),
            'temperature' => 34.4,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B001",
            'date' => date("2016-04-16"),
            'temperature' => 23.5,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B001",
            'date' => date("2016-04-17"),
            'temperature' => 27.3,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B001",
            'date' => date("2016-04-18"),
            'temperature' => 23.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B001",
            'date' => date("2016-04-19"),
            'temperature' => 34.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B001",
            'date' => date("2016-04-20"),
            'temperature' => 22.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B001",
            'date' => date("2016-04-21"),
            'temperature' => 23.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B001",
            'date' => date("2016-04-22"),
            'temperature' => 25.2,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B001",
            'date' => date("2016-04-23"),
            'temperature' => 24.3,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B001",
            'date' => date("2016-04-24"),
            'temperature' => 14.9,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B001",
            'date' => date("2016-04-25"),
            'temperature' => 23.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B001",
            'date' => date("2016-04-26"),
            'temperature' => 23.7,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B001",
            'date' => date("2016-04-27"),
            'temperature' => 24,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B001",
            'date' => date("2016-04-28"),
            'temperature' => 24,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B001",
            'date' => date("2016-04-29"),
            'temperature' => 24.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B001",
            'date' => date("2016-04-30"),
            'temperature' => 25.2,
        ));

                DB::table('heatmap')->insert(
        array(
            'roomId' => "B001",
            'date' => date("2016-05-01"),
            'temperature' => 26.9,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B001",
            'date' => date("2016-05-02"),
            'temperature' => 29,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B001",
            'date' => date("2016-05-03"),
            'temperature' => 21.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B001",
            'date' => date("2016-05-04"),
            'temperature' => 31,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B001",
            'date' => date("2016-05-05"),
            'temperature' => 27.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B001",
            'date' => date("2016-05-06"),
            'temperature' => 24.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B001",
            'date' => date("2016-05-07"),
            'temperature' => 23.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B001",
            'date' => date("2016-05-08"),
            'temperature' => 25.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B001",
            'date' => date("2016-05-09"),
            'temperature' => 26.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B001",
            'date' => date("2016-05-10"),
            'temperature' => 34.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B001",
            'date' => date("2016-05-11"),
            'temperature' => 24.5,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B001",
            'date' => date("2016-05-12"),
            'temperature' => 27.9,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B001",
            'date' => date("2016-05-13"),
            'temperature' => 28,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B001",
            'date' => date("2016-05-14"),
            'temperature' => 19.9,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B001",
            'date' => date("2016-05-15"),
            'temperature' => 19,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B001",
            'date' => date("2016-05-16"),
            'temperature' => 25,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B001",
            'date' => date("2016-05-17"),
            'temperature' => 28,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B001",
            'date' => date("2016-05-18"),
            'temperature' => 29.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B001",
            'date' => date("2016-05-19"),
            'temperature' => 21.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B001",
            'date' => date("2016-05-20"),
            'temperature' => 36.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B001",
            'date' => date("2016-05-21"),
            'temperature' => 35.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B001",
            'date' => date("2016-05-22"),
            'temperature' => 21.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B001",
            'date' => date("2016-05-23"),
            'temperature' => 19.7,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B001",
            'date' => date("2016-05-24"),
            'temperature' => 24.7,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B001",
            'date' => date("2016-05-25"),
            'temperature' => 30.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B001",
            'date' => date("2016-05-26"),
            'temperature' => 28.3,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B001",
            'date' => date("2016-05-27"),
            'temperature' => 21.2,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B001",
            'date' => date("2016-05-28"),
            'temperature' => 25.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B001",
            'date' => date("2016-05-29"),
            'temperature' => 26.5,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B001",
            'date' => date("2016-05-30"),
            'temperature' => 22.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B001",
            'date' => date("2016-05-31"),
            'temperature' => 29.3,
        ));


        DB::table('heatmap')->insert(
        array(
            'roomId' => "G105",
            'date' => date("2016-03-01"),
            'temperature' => 21.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G105",
            'date' => date("2016-03-02"),
            'temperature' => 35,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G105",
            'date' => date("2016-03-03"),
            'temperature' => 15,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G105",
            'date' => date("2016-03-04"),
            'temperature' => 33,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G105",
            'date' => date("2016-03-05"),
            'temperature' => 22,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G105",
            'date' => date("2016-03-06"),
            'temperature' => 16.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G105",
            'date' => date("2016-03-07"),
            'temperature' => 29.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G105",
            'date' => date("2016-03-08"),
            'temperature' => 23.4,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G105",
            'date' => date("2016-03-09"),
            'temperature' => 24,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G105",
            'date' => date("2016-03-10"),
            'temperature' => 30,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G105",
            'date' => date("2016-03-11"),
            'temperature' => 22.5,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G105",
            'date' => date("2016-03-12"),
            'temperature' => 34.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G105",
            'date' => date("2016-03-13"),
            'temperature' => 23,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G105",
            'date' => date("2016-03-14"),
            'temperature' => 15,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G105",
            'date' => date("2016-03-15"),
            'temperature' => 32,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G105",
            'date' => date("2016-03-16"),
            'temperature' => 25,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G105",
            'date' => date("2016-03-17"),
            'temperature' => 22,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G105",
            'date' => date("2016-03-18"),
            'temperature' => 14.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G105",
            'date' => date("2016-03-19"),
            'temperature' => 34,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G105",
            'date' => date("2016-03-20"),
            'temperature' => 22.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G105",
            'date' => date("2016-03-21"),
            'temperature' => 25,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G105",
            'date' => date("2016-03-22"),
            'temperature' => 30,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G105",
            'date' => date("2016-03-23"),
            'temperature' => 31.2,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G105",
            'date' => date("2016-03-24"),
            'temperature' => 19.2,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G105",
            'date' => date("2016-03-25"),
            'temperature' => 17.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G105",
            'date' => date("2016-03-26"),
            'temperature' => 26.7,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G105",
            'date' => date("2016-03-27"),
            'temperature' => 23.4,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G105",
            'date' => date("2016-03-28"),
            'temperature' => 17.9,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G105",
            'date' => date("2016-03-29"),
            'temperature' => 15.7,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G105",
            'date' => date("2016-03-30"),
            'temperature' => 24,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G105",
            'date' => date("2016-03-31"),
            'temperature' => 26.1,
        ));

                DB::table('heatmap')->insert(
        array(
            'roomId' => "G105",
            'date' => date("2016-04-01"),
            'temperature' => 27.3,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G105",
            'date' => date("2016-04-02"),
            'temperature' => 18,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G105",
            'date' => date("2016-04-03"),
            'temperature' => 32,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G105",
            'date' => date("2016-04-04"),
            'temperature' => 30,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G105",
            'date' => date("2016-04-05"),
            'temperature' => 27.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G105",
            'date' => date("2016-04-06"),
            'temperature' => 18,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G105",
            'date' => date("2016-04-07"),
            'temperature' => 23.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G105",
            'date' => date("2016-04-08"),
            'temperature' => 26.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G105",
            'date' => date("2016-04-09"),
            'temperature' => 34.9,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G105",
            'date' => date("2016-04-10"),
            'temperature' => 22,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G105",
            'date' => date("2016-04-11"),
            'temperature' => 14,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G105",
            'date' => date("2016-04-12"),
            'temperature' => 31,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G105",
            'date' => date("2016-04-13"),
            'temperature' => 27,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G105",
            'date' => date("2016-04-14"),
            'temperature' => 24.6,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G105",
            'date' => date("2016-04-15"),
            'temperature' => 20.4,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G105",
            'date' => date("2016-04-16"),
            'temperature' => 19.5,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G105",
            'date' => date("2016-04-17"),
            'temperature' => 27.3,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G105",
            'date' => date("2016-04-18"),
            'temperature' => 22.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G105",
            'date' => date("2016-04-19"),
            'temperature' => 32.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G105",
            'date' => date("2016-04-20"),
            'temperature' => 18.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G105",
            'date' => date("2016-04-21"),
            'temperature' => 24.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G105",
            'date' => date("2016-04-22"),
            'temperature' => 27.2,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G105",
            'date' => date("2016-04-23"),
            'temperature' => 32.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G105",
            'date' => date("2016-04-24"),
            'temperature' => 14.9,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G105",
            'date' => date("2016-04-25"),
            'temperature' => 24.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G105",
            'date' => date("2016-04-26"),
            'temperature' => 30.7,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G105",
            'date' => date("2016-04-27"),
            'temperature' => 27,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G105",
            'date' => date("2016-04-28"),
            'temperature' => 30,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G105",
            'date' => date("2016-04-29"),
            'temperature' => 26.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G105",
            'date' => date("2016-04-30"),
            'temperature' => 33.2,
        ));

                DB::table('heatmap')->insert(
        array(
            'roomId' => "G105",
            'date' => date("2016-05-01"),
            'temperature' => 29.9,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G105",
            'date' => date("2016-05-02"),
            'temperature' => 23,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G105",
            'date' => date("2016-05-03"),
            'temperature' => 20.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G105",
            'date' => date("2016-05-04"),
            'temperature' => 22,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G105",
            'date' => date("2016-05-05"),
            'temperature' => 22.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G105",
            'date' => date("2016-05-06"),
            'temperature' => 19.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G105",
            'date' => date("2016-05-07"),
            'temperature' => 22.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G105",
            'date' => date("2016-05-08"),
            'temperature' => 26.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G105",
            'date' => date("2016-05-09"),
            'temperature' => 34.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G105",
            'date' => date("2016-05-10"),
            'temperature' => 22.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G105",
            'date' => date("2016-05-11"),
            'temperature' => 28.5,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G105",
            'date' => date("2016-05-12"),
            'temperature' => 23,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G105",
            'date' => date("2016-05-13"),
            'temperature' => 27,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G105",
            'date' => date("2016-05-14"),
            'temperature' => 15,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G105",
            'date' => date("2016-05-15"),
            'temperature' => 30,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G105",
            'date' => date("2016-05-16"),
            'temperature' => 34,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G105",
            'date' => date("2016-05-17"),
            'temperature' => 21,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G105",
            'date' => date("2016-05-18"),
            'temperature' => 14.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G105",
            'date' => date("2016-05-19"),
            'temperature' => 16.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G105",
            'date' => date("2016-05-20"),
            'temperature' => 27.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G105",
            'date' => date("2016-05-21"),
            'temperature' => 34.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G105",
            'date' => date("2016-05-22"),
            'temperature' => 27.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G105",
            'date' => date("2016-05-23"),
            'temperature' => 23,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G105",
            'date' => date("2016-05-24"),
            'temperature' => 14.7,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G105",
            'date' => date("2016-05-25"),
            'temperature' => 17.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G105",
            'date' => date("2016-05-26"),
            'temperature' => 19.3,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G105",
            'date' => date("2016-05-27"),
            'temperature' => 31.2,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G105",
            'date' => date("2016-05-28"),
            'temperature' => 32.2,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G105",
            'date' => date("2016-05-29"),
            'temperature' => 18.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G105",
            'date' => date("2016-05-30"),
            'temperature' => 26.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G105",
            'date' => date("2016-05-31"),
            'temperature' => 35.1,
        ));

                DB::table('heatmap')->insert(
        array(
            'roomId' => "B310",
            'date' => date("2016-03-01"),
            'temperature' => 21.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B310",
            'date' => date("2016-03-02"),
            'temperature' => 35,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B310",
            'date' => date("2016-03-03"),
            'temperature' => 15,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B310",
            'date' => date("2016-03-04"),
            'temperature' => 33,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B310",
            'date' => date("2016-03-05"),
            'temperature' => 22,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B310",
            'date' => date("2016-03-06"),
            'temperature' => 16.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B310",
            'date' => date("2016-03-07"),
            'temperature' => 29.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B310",
            'date' => date("2016-03-08"),
            'temperature' => 23.4,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B310",
            'date' => date("2016-03-09"),
            'temperature' => 24,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B310",
            'date' => date("2016-03-10"),
            'temperature' => 30,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B310",
            'date' => date("2016-03-11"),
            'temperature' => 22.5,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B310",
            'date' => date("2016-03-12"),
            'temperature' => 34.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B310",
            'date' => date("2016-03-13"),
            'temperature' => 23,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B310",
            'date' => date("2016-03-14"),
            'temperature' => 15,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B310",
            'date' => date("2016-03-15"),
            'temperature' => 32,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B310",
            'date' => date("2016-03-16"),
            'temperature' => 25,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B310",
            'date' => date("2016-03-17"),
            'temperature' => 22,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B310",
            'date' => date("2016-03-18"),
            'temperature' => 14.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B310",
            'date' => date("2016-03-19"),
            'temperature' => 34,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B310",
            'date' => date("2016-03-20"),
            'temperature' => 22.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B310",
            'date' => date("2016-03-21"),
            'temperature' => 25,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B310",
            'date' => date("2016-03-22"),
            'temperature' => 30,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B310",
            'date' => date("2016-03-23"),
            'temperature' => 31.2,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B310",
            'date' => date("2016-03-24"),
            'temperature' => 19.2,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B310",
            'date' => date("2016-03-25"),
            'temperature' => 17.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B310",
            'date' => date("2016-03-26"),
            'temperature' => 26.7,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B310",
            'date' => date("2016-03-27"),
            'temperature' => 23.4,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B310",
            'date' => date("2016-03-28"),
            'temperature' => 17.9,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B310",
            'date' => date("2016-03-29"),
            'temperature' => 15.7,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B310",
            'date' => date("2016-03-30"),
            'temperature' => 24,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B310",
            'date' => date("2016-03-31"),
            'temperature' => 26.1,
        ));

                DB::table('heatmap')->insert(
        array(
            'roomId' => "B310",
            'date' => date("2016-04-01"),
            'temperature' => 27.3,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B310",
            'date' => date("2016-04-02"),
            'temperature' => 18,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B310",
            'date' => date("2016-04-03"),
            'temperature' => 32,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B310",
            'date' => date("2016-04-04"),
            'temperature' => 30,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B310",
            'date' => date("2016-04-05"),
            'temperature' => 27.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B310",
            'date' => date("2016-04-06"),
            'temperature' => 18,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B310",
            'date' => date("2016-04-07"),
            'temperature' => 23.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B310",
            'date' => date("2016-04-08"),
            'temperature' => 26.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B310",
            'date' => date("2016-04-09"),
            'temperature' => 34.9,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B310",
            'date' => date("2016-04-10"),
            'temperature' => 22,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B310",
            'date' => date("2016-04-11"),
            'temperature' => 14,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B310",
            'date' => date("2016-04-12"),
            'temperature' => 31,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B310",
            'date' => date("2016-04-13"),
            'temperature' => 27,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B310",
            'date' => date("2016-04-14"),
            'temperature' => 24.6,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B310",
            'date' => date("2016-04-15"),
            'temperature' => 20.4,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B310",
            'date' => date("2016-04-16"),
            'temperature' => 19.5,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B310",
            'date' => date("2016-04-17"),
            'temperature' => 27.3,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B310",
            'date' => date("2016-04-18"),
            'temperature' => 22.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B310",
            'date' => date("2016-04-19"),
            'temperature' => 32.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B310",
            'date' => date("2016-04-20"),
            'temperature' => 18.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B310",
            'date' => date("2016-04-21"),
            'temperature' => 24.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B310",
            'date' => date("2016-04-22"),
            'temperature' => 27.2,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B310",
            'date' => date("2016-04-23"),
            'temperature' => 32.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B310",
            'date' => date("2016-04-24"),
            'temperature' => 14.9,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B310",
            'date' => date("2016-04-25"),
            'temperature' => 24.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B310",
            'date' => date("2016-04-26"),
            'temperature' => 30.7,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B310",
            'date' => date("2016-04-27"),
            'temperature' => 27,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B310",
            'date' => date("2016-04-28"),
            'temperature' => 30,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B310",
            'date' => date("2016-04-29"),
            'temperature' => 26.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B310",
            'date' => date("2016-04-30"),
            'temperature' => 33.2,
        ));

                DB::table('heatmap')->insert(
        array(
            'roomId' => "B310",
            'date' => date("2016-05-01"),
            'temperature' => 29.9,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B310",
            'date' => date("2016-05-02"),
            'temperature' => 23,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B310",
            'date' => date("2016-05-03"),
            'temperature' => 20.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B310",
            'date' => date("2016-05-04"),
            'temperature' => 22,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B310",
            'date' => date("2016-05-05"),
            'temperature' => 22.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B310",
            'date' => date("2016-05-06"),
            'temperature' => 19.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B310",
            'date' => date("2016-05-07"),
            'temperature' => 22.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B310",
            'date' => date("2016-05-08"),
            'temperature' => 26.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B310",
            'date' => date("2016-05-09"),
            'temperature' => 34.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B310",
            'date' => date("2016-05-10"),
            'temperature' => 22.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B310",
            'date' => date("2016-05-11"),
            'temperature' => 28.5,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B310",
            'date' => date("2016-05-12"),
            'temperature' => 23,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B310",
            'date' => date("2016-05-13"),
            'temperature' => 27,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B310",
            'date' => date("2016-05-14"),
            'temperature' => 15,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B310",
            'date' => date("2016-05-15"),
            'temperature' => 30,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B310",
            'date' => date("2016-05-16"),
            'temperature' => 34,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B310",
            'date' => date("2016-05-17"),
            'temperature' => 21,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B310",
            'date' => date("2016-05-18"),
            'temperature' => 14.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B310",
            'date' => date("2016-05-19"),
            'temperature' => 16.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B310",
            'date' => date("2016-05-20"),
            'temperature' => 27.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B310",
            'date' => date("2016-05-21"),
            'temperature' => 34.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B310",
            'date' => date("2016-05-22"),
            'temperature' => 27.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B310",
            'date' => date("2016-05-23"),
            'temperature' => 23,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B310",
            'date' => date("2016-05-24"),
            'temperature' => 14.7,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B310",
            'date' => date("2016-05-25"),
            'temperature' => 17.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B310",
            'date' => date("2016-05-26"),
            'temperature' => 19.3,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B310",
            'date' => date("2016-05-27"),
            'temperature' => 31.2,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B310",
            'date' => date("2016-05-28"),
            'temperature' => 32.2,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B310",
            'date' => date("2016-05-29"),
            'temperature' => 18.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B310",
            'date' => date("2016-05-30"),
            'temperature' => 26.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B310",
            'date' => date("2016-05-31"),
            'temperature' => 35.1,
        ));

                DB::table('heatmap')->insert(
        array(
            'roomId' => "B004",
            'date' => date("2016-03-01"),
            'temperature' => 32.3,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B004",
            'date' => date("2016-03-02"),
            'temperature' => 35,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B004",
            'date' => date("2016-03-03"),
            'temperature' => 14.2,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B004",
            'date' => date("2016-03-04"),
            'temperature' => 28,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B004",
            'date' => date("2016-03-05"),
            'temperature' => 32,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B004",
            'date' => date("2016-03-06"),
            'temperature' => 23.4,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B004",
            'date' => date("2016-03-07"),
            'temperature' => 29.2,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B004",
            'date' => date("2016-03-08"),
            'temperature' => 18.9,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B004",
            'date' => date("2016-03-09"),
            'temperature' => 24,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B004",
            'date' => date("2016-03-10"),
            'temperature' => 30,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B004",
            'date' => date("2016-03-11"),
            'temperature' => 23.5,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B004",
            'date' => date("2016-03-12"),
            'temperature' => 14.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B004",
            'date' => date("2016-03-13"),
            'temperature' => 23.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B004",
            'date' => date("2016-03-14"),
            'temperature' => 23,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B004",
            'date' => date("2016-03-15"),
            'temperature' => 14,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B004",
            'date' => date("2016-03-16"),
            'temperature' => 32,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B004",
            'date' => date("2016-03-17"),
            'temperature' => 22,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B004",
            'date' => date("2016-03-18"),
            'temperature' => 23.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B004",
            'date' => date("2016-03-19"),
            'temperature' => 14.9,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B004",
            'date' => date("2016-03-20"),
            'temperature' => 35.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B004",
            'date' => date("2016-03-21"),
            'temperature' => 27.3,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B004",
            'date' => date("2016-03-22"),
            'temperature' => 23.7,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B004",
            'date' => date("2016-03-23"),
            'temperature' => 32.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B004",
            'date' => date("2016-03-24"),
            'temperature' => 23.3,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B004",
            'date' => date("2016-03-25"),
            'temperature' => 28.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B004",
            'date' => date("2016-03-26"),
            'temperature' => 16.7,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B004",
            'date' => date("2016-03-27"),
            'temperature' => 14.4,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B004",
            'date' => date("2016-03-28"),
            'temperature' => 27.9,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B004",
            'date' => date("2016-03-29"),
            'temperature' => 25.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B004",
            'date' => date("2016-03-30"),
            'temperature' => 24.9,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B004",
            'date' => date("2016-03-31"),
            'temperature' => 23.2,
        ));

                DB::table('heatmap')->insert(
        array(
            'roomId' => "B004",
            'date' => date("2016-04-01"),
            'temperature' => 22.9,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B004",
            'date' => date("2016-04-02"),
            'temperature' => 21,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B004",
            'date' => date("2016-04-03"),
            'temperature' => 32,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B004",
            'date' => date("2016-04-04"),
            'temperature' => 32,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B004",
            'date' => date("2016-04-05"),
            'temperature' => 29.9,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B004",
            'date' => date("2016-04-06"),
            'temperature' => 14,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B004",
            'date' => date("2016-04-07"),
            'temperature' => 23.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B004",
            'date' => date("2016-04-08"),
            'temperature' => 26.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B004",
            'date' => date("2016-04-09"),
            'temperature' => 35.3,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B004",
            'date' => date("2016-04-10"),
            'temperature' => 26,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B004",
            'date' => date("2016-04-11"),
            'temperature' => 16,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B004",
            'date' => date("2016-04-12"),
            'temperature' => 33.7,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B004",
            'date' => date("2016-04-13"),
            'temperature' => 23,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B004",
            'date' => date("2016-04-14"),
            'temperature' => 21.6,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B004",
            'date' => date("2016-04-15"),
            'temperature' => 14.4,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B004",
            'date' => date("2016-04-16"),
            'temperature' => 29.5,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B004",
            'date' => date("2016-04-17"),
            'temperature' => 17.3,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B004",
            'date' => date("2016-04-18"),
            'temperature' => 32.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B004",
            'date' => date("2016-04-19"),
            'temperature' => 35.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B004",
            'date' => date("2016-04-20"),
            'temperature' => 19.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B004",
            'date' => date("2016-04-21"),
            'temperature' => 15.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B004",
            'date' => date("2016-04-22"),
            'temperature' => 27.2,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B004",
            'date' => date("2016-04-23"),
            'temperature' => 22.3,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B004",
            'date' => date("2016-04-24"),
            'temperature' => 34.9,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B004",
            'date' => date("2016-04-25"),
            'temperature' => 14.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B004",
            'date' => date("2016-04-26"),
            'temperature' => 19.7,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B004",
            'date' => date("2016-04-27"),
            'temperature' => 35,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B004",
            'date' => date("2016-04-28"),
            'temperature' => 17,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B004",
            'date' => date("2016-04-29"),
            'temperature' => 29.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B004",
            'date' => date("2016-04-30"),
            'temperature' => 21.2,
        ));

                DB::table('heatmap')->insert(
        array(
            'roomId' => "B004",
            'date' => date("2016-05-01"),
            'temperature' => 14.9,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B004",
            'date' => date("2016-05-02"),
            'temperature' => 35,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B004",
            'date' => date("2016-05-03"),
            'temperature' => 17.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B004",
            'date' => date("2016-05-04"),
            'temperature' => 32,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B004",
            'date' => date("2016-05-05"),
            'temperature' => 32.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B004",
            'date' => date("2016-05-06"),
            'temperature' => 14.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B004",
            'date' => date("2016-05-07"),
            'temperature' => 32.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B004",
            'date' => date("2016-05-08"),
            'temperature' => 15.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B004",
            'date' => date("2016-05-09"),
            'temperature' => 15.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B004",
            'date' => date("2016-05-10"),
            'temperature' => 34.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B004",
            'date' => date("2016-05-11"),
            'temperature' => 17.5,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B004",
            'date' => date("2016-05-12"),
            'temperature' => 33.9,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B004",
            'date' => date("2016-05-13"),
            'temperature' => 22,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B004",
            'date' => date("2016-05-14"),
            'temperature' => 29.9,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B004",
            'date' => date("2016-05-15"),
            'temperature' => 19,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B004",
            'date' => date("2016-05-16"),
            'temperature' => 16,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B004",
            'date' => date("2016-05-17"),
            'temperature' => 33,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B004",
            'date' => date("2016-05-18"),
            'temperature' => 24.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B004",
            'date' => date("2016-05-19"),
            'temperature' => 26.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B004",
            'date' => date("2016-05-20"),
            'temperature' => 32.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B004",
            'date' => date("2016-05-21"),
            'temperature' => 15.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B004",
            'date' => date("2016-05-22"),
            'temperature' => 18.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B004",
            'date' => date("2016-05-23"),
            'temperature' => 18,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B004",
            'date' => date("2016-05-24"),
            'temperature' => 34.7,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B004",
            'date' => date("2016-05-25"),
            'temperature' => 31.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B004",
            'date' => date("2016-05-26"),
            'temperature' => 25.3,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B004",
            'date' => date("2016-05-27"),
            'temperature' => 19.2,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B004",
            'date' => date("2016-05-28"),
            'temperature' => 18.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B004",
            'date' => date("2016-05-29"),
            'temperature' => 16.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B004",
            'date' => date("2016-05-30"),
            'temperature' => 34.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B004",
            'date' => date("2016-05-31"),
            'temperature' => 19.3,
        ));

                DB::table('heatmap')->insert(
        array(
            'roomId' => "L102",
            'date' => date("2016-03-01"),
            'temperature' => 32.3,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "L102",
            'date' => date("2016-03-02"),
            'temperature' => 35,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "L102",
            'date' => date("2016-03-03"),
            'temperature' => 14.2,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "L102",
            'date' => date("2016-03-04"),
            'temperature' => 28,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "L102",
            'date' => date("2016-03-05"),
            'temperature' => 32,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "L102",
            'date' => date("2016-03-06"),
            'temperature' => 23.4,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "L102",
            'date' => date("2016-03-07"),
            'temperature' => 29.2,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "L102",
            'date' => date("2016-03-08"),
            'temperature' => 18.9,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "L102",
            'date' => date("2016-03-09"),
            'temperature' => 24,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "L102",
            'date' => date("2016-03-10"),
            'temperature' => 30,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "L102",
            'date' => date("2016-03-11"),
            'temperature' => 23.5,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "L102",
            'date' => date("2016-03-12"),
            'temperature' => 14.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "L102",
            'date' => date("2016-03-13"),
            'temperature' => 23.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "L102",
            'date' => date("2016-03-14"),
            'temperature' => 23,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "L102",
            'date' => date("2016-03-15"),
            'temperature' => 14,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "L102",
            'date' => date("2016-03-16"),
            'temperature' => 32,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "L102",
            'date' => date("2016-03-17"),
            'temperature' => 22,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "L102",
            'date' => date("2016-03-18"),
            'temperature' => 23.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "L102",
            'date' => date("2016-03-19"),
            'temperature' => 14.9,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "L102",
            'date' => date("2016-03-20"),
            'temperature' => 35.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "L102",
            'date' => date("2016-03-21"),
            'temperature' => 27.3,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "L102",
            'date' => date("2016-03-22"),
            'temperature' => 23.7,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "L102",
            'date' => date("2016-03-23"),
            'temperature' => 32.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "L102",
            'date' => date("2016-03-24"),
            'temperature' => 23.3,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "L102",
            'date' => date("2016-03-25"),
            'temperature' => 28.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "L102",
            'date' => date("2016-03-26"),
            'temperature' => 16.7,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "L102",
            'date' => date("2016-03-27"),
            'temperature' => 14.4,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "L102",
            'date' => date("2016-03-28"),
            'temperature' => 27.9,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "L102",
            'date' => date("2016-03-29"),
            'temperature' => 25.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "L102",
            'date' => date("2016-03-30"),
            'temperature' => 24.9,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "L102",
            'date' => date("2016-03-31"),
            'temperature' => 23.2,
        ));

                DB::table('heatmap')->insert(
        array(
            'roomId' => "L102",
            'date' => date("2016-04-01"),
            'temperature' => 22.9,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "L102",
            'date' => date("2016-04-02"),
            'temperature' => 21,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "L102",
            'date' => date("2016-04-03"),
            'temperature' => 32,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "L102",
            'date' => date("2016-04-04"),
            'temperature' => 32,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "L102",
            'date' => date("2016-04-05"),
            'temperature' => 29.9,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "L102",
            'date' => date("2016-04-06"),
            'temperature' => 14,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "L102",
            'date' => date("2016-04-07"),
            'temperature' => 23.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "L102",
            'date' => date("2016-04-08"),
            'temperature' => 26.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "L102",
            'date' => date("2016-04-09"),
            'temperature' => 35.3,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "L102",
            'date' => date("2016-04-10"),
            'temperature' => 26,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "L102",
            'date' => date("2016-04-11"),
            'temperature' => 16,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "L102",
            'date' => date("2016-04-12"),
            'temperature' => 33.7,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "L102",
            'date' => date("2016-04-13"),
            'temperature' => 23,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "L102",
            'date' => date("2016-04-14"),
            'temperature' => 21.6,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "L102",
            'date' => date("2016-04-15"),
            'temperature' => 14.4,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "L102",
            'date' => date("2016-04-16"),
            'temperature' => 29.5,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "L102",
            'date' => date("2016-04-17"),
            'temperature' => 17.3,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "L102",
            'date' => date("2016-04-18"),
            'temperature' => 32.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "L102",
            'date' => date("2016-04-19"),
            'temperature' => 35.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "L102",
            'date' => date("2016-04-20"),
            'temperature' => 19.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "L102",
            'date' => date("2016-04-21"),
            'temperature' => 15.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "L102",
            'date' => date("2016-04-22"),
            'temperature' => 27.2,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "L102",
            'date' => date("2016-04-23"),
            'temperature' => 22.3,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "L102",
            'date' => date("2016-04-24"),
            'temperature' => 34.9,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "L102",
            'date' => date("2016-04-25"),
            'temperature' => 14.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "L102",
            'date' => date("2016-04-26"),
            'temperature' => 19.7,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "L102",
            'date' => date("2016-04-27"),
            'temperature' => 35,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "L102",
            'date' => date("2016-04-28"),
            'temperature' => 17,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "L102",
            'date' => date("2016-04-29"),
            'temperature' => 29.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "L102",
            'date' => date("2016-04-30"),
            'temperature' => 21.2,
        ));

                DB::table('heatmap')->insert(
        array(
            'roomId' => "L102",
            'date' => date("2016-05-01"),
            'temperature' => 14.9,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "L102",
            'date' => date("2016-05-02"),
            'temperature' => 35,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "L102",
            'date' => date("2016-05-03"),
            'temperature' => 17.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "L102",
            'date' => date("2016-05-04"),
            'temperature' => 32,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "L102",
            'date' => date("2016-05-05"),
            'temperature' => 32.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "L102",
            'date' => date("2016-05-06"),
            'temperature' => 14.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "L102",
            'date' => date("2016-05-07"),
            'temperature' => 32.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "L102",
            'date' => date("2016-05-08"),
            'temperature' => 15.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "L102",
            'date' => date("2016-05-09"),
            'temperature' => 15.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "L102",
            'date' => date("2016-05-10"),
            'temperature' => 34.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "L102",
            'date' => date("2016-05-11"),
            'temperature' => 17.5,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "L102",
            'date' => date("2016-05-12"),
            'temperature' => 33.9,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "L102",
            'date' => date("2016-05-13"),
            'temperature' => 22,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "L102",
            'date' => date("2016-05-14"),
            'temperature' => 29.9,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "L102",
            'date' => date("2016-05-15"),
            'temperature' => 19,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "L102",
            'date' => date("2016-05-16"),
            'temperature' => 16,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "L102",
            'date' => date("2016-05-17"),
            'temperature' => 33,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "L102",
            'date' => date("2016-05-18"),
            'temperature' => 24.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "L102",
            'date' => date("2016-05-19"),
            'temperature' => 26.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "L102",
            'date' => date("2016-05-20"),
            'temperature' => 32.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "L102",
            'date' => date("2016-05-21"),
            'temperature' => 15.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "L102",
            'date' => date("2016-05-22"),
            'temperature' => 18.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "L102",
            'date' => date("2016-05-23"),
            'temperature' => 18,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "L102",
            'date' => date("2016-05-24"),
            'temperature' => 34.7,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "L102",
            'date' => date("2016-05-25"),
            'temperature' => 31.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "L102",
            'date' => date("2016-05-26"),
            'temperature' => 25.3,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "L102",
            'date' => date("2016-05-27"),
            'temperature' => 19.2,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "L102",
            'date' => date("2016-05-28"),
            'temperature' => 18.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "L102",
            'date' => date("2016-05-29"),
            'temperature' => 16.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "L102",
            'date' => date("2016-05-30"),
            'temperature' => 34.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "L102",
            'date' => date("2016-05-31"),
            'temperature' => 19.3,
        ));

                DB::table('heatmap')->insert(
        array(
            'roomId' => "G220",
            'date' => date("2016-03-01"),
            'temperature' => 32.3,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G220",
            'date' => date("2016-03-02"),
            'temperature' => 35,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G220",
            'date' => date("2016-03-03"),
            'temperature' => 14.2,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G220",
            'date' => date("2016-03-04"),
            'temperature' => 28,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G220",
            'date' => date("2016-03-05"),
            'temperature' => 32,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G220",
            'date' => date("2016-03-06"),
            'temperature' => 23.4,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G220",
            'date' => date("2016-03-07"),
            'temperature' => 29.2,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G220",
            'date' => date("2016-03-08"),
            'temperature' => 18.9,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G220",
            'date' => date("2016-03-09"),
            'temperature' => 24,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G220",
            'date' => date("2016-03-10"),
            'temperature' => 30,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G220",
            'date' => date("2016-03-11"),
            'temperature' => 23.5,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G220",
            'date' => date("2016-03-12"),
            'temperature' => 14.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G220",
            'date' => date("2016-03-13"),
            'temperature' => 23.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G220",
            'date' => date("2016-03-14"),
            'temperature' => 23,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G220",
            'date' => date("2016-03-15"),
            'temperature' => 14,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G220",
            'date' => date("2016-03-16"),
            'temperature' => 32,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G220",
            'date' => date("2016-03-17"),
            'temperature' => 22,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G220",
            'date' => date("2016-03-18"),
            'temperature' => 23.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G220",
            'date' => date("2016-03-19"),
            'temperature' => 14.9,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G220",
            'date' => date("2016-03-20"),
            'temperature' => 35.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G220",
            'date' => date("2016-03-21"),
            'temperature' => 27.3,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G220",
            'date' => date("2016-03-22"),
            'temperature' => 23.7,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G220",
            'date' => date("2016-03-23"),
            'temperature' => 32.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G220",
            'date' => date("2016-03-24"),
            'temperature' => 23.3,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G220",
            'date' => date("2016-03-25"),
            'temperature' => 28.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G220",
            'date' => date("2016-03-26"),
            'temperature' => 16.7,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G220",
            'date' => date("2016-03-27"),
            'temperature' => 14.4,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G220",
            'date' => date("2016-03-28"),
            'temperature' => 27.9,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G220",
            'date' => date("2016-03-29"),
            'temperature' => 25.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G220",
            'date' => date("2016-03-30"),
            'temperature' => 24.9,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G220",
            'date' => date("2016-03-31"),
            'temperature' => 23.2,
        ));

                DB::table('heatmap')->insert(
        array(
            'roomId' => "G220",
            'date' => date("2016-04-01"),
            'temperature' => 22.9,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G220",
            'date' => date("2016-04-02"),
            'temperature' => 21,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G220",
            'date' => date("2016-04-03"),
            'temperature' => 32,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G220",
            'date' => date("2016-04-04"),
            'temperature' => 32,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G220",
            'date' => date("2016-04-05"),
            'temperature' => 29.9,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G220",
            'date' => date("2016-04-06"),
            'temperature' => 14,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G220",
            'date' => date("2016-04-07"),
            'temperature' => 23.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G220",
            'date' => date("2016-04-08"),
            'temperature' => 26.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G220",
            'date' => date("2016-04-09"),
            'temperature' => 35.3,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G220",
            'date' => date("2016-04-10"),
            'temperature' => 26,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G220",
            'date' => date("2016-04-11"),
            'temperature' => 16,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G220",
            'date' => date("2016-04-12"),
            'temperature' => 33.7,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G220",
            'date' => date("2016-04-13"),
            'temperature' => 23,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G220",
            'date' => date("2016-04-14"),
            'temperature' => 21.6,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G220",
            'date' => date("2016-04-15"),
            'temperature' => 14.4,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G220",
            'date' => date("2016-04-16"),
            'temperature' => 29.5,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G220",
            'date' => date("2016-04-17"),
            'temperature' => 17.3,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G220",
            'date' => date("2016-04-18"),
            'temperature' => 32.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G220",
            'date' => date("2016-04-19"),
            'temperature' => 35.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G220",
            'date' => date("2016-04-20"),
            'temperature' => 19.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G220",
            'date' => date("2016-04-21"),
            'temperature' => 15.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G220",
            'date' => date("2016-04-22"),
            'temperature' => 27.2,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G220",
            'date' => date("2016-04-23"),
            'temperature' => 22.3,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G220",
            'date' => date("2016-04-24"),
            'temperature' => 34.9,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G220",
            'date' => date("2016-04-25"),
            'temperature' => 14.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G220",
            'date' => date("2016-04-26"),
            'temperature' => 19.7,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G220",
            'date' => date("2016-04-27"),
            'temperature' => 35,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G220",
            'date' => date("2016-04-28"),
            'temperature' => 17,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G220",
            'date' => date("2016-04-29"),
            'temperature' => 29.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G220",
            'date' => date("2016-04-30"),
            'temperature' => 21.2,
        ));

                DB::table('heatmap')->insert(
        array(
            'roomId' => "G220",
            'date' => date("2016-05-01"),
            'temperature' => 14.9,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G220",
            'date' => date("2016-05-02"),
            'temperature' => 35,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G220",
            'date' => date("2016-05-03"),
            'temperature' => 17.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G220",
            'date' => date("2016-05-04"),
            'temperature' => 32,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G220",
            'date' => date("2016-05-05"),
            'temperature' => 32.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G220",
            'date' => date("2016-05-06"),
            'temperature' => 14.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G220",
            'date' => date("2016-05-07"),
            'temperature' => 32.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G220",
            'date' => date("2016-05-08"),
            'temperature' => 15.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G220",
            'date' => date("2016-05-09"),
            'temperature' => 15.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G220",
            'date' => date("2016-05-10"),
            'temperature' => 34.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G220",
            'date' => date("2016-05-11"),
            'temperature' => 17.5,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G220",
            'date' => date("2016-05-12"),
            'temperature' => 33.9,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G220",
            'date' => date("2016-05-13"),
            'temperature' => 22,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G220",
            'date' => date("2016-05-14"),
            'temperature' => 29.9,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G220",
            'date' => date("2016-05-15"),
            'temperature' => 19,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G220",
            'date' => date("2016-05-16"),
            'temperature' => 16,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G220",
            'date' => date("2016-05-17"),
            'temperature' => 33,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G220",
            'date' => date("2016-05-18"),
            'temperature' => 24.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G220",
            'date' => date("2016-05-19"),
            'temperature' => 26.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G220",
            'date' => date("2016-05-20"),
            'temperature' => 32.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G220",
            'date' => date("2016-05-21"),
            'temperature' => 15.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G220",
            'date' => date("2016-05-22"),
            'temperature' => 18.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G220",
            'date' => date("2016-05-23"),
            'temperature' => 18,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G220",
            'date' => date("2016-05-24"),
            'temperature' => 34.7,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G220",
            'date' => date("2016-05-25"),
            'temperature' => 31.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G220",
            'date' => date("2016-05-26"),
            'temperature' => 25.3,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G220",
            'date' => date("2016-05-27"),
            'temperature' => 19.2,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G220",
            'date' => date("2016-05-28"),
            'temperature' => 18.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G220",
            'date' => date("2016-05-29"),
            'temperature' => 16.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G220",
            'date' => date("2016-05-30"),
            'temperature' => 34.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G220",
            'date' => date("2016-05-31"),
            'temperature' => 19.3,
        ));

                DB::table('heatmap')->insert(
        array(
            'roomId' => "B335",
            'date' => date("2016-03-01"),
            'temperature' => 32.3,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B335",
            'date' => date("2016-03-02"),
            'temperature' => 35,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B335",
            'date' => date("2016-03-03"),
            'temperature' => 14.2,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B335",
            'date' => date("2016-03-04"),
            'temperature' => 28,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B335",
            'date' => date("2016-03-05"),
            'temperature' => 32,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B335",
            'date' => date("2016-03-06"),
            'temperature' => 23.4,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B335",
            'date' => date("2016-03-07"),
            'temperature' => 29.2,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B335",
            'date' => date("2016-03-08"),
            'temperature' => 18.9,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B335",
            'date' => date("2016-03-09"),
            'temperature' => 24,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B335",
            'date' => date("2016-03-10"),
            'temperature' => 30,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B335",
            'date' => date("2016-03-11"),
            'temperature' => 23.5,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B335",
            'date' => date("2016-03-12"),
            'temperature' => 14.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B335",
            'date' => date("2016-03-13"),
            'temperature' => 23.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B335",
            'date' => date("2016-03-14"),
            'temperature' => 23,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B335",
            'date' => date("2016-03-15"),
            'temperature' => 14,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B335",
            'date' => date("2016-03-16"),
            'temperature' => 32,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B335",
            'date' => date("2016-03-17"),
            'temperature' => 22,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B335",
            'date' => date("2016-03-18"),
            'temperature' => 23.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B335",
            'date' => date("2016-03-19"),
            'temperature' => 14.9,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B335",
            'date' => date("2016-03-20"),
            'temperature' => 35.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B335",
            'date' => date("2016-03-21"),
            'temperature' => 27.3,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B335",
            'date' => date("2016-03-22"),
            'temperature' => 23.7,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B335",
            'date' => date("2016-03-23"),
            'temperature' => 32.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B335",
            'date' => date("2016-03-24"),
            'temperature' => 23.3,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B335",
            'date' => date("2016-03-25"),
            'temperature' => 28.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B335",
            'date' => date("2016-03-26"),
            'temperature' => 16.7,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B335",
            'date' => date("2016-03-27"),
            'temperature' => 14.4,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B335",
            'date' => date("2016-03-28"),
            'temperature' => 27.9,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B335",
            'date' => date("2016-03-29"),
            'temperature' => 25.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B335",
            'date' => date("2016-03-30"),
            'temperature' => 24.9,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B335",
            'date' => date("2016-03-31"),
            'temperature' => 23.2,
        ));

                DB::table('heatmap')->insert(
        array(
            'roomId' => "B335",
            'date' => date("2016-04-01"),
            'temperature' => 22.9,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B335",
            'date' => date("2016-04-02"),
            'temperature' => 21,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B335",
            'date' => date("2016-04-03"),
            'temperature' => 32,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B335",
            'date' => date("2016-04-04"),
            'temperature' => 32,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B335",
            'date' => date("2016-04-05"),
            'temperature' => 29.9,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B335",
            'date' => date("2016-04-06"),
            'temperature' => 14,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B335",
            'date' => date("2016-04-07"),
            'temperature' => 23.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B335",
            'date' => date("2016-04-08"),
            'temperature' => 26.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B335",
            'date' => date("2016-04-09"),
            'temperature' => 35.3,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B335",
            'date' => date("2016-04-10"),
            'temperature' => 26,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B335",
            'date' => date("2016-04-11"),
            'temperature' => 16,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B335",
            'date' => date("2016-04-12"),
            'temperature' => 33.7,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B335",
            'date' => date("2016-04-13"),
            'temperature' => 23,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B335",
            'date' => date("2016-04-14"),
            'temperature' => 21.6,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B335",
            'date' => date("2016-04-15"),
            'temperature' => 14.4,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B335",
            'date' => date("2016-04-16"),
            'temperature' => 29.5,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B335",
            'date' => date("2016-04-17"),
            'temperature' => 17.3,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B335",
            'date' => date("2016-04-18"),
            'temperature' => 32.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B335",
            'date' => date("2016-04-19"),
            'temperature' => 35.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B335",
            'date' => date("2016-04-20"),
            'temperature' => 19.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B335",
            'date' => date("2016-04-21"),
            'temperature' => 15.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B335",
            'date' => date("2016-04-22"),
            'temperature' => 27.2,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B335",
            'date' => date("2016-04-23"),
            'temperature' => 22.3,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B335",
            'date' => date("2016-04-24"),
            'temperature' => 34.9,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B335",
            'date' => date("2016-04-25"),
            'temperature' => 14.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B335",
            'date' => date("2016-04-26"),
            'temperature' => 19.7,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B335",
            'date' => date("2016-04-27"),
            'temperature' => 35,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B335",
            'date' => date("2016-04-28"),
            'temperature' => 17,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B335",
            'date' => date("2016-04-29"),
            'temperature' => 29.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B335",
            'date' => date("2016-04-30"),
            'temperature' => 21.2,
        ));

                DB::table('heatmap')->insert(
        array(
            'roomId' => "B335",
            'date' => date("2016-05-01"),
            'temperature' => 14.9,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B335",
            'date' => date("2016-05-02"),
            'temperature' => 35,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B335",
            'date' => date("2016-05-03"),
            'temperature' => 17.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B335",
            'date' => date("2016-05-04"),
            'temperature' => 32,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B335",
            'date' => date("2016-05-05"),
            'temperature' => 32.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B335",
            'date' => date("2016-05-06"),
            'temperature' => 14.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B335",
            'date' => date("2016-05-07"),
            'temperature' => 32.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B335",
            'date' => date("2016-05-08"),
            'temperature' => 15.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B335",
            'date' => date("2016-05-09"),
            'temperature' => 15.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B335",
            'date' => date("2016-05-10"),
            'temperature' => 34.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B335",
            'date' => date("2016-05-11"),
            'temperature' => 17.5,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B335",
            'date' => date("2016-05-12"),
            'temperature' => 33.9,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B335",
            'date' => date("2016-05-13"),
            'temperature' => 22,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B335",
            'date' => date("2016-05-14"),
            'temperature' => 29.9,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B335",
            'date' => date("2016-05-15"),
            'temperature' => 19,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B335",
            'date' => date("2016-05-16"),
            'temperature' => 16,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B335",
            'date' => date("2016-05-17"),
            'temperature' => 33,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B335",
            'date' => date("2016-05-18"),
            'temperature' => 24.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B335",
            'date' => date("2016-05-19"),
            'temperature' => 26.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B335",
            'date' => date("2016-05-20"),
            'temperature' => 32.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B335",
            'date' => date("2016-05-21"),
            'temperature' => 15.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B335",
            'date' => date("2016-05-22"),
            'temperature' => 18.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B335",
            'date' => date("2016-05-23"),
            'temperature' => 18,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B335",
            'date' => date("2016-05-24"),
            'temperature' => 34.7,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B335",
            'date' => date("2016-05-25"),
            'temperature' => 31.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B335",
            'date' => date("2016-05-26"),
            'temperature' => 25.3,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B335",
            'date' => date("2016-05-27"),
            'temperature' => 19.2,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B335",
            'date' => date("2016-05-28"),
            'temperature' => 18.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B335",
            'date' => date("2016-05-29"),
            'temperature' => 16.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B335",
            'date' => date("2016-05-30"),
            'temperature' => 34.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B335",
            'date' => date("2016-05-31"),
            'temperature' => 19.3,
        ));

                DB::table('heatmap')->insert(
        array(
            'roomId' => "B406",
            'date' => date("2016-03-01"),
            'temperature' => 32.3,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B406",
            'date' => date("2016-03-02"),
            'temperature' => 35,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B406",
            'date' => date("2016-03-03"),
            'temperature' => 14.2,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B406",
            'date' => date("2016-03-04"),
            'temperature' => 28,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B406",
            'date' => date("2016-03-05"),
            'temperature' => 32,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B406",
            'date' => date("2016-03-06"),
            'temperature' => 23.4,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B406",
            'date' => date("2016-03-07"),
            'temperature' => 29.2,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B406",
            'date' => date("2016-03-08"),
            'temperature' => 18.9,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B406",
            'date' => date("2016-03-09"),
            'temperature' => 24,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B406",
            'date' => date("2016-03-10"),
            'temperature' => 30,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B406",
            'date' => date("2016-03-11"),
            'temperature' => 23.5,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B406",
            'date' => date("2016-03-12"),
            'temperature' => 14.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B406",
            'date' => date("2016-03-13"),
            'temperature' => 23.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B406",
            'date' => date("2016-03-14"),
            'temperature' => 23,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B406",
            'date' => date("2016-03-15"),
            'temperature' => 14,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B406",
            'date' => date("2016-03-16"),
            'temperature' => 32,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B406",
            'date' => date("2016-03-17"),
            'temperature' => 22,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B406",
            'date' => date("2016-03-18"),
            'temperature' => 23.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B406",
            'date' => date("2016-03-19"),
            'temperature' => 14.9,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B406",
            'date' => date("2016-03-20"),
            'temperature' => 35.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B406",
            'date' => date("2016-03-21"),
            'temperature' => 27.3,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B406",
            'date' => date("2016-03-22"),
            'temperature' => 23.7,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B406",
            'date' => date("2016-03-23"),
            'temperature' => 32.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B406",
            'date' => date("2016-03-24"),
            'temperature' => 23.3,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B406",
            'date' => date("2016-03-25"),
            'temperature' => 28.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B406",
            'date' => date("2016-03-26"),
            'temperature' => 16.7,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B406",
            'date' => date("2016-03-27"),
            'temperature' => 14.4,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B406",
            'date' => date("2016-03-28"),
            'temperature' => 27.9,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B406",
            'date' => date("2016-03-29"),
            'temperature' => 25.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B406",
            'date' => date("2016-03-30"),
            'temperature' => 24.9,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B406",
            'date' => date("2016-03-31"),
            'temperature' => 23.2,
        ));

                DB::table('heatmap')->insert(
        array(
            'roomId' => "B406",
            'date' => date("2016-04-01"),
            'temperature' => 22.9,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B406",
            'date' => date("2016-04-02"),
            'temperature' => 21,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B406",
            'date' => date("2016-04-03"),
            'temperature' => 32,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B406",
            'date' => date("2016-04-04"),
            'temperature' => 32,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B406",
            'date' => date("2016-04-05"),
            'temperature' => 29.9,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B406",
            'date' => date("2016-04-06"),
            'temperature' => 14,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B406",
            'date' => date("2016-04-07"),
            'temperature' => 23.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B406",
            'date' => date("2016-04-08"),
            'temperature' => 26.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B406",
            'date' => date("2016-04-09"),
            'temperature' => 35.3,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B406",
            'date' => date("2016-04-10"),
            'temperature' => 26,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B406",
            'date' => date("2016-04-11"),
            'temperature' => 16,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B406",
            'date' => date("2016-04-12"),
            'temperature' => 33.7,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B406",
            'date' => date("2016-04-13"),
            'temperature' => 23,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B406",
            'date' => date("2016-04-14"),
            'temperature' => 21.6,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B406",
            'date' => date("2016-04-15"),
            'temperature' => 14.4,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B406",
            'date' => date("2016-04-16"),
            'temperature' => 29.5,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B406",
            'date' => date("2016-04-17"),
            'temperature' => 17.3,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B406",
            'date' => date("2016-04-18"),
            'temperature' => 32.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B406",
            'date' => date("2016-04-19"),
            'temperature' => 35.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B406",
            'date' => date("2016-04-20"),
            'temperature' => 19.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B406",
            'date' => date("2016-04-21"),
            'temperature' => 15.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B406",
            'date' => date("2016-04-22"),
            'temperature' => 27.2,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B406",
            'date' => date("2016-04-23"),
            'temperature' => 22.3,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B406",
            'date' => date("2016-04-24"),
            'temperature' => 34.9,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B406",
            'date' => date("2016-04-25"),
            'temperature' => 14.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B406",
            'date' => date("2016-04-26"),
            'temperature' => 19.7,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B406",
            'date' => date("2016-04-27"),
            'temperature' => 35,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B406",
            'date' => date("2016-04-28"),
            'temperature' => 17,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B406",
            'date' => date("2016-04-29"),
            'temperature' => 29.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B406",
            'date' => date("2016-04-30"),
            'temperature' => 21.2,
        ));

                DB::table('heatmap')->insert(
        array(
            'roomId' => "B406",
            'date' => date("2016-05-01"),
            'temperature' => 14.9,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B406",
            'date' => date("2016-05-02"),
            'temperature' => 35,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B406",
            'date' => date("2016-05-03"),
            'temperature' => 17.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B406",
            'date' => date("2016-05-04"),
            'temperature' => 32,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B406",
            'date' => date("2016-05-05"),
            'temperature' => 32.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B406",
            'date' => date("2016-05-06"),
            'temperature' => 14.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B406",
            'date' => date("2016-05-07"),
            'temperature' => 32.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B406",
            'date' => date("2016-05-08"),
            'temperature' => 15.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B406",
            'date' => date("2016-05-09"),
            'temperature' => 15.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B406",
            'date' => date("2016-05-10"),
            'temperature' => 34.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B406",
            'date' => date("2016-05-11"),
            'temperature' => 17.5,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B406",
            'date' => date("2016-05-12"),
            'temperature' => 33.9,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B406",
            'date' => date("2016-05-13"),
            'temperature' => 22,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B406",
            'date' => date("2016-05-14"),
            'temperature' => 29.9,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B406",
            'date' => date("2016-05-15"),
            'temperature' => 19,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B406",
            'date' => date("2016-05-16"),
            'temperature' => 16,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B406",
            'date' => date("2016-05-17"),
            'temperature' => 33,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B406",
            'date' => date("2016-05-18"),
            'temperature' => 24.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B406",
            'date' => date("2016-05-19"),
            'temperature' => 26.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B406",
            'date' => date("2016-05-20"),
            'temperature' => 32.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B406",
            'date' => date("2016-05-21"),
            'temperature' => 15.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B406",
            'date' => date("2016-05-22"),
            'temperature' => 18.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B406",
            'date' => date("2016-05-23"),
            'temperature' => 18,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B406",
            'date' => date("2016-05-24"),
            'temperature' => 34.7,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B406",
            'date' => date("2016-05-25"),
            'temperature' => 31.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B406",
            'date' => date("2016-05-26"),
            'temperature' => 25.3,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B406",
            'date' => date("2016-05-27"),
            'temperature' => 19.2,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B406",
            'date' => date("2016-05-28"),
            'temperature' => 18.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B406",
            'date' => date("2016-05-29"),
            'temperature' => 16.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B406",
            'date' => date("2016-05-30"),
            'temperature' => 34.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B406",
            'date' => date("2016-05-31"),
            'temperature' => 19.3,
        ));

                DB::table('heatmap')->insert(
        array(
            'roomId' => "E505",
            'date' => date("2016-03-01"),
            'temperature' => 32.3,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E505",
            'date' => date("2016-03-02"),
            'temperature' => 35,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E505",
            'date' => date("2016-03-03"),
            'temperature' => 14.2,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E505",
            'date' => date("2016-03-04"),
            'temperature' => 28,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E505",
            'date' => date("2016-03-05"),
            'temperature' => 32,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E505",
            'date' => date("2016-03-06"),
            'temperature' => 23.4,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E505",
            'date' => date("2016-03-07"),
            'temperature' => 29.2,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E505",
            'date' => date("2016-03-08"),
            'temperature' => 18.9,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E505",
            'date' => date("2016-03-09"),
            'temperature' => 24,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E505",
            'date' => date("2016-03-10"),
            'temperature' => 30,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E505",
            'date' => date("2016-03-11"),
            'temperature' => 23.5,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E505",
            'date' => date("2016-03-12"),
            'temperature' => 14.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E505",
            'date' => date("2016-03-13"),
            'temperature' => 23.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E505",
            'date' => date("2016-03-14"),
            'temperature' => 23,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E505",
            'date' => date("2016-03-15"),
            'temperature' => 14,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E505",
            'date' => date("2016-03-16"),
            'temperature' => 32,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E505",
            'date' => date("2016-03-17"),
            'temperature' => 22,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E505",
            'date' => date("2016-03-18"),
            'temperature' => 23.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E505",
            'date' => date("2016-03-19"),
            'temperature' => 14.9,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E505",
            'date' => date("2016-03-20"),
            'temperature' => 35.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E505",
            'date' => date("2016-03-21"),
            'temperature' => 27.3,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E505",
            'date' => date("2016-03-22"),
            'temperature' => 23.7,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E505",
            'date' => date("2016-03-23"),
            'temperature' => 32.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E505",
            'date' => date("2016-03-24"),
            'temperature' => 23.3,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E505",
            'date' => date("2016-03-25"),
            'temperature' => 28.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E505",
            'date' => date("2016-03-26"),
            'temperature' => 16.7,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E505",
            'date' => date("2016-03-27"),
            'temperature' => 14.4,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E505",
            'date' => date("2016-03-28"),
            'temperature' => 27.9,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E505",
            'date' => date("2016-03-29"),
            'temperature' => 25.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E505",
            'date' => date("2016-03-30"),
            'temperature' => 24.9,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E505",
            'date' => date("2016-03-31"),
            'temperature' => 23.2,
        ));

                DB::table('heatmap')->insert(
        array(
            'roomId' => "E505",
            'date' => date("2016-04-01"),
            'temperature' => 22.9,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E505",
            'date' => date("2016-04-02"),
            'temperature' => 21,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E505",
            'date' => date("2016-04-03"),
            'temperature' => 32,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E505",
            'date' => date("2016-04-04"),
            'temperature' => 32,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E505",
            'date' => date("2016-04-05"),
            'temperature' => 29.9,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E505",
            'date' => date("2016-04-06"),
            'temperature' => 14,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E505",
            'date' => date("2016-04-07"),
            'temperature' => 23.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E505",
            'date' => date("2016-04-08"),
            'temperature' => 26.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E505",
            'date' => date("2016-04-09"),
            'temperature' => 35.3,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E505",
            'date' => date("2016-04-10"),
            'temperature' => 26,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E505",
            'date' => date("2016-04-11"),
            'temperature' => 16,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E505",
            'date' => date("2016-04-12"),
            'temperature' => 33.7,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E505",
            'date' => date("2016-04-13"),
            'temperature' => 23,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E505",
            'date' => date("2016-04-14"),
            'temperature' => 21.6,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E505",
            'date' => date("2016-04-15"),
            'temperature' => 14.4,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E505",
            'date' => date("2016-04-16"),
            'temperature' => 29.5,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E505",
            'date' => date("2016-04-17"),
            'temperature' => 17.3,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E505",
            'date' => date("2016-04-18"),
            'temperature' => 32.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E505",
            'date' => date("2016-04-19"),
            'temperature' => 35.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E505",
            'date' => date("2016-04-20"),
            'temperature' => 19.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E505",
            'date' => date("2016-04-21"),
            'temperature' => 15.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E505",
            'date' => date("2016-04-22"),
            'temperature' => 27.2,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E505",
            'date' => date("2016-04-23"),
            'temperature' => 22.3,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E505",
            'date' => date("2016-04-24"),
            'temperature' => 34.9,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E505",
            'date' => date("2016-04-25"),
            'temperature' => 14.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E505",
            'date' => date("2016-04-26"),
            'temperature' => 19.7,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E505",
            'date' => date("2016-04-27"),
            'temperature' => 35,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E505",
            'date' => date("2016-04-28"),
            'temperature' => 17,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E505",
            'date' => date("2016-04-29"),
            'temperature' => 29.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E505",
            'date' => date("2016-04-30"),
            'temperature' => 21.2,
        ));

                DB::table('heatmap')->insert(
        array(
            'roomId' => "E505",
            'date' => date("2016-05-01"),
            'temperature' => 14.9,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E505",
            'date' => date("2016-05-02"),
            'temperature' => 35,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E505",
            'date' => date("2016-05-03"),
            'temperature' => 17.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E505",
            'date' => date("2016-05-04"),
            'temperature' => 32,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E505",
            'date' => date("2016-05-05"),
            'temperature' => 32.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E505",
            'date' => date("2016-05-06"),
            'temperature' => 14.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E505",
            'date' => date("2016-05-07"),
            'temperature' => 32.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E505",
            'date' => date("2016-05-08"),
            'temperature' => 15.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E505",
            'date' => date("2016-05-09"),
            'temperature' => 15.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E505",
            'date' => date("2016-05-10"),
            'temperature' => 34.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E505",
            'date' => date("2016-05-11"),
            'temperature' => 17.5,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E505",
            'date' => date("2016-05-12"),
            'temperature' => 33.9,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E505",
            'date' => date("2016-05-13"),
            'temperature' => 22,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E505",
            'date' => date("2016-05-14"),
            'temperature' => 29.9,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E505",
            'date' => date("2016-05-15"),
            'temperature' => 19,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E505",
            'date' => date("2016-05-16"),
            'temperature' => 16,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E505",
            'date' => date("2016-05-17"),
            'temperature' => 33,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E505",
            'date' => date("2016-05-18"),
            'temperature' => 24.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E505",
            'date' => date("2016-05-19"),
            'temperature' => 26.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E505",
            'date' => date("2016-05-20"),
            'temperature' => 32.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E505",
            'date' => date("2016-05-21"),
            'temperature' => 15.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E505",
            'date' => date("2016-05-22"),
            'temperature' => 18.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E505",
            'date' => date("2016-05-23"),
            'temperature' => 18,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E505",
            'date' => date("2016-05-24"),
            'temperature' => 34.7,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E505",
            'date' => date("2016-05-25"),
            'temperature' => 31.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E505",
            'date' => date("2016-05-26"),
            'temperature' => 25.3,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E505",
            'date' => date("2016-05-27"),
            'temperature' => 19.2,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E505",
            'date' => date("2016-05-28"),
            'temperature' => 18.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E505",
            'date' => date("2016-05-29"),
            'temperature' => 16.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E505",
            'date' => date("2016-05-30"),
            'temperature' => 34.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E505",
            'date' => date("2016-05-31"),
            'temperature' => 19.3,
        ));

                DB::table('heatmap')->insert(
        array(
            'roomId' => "G617",
            'date' => date("2016-03-01"),
            'temperature' => 32.3,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G617",
            'date' => date("2016-03-02"),
            'temperature' => 35,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G617",
            'date' => date("2016-03-03"),
            'temperature' => 14.2,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G617",
            'date' => date("2016-03-04"),
            'temperature' => 28,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G617",
            'date' => date("2016-03-05"),
            'temperature' => 32,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G617",
            'date' => date("2016-03-06"),
            'temperature' => 23.4,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G617",
            'date' => date("2016-03-07"),
            'temperature' => 29.2,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G617",
            'date' => date("2016-03-08"),
            'temperature' => 18.9,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G617",
            'date' => date("2016-03-09"),
            'temperature' => 24,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G617",
            'date' => date("2016-03-10"),
            'temperature' => 30,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G617",
            'date' => date("2016-03-11"),
            'temperature' => 23.5,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G617",
            'date' => date("2016-03-12"),
            'temperature' => 14.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G617",
            'date' => date("2016-03-13"),
            'temperature' => 23.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G617",
            'date' => date("2016-03-14"),
            'temperature' => 23,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G617",
            'date' => date("2016-03-15"),
            'temperature' => 14,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G617",
            'date' => date("2016-03-16"),
            'temperature' => 32,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G617",
            'date' => date("2016-03-17"),
            'temperature' => 22,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G617",
            'date' => date("2016-03-18"),
            'temperature' => 23.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G617",
            'date' => date("2016-03-19"),
            'temperature' => 14.9,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G617",
            'date' => date("2016-03-20"),
            'temperature' => 35.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G617",
            'date' => date("2016-03-21"),
            'temperature' => 27.3,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G617",
            'date' => date("2016-03-22"),
            'temperature' => 23.7,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G617",
            'date' => date("2016-03-23"),
            'temperature' => 32.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G617",
            'date' => date("2016-03-24"),
            'temperature' => 23.3,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G617",
            'date' => date("2016-03-25"),
            'temperature' => 28.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G617",
            'date' => date("2016-03-26"),
            'temperature' => 16.7,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G617",
            'date' => date("2016-03-27"),
            'temperature' => 14.4,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G617",
            'date' => date("2016-03-28"),
            'temperature' => 27.9,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G617",
            'date' => date("2016-03-29"),
            'temperature' => 25.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G617",
            'date' => date("2016-03-30"),
            'temperature' => 24.9,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G617",
            'date' => date("2016-03-31"),
            'temperature' => 23.2,
        ));

                DB::table('heatmap')->insert(
        array(
            'roomId' => "G617",
            'date' => date("2016-04-01"),
            'temperature' => 22.9,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G617",
            'date' => date("2016-04-02"),
            'temperature' => 21,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G617",
            'date' => date("2016-04-03"),
            'temperature' => 32,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G617",
            'date' => date("2016-04-04"),
            'temperature' => 32,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G617",
            'date' => date("2016-04-05"),
            'temperature' => 29.9,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G617",
            'date' => date("2016-04-06"),
            'temperature' => 14,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G617",
            'date' => date("2016-04-07"),
            'temperature' => 23.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G617",
            'date' => date("2016-04-08"),
            'temperature' => 26.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G617",
            'date' => date("2016-04-09"),
            'temperature' => 35.3,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G617",
            'date' => date("2016-04-10"),
            'temperature' => 26,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G617",
            'date' => date("2016-04-11"),
            'temperature' => 16,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G617",
            'date' => date("2016-04-12"),
            'temperature' => 33.7,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G617",
            'date' => date("2016-04-13"),
            'temperature' => 23,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G617",
            'date' => date("2016-04-14"),
            'temperature' => 21.6,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G617",
            'date' => date("2016-04-15"),
            'temperature' => 14.4,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G617",
            'date' => date("2016-04-16"),
            'temperature' => 29.5,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G617",
            'date' => date("2016-04-17"),
            'temperature' => 17.3,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G617",
            'date' => date("2016-04-18"),
            'temperature' => 32.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G617",
            'date' => date("2016-04-19"),
            'temperature' => 35.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G617",
            'date' => date("2016-04-20"),
            'temperature' => 19.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G617",
            'date' => date("2016-04-21"),
            'temperature' => 15.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G617",
            'date' => date("2016-04-22"),
            'temperature' => 27.2,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G617",
            'date' => date("2016-04-23"),
            'temperature' => 22.3,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G617",
            'date' => date("2016-04-24"),
            'temperature' => 34.9,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G617",
            'date' => date("2016-04-25"),
            'temperature' => 14.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G617",
            'date' => date("2016-04-26"),
            'temperature' => 19.7,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G617",
            'date' => date("2016-04-27"),
            'temperature' => 35,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G617",
            'date' => date("2016-04-28"),
            'temperature' => 17,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G617",
            'date' => date("2016-04-29"),
            'temperature' => 29.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G617",
            'date' => date("2016-04-30"),
            'temperature' => 21.2,
        ));

                DB::table('heatmap')->insert(
        array(
            'roomId' => "G617",
            'date' => date("2016-05-01"),
            'temperature' => 14.9,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G617",
            'date' => date("2016-05-02"),
            'temperature' => 35,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G617",
            'date' => date("2016-05-03"),
            'temperature' => 17.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G617",
            'date' => date("2016-05-04"),
            'temperature' => 32,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G617",
            'date' => date("2016-05-05"),
            'temperature' => 32.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G617",
            'date' => date("2016-05-06"),
            'temperature' => 14.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G617",
            'date' => date("2016-05-07"),
            'temperature' => 32.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G617",
            'date' => date("2016-05-08"),
            'temperature' => 15.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G617",
            'date' => date("2016-05-09"),
            'temperature' => 15.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G617",
            'date' => date("2016-05-10"),
            'temperature' => 34.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G617",
            'date' => date("2016-05-11"),
            'temperature' => 17.5,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G617",
            'date' => date("2016-05-12"),
            'temperature' => 33.9,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G617",
            'date' => date("2016-05-13"),
            'temperature' => 22,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G617",
            'date' => date("2016-05-14"),
            'temperature' => 29.9,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G617",
            'date' => date("2016-05-15"),
            'temperature' => 19,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G617",
            'date' => date("2016-05-16"),
            'temperature' => 16,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G617",
            'date' => date("2016-05-17"),
            'temperature' => 33,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G617",
            'date' => date("2016-05-18"),
            'temperature' => 24.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G617",
            'date' => date("2016-05-19"),
            'temperature' => 26.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G617",
            'date' => date("2016-05-20"),
            'temperature' => 32.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G617",
            'date' => date("2016-05-21"),
            'temperature' => 15.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G617",
            'date' => date("2016-05-22"),
            'temperature' => 18.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G617",
            'date' => date("2016-05-23"),
            'temperature' => 18,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G617",
            'date' => date("2016-05-24"),
            'temperature' => 34.7,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G617",
            'date' => date("2016-05-25"),
            'temperature' => 31.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G617",
            'date' => date("2016-05-26"),
            'temperature' => 25.3,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G617",
            'date' => date("2016-05-27"),
            'temperature' => 19.2,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G617",
            'date' => date("2016-05-28"),
            'temperature' => 18.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G617",
            'date' => date("2016-05-29"),
            'temperature' => 16.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G617",
            'date' => date("2016-05-30"),
            'temperature' => 34.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G617",
            'date' => date("2016-05-31"),
            'temperature' => 19.3,
        ));

                DB::table('heatmap')->insert(
        array(
            'roomId' => "G708",
            'date' => date("2016-03-01"),
            'temperature' => 32.3,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G708",
            'date' => date("2016-03-02"),
            'temperature' => 35,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G708",
            'date' => date("2016-03-03"),
            'temperature' => 14.2,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G708",
            'date' => date("2016-03-04"),
            'temperature' => 28,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G708",
            'date' => date("2016-03-05"),
            'temperature' => 32,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G708",
            'date' => date("2016-03-06"),
            'temperature' => 23.4,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G708",
            'date' => date("2016-03-07"),
            'temperature' => 29.2,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G708",
            'date' => date("2016-03-08"),
            'temperature' => 18.9,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G708",
            'date' => date("2016-03-09"),
            'temperature' => 24,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G708",
            'date' => date("2016-03-10"),
            'temperature' => 30,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G708",
            'date' => date("2016-03-11"),
            'temperature' => 23.5,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G708",
            'date' => date("2016-03-12"),
            'temperature' => 14.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G708",
            'date' => date("2016-03-13"),
            'temperature' => 23.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G708",
            'date' => date("2016-03-14"),
            'temperature' => 23,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G708",
            'date' => date("2016-03-15"),
            'temperature' => 14,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G708",
            'date' => date("2016-03-16"),
            'temperature' => 32,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G708",
            'date' => date("2016-03-17"),
            'temperature' => 22,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G708",
            'date' => date("2016-03-18"),
            'temperature' => 23.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G708",
            'date' => date("2016-03-19"),
            'temperature' => 14.9,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G708",
            'date' => date("2016-03-20"),
            'temperature' => 35.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G708",
            'date' => date("2016-03-21"),
            'temperature' => 27.3,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G708",
            'date' => date("2016-03-22"),
            'temperature' => 23.7,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G708",
            'date' => date("2016-03-23"),
            'temperature' => 32.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G708",
            'date' => date("2016-03-24"),
            'temperature' => 23.3,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G708",
            'date' => date("2016-03-25"),
            'temperature' => 28.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G708",
            'date' => date("2016-03-26"),
            'temperature' => 16.7,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G708",
            'date' => date("2016-03-27"),
            'temperature' => 14.4,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G708",
            'date' => date("2016-03-28"),
            'temperature' => 27.9,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G708",
            'date' => date("2016-03-29"),
            'temperature' => 25.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G708",
            'date' => date("2016-03-30"),
            'temperature' => 24.9,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G708",
            'date' => date("2016-03-31"),
            'temperature' => 23.2,
        ));

                DB::table('heatmap')->insert(
        array(
            'roomId' => "G708",
            'date' => date("2016-04-01"),
            'temperature' => 22.9,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G708",
            'date' => date("2016-04-02"),
            'temperature' => 21,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G708",
            'date' => date("2016-04-03"),
            'temperature' => 32,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G708",
            'date' => date("2016-04-04"),
            'temperature' => 32,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G708",
            'date' => date("2016-04-05"),
            'temperature' => 29.9,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G708",
            'date' => date("2016-04-06"),
            'temperature' => 14,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G708",
            'date' => date("2016-04-07"),
            'temperature' => 23.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G708",
            'date' => date("2016-04-08"),
            'temperature' => 26.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G708",
            'date' => date("2016-04-09"),
            'temperature' => 35.3,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G708",
            'date' => date("2016-04-10"),
            'temperature' => 26,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G708",
            'date' => date("2016-04-11"),
            'temperature' => 16,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G708",
            'date' => date("2016-04-12"),
            'temperature' => 33.7,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G708",
            'date' => date("2016-04-13"),
            'temperature' => 23,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G708",
            'date' => date("2016-04-14"),
            'temperature' => 21.6,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G708",
            'date' => date("2016-04-15"),
            'temperature' => 14.4,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G708",
            'date' => date("2016-04-16"),
            'temperature' => 29.5,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G708",
            'date' => date("2016-04-17"),
            'temperature' => 17.3,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G708",
            'date' => date("2016-04-18"),
            'temperature' => 32.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G708",
            'date' => date("2016-04-19"),
            'temperature' => 35.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G708",
            'date' => date("2016-04-20"),
            'temperature' => 19.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G708",
            'date' => date("2016-04-21"),
            'temperature' => 15.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G708",
            'date' => date("2016-04-22"),
            'temperature' => 27.2,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G708",
            'date' => date("2016-04-23"),
            'temperature' => 22.3,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G708",
            'date' => date("2016-04-24"),
            'temperature' => 34.9,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G708",
            'date' => date("2016-04-25"),
            'temperature' => 14.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G708",
            'date' => date("2016-04-26"),
            'temperature' => 19.7,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G708",
            'date' => date("2016-04-27"),
            'temperature' => 35,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G708",
            'date' => date("2016-04-28"),
            'temperature' => 17,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G708",
            'date' => date("2016-04-29"),
            'temperature' => 29.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G708",
            'date' => date("2016-04-30"),
            'temperature' => 21.2,
        ));

                DB::table('heatmap')->insert(
        array(
            'roomId' => "G708",
            'date' => date("2016-05-01"),
            'temperature' => 14.9,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G708",
            'date' => date("2016-05-02"),
            'temperature' => 35,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G708",
            'date' => date("2016-05-03"),
            'temperature' => 17.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G708",
            'date' => date("2016-05-04"),
            'temperature' => 32,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G708",
            'date' => date("2016-05-05"),
            'temperature' => 32.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G708",
            'date' => date("2016-05-06"),
            'temperature' => 14.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G708",
            'date' => date("2016-05-07"),
            'temperature' => 32.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G708",
            'date' => date("2016-05-08"),
            'temperature' => 15.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G708",
            'date' => date("2016-05-09"),
            'temperature' => 15.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G708",
            'date' => date("2016-05-10"),
            'temperature' => 34.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G708",
            'date' => date("2016-05-11"),
            'temperature' => 17.5,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G708",
            'date' => date("2016-05-12"),
            'temperature' => 33.9,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G708",
            'date' => date("2016-05-13"),
            'temperature' => 22,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G708",
            'date' => date("2016-05-14"),
            'temperature' => 29.9,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G708",
            'date' => date("2016-05-15"),
            'temperature' => 19,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G708",
            'date' => date("2016-05-16"),
            'temperature' => 16,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G708",
            'date' => date("2016-05-17"),
            'temperature' => 33,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G708",
            'date' => date("2016-05-18"),
            'temperature' => 24.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G708",
            'date' => date("2016-05-19"),
            'temperature' => 26.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G708",
            'date' => date("2016-05-20"),
            'temperature' => 32.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G708",
            'date' => date("2016-05-21"),
            'temperature' => 15.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G708",
            'date' => date("2016-05-22"),
            'temperature' => 18.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G708",
            'date' => date("2016-05-23"),
            'temperature' => 18,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G708",
            'date' => date("2016-05-24"),
            'temperature' => 34.7,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G708",
            'date' => date("2016-05-25"),
            'temperature' => 31.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G708",
            'date' => date("2016-05-26"),
            'temperature' => 25.3,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G708",
            'date' => date("2016-05-27"),
            'temperature' => 19.2,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G708",
            'date' => date("2016-05-28"),
            'temperature' => 18.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G708",
            'date' => date("2016-05-29"),
            'temperature' => 16.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G708",
            'date' => date("2016-05-30"),
            'temperature' => 34.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G708",
            'date' => date("2016-05-31"),
            'temperature' => 19.3,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E211",
            'date' => date("2016-03-01"),
            'temperature' => 21.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E211",
            'date' => date("2016-03-02"),
            'temperature' => 35,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E211",
            'date' => date("2016-03-03"),
            'temperature' => 15,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E211",
            'date' => date("2016-03-04"),
            'temperature' => 33,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E211",
            'date' => date("2016-03-05"),
            'temperature' => 22,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E211",
            'date' => date("2016-03-06"),
            'temperature' => 16.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E211",
            'date' => date("2016-03-07"),
            'temperature' => 29.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E211",
            'date' => date("2016-03-08"),
            'temperature' => 23.4,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E211",
            'date' => date("2016-03-09"),
            'temperature' => 24,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E211",
            'date' => date("2016-03-10"),
            'temperature' => 30,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E211",
            'date' => date("2016-03-11"),
            'temperature' => 22.5,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E211",
            'date' => date("2016-03-12"),
            'temperature' => 34.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E211",
            'date' => date("2016-03-13"),
            'temperature' => 23,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E211",
            'date' => date("2016-03-14"),
            'temperature' => 15,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E211",
            'date' => date("2016-03-15"),
            'temperature' => 32,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E211",
            'date' => date("2016-03-16"),
            'temperature' => 25,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E211",
            'date' => date("2016-03-17"),
            'temperature' => 22,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E211",
            'date' => date("2016-03-18"),
            'temperature' => 14.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E211",
            'date' => date("2016-03-19"),
            'temperature' => 34,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E211",
            'date' => date("2016-03-20"),
            'temperature' => 22.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E211",
            'date' => date("2016-03-21"),
            'temperature' => 25,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E211",
            'date' => date("2016-03-22"),
            'temperature' => 30,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E211",
            'date' => date("2016-03-23"),
            'temperature' => 31.2,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E211",
            'date' => date("2016-03-24"),
            'temperature' => 19.2,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E211",
            'date' => date("2016-03-25"),
            'temperature' => 17.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E211",
            'date' => date("2016-03-26"),
            'temperature' => 26.7,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E211",
            'date' => date("2016-03-27"),
            'temperature' => 23.4,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E211",
            'date' => date("2016-03-28"),
            'temperature' => 17.9,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E211",
            'date' => date("2016-03-29"),
            'temperature' => 15.7,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E211",
            'date' => date("2016-03-30"),
            'temperature' => 24,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E211",
            'date' => date("2016-03-31"),
            'temperature' => 26.1,
        ));

                DB::table('heatmap')->insert(
        array(
            'roomId' => "E211",
            'date' => date("2016-04-01"),
            'temperature' => 27.3,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E211",
            'date' => date("2016-04-02"),
            'temperature' => 18,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E211",
            'date' => date("2016-04-03"),
            'temperature' => 32,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E211",
            'date' => date("2016-04-04"),
            'temperature' => 30,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E211",
            'date' => date("2016-04-05"),
            'temperature' => 27.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E211",
            'date' => date("2016-04-06"),
            'temperature' => 18,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E211",
            'date' => date("2016-04-07"),
            'temperature' => 23.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E211",
            'date' => date("2016-04-08"),
            'temperature' => 26.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E211",
            'date' => date("2016-04-09"),
            'temperature' => 34.9,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E211",
            'date' => date("2016-04-10"),
            'temperature' => 22,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E211",
            'date' => date("2016-04-11"),
            'temperature' => 14,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E211",
            'date' => date("2016-04-12"),
            'temperature' => 31,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E211",
            'date' => date("2016-04-13"),
            'temperature' => 27,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E211",
            'date' => date("2016-04-14"),
            'temperature' => 24.6,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E211",
            'date' => date("2016-04-15"),
            'temperature' => 20.4,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E211",
            'date' => date("2016-04-16"),
            'temperature' => 19.5,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E211",
            'date' => date("2016-04-17"),
            'temperature' => 27.3,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E211",
            'date' => date("2016-04-18"),
            'temperature' => 22.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E211",
            'date' => date("2016-04-19"),
            'temperature' => 32.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E211",
            'date' => date("2016-04-20"),
            'temperature' => 18.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E211",
            'date' => date("2016-04-21"),
            'temperature' => 24.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E211",
            'date' => date("2016-04-22"),
            'temperature' => 27.2,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E211",
            'date' => date("2016-04-23"),
            'temperature' => 32.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E211",
            'date' => date("2016-04-24"),
            'temperature' => 14.9,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E211",
            'date' => date("2016-04-25"),
            'temperature' => 24.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E211",
            'date' => date("2016-04-26"),
            'temperature' => 30.7,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E211",
            'date' => date("2016-04-27"),
            'temperature' => 27,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E211",
            'date' => date("2016-04-28"),
            'temperature' => 30,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E211",
            'date' => date("2016-04-29"),
            'temperature' => 26.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E211",
            'date' => date("2016-04-30"),
            'temperature' => 33.2,
        ));

                DB::table('heatmap')->insert(
        array(
            'roomId' => "E211",
            'date' => date("2016-05-01"),
            'temperature' => 29.9,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E211",
            'date' => date("2016-05-02"),
            'temperature' => 23,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E211",
            'date' => date("2016-05-03"),
            'temperature' => 20.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E211",
            'date' => date("2016-05-04"),
            'temperature' => 22,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E211",
            'date' => date("2016-05-05"),
            'temperature' => 22.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E211",
            'date' => date("2016-05-06"),
            'temperature' => 19.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E211",
            'date' => date("2016-05-07"),
            'temperature' => 22.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E211",
            'date' => date("2016-05-08"),
            'temperature' => 26.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E211",
            'date' => date("2016-05-09"),
            'temperature' => 34.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E211",
            'date' => date("2016-05-10"),
            'temperature' => 22.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E211",
            'date' => date("2016-05-11"),
            'temperature' => 28.5,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E211",
            'date' => date("2016-05-12"),
            'temperature' => 23,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E211",
            'date' => date("2016-05-13"),
            'temperature' => 27,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E211",
            'date' => date("2016-05-14"),
            'temperature' => 15,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E211",
            'date' => date("2016-05-15"),
            'temperature' => 30,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E211",
            'date' => date("2016-05-16"),
            'temperature' => 34,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E211",
            'date' => date("2016-05-17"),
            'temperature' => 21,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E211",
            'date' => date("2016-05-18"),
            'temperature' => 14.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E211",
            'date' => date("2016-05-19"),
            'temperature' => 16.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E211",
            'date' => date("2016-05-20"),
            'temperature' => 27.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E211",
            'date' => date("2016-05-21"),
            'temperature' => 34.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E211",
            'date' => date("2016-05-22"),
            'temperature' => 27.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E211",
            'date' => date("2016-05-23"),
            'temperature' => 23,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E211",
            'date' => date("2016-05-24"),
            'temperature' => 14.7,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E211",
            'date' => date("2016-05-25"),
            'temperature' => 17.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E211",
            'date' => date("2016-05-26"),
            'temperature' => 19.3,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E211",
            'date' => date("2016-05-27"),
            'temperature' => 31.2,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E211",
            'date' => date("2016-05-28"),
            'temperature' => 32.2,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E211",
            'date' => date("2016-05-29"),
            'temperature' => 18.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E211",
            'date' => date("2016-05-30"),
            'temperature' => 26.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E211",
            'date' => date("2016-05-31"),
            'temperature' => 35.1,
        ));



        DB::table('heatmap')->insert(
        array(
            'roomId' => "G515",
            'date' => date("2016-03-01"),
            'temperature' => 21.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G515",
            'date' => date("2016-03-02"),
            'temperature' => 35,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G515",
            'date' => date("2016-03-03"),
            'temperature' => 15,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G515",
            'date' => date("2016-03-04"),
            'temperature' => 33,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G515",
            'date' => date("2016-03-05"),
            'temperature' => 22,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G515",
            'date' => date("2016-03-06"),
            'temperature' => 16.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G515",
            'date' => date("2016-03-07"),
            'temperature' => 29.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G515",
            'date' => date("2016-03-08"),
            'temperature' => 23.4,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G515",
            'date' => date("2016-03-09"),
            'temperature' => 24,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G515",
            'date' => date("2016-03-10"),
            'temperature' => 30,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G515",
            'date' => date("2016-03-11"),
            'temperature' => 22.5,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G515",
            'date' => date("2016-03-12"),
            'temperature' => 34.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G515",
            'date' => date("2016-03-13"),
            'temperature' => 23,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G515",
            'date' => date("2016-03-14"),
            'temperature' => 15,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G515",
            'date' => date("2016-03-15"),
            'temperature' => 32,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G515",
            'date' => date("2016-03-16"),
            'temperature' => 25,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G515",
            'date' => date("2016-03-17"),
            'temperature' => 22,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G515",
            'date' => date("2016-03-18"),
            'temperature' => 14.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G515",
            'date' => date("2016-03-19"),
            'temperature' => 34,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G515",
            'date' => date("2016-03-20"),
            'temperature' => 22.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G515",
            'date' => date("2016-03-21"),
            'temperature' => 25,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G515",
            'date' => date("2016-03-22"),
            'temperature' => 30,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G515",
            'date' => date("2016-03-23"),
            'temperature' => 31.2,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G515",
            'date' => date("2016-03-24"),
            'temperature' => 19.2,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G515",
            'date' => date("2016-03-25"),
            'temperature' => 17.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G515",
            'date' => date("2016-03-26"),
            'temperature' => 26.7,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G515",
            'date' => date("2016-03-27"),
            'temperature' => 23.4,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G515",
            'date' => date("2016-03-28"),
            'temperature' => 17.9,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G515",
            'date' => date("2016-03-29"),
            'temperature' => 15.7,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G515",
            'date' => date("2016-03-30"),
            'temperature' => 24,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G515",
            'date' => date("2016-03-31"),
            'temperature' => 26.1,
        ));

                DB::table('heatmap')->insert(
        array(
            'roomId' => "G515",
            'date' => date("2016-04-01"),
            'temperature' => 27.3,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G515",
            'date' => date("2016-04-02"),
            'temperature' => 18,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G515",
            'date' => date("2016-04-03"),
            'temperature' => 32,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G515",
            'date' => date("2016-04-04"),
            'temperature' => 30,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G515",
            'date' => date("2016-04-05"),
            'temperature' => 27.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G515",
            'date' => date("2016-04-06"),
            'temperature' => 18,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G515",
            'date' => date("2016-04-07"),
            'temperature' => 23.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G515",
            'date' => date("2016-04-08"),
            'temperature' => 26.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G515",
            'date' => date("2016-04-09"),
            'temperature' => 34.9,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G515",
            'date' => date("2016-04-10"),
            'temperature' => 22,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G515",
            'date' => date("2016-04-11"),
            'temperature' => 14,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G515",
            'date' => date("2016-04-12"),
            'temperature' => 31,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G515",
            'date' => date("2016-04-13"),
            'temperature' => 27,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G515",
            'date' => date("2016-04-14"),
            'temperature' => 24.6,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G515",
            'date' => date("2016-04-15"),
            'temperature' => 20.4,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G515",
            'date' => date("2016-04-16"),
            'temperature' => 19.5,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G515",
            'date' => date("2016-04-17"),
            'temperature' => 27.3,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G515",
            'date' => date("2016-04-18"),
            'temperature' => 22.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G515",
            'date' => date("2016-04-19"),
            'temperature' => 32.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G515",
            'date' => date("2016-04-20"),
            'temperature' => 18.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G515",
            'date' => date("2016-04-21"),
            'temperature' => 24.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G515",
            'date' => date("2016-04-22"),
            'temperature' => 27.2,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G515",
            'date' => date("2016-04-23"),
            'temperature' => 32.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G515",
            'date' => date("2016-04-24"),
            'temperature' => 14.9,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G515",
            'date' => date("2016-04-25"),
            'temperature' => 24.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G515",
            'date' => date("2016-04-26"),
            'temperature' => 30.7,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G515",
            'date' => date("2016-04-27"),
            'temperature' => 27,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G515",
            'date' => date("2016-04-28"),
            'temperature' => 30,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G515",
            'date' => date("2016-04-29"),
            'temperature' => 26.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G515",
            'date' => date("2016-04-30"),
            'temperature' => 33.2,
        ));

                DB::table('heatmap')->insert(
        array(
            'roomId' => "G515",
            'date' => date("2016-05-01"),
            'temperature' => 29.9,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G515",
            'date' => date("2016-05-02"),
            'temperature' => 23,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G515",
            'date' => date("2016-05-03"),
            'temperature' => 20.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G515",
            'date' => date("2016-05-04"),
            'temperature' => 22,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G515",
            'date' => date("2016-05-05"),
            'temperature' => 22.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G515",
            'date' => date("2016-05-06"),
            'temperature' => 19.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G515",
            'date' => date("2016-05-07"),
            'temperature' => 22.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G515",
            'date' => date("2016-05-08"),
            'temperature' => 26.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G515",
            'date' => date("2016-05-09"),
            'temperature' => 34.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G515",
            'date' => date("2016-05-10"),
            'temperature' => 22.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G515",
            'date' => date("2016-05-11"),
            'temperature' => 28.5,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G515",
            'date' => date("2016-05-12"),
            'temperature' => 23,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G515",
            'date' => date("2016-05-13"),
            'temperature' => 27,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G515",
            'date' => date("2016-05-14"),
            'temperature' => 15,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G515",
            'date' => date("2016-05-15"),
            'temperature' => 30,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G515",
            'date' => date("2016-05-16"),
            'temperature' => 34,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G515",
            'date' => date("2016-05-17"),
            'temperature' => 21,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G515",
            'date' => date("2016-05-18"),
            'temperature' => 14.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G515",
            'date' => date("2016-05-19"),
            'temperature' => 16.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G515",
            'date' => date("2016-05-20"),
            'temperature' => 27.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G515",
            'date' => date("2016-05-21"),
            'temperature' => 34.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G515",
            'date' => date("2016-05-22"),
            'temperature' => 27.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G515",
            'date' => date("2016-05-23"),
            'temperature' => 23,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G515",
            'date' => date("2016-05-24"),
            'temperature' => 14.7,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G515",
            'date' => date("2016-05-25"),
            'temperature' => 17.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G515",
            'date' => date("2016-05-26"),
            'temperature' => 19.3,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G515",
            'date' => date("2016-05-27"),
            'temperature' => 31.2,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G515",
            'date' => date("2016-05-28"),
            'temperature' => 32.2,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G515",
            'date' => date("2016-05-29"),
            'temperature' => 18.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G515",
            'date' => date("2016-05-30"),
            'temperature' => 26.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G515",
            'date' => date("2016-05-31"),
            'temperature' => 35.1,
        ));

                DB::table('heatmap')->insert(
        array(
            'roomId' => "B607",
            'date' => date("2016-03-01"),
            'temperature' => 21.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B607",
            'date' => date("2016-03-02"),
            'temperature' => 35,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B607",
            'date' => date("2016-03-03"),
            'temperature' => 15,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B607",
            'date' => date("2016-03-04"),
            'temperature' => 33,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B607",
            'date' => date("2016-03-05"),
            'temperature' => 22,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B607",
            'date' => date("2016-03-06"),
            'temperature' => 16.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B607",
            'date' => date("2016-03-07"),
            'temperature' => 29.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B607",
            'date' => date("2016-03-08"),
            'temperature' => 23.4,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B607",
            'date' => date("2016-03-09"),
            'temperature' => 24,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B607",
            'date' => date("2016-03-10"),
            'temperature' => 30,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B607",
            'date' => date("2016-03-11"),
            'temperature' => 22.5,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B607",
            'date' => date("2016-03-12"),
            'temperature' => 34.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B607",
            'date' => date("2016-03-13"),
            'temperature' => 23,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B607",
            'date' => date("2016-03-14"),
            'temperature' => 15,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B607",
            'date' => date("2016-03-15"),
            'temperature' => 32,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B607",
            'date' => date("2016-03-16"),
            'temperature' => 25,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B607",
            'date' => date("2016-03-17"),
            'temperature' => 22,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B607",
            'date' => date("2016-03-18"),
            'temperature' => 14.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B607",
            'date' => date("2016-03-19"),
            'temperature' => 34,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B607",
            'date' => date("2016-03-20"),
            'temperature' => 22.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B607",
            'date' => date("2016-03-21"),
            'temperature' => 25,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B607",
            'date' => date("2016-03-22"),
            'temperature' => 30,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B607",
            'date' => date("2016-03-23"),
            'temperature' => 31.2,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B607",
            'date' => date("2016-03-24"),
            'temperature' => 19.2,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B607",
            'date' => date("2016-03-25"),
            'temperature' => 17.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B607",
            'date' => date("2016-03-26"),
            'temperature' => 26.7,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B607",
            'date' => date("2016-03-27"),
            'temperature' => 23.4,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B607",
            'date' => date("2016-03-28"),
            'temperature' => 17.9,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B607",
            'date' => date("2016-03-29"),
            'temperature' => 15.7,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B607",
            'date' => date("2016-03-30"),
            'temperature' => 24,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B607",
            'date' => date("2016-03-31"),
            'temperature' => 26.1,
        ));

                DB::table('heatmap')->insert(
        array(
            'roomId' => "B607",
            'date' => date("2016-04-01"),
            'temperature' => 27.3,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B607",
            'date' => date("2016-04-02"),
            'temperature' => 18,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B607",
            'date' => date("2016-04-03"),
            'temperature' => 32,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B607",
            'date' => date("2016-04-04"),
            'temperature' => 30,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B607",
            'date' => date("2016-04-05"),
            'temperature' => 27.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B607",
            'date' => date("2016-04-06"),
            'temperature' => 18,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B607",
            'date' => date("2016-04-07"),
            'temperature' => 23.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B607",
            'date' => date("2016-04-08"),
            'temperature' => 26.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B607",
            'date' => date("2016-04-09"),
            'temperature' => 34.9,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B607",
            'date' => date("2016-04-10"),
            'temperature' => 22,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B607",
            'date' => date("2016-04-11"),
            'temperature' => 14,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B607",
            'date' => date("2016-04-12"),
            'temperature' => 31,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B607",
            'date' => date("2016-04-13"),
            'temperature' => 27,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B607",
            'date' => date("2016-04-14"),
            'temperature' => 24.6,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B607",
            'date' => date("2016-04-15"),
            'temperature' => 20.4,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B607",
            'date' => date("2016-04-16"),
            'temperature' => 19.5,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B607",
            'date' => date("2016-04-17"),
            'temperature' => 27.3,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B607",
            'date' => date("2016-04-18"),
            'temperature' => 22.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B607",
            'date' => date("2016-04-19"),
            'temperature' => 32.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B607",
            'date' => date("2016-04-20"),
            'temperature' => 18.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B607",
            'date' => date("2016-04-21"),
            'temperature' => 24.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B607",
            'date' => date("2016-04-22"),
            'temperature' => 27.2,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B607",
            'date' => date("2016-04-23"),
            'temperature' => 32.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B607",
            'date' => date("2016-04-24"),
            'temperature' => 14.9,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B607",
            'date' => date("2016-04-25"),
            'temperature' => 24.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B607",
            'date' => date("2016-04-26"),
            'temperature' => 30.7,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B607",
            'date' => date("2016-04-27"),
            'temperature' => 27,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B607",
            'date' => date("2016-04-28"),
            'temperature' => 30,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B607",
            'date' => date("2016-04-29"),
            'temperature' => 26.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B607",
            'date' => date("2016-04-30"),
            'temperature' => 33.2,
        ));

                DB::table('heatmap')->insert(
        array(
            'roomId' => "B607",
            'date' => date("2016-05-01"),
            'temperature' => 29.9,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B607",
            'date' => date("2016-05-02"),
            'temperature' => 23,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B607",
            'date' => date("2016-05-03"),
            'temperature' => 20.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B607",
            'date' => date("2016-05-04"),
            'temperature' => 22,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B607",
            'date' => date("2016-05-05"),
            'temperature' => 22.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B607",
            'date' => date("2016-05-06"),
            'temperature' => 19.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B607",
            'date' => date("2016-05-07"),
            'temperature' => 22.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B607",
            'date' => date("2016-05-08"),
            'temperature' => 26.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B607",
            'date' => date("2016-05-09"),
            'temperature' => 34.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B607",
            'date' => date("2016-05-10"),
            'temperature' => 22.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B607",
            'date' => date("2016-05-11"),
            'temperature' => 28.5,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B607",
            'date' => date("2016-05-12"),
            'temperature' => 23,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B607",
            'date' => date("2016-05-13"),
            'temperature' => 27,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B607",
            'date' => date("2016-05-14"),
            'temperature' => 15,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B607",
            'date' => date("2016-05-15"),
            'temperature' => 30,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B607",
            'date' => date("2016-05-16"),
            'temperature' => 34,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B607",
            'date' => date("2016-05-17"),
            'temperature' => 21,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B607",
            'date' => date("2016-05-18"),
            'temperature' => 14.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B607",
            'date' => date("2016-05-19"),
            'temperature' => 16.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B607",
            'date' => date("2016-05-20"),
            'temperature' => 27.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B607",
            'date' => date("2016-05-21"),
            'temperature' => 34.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B607",
            'date' => date("2016-05-22"),
            'temperature' => 27.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B607",
            'date' => date("2016-05-23"),
            'temperature' => 23,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B607",
            'date' => date("2016-05-24"),
            'temperature' => 14.7,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B607",
            'date' => date("2016-05-25"),
            'temperature' => 17.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B607",
            'date' => date("2016-05-26"),
            'temperature' => 19.3,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B607",
            'date' => date("2016-05-27"),
            'temperature' => 31.2,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B607",
            'date' => date("2016-05-28"),
            'temperature' => 32.2,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B607",
            'date' => date("2016-05-29"),
            'temperature' => 18.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B607",
            'date' => date("2016-05-30"),
            'temperature' => 26.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B607",
            'date' => date("2016-05-31"),
            'temperature' => 35.1,
        ));

                DB::table('heatmap')->insert(
        array(
            'roomId' => "G709",
            'date' => date("2016-03-01"),
            'temperature' => 21.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G709",
            'date' => date("2016-03-02"),
            'temperature' => 35,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G709",
            'date' => date("2016-03-03"),
            'temperature' => 15,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G709",
            'date' => date("2016-03-04"),
            'temperature' => 33,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G709",
            'date' => date("2016-03-05"),
            'temperature' => 22,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G709",
            'date' => date("2016-03-06"),
            'temperature' => 16.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G709",
            'date' => date("2016-03-07"),
            'temperature' => 29.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G709",
            'date' => date("2016-03-08"),
            'temperature' => 23.4,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G709",
            'date' => date("2016-03-09"),
            'temperature' => 24,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G709",
            'date' => date("2016-03-10"),
            'temperature' => 30,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G709",
            'date' => date("2016-03-11"),
            'temperature' => 22.5,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G709",
            'date' => date("2016-03-12"),
            'temperature' => 34.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G709",
            'date' => date("2016-03-13"),
            'temperature' => 23,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G709",
            'date' => date("2016-03-14"),
            'temperature' => 15,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G709",
            'date' => date("2016-03-15"),
            'temperature' => 32,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G709",
            'date' => date("2016-03-16"),
            'temperature' => 25,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G709",
            'date' => date("2016-03-17"),
            'temperature' => 22,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G709",
            'date' => date("2016-03-18"),
            'temperature' => 14.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G709",
            'date' => date("2016-03-19"),
            'temperature' => 34,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G709",
            'date' => date("2016-03-20"),
            'temperature' => 22.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G709",
            'date' => date("2016-03-21"),
            'temperature' => 25,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G709",
            'date' => date("2016-03-22"),
            'temperature' => 30,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G709",
            'date' => date("2016-03-23"),
            'temperature' => 31.2,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G709",
            'date' => date("2016-03-24"),
            'temperature' => 19.2,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G709",
            'date' => date("2016-03-25"),
            'temperature' => 17.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G709",
            'date' => date("2016-03-26"),
            'temperature' => 26.7,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G709",
            'date' => date("2016-03-27"),
            'temperature' => 23.4,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G709",
            'date' => date("2016-03-28"),
            'temperature' => 17.9,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G709",
            'date' => date("2016-03-29"),
            'temperature' => 15.7,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G709",
            'date' => date("2016-03-30"),
            'temperature' => 24,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G709",
            'date' => date("2016-03-31"),
            'temperature' => 26.1,
        ));

                DB::table('heatmap')->insert(
        array(
            'roomId' => "G709",
            'date' => date("2016-04-01"),
            'temperature' => 27.3,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G709",
            'date' => date("2016-04-02"),
            'temperature' => 18,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G709",
            'date' => date("2016-04-03"),
            'temperature' => 32,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G709",
            'date' => date("2016-04-04"),
            'temperature' => 30,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G709",
            'date' => date("2016-04-05"),
            'temperature' => 27.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G709",
            'date' => date("2016-04-06"),
            'temperature' => 18,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G709",
            'date' => date("2016-04-07"),
            'temperature' => 23.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G709",
            'date' => date("2016-04-08"),
            'temperature' => 26.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G709",
            'date' => date("2016-04-09"),
            'temperature' => 34.9,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G709",
            'date' => date("2016-04-10"),
            'temperature' => 22,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G709",
            'date' => date("2016-04-11"),
            'temperature' => 14,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G709",
            'date' => date("2016-04-12"),
            'temperature' => 31,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G709",
            'date' => date("2016-04-13"),
            'temperature' => 27,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G709",
            'date' => date("2016-04-14"),
            'temperature' => 24.6,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G709",
            'date' => date("2016-04-15"),
            'temperature' => 20.4,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G709",
            'date' => date("2016-04-16"),
            'temperature' => 19.5,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G709",
            'date' => date("2016-04-17"),
            'temperature' => 27.3,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G709",
            'date' => date("2016-04-18"),
            'temperature' => 22.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G709",
            'date' => date("2016-04-19"),
            'temperature' => 32.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G709",
            'date' => date("2016-04-20"),
            'temperature' => 18.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G709",
            'date' => date("2016-04-21"),
            'temperature' => 24.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G709",
            'date' => date("2016-04-22"),
            'temperature' => 27.2,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G709",
            'date' => date("2016-04-23"),
            'temperature' => 32.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G709",
            'date' => date("2016-04-24"),
            'temperature' => 14.9,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G709",
            'date' => date("2016-04-25"),
            'temperature' => 24.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G709",
            'date' => date("2016-04-26"),
            'temperature' => 30.7,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G709",
            'date' => date("2016-04-27"),
            'temperature' => 27,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G709",
            'date' => date("2016-04-28"),
            'temperature' => 30,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G709",
            'date' => date("2016-04-29"),
            'temperature' => 26.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G709",
            'date' => date("2016-04-30"),
            'temperature' => 33.2,
        ));

                DB::table('heatmap')->insert(
        array(
            'roomId' => "G709",
            'date' => date("2016-05-01"),
            'temperature' => 29.9,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G709",
            'date' => date("2016-05-02"),
            'temperature' => 23,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G709",
            'date' => date("2016-05-03"),
            'temperature' => 20.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G709",
            'date' => date("2016-05-04"),
            'temperature' => 22,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G709",
            'date' => date("2016-05-05"),
            'temperature' => 22.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G709",
            'date' => date("2016-05-06"),
            'temperature' => 19.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G709",
            'date' => date("2016-05-07"),
            'temperature' => 22.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G709",
            'date' => date("2016-05-08"),
            'temperature' => 26.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G709",
            'date' => date("2016-05-09"),
            'temperature' => 34.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G709",
            'date' => date("2016-05-10"),
            'temperature' => 22.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G709",
            'date' => date("2016-05-11"),
            'temperature' => 28.5,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G709",
            'date' => date("2016-05-12"),
            'temperature' => 23,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G709",
            'date' => date("2016-05-13"),
            'temperature' => 27,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G709",
            'date' => date("2016-05-14"),
            'temperature' => 15,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G709",
            'date' => date("2016-05-15"),
            'temperature' => 30,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G709",
            'date' => date("2016-05-16"),
            'temperature' => 34,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G709",
            'date' => date("2016-05-17"),
            'temperature' => 21,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G709",
            'date' => date("2016-05-18"),
            'temperature' => 14.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G709",
            'date' => date("2016-05-19"),
            'temperature' => 16.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G709",
            'date' => date("2016-05-20"),
            'temperature' => 27.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G709",
            'date' => date("2016-05-21"),
            'temperature' => 34.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G709",
            'date' => date("2016-05-22"),
            'temperature' => 27.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G709",
            'date' => date("2016-05-23"),
            'temperature' => 23,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G709",
            'date' => date("2016-05-24"),
            'temperature' => 14.7,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G709",
            'date' => date("2016-05-25"),
            'temperature' => 17.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G709",
            'date' => date("2016-05-26"),
            'temperature' => 19.3,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G709",
            'date' => date("2016-05-27"),
            'temperature' => 31.2,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G709",
            'date' => date("2016-05-28"),
            'temperature' => 32.2,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G709",
            'date' => date("2016-05-29"),
            'temperature' => 18.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G709",
            'date' => date("2016-05-30"),
            'temperature' => 26.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G709",
            'date' => date("2016-05-31"),
            'temperature' => 35.1,
        ));

                DB::table('heatmap')->insert(
        array(
            'roomId' => "G102",
            'date' => date("2016-03-01"),
            'temperature' => 23.3,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G102",
            'date' => date("2016-03-02"),
            'temperature' => 27,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G102",
            'date' => date("2016-03-03"),
            'temperature' => 35.2,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G102",
            'date' => date("2016-03-04"),
            'temperature' => 21,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G102",
            'date' => date("2016-03-05"),
            'temperature' => 22,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G102",
            'date' => date("2016-03-06"),
            'temperature' => 33.4,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G102",
            'date' => date("2016-03-07"),
            'temperature' => 29.2,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G102",
            'date' => date("2016-03-08"),
            'temperature' => 22.9,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G102",
            'date' => date("2016-03-09"),
            'temperature' => 28,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G102",
            'date' => date("2016-03-10"),
            'temperature' => 22,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G102",
            'date' => date("2016-03-11"),
            'temperature' => 33.5,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G102",
            'date' => date("2016-03-12"),
            'temperature' => 24.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G102",
            'date' => date("2016-03-13"),
            'temperature' => 33.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G102",
            'date' => date("2016-03-14"),
            'temperature' => 13,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G102",
            'date' => date("2016-03-15"),
            'temperature' => 22,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G102",
            'date' => date("2016-03-16"),
            'temperature' => 33,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G102",
            'date' => date("2016-03-17"),
            'temperature' => 21,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G102",
            'date' => date("2016-03-18"),
            'temperature' => 34.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G102",
            'date' => date("2016-03-19"),
            'temperature' => 34.9,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G102",
            'date' => date("2016-03-20"),
            'temperature' => 22.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G102",
            'date' => date("2016-03-21"),
            'temperature' => 34.3,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G102",
            'date' => date("2016-03-22"),
            'temperature' => 26.7,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G102",
            'date' => date("2016-03-23"),
            'temperature' => 21.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G102",
            'date' => date("2016-03-24"),
            'temperature' => 14.3,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G102",
            'date' => date("2016-03-25"),
            'temperature' => 33.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G102",
            'date' => date("2016-03-26"),
            'temperature' => 33.7,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G102",
            'date' => date("2016-03-27"),
            'temperature' => 21.4,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G102",
            'date' => date("2016-03-28"),
            'temperature' => 32.9,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G102",
            'date' => date("2016-03-29"),
            'temperature' => 32,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G102",
            'date' => date("2016-03-30"),
            'temperature' => 35,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G102",
            'date' => date("2016-03-31"),
            'temperature' => 34.2,
        ));

                DB::table('heatmap')->insert(
        array(
            'roomId' => "G102",
            'date' => date("2016-04-01"),
            'temperature' => 23.9,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G102",
            'date' => date("2016-04-02"),
            'temperature' => 25,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G102",
            'date' => date("2016-04-03"),
            'temperature' => 25,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G102",
            'date' => date("2016-04-04"),
            'temperature' => 25,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G102",
            'date' => date("2016-04-05"),
            'temperature' => 28,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G102",
            'date' => date("2016-04-06"),
            'temperature' => 24,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G102",
            'date' => date("2016-04-07"),
            'temperature' => 34,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G102",
            'date' => date("2016-04-08"),
            'temperature' => 29,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G102",
            'date' => date("2016-04-09"),
            'temperature' => 24,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G102",
            'date' => date("2016-04-10"),
            'temperature' => 14,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G102",
            'date' => date("2016-04-11"),
            'temperature' => 23,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G102",
            'date' => date("2016-04-12"),
            'temperature' => 26,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G102",
            'date' => date("2016-04-13"),
            'temperature' => 21,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G102",
            'date' => date("2016-04-14"),
            'temperature' => 14,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G102",
            'date' => date("2016-04-15"),
            'temperature' => 34.4,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G102",
            'date' => date("2016-04-16"),
            'temperature' => 23.5,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G102",
            'date' => date("2016-04-17"),
            'temperature' => 27.3,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G102",
            'date' => date("2016-04-18"),
            'temperature' => 23.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G102",
            'date' => date("2016-04-19"),
            'temperature' => 34.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G102",
            'date' => date("2016-04-20"),
            'temperature' => 22.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G102",
            'date' => date("2016-04-21"),
            'temperature' => 23.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G102",
            'date' => date("2016-04-22"),
            'temperature' => 25.2,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G102",
            'date' => date("2016-04-23"),
            'temperature' => 24.3,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G102",
            'date' => date("2016-04-24"),
            'temperature' => 14.9,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G102",
            'date' => date("2016-04-25"),
            'temperature' => 23.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G102",
            'date' => date("2016-04-26"),
            'temperature' => 23.7,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G102",
            'date' => date("2016-04-27"),
            'temperature' => 24,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G102",
            'date' => date("2016-04-28"),
            'temperature' => 24,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G102",
            'date' => date("2016-04-29"),
            'temperature' => 24.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G102",
            'date' => date("2016-04-30"),
            'temperature' => 25.2,
        ));

                DB::table('heatmap')->insert(
        array(
            'roomId' => "G102",
            'date' => date("2016-05-01"),
            'temperature' => 26.9,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G102",
            'date' => date("2016-05-02"),
            'temperature' => 29,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G102",
            'date' => date("2016-05-03"),
            'temperature' => 21.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G102",
            'date' => date("2016-05-04"),
            'temperature' => 31,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G102",
            'date' => date("2016-05-05"),
            'temperature' => 27.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G102",
            'date' => date("2016-05-06"),
            'temperature' => 24.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G102",
            'date' => date("2016-05-07"),
            'temperature' => 23.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G102",
            'date' => date("2016-05-08"),
            'temperature' => 25.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G102",
            'date' => date("2016-05-09"),
            'temperature' => 26.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G102",
            'date' => date("2016-05-10"),
            'temperature' => 34.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G102",
            'date' => date("2016-05-11"),
            'temperature' => 24.5,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G102",
            'date' => date("2016-05-12"),
            'temperature' => 27.9,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G102",
            'date' => date("2016-05-13"),
            'temperature' => 28,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G102",
            'date' => date("2016-05-14"),
            'temperature' => 19.9,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G102",
            'date' => date("2016-05-15"),
            'temperature' => 19,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G102",
            'date' => date("2016-05-16"),
            'temperature' => 25,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G102",
            'date' => date("2016-05-17"),
            'temperature' => 28,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G102",
            'date' => date("2016-05-18"),
            'temperature' => 29.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G102",
            'date' => date("2016-05-19"),
            'temperature' => 21.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G102",
            'date' => date("2016-05-20"),
            'temperature' => 36.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G102",
            'date' => date("2016-05-21"),
            'temperature' => 35.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G102",
            'date' => date("2016-05-22"),
            'temperature' => 21.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G102",
            'date' => date("2016-05-23"),
            'temperature' => 19.7,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G102",
            'date' => date("2016-05-24"),
            'temperature' => 24.7,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G102",
            'date' => date("2016-05-25"),
            'temperature' => 30.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G102",
            'date' => date("2016-05-26"),
            'temperature' => 28.3,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G102",
            'date' => date("2016-05-27"),
            'temperature' => 21.2,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G102",
            'date' => date("2016-05-28"),
            'temperature' => 25.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G102",
            'date' => date("2016-05-29"),
            'temperature' => 26.5,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G102",
            'date' => date("2016-05-30"),
            'temperature' => 22.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G102",
            'date' => date("2016-05-31"),
            'temperature' => 29.3,
        ));

                DB::table('heatmap')->insert(
        array(
            'roomId' => "G311",
            'date' => date("2016-03-01"),
            'temperature' => 23.3,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G311",
            'date' => date("2016-03-02"),
            'temperature' => 27,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G311",
            'date' => date("2016-03-03"),
            'temperature' => 35.2,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G311",
            'date' => date("2016-03-04"),
            'temperature' => 21,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G311",
            'date' => date("2016-03-05"),
            'temperature' => 22,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G311",
            'date' => date("2016-03-06"),
            'temperature' => 33.4,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G311",
            'date' => date("2016-03-07"),
            'temperature' => 29.2,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G311",
            'date' => date("2016-03-08"),
            'temperature' => 22.9,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G311",
            'date' => date("2016-03-09"),
            'temperature' => 28,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G311",
            'date' => date("2016-03-10"),
            'temperature' => 22,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G311",
            'date' => date("2016-03-11"),
            'temperature' => 33.5,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G311",
            'date' => date("2016-03-12"),
            'temperature' => 24.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G311",
            'date' => date("2016-03-13"),
            'temperature' => 33.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G311",
            'date' => date("2016-03-14"),
            'temperature' => 13,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G311",
            'date' => date("2016-03-15"),
            'temperature' => 22,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G311",
            'date' => date("2016-03-16"),
            'temperature' => 33,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G311",
            'date' => date("2016-03-17"),
            'temperature' => 21,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G311",
            'date' => date("2016-03-18"),
            'temperature' => 34.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G311",
            'date' => date("2016-03-19"),
            'temperature' => 34.9,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G311",
            'date' => date("2016-03-20"),
            'temperature' => 22.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G311",
            'date' => date("2016-03-21"),
            'temperature' => 34.3,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G311",
            'date' => date("2016-03-22"),
            'temperature' => 26.7,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G311",
            'date' => date("2016-03-23"),
            'temperature' => 21.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G311",
            'date' => date("2016-03-24"),
            'temperature' => 14.3,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G311",
            'date' => date("2016-03-25"),
            'temperature' => 33.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G311",
            'date' => date("2016-03-26"),
            'temperature' => 33.7,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G311",
            'date' => date("2016-03-27"),
            'temperature' => 21.4,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G311",
            'date' => date("2016-03-28"),
            'temperature' => 32.9,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G311",
            'date' => date("2016-03-29"),
            'temperature' => 32,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G311",
            'date' => date("2016-03-30"),
            'temperature' => 35,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G311",
            'date' => date("2016-03-31"),
            'temperature' => 34.2,
        ));

                DB::table('heatmap')->insert(
        array(
            'roomId' => "G311",
            'date' => date("2016-04-01"),
            'temperature' => 23.9,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G311",
            'date' => date("2016-04-02"),
            'temperature' => 25,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G311",
            'date' => date("2016-04-03"),
            'temperature' => 25,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G311",
            'date' => date("2016-04-04"),
            'temperature' => 25,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G311",
            'date' => date("2016-04-05"),
            'temperature' => 28,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G311",
            'date' => date("2016-04-06"),
            'temperature' => 24,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G311",
            'date' => date("2016-04-07"),
            'temperature' => 34,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G311",
            'date' => date("2016-04-08"),
            'temperature' => 29,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G311",
            'date' => date("2016-04-09"),
            'temperature' => 24,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G311",
            'date' => date("2016-04-10"),
            'temperature' => 14,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G311",
            'date' => date("2016-04-11"),
            'temperature' => 23,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G311",
            'date' => date("2016-04-12"),
            'temperature' => 26,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G311",
            'date' => date("2016-04-13"),
            'temperature' => 21,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G311",
            'date' => date("2016-04-14"),
            'temperature' => 14,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G311",
            'date' => date("2016-04-15"),
            'temperature' => 34.4,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G311",
            'date' => date("2016-04-16"),
            'temperature' => 23.5,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G311",
            'date' => date("2016-04-17"),
            'temperature' => 27.3,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G311",
            'date' => date("2016-04-18"),
            'temperature' => 23.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G311",
            'date' => date("2016-04-19"),
            'temperature' => 34.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G311",
            'date' => date("2016-04-20"),
            'temperature' => 22.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G311",
            'date' => date("2016-04-21"),
            'temperature' => 23.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G311",
            'date' => date("2016-04-22"),
            'temperature' => 25.2,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G311",
            'date' => date("2016-04-23"),
            'temperature' => 24.3,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G311",
            'date' => date("2016-04-24"),
            'temperature' => 14.9,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G311",
            'date' => date("2016-04-25"),
            'temperature' => 23.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G311",
            'date' => date("2016-04-26"),
            'temperature' => 23.7,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G311",
            'date' => date("2016-04-27"),
            'temperature' => 24,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G311",
            'date' => date("2016-04-28"),
            'temperature' => 24,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G311",
            'date' => date("2016-04-29"),
            'temperature' => 24.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G311",
            'date' => date("2016-04-30"),
            'temperature' => 25.2,
        ));

                DB::table('heatmap')->insert(
        array(
            'roomId' => "G311",
            'date' => date("2016-05-01"),
            'temperature' => 26.9,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G311",
            'date' => date("2016-05-02"),
            'temperature' => 29,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G311",
            'date' => date("2016-05-03"),
            'temperature' => 21.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G311",
            'date' => date("2016-05-04"),
            'temperature' => 31,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G311",
            'date' => date("2016-05-05"),
            'temperature' => 27.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G311",
            'date' => date("2016-05-06"),
            'temperature' => 24.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G311",
            'date' => date("2016-05-07"),
            'temperature' => 23.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G311",
            'date' => date("2016-05-08"),
            'temperature' => 25.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G311",
            'date' => date("2016-05-09"),
            'temperature' => 26.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G311",
            'date' => date("2016-05-10"),
            'temperature' => 34.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G311",
            'date' => date("2016-05-11"),
            'temperature' => 24.5,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G311",
            'date' => date("2016-05-12"),
            'temperature' => 27.9,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G311",
            'date' => date("2016-05-13"),
            'temperature' => 28,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G311",
            'date' => date("2016-05-14"),
            'temperature' => 19.9,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G311",
            'date' => date("2016-05-15"),
            'temperature' => 19,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G311",
            'date' => date("2016-05-16"),
            'temperature' => 25,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G311",
            'date' => date("2016-05-17"),
            'temperature' => 28,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G311",
            'date' => date("2016-05-18"),
            'temperature' => 29.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G311",
            'date' => date("2016-05-19"),
            'temperature' => 21.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G311",
            'date' => date("2016-05-20"),
            'temperature' => 36.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G311",
            'date' => date("2016-05-21"),
            'temperature' => 35.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G311",
            'date' => date("2016-05-22"),
            'temperature' => 21.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G311",
            'date' => date("2016-05-23"),
            'temperature' => 19.7,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G311",
            'date' => date("2016-05-24"),
            'temperature' => 24.7,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G311",
            'date' => date("2016-05-25"),
            'temperature' => 30.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G311",
            'date' => date("2016-05-26"),
            'temperature' => 28.3,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G311",
            'date' => date("2016-05-27"),
            'temperature' => 21.2,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G311",
            'date' => date("2016-05-28"),
            'temperature' => 25.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G311",
            'date' => date("2016-05-29"),
            'temperature' => 26.5,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G311",
            'date' => date("2016-05-30"),
            'temperature' => 22.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G311",
            'date' => date("2016-05-31"),
            'temperature' => 29.3,
        ));

                DB::table('heatmap')->insert(
        array(
            'roomId' => "G402",
            'date' => date("2016-03-01"),
            'temperature' => 23.3,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G402",
            'date' => date("2016-03-02"),
            'temperature' => 27,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G402",
            'date' => date("2016-03-03"),
            'temperature' => 35.2,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G402",
            'date' => date("2016-03-04"),
            'temperature' => 21,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G402",
            'date' => date("2016-03-05"),
            'temperature' => 22,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G402",
            'date' => date("2016-03-06"),
            'temperature' => 33.4,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G402",
            'date' => date("2016-03-07"),
            'temperature' => 29.2,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G402",
            'date' => date("2016-03-08"),
            'temperature' => 22.9,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G402",
            'date' => date("2016-03-09"),
            'temperature' => 28,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G402",
            'date' => date("2016-03-10"),
            'temperature' => 22,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G402",
            'date' => date("2016-03-11"),
            'temperature' => 33.5,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G402",
            'date' => date("2016-03-12"),
            'temperature' => 24.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G402",
            'date' => date("2016-03-13"),
            'temperature' => 33.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G402",
            'date' => date("2016-03-14"),
            'temperature' => 13,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G402",
            'date' => date("2016-03-15"),
            'temperature' => 22,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G402",
            'date' => date("2016-03-16"),
            'temperature' => 33,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G402",
            'date' => date("2016-03-17"),
            'temperature' => 21,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G402",
            'date' => date("2016-03-18"),
            'temperature' => 34.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G402",
            'date' => date("2016-03-19"),
            'temperature' => 34.9,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G402",
            'date' => date("2016-03-20"),
            'temperature' => 22.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G402",
            'date' => date("2016-03-21"),
            'temperature' => 34.3,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G402",
            'date' => date("2016-03-22"),
            'temperature' => 26.7,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G402",
            'date' => date("2016-03-23"),
            'temperature' => 21.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G402",
            'date' => date("2016-03-24"),
            'temperature' => 14.3,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G402",
            'date' => date("2016-03-25"),
            'temperature' => 33.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G402",
            'date' => date("2016-03-26"),
            'temperature' => 33.7,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G402",
            'date' => date("2016-03-27"),
            'temperature' => 21.4,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G402",
            'date' => date("2016-03-28"),
            'temperature' => 32.9,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G402",
            'date' => date("2016-03-29"),
            'temperature' => 32,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G402",
            'date' => date("2016-03-30"),
            'temperature' => 35,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G402",
            'date' => date("2016-03-31"),
            'temperature' => 34.2,
        ));

                DB::table('heatmap')->insert(
        array(
            'roomId' => "G402",
            'date' => date("2016-04-01"),
            'temperature' => 23.9,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G402",
            'date' => date("2016-04-02"),
            'temperature' => 25,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G402",
            'date' => date("2016-04-03"),
            'temperature' => 25,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G402",
            'date' => date("2016-04-04"),
            'temperature' => 25,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G402",
            'date' => date("2016-04-05"),
            'temperature' => 28,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G402",
            'date' => date("2016-04-06"),
            'temperature' => 24,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G402",
            'date' => date("2016-04-07"),
            'temperature' => 34,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G402",
            'date' => date("2016-04-08"),
            'temperature' => 29,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G402",
            'date' => date("2016-04-09"),
            'temperature' => 24,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G402",
            'date' => date("2016-04-10"),
            'temperature' => 14,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G402",
            'date' => date("2016-04-11"),
            'temperature' => 23,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G402",
            'date' => date("2016-04-12"),
            'temperature' => 26,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G402",
            'date' => date("2016-04-13"),
            'temperature' => 21,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G402",
            'date' => date("2016-04-14"),
            'temperature' => 14,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G402",
            'date' => date("2016-04-15"),
            'temperature' => 34.4,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G402",
            'date' => date("2016-04-16"),
            'temperature' => 23.5,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G402",
            'date' => date("2016-04-17"),
            'temperature' => 27.3,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G402",
            'date' => date("2016-04-18"),
            'temperature' => 23.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G402",
            'date' => date("2016-04-19"),
            'temperature' => 34.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G402",
            'date' => date("2016-04-20"),
            'temperature' => 22.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G402",
            'date' => date("2016-04-21"),
            'temperature' => 23.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G402",
            'date' => date("2016-04-22"),
            'temperature' => 25.2,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G402",
            'date' => date("2016-04-23"),
            'temperature' => 24.3,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G402",
            'date' => date("2016-04-24"),
            'temperature' => 14.9,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G402",
            'date' => date("2016-04-25"),
            'temperature' => 23.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G402",
            'date' => date("2016-04-26"),
            'temperature' => 23.7,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G402",
            'date' => date("2016-04-27"),
            'temperature' => 24,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G402",
            'date' => date("2016-04-28"),
            'temperature' => 24,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G402",
            'date' => date("2016-04-29"),
            'temperature' => 24.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G402",
            'date' => date("2016-04-30"),
            'temperature' => 25.2,
        ));

                DB::table('heatmap')->insert(
        array(
            'roomId' => "G402",
            'date' => date("2016-05-01"),
            'temperature' => 26.9,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G402",
            'date' => date("2016-05-02"),
            'temperature' => 29,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G402",
            'date' => date("2016-05-03"),
            'temperature' => 21.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G402",
            'date' => date("2016-05-04"),
            'temperature' => 31,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G402",
            'date' => date("2016-05-05"),
            'temperature' => 27.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G402",
            'date' => date("2016-05-06"),
            'temperature' => 24.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G402",
            'date' => date("2016-05-07"),
            'temperature' => 23.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G402",
            'date' => date("2016-05-08"),
            'temperature' => 25.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G402",
            'date' => date("2016-05-09"),
            'temperature' => 26.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G402",
            'date' => date("2016-05-10"),
            'temperature' => 34.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G402",
            'date' => date("2016-05-11"),
            'temperature' => 24.5,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G402",
            'date' => date("2016-05-12"),
            'temperature' => 27.9,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G402",
            'date' => date("2016-05-13"),
            'temperature' => 28,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G402",
            'date' => date("2016-05-14"),
            'temperature' => 19.9,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G402",
            'date' => date("2016-05-15"),
            'temperature' => 19,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G402",
            'date' => date("2016-05-16"),
            'temperature' => 25,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G402",
            'date' => date("2016-05-17"),
            'temperature' => 28,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G402",
            'date' => date("2016-05-18"),
            'temperature' => 29.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G402",
            'date' => date("2016-05-19"),
            'temperature' => 21.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G402",
            'date' => date("2016-05-20"),
            'temperature' => 36.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G402",
            'date' => date("2016-05-21"),
            'temperature' => 35.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G402",
            'date' => date("2016-05-22"),
            'temperature' => 21.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G402",
            'date' => date("2016-05-23"),
            'temperature' => 19.7,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G402",
            'date' => date("2016-05-24"),
            'temperature' => 24.7,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G402",
            'date' => date("2016-05-25"),
            'temperature' => 30.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G402",
            'date' => date("2016-05-26"),
            'temperature' => 28.3,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G402",
            'date' => date("2016-05-27"),
            'temperature' => 21.2,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G402",
            'date' => date("2016-05-28"),
            'temperature' => 25.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G402",
            'date' => date("2016-05-29"),
            'temperature' => 26.5,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G402",
            'date' => date("2016-05-30"),
            'temperature' => 22.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G402",
            'date' => date("2016-05-31"),
            'temperature' => 29.3,
        ));

                DB::table('heatmap')->insert(
        array(
            'roomId' => "G508",
            'date' => date("2016-03-01"),
            'temperature' => 23.3,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G508",
            'date' => date("2016-03-02"),
            'temperature' => 27,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G508",
            'date' => date("2016-03-03"),
            'temperature' => 35.2,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G508",
            'date' => date("2016-03-04"),
            'temperature' => 21,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G508",
            'date' => date("2016-03-05"),
            'temperature' => 22,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G508",
            'date' => date("2016-03-06"),
            'temperature' => 33.4,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G508",
            'date' => date("2016-03-07"),
            'temperature' => 29.2,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G508",
            'date' => date("2016-03-08"),
            'temperature' => 22.9,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G508",
            'date' => date("2016-03-09"),
            'temperature' => 28,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G508",
            'date' => date("2016-03-10"),
            'temperature' => 22,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G508",
            'date' => date("2016-03-11"),
            'temperature' => 33.5,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G508",
            'date' => date("2016-03-12"),
            'temperature' => 24.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G508",
            'date' => date("2016-03-13"),
            'temperature' => 33.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G508",
            'date' => date("2016-03-14"),
            'temperature' => 13,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G508",
            'date' => date("2016-03-15"),
            'temperature' => 22,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G508",
            'date' => date("2016-03-16"),
            'temperature' => 33,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G508",
            'date' => date("2016-03-17"),
            'temperature' => 21,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G508",
            'date' => date("2016-03-18"),
            'temperature' => 34.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G508",
            'date' => date("2016-03-19"),
            'temperature' => 34.9,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G508",
            'date' => date("2016-03-20"),
            'temperature' => 22.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G508",
            'date' => date("2016-03-21"),
            'temperature' => 34.3,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G508",
            'date' => date("2016-03-22"),
            'temperature' => 26.7,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G508",
            'date' => date("2016-03-23"),
            'temperature' => 21.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G508",
            'date' => date("2016-03-24"),
            'temperature' => 14.3,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G508",
            'date' => date("2016-03-25"),
            'temperature' => 33.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G508",
            'date' => date("2016-03-26"),
            'temperature' => 33.7,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G508",
            'date' => date("2016-03-27"),
            'temperature' => 21.4,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G508",
            'date' => date("2016-03-28"),
            'temperature' => 32.9,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G508",
            'date' => date("2016-03-29"),
            'temperature' => 32,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G508",
            'date' => date("2016-03-30"),
            'temperature' => 35,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G508",
            'date' => date("2016-03-31"),
            'temperature' => 34.2,
        ));

                DB::table('heatmap')->insert(
        array(
            'roomId' => "G508",
            'date' => date("2016-04-01"),
            'temperature' => 23.9,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G508",
            'date' => date("2016-04-02"),
            'temperature' => 25,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G508",
            'date' => date("2016-04-03"),
            'temperature' => 25,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G508",
            'date' => date("2016-04-04"),
            'temperature' => 25,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G508",
            'date' => date("2016-04-05"),
            'temperature' => 28,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G508",
            'date' => date("2016-04-06"),
            'temperature' => 24,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G508",
            'date' => date("2016-04-07"),
            'temperature' => 34,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G508",
            'date' => date("2016-04-08"),
            'temperature' => 29,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G508",
            'date' => date("2016-04-09"),
            'temperature' => 24,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G508",
            'date' => date("2016-04-10"),
            'temperature' => 14,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G508",
            'date' => date("2016-04-11"),
            'temperature' => 23,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G508",
            'date' => date("2016-04-12"),
            'temperature' => 26,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G508",
            'date' => date("2016-04-13"),
            'temperature' => 21,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G508",
            'date' => date("2016-04-14"),
            'temperature' => 14,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G508",
            'date' => date("2016-04-15"),
            'temperature' => 34.4,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G508",
            'date' => date("2016-04-16"),
            'temperature' => 23.5,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G508",
            'date' => date("2016-04-17"),
            'temperature' => 27.3,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G508",
            'date' => date("2016-04-18"),
            'temperature' => 23.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G508",
            'date' => date("2016-04-19"),
            'temperature' => 34.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G508",
            'date' => date("2016-04-20"),
            'temperature' => 22.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G508",
            'date' => date("2016-04-21"),
            'temperature' => 23.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G508",
            'date' => date("2016-04-22"),
            'temperature' => 25.2,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G508",
            'date' => date("2016-04-23"),
            'temperature' => 24.3,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G508",
            'date' => date("2016-04-24"),
            'temperature' => 14.9,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G508",
            'date' => date("2016-04-25"),
            'temperature' => 23.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G508",
            'date' => date("2016-04-26"),
            'temperature' => 23.7,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G508",
            'date' => date("2016-04-27"),
            'temperature' => 24,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G508",
            'date' => date("2016-04-28"),
            'temperature' => 24,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G508",
            'date' => date("2016-04-29"),
            'temperature' => 24.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G508",
            'date' => date("2016-04-30"),
            'temperature' => 25.2,
        ));

                DB::table('heatmap')->insert(
        array(
            'roomId' => "G508",
            'date' => date("2016-05-01"),
            'temperature' => 26.9,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G508",
            'date' => date("2016-05-02"),
            'temperature' => 29,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G508",
            'date' => date("2016-05-03"),
            'temperature' => 21.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G508",
            'date' => date("2016-05-04"),
            'temperature' => 31,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G508",
            'date' => date("2016-05-05"),
            'temperature' => 27.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G508",
            'date' => date("2016-05-06"),
            'temperature' => 24.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G508",
            'date' => date("2016-05-07"),
            'temperature' => 23.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G508",
            'date' => date("2016-05-08"),
            'temperature' => 25.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G508",
            'date' => date("2016-05-09"),
            'temperature' => 26.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G508",
            'date' => date("2016-05-10"),
            'temperature' => 34.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G508",
            'date' => date("2016-05-11"),
            'temperature' => 24.5,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G508",
            'date' => date("2016-05-12"),
            'temperature' => 27.9,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G508",
            'date' => date("2016-05-13"),
            'temperature' => 28,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G508",
            'date' => date("2016-05-14"),
            'temperature' => 19.9,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G508",
            'date' => date("2016-05-15"),
            'temperature' => 19,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G508",
            'date' => date("2016-05-16"),
            'temperature' => 25,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G508",
            'date' => date("2016-05-17"),
            'temperature' => 28,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G508",
            'date' => date("2016-05-18"),
            'temperature' => 29.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G508",
            'date' => date("2016-05-19"),
            'temperature' => 21.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G508",
            'date' => date("2016-05-20"),
            'temperature' => 36.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G508",
            'date' => date("2016-05-21"),
            'temperature' => 35.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G508",
            'date' => date("2016-05-22"),
            'temperature' => 21.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G508",
            'date' => date("2016-05-23"),
            'temperature' => 19.7,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G508",
            'date' => date("2016-05-24"),
            'temperature' => 24.7,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G508",
            'date' => date("2016-05-25"),
            'temperature' => 30.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G508",
            'date' => date("2016-05-26"),
            'temperature' => 28.3,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G508",
            'date' => date("2016-05-27"),
            'temperature' => 21.2,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G508",
            'date' => date("2016-05-28"),
            'temperature' => 25.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G508",
            'date' => date("2016-05-29"),
            'temperature' => 26.5,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G508",
            'date' => date("2016-05-30"),
            'temperature' => 22.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G508",
            'date' => date("2016-05-31"),
            'temperature' => 29.3,
        ));

                DB::table('heatmap')->insert(
        array(
            'roomId' => "G603",
            'date' => date("2016-03-01"),
            'temperature' => 23.3,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G603",
            'date' => date("2016-03-02"),
            'temperature' => 27,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G603",
            'date' => date("2016-03-03"),
            'temperature' => 35.2,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G603",
            'date' => date("2016-03-04"),
            'temperature' => 21,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G603",
            'date' => date("2016-03-05"),
            'temperature' => 22,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G603",
            'date' => date("2016-03-06"),
            'temperature' => 33.4,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G603",
            'date' => date("2016-03-07"),
            'temperature' => 29.2,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G603",
            'date' => date("2016-03-08"),
            'temperature' => 22.9,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G603",
            'date' => date("2016-03-09"),
            'temperature' => 28,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G603",
            'date' => date("2016-03-10"),
            'temperature' => 22,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G603",
            'date' => date("2016-03-11"),
            'temperature' => 33.5,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G603",
            'date' => date("2016-03-12"),
            'temperature' => 24.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G603",
            'date' => date("2016-03-13"),
            'temperature' => 33.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G603",
            'date' => date("2016-03-14"),
            'temperature' => 13,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G603",
            'date' => date("2016-03-15"),
            'temperature' => 22,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G603",
            'date' => date("2016-03-16"),
            'temperature' => 33,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G603",
            'date' => date("2016-03-17"),
            'temperature' => 21,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G603",
            'date' => date("2016-03-18"),
            'temperature' => 34.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G603",
            'date' => date("2016-03-19"),
            'temperature' => 34.9,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G603",
            'date' => date("2016-03-20"),
            'temperature' => 22.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G603",
            'date' => date("2016-03-21"),
            'temperature' => 34.3,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G603",
            'date' => date("2016-03-22"),
            'temperature' => 26.7,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G603",
            'date' => date("2016-03-23"),
            'temperature' => 21.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G603",
            'date' => date("2016-03-24"),
            'temperature' => 14.3,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G603",
            'date' => date("2016-03-25"),
            'temperature' => 33.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G603",
            'date' => date("2016-03-26"),
            'temperature' => 33.7,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G603",
            'date' => date("2016-03-27"),
            'temperature' => 21.4,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G603",
            'date' => date("2016-03-28"),
            'temperature' => 32.9,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G603",
            'date' => date("2016-03-29"),
            'temperature' => 32,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G603",
            'date' => date("2016-03-30"),
            'temperature' => 35,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G603",
            'date' => date("2016-03-31"),
            'temperature' => 34.2,
        ));

                DB::table('heatmap')->insert(
        array(
            'roomId' => "G603",
            'date' => date("2016-04-01"),
            'temperature' => 23.9,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G603",
            'date' => date("2016-04-02"),
            'temperature' => 25,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G603",
            'date' => date("2016-04-03"),
            'temperature' => 25,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G603",
            'date' => date("2016-04-04"),
            'temperature' => 25,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G603",
            'date' => date("2016-04-05"),
            'temperature' => 28,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G603",
            'date' => date("2016-04-06"),
            'temperature' => 24,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G603",
            'date' => date("2016-04-07"),
            'temperature' => 34,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G603",
            'date' => date("2016-04-08"),
            'temperature' => 29,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G603",
            'date' => date("2016-04-09"),
            'temperature' => 24,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G603",
            'date' => date("2016-04-10"),
            'temperature' => 14,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G603",
            'date' => date("2016-04-11"),
            'temperature' => 23,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G603",
            'date' => date("2016-04-12"),
            'temperature' => 26,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G603",
            'date' => date("2016-04-13"),
            'temperature' => 21,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G603",
            'date' => date("2016-04-14"),
            'temperature' => 14,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G603",
            'date' => date("2016-04-15"),
            'temperature' => 34.4,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G603",
            'date' => date("2016-04-16"),
            'temperature' => 23.5,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G603",
            'date' => date("2016-04-17"),
            'temperature' => 27.3,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G603",
            'date' => date("2016-04-18"),
            'temperature' => 23.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G603",
            'date' => date("2016-04-19"),
            'temperature' => 34.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G603",
            'date' => date("2016-04-20"),
            'temperature' => 22.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G603",
            'date' => date("2016-04-21"),
            'temperature' => 23.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G603",
            'date' => date("2016-04-22"),
            'temperature' => 25.2,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G603",
            'date' => date("2016-04-23"),
            'temperature' => 24.3,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G603",
            'date' => date("2016-04-24"),
            'temperature' => 14.9,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G603",
            'date' => date("2016-04-25"),
            'temperature' => 23.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G603",
            'date' => date("2016-04-26"),
            'temperature' => 23.7,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G603",
            'date' => date("2016-04-27"),
            'temperature' => 24,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G603",
            'date' => date("2016-04-28"),
            'temperature' => 24,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G603",
            'date' => date("2016-04-29"),
            'temperature' => 24.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G603",
            'date' => date("2016-04-30"),
            'temperature' => 25.2,
        ));

                DB::table('heatmap')->insert(
        array(
            'roomId' => "G603",
            'date' => date("2016-05-01"),
            'temperature' => 26.9,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G603",
            'date' => date("2016-05-02"),
            'temperature' => 29,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G603",
            'date' => date("2016-05-03"),
            'temperature' => 21.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G603",
            'date' => date("2016-05-04"),
            'temperature' => 31,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G603",
            'date' => date("2016-05-05"),
            'temperature' => 27.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G603",
            'date' => date("2016-05-06"),
            'temperature' => 24.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G603",
            'date' => date("2016-05-07"),
            'temperature' => 23.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G603",
            'date' => date("2016-05-08"),
            'temperature' => 25.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G603",
            'date' => date("2016-05-09"),
            'temperature' => 26.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G603",
            'date' => date("2016-05-10"),
            'temperature' => 34.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G603",
            'date' => date("2016-05-11"),
            'temperature' => 24.5,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G603",
            'date' => date("2016-05-12"),
            'temperature' => 27.9,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G603",
            'date' => date("2016-05-13"),
            'temperature' => 28,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G603",
            'date' => date("2016-05-14"),
            'temperature' => 19.9,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G603",
            'date' => date("2016-05-15"),
            'temperature' => 19,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G603",
            'date' => date("2016-05-16"),
            'temperature' => 25,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G603",
            'date' => date("2016-05-17"),
            'temperature' => 28,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G603",
            'date' => date("2016-05-18"),
            'temperature' => 29.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G603",
            'date' => date("2016-05-19"),
            'temperature' => 21.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G603",
            'date' => date("2016-05-20"),
            'temperature' => 36.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G603",
            'date' => date("2016-05-21"),
            'temperature' => 35.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G603",
            'date' => date("2016-05-22"),
            'temperature' => 21.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G603",
            'date' => date("2016-05-23"),
            'temperature' => 19.7,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G603",
            'date' => date("2016-05-24"),
            'temperature' => 24.7,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G603",
            'date' => date("2016-05-25"),
            'temperature' => 30.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G603",
            'date' => date("2016-05-26"),
            'temperature' => 28.3,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G603",
            'date' => date("2016-05-27"),
            'temperature' => 21.2,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G603",
            'date' => date("2016-05-28"),
            'temperature' => 25.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G603",
            'date' => date("2016-05-29"),
            'temperature' => 26.5,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G603",
            'date' => date("2016-05-30"),
            'temperature' => 22.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G603",
            'date' => date("2016-05-31"),
            'temperature' => 29.3,
        ));

                DB::table('heatmap')->insert(
        array(
            'roomId' => "G703",
            'date' => date("2016-03-01"),
            'temperature' => 23.3,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G703",
            'date' => date("2016-03-02"),
            'temperature' => 27,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G703",
            'date' => date("2016-03-03"),
            'temperature' => 35.2,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G703",
            'date' => date("2016-03-04"),
            'temperature' => 21,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G703",
            'date' => date("2016-03-05"),
            'temperature' => 22,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G703",
            'date' => date("2016-03-06"),
            'temperature' => 33.4,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G703",
            'date' => date("2016-03-07"),
            'temperature' => 29.2,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G703",
            'date' => date("2016-03-08"),
            'temperature' => 22.9,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G703",
            'date' => date("2016-03-09"),
            'temperature' => 28,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G703",
            'date' => date("2016-03-10"),
            'temperature' => 22,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G703",
            'date' => date("2016-03-11"),
            'temperature' => 33.5,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G703",
            'date' => date("2016-03-12"),
            'temperature' => 24.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G703",
            'date' => date("2016-03-13"),
            'temperature' => 33.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G703",
            'date' => date("2016-03-14"),
            'temperature' => 13,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G703",
            'date' => date("2016-03-15"),
            'temperature' => 22,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G703",
            'date' => date("2016-03-16"),
            'temperature' => 33,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G703",
            'date' => date("2016-03-17"),
            'temperature' => 21,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G703",
            'date' => date("2016-03-18"),
            'temperature' => 34.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G703",
            'date' => date("2016-03-19"),
            'temperature' => 34.9,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G703",
            'date' => date("2016-03-20"),
            'temperature' => 22.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G703",
            'date' => date("2016-03-21"),
            'temperature' => 34.3,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G703",
            'date' => date("2016-03-22"),
            'temperature' => 26.7,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G703",
            'date' => date("2016-03-23"),
            'temperature' => 21.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G703",
            'date' => date("2016-03-24"),
            'temperature' => 14.3,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G703",
            'date' => date("2016-03-25"),
            'temperature' => 33.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G703",
            'date' => date("2016-03-26"),
            'temperature' => 33.7,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G703",
            'date' => date("2016-03-27"),
            'temperature' => 21.4,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G703",
            'date' => date("2016-03-28"),
            'temperature' => 32.9,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G703",
            'date' => date("2016-03-29"),
            'temperature' => 32,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G703",
            'date' => date("2016-03-30"),
            'temperature' => 35,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G703",
            'date' => date("2016-03-31"),
            'temperature' => 34.2,
        ));

                DB::table('heatmap')->insert(
        array(
            'roomId' => "G703",
            'date' => date("2016-04-01"),
            'temperature' => 23.9,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G703",
            'date' => date("2016-04-02"),
            'temperature' => 25,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G703",
            'date' => date("2016-04-03"),
            'temperature' => 25,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G703",
            'date' => date("2016-04-04"),
            'temperature' => 25,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G703",
            'date' => date("2016-04-05"),
            'temperature' => 28,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G703",
            'date' => date("2016-04-06"),
            'temperature' => 24,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G703",
            'date' => date("2016-04-07"),
            'temperature' => 34,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G703",
            'date' => date("2016-04-08"),
            'temperature' => 29,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G703",
            'date' => date("2016-04-09"),
            'temperature' => 24,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G703",
            'date' => date("2016-04-10"),
            'temperature' => 14,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G703",
            'date' => date("2016-04-11"),
            'temperature' => 23,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G703",
            'date' => date("2016-04-12"),
            'temperature' => 26,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G703",
            'date' => date("2016-04-13"),
            'temperature' => 21,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G703",
            'date' => date("2016-04-14"),
            'temperature' => 14,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G703",
            'date' => date("2016-04-15"),
            'temperature' => 34.4,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G703",
            'date' => date("2016-04-16"),
            'temperature' => 23.5,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G703",
            'date' => date("2016-04-17"),
            'temperature' => 27.3,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G703",
            'date' => date("2016-04-18"),
            'temperature' => 23.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G703",
            'date' => date("2016-04-19"),
            'temperature' => 34.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G703",
            'date' => date("2016-04-20"),
            'temperature' => 22.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G703",
            'date' => date("2016-04-21"),
            'temperature' => 23.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G703",
            'date' => date("2016-04-22"),
            'temperature' => 25.2,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G703",
            'date' => date("2016-04-23"),
            'temperature' => 24.3,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G703",
            'date' => date("2016-04-24"),
            'temperature' => 14.9,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G703",
            'date' => date("2016-04-25"),
            'temperature' => 23.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G703",
            'date' => date("2016-04-26"),
            'temperature' => 23.7,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G703",
            'date' => date("2016-04-27"),
            'temperature' => 24,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G703",
            'date' => date("2016-04-28"),
            'temperature' => 24,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G703",
            'date' => date("2016-04-29"),
            'temperature' => 24.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G703",
            'date' => date("2016-04-30"),
            'temperature' => 25.2,
        ));

                DB::table('heatmap')->insert(
        array(
            'roomId' => "G703",
            'date' => date("2016-05-01"),
            'temperature' => 26.9,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G703",
            'date' => date("2016-05-02"),
            'temperature' => 29,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G703",
            'date' => date("2016-05-03"),
            'temperature' => 21.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G703",
            'date' => date("2016-05-04"),
            'temperature' => 31,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G703",
            'date' => date("2016-05-05"),
            'temperature' => 27.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G703",
            'date' => date("2016-05-06"),
            'temperature' => 24.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G703",
            'date' => date("2016-05-07"),
            'temperature' => 23.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G703",
            'date' => date("2016-05-08"),
            'temperature' => 25.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G703",
            'date' => date("2016-05-09"),
            'temperature' => 26.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G703",
            'date' => date("2016-05-10"),
            'temperature' => 34.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G703",
            'date' => date("2016-05-11"),
            'temperature' => 24.5,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G703",
            'date' => date("2016-05-12"),
            'temperature' => 27.9,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G703",
            'date' => date("2016-05-13"),
            'temperature' => 28,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G703",
            'date' => date("2016-05-14"),
            'temperature' => 19.9,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G703",
            'date' => date("2016-05-15"),
            'temperature' => 19,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G703",
            'date' => date("2016-05-16"),
            'temperature' => 25,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G703",
            'date' => date("2016-05-17"),
            'temperature' => 28,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G703",
            'date' => date("2016-05-18"),
            'temperature' => 29.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G703",
            'date' => date("2016-05-19"),
            'temperature' => 21.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G703",
            'date' => date("2016-05-20"),
            'temperature' => 36.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G703",
            'date' => date("2016-05-21"),
            'temperature' => 35.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G703",
            'date' => date("2016-05-22"),
            'temperature' => 21.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G703",
            'date' => date("2016-05-23"),
            'temperature' => 19.7,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G703",
            'date' => date("2016-05-24"),
            'temperature' => 24.7,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G703",
            'date' => date("2016-05-25"),
            'temperature' => 30.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G703",
            'date' => date("2016-05-26"),
            'temperature' => 28.3,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G703",
            'date' => date("2016-05-27"),
            'temperature' => 21.2,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G703",
            'date' => date("2016-05-28"),
            'temperature' => 25.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G703",
            'date' => date("2016-05-29"),
            'temperature' => 26.5,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G703",
            'date' => date("2016-05-30"),
            'temperature' => 22.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G703",
            'date' => date("2016-05-31"),
            'temperature' => 29.3,
        ));

                DB::table('heatmap')->insert(
        array(
            'roomId' => "G003",
            'date' => date("2016-03-01"),
            'temperature' => 23.3,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G003",
            'date' => date("2016-03-02"),
            'temperature' => 27,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G003",
            'date' => date("2016-03-03"),
            'temperature' => 35.2,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G003",
            'date' => date("2016-03-04"),
            'temperature' => 21,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G003",
            'date' => date("2016-03-05"),
            'temperature' => 22,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G003",
            'date' => date("2016-03-06"),
            'temperature' => 33.4,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G003",
            'date' => date("2016-03-07"),
            'temperature' => 29.2,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G003",
            'date' => date("2016-03-08"),
            'temperature' => 22.9,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G003",
            'date' => date("2016-03-09"),
            'temperature' => 28,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G003",
            'date' => date("2016-03-10"),
            'temperature' => 22,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G003",
            'date' => date("2016-03-11"),
            'temperature' => 33.5,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G003",
            'date' => date("2016-03-12"),
            'temperature' => 24.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G003",
            'date' => date("2016-03-13"),
            'temperature' => 33.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G003",
            'date' => date("2016-03-14"),
            'temperature' => 13,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G003",
            'date' => date("2016-03-15"),
            'temperature' => 22,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G003",
            'date' => date("2016-03-16"),
            'temperature' => 33,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G003",
            'date' => date("2016-03-17"),
            'temperature' => 21,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G003",
            'date' => date("2016-03-18"),
            'temperature' => 34.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G003",
            'date' => date("2016-03-19"),
            'temperature' => 34.9,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G003",
            'date' => date("2016-03-20"),
            'temperature' => 22.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G003",
            'date' => date("2016-03-21"),
            'temperature' => 34.3,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G003",
            'date' => date("2016-03-22"),
            'temperature' => 26.7,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G003",
            'date' => date("2016-03-23"),
            'temperature' => 21.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G003",
            'date' => date("2016-03-24"),
            'temperature' => 14.3,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G003",
            'date' => date("2016-03-25"),
            'temperature' => 33.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G003",
            'date' => date("2016-03-26"),
            'temperature' => 33.7,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G003",
            'date' => date("2016-03-27"),
            'temperature' => 21.4,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G003",
            'date' => date("2016-03-28"),
            'temperature' => 32.9,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G003",
            'date' => date("2016-03-29"),
            'temperature' => 32,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G003",
            'date' => date("2016-03-30"),
            'temperature' => 35,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G003",
            'date' => date("2016-03-31"),
            'temperature' => 34.2,
        ));

                DB::table('heatmap')->insert(
        array(
            'roomId' => "G003",
            'date' => date("2016-04-01"),
            'temperature' => 23.9,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G003",
            'date' => date("2016-04-02"),
            'temperature' => 25,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G003",
            'date' => date("2016-04-03"),
            'temperature' => 25,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G003",
            'date' => date("2016-04-04"),
            'temperature' => 25,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G003",
            'date' => date("2016-04-05"),
            'temperature' => 28,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G003",
            'date' => date("2016-04-06"),
            'temperature' => 24,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G003",
            'date' => date("2016-04-07"),
            'temperature' => 34,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G003",
            'date' => date("2016-04-08"),
            'temperature' => 29,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G003",
            'date' => date("2016-04-09"),
            'temperature' => 24,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G003",
            'date' => date("2016-04-10"),
            'temperature' => 14,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G003",
            'date' => date("2016-04-11"),
            'temperature' => 23,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G003",
            'date' => date("2016-04-12"),
            'temperature' => 33.7,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G003",
            'date' => date("2016-04-13"),
            'temperature' => 23,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G003",
            'date' => date("2016-04-14"),
            'temperature' => 21.6,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G003",
            'date' => date("2016-04-15"),
            'temperature' => 14.4,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G003",
            'date' => date("2016-04-16"),
            'temperature' => 29.5,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G003",
            'date' => date("2016-04-17"),
            'temperature' => 17.3,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G003",
            'date' => date("2016-04-18"),
            'temperature' => 32.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G003",
            'date' => date("2016-04-19"),
            'temperature' => 35.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G003",
            'date' => date("2016-04-20"),
            'temperature' => 19.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G003",
            'date' => date("2016-04-21"),
            'temperature' => 15.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G003",
            'date' => date("2016-04-22"),
            'temperature' => 27.2,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G003",
            'date' => date("2016-04-23"),
            'temperature' => 22.3,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G003",
            'date' => date("2016-04-24"),
            'temperature' => 34.9,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G003",
            'date' => date("2016-04-25"),
            'temperature' => 14.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G003",
            'date' => date("2016-04-26"),
            'temperature' => 19.7,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G003",
            'date' => date("2016-04-27"),
            'temperature' => 35,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G003",
            'date' => date("2016-04-28"),
            'temperature' => 17,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G003",
            'date' => date("2016-04-29"),
            'temperature' => 29.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G003",
            'date' => date("2016-04-30"),
            'temperature' => 21.2,
        ));

                DB::table('heatmap')->insert(
        array(
            'roomId' => "G003",
            'date' => date("2016-05-01"),
            'temperature' => 14.9,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G003",
            'date' => date("2016-05-02"),
            'temperature' => 35,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G003",
            'date' => date("2016-05-03"),
            'temperature' => 17.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G003",
            'date' => date("2016-05-04"),
            'temperature' => 32,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G003",
            'date' => date("2016-05-05"),
            'temperature' => 32.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G003",
            'date' => date("2016-05-06"),
            'temperature' => 14.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G003",
            'date' => date("2016-05-07"),
            'temperature' => 32.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G003",
            'date' => date("2016-05-08"),
            'temperature' => 15.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G003",
            'date' => date("2016-05-09"),
            'temperature' => 15.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G003",
            'date' => date("2016-05-10"),
            'temperature' => 34.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G003",
            'date' => date("2016-05-11"),
            'temperature' => 17.5,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G003",
            'date' => date("2016-05-12"),
            'temperature' => 33.9,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G003",
            'date' => date("2016-05-13"),
            'temperature' => 22,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G003",
            'date' => date("2016-05-14"),
            'temperature' => 29.9,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G003",
            'date' => date("2016-05-15"),
            'temperature' => 19,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G003",
            'date' => date("2016-05-16"),
            'temperature' => 16,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G003",
            'date' => date("2016-05-17"),
            'temperature' => 33,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G003",
            'date' => date("2016-05-18"),
            'temperature' => 24.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G003",
            'date' => date("2016-05-19"),
            'temperature' => 26.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G003",
            'date' => date("2016-05-20"),
            'temperature' => 32.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G003",
            'date' => date("2016-05-21"),
            'temperature' => 15.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G003",
            'date' => date("2016-05-22"),
            'temperature' => 18.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G003",
            'date' => date("2016-05-23"),
            'temperature' => 18,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G003",
            'date' => date("2016-05-24"),
            'temperature' => 34.7,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G003",
            'date' => date("2016-05-25"),
            'temperature' => 31.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G003",
            'date' => date("2016-05-26"),
            'temperature' => 25.3,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G003",
            'date' => date("2016-05-27"),
            'temperature' => 19.2,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G003",
            'date' => date("2016-05-28"),
            'temperature' => 18.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G003",
            'date' => date("2016-05-29"),
            'temperature' => 16.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G003",
            'date' => date("2016-05-30"),
            'temperature' => 34.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G003",
            'date' => date("2016-05-31"),
            'temperature' => 19.3,
        ));

                DB::table('heatmap')->insert(
        array(
            'roomId' => "G116",
            'date' => date("2016-03-01"),
            'temperature' => 23.3,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G116",
            'date' => date("2016-03-02"),
            'temperature' => 27,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G116",
            'date' => date("2016-03-03"),
            'temperature' => 35.2,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G116",
            'date' => date("2016-03-04"),
            'temperature' => 21,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G116",
            'date' => date("2016-03-05"),
            'temperature' => 22,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G116",
            'date' => date("2016-03-06"),
            'temperature' => 33.4,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G116",
            'date' => date("2016-03-07"),
            'temperature' => 29.2,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G116",
            'date' => date("2016-03-08"),
            'temperature' => 22.9,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G116",
            'date' => date("2016-03-09"),
            'temperature' => 28,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G116",
            'date' => date("2016-03-10"),
            'temperature' => 22,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G116",
            'date' => date("2016-03-11"),
            'temperature' => 33.5,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G116",
            'date' => date("2016-03-12"),
            'temperature' => 24.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G116",
            'date' => date("2016-03-13"),
            'temperature' => 33.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G116",
            'date' => date("2016-03-14"),
            'temperature' => 13,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G116",
            'date' => date("2016-03-15"),
            'temperature' => 22,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G116",
            'date' => date("2016-03-16"),
            'temperature' => 33,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G116",
            'date' => date("2016-03-17"),
            'temperature' => 21,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G116",
            'date' => date("2016-03-18"),
            'temperature' => 34.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G116",
            'date' => date("2016-03-19"),
            'temperature' => 34.9,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G116",
            'date' => date("2016-03-20"),
            'temperature' => 22.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G116",
            'date' => date("2016-03-21"),
            'temperature' => 34.3,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G116",
            'date' => date("2016-03-22"),
            'temperature' => 26.7,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G116",
            'date' => date("2016-03-23"),
            'temperature' => 21.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G116",
            'date' => date("2016-03-24"),
            'temperature' => 14.3,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G116",
            'date' => date("2016-03-25"),
            'temperature' => 33.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G116",
            'date' => date("2016-03-26"),
            'temperature' => 33.7,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G116",
            'date' => date("2016-03-27"),
            'temperature' => 21.4,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G116",
            'date' => date("2016-03-28"),
            'temperature' => 32.9,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G116",
            'date' => date("2016-03-29"),
            'temperature' => 32,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G116",
            'date' => date("2016-03-30"),
            'temperature' => 35,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G116",
            'date' => date("2016-03-31"),
            'temperature' => 34.2,
        ));

                DB::table('heatmap')->insert(
        array(
            'roomId' => "G116",
            'date' => date("2016-04-01"),
            'temperature' => 23.9,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G116",
            'date' => date("2016-04-02"),
            'temperature' => 25,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G116",
            'date' => date("2016-04-03"),
            'temperature' => 25,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G116",
            'date' => date("2016-04-04"),
            'temperature' => 25,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G116",
            'date' => date("2016-04-05"),
            'temperature' => 28,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G116",
            'date' => date("2016-04-06"),
            'temperature' => 24,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G116",
            'date' => date("2016-04-07"),
            'temperature' => 34,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G116",
            'date' => date("2016-04-08"),
            'temperature' => 29,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G116",
            'date' => date("2016-04-09"),
            'temperature' => 24,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G116",
            'date' => date("2016-04-10"),
            'temperature' => 14,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G116",
            'date' => date("2016-04-11"),
            'temperature' => 23,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G116",
            'date' => date("2016-04-12"),
            'temperature' => 33.7,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G116",
            'date' => date("2016-04-13"),
            'temperature' => 23,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G116",
            'date' => date("2016-04-14"),
            'temperature' => 21.6,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G116",
            'date' => date("2016-04-15"),
            'temperature' => 14.4,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G116",
            'date' => date("2016-04-16"),
            'temperature' => 29.5,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G116",
            'date' => date("2016-04-17"),
            'temperature' => 17.3,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G116",
            'date' => date("2016-04-18"),
            'temperature' => 32.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G116",
            'date' => date("2016-04-19"),
            'temperature' => 35.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G116",
            'date' => date("2016-04-20"),
            'temperature' => 19.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G116",
            'date' => date("2016-04-21"),
            'temperature' => 15.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G116",
            'date' => date("2016-04-22"),
            'temperature' => 27.2,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G116",
            'date' => date("2016-04-23"),
            'temperature' => 22.3,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G116",
            'date' => date("2016-04-24"),
            'temperature' => 34.9,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G116",
            'date' => date("2016-04-25"),
            'temperature' => 14.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G116",
            'date' => date("2016-04-26"),
            'temperature' => 19.7,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G116",
            'date' => date("2016-04-27"),
            'temperature' => 35,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G116",
            'date' => date("2016-04-28"),
            'temperature' => 17,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G116",
            'date' => date("2016-04-29"),
            'temperature' => 29.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G116",
            'date' => date("2016-04-30"),
            'temperature' => 21.2,
        ));

                DB::table('heatmap')->insert(
        array(
            'roomId' => "G116",
            'date' => date("2016-05-01"),
            'temperature' => 14.9,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G116",
            'date' => date("2016-05-02"),
            'temperature' => 35,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G116",
            'date' => date("2016-05-03"),
            'temperature' => 17.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G116",
            'date' => date("2016-05-04"),
            'temperature' => 32,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G116",
            'date' => date("2016-05-05"),
            'temperature' => 32.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G116",
            'date' => date("2016-05-06"),
            'temperature' => 14.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G116",
            'date' => date("2016-05-07"),
            'temperature' => 32.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G116",
            'date' => date("2016-05-08"),
            'temperature' => 15.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G116",
            'date' => date("2016-05-09"),
            'temperature' => 15.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G116",
            'date' => date("2016-05-10"),
            'temperature' => 34.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G116",
            'date' => date("2016-05-11"),
            'temperature' => 17.5,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G116",
            'date' => date("2016-05-12"),
            'temperature' => 33.9,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G116",
            'date' => date("2016-05-13"),
            'temperature' => 22,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G116",
            'date' => date("2016-05-14"),
            'temperature' => 29.9,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G116",
            'date' => date("2016-05-15"),
            'temperature' => 19,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G116",
            'date' => date("2016-05-16"),
            'temperature' => 16,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G116",
            'date' => date("2016-05-17"),
            'temperature' => 33,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G116",
            'date' => date("2016-05-18"),
            'temperature' => 24.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G116",
            'date' => date("2016-05-19"),
            'temperature' => 26.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G116",
            'date' => date("2016-05-20"),
            'temperature' => 32.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G116",
            'date' => date("2016-05-21"),
            'temperature' => 15.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G116",
            'date' => date("2016-05-22"),
            'temperature' => 18.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G116",
            'date' => date("2016-05-23"),
            'temperature' => 18,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G116",
            'date' => date("2016-05-24"),
            'temperature' => 34.7,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G116",
            'date' => date("2016-05-25"),
            'temperature' => 31.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G116",
            'date' => date("2016-05-26"),
            'temperature' => 25.3,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G116",
            'date' => date("2016-05-27"),
            'temperature' => 19.2,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G116",
            'date' => date("2016-05-28"),
            'temperature' => 18.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G116",
            'date' => date("2016-05-29"),
            'temperature' => 16.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G116",
            'date' => date("2016-05-30"),
            'temperature' => 34.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G116",
            'date' => date("2016-05-31"),
            'temperature' => 19.3,
        ));

                DB::table('heatmap')->insert(
        array(
            'roomId' => "A207",
            'date' => date("2016-03-01"),
            'temperature' => 23.3,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A207",
            'date' => date("2016-03-02"),
            'temperature' => 27,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A207",
            'date' => date("2016-03-03"),
            'temperature' => 35.2,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A207",
            'date' => date("2016-03-04"),
            'temperature' => 21,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A207",
            'date' => date("2016-03-05"),
            'temperature' => 22,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A207",
            'date' => date("2016-03-06"),
            'temperature' => 33.4,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A207",
            'date' => date("2016-03-07"),
            'temperature' => 29.2,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A207",
            'date' => date("2016-03-08"),
            'temperature' => 22.9,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A207",
            'date' => date("2016-03-09"),
            'temperature' => 28,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A207",
            'date' => date("2016-03-10"),
            'temperature' => 22,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A207",
            'date' => date("2016-03-11"),
            'temperature' => 33.5,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A207",
            'date' => date("2016-03-12"),
            'temperature' => 24.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A207",
            'date' => date("2016-03-13"),
            'temperature' => 33.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A207",
            'date' => date("2016-03-14"),
            'temperature' => 13,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A207",
            'date' => date("2016-03-15"),
            'temperature' => 22,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A207",
            'date' => date("2016-03-16"),
            'temperature' => 33,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A207",
            'date' => date("2016-03-17"),
            'temperature' => 21,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A207",
            'date' => date("2016-03-18"),
            'temperature' => 34.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A207",
            'date' => date("2016-03-19"),
            'temperature' => 34.9,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A207",
            'date' => date("2016-03-20"),
            'temperature' => 22.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A207",
            'date' => date("2016-03-21"),
            'temperature' => 34.3,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A207",
            'date' => date("2016-03-22"),
            'temperature' => 26.7,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A207",
            'date' => date("2016-03-23"),
            'temperature' => 21.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A207",
            'date' => date("2016-03-24"),
            'temperature' => 14.3,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A207",
            'date' => date("2016-03-25"),
            'temperature' => 33.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A207",
            'date' => date("2016-03-26"),
            'temperature' => 33.7,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A207",
            'date' => date("2016-03-27"),
            'temperature' => 21.4,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A207",
            'date' => date("2016-03-28"),
            'temperature' => 32.9,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A207",
            'date' => date("2016-03-29"),
            'temperature' => 32,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A207",
            'date' => date("2016-03-30"),
            'temperature' => 35,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A207",
            'date' => date("2016-03-31"),
            'temperature' => 34.2,
        ));

                DB::table('heatmap')->insert(
        array(
            'roomId' => "A207",
            'date' => date("2016-04-01"),
            'temperature' => 23.9,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A207",
            'date' => date("2016-04-02"),
            'temperature' => 25,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A207",
            'date' => date("2016-04-03"),
            'temperature' => 25,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A207",
            'date' => date("2016-04-04"),
            'temperature' => 25,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A207",
            'date' => date("2016-04-05"),
            'temperature' => 28,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A207",
            'date' => date("2016-04-06"),
            'temperature' => 24,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A207",
            'date' => date("2016-04-07"),
            'temperature' => 34,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A207",
            'date' => date("2016-04-08"),
            'temperature' => 29,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A207",
            'date' => date("2016-04-09"),
            'temperature' => 24,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A207",
            'date' => date("2016-04-10"),
            'temperature' => 14,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A207",
            'date' => date("2016-04-11"),
            'temperature' => 23,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A207",
            'date' => date("2016-04-12"),
            'temperature' => 33.7,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A207",
            'date' => date("2016-04-13"),
            'temperature' => 23,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A207",
            'date' => date("2016-04-14"),
            'temperature' => 21.6,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A207",
            'date' => date("2016-04-15"),
            'temperature' => 14.4,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A207",
            'date' => date("2016-04-16"),
            'temperature' => 29.5,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A207",
            'date' => date("2016-04-17"),
            'temperature' => 17.3,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A207",
            'date' => date("2016-04-18"),
            'temperature' => 32.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A207",
            'date' => date("2016-04-19"),
            'temperature' => 35.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A207",
            'date' => date("2016-04-20"),
            'temperature' => 19.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A207",
            'date' => date("2016-04-21"),
            'temperature' => 15.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A207",
            'date' => date("2016-04-22"),
            'temperature' => 27.2,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A207",
            'date' => date("2016-04-23"),
            'temperature' => 22.3,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A207",
            'date' => date("2016-04-24"),
            'temperature' => 34.9,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A207",
            'date' => date("2016-04-25"),
            'temperature' => 14.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A207",
            'date' => date("2016-04-26"),
            'temperature' => 19.7,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A207",
            'date' => date("2016-04-27"),
            'temperature' => 35,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A207",
            'date' => date("2016-04-28"),
            'temperature' => 17,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A207",
            'date' => date("2016-04-29"),
            'temperature' => 29.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A207",
            'date' => date("2016-04-30"),
            'temperature' => 21.2,
        ));

                DB::table('heatmap')->insert(
        array(
            'roomId' => "A207",
            'date' => date("2016-05-01"),
            'temperature' => 14.9,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A207",
            'date' => date("2016-05-02"),
            'temperature' => 35,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A207",
            'date' => date("2016-05-03"),
            'temperature' => 17.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A207",
            'date' => date("2016-05-04"),
            'temperature' => 32,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A207",
            'date' => date("2016-05-05"),
            'temperature' => 32.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A207",
            'date' => date("2016-05-06"),
            'temperature' => 14.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A207",
            'date' => date("2016-05-07"),
            'temperature' => 32.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A207",
            'date' => date("2016-05-08"),
            'temperature' => 15.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A207",
            'date' => date("2016-05-09"),
            'temperature' => 15.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A207",
            'date' => date("2016-05-10"),
            'temperature' => 34.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A207",
            'date' => date("2016-05-11"),
            'temperature' => 17.5,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A207",
            'date' => date("2016-05-12"),
            'temperature' => 33.9,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A207",
            'date' => date("2016-05-13"),
            'temperature' => 22,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A207",
            'date' => date("2016-05-14"),
            'temperature' => 29.9,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A207",
            'date' => date("2016-05-15"),
            'temperature' => 19,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A207",
            'date' => date("2016-05-16"),
            'temperature' => 16,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A207",
            'date' => date("2016-05-17"),
            'temperature' => 33,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A207",
            'date' => date("2016-05-18"),
            'temperature' => 24.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A207",
            'date' => date("2016-05-19"),
            'temperature' => 26.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A207",
            'date' => date("2016-05-20"),
            'temperature' => 32.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A207",
            'date' => date("2016-05-21"),
            'temperature' => 15.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A207",
            'date' => date("2016-05-22"),
            'temperature' => 18.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A207",
            'date' => date("2016-05-23"),
            'temperature' => 18,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A207",
            'date' => date("2016-05-24"),
            'temperature' => 34.7,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A207",
            'date' => date("2016-05-25"),
            'temperature' => 31.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A207",
            'date' => date("2016-05-26"),
            'temperature' => 25.3,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A207",
            'date' => date("2016-05-27"),
            'temperature' => 19.2,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A207",
            'date' => date("2016-05-28"),
            'temperature' => 18.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A207",
            'date' => date("2016-05-29"),
            'temperature' => 16.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A207",
            'date' => date("2016-05-30"),
            'temperature' => 34.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A207",
            'date' => date("2016-05-31"),
            'temperature' => 19.3,
        ));

                DB::table('heatmap')->insert(
        array(
            'roomId' => "A302",
            'date' => date("2016-03-01"),
            'temperature' => 23.3,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A302",
            'date' => date("2016-03-02"),
            'temperature' => 27,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A302",
            'date' => date("2016-03-03"),
            'temperature' => 35.2,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A302",
            'date' => date("2016-03-04"),
            'temperature' => 21,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A302",
            'date' => date("2016-03-05"),
            'temperature' => 22,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A302",
            'date' => date("2016-03-06"),
            'temperature' => 33.4,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A302",
            'date' => date("2016-03-07"),
            'temperature' => 29.2,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A302",
            'date' => date("2016-03-08"),
            'temperature' => 22.9,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A302",
            'date' => date("2016-03-09"),
            'temperature' => 28,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A302",
            'date' => date("2016-03-10"),
            'temperature' => 22,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A302",
            'date' => date("2016-03-11"),
            'temperature' => 33.5,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A302",
            'date' => date("2016-03-12"),
            'temperature' => 24.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A302",
            'date' => date("2016-03-13"),
            'temperature' => 33.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A302",
            'date' => date("2016-03-14"),
            'temperature' => 13,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A302",
            'date' => date("2016-03-15"),
            'temperature' => 22,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A302",
            'date' => date("2016-03-16"),
            'temperature' => 33,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A302",
            'date' => date("2016-03-17"),
            'temperature' => 21,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A302",
            'date' => date("2016-03-18"),
            'temperature' => 34.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A302",
            'date' => date("2016-03-19"),
            'temperature' => 34.9,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A302",
            'date' => date("2016-03-20"),
            'temperature' => 22.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A302",
            'date' => date("2016-03-21"),
            'temperature' => 34.3,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A302",
            'date' => date("2016-03-22"),
            'temperature' => 26.7,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A302",
            'date' => date("2016-03-23"),
            'temperature' => 21.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A302",
            'date' => date("2016-03-24"),
            'temperature' => 14.3,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A302",
            'date' => date("2016-03-25"),
            'temperature' => 33.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A302",
            'date' => date("2016-03-26"),
            'temperature' => 33.7,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A302",
            'date' => date("2016-03-27"),
            'temperature' => 21.4,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A302",
            'date' => date("2016-03-28"),
            'temperature' => 32.9,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A302",
            'date' => date("2016-03-29"),
            'temperature' => 32,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A302",
            'date' => date("2016-03-30"),
            'temperature' => 35,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A302",
            'date' => date("2016-03-31"),
            'temperature' => 34.2,
        ));

                DB::table('heatmap')->insert(
        array(
            'roomId' => "A302",
            'date' => date("2016-04-01"),
            'temperature' => 23.9,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A302",
            'date' => date("2016-04-02"),
            'temperature' => 25,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A302",
            'date' => date("2016-04-03"),
            'temperature' => 25,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A302",
            'date' => date("2016-04-04"),
            'temperature' => 25,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A302",
            'date' => date("2016-04-05"),
            'temperature' => 28,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A302",
            'date' => date("2016-04-06"),
            'temperature' => 24,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A302",
            'date' => date("2016-04-07"),
            'temperature' => 34,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A302",
            'date' => date("2016-04-08"),
            'temperature' => 29,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A302",
            'date' => date("2016-04-09"),
            'temperature' => 24,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A302",
            'date' => date("2016-04-10"),
            'temperature' => 14,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A302",
            'date' => date("2016-04-11"),
            'temperature' => 23,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A302",
            'date' => date("2016-04-12"),
            'temperature' => 33.7,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A302",
            'date' => date("2016-04-13"),
            'temperature' => 23,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A302",
            'date' => date("2016-04-14"),
            'temperature' => 21.6,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A302",
            'date' => date("2016-04-15"),
            'temperature' => 14.4,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A302",
            'date' => date("2016-04-16"),
            'temperature' => 29.5,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A302",
            'date' => date("2016-04-17"),
            'temperature' => 17.3,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A302",
            'date' => date("2016-04-18"),
            'temperature' => 32.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A302",
            'date' => date("2016-04-19"),
            'temperature' => 35.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A302",
            'date' => date("2016-04-20"),
            'temperature' => 19.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A302",
            'date' => date("2016-04-21"),
            'temperature' => 15.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A302",
            'date' => date("2016-04-22"),
            'temperature' => 27.2,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A302",
            'date' => date("2016-04-23"),
            'temperature' => 22.3,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A302",
            'date' => date("2016-04-24"),
            'temperature' => 34.9,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A302",
            'date' => date("2016-04-25"),
            'temperature' => 14.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A302",
            'date' => date("2016-04-26"),
            'temperature' => 19.7,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A302",
            'date' => date("2016-04-27"),
            'temperature' => 35,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A302",
            'date' => date("2016-04-28"),
            'temperature' => 17,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A302",
            'date' => date("2016-04-29"),
            'temperature' => 29.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A302",
            'date' => date("2016-04-30"),
            'temperature' => 21.2,
        ));

                DB::table('heatmap')->insert(
        array(
            'roomId' => "A302",
            'date' => date("2016-05-01"),
            'temperature' => 14.9,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A302",
            'date' => date("2016-05-02"),
            'temperature' => 35,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A302",
            'date' => date("2016-05-03"),
            'temperature' => 17.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A302",
            'date' => date("2016-05-04"),
            'temperature' => 32,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A302",
            'date' => date("2016-05-05"),
            'temperature' => 32.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A302",
            'date' => date("2016-05-06"),
            'temperature' => 14.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A302",
            'date' => date("2016-05-07"),
            'temperature' => 32.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A302",
            'date' => date("2016-05-08"),
            'temperature' => 15.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A302",
            'date' => date("2016-05-09"),
            'temperature' => 15.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A302",
            'date' => date("2016-05-10"),
            'temperature' => 34.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A302",
            'date' => date("2016-05-11"),
            'temperature' => 17.5,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A302",
            'date' => date("2016-05-12"),
            'temperature' => 33.9,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A302",
            'date' => date("2016-05-13"),
            'temperature' => 22,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A302",
            'date' => date("2016-05-14"),
            'temperature' => 29.9,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A302",
            'date' => date("2016-05-15"),
            'temperature' => 19,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A302",
            'date' => date("2016-05-16"),
            'temperature' => 16,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A302",
            'date' => date("2016-05-17"),
            'temperature' => 33,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A302",
            'date' => date("2016-05-18"),
            'temperature' => 24.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A302",
            'date' => date("2016-05-19"),
            'temperature' => 26.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A302",
            'date' => date("2016-05-20"),
            'temperature' => 32.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A302",
            'date' => date("2016-05-21"),
            'temperature' => 15.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A302",
            'date' => date("2016-05-22"),
            'temperature' => 18.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A302",
            'date' => date("2016-05-23"),
            'temperature' => 18,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A302",
            'date' => date("2016-05-24"),
            'temperature' => 34.7,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A302",
            'date' => date("2016-05-25"),
            'temperature' => 31.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A302",
            'date' => date("2016-05-26"),
            'temperature' => 25.3,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A302",
            'date' => date("2016-05-27"),
            'temperature' => 19.2,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A302",
            'date' => date("2016-05-28"),
            'temperature' => 18.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A302",
            'date' => date("2016-05-29"),
            'temperature' => 16.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A302",
            'date' => date("2016-05-30"),
            'temperature' => 34.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A302",
            'date' => date("2016-05-31"),
            'temperature' => 19.3,
        ));

                DB::table('heatmap')->insert(
        array(
            'roomId' => "B408",
            'date' => date("2016-03-01"),
            'temperature' => 23.3,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B408",
            'date' => date("2016-03-02"),
            'temperature' => 27,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B408",
            'date' => date("2016-03-03"),
            'temperature' => 35.2,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B408",
            'date' => date("2016-03-04"),
            'temperature' => 21,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B408",
            'date' => date("2016-03-05"),
            'temperature' => 22,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B408",
            'date' => date("2016-03-06"),
            'temperature' => 33.4,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B408",
            'date' => date("2016-03-07"),
            'temperature' => 29.2,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B408",
            'date' => date("2016-03-08"),
            'temperature' => 22.9,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B408",
            'date' => date("2016-03-09"),
            'temperature' => 28,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B408",
            'date' => date("2016-03-10"),
            'temperature' => 22,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B408",
            'date' => date("2016-03-11"),
            'temperature' => 33.5,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B408",
            'date' => date("2016-03-12"),
            'temperature' => 24.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B408",
            'date' => date("2016-03-13"),
            'temperature' => 33.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B408",
            'date' => date("2016-03-14"),
            'temperature' => 13,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B408",
            'date' => date("2016-03-15"),
            'temperature' => 22,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B408",
            'date' => date("2016-03-16"),
            'temperature' => 33,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B408",
            'date' => date("2016-03-17"),
            'temperature' => 21,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B408",
            'date' => date("2016-03-18"),
            'temperature' => 34.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B408",
            'date' => date("2016-03-19"),
            'temperature' => 34.9,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B408",
            'date' => date("2016-03-20"),
            'temperature' => 22.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B408",
            'date' => date("2016-03-21"),
            'temperature' => 34.3,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B408",
            'date' => date("2016-03-22"),
            'temperature' => 26.7,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B408",
            'date' => date("2016-03-23"),
            'temperature' => 21.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B408",
            'date' => date("2016-03-24"),
            'temperature' => 14.3,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B408",
            'date' => date("2016-03-25"),
            'temperature' => 33.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B408",
            'date' => date("2016-03-26"),
            'temperature' => 33.7,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B408",
            'date' => date("2016-03-27"),
            'temperature' => 21.4,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B408",
            'date' => date("2016-03-28"),
            'temperature' => 32.9,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B408",
            'date' => date("2016-03-29"),
            'temperature' => 32,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B408",
            'date' => date("2016-03-30"),
            'temperature' => 35,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B408",
            'date' => date("2016-03-31"),
            'temperature' => 34.2,
        ));

                DB::table('heatmap')->insert(
        array(
            'roomId' => "B408",
            'date' => date("2016-04-01"),
            'temperature' => 23.9,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B408",
            'date' => date("2016-04-02"),
            'temperature' => 25,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B408",
            'date' => date("2016-04-03"),
            'temperature' => 25,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B408",
            'date' => date("2016-04-04"),
            'temperature' => 25,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B408",
            'date' => date("2016-04-05"),
            'temperature' => 28,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B408",
            'date' => date("2016-04-06"),
            'temperature' => 24,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B408",
            'date' => date("2016-04-07"),
            'temperature' => 34,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B408",
            'date' => date("2016-04-08"),
            'temperature' => 29,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B408",
            'date' => date("2016-04-09"),
            'temperature' => 24,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B408",
            'date' => date("2016-04-10"),
            'temperature' => 14,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B408",
            'date' => date("2016-04-11"),
            'temperature' => 23,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B408",
            'date' => date("2016-04-12"),
            'temperature' => 33.7,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B408",
            'date' => date("2016-04-13"),
            'temperature' => 23,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B408",
            'date' => date("2016-04-14"),
            'temperature' => 21.6,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B408",
            'date' => date("2016-04-15"),
            'temperature' => 14.4,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B408",
            'date' => date("2016-04-16"),
            'temperature' => 29.5,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B408",
            'date' => date("2016-04-17"),
            'temperature' => 17.3,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B408",
            'date' => date("2016-04-18"),
            'temperature' => 32.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B408",
            'date' => date("2016-04-19"),
            'temperature' => 35.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B408",
            'date' => date("2016-04-20"),
            'temperature' => 19.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B408",
            'date' => date("2016-04-21"),
            'temperature' => 15.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B408",
            'date' => date("2016-04-22"),
            'temperature' => 27.2,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B408",
            'date' => date("2016-04-23"),
            'temperature' => 22.3,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B408",
            'date' => date("2016-04-24"),
            'temperature' => 34.9,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B408",
            'date' => date("2016-04-25"),
            'temperature' => 14.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B408",
            'date' => date("2016-04-26"),
            'temperature' => 19.7,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B408",
            'date' => date("2016-04-27"),
            'temperature' => 35,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B408",
            'date' => date("2016-04-28"),
            'temperature' => 17,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B408",
            'date' => date("2016-04-29"),
            'temperature' => 29.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B408",
            'date' => date("2016-04-30"),
            'temperature' => 21.2,
        ));

                DB::table('heatmap')->insert(
        array(
            'roomId' => "B408",
            'date' => date("2016-05-01"),
            'temperature' => 14.9,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B408",
            'date' => date("2016-05-02"),
            'temperature' => 35,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B408",
            'date' => date("2016-05-03"),
            'temperature' => 17.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B408",
            'date' => date("2016-05-04"),
            'temperature' => 32,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B408",
            'date' => date("2016-05-05"),
            'temperature' => 32.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B408",
            'date' => date("2016-05-06"),
            'temperature' => 14.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B408",
            'date' => date("2016-05-07"),
            'temperature' => 32.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B408",
            'date' => date("2016-05-08"),
            'temperature' => 15.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B408",
            'date' => date("2016-05-09"),
            'temperature' => 15.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B408",
            'date' => date("2016-05-10"),
            'temperature' => 34.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B408",
            'date' => date("2016-05-11"),
            'temperature' => 17.5,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B408",
            'date' => date("2016-05-12"),
            'temperature' => 33.9,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B408",
            'date' => date("2016-05-13"),
            'temperature' => 22,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B408",
            'date' => date("2016-05-14"),
            'temperature' => 29.9,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B408",
            'date' => date("2016-05-15"),
            'temperature' => 19,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B408",
            'date' => date("2016-05-16"),
            'temperature' => 16,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B408",
            'date' => date("2016-05-17"),
            'temperature' => 33,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B408",
            'date' => date("2016-05-18"),
            'temperature' => 24.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B408",
            'date' => date("2016-05-19"),
            'temperature' => 26.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B408",
            'date' => date("2016-05-20"),
            'temperature' => 32.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B408",
            'date' => date("2016-05-21"),
            'temperature' => 15.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B408",
            'date' => date("2016-05-22"),
            'temperature' => 18.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B408",
            'date' => date("2016-05-23"),
            'temperature' => 18,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B408",
            'date' => date("2016-05-24"),
            'temperature' => 34.7,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B408",
            'date' => date("2016-05-25"),
            'temperature' => 31.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B408",
            'date' => date("2016-05-26"),
            'temperature' => 25.3,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B408",
            'date' => date("2016-05-27"),
            'temperature' => 19.2,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B408",
            'date' => date("2016-05-28"),
            'temperature' => 18.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B408",
            'date' => date("2016-05-29"),
            'temperature' => 16.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B408",
            'date' => date("2016-05-30"),
            'temperature' => 34.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B408",
            'date' => date("2016-05-31"),
            'temperature' => 19.3,
        ));

                DB::table('heatmap')->insert(
        array(
            'roomId' => "B507",
            'date' => date("2016-03-01"),
            'temperature' => 23.3,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B507",
            'date' => date("2016-03-02"),
            'temperature' => 27,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B507",
            'date' => date("2016-03-03"),
            'temperature' => 35.2,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B507",
            'date' => date("2016-03-04"),
            'temperature' => 21,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B507",
            'date' => date("2016-03-05"),
            'temperature' => 22,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B507",
            'date' => date("2016-03-06"),
            'temperature' => 33.4,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B507",
            'date' => date("2016-03-07"),
            'temperature' => 29.2,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B507",
            'date' => date("2016-03-08"),
            'temperature' => 22.9,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B507",
            'date' => date("2016-03-09"),
            'temperature' => 28,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B507",
            'date' => date("2016-03-10"),
            'temperature' => 22,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B507",
            'date' => date("2016-03-11"),
            'temperature' => 33.5,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B507",
            'date' => date("2016-03-12"),
            'temperature' => 24.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B507",
            'date' => date("2016-03-13"),
            'temperature' => 33.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B507",
            'date' => date("2016-03-14"),
            'temperature' => 13,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B507",
            'date' => date("2016-03-15"),
            'temperature' => 22,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B507",
            'date' => date("2016-03-16"),
            'temperature' => 33,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B507",
            'date' => date("2016-03-17"),
            'temperature' => 21,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B507",
            'date' => date("2016-03-18"),
            'temperature' => 34.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B507",
            'date' => date("2016-03-19"),
            'temperature' => 34.9,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B507",
            'date' => date("2016-03-20"),
            'temperature' => 22.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B507",
            'date' => date("2016-03-21"),
            'temperature' => 34.3,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B507",
            'date' => date("2016-03-22"),
            'temperature' => 26.7,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B507",
            'date' => date("2016-03-23"),
            'temperature' => 21.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B507",
            'date' => date("2016-03-24"),
            'temperature' => 14.3,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B507",
            'date' => date("2016-03-25"),
            'temperature' => 33.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B507",
            'date' => date("2016-03-26"),
            'temperature' => 33.7,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B507",
            'date' => date("2016-03-27"),
            'temperature' => 21.4,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B507",
            'date' => date("2016-03-28"),
            'temperature' => 32.9,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B507",
            'date' => date("2016-03-29"),
            'temperature' => 32,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B507",
            'date' => date("2016-03-30"),
            'temperature' => 35,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B507",
            'date' => date("2016-03-31"),
            'temperature' => 34.2,
        ));

                DB::table('heatmap')->insert(
        array(
            'roomId' => "B507",
            'date' => date("2016-04-01"),
            'temperature' => 23.9,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B507",
            'date' => date("2016-04-02"),
            'temperature' => 25,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B507",
            'date' => date("2016-04-03"),
            'temperature' => 25,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B507",
            'date' => date("2016-04-04"),
            'temperature' => 25,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B507",
            'date' => date("2016-04-05"),
            'temperature' => 28,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B507",
            'date' => date("2016-04-06"),
            'temperature' => 24,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B507",
            'date' => date("2016-04-07"),
            'temperature' => 34,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B507",
            'date' => date("2016-04-08"),
            'temperature' => 29,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B507",
            'date' => date("2016-04-09"),
            'temperature' => 24,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B507",
            'date' => date("2016-04-10"),
            'temperature' => 14,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B507",
            'date' => date("2016-04-11"),
            'temperature' => 23,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B507",
            'date' => date("2016-04-12"),
            'temperature' => 33.7,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B507",
            'date' => date("2016-04-13"),
            'temperature' => 23,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B507",
            'date' => date("2016-04-14"),
            'temperature' => 21.6,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B507",
            'date' => date("2016-04-15"),
            'temperature' => 14.4,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B507",
            'date' => date("2016-04-16"),
            'temperature' => 29.5,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B507",
            'date' => date("2016-04-17"),
            'temperature' => 17.3,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B507",
            'date' => date("2016-04-18"),
            'temperature' => 32.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B507",
            'date' => date("2016-04-19"),
            'temperature' => 35.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B507",
            'date' => date("2016-04-20"),
            'temperature' => 19.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B507",
            'date' => date("2016-04-21"),
            'temperature' => 15.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B507",
            'date' => date("2016-04-22"),
            'temperature' => 27.2,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B507",
            'date' => date("2016-04-23"),
            'temperature' => 22.3,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B507",
            'date' => date("2016-04-24"),
            'temperature' => 34.9,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B507",
            'date' => date("2016-04-25"),
            'temperature' => 14.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B507",
            'date' => date("2016-04-26"),
            'temperature' => 19.7,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B507",
            'date' => date("2016-04-27"),
            'temperature' => 35,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B507",
            'date' => date("2016-04-28"),
            'temperature' => 17,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B507",
            'date' => date("2016-04-29"),
            'temperature' => 29.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B507",
            'date' => date("2016-04-30"),
            'temperature' => 21.2,
        ));

                DB::table('heatmap')->insert(
        array(
            'roomId' => "B507",
            'date' => date("2016-05-01"),
            'temperature' => 14.9,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B507",
            'date' => date("2016-05-02"),
            'temperature' => 35,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B507",
            'date' => date("2016-05-03"),
            'temperature' => 17.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B507",
            'date' => date("2016-05-04"),
            'temperature' => 32,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B507",
            'date' => date("2016-05-05"),
            'temperature' => 32.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B507",
            'date' => date("2016-05-06"),
            'temperature' => 14.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B507",
            'date' => date("2016-05-07"),
            'temperature' => 32.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B507",
            'date' => date("2016-05-08"),
            'temperature' => 15.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B507",
            'date' => date("2016-05-09"),
            'temperature' => 15.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B507",
            'date' => date("2016-05-10"),
            'temperature' => 34.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B507",
            'date' => date("2016-05-11"),
            'temperature' => 17.5,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B507",
            'date' => date("2016-05-12"),
            'temperature' => 33.9,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B507",
            'date' => date("2016-05-13"),
            'temperature' => 22,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B507",
            'date' => date("2016-05-14"),
            'temperature' => 29.9,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B507",
            'date' => date("2016-05-15"),
            'temperature' => 19,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B507",
            'date' => date("2016-05-16"),
            'temperature' => 16,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B507",
            'date' => date("2016-05-17"),
            'temperature' => 33,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B507",
            'date' => date("2016-05-18"),
            'temperature' => 24.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B507",
            'date' => date("2016-05-19"),
            'temperature' => 26.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B507",
            'date' => date("2016-05-20"),
            'temperature' => 32.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B507",
            'date' => date("2016-05-21"),
            'temperature' => 15.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B507",
            'date' => date("2016-05-22"),
            'temperature' => 18.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B507",
            'date' => date("2016-05-23"),
            'temperature' => 18,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B507",
            'date' => date("2016-05-24"),
            'temperature' => 34.7,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B507",
            'date' => date("2016-05-25"),
            'temperature' => 31.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B507",
            'date' => date("2016-05-26"),
            'temperature' => 25.3,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B507",
            'date' => date("2016-05-27"),
            'temperature' => 19.2,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B507",
            'date' => date("2016-05-28"),
            'temperature' => 18.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B507",
            'date' => date("2016-05-29"),
            'temperature' => 16.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B507",
            'date' => date("2016-05-30"),
            'temperature' => 34.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B507",
            'date' => date("2016-05-31"),
            'temperature' => 19.3,
        ));

                DB::table('heatmap')->insert(
        array(
            'roomId' => "B603",
            'date' => date("2016-03-01"),
            'temperature' => 23.3,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B603",
            'date' => date("2016-03-02"),
            'temperature' => 27,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B603",
            'date' => date("2016-03-03"),
            'temperature' => 35.2,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B603",
            'date' => date("2016-03-04"),
            'temperature' => 21,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B603",
            'date' => date("2016-03-05"),
            'temperature' => 22,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B603",
            'date' => date("2016-03-06"),
            'temperature' => 33.4,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B603",
            'date' => date("2016-03-07"),
            'temperature' => 29.2,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B603",
            'date' => date("2016-03-08"),
            'temperature' => 22.9,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B603",
            'date' => date("2016-03-09"),
            'temperature' => 28,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B603",
            'date' => date("2016-03-10"),
            'temperature' => 22,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B603",
            'date' => date("2016-03-11"),
            'temperature' => 33.5,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B603",
            'date' => date("2016-03-12"),
            'temperature' => 24.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B603",
            'date' => date("2016-03-13"),
            'temperature' => 33.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B603",
            'date' => date("2016-03-14"),
            'temperature' => 13,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B603",
            'date' => date("2016-03-15"),
            'temperature' => 22,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B603",
            'date' => date("2016-03-16"),
            'temperature' => 33,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B603",
            'date' => date("2016-03-17"),
            'temperature' => 21,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B603",
            'date' => date("2016-03-18"),
            'temperature' => 34.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B603",
            'date' => date("2016-03-19"),
            'temperature' => 34.9,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B603",
            'date' => date("2016-03-20"),
            'temperature' => 22.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B603",
            'date' => date("2016-03-21"),
            'temperature' => 34.3,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B603",
            'date' => date("2016-03-22"),
            'temperature' => 26.7,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B603",
            'date' => date("2016-03-23"),
            'temperature' => 21.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B603",
            'date' => date("2016-03-24"),
            'temperature' => 14.3,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B603",
            'date' => date("2016-03-25"),
            'temperature' => 33.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B603",
            'date' => date("2016-03-26"),
            'temperature' => 33.7,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B603",
            'date' => date("2016-03-27"),
            'temperature' => 21.4,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B603",
            'date' => date("2016-03-28"),
            'temperature' => 32.9,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B603",
            'date' => date("2016-03-29"),
            'temperature' => 32,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B603",
            'date' => date("2016-03-30"),
            'temperature' => 35,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B603",
            'date' => date("2016-03-31"),
            'temperature' => 34.2,
        ));

                DB::table('heatmap')->insert(
        array(
            'roomId' => "B603",
            'date' => date("2016-04-01"),
            'temperature' => 23.9,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B603",
            'date' => date("2016-04-02"),
            'temperature' => 25,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B603",
            'date' => date("2016-04-03"),
            'temperature' => 25,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B603",
            'date' => date("2016-04-04"),
            'temperature' => 25,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B603",
            'date' => date("2016-04-05"),
            'temperature' => 28,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B603",
            'date' => date("2016-04-06"),
            'temperature' => 24,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B603",
            'date' => date("2016-04-07"),
            'temperature' => 34,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B603",
            'date' => date("2016-04-08"),
            'temperature' => 29,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B603",
            'date' => date("2016-04-09"),
            'temperature' => 24,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B603",
            'date' => date("2016-04-10"),
            'temperature' => 14,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B603",
            'date' => date("2016-04-11"),
            'temperature' => 23,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B603",
            'date' => date("2016-04-12"),
            'temperature' => 33.7,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B603",
            'date' => date("2016-04-13"),
            'temperature' => 23,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B603",
            'date' => date("2016-04-14"),
            'temperature' => 21.6,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B603",
            'date' => date("2016-04-15"),
            'temperature' => 14.4,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B603",
            'date' => date("2016-04-16"),
            'temperature' => 29.5,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B603",
            'date' => date("2016-04-17"),
            'temperature' => 17.3,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B603",
            'date' => date("2016-04-18"),
            'temperature' => 32.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B603",
            'date' => date("2016-04-19"),
            'temperature' => 35.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B603",
            'date' => date("2016-04-20"),
            'temperature' => 19.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B603",
            'date' => date("2016-04-21"),
            'temperature' => 15.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B603",
            'date' => date("2016-04-22"),
            'temperature' => 27.2,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B603",
            'date' => date("2016-04-23"),
            'temperature' => 22.3,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B603",
            'date' => date("2016-04-24"),
            'temperature' => 34.9,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B603",
            'date' => date("2016-04-25"),
            'temperature' => 14.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B603",
            'date' => date("2016-04-26"),
            'temperature' => 19.7,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B603",
            'date' => date("2016-04-27"),
            'temperature' => 35,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B603",
            'date' => date("2016-04-28"),
            'temperature' => 17,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B603",
            'date' => date("2016-04-29"),
            'temperature' => 29.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B603",
            'date' => date("2016-04-30"),
            'temperature' => 21.2,
        ));

                DB::table('heatmap')->insert(
        array(
            'roomId' => "B603",
            'date' => date("2016-05-01"),
            'temperature' => 14.9,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B603",
            'date' => date("2016-05-02"),
            'temperature' => 35,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B603",
            'date' => date("2016-05-03"),
            'temperature' => 17.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B603",
            'date' => date("2016-05-04"),
            'temperature' => 32,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B603",
            'date' => date("2016-05-05"),
            'temperature' => 32.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B603",
            'date' => date("2016-05-06"),
            'temperature' => 14.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B603",
            'date' => date("2016-05-07"),
            'temperature' => 32.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B603",
            'date' => date("2016-05-08"),
            'temperature' => 15.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B603",
            'date' => date("2016-05-09"),
            'temperature' => 15.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B603",
            'date' => date("2016-05-10"),
            'temperature' => 34.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B603",
            'date' => date("2016-05-11"),
            'temperature' => 17.5,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B603",
            'date' => date("2016-05-12"),
            'temperature' => 33.9,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B603",
            'date' => date("2016-05-13"),
            'temperature' => 22,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B603",
            'date' => date("2016-05-14"),
            'temperature' => 29.9,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B603",
            'date' => date("2016-05-15"),
            'temperature' => 19,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B603",
            'date' => date("2016-05-16"),
            'temperature' => 16,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B603",
            'date' => date("2016-05-17"),
            'temperature' => 33,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B603",
            'date' => date("2016-05-18"),
            'temperature' => 24.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B603",
            'date' => date("2016-05-19"),
            'temperature' => 26.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B603",
            'date' => date("2016-05-20"),
            'temperature' => 32.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B603",
            'date' => date("2016-05-21"),
            'temperature' => 15.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B603",
            'date' => date("2016-05-22"),
            'temperature' => 18.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B603",
            'date' => date("2016-05-23"),
            'temperature' => 18,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B603",
            'date' => date("2016-05-24"),
            'temperature' => 34.7,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B603",
            'date' => date("2016-05-25"),
            'temperature' => 31.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B603",
            'date' => date("2016-05-26"),
            'temperature' => 25.3,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B603",
            'date' => date("2016-05-27"),
            'temperature' => 19.2,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B603",
            'date' => date("2016-05-28"),
            'temperature' => 18.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B603",
            'date' => date("2016-05-29"),
            'temperature' => 16.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B603",
            'date' => date("2016-05-30"),
            'temperature' => 34.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B603",
            'date' => date("2016-05-31"),
            'temperature' => 19.3,
        ));

                DB::table('heatmap')->insert(
        array(
            'roomId' => "G706",
            'date' => date("2016-03-01"),
            'temperature' => 23.3,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G706",
            'date' => date("2016-03-02"),
            'temperature' => 27,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G706",
            'date' => date("2016-03-03"),
            'temperature' => 35.2,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G706",
            'date' => date("2016-03-04"),
            'temperature' => 21,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G706",
            'date' => date("2016-03-05"),
            'temperature' => 22,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G706",
            'date' => date("2016-03-06"),
            'temperature' => 33.4,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G706",
            'date' => date("2016-03-07"),
            'temperature' => 29.2,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G706",
            'date' => date("2016-03-08"),
            'temperature' => 22.9,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G706",
            'date' => date("2016-03-09"),
            'temperature' => 28,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G706",
            'date' => date("2016-03-10"),
            'temperature' => 22,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G706",
            'date' => date("2016-03-11"),
            'temperature' => 33.5,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G706",
            'date' => date("2016-03-12"),
            'temperature' => 24.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G706",
            'date' => date("2016-03-13"),
            'temperature' => 33.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G706",
            'date' => date("2016-03-14"),
            'temperature' => 13,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G706",
            'date' => date("2016-03-15"),
            'temperature' => 22,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G706",
            'date' => date("2016-03-16"),
            'temperature' => 33,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G706",
            'date' => date("2016-03-17"),
            'temperature' => 21,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G706",
            'date' => date("2016-03-18"),
            'temperature' => 34.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G706",
            'date' => date("2016-03-19"),
            'temperature' => 34.9,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G706",
            'date' => date("2016-03-20"),
            'temperature' => 22.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G706",
            'date' => date("2016-03-21"),
            'temperature' => 34.3,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G706",
            'date' => date("2016-03-22"),
            'temperature' => 26.7,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G706",
            'date' => date("2016-03-23"),
            'temperature' => 21.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G706",
            'date' => date("2016-03-24"),
            'temperature' => 14.3,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G706",
            'date' => date("2016-03-25"),
            'temperature' => 33.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G706",
            'date' => date("2016-03-26"),
            'temperature' => 33.7,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G706",
            'date' => date("2016-03-27"),
            'temperature' => 21.4,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G706",
            'date' => date("2016-03-28"),
            'temperature' => 32.9,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G706",
            'date' => date("2016-03-29"),
            'temperature' => 32,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G706",
            'date' => date("2016-03-30"),
            'temperature' => 35,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G706",
            'date' => date("2016-03-31"),
            'temperature' => 34.2,
        ));

                DB::table('heatmap')->insert(
        array(
            'roomId' => "G706",
            'date' => date("2016-04-01"),
            'temperature' => 23.9,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G706",
            'date' => date("2016-04-02"),
            'temperature' => 25,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G706",
            'date' => date("2016-04-03"),
            'temperature' => 25,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G706",
            'date' => date("2016-04-04"),
            'temperature' => 25,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G706",
            'date' => date("2016-04-05"),
            'temperature' => 28,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G706",
            'date' => date("2016-04-06"),
            'temperature' => 24,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G706",
            'date' => date("2016-04-07"),
            'temperature' => 34,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G706",
            'date' => date("2016-04-08"),
            'temperature' => 29,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G706",
            'date' => date("2016-04-09"),
            'temperature' => 24,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G706",
            'date' => date("2016-04-10"),
            'temperature' => 14,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G706",
            'date' => date("2016-04-11"),
            'temperature' => 23,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G706",
            'date' => date("2016-04-12"),
            'temperature' => 33.7,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G706",
            'date' => date("2016-04-13"),
            'temperature' => 23,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G706",
            'date' => date("2016-04-14"),
            'temperature' => 21.6,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G706",
            'date' => date("2016-04-15"),
            'temperature' => 14.4,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G706",
            'date' => date("2016-04-16"),
            'temperature' => 29.5,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G706",
            'date' => date("2016-04-17"),
            'temperature' => 17.3,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G706",
            'date' => date("2016-04-18"),
            'temperature' => 32.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G706",
            'date' => date("2016-04-19"),
            'temperature' => 35.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G706",
            'date' => date("2016-04-20"),
            'temperature' => 19.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G706",
            'date' => date("2016-04-21"),
            'temperature' => 15.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G706",
            'date' => date("2016-04-22"),
            'temperature' => 27.2,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G706",
            'date' => date("2016-04-23"),
            'temperature' => 22.3,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G706",
            'date' => date("2016-04-24"),
            'temperature' => 34.9,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G706",
            'date' => date("2016-04-25"),
            'temperature' => 14.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G706",
            'date' => date("2016-04-26"),
            'temperature' => 19.7,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G706",
            'date' => date("2016-04-27"),
            'temperature' => 35,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G706",
            'date' => date("2016-04-28"),
            'temperature' => 17,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G706",
            'date' => date("2016-04-29"),
            'temperature' => 29.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G706",
            'date' => date("2016-04-30"),
            'temperature' => 21.2,
        ));

                DB::table('heatmap')->insert(
        array(
            'roomId' => "G706",
            'date' => date("2016-05-01"),
            'temperature' => 14.9,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G706",
            'date' => date("2016-05-02"),
            'temperature' => 35,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G706",
            'date' => date("2016-05-03"),
            'temperature' => 17.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G706",
            'date' => date("2016-05-04"),
            'temperature' => 32,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G706",
            'date' => date("2016-05-05"),
            'temperature' => 32.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G706",
            'date' => date("2016-05-06"),
            'temperature' => 14.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G706",
            'date' => date("2016-05-07"),
            'temperature' => 32.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G706",
            'date' => date("2016-05-08"),
            'temperature' => 15.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G706",
            'date' => date("2016-05-09"),
            'temperature' => 15.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G706",
            'date' => date("2016-05-10"),
            'temperature' => 34.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G706",
            'date' => date("2016-05-11"),
            'temperature' => 17.5,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G706",
            'date' => date("2016-05-12"),
            'temperature' => 33.9,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G706",
            'date' => date("2016-05-13"),
            'temperature' => 22,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G706",
            'date' => date("2016-05-14"),
            'temperature' => 29.9,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G706",
            'date' => date("2016-05-15"),
            'temperature' => 19,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G706",
            'date' => date("2016-05-16"),
            'temperature' => 16,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G706",
            'date' => date("2016-05-17"),
            'temperature' => 33,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G706",
            'date' => date("2016-05-18"),
            'temperature' => 24.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G706",
            'date' => date("2016-05-19"),
            'temperature' => 26.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G706",
            'date' => date("2016-05-20"),
            'temperature' => 32.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G706",
            'date' => date("2016-05-21"),
            'temperature' => 15.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G706",
            'date' => date("2016-05-22"),
            'temperature' => 18.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G706",
            'date' => date("2016-05-23"),
            'temperature' => 18,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G706",
            'date' => date("2016-05-24"),
            'temperature' => 34.7,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G706",
            'date' => date("2016-05-25"),
            'temperature' => 31.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G706",
            'date' => date("2016-05-26"),
            'temperature' => 25.3,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G706",
            'date' => date("2016-05-27"),
            'temperature' => 19.2,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G706",
            'date' => date("2016-05-28"),
            'temperature' => 18.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G706",
            'date' => date("2016-05-29"),
            'temperature' => 16.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G706",
            'date' => date("2016-05-30"),
            'temperature' => 34.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G706",
            'date' => date("2016-05-31"),
            'temperature' => 19.3,
        ));

                DB::table('heatmap')->insert(
        array(
            'roomId' => "E002",
            'date' => date("2016-03-01"),
            'temperature' => 32.3,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E002",
            'date' => date("2016-03-02"),
            'temperature' => 35,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E002",
            'date' => date("2016-03-03"),
            'temperature' => 14.2,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E002",
            'date' => date("2016-03-04"),
            'temperature' => 28,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E002",
            'date' => date("2016-03-05"),
            'temperature' => 32,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E002",
            'date' => date("2016-03-06"),
            'temperature' => 23.4,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E002",
            'date' => date("2016-03-07"),
            'temperature' => 29.2,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E002",
            'date' => date("2016-03-08"),
            'temperature' => 18.9,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E002",
            'date' => date("2016-03-09"),
            'temperature' => 24,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E002",
            'date' => date("2016-03-10"),
            'temperature' => 30,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E002",
            'date' => date("2016-03-11"),
            'temperature' => 23.5,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E002",
            'date' => date("2016-03-12"),
            'temperature' => 14.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E002",
            'date' => date("2016-03-13"),
            'temperature' => 23.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E002",
            'date' => date("2016-03-14"),
            'temperature' => 23,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E002",
            'date' => date("2016-03-15"),
            'temperature' => 14,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E002",
            'date' => date("2016-03-16"),
            'temperature' => 32,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E002",
            'date' => date("2016-03-17"),
            'temperature' => 22,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E002",
            'date' => date("2016-03-18"),
            'temperature' => 23.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E002",
            'date' => date("2016-03-19"),
            'temperature' => 14.9,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E002",
            'date' => date("2016-03-20"),
            'temperature' => 35.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E002",
            'date' => date("2016-03-21"),
            'temperature' => 27.3,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E002",
            'date' => date("2016-03-22"),
            'temperature' => 23.7,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E002",
            'date' => date("2016-03-23"),
            'temperature' => 32.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E002",
            'date' => date("2016-03-24"),
            'temperature' => 23.3,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E002",
            'date' => date("2016-03-25"),
            'temperature' => 28.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E002",
            'date' => date("2016-03-26"),
            'temperature' => 16.7,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E002",
            'date' => date("2016-03-27"),
            'temperature' => 14.4,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E002",
            'date' => date("2016-03-28"),
            'temperature' => 27.9,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E002",
            'date' => date("2016-03-29"),
            'temperature' => 25.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E002",
            'date' => date("2016-03-30"),
            'temperature' => 24.9,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E002",
            'date' => date("2016-03-31"),
            'temperature' => 23.2,
        ));

                DB::table('heatmap')->insert(
        array(
            'roomId' => "E002",
            'date' => date("2016-04-01"),
            'temperature' => 22.9,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E002",
            'date' => date("2016-04-02"),
            'temperature' => 21,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E002",
            'date' => date("2016-04-03"),
            'temperature' => 32,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E002",
            'date' => date("2016-04-04"),
            'temperature' => 32,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E002",
            'date' => date("2016-04-05"),
            'temperature' => 29.9,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E002",
            'date' => date("2016-04-06"),
            'temperature' => 14,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E002",
            'date' => date("2016-04-07"),
            'temperature' => 23.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E002",
            'date' => date("2016-04-08"),
            'temperature' => 26.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E002",
            'date' => date("2016-04-09"),
            'temperature' => 35.3,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E002",
            'date' => date("2016-04-10"),
            'temperature' => 26,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E002",
            'date' => date("2016-04-11"),
            'temperature' => 16,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E002",
            'date' => date("2016-04-12"),
            'temperature' => 31,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E002",
            'date' => date("2016-04-13"),
            'temperature' => 27,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E002",
            'date' => date("2016-04-14"),
            'temperature' => 24.6,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E002",
            'date' => date("2016-04-15"),
            'temperature' => 20.4,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E002",
            'date' => date("2016-04-16"),
            'temperature' => 19.5,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E002",
            'date' => date("2016-04-17"),
            'temperature' => 27.3,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E002",
            'date' => date("2016-04-18"),
            'temperature' => 22.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E002",
            'date' => date("2016-04-19"),
            'temperature' => 32.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E002",
            'date' => date("2016-04-20"),
            'temperature' => 18.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E002",
            'date' => date("2016-04-21"),
            'temperature' => 24.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E002",
            'date' => date("2016-04-22"),
            'temperature' => 27.2,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E002",
            'date' => date("2016-04-23"),
            'temperature' => 32.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E002",
            'date' => date("2016-04-24"),
            'temperature' => 14.9,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E002",
            'date' => date("2016-04-25"),
            'temperature' => 24.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E002",
            'date' => date("2016-04-26"),
            'temperature' => 30.7,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E002",
            'date' => date("2016-04-27"),
            'temperature' => 27,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E002",
            'date' => date("2016-04-28"),
            'temperature' => 30,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E002",
            'date' => date("2016-04-29"),
            'temperature' => 26.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E002",
            'date' => date("2016-04-30"),
            'temperature' => 33.2,
        ));

                DB::table('heatmap')->insert(
        array(
            'roomId' => "E002",
            'date' => date("2016-05-01"),
            'temperature' => 29.9,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E002",
            'date' => date("2016-05-02"),
            'temperature' => 23,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E002",
            'date' => date("2016-05-03"),
            'temperature' => 20.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E002",
            'date' => date("2016-05-04"),
            'temperature' => 22,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E002",
            'date' => date("2016-05-05"),
            'temperature' => 22.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E002",
            'date' => date("2016-05-06"),
            'temperature' => 19.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E002",
            'date' => date("2016-05-07"),
            'temperature' => 22.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E002",
            'date' => date("2016-05-08"),
            'temperature' => 26.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E002",
            'date' => date("2016-05-09"),
            'temperature' => 34.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E002",
            'date' => date("2016-05-10"),
            'temperature' => 22.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E002",
            'date' => date("2016-05-11"),
            'temperature' => 28.5,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E002",
            'date' => date("2016-05-12"),
            'temperature' => 23,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E002",
            'date' => date("2016-05-13"),
            'temperature' => 27,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E002",
            'date' => date("2016-05-14"),
            'temperature' => 15,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E002",
            'date' => date("2016-05-15"),
            'temperature' => 30,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E002",
            'date' => date("2016-05-16"),
            'temperature' => 34,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E002",
            'date' => date("2016-05-17"),
            'temperature' => 21,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E002",
            'date' => date("2016-05-18"),
            'temperature' => 14.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E002",
            'date' => date("2016-05-19"),
            'temperature' => 16.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E002",
            'date' => date("2016-05-20"),
            'temperature' => 27.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E002",
            'date' => date("2016-05-21"),
            'temperature' => 34.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E002",
            'date' => date("2016-05-22"),
            'temperature' => 27.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E002",
            'date' => date("2016-05-23"),
            'temperature' => 23,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E002",
            'date' => date("2016-05-24"),
            'temperature' => 14.7,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E002",
            'date' => date("2016-05-25"),
            'temperature' => 17.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E002",
            'date' => date("2016-05-26"),
            'temperature' => 19.3,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E002",
            'date' => date("2016-05-27"),
            'temperature' => 31.2,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E002",
            'date' => date("2016-05-28"),
            'temperature' => 32.2,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E002",
            'date' => date("2016-05-29"),
            'temperature' => 18.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E002",
            'date' => date("2016-05-30"),
            'temperature' => 26.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E002",
            'date' => date("2016-05-31"),
            'temperature' => 35.1,
        ));

                DB::table('heatmap')->insert(
        array(
            'roomId' => "E104",
            'date' => date("2016-03-01"),
            'temperature' => 32.3,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E104",
            'date' => date("2016-03-02"),
            'temperature' => 35,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E104",
            'date' => date("2016-03-03"),
            'temperature' => 14.2,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E104",
            'date' => date("2016-03-04"),
            'temperature' => 28,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E104",
            'date' => date("2016-03-05"),
            'temperature' => 32,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E104",
            'date' => date("2016-03-06"),
            'temperature' => 23.4,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E104",
            'date' => date("2016-03-07"),
            'temperature' => 29.2,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E104",
            'date' => date("2016-03-08"),
            'temperature' => 18.9,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E104",
            'date' => date("2016-03-09"),
            'temperature' => 24,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E104",
            'date' => date("2016-03-10"),
            'temperature' => 30,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E104",
            'date' => date("2016-03-11"),
            'temperature' => 23.5,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E104",
            'date' => date("2016-03-12"),
            'temperature' => 14.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E104",
            'date' => date("2016-03-13"),
            'temperature' => 23.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E104",
            'date' => date("2016-03-14"),
            'temperature' => 23,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E104",
            'date' => date("2016-03-15"),
            'temperature' => 14,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E104",
            'date' => date("2016-03-16"),
            'temperature' => 32,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E104",
            'date' => date("2016-03-17"),
            'temperature' => 22,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E104",
            'date' => date("2016-03-18"),
            'temperature' => 23.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E104",
            'date' => date("2016-03-19"),
            'temperature' => 14.9,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E104",
            'date' => date("2016-03-20"),
            'temperature' => 35.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E104",
            'date' => date("2016-03-21"),
            'temperature' => 27.3,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E104",
            'date' => date("2016-03-22"),
            'temperature' => 23.7,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E104",
            'date' => date("2016-03-23"),
            'temperature' => 32.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E104",
            'date' => date("2016-03-24"),
            'temperature' => 23.3,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E104",
            'date' => date("2016-03-25"),
            'temperature' => 28.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E104",
            'date' => date("2016-03-26"),
            'temperature' => 16.7,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E104",
            'date' => date("2016-03-27"),
            'temperature' => 14.4,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E104",
            'date' => date("2016-03-28"),
            'temperature' => 27.9,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E104",
            'date' => date("2016-03-29"),
            'temperature' => 25.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E104",
            'date' => date("2016-03-30"),
            'temperature' => 24.9,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E104",
            'date' => date("2016-03-31"),
            'temperature' => 23.2,
        ));

                DB::table('heatmap')->insert(
        array(
            'roomId' => "E104",
            'date' => date("2016-04-01"),
            'temperature' => 22.9,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E104",
            'date' => date("2016-04-02"),
            'temperature' => 21,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E104",
            'date' => date("2016-04-03"),
            'temperature' => 32,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E104",
            'date' => date("2016-04-04"),
            'temperature' => 32,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E104",
            'date' => date("2016-04-05"),
            'temperature' => 29.9,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E104",
            'date' => date("2016-04-06"),
            'temperature' => 14,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E104",
            'date' => date("2016-04-07"),
            'temperature' => 23.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E104",
            'date' => date("2016-04-08"),
            'temperature' => 26.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E104",
            'date' => date("2016-04-09"),
            'temperature' => 35.3,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E104",
            'date' => date("2016-04-10"),
            'temperature' => 26,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E104",
            'date' => date("2016-04-11"),
            'temperature' => 16,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E104",
            'date' => date("2016-04-12"),
            'temperature' => 31,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E104",
            'date' => date("2016-04-13"),
            'temperature' => 27,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E104",
            'date' => date("2016-04-14"),
            'temperature' => 24.6,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E104",
            'date' => date("2016-04-15"),
            'temperature' => 20.4,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E104",
            'date' => date("2016-04-16"),
            'temperature' => 19.5,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E104",
            'date' => date("2016-04-17"),
            'temperature' => 27.3,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E104",
            'date' => date("2016-04-18"),
            'temperature' => 22.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E104",
            'date' => date("2016-04-19"),
            'temperature' => 32.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E104",
            'date' => date("2016-04-20"),
            'temperature' => 18.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E104",
            'date' => date("2016-04-21"),
            'temperature' => 24.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E104",
            'date' => date("2016-04-22"),
            'temperature' => 27.2,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E104",
            'date' => date("2016-04-23"),
            'temperature' => 32.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E104",
            'date' => date("2016-04-24"),
            'temperature' => 14.9,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E104",
            'date' => date("2016-04-25"),
            'temperature' => 24.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E104",
            'date' => date("2016-04-26"),
            'temperature' => 30.7,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E104",
            'date' => date("2016-04-27"),
            'temperature' => 27,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E104",
            'date' => date("2016-04-28"),
            'temperature' => 30,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E104",
            'date' => date("2016-04-29"),
            'temperature' => 26.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E104",
            'date' => date("2016-04-30"),
            'temperature' => 33.2,
        ));

                DB::table('heatmap')->insert(
        array(
            'roomId' => "E104",
            'date' => date("2016-05-01"),
            'temperature' => 29.9,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E104",
            'date' => date("2016-05-02"),
            'temperature' => 23,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E104",
            'date' => date("2016-05-03"),
            'temperature' => 20.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E104",
            'date' => date("2016-05-04"),
            'temperature' => 22,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E104",
            'date' => date("2016-05-05"),
            'temperature' => 22.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E104",
            'date' => date("2016-05-06"),
            'temperature' => 19.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E104",
            'date' => date("2016-05-07"),
            'temperature' => 22.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E104",
            'date' => date("2016-05-08"),
            'temperature' => 26.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E104",
            'date' => date("2016-05-09"),
            'temperature' => 34.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E104",
            'date' => date("2016-05-10"),
            'temperature' => 22.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E104",
            'date' => date("2016-05-11"),
            'temperature' => 28.5,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E104",
            'date' => date("2016-05-12"),
            'temperature' => 23,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E104",
            'date' => date("2016-05-13"),
            'temperature' => 27,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E104",
            'date' => date("2016-05-14"),
            'temperature' => 15,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E104",
            'date' => date("2016-05-15"),
            'temperature' => 30,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E104",
            'date' => date("2016-05-16"),
            'temperature' => 34,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E104",
            'date' => date("2016-05-17"),
            'temperature' => 21,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E104",
            'date' => date("2016-05-18"),
            'temperature' => 14.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E104",
            'date' => date("2016-05-19"),
            'temperature' => 16.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E104",
            'date' => date("2016-05-20"),
            'temperature' => 27.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E104",
            'date' => date("2016-05-21"),
            'temperature' => 34.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E104",
            'date' => date("2016-05-22"),
            'temperature' => 27.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E104",
            'date' => date("2016-05-23"),
            'temperature' => 23,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E104",
            'date' => date("2016-05-24"),
            'temperature' => 14.7,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E104",
            'date' => date("2016-05-25"),
            'temperature' => 17.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E104",
            'date' => date("2016-05-26"),
            'temperature' => 19.3,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E104",
            'date' => date("2016-05-27"),
            'temperature' => 31.2,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E104",
            'date' => date("2016-05-28"),
            'temperature' => 32.2,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E104",
            'date' => date("2016-05-29"),
            'temperature' => 18.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E104",
            'date' => date("2016-05-30"),
            'temperature' => 26.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E104",
            'date' => date("2016-05-31"),
            'temperature' => 35.1,
        ));

                DB::table('heatmap')->insert(
        array(
            'roomId' => "B217",
            'date' => date("2016-03-01"),
            'temperature' => 32.3,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B217",
            'date' => date("2016-03-02"),
            'temperature' => 35,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B217",
            'date' => date("2016-03-03"),
            'temperature' => 14.2,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B217",
            'date' => date("2016-03-04"),
            'temperature' => 28,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B217",
            'date' => date("2016-03-05"),
            'temperature' => 32,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B217",
            'date' => date("2016-03-06"),
            'temperature' => 23.4,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B217",
            'date' => date("2016-03-07"),
            'temperature' => 29.2,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B217",
            'date' => date("2016-03-08"),
            'temperature' => 18.9,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B217",
            'date' => date("2016-03-09"),
            'temperature' => 24,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B217",
            'date' => date("2016-03-10"),
            'temperature' => 30,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B217",
            'date' => date("2016-03-11"),
            'temperature' => 23.5,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B217",
            'date' => date("2016-03-12"),
            'temperature' => 14.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B217",
            'date' => date("2016-03-13"),
            'temperature' => 23.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B217",
            'date' => date("2016-03-14"),
            'temperature' => 23,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B217",
            'date' => date("2016-03-15"),
            'temperature' => 14,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B217",
            'date' => date("2016-03-16"),
            'temperature' => 32,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B217",
            'date' => date("2016-03-17"),
            'temperature' => 22,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B217",
            'date' => date("2016-03-18"),
            'temperature' => 23.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B217",
            'date' => date("2016-03-19"),
            'temperature' => 14.9,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B217",
            'date' => date("2016-03-20"),
            'temperature' => 35.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B217",
            'date' => date("2016-03-21"),
            'temperature' => 27.3,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B217",
            'date' => date("2016-03-22"),
            'temperature' => 23.7,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B217",
            'date' => date("2016-03-23"),
            'temperature' => 32.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B217",
            'date' => date("2016-03-24"),
            'temperature' => 23.3,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B217",
            'date' => date("2016-03-25"),
            'temperature' => 28.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B217",
            'date' => date("2016-03-26"),
            'temperature' => 16.7,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B217",
            'date' => date("2016-03-27"),
            'temperature' => 14.4,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B217",
            'date' => date("2016-03-28"),
            'temperature' => 27.9,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B217",
            'date' => date("2016-03-29"),
            'temperature' => 25.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B217",
            'date' => date("2016-03-30"),
            'temperature' => 24.9,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B217",
            'date' => date("2016-03-31"),
            'temperature' => 23.2,
        ));

                DB::table('heatmap')->insert(
        array(
            'roomId' => "B217",
            'date' => date("2016-04-01"),
            'temperature' => 22.9,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B217",
            'date' => date("2016-04-02"),
            'temperature' => 21,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B217",
            'date' => date("2016-04-03"),
            'temperature' => 32,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B217",
            'date' => date("2016-04-04"),
            'temperature' => 32,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B217",
            'date' => date("2016-04-05"),
            'temperature' => 29.9,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B217",
            'date' => date("2016-04-06"),
            'temperature' => 14,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B217",
            'date' => date("2016-04-07"),
            'temperature' => 23.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B217",
            'date' => date("2016-04-08"),
            'temperature' => 26.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B217",
            'date' => date("2016-04-09"),
            'temperature' => 35.3,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B217",
            'date' => date("2016-04-10"),
            'temperature' => 26,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B217",
            'date' => date("2016-04-11"),
            'temperature' => 16,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B217",
            'date' => date("2016-04-12"),
            'temperature' => 31,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B217",
            'date' => date("2016-04-13"),
            'temperature' => 27,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B217",
            'date' => date("2016-04-14"),
            'temperature' => 24.6,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B217",
            'date' => date("2016-04-15"),
            'temperature' => 20.4,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B217",
            'date' => date("2016-04-16"),
            'temperature' => 19.5,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B217",
            'date' => date("2016-04-17"),
            'temperature' => 27.3,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B217",
            'date' => date("2016-04-18"),
            'temperature' => 22.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B217",
            'date' => date("2016-04-19"),
            'temperature' => 32.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B217",
            'date' => date("2016-04-20"),
            'temperature' => 18.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B217",
            'date' => date("2016-04-21"),
            'temperature' => 24.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B217",
            'date' => date("2016-04-22"),
            'temperature' => 27.2,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B217",
            'date' => date("2016-04-23"),
            'temperature' => 32.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B217",
            'date' => date("2016-04-24"),
            'temperature' => 14.9,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B217",
            'date' => date("2016-04-25"),
            'temperature' => 24.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B217",
            'date' => date("2016-04-26"),
            'temperature' => 30.7,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B217",
            'date' => date("2016-04-27"),
            'temperature' => 27,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B217",
            'date' => date("2016-04-28"),
            'temperature' => 30,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B217",
            'date' => date("2016-04-29"),
            'temperature' => 26.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B217",
            'date' => date("2016-04-30"),
            'temperature' => 33.2,
        ));

                DB::table('heatmap')->insert(
        array(
            'roomId' => "B217",
            'date' => date("2016-05-01"),
            'temperature' => 29.9,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B217",
            'date' => date("2016-05-02"),
            'temperature' => 23,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B217",
            'date' => date("2016-05-03"),
            'temperature' => 20.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B217",
            'date' => date("2016-05-04"),
            'temperature' => 22,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B217",
            'date' => date("2016-05-05"),
            'temperature' => 22.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B217",
            'date' => date("2016-05-06"),
            'temperature' => 19.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B217",
            'date' => date("2016-05-07"),
            'temperature' => 22.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B217",
            'date' => date("2016-05-08"),
            'temperature' => 26.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B217",
            'date' => date("2016-05-09"),
            'temperature' => 34.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B217",
            'date' => date("2016-05-10"),
            'temperature' => 22.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B217",
            'date' => date("2016-05-11"),
            'temperature' => 28.5,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B217",
            'date' => date("2016-05-12"),
            'temperature' => 23,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B217",
            'date' => date("2016-05-13"),
            'temperature' => 27,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B217",
            'date' => date("2016-05-14"),
            'temperature' => 15,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B217",
            'date' => date("2016-05-15"),
            'temperature' => 30,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B217",
            'date' => date("2016-05-16"),
            'temperature' => 34,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B217",
            'date' => date("2016-05-17"),
            'temperature' => 21,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B217",
            'date' => date("2016-05-18"),
            'temperature' => 14.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B217",
            'date' => date("2016-05-19"),
            'temperature' => 16.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B217",
            'date' => date("2016-05-20"),
            'temperature' => 27.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B217",
            'date' => date("2016-05-21"),
            'temperature' => 34.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B217",
            'date' => date("2016-05-22"),
            'temperature' => 27.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B217",
            'date' => date("2016-05-23"),
            'temperature' => 23,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B217",
            'date' => date("2016-05-24"),
            'temperature' => 14.7,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B217",
            'date' => date("2016-05-25"),
            'temperature' => 17.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B217",
            'date' => date("2016-05-26"),
            'temperature' => 19.3,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B217",
            'date' => date("2016-05-27"),
            'temperature' => 31.2,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B217",
            'date' => date("2016-05-28"),
            'temperature' => 32.2,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B217",
            'date' => date("2016-05-29"),
            'temperature' => 18.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B217",
            'date' => date("2016-05-30"),
            'temperature' => 26.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B217",
            'date' => date("2016-05-31"),
            'temperature' => 35.1,
        ));

                DB::table('heatmap')->insert(
        array(
            'roomId' => "A301",
            'date' => date("2016-03-01"),
            'temperature' => 32.3,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A301",
            'date' => date("2016-03-02"),
            'temperature' => 35,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A301",
            'date' => date("2016-03-03"),
            'temperature' => 14.2,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A301",
            'date' => date("2016-03-04"),
            'temperature' => 28,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A301",
            'date' => date("2016-03-05"),
            'temperature' => 32,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A301",
            'date' => date("2016-03-06"),
            'temperature' => 23.4,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A301",
            'date' => date("2016-03-07"),
            'temperature' => 29.2,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A301",
            'date' => date("2016-03-08"),
            'temperature' => 18.9,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A301",
            'date' => date("2016-03-09"),
            'temperature' => 24,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A301",
            'date' => date("2016-03-10"),
            'temperature' => 30,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A301",
            'date' => date("2016-03-11"),
            'temperature' => 23.5,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A301",
            'date' => date("2016-03-12"),
            'temperature' => 14.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A301",
            'date' => date("2016-03-13"),
            'temperature' => 23.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A301",
            'date' => date("2016-03-14"),
            'temperature' => 23,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A301",
            'date' => date("2016-03-15"),
            'temperature' => 14,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A301",
            'date' => date("2016-03-16"),
            'temperature' => 32,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A301",
            'date' => date("2016-03-17"),
            'temperature' => 22,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A301",
            'date' => date("2016-03-18"),
            'temperature' => 23.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A301",
            'date' => date("2016-03-19"),
            'temperature' => 14.9,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A301",
            'date' => date("2016-03-20"),
            'temperature' => 35.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A301",
            'date' => date("2016-03-21"),
            'temperature' => 27.3,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A301",
            'date' => date("2016-03-22"),
            'temperature' => 23.7,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A301",
            'date' => date("2016-03-23"),
            'temperature' => 32.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A301",
            'date' => date("2016-03-24"),
            'temperature' => 23.3,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A301",
            'date' => date("2016-03-25"),
            'temperature' => 28.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A301",
            'date' => date("2016-03-26"),
            'temperature' => 16.7,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A301",
            'date' => date("2016-03-27"),
            'temperature' => 14.4,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A301",
            'date' => date("2016-03-28"),
            'temperature' => 27.9,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A301",
            'date' => date("2016-03-29"),
            'temperature' => 25.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A301",
            'date' => date("2016-03-30"),
            'temperature' => 24.9,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A301",
            'date' => date("2016-03-31"),
            'temperature' => 23.2,
        ));

                DB::table('heatmap')->insert(
        array(
            'roomId' => "A301",
            'date' => date("2016-04-01"),
            'temperature' => 22.9,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A301",
            'date' => date("2016-04-02"),
            'temperature' => 21,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A301",
            'date' => date("2016-04-03"),
            'temperature' => 32,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A301",
            'date' => date("2016-04-04"),
            'temperature' => 32,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A301",
            'date' => date("2016-04-05"),
            'temperature' => 29.9,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A301",
            'date' => date("2016-04-06"),
            'temperature' => 14,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A301",
            'date' => date("2016-04-07"),
            'temperature' => 23.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A301",
            'date' => date("2016-04-08"),
            'temperature' => 26.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A301",
            'date' => date("2016-04-09"),
            'temperature' => 35.3,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A301",
            'date' => date("2016-04-10"),
            'temperature' => 26,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A301",
            'date' => date("2016-04-11"),
            'temperature' => 16,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A301",
            'date' => date("2016-04-12"),
            'temperature' => 31,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A301",
            'date' => date("2016-04-13"),
            'temperature' => 27,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A301",
            'date' => date("2016-04-14"),
            'temperature' => 24.6,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A301",
            'date' => date("2016-04-15"),
            'temperature' => 20.4,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A301",
            'date' => date("2016-04-16"),
            'temperature' => 19.5,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A301",
            'date' => date("2016-04-17"),
            'temperature' => 27.3,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A301",
            'date' => date("2016-04-18"),
            'temperature' => 22.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A301",
            'date' => date("2016-04-19"),
            'temperature' => 32.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A301",
            'date' => date("2016-04-20"),
            'temperature' => 18.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A301",
            'date' => date("2016-04-21"),
            'temperature' => 24.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A301",
            'date' => date("2016-04-22"),
            'temperature' => 27.2,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A301",
            'date' => date("2016-04-23"),
            'temperature' => 32.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A301",
            'date' => date("2016-04-24"),
            'temperature' => 14.9,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A301",
            'date' => date("2016-04-25"),
            'temperature' => 24.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A301",
            'date' => date("2016-04-26"),
            'temperature' => 30.7,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A301",
            'date' => date("2016-04-27"),
            'temperature' => 27,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A301",
            'date' => date("2016-04-28"),
            'temperature' => 30,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A301",
            'date' => date("2016-04-29"),
            'temperature' => 26.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A301",
            'date' => date("2016-04-30"),
            'temperature' => 33.2,
        ));

                DB::table('heatmap')->insert(
        array(
            'roomId' => "A301",
            'date' => date("2016-05-01"),
            'temperature' => 29.9,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A301",
            'date' => date("2016-05-02"),
            'temperature' => 23,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A301",
            'date' => date("2016-05-03"),
            'temperature' => 20.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A301",
            'date' => date("2016-05-04"),
            'temperature' => 22,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A301",
            'date' => date("2016-05-05"),
            'temperature' => 22.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A301",
            'date' => date("2016-05-06"),
            'temperature' => 19.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A301",
            'date' => date("2016-05-07"),
            'temperature' => 22.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A301",
            'date' => date("2016-05-08"),
            'temperature' => 26.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A301",
            'date' => date("2016-05-09"),
            'temperature' => 34.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A301",
            'date' => date("2016-05-10"),
            'temperature' => 22.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A301",
            'date' => date("2016-05-11"),
            'temperature' => 28.5,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A301",
            'date' => date("2016-05-12"),
            'temperature' => 23,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A301",
            'date' => date("2016-05-13"),
            'temperature' => 27,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A301",
            'date' => date("2016-05-14"),
            'temperature' => 15,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A301",
            'date' => date("2016-05-15"),
            'temperature' => 30,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A301",
            'date' => date("2016-05-16"),
            'temperature' => 34,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A301",
            'date' => date("2016-05-17"),
            'temperature' => 21,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A301",
            'date' => date("2016-05-18"),
            'temperature' => 14.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A301",
            'date' => date("2016-05-19"),
            'temperature' => 16.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A301",
            'date' => date("2016-05-20"),
            'temperature' => 27.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A301",
            'date' => date("2016-05-21"),
            'temperature' => 34.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A301",
            'date' => date("2016-05-22"),
            'temperature' => 27.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A301",
            'date' => date("2016-05-23"),
            'temperature' => 23,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A301",
            'date' => date("2016-05-24"),
            'temperature' => 14.7,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A301",
            'date' => date("2016-05-25"),
            'temperature' => 17.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A301",
            'date' => date("2016-05-26"),
            'temperature' => 19.3,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A301",
            'date' => date("2016-05-27"),
            'temperature' => 31.2,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A301",
            'date' => date("2016-05-28"),
            'temperature' => 32.2,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A301",
            'date' => date("2016-05-29"),
            'temperature' => 18.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A301",
            'date' => date("2016-05-30"),
            'temperature' => 26.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A301",
            'date' => date("2016-05-31"),
            'temperature' => 35.1,
        ));

                DB::table('heatmap')->insert(
        array(
            'roomId' => "B412",
            'date' => date("2016-03-01"),
            'temperature' => 32.3,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B412",
            'date' => date("2016-03-02"),
            'temperature' => 35,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B412",
            'date' => date("2016-03-03"),
            'temperature' => 14.2,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B412",
            'date' => date("2016-03-04"),
            'temperature' => 28,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B412",
            'date' => date("2016-03-05"),
            'temperature' => 32,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B412",
            'date' => date("2016-03-06"),
            'temperature' => 23.4,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B412",
            'date' => date("2016-03-07"),
            'temperature' => 29.2,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B412",
            'date' => date("2016-03-08"),
            'temperature' => 18.9,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B412",
            'date' => date("2016-03-09"),
            'temperature' => 24,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B412",
            'date' => date("2016-03-10"),
            'temperature' => 30,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B412",
            'date' => date("2016-03-11"),
            'temperature' => 23.5,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B412",
            'date' => date("2016-03-12"),
            'temperature' => 14.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B412",
            'date' => date("2016-03-13"),
            'temperature' => 23.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B412",
            'date' => date("2016-03-14"),
            'temperature' => 23,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B412",
            'date' => date("2016-03-15"),
            'temperature' => 14,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B412",
            'date' => date("2016-03-16"),
            'temperature' => 32,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B412",
            'date' => date("2016-03-17"),
            'temperature' => 22,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B412",
            'date' => date("2016-03-18"),
            'temperature' => 23.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B412",
            'date' => date("2016-03-19"),
            'temperature' => 14.9,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B412",
            'date' => date("2016-03-20"),
            'temperature' => 35.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B412",
            'date' => date("2016-03-21"),
            'temperature' => 27.3,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B412",
            'date' => date("2016-03-22"),
            'temperature' => 23.7,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B412",
            'date' => date("2016-03-23"),
            'temperature' => 32.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B412",
            'date' => date("2016-03-24"),
            'temperature' => 23.3,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B412",
            'date' => date("2016-03-25"),
            'temperature' => 28.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B412",
            'date' => date("2016-03-26"),
            'temperature' => 16.7,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B412",
            'date' => date("2016-03-27"),
            'temperature' => 14.4,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B412",
            'date' => date("2016-03-28"),
            'temperature' => 27.9,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B412",
            'date' => date("2016-03-29"),
            'temperature' => 25.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B412",
            'date' => date("2016-03-30"),
            'temperature' => 24.9,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B412",
            'date' => date("2016-03-31"),
            'temperature' => 23.2,
        ));

                DB::table('heatmap')->insert(
        array(
            'roomId' => "B412",
            'date' => date("2016-04-01"),
            'temperature' => 22.9,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B412",
            'date' => date("2016-04-02"),
            'temperature' => 21,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B412",
            'date' => date("2016-04-03"),
            'temperature' => 32,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B412",
            'date' => date("2016-04-04"),
            'temperature' => 32,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B412",
            'date' => date("2016-04-05"),
            'temperature' => 29.9,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B412",
            'date' => date("2016-04-06"),
            'temperature' => 14,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B412",
            'date' => date("2016-04-07"),
            'temperature' => 23.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B412",
            'date' => date("2016-04-08"),
            'temperature' => 26.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B412",
            'date' => date("2016-04-09"),
            'temperature' => 35.3,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B412",
            'date' => date("2016-04-10"),
            'temperature' => 26,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B412",
            'date' => date("2016-04-11"),
            'temperature' => 16,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B412",
            'date' => date("2016-04-12"),
            'temperature' => 31,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B412",
            'date' => date("2016-04-13"),
            'temperature' => 27,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B412",
            'date' => date("2016-04-14"),
            'temperature' => 24.6,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B412",
            'date' => date("2016-04-15"),
            'temperature' => 20.4,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B412",
            'date' => date("2016-04-16"),
            'temperature' => 19.5,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B412",
            'date' => date("2016-04-17"),
            'temperature' => 27.3,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B412",
            'date' => date("2016-04-18"),
            'temperature' => 22.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B412",
            'date' => date("2016-04-19"),
            'temperature' => 32.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B412",
            'date' => date("2016-04-20"),
            'temperature' => 18.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B412",
            'date' => date("2016-04-21"),
            'temperature' => 24.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B412",
            'date' => date("2016-04-22"),
            'temperature' => 27.2,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B412",
            'date' => date("2016-04-23"),
            'temperature' => 32.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B412",
            'date' => date("2016-04-24"),
            'temperature' => 14.9,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B412",
            'date' => date("2016-04-25"),
            'temperature' => 24.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B412",
            'date' => date("2016-04-26"),
            'temperature' => 30.7,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B412",
            'date' => date("2016-04-27"),
            'temperature' => 27,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B412",
            'date' => date("2016-04-28"),
            'temperature' => 30,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B412",
            'date' => date("2016-04-29"),
            'temperature' => 26.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B412",
            'date' => date("2016-04-30"),
            'temperature' => 33.2,
        ));

                DB::table('heatmap')->insert(
        array(
            'roomId' => "B412",
            'date' => date("2016-05-01"),
            'temperature' => 29.9,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B412",
            'date' => date("2016-05-02"),
            'temperature' => 23,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B412",
            'date' => date("2016-05-03"),
            'temperature' => 20.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B412",
            'date' => date("2016-05-04"),
            'temperature' => 22,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B412",
            'date' => date("2016-05-05"),
            'temperature' => 22.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B412",
            'date' => date("2016-05-06"),
            'temperature' => 19.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B412",
            'date' => date("2016-05-07"),
            'temperature' => 22.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B412",
            'date' => date("2016-05-08"),
            'temperature' => 26.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B412",
            'date' => date("2016-05-09"),
            'temperature' => 34.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B412",
            'date' => date("2016-05-10"),
            'temperature' => 22.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B412",
            'date' => date("2016-05-11"),
            'temperature' => 28.5,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B412",
            'date' => date("2016-05-12"),
            'temperature' => 23,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B412",
            'date' => date("2016-05-13"),
            'temperature' => 27,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B412",
            'date' => date("2016-05-14"),
            'temperature' => 15,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B412",
            'date' => date("2016-05-15"),
            'temperature' => 30,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B412",
            'date' => date("2016-05-16"),
            'temperature' => 34,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B412",
            'date' => date("2016-05-17"),
            'temperature' => 21,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B412",
            'date' => date("2016-05-18"),
            'temperature' => 14.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B412",
            'date' => date("2016-05-19"),
            'temperature' => 16.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B412",
            'date' => date("2016-05-20"),
            'temperature' => 27.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B412",
            'date' => date("2016-05-21"),
            'temperature' => 34.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B412",
            'date' => date("2016-05-22"),
            'temperature' => 27.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B412",
            'date' => date("2016-05-23"),
            'temperature' => 23,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B412",
            'date' => date("2016-05-24"),
            'temperature' => 14.7,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B412",
            'date' => date("2016-05-25"),
            'temperature' => 17.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B412",
            'date' => date("2016-05-26"),
            'temperature' => 19.3,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B412",
            'date' => date("2016-05-27"),
            'temperature' => 31.2,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B412",
            'date' => date("2016-05-28"),
            'temperature' => 32.2,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B412",
            'date' => date("2016-05-29"),
            'temperature' => 18.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B412",
            'date' => date("2016-05-30"),
            'temperature' => 26.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B412",
            'date' => date("2016-05-31"),
            'temperature' => 35.1,
        ));

                DB::table('heatmap')->insert(
        array(
            'roomId' => "E504",
            'date' => date("2016-03-01"),
            'temperature' => 32.3,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E504",
            'date' => date("2016-03-02"),
            'temperature' => 35,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E504",
            'date' => date("2016-03-03"),
            'temperature' => 14.2,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E504",
            'date' => date("2016-03-04"),
            'temperature' => 28,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E504",
            'date' => date("2016-03-05"),
            'temperature' => 32,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E504",
            'date' => date("2016-03-06"),
            'temperature' => 23.4,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E504",
            'date' => date("2016-03-07"),
            'temperature' => 29.2,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E504",
            'date' => date("2016-03-08"),
            'temperature' => 18.9,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E504",
            'date' => date("2016-03-09"),
            'temperature' => 24,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E504",
            'date' => date("2016-03-10"),
            'temperature' => 30,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E504",
            'date' => date("2016-03-11"),
            'temperature' => 23.5,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E504",
            'date' => date("2016-03-12"),
            'temperature' => 14.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E504",
            'date' => date("2016-03-13"),
            'temperature' => 23.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E504",
            'date' => date("2016-03-14"),
            'temperature' => 23,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E504",
            'date' => date("2016-03-15"),
            'temperature' => 14,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E504",
            'date' => date("2016-03-16"),
            'temperature' => 32,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E504",
            'date' => date("2016-03-17"),
            'temperature' => 22,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E504",
            'date' => date("2016-03-18"),
            'temperature' => 23.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E504",
            'date' => date("2016-03-19"),
            'temperature' => 14.9,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E504",
            'date' => date("2016-03-20"),
            'temperature' => 35.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E504",
            'date' => date("2016-03-21"),
            'temperature' => 27.3,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E504",
            'date' => date("2016-03-22"),
            'temperature' => 23.7,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E504",
            'date' => date("2016-03-23"),
            'temperature' => 32.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E504",
            'date' => date("2016-03-24"),
            'temperature' => 23.3,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E504",
            'date' => date("2016-03-25"),
            'temperature' => 28.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E504",
            'date' => date("2016-03-26"),
            'temperature' => 16.7,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E504",
            'date' => date("2016-03-27"),
            'temperature' => 14.4,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E504",
            'date' => date("2016-03-28"),
            'temperature' => 27.9,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E504",
            'date' => date("2016-03-29"),
            'temperature' => 25.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E504",
            'date' => date("2016-03-30"),
            'temperature' => 24.9,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E504",
            'date' => date("2016-03-31"),
            'temperature' => 23.2,
        ));

                DB::table('heatmap')->insert(
        array(
            'roomId' => "E504",
            'date' => date("2016-04-01"),
            'temperature' => 22.9,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E504",
            'date' => date("2016-04-02"),
            'temperature' => 21,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E504",
            'date' => date("2016-04-03"),
            'temperature' => 32,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E504",
            'date' => date("2016-04-04"),
            'temperature' => 32,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E504",
            'date' => date("2016-04-05"),
            'temperature' => 29.9,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E504",
            'date' => date("2016-04-06"),
            'temperature' => 14,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E504",
            'date' => date("2016-04-07"),
            'temperature' => 23.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E504",
            'date' => date("2016-04-08"),
            'temperature' => 26.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E504",
            'date' => date("2016-04-09"),
            'temperature' => 35.3,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E504",
            'date' => date("2016-04-10"),
            'temperature' => 26,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E504",
            'date' => date("2016-04-11"),
            'temperature' => 16,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E504",
            'date' => date("2016-04-12"),
            'temperature' => 31,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E504",
            'date' => date("2016-04-13"),
            'temperature' => 27,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E504",
            'date' => date("2016-04-14"),
            'temperature' => 24.6,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E504",
            'date' => date("2016-04-15"),
            'temperature' => 20.4,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E504",
            'date' => date("2016-04-16"),
            'temperature' => 19.5,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E504",
            'date' => date("2016-04-17"),
            'temperature' => 27.3,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E504",
            'date' => date("2016-04-18"),
            'temperature' => 22.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E504",
            'date' => date("2016-04-19"),
            'temperature' => 32.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E504",
            'date' => date("2016-04-20"),
            'temperature' => 18.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E504",
            'date' => date("2016-04-21"),
            'temperature' => 24.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E504",
            'date' => date("2016-04-22"),
            'temperature' => 27.2,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E504",
            'date' => date("2016-04-23"),
            'temperature' => 32.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E504",
            'date' => date("2016-04-24"),
            'temperature' => 14.9,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E504",
            'date' => date("2016-04-25"),
            'temperature' => 24.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E504",
            'date' => date("2016-04-26"),
            'temperature' => 30.7,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E504",
            'date' => date("2016-04-27"),
            'temperature' => 27,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E504",
            'date' => date("2016-04-28"),
            'temperature' => 30,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E504",
            'date' => date("2016-04-29"),
            'temperature' => 26.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E504",
            'date' => date("2016-04-30"),
            'temperature' => 33.2,
        ));

                DB::table('heatmap')->insert(
        array(
            'roomId' => "E504",
            'date' => date("2016-05-01"),
            'temperature' => 29.9,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E504",
            'date' => date("2016-05-02"),
            'temperature' => 23,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E504",
            'date' => date("2016-05-03"),
            'temperature' => 20.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E504",
            'date' => date("2016-05-04"),
            'temperature' => 22,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E504",
            'date' => date("2016-05-05"),
            'temperature' => 22.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E504",
            'date' => date("2016-05-06"),
            'temperature' => 19.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E504",
            'date' => date("2016-05-07"),
            'temperature' => 22.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E504",
            'date' => date("2016-05-08"),
            'temperature' => 26.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E504",
            'date' => date("2016-05-09"),
            'temperature' => 34.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E504",
            'date' => date("2016-05-10"),
            'temperature' => 22.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E504",
            'date' => date("2016-05-11"),
            'temperature' => 28.5,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E504",
            'date' => date("2016-05-12"),
            'temperature' => 23,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E504",
            'date' => date("2016-05-13"),
            'temperature' => 27,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E504",
            'date' => date("2016-05-14"),
            'temperature' => 15,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E504",
            'date' => date("2016-05-15"),
            'temperature' => 30,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E504",
            'date' => date("2016-05-16"),
            'temperature' => 34,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E504",
            'date' => date("2016-05-17"),
            'temperature' => 21,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E504",
            'date' => date("2016-05-18"),
            'temperature' => 14.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E504",
            'date' => date("2016-05-19"),
            'temperature' => 16.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E504",
            'date' => date("2016-05-20"),
            'temperature' => 27.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E504",
            'date' => date("2016-05-21"),
            'temperature' => 34.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E504",
            'date' => date("2016-05-22"),
            'temperature' => 27.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E504",
            'date' => date("2016-05-23"),
            'temperature' => 23,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E504",
            'date' => date("2016-05-24"),
            'temperature' => 14.7,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E504",
            'date' => date("2016-05-25"),
            'temperature' => 17.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E504",
            'date' => date("2016-05-26"),
            'temperature' => 19.3,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E504",
            'date' => date("2016-05-27"),
            'temperature' => 31.2,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E504",
            'date' => date("2016-05-28"),
            'temperature' => 32.2,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E504",
            'date' => date("2016-05-29"),
            'temperature' => 18.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E504",
            'date' => date("2016-05-30"),
            'temperature' => 26.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "E504",
            'date' => date("2016-05-31"),
            'temperature' => 35.1,
        ));

                DB::table('heatmap')->insert(
        array(
            'roomId' => "B611",
            'date' => date("2016-03-01"),
            'temperature' => 32.3,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B611",
            'date' => date("2016-03-02"),
            'temperature' => 35,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B611",
            'date' => date("2016-03-03"),
            'temperature' => 14.2,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B611",
            'date' => date("2016-03-04"),
            'temperature' => 28,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B611",
            'date' => date("2016-03-05"),
            'temperature' => 32,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B611",
            'date' => date("2016-03-06"),
            'temperature' => 23.4,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B611",
            'date' => date("2016-03-07"),
            'temperature' => 29.2,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B611",
            'date' => date("2016-03-08"),
            'temperature' => 18.9,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B611",
            'date' => date("2016-03-09"),
            'temperature' => 24,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B611",
            'date' => date("2016-03-10"),
            'temperature' => 30,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B611",
            'date' => date("2016-03-11"),
            'temperature' => 23.5,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B611",
            'date' => date("2016-03-12"),
            'temperature' => 14.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B611",
            'date' => date("2016-03-13"),
            'temperature' => 23.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B611",
            'date' => date("2016-03-14"),
            'temperature' => 23,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B611",
            'date' => date("2016-03-15"),
            'temperature' => 14,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B611",
            'date' => date("2016-03-16"),
            'temperature' => 32,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B611",
            'date' => date("2016-03-17"),
            'temperature' => 22,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B611",
            'date' => date("2016-03-18"),
            'temperature' => 23.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B611",
            'date' => date("2016-03-19"),
            'temperature' => 14.9,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B611",
            'date' => date("2016-03-20"),
            'temperature' => 35.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B611",
            'date' => date("2016-03-21"),
            'temperature' => 27.3,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B611",
            'date' => date("2016-03-22"),
            'temperature' => 23.7,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B611",
            'date' => date("2016-03-23"),
            'temperature' => 32.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B611",
            'date' => date("2016-03-24"),
            'temperature' => 23.3,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B611",
            'date' => date("2016-03-25"),
            'temperature' => 28.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B611",
            'date' => date("2016-03-26"),
            'temperature' => 16.7,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B611",
            'date' => date("2016-03-27"),
            'temperature' => 14.4,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B611",
            'date' => date("2016-03-28"),
            'temperature' => 27.9,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B611",
            'date' => date("2016-03-29"),
            'temperature' => 25.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B611",
            'date' => date("2016-03-30"),
            'temperature' => 24.9,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B611",
            'date' => date("2016-03-31"),
            'temperature' => 23.2,
        ));

                DB::table('heatmap')->insert(
        array(
            'roomId' => "B611",
            'date' => date("2016-04-01"),
            'temperature' => 22.9,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B611",
            'date' => date("2016-04-02"),
            'temperature' => 21,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B611",
            'date' => date("2016-04-03"),
            'temperature' => 32,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B611",
            'date' => date("2016-04-04"),
            'temperature' => 32,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B611",
            'date' => date("2016-04-05"),
            'temperature' => 29.9,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B611",
            'date' => date("2016-04-06"),
            'temperature' => 14,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B611",
            'date' => date("2016-04-07"),
            'temperature' => 23.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B611",
            'date' => date("2016-04-08"),
            'temperature' => 26.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B611",
            'date' => date("2016-04-09"),
            'temperature' => 35.3,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B611",
            'date' => date("2016-04-10"),
            'temperature' => 26,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B611",
            'date' => date("2016-04-11"),
            'temperature' => 16,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B611",
            'date' => date("2016-04-12"),
            'temperature' => 31,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B611",
            'date' => date("2016-04-13"),
            'temperature' => 27,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B611",
            'date' => date("2016-04-14"),
            'temperature' => 24.6,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B611",
            'date' => date("2016-04-15"),
            'temperature' => 20.4,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B611",
            'date' => date("2016-04-16"),
            'temperature' => 19.5,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B611",
            'date' => date("2016-04-17"),
            'temperature' => 27.3,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B611",
            'date' => date("2016-04-18"),
            'temperature' => 22.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B611",
            'date' => date("2016-04-19"),
            'temperature' => 32.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B611",
            'date' => date("2016-04-20"),
            'temperature' => 18.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B611",
            'date' => date("2016-04-21"),
            'temperature' => 24.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B611",
            'date' => date("2016-04-22"),
            'temperature' => 27.2,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B611",
            'date' => date("2016-04-23"),
            'temperature' => 32.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B611",
            'date' => date("2016-04-24"),
            'temperature' => 14.9,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B611",
            'date' => date("2016-04-25"),
            'temperature' => 24.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B611",
            'date' => date("2016-04-26"),
            'temperature' => 30.7,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B611",
            'date' => date("2016-04-27"),
            'temperature' => 27,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B611",
            'date' => date("2016-04-28"),
            'temperature' => 30,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B611",
            'date' => date("2016-04-29"),
            'temperature' => 26.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B611",
            'date' => date("2016-04-30"),
            'temperature' => 33.2,
        ));

                DB::table('heatmap')->insert(
        array(
            'roomId' => "B611",
            'date' => date("2016-05-01"),
            'temperature' => 29.9,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B611",
            'date' => date("2016-05-02"),
            'temperature' => 23,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B611",
            'date' => date("2016-05-03"),
            'temperature' => 20.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B611",
            'date' => date("2016-05-04"),
            'temperature' => 22,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B611",
            'date' => date("2016-05-05"),
            'temperature' => 22.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B611",
            'date' => date("2016-05-06"),
            'temperature' => 19.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B611",
            'date' => date("2016-05-07"),
            'temperature' => 22.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B611",
            'date' => date("2016-05-08"),
            'temperature' => 26.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B611",
            'date' => date("2016-05-09"),
            'temperature' => 34.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B611",
            'date' => date("2016-05-10"),
            'temperature' => 22.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B611",
            'date' => date("2016-05-11"),
            'temperature' => 28.5,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B611",
            'date' => date("2016-05-12"),
            'temperature' => 23,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B611",
            'date' => date("2016-05-13"),
            'temperature' => 27,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B611",
            'date' => date("2016-05-14"),
            'temperature' => 15,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B611",
            'date' => date("2016-05-15"),
            'temperature' => 30,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B611",
            'date' => date("2016-05-16"),
            'temperature' => 34,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B611",
            'date' => date("2016-05-17"),
            'temperature' => 21,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B611",
            'date' => date("2016-05-18"),
            'temperature' => 14.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B611",
            'date' => date("2016-05-19"),
            'temperature' => 16.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B611",
            'date' => date("2016-05-20"),
            'temperature' => 27.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B611",
            'date' => date("2016-05-21"),
            'temperature' => 34.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B611",
            'date' => date("2016-05-22"),
            'temperature' => 27.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B611",
            'date' => date("2016-05-23"),
            'temperature' => 23,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B611",
            'date' => date("2016-05-24"),
            'temperature' => 14.7,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B611",
            'date' => date("2016-05-25"),
            'temperature' => 17.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B611",
            'date' => date("2016-05-26"),
            'temperature' => 19.3,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B611",
            'date' => date("2016-05-27"),
            'temperature' => 31.2,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B611",
            'date' => date("2016-05-28"),
            'temperature' => 32.2,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B611",
            'date' => date("2016-05-29"),
            'temperature' => 18.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B611",
            'date' => date("2016-05-30"),
            'temperature' => 26.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "B611",
            'date' => date("2016-05-31"),
            'temperature' => 35.1,
        ));

                DB::table('heatmap')->insert(
        array(
            'roomId' => "G704",
            'date' => date("2016-03-01"),
            'temperature' => 32.3,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G704",
            'date' => date("2016-03-02"),
            'temperature' => 35,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G704",
            'date' => date("2016-03-03"),
            'temperature' => 14.2,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G704",
            'date' => date("2016-03-04"),
            'temperature' => 28,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G704",
            'date' => date("2016-03-05"),
            'temperature' => 32,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G704",
            'date' => date("2016-03-06"),
            'temperature' => 23.4,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G704",
            'date' => date("2016-03-07"),
            'temperature' => 29.2,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G704",
            'date' => date("2016-03-08"),
            'temperature' => 18.9,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G704",
            'date' => date("2016-03-09"),
            'temperature' => 24,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G704",
            'date' => date("2016-03-10"),
            'temperature' => 30,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G704",
            'date' => date("2016-03-11"),
            'temperature' => 23.5,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G704",
            'date' => date("2016-03-12"),
            'temperature' => 14.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G704",
            'date' => date("2016-03-13"),
            'temperature' => 23.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G704",
            'date' => date("2016-03-14"),
            'temperature' => 23,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G704",
            'date' => date("2016-03-15"),
            'temperature' => 14,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G704",
            'date' => date("2016-03-16"),
            'temperature' => 32,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G704",
            'date' => date("2016-03-17"),
            'temperature' => 22,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G704",
            'date' => date("2016-03-18"),
            'temperature' => 23.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G704",
            'date' => date("2016-03-19"),
            'temperature' => 14.9,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G704",
            'date' => date("2016-03-20"),
            'temperature' => 35.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G704",
            'date' => date("2016-03-21"),
            'temperature' => 27.3,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G704",
            'date' => date("2016-03-22"),
            'temperature' => 23.7,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G704",
            'date' => date("2016-03-23"),
            'temperature' => 32.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G704",
            'date' => date("2016-03-24"),
            'temperature' => 23.3,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G704",
            'date' => date("2016-03-25"),
            'temperature' => 28.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G704",
            'date' => date("2016-03-26"),
            'temperature' => 16.7,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G704",
            'date' => date("2016-03-27"),
            'temperature' => 14.4,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G704",
            'date' => date("2016-03-28"),
            'temperature' => 27.9,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G704",
            'date' => date("2016-03-29"),
            'temperature' => 25.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G704",
            'date' => date("2016-03-30"),
            'temperature' => 24.9,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G704",
            'date' => date("2016-03-31"),
            'temperature' => 23.2,
        ));

                DB::table('heatmap')->insert(
        array(
            'roomId' => "G704",
            'date' => date("2016-04-01"),
            'temperature' => 22.9,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G704",
            'date' => date("2016-04-02"),
            'temperature' => 21,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G704",
            'date' => date("2016-04-03"),
            'temperature' => 32,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G704",
            'date' => date("2016-04-04"),
            'temperature' => 32,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G704",
            'date' => date("2016-04-05"),
            'temperature' => 29.9,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G704",
            'date' => date("2016-04-06"),
            'temperature' => 14,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G704",
            'date' => date("2016-04-07"),
            'temperature' => 23.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G704",
            'date' => date("2016-04-08"),
            'temperature' => 26.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G704",
            'date' => date("2016-04-09"),
            'temperature' => 35.3,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G704",
            'date' => date("2016-04-10"),
            'temperature' => 26,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G704",
            'date' => date("2016-04-11"),
            'temperature' => 16,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G704",
            'date' => date("2016-04-12"),
            'temperature' => 31,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G704",
            'date' => date("2016-04-13"),
            'temperature' => 27,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G704",
            'date' => date("2016-04-14"),
            'temperature' => 24.6,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G704",
            'date' => date("2016-04-15"),
            'temperature' => 20.4,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G704",
            'date' => date("2016-04-16"),
            'temperature' => 19.5,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G704",
            'date' => date("2016-04-17"),
            'temperature' => 27.3,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G704",
            'date' => date("2016-04-18"),
            'temperature' => 22.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G704",
            'date' => date("2016-04-19"),
            'temperature' => 32.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G704",
            'date' => date("2016-04-20"),
            'temperature' => 18.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G704",
            'date' => date("2016-04-21"),
            'temperature' => 24.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G704",
            'date' => date("2016-04-22"),
            'temperature' => 27.2,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G704",
            'date' => date("2016-04-23"),
            'temperature' => 32.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G704",
            'date' => date("2016-04-24"),
            'temperature' => 14.9,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G704",
            'date' => date("2016-04-25"),
            'temperature' => 24.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G704",
            'date' => date("2016-04-26"),
            'temperature' => 30.7,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G704",
            'date' => date("2016-04-27"),
            'temperature' => 27,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G704",
            'date' => date("2016-04-28"),
            'temperature' => 30,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G704",
            'date' => date("2016-04-29"),
            'temperature' => 26.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G704",
            'date' => date("2016-04-30"),
            'temperature' => 33.2,
        ));

                DB::table('heatmap')->insert(
        array(
            'roomId' => "G704",
            'date' => date("2016-05-01"),
            'temperature' => 29.9,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G704",
            'date' => date("2016-05-02"),
            'temperature' => 23,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G704",
            'date' => date("2016-05-03"),
            'temperature' => 20.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G704",
            'date' => date("2016-05-04"),
            'temperature' => 22,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G704",
            'date' => date("2016-05-05"),
            'temperature' => 22.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G704",
            'date' => date("2016-05-06"),
            'temperature' => 19.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G704",
            'date' => date("2016-05-07"),
            'temperature' => 22.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G704",
            'date' => date("2016-05-08"),
            'temperature' => 26.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G704",
            'date' => date("2016-05-09"),
            'temperature' => 34.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G704",
            'date' => date("2016-05-10"),
            'temperature' => 22.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G704",
            'date' => date("2016-05-11"),
            'temperature' => 28.5,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G704",
            'date' => date("2016-05-12"),
            'temperature' => 23,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G704",
            'date' => date("2016-05-13"),
            'temperature' => 27,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G704",
            'date' => date("2016-05-14"),
            'temperature' => 15,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G704",
            'date' => date("2016-05-15"),
            'temperature' => 30,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G704",
            'date' => date("2016-05-16"),
            'temperature' => 34,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G704",
            'date' => date("2016-05-17"),
            'temperature' => 21,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G704",
            'date' => date("2016-05-18"),
            'temperature' => 14.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G704",
            'date' => date("2016-05-19"),
            'temperature' => 16.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G704",
            'date' => date("2016-05-20"),
            'temperature' => 27.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G704",
            'date' => date("2016-05-21"),
            'temperature' => 34.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G704",
            'date' => date("2016-05-22"),
            'temperature' => 27.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G704",
            'date' => date("2016-05-23"),
            'temperature' => 23,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G704",
            'date' => date("2016-05-24"),
            'temperature' => 14.7,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G704",
            'date' => date("2016-05-25"),
            'temperature' => 17.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G704",
            'date' => date("2016-05-26"),
            'temperature' => 19.3,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G704",
            'date' => date("2016-05-27"),
            'temperature' => 31.2,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G704",
            'date' => date("2016-05-28"),
            'temperature' => 32.2,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G704",
            'date' => date("2016-05-29"),
            'temperature' => 18.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G704",
            'date' => date("2016-05-30"),
            'temperature' => 26.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "G704",
            'date' => date("2016-05-31"),
            'temperature' => 35.1,
        ));


        

        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('heatmap', function (Blueprint $table) {
            //
        });
    }
}
