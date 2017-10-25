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
            $table->dateTime('dateTime');
            $table->decimal('temperature', 3, 1);
            $table->timestamps();
        });

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A207",
            'dateTime' => date("2016-03-01 07:00:00"),
            'temperature' => 16.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A207",
            'dateTime' => date("2016-03-01 07:30:00"),
            'temperature' => 23,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A207",
            'dateTime' => date("2016-03-01 08:10:00"),
            'temperature' => 20.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A207",
            'dateTime' => date("2016-03-01 08:30:00"),
            'temperature' => 22,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A207",
            'dateTime' => date("2016-03-01 09:00:00"),
            'temperature' => 17.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A207",
            'dateTime' => date("2016-03-01 09:30:00"),
            'temperature' => 19.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A207",
            'dateTime' => date("2016-03-01 10:00:00"),
            'temperature' => 22.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A207",
            'dateTime' => date("2016-03-01 10:30:00"),
            'temperature' => 26.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A207",
            'dateTime' => date("2016-03-01 11:00:00"),
            'temperature' => 17.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A207",
            'dateTime' => date("2016-03-01 11:30:00"),
            'temperature' => 17.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A207",
            'dateTime' => date("2016-03-01 12:00:00"),
            'temperature' => 17.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A207",
            'dateTime' => date("2016-03-01 12:30:00"),
            'temperature' => 17.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A207",
            'dateTime' => date("2016-03-01 13:00:00"),
            'temperature' => 17.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A207",
            'dateTime' => date("2016-03-01 13:30:00"),
            'temperature' => 17.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A207",
            'dateTime' => date("2016-03-01 14:00:00"),
            'temperature' => 23.2,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A207",
            'dateTime' => date("2016-03-01 14:30:00"),
            'temperature' => 24.0,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A207",
            'dateTime' => date("2016-03-01 15:00:00"),
            'temperature' => 27.3,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A207",
            'dateTime' => date("2016-03-01 15:30:00"),
            'temperature' => 22.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A207",
            'dateTime' => date("2016-03-01 16:00:00"),
            'temperature' => 21.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A207",
            'dateTime' => date("2016-03-01 16:30:00"),
            'temperature' => 17.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A207",
            'dateTime' => date("2016-03-01 17:00:00"),
            'temperature' => 17.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A207",
            'dateTime' => date("2016-03-01 17:30:00"),
            'temperature' => 17.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A207",
            'dateTime' => date("2016-03-01 18:00:00"),
            'temperature' => 17.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A207",
            'dateTime' => date("2016-03-01 18:30:00"),
            'temperature' => 17.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A207",
            'dateTime' => date("2016-03-01 19:00:00"),
            'temperature' => 17.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A207",
            'dateTime' => date("2016-03-01 19:30:00"),
            'temperature' => 17.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A207",
            'dateTime' => date("2016-03-01 20:00:00"),
            'temperature' => 17.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A207",
            'dateTime' => date("2016-03-01 20:30:00"),
            'temperature' => 17.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A207",
            'dateTime' => date("2016-03-02 07:00:00"),
            'temperature' => 16.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A207",
            'dateTime' => date("2016-03-02 07:30:00"),
            'temperature' => 16.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A207",
            'dateTime' => date("2016-03-02 08:10:00"),
            'temperature' => 16.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A207",
            'dateTime' => date("2016-03-02 08:30:00"),
            'temperature' => 22,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A207",
            'dateTime' => date("2016-03-02 09:00:00"),
            'temperature' => 22.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A207",
            'dateTime' => date("2016-03-02 09:30:00"),
            'temperature' => 23.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A207",
            'dateTime' => date("2016-03-02 10:00:00"),
            'temperature' => 22.6,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A207",
            'dateTime' => date("2016-03-02 10:30:00"),
            'temperature' => 16.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A207",
            'dateTime' => date("2016-03-02 11:00:00"),
            'temperature' => 16.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A207",
            'dateTime' => date("2016-03-02 11:30:00"),
            'temperature' => 17.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A207",
            'dateTime' => date("2016-03-02 12:00:00"),
            'temperature' => 17.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A207",
            'dateTime' => date("2016-03-02 12:30:00"),
            'temperature' => 17.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A207",
            'dateTime' => date("2016-03-02 13:00:00"),
            'temperature' => 17.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A207",
            'dateTime' => date("2016-03-02 13:30:00"),
            'temperature' => 17.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A207",
            'dateTime' => date("2016-03-02 14:00:00"),
            'temperature' => 23.2,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A207",
            'dateTime' => date("2016-03-02 14:30:00"),
            'temperature' => 24.0,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A207",
            'dateTime' => date("2016-03-02 15:00:00"),
            'temperature' => 27.3,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A207",
            'dateTime' => date("2016-03-02 15:30:00"),
            'temperature' => 22.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A207",
            'dateTime' => date("2016-03-02 16:00:00"),
            'temperature' => 21.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A207",
            'dateTime' => date("2016-03-02 16:30:00"),
            'temperature' => 17.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A207",
            'dateTime' => date("2016-03-02 17:00:00"),
            'temperature' => 17.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A207",
            'dateTime' => date("2016-03-02 17:30:00"),
            'temperature' => 17.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A207",
            'dateTime' => date("2016-03-02 18:00:00"),
            'temperature' => 17.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A207",
            'dateTime' => date("2016-03-02 18:30:00"),
            'temperature' => 17.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A207",
            'dateTime' => date("2016-03-02 19:00:00"),
            'temperature' => 17.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A207",
            'dateTime' => date("2016-03-02 19:30:00"),
            'temperature' => 17.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A207",
            'dateTime' => date("2016-03-02 20:00:00"),
            'temperature' => 17.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A207",
            'dateTime' => date("2016-03-02 20:30:00"),
            'temperature' => 17.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A207",
            'dateTime' => date("2016-03-03 07:00:00"),
            'temperature' => 17.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A207",
            'dateTime' => date("2016-03-03 07:30:00"),
            'temperature' => 23,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A207",
            'dateTime' => date("2016-03-03 08:10:00"),
            'temperature' => 22.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A207",
            'dateTime' => date("2016-03-03 08:30:00"),
            'temperature' => 22,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A207",
            'dateTime' => date("2016-03-03 09:00:00"),
            'temperature' => 17.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A207",
            'dateTime' => date("2016-03-03 09:30:00"),
            'temperature' => 19.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A207",
            'dateTime' => date("2016-03-03 10:00:00"),
            'temperature' => 22.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A207",
            'dateTime' => date("2016-03-03 10:30:00"),
            'temperature' => 26.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A207",
            'dateTime' => date("2016-03-03 11:00:00"),
            'temperature' => 17.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A207",
            'dateTime' => date("2016-03-03 11:30:00"),
            'temperature' => 17.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A207",
            'dateTime' => date("2016-03-03 12:00:00"),
            'temperature' => 17.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A207",
            'dateTime' => date("2016-03-03 12:30:00"),
            'temperature' => 17.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A207",
            'dateTime' => date("2016-03-03 13:00:00"),
            'temperature' => 17.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A207",
            'dateTime' => date("2016-03-03 13:30:00"),
            'temperature' => 17.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A207",
            'dateTime' => date("2016-03-03 14:00:00"),
            'temperature' => 23.2,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A207",
            'dateTime' => date("2016-03-03 14:30:00"),
            'temperature' => 24.0,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A207",
            'dateTime' => date("2016-03-03 15:00:00"),
            'temperature' => 27.3,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A207",
            'dateTime' => date("2016-03-03 15:30:00"),
            'temperature' => 22.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A207",
            'dateTime' => date("2016-03-03 16:00:00"),
            'temperature' => 21.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A207",
            'dateTime' => date("2016-03-03 16:30:00"),
            'temperature' => 17.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A207",
            'dateTime' => date("2016-03-03 17:00:00"),
            'temperature' => 17.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A207",
            'dateTime' => date("2016-03-03 17:30:00"),
            'temperature' => 17.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A207",
            'dateTime' => date("2016-03-03 18:00:00"),
            'temperature' => 17.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A207",
            'dateTime' => date("2016-03-03 18:30:00"),
            'temperature' => 17.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A207",
            'dateTime' => date("2016-03-03 19:00:00"),
            'temperature' => 17.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A207",
            'dateTime' => date("2016-03-03 19:30:00"),
            'temperature' => 17.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A207",
            'dateTime' => date("2016-03-03 20:00:00"),
            'temperature' => 17.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A207",
            'dateTime' => date("2016-03-03 20:30:00"),
            'temperature' => 17.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A207",
            'dateTime' => date("2016-03-04 07:00:00"),
            'temperature' => 16.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A207",
            'dateTime' => date("2016-03-04 07:30:00"),
            'temperature' => 16.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A207",
            'dateTime' => date("2016-03-04 08:10:00"),
            'temperature' => 16.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A207",
            'dateTime' => date("2016-03-04 08:30:00"),
            'temperature' => 22,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A207",
            'dateTime' => date("2016-03-04 09:00:00"),
            'temperature' => 22.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A207",
            'dateTime' => date("2016-03-04 09:30:00"),
            'temperature' => 23.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A207",
            'dateTime' => date("2016-03-04 10:00:00"),
            'temperature' => 22.6,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A207",
            'dateTime' => date("2016-03-04 10:30:00"),
            'temperature' => 16.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A207",
            'dateTime' => date("2016-03-04 11:00:00"),
            'temperature' => 16.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A207",
            'dateTime' => date("2016-03-04 11:30:00"),
            'temperature' => 17.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A207",
            'dateTime' => date("2016-03-04 12:00:00"),
            'temperature' => 17.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A207",
            'dateTime' => date("2016-03-04 12:30:00"),
            'temperature' => 17.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A207",
            'dateTime' => date("2016-03-04 13:00:00"),
            'temperature' => 17.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A207",
            'dateTime' => date("2016-03-04 13:30:00"),
            'temperature' => 17.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A207",
            'dateTime' => date("2016-03-04 14:00:00"),
            'temperature' => 23.2,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A207",
            'dateTime' => date("2016-03-04 14:30:00"),
            'temperature' => 24.0,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A207",
            'dateTime' => date("2016-03-04 15:00:00"),
            'temperature' => 27.3,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A207",
            'dateTime' => date("2016-03-04 15:30:00"),
            'temperature' => 22.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A207",
            'dateTime' => date("2016-03-04 16:00:00"),
            'temperature' => 21.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A207",
            'dateTime' => date("2016-03-04 16:30:00"),
            'temperature' => 17.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A207",
            'dateTime' => date("2016-03-04 17:00:00"),
            'temperature' => 17.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A207",
            'dateTime' => date("2016-03-04 17:30:00"),
            'temperature' => 21.4,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A207",
            'dateTime' => date("2016-03-04 18:00:00"),
            'temperature' => 23.1,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A207",
            'dateTime' => date("2016-03-04 18:30:00"),
            'temperature' => 22.9,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A207",
            'dateTime' => date("2016-03-04 19:00:00"),
            'temperature' => 17.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A207",
            'dateTime' => date("2016-03-04 19:30:00"),
            'temperature' => 17.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A207",
            'dateTime' => date("2016-03-04 20:00:00"),
            'temperature' => 17.8,
        ));

        DB::table('heatmap')->insert(
        array(
            'roomId' => "A207",
            'dateTime' => date("2016-03-04 20:30:00"),
            'temperature' => 17.8,
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
