<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEnrollmentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('enrollment', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('year');
            $table->string('semester');
            $table->integer('computing');
            $table->integer('design');
            $table->integer('engineering');
            $table->integer('business');
            $table->timestamps();
        });

        DB::table('enrollment')->insert(
        array(
            'year' => 2000,
            'semester' => "1",
            'computing' => rand(50, 150),
            'design' => rand(75, 200),
            'engineering' => rand(100, 250),
            'business' => rand(250, 400),
        ));

        DB::table('enrollment')->insert(
        array(
            'year' => 2000,
            'semester' => "2",
            'computing' => rand(50, 150),
            'design' => rand(75, 200),
            'engineering' => rand(100, 250),
            'business' => rand(250, 400),
        ));

        DB::table('enrollment')->insert(
        array(
            'year' => 2000,
            'semester' => "Summer",
            'computing' => rand(20, 100),
            'design' => rand(60, 100),
            'engineering' => rand(10, 50),
            'business' => rand(80, 150),
        ));

        DB::table('enrollment')->insert(
        array(
            'year' => 2000,
            'semester' => "Winter",
            'computing' => rand(20, 100),
            'design' => rand(60, 100),
            'engineering' => rand(10, 50),
            'business' => rand(80, 150),
        ));

        DB::table('enrollment')->insert(
        array(
            'year' => 2001,
            'semester' => "1",
            'computing' => rand(50, 150),
            'design' => rand(75, 200),
            'engineering' => rand(100, 250),
            'business' => rand(250, 400),
        ));

        DB::table('enrollment')->insert(
        array(
            'year' => 2001,
            'semester' => "2",
            'computing' => rand(50, 150),
            'design' => rand(75, 200),
            'engineering' => rand(100, 250),
            'business' => rand(250, 400),
        ));

        DB::table('enrollment')->insert(
        array(
            'year' => 2001,
            'semester' => "Summer",
            'computing' => rand(20, 100),
            'design' => rand(60, 100),
            'engineering' => rand(10, 50),
            'business' => rand(80, 150),
        ));

        DB::table('enrollment')->insert(
        array(
            'year' => 2001,
            'semester' => "Winter",
            'computing' => rand(20, 100),
            'design' => rand(60, 100),
            'engineering' => rand(10, 50),
            'business' => rand(80, 150),
        ));

        DB::table('enrollment')->insert(
        array(
            'year' => 2002,
            'semester' => "1",
            'computing' => rand(50, 150),
            'design' => rand(75, 200),
            'engineering' => rand(100, 250),
            'business' => rand(250, 400),
        ));

        DB::table('enrollment')->insert(
        array(
            'year' => 2002,
            'semester' => "2",
            'computing' => rand(50, 150),
            'design' => rand(75, 200),
            'engineering' => rand(100, 250),
            'business' => rand(250, 400),
        ));

        DB::table('enrollment')->insert(
        array(
            'year' => 2002,
            'semester' => "Summer",
            'computing' => rand(20, 100),
            'design' => rand(60, 100),
            'engineering' => rand(10, 50),
            'business' => rand(80, 150),
        ));

        DB::table('enrollment')->insert(
        array(
            'year' => 2002,
            'semester' => "Winter",
            'computing' => rand(20, 100),
            'design' => rand(60, 100),
            'engineering' => rand(10, 50),
            'business' => rand(80, 150),
        ));

        DB::table('enrollment')->insert(
        array(
            'year' => 2003,
            'semester' => "1",
            'computing' => rand(50, 150),
            'design' => rand(75, 200),
            'engineering' => rand(100, 250),
            'business' => rand(250, 400),
        ));

        DB::table('enrollment')->insert(
        array(
            'year' => 2003,
            'semester' => "2",
            'computing' => rand(50, 150),
            'design' => rand(75, 200),
            'engineering' => rand(100, 250),
            'business' => rand(250, 400),
        ));

        DB::table('enrollment')->insert(
        array(
            'year' => 2003,
            'semester' => "Summer",
            'computing' => rand(20, 100),
            'design' => rand(60, 100),
            'engineering' => rand(10, 50),
            'business' => rand(80, 150),
        ));

        DB::table('enrollment')->insert(
        array(
            'year' => 2003,
            'semester' => "Winter",
            'computing' => rand(20, 100),
            'design' => rand(60, 100),
            'engineering' => rand(10, 50),
            'business' => rand(80, 150),
        ));

        DB::table('enrollment')->insert(
        array(
            'year' => 2004,
            'semester' => "1",
            'computing' => rand(100, 250),
            'design' => rand(150, 300),
            'engineering' => rand(250, 400),
            'business' => rand(350, 600),
        ));

        DB::table('enrollment')->insert(
        array(
            'year' => 2004,
            'semester' => "2",
            'computing' => rand(100, 250),
            'design' => rand(150, 300),
            'engineering' => rand(250, 400),
            'business' => rand(350, 600),
        ));

        DB::table('enrollment')->insert(
        array(
            'year' => 2004,
            'semester' => "Summer",
            'computing' => rand(50, 170),
            'design' => rand(60, 200),
            'engineering' => rand(30, 100),
            'business' => rand(100, 250),
        ));

        DB::table('enrollment')->insert(
        array(
            'year' => 2004,
            'semester' => "Winter",
            'computing' => rand(50, 170),
            'design' => rand(60, 200),
            'engineering' => rand(30, 100),
            'business' => rand(100, 250),
        ));

        DB::table('enrollment')->insert(
        array(
            'year' => 2005,
            'semester' => "1",
            'computing' => rand(100, 250),
            'design' => rand(150, 300),
            'engineering' => rand(250, 400),
            'business' => rand(350, 600),
        ));

        DB::table('enrollment')->insert(
        array(
            'year' => 2005,
            'semester' => "2",
            'computing' => rand(100, 250),
            'design' => rand(150, 300),
            'engineering' => rand(250, 400),
            'business' => rand(350, 600),
        ));

        DB::table('enrollment')->insert(
        array(
            'year' => 2005,
            'semester' => "Summer",
            'computing' => rand(50, 170),
            'design' => rand(60, 200),
            'engineering' => rand(30, 100),
            'business' => rand(100, 250),
        ));

        DB::table('enrollment')->insert(
        array(
            'year' => 2005,
            'semester' => "Winter",
            'computing' => rand(50, 170),
            'design' => rand(60, 200),
            'engineering' => rand(30, 100),
            'business' => rand(100, 250),
        ));

        DB::table('enrollment')->insert(
        array(
            'year' => 2006,
            'semester' => "1",
            'computing' => rand(100, 250),
            'design' => rand(150, 300),
            'engineering' => rand(250, 400),
            'business' => rand(350, 600),
        ));

        DB::table('enrollment')->insert(
        array(
            'year' => 2006,
            'semester' => "2",
            'computing' => rand(100, 250),
            'design' => rand(150, 300),
            'engineering' => rand(250, 400),
            'business' => rand(350, 600),
        ));

        DB::table('enrollment')->insert(
        array(
            'year' => 2006,
            'semester' => "Summer",
            'computing' => rand(50, 170),
            'design' => rand(60, 200),
            'engineering' => rand(30, 100),
            'business' => rand(100, 250),
        ));

        DB::table('enrollment')->insert(
        array(
            'year' => 2006,
            'semester' => "Winter",
            'computing' => rand(50, 170),
            'design' => rand(60, 200),
            'engineering' => rand(30, 100),
            'business' => rand(100, 250),
        ));

        DB::table('enrollment')->insert(
        array(
            'year' => 2007,
            'semester' => "1",
            'computing' => rand(100, 250),
            'design' => rand(150, 300),
            'engineering' => rand(250, 400),
            'business' => rand(350, 600),
        ));

        DB::table('enrollment')->insert(
        array(
            'year' => 2007,
            'semester' => "2",
            'computing' => rand(100, 250),
            'design' => rand(150, 300),
            'engineering' => rand(250, 400),
            'business' => rand(350, 600),
        ));

        DB::table('enrollment')->insert(
        array(
            'year' => 2007,
            'semester' => "Summer",
            'computing' => rand(50, 170),
            'design' => rand(60, 200),
            'engineering' => rand(30, 100),
            'business' => rand(100, 250),
        ));

        DB::table('enrollment')->insert(
        array(
            'year' => 2007,
            'semester' => "Winter",
            'computing' => rand(50, 170),
            'design' => rand(60, 200),
            'engineering' => rand(30, 100),
            'business' => rand(100, 250),
        ));

        DB::table('enrollment')->insert(
        array(
            'year' => 2008,
            'semester' => "1",
            'computing' => rand(100, 250),
            'design' => rand(150, 300),
            'engineering' => rand(250, 400),
            'business' => rand(350, 600),
        ));

        DB::table('enrollment')->insert(
        array(
            'year' => 2008,
            'semester' => "2",
            'computing' => rand(100, 250),
            'design' => rand(150, 300),
            'engineering' => rand(250, 400),
            'business' => rand(350, 600),
        ));

        DB::table('enrollment')->insert(
        array(
            'year' => 2008,
            'semester' => "Summer",
            'computing' => rand(50, 170),
            'design' => rand(60, 200),
            'engineering' => rand(30, 100),
            'business' => rand(100, 250),
        ));

        DB::table('enrollment')->insert(
        array(
            'year' => 2008,
            'semester' => "Winter",
            'computing' => rand(50, 170),
            'design' => rand(60, 200),
            'engineering' => rand(30, 100),
            'business' => rand(100, 250),
        ));

        DB::table('enrollment')->insert(
        array(
            'year' => 2009,
            'semester' => "1",
            'computing' => rand(200, 400),
            'design' => rand(200, 350),
            'engineering' => rand(350, 450),
            'business' => rand(400, 500),
        ));

        DB::table('enrollment')->insert(
        array(
            'year' => 2009,
            'semester' => "2",
            'computing' => rand(200, 400),
            'design' => rand(200, 350),
            'engineering' => rand(350, 450),
            'business' => rand(400, 500),
        ));

        DB::table('enrollment')->insert(
        array(
            'year' => 2009,
            'semester' => "Summer",
            'computing' => rand(50, 170),
            'design' => rand(60, 200),
            'engineering' => rand(30, 100),
            'business' => rand(100, 250),
        ));

        DB::table('enrollment')->insert(
        array(
            'year' => 2009,
            'semester' => "Winter",
            'computing' => rand(50, 170),
            'design' => rand(60, 200),
            'engineering' => rand(30, 100),
            'business' => rand(100, 250),
        ));

        DB::table('enrollment')->insert(
        array(
            'year' => 2010,
            'semester' => "1",
            'computing' => rand(200, 400),
            'design' => rand(200, 350),
            'engineering' => rand(350, 450),
            'business' => rand(400, 500),
        ));

        DB::table('enrollment')->insert(
        array(
            'year' => 2010,
            'semester' => "2",
            'computing' => rand(200, 400),
            'design' => rand(200, 350),
            'engineering' => rand(350, 450),
            'business' => rand(400, 500),
        ));

        DB::table('enrollment')->insert(
        array(
            'year' => 2010,
            'semester' => "Summer",
            'computing' => rand(50, 170),
            'design' => rand(60, 200),
            'engineering' => rand(30, 100),
            'business' => rand(100, 250),
        ));

        DB::table('enrollment')->insert(
        array(
            'year' => 2010,
            'semester' => "Winter",
            'computing' => rand(50, 170),
            'design' => rand(60, 200),
            'engineering' => rand(30, 100),
            'business' => rand(100, 250),
        ));

        DB::table('enrollment')->insert(
        array(
            'year' => 2011,
            'semester' => "1",
            'computing' => rand(200, 400),
            'design' => rand(200, 350),
            'engineering' => rand(350, 450),
            'business' => rand(400, 500),
        ));

        DB::table('enrollment')->insert(
        array(
            'year' => 2011,
            'semester' => "2",
            'computing' => rand(200, 400),
            'design' => rand(200, 350),
            'engineering' => rand(350, 450),
            'business' => rand(400, 500),
        ));

        DB::table('enrollment')->insert(
        array(
            'year' => 2011,
            'semester' => "Summer",
            'computing' => rand(50, 170),
            'design' => rand(60, 200),
            'engineering' => rand(30, 100),
            'business' => rand(100, 250),
        ));

        DB::table('enrollment')->insert(
        array(
            'year' => 2011,
            'semester' => "Winter",
            'computing' => rand(50, 170),
            'design' => rand(60, 200),
            'engineering' => rand(30, 100),
            'business' => rand(100, 250),
        ));

        DB::table('enrollment')->insert(
        array(
            'year' => 2012,
            'semester' => "1",
            'computing' => rand(200, 400),
            'design' => rand(200, 350),
            'engineering' => rand(350, 450),
            'business' => rand(400, 500),
        ));

        DB::table('enrollment')->insert(
        array(
            'year' => 2012,
            'semester' => "2",
            'computing' => rand(200, 400),
            'design' => rand(200, 350),
            'engineering' => rand(350, 450),
            'business' => rand(400, 500),
        ));

        DB::table('enrollment')->insert(
        array(
            'year' => 2012,
            'semester' => "Summer",
            'computing' => rand(50, 170),
            'design' => rand(60, 200),
            'engineering' => rand(30, 100),
            'business' => rand(100, 250),
        ));

        DB::table('enrollment')->insert(
        array(
            'year' => 2012,
            'semester' => "Winter",
            'computing' => rand(50, 170),
            'design' => rand(60, 200),
            'engineering' => rand(30, 100),
            'business' => rand(100, 250),
        ));

        DB::table('enrollment')->insert(
        array(
            'year' => 2013,
            'semester' => "1",
            'computing' => rand(200, 400),
            'design' => rand(200, 350),
            'engineering' => rand(350, 450),
            'business' => rand(400, 500),
        ));

        DB::table('enrollment')->insert(
        array(
            'year' => 2013,
            'semester' => "2",
            'computing' => rand(200, 400),
            'design' => rand(200, 350),
            'engineering' => rand(350, 450),
            'business' => rand(400, 500),
        ));

        DB::table('enrollment')->insert(
        array(
            'year' => 2013,
            'semester' => "Summer",
            'computing' => rand(50, 170),
            'design' => rand(60, 200),
            'engineering' => rand(30, 100),
            'business' => rand(100, 250),
        ));

        DB::table('enrollment')->insert(
        array(
            'year' => 2013,
            'semester' => "Winter",
            'computing' => rand(50, 170),
            'design' => rand(60, 200),
            'engineering' => rand(30, 100),
            'business' => rand(100, 250),
        ));

        DB::table('enrollment')->insert(
        array(
            'year' => 2014,
            'semester' => "1",
            'computing' => rand(300, 400),
            'design' => rand(250, 350),
            'engineering' => rand(350, 450),
            'business' => rand(300, 450),
        ));

        DB::table('enrollment')->insert(
        array(
            'year' => 2014,
            'semester' => "2",
            'computing' => rand(300, 400),
            'design' => rand(250, 350),
            'engineering' => rand(350, 450),
            'business' => rand(300, 450),
        ));

        DB::table('enrollment')->insert(
        array(
            'year' => 2014,
            'semester' => "Summer",
            'computing' => rand(100, 200),
            'design' => rand(150, 200),
            'engineering' => rand(50, 100),
            'business' => rand(150, 250),
        ));

        DB::table('enrollment')->insert(
        array(
            'year' => 2014,
            'semester' => "Winter",
            'computing' => rand(100, 200),
            'design' => rand(150, 200),
            'engineering' => rand(50, 100),
            'business' => rand(150, 250),
        ));

        DB::table('enrollment')->insert(
        array(
            'year' => 2015,
            'semester' => "1",
            'computing' => rand(300, 400),
            'design' => rand(250, 350),
            'engineering' => rand(350, 450),
            'business' => rand(300, 450),
        ));

        DB::table('enrollment')->insert(
        array(
            'year' => 2015,
            'semester' => "2",
            'computing' => rand(300, 400),
            'design' => rand(250, 350),
            'engineering' => rand(350, 450),
            'business' => rand(300, 450),
        ));

        DB::table('enrollment')->insert(
        array(
            'year' => 2015,
            'semester' => "Summer",
            'computing' => rand(100, 200),
            'design' => rand(150, 200),
            'engineering' => rand(50, 100),
            'business' => rand(150, 250),
        ));

        DB::table('enrollment')->insert(
        array(
            'year' => 2015,
            'semester' => "Winter",
            'computing' => rand(100, 200),
            'design' => rand(150, 200),
            'engineering' => rand(50, 100),
            'business' => rand(150, 250),
        ));

        DB::table('enrollment')->insert(
        array(
            'year' => 2016,
            'semester' => "1",
            'computing' => rand(300, 400),
            'design' => rand(250, 350),
            'engineering' => rand(350, 450),
            'business' => rand(300, 450),
        ));

        DB::table('enrollment')->insert(
        array(
            'year' => 2016,
            'semester' => "2",
            'computing' => rand(300, 400),
            'design' => rand(250, 350),
            'engineering' => rand(350, 450),
            'business' => rand(300, 450),
        ));

        DB::table('enrollment')->insert(
        array(
            'year' => 2016,
            'semester' => "Summer",
            'computing' => rand(100, 200),
            'design' => rand(150, 200),
            'engineering' => rand(50, 100),
            'business' => rand(150, 250),
        ));

        DB::table('enrollment')->insert(
        array(
            'year' => 2016,
            'semester' => "Winter",
            'computing' => rand(100, 200),
            'design' => rand(150, 200),
            'engineering' => rand(50, 100),
            'business' => rand(150, 250),
        ));
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('enrollment');
    }
}
