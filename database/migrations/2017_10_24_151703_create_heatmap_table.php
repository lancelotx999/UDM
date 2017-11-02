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
            'roomId' => "A207",
            'date' => date("2016-03-01"),
            'temperature' => 16.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A207",
            'date' => date("2016-03-02"),
            'temperature' => 23,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A207",
            'date' => date("2016-03-03"),
            'temperature' => 20.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A207",
            'date' => date("2016-03-04"),
            'temperature' => 22,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A207",
            'date' => date("2016-03-05"),
            'temperature' => 17.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A207",
            'date' => date("2016-03-06"),
            'temperature' => 19.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A207",
            'date' => date("2016-03-07"),
            'temperature' => 22.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A207",
            'date' => date("2016-03-08"),
            'temperature' => 26.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A207",
            'date' => date("2016-03-09"),
            'temperature' => 17.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A207",
            'date' => date("2016-03-10"),
            'temperature' => 17.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A207",
            'date' => date("2016-03-11"),
            'temperature' => 17.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A207",
            'date' => date("2016-03-12"),
            'temperature' => 17.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A207",
            'date' => date("2016-03-13"),
            'temperature' => 17.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A207",
            'date' => date("2016-03-14"),
            'temperature' => 17.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A207",
            'date' => date("2016-03-15"),
            'temperature' => 23.2,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A207",
            'date' => date("2016-03-16"),
            'temperature' => 24.0,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A207",
            'date' => date("2016-03-17"),
            'temperature' => 27.3,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A207",
            'date' => date("2016-03-18"),
            'temperature' => 22.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A207",
            'date' => date("2016-03-19"),
            'temperature' => 21.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A207",
            'date' => date("2016-03-20"),
            'temperature' => 17.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A207",
            'date' => date("2016-03-21"),
            'temperature' => 17.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A207",
            'date' => date("2016-03-22"),
            'temperature' => 17.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A207",
            'date' => date("2016-03-23"),
            'temperature' => 17.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A207",
            'date' => date("2016-03-24"),
            'temperature' => 17.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A207",
            'date' => date("2016-03-25"),
            'temperature' => 17.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A207",
            'date' => date("2016-03-26"),
            'temperature' => 17.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A207",
            'date' => date("2016-03-27"),
            'temperature' => 17.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A207",
            'date' => date("2016-03-28"),
            'temperature' => 17.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A207",
            'date' => date("2016-03-29"),
            'temperature' => 16.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A207",
            'date' => date("2016-03-30"),
            'temperature' => 16.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A207",
            'date' => date("2016-03-31"),
            'temperature' => 16.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A302",
            'date' => date("2016-03-01"),
            'temperature' => 22,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A302",
            'date' => date("2016-03-02"),
            'temperature' => 22.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A302",
            'date' => date("2016-03-03"),
            'temperature' => 23.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A302",
            'date' => date("2016-03-04"),
            'temperature' => 22.6,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A302",
            'date' => date("2016-03-05"),
            'temperature' => 16.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A302",
            'date' => date("2016-03-06"),
            'temperature' => 16.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A302",
            'date' => date("2016-03-07"),
            'temperature' => 17.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A302",
            'date' => date("2016-03-08"),
            'temperature' => 17.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A302",
            'date' => date("2016-03-09"),
            'temperature' => 17.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A302",
            'date' => date("2016-03-10"),
            'temperature' => 17.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A302",
            'date' => date("2016-03-11"),
            'temperature' => 17.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A302",
            'date' => date("2016-03-12"),
            'temperature' => 23.2,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A302",
            'date' => date("2016-03-13"),
            'temperature' => 24.0,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A302",
            'date' => date("2016-03-14"),
            'temperature' => 27.3,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A302",
            'date' => date("2016-03-15"),
            'temperature' => 22.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A302",
            'date' => date("2016-03-16"),
            'temperature' => 21.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A302",
            'date' => date("2016-03-17"),
            'temperature' => 17.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A302",
            'date' => date("2016-03-18"),
            'temperature' => 17.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A302",
            'date' => date("2016-03-19"),
            'temperature' => 17.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A302",
            'date' => date("2016-03-20"),
            'temperature' => 17.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A302",
            'date' => date("2016-03-21"),
            'temperature' => 17.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A302",
            'date' => date("2016-03-22"),
            'temperature' => 17.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A302",
            'date' => date("2016-03-23"),
            'temperature' => 17.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A302",
            'date' => date("2016-03-24"),
            'temperature' => 17.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A302",
            'date' => date("2016-03-25"),
            'temperature' => 17.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A302",
            'date' => date("2016-03-26"),
            'temperature' => 17.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A302",
            'date' => date("2016-03-27"),
            'temperature' => 23,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A302",
            'date' => date("2016-03-28"),
            'temperature' => 22.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A302",
            'date' => date("2016-03-29"),
            'temperature' => 22,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A302",
            'date' => date("2016-03-30"),
            'temperature' => 17.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A302",
            'date' => date("2016-03-31"),
            'temperature' => 19.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A224",
            'date' => date("2016-03-01"),
            'temperature' => 22.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A224",
            'date' => date("2016-03-02"),
            'temperature' => 26.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A224",
            'date' => date("2016-03-03"),
            'temperature' => 17.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A224",
            'date' => date("2016-03-04"),
            'temperature' => 17.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A224",
            'date' => date("2016-03-05"),
            'temperature' => 17.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A224",
            'date' => date("2016-03-06"),
            'temperature' => 17.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A224",
            'date' => date("2016-03-07"),
            'temperature' => 17.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A224",
            'date' => date("2016-03-08"),
            'temperature' => 17.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A224",
            'date' => date("2016-03-09"),
            'temperature' => 23.2,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A224",
            'date' => date("2016-03-10"),
            'temperature' => 24.0,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A224",
            'date' => date("2016-03-11"),
            'temperature' => 27.3,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A224",
            'date' => date("2016-03-12"),
            'temperature' => 22.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A224",
            'date' => date("2016-03-13"),
            'temperature' => 21.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A224",
            'date' => date("2016-03-14"),
            'temperature' => 17.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A224",
            'date' => date("2016-03-15"),
            'temperature' => 17.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A224",
            'date' => date("2016-03-16"),
            'temperature' => 17.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A224",
            'date' => date("2016-03-17"),
            'temperature' => 17.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A224",
            'date' => date("2016-03-18"),
            'temperature' => 17.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A224",
            'date' => date("2016-03-19"),
            'temperature' => 17.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A224",
            'date' => date("2016-03-20"),
            'temperature' => 17.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A224",
            'date' => date("2016-03-21"),
            'temperature' => 17.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A224",
            'date' => date("2016-03-22"),
            'temperature' => 17.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A224",
            'date' => date("2016-03-23"),
            'temperature' => 16.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A224",
            'date' => date("2016-03-24"),
            'temperature' => 16.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A224",
            'date' => date("2016-03-25"),
            'temperature' => 16.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A224",
            'date' => date("2016-03-26"),
            'temperature' => 22,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A224",
            'date' => date("2016-03-27"),
            'temperature' => 22.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A224",
            'date' => date("2016-03-28"),
            'temperature' => 23.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A224",
            'date' => date("2016-03-29"),
            'temperature' => 22.6,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A224",
            'date' => date("2016-03-30"),
            'temperature' => 16.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A224",
            'date' => date("2016-03-31"),
            'temperature' => 16.1,
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
