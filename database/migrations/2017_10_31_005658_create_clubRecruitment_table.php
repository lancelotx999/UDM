<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClubRecruitmentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clubRecruitment', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('year');
            $table->string('semester');
            $table->string('clubName');
            $table->integer('numberOfMembers');
            $table->timestamps();

        });

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2000,
            'semester' => "1",
            'clubName' => "Student Council",
            'numberOfMembers' => rand(10, 50),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2000,
            'semester' => "1",
            'clubName' => "Student Volunteers",
            'numberOfMembers' => rand(30, 100),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2000,
            'semester' => "1",
            'clubName' => "Drama Club",
            'numberOfMembers' => rand(30, 50),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2000,
            'semester' => "1",
            'clubName' => "Music Club",
            'numberOfMembers' => rand(30, 50),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2000,
            'semester' => "1",
            'clubName' => "Aikido Club",
            'numberOfMembers' => rand(30, 50),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2000,
            'semester' => "1",
            'clubName' => "Badminton Club",
            'numberOfMembers' => rand(30, 50),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2000,
            'semester' => "1",
            'clubName' => "Basketball Club",
            'numberOfMembers' => rand(30, 50),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2000,
            'semester' => "1",
            'clubName' => "Poetry Club",
            'numberOfMembers' => rand(30, 50),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2000,
            'semester' => "1",
            'clubName' => "Debate Club",
            'numberOfMembers' => rand(30, 50),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2000,
            'semester' => "1",
            'clubName' => "Cooking Club",
            'numberOfMembers' => rand(30, 50),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2000,
            'semester' => "1",
            'clubName' => "Volleyball Club",
            'numberOfMembers' => rand(30, 50),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2000,
            'semester' => "1",
            'clubName' => "Photography Club",
            'numberOfMembers' => rand(30, 50),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2000,
            'semester' => "2",
            'clubName' => "Student Council",
            'numberOfMembers' => rand(20, 50),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2000,
            'semester' => "2",
            'clubName' => "Student Volunteers",
            'numberOfMembers' => rand(30, 200),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2000,
            'semester' => "2",
            'clubName' => "Drama Club",
            'numberOfMembers' => rand(30, 50),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2000,
            'semester' => "2",
            'clubName' => "Music Club",
            'numberOfMembers' => rand(30, 50),
        ));


        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2000,
            'semester' => "2",
            'clubName' => "Aikido Club",
            'numberOfMembers' => rand(30, 50),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2000,
            'semester' => "2",
            'clubName' => "Badminton Club",
            'numberOfMembers' => rand(30, 50),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2000,
            'semester' => "2",
            'clubName' => "Basketball Club",
            'numberOfMembers' => rand(30, 50),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2000,
            'semester' => "2",
            'clubName' => "Poetry Club",
            'numberOfMembers' => rand(30, 50),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2000,
            'semester' => "2",
            'clubName' => "Debate Club",
            'numberOfMembers' => rand(30, 50),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2000,
            'semester' => "2",
            'clubName' => "Cooking Club",
            'numberOfMembers' => rand(30, 50),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2000,
            'semester' => "2",
            'clubName' => "Volleyball Club",
            'numberOfMembers' => rand(30, 50),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2000,
            'semester' => "2",
            'clubName' => "Photography Club",
            'numberOfMembers' => rand(30, 50),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2001,
            'semester' => "1",
            'clubName' => "Student Council",
            'numberOfMembers' => rand(10, 50),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2001,
            'semester' => "1",
            'clubName' => "Student Volunteers",
            'numberOfMembers' => rand(30, 100),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2001,
            'semester' => "1",
            'clubName' => "Drama Club",
            'numberOfMembers' => rand(30, 50),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2001,
            'semester' => "1",
            'clubName' => "Music Club",
            'numberOfMembers' => rand(30, 50),
        ));


        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2001,
            'semester' => "1",
            'clubName' => "Aikido Club",
            'numberOfMembers' => rand(30, 50),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2001,
            'semester' => "1",
            'clubName' => "Badminton Club",
            'numberOfMembers' => rand(30, 50),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2001,
            'semester' => "1",
            'clubName' => "Basketball Club",
            'numberOfMembers' => rand(30, 50),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2001,
            'semester' => "1",
            'clubName' => "Poetry Club",
            'numberOfMembers' => rand(30, 50),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2001,
            'semester' => "1",
            'clubName' => "Debate Club",
            'numberOfMembers' => rand(30, 50),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2001,
            'semester' => "1",
            'clubName' => "Cooking Club",
            'numberOfMembers' => rand(30, 50),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2001,
            'semester' => "1",
            'clubName' => "Volleyball Club",
            'numberOfMembers' => rand(30, 50),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2001,
            'semester' => "1",
            'clubName' => "Photography Club",
            'numberOfMembers' => rand(30, 50),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2001,
            'semester' => "2",
            'clubName' => "Student Council",
            'numberOfMembers' => rand(20, 50),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2001,
            'semester' => "2",
            'clubName' => "Student Volunteers",
            'numberOfMembers' => rand(30, 200),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2001,
            'semester' => "2",
            'clubName' => "Drama Club",
            'numberOfMembers' => rand(30, 50),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2001,
            'semester' => "2",
            'clubName' => "Music Club",
            'numberOfMembers' => rand(30, 50),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2001,
            'semester' => "2",
            'clubName' => "Aikido Club",
            'numberOfMembers' => rand(30, 50),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2001,
            'semester' => "2",
            'clubName' => "Badminton Club",
            'numberOfMembers' => rand(30, 50),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2001,
            'semester' => "2",
            'clubName' => "Basketball Club",
            'numberOfMembers' => rand(30, 50),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2001,
            'semester' => "2",
            'clubName' => "Poetry Club",
            'numberOfMembers' => rand(30, 50),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2001,
            'semester' => "2",
            'clubName' => "Debate Club",
            'numberOfMembers' => rand(30, 50),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2001,
            'semester' => "2",
            'clubName' => "Cooking Club",
            'numberOfMembers' => rand(30, 50),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2001,
            'semester' => "2",
            'clubName' => "Volleyball Club",
            'numberOfMembers' => rand(30, 50),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2001,
            'semester' => "2",
            'clubName' => "Photography Club",
            'numberOfMembers' => rand(30, 50),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2002,
            'semester' => "1",
            'clubName' => "Student Council",
            'numberOfMembers' => rand(10, 50),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2002,
            'semester' => "1",
            'clubName' => "Student Volunteers",
            'numberOfMembers' => rand(30, 100),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2002,
            'semester' => "1",
            'clubName' => "Drama Club",
            'numberOfMembers' => rand(50, 150),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2002,
            'semester' => "1",
            'clubName' => "Music Club",
            'numberOfMembers' => rand(50, 150),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2002,
            'semester' => "1",
            'clubName' => "Aikido Club",
            'numberOfMembers' => rand(50, 150),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2002,
            'semester' => "1",
            'clubName' => "Badminton Club",
            'numberOfMembers' => rand(50, 150),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2002,
            'semester' => "1",
            'clubName' => "Basketball Club",
            'numberOfMembers' => rand(50, 150),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2002,
            'semester' => "1",
            'clubName' => "Poetry Club",
            'numberOfMembers' => rand(50, 150),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2002,
            'semester' => "1",
            'clubName' => "Debate Club",
            'numberOfMembers' => rand(50, 150),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2002,
            'semester' => "1",
            'clubName' => "Cooking Club",
            'numberOfMembers' => rand(50, 150),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2002,
            'semester' => "1",
            'clubName' => "Volleyball Club",
            'numberOfMembers' => rand(50, 150),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2002,
            'semester' => "1",
            'clubName' => "Photography Club",
            'numberOfMembers' => rand(50, 150),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2002,
            'semester' => "2",
            'clubName' => "Student Council",
            'numberOfMembers' => rand(40, 80),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2002,
            'semester' => "2",
            'clubName' => "Student Volunteers",
            'numberOfMembers' => rand(100, 200),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2002,
            'semester' => "2",
            'clubName' => "Drama Club",
            'numberOfMembers' => rand(50, 150),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2002,
            'semester' => "2",
            'clubName' => "Music Club",
            'numberOfMembers' => rand(50, 150),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2002,
            'semester' => "2",
            'clubName' => "Aikido Club",
            'numberOfMembers' => rand(50, 150),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2002,
            'semester' => "2",
            'clubName' => "Badminton Club",
            'numberOfMembers' => rand(50, 150),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2002,
            'semester' => "2",
            'clubName' => "Basketball Club",
            'numberOfMembers' => rand(50, 150),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2002,
            'semester' => "2",
            'clubName' => "Poetry Club",
            'numberOfMembers' => rand(50, 150),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2002,
            'semester' => "2",
            'clubName' => "Debate Club",
            'numberOfMembers' => rand(50, 150),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2002,
            'semester' => "2",
            'clubName' => "Cooking Club",
            'numberOfMembers' => rand(50, 150),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2002,
            'semester' => "2",
            'clubName' => "Volleyball Club",
            'numberOfMembers' => rand(50, 150),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2002,
            'semester' => "2",
            'clubName' => "Photography Club",
            'numberOfMembers' => rand(50, 150),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2003,
            'semester' => "1",
            'clubName' => "Student Council",
            'numberOfMembers' => rand(10, 50),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2003,
            'semester' => "1",
            'clubName' => "Student Volunteers",
            'numberOfMembers' => rand(30, 100),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2003,
            'semester' => "1",
            'clubName' => "Drama Club",
            'numberOfMembers' => rand(50, 150),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2003,
            'semester' => "1",
            'clubName' => "Music Club",
            'numberOfMembers' => rand(50, 150),
        ));


        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2003,
            'semester' => "1",
            'clubName' => "Aikido Club",
            'numberOfMembers' => rand(50, 150),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2003,
            'semester' => "1",
            'clubName' => "Badminton Club",
            'numberOfMembers' => rand(50, 150),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2003,
            'semester' => "1",
            'clubName' => "Basketball Club",
            'numberOfMembers' => rand(50, 150),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2003,
            'semester' => "1",
            'clubName' => "Poetry Club",
            'numberOfMembers' => rand(50, 150),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2003,
            'semester' => "1",
            'clubName' => "Debate Club",
            'numberOfMembers' => rand(50, 150),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2003,
            'semester' => "1",
            'clubName' => "Cooking Club",
            'numberOfMembers' => rand(50, 150),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2003,
            'semester' => "1",
            'clubName' => "Volleyball Club",
            'numberOfMembers' => rand(50, 150),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2003,
            'semester' => "1",
            'clubName' => "Photography Club",
            'numberOfMembers' => rand(50, 150),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2003,
            'semester' => "2",
            'clubName' => "Student Council",
            'numberOfMembers' => rand(40, 80),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2003,
            'semester' => "2",
            'clubName' => "Student Volunteers",
            'numberOfMembers' => rand(100, 200),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2003,
            'semester' => "2",
            'clubName' => "Drama Club",
            'numberOfMembers' => rand(50, 150),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2003,
            'semester' => "2",
            'clubName' => "Music Club",
            'numberOfMembers' => rand(50, 150),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2003,
            'semester' => "2",
            'clubName' => "Aikido Club",
            'numberOfMembers' => rand(50, 150),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2003,
            'semester' => "2",
            'clubName' => "Badminton Club",
            'numberOfMembers' => rand(50, 150),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2003,
            'semester' => "2",
            'clubName' => "Basketball Club",
            'numberOfMembers' => rand(50, 150),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2003,
            'semester' => "2",
            'clubName' => "Poetry Club",
            'numberOfMembers' => rand(50, 150),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2003,
            'semester' => "2",
            'clubName' => "Debate Club",
            'numberOfMembers' => rand(50, 150),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2003,
            'semester' => "2",
            'clubName' => "Cooking Club",
            'numberOfMembers' => rand(50, 150),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2003,
            'semester' => "2",
            'clubName' => "Volleyball Club",
            'numberOfMembers' => rand(50, 150),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2003,
            'semester' => "2",
            'clubName' => "Photography Club",
            'numberOfMembers' => rand(50, 150),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2004,
            'semester' => "1",
            'clubName' => "Student Council",
            'numberOfMembers' => rand(10, 50),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2004,
            'semester' => "1",
            'clubName' => "Student Volunteers",
            'numberOfMembers' => rand(30, 100),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2004,
            'semester' => "1",
            'clubName' => "Drama Club",
            'numberOfMembers' => rand(30, 80),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2004,
            'semester' => "1",
            'clubName' => "Music Club",
            'numberOfMembers' => rand(30, 80),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2004,
            'semester' => "1",
            'clubName' => "Aikido Club",
            'numberOfMembers' => rand(30, 80),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2004,
            'semester' => "1",
            'clubName' => "Badminton Club",
            'numberOfMembers' => rand(30, 80),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2004,
            'semester' => "1",
            'clubName' => "Basketball Club",
            'numberOfMembers' => rand(30, 80),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2004,
            'semester' => "1",
            'clubName' => "Poetry Club",
            'numberOfMembers' => rand(30, 80),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2004,
            'semester' => "1",
            'clubName' => "Debate Club",
            'numberOfMembers' => rand(30, 80),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2004,
            'semester' => "1",
            'clubName' => "Cooking Club",
            'numberOfMembers' => rand(30, 80),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2004,
            'semester' => "1",
            'clubName' => "Volleyball Club",
            'numberOfMembers' => rand(30, 80),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2004,
            'semester' => "1",
            'clubName' => "Photography Club",
            'numberOfMembers' => rand(30, 80),
        ));


        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2004,
            'semester' => "1",
            'clubName' => "Running Club",
            'numberOfMembers' => rand(30, 80),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2004,
            'semester' => "1",
            'clubName' => "Rowing Club",
            'numberOfMembers' => rand(30, 80),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2004,
            'semester' => "1",
            'clubName' => "Cricket Club",
            'numberOfMembers' => rand(30, 80),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2004,
            'semester' => "1",
            'clubName' => "Arts & Crafts Club",
            'numberOfMembers' => rand(30, 80),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2004,
            'semester' => "1",
            'clubName' => "Japanese Club",
            'numberOfMembers' => rand(30, 80),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2004,
            'semester' => "1",
            'clubName' => "Korean Club",
            'numberOfMembers' => rand(30, 80),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2004,
            'semester' => "1",
            'clubName' => "Tae Kwan Do Club",
            'numberOfMembers' => rand(30, 80),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2004,
            'semester' => "2",
            'clubName' => "Student Council",
            'numberOfMembers' => rand(40, 80),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2004,
            'semester' => "2",
            'clubName' => "Student Volunteers",
            'numberOfMembers' => rand(100, 200),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2004,
            'semester' => "2",
            'clubName' => "Drama Club",
            'numberOfMembers' => rand(30, 80),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2004,
            'semester' => "2",
            'clubName' => "Music Club",
            'numberOfMembers' => rand(30, 80),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2004,
            'semester' => "2",
            'clubName' => "Aikido Club",
            'numberOfMembers' => rand(30, 80),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2004,
            'semester' => "2",
            'clubName' => "Badminton Club",
            'numberOfMembers' => rand(30, 80),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2004,
            'semester' => "2",
            'clubName' => "Basketball Club",
            'numberOfMembers' => rand(30, 80),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2004,
            'semester' => "2",
            'clubName' => "Poetry Club",
            'numberOfMembers' => rand(30, 80),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2004,
            'semester' => "2",
            'clubName' => "Debate Club",
            'numberOfMembers' => rand(30, 80),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2004,
            'semester' => "2",
            'clubName' => "Cooking Club",
            'numberOfMembers' => rand(30, 80),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2004,
            'semester' => "2",
            'clubName' => "Volleyball Club",
            'numberOfMembers' => rand(30, 80),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2004,
            'semester' => "2",
            'clubName' => "Photography Club",
            'numberOfMembers' => rand(30, 80),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2004,
            'semester' => "2",
            'clubName' => "Running Club",
            'numberOfMembers' => rand(30, 80),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2004,
            'semester' => "2",
            'clubName' => "Rowing Club",
            'numberOfMembers' => rand(30, 80),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2004,
            'semester' => "2",
            'clubName' => "Cricket Club",
            'numberOfMembers' => rand(30, 80),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2004,
            'semester' => "2",
            'clubName' => "Arts & Crafts Club",
            'numberOfMembers' => rand(30, 80),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2004,
            'semester' => "2",
            'clubName' => "Japanese Club",
            'numberOfMembers' => rand(30, 80),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2004,
            'semester' => "2",
            'clubName' => "Korean Club",
            'numberOfMembers' => rand(30, 80),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2004,
            'semester' => "2",
            'clubName' => "Tae Kwan Do Club",
            'numberOfMembers' => rand(30, 80),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2005,
            'semester' => "1",
            'clubName' => "Student Council",
            'numberOfMembers' => rand(10, 50),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2005,
            'semester' => "1",
            'clubName' => "Student Volunteers",
            'numberOfMembers' => rand(30, 100),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2005,
            'semester' => "1",
            'clubName' => "Drama Club",
            'numberOfMembers' => rand(30, 80),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2005,
            'semester' => "1",
            'clubName' => "Music Club",
            'numberOfMembers' => rand(30, 80),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2005,
            'semester' => "1",
            'clubName' => "Aikido Club",
            'numberOfMembers' => rand(30, 80),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2005,
            'semester' => "1",
            'clubName' => "Badminton Club",
            'numberOfMembers' => rand(30, 80),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2005,
            'semester' => "1",
            'clubName' => "Basketball Club",
            'numberOfMembers' => rand(30, 80),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2005,
            'semester' => "1",
            'clubName' => "Poetry Club",
            'numberOfMembers' => rand(30, 80),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2005,
            'semester' => "1",
            'clubName' => "Debate Club",
            'numberOfMembers' => rand(30, 80),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2005,
            'semester' => "1",
            'clubName' => "Cooking Club",
            'numberOfMembers' => rand(30, 80),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2005,
            'semester' => "1",
            'clubName' => "Volleyball Club",
            'numberOfMembers' => rand(30, 80),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2005,
            'semester' => "1",
            'clubName' => "Photography Club",
            'numberOfMembers' => rand(30, 80),
        ));


        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2005,
            'semester' => "1",
            'clubName' => "Running Club",
            'numberOfMembers' => rand(30, 80),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2005,
            'semester' => "1",
            'clubName' => "Rowing Club",
            'numberOfMembers' => rand(30, 80),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2005,
            'semester' => "1",
            'clubName' => "Cricket Club",
            'numberOfMembers' => rand(30, 80),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2005,
            'semester' => "1",
            'clubName' => "Arts & Crafts Club",
            'numberOfMembers' => rand(30, 80),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2005,
            'semester' => "1",
            'clubName' => "Japanese Club",
            'numberOfMembers' => rand(30, 80),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2005,
            'semester' => "1",
            'clubName' => "Korean Club",
            'numberOfMembers' => rand(30, 80),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2005,
            'semester' => "1",
            'clubName' => "Tae Kwan Do Club",
            'numberOfMembers' => rand(30, 80),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2005,
            'semester' => "2",
            'clubName' => "Student Council",
            'numberOfMembers' => rand(40, 80),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2005,
            'semester' => "2",
            'clubName' => "Student Volunteers",
            'numberOfMembers' => rand(100, 200),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2005,
            'semester' => "2",
            'clubName' => "Drama Club",
            'numberOfMembers' => rand(30, 80),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2005,
            'semester' => "2",
            'clubName' => "Music Club",
            'numberOfMembers' => rand(30, 80),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2005,
            'semester' => "2",
            'clubName' => "Aikido Club",
            'numberOfMembers' => rand(30, 80),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2005,
            'semester' => "2",
            'clubName' => "Badminton Club",
            'numberOfMembers' => rand(30, 80),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2005,
            'semester' => "2",
            'clubName' => "Basketball Club",
            'numberOfMembers' => rand(30, 80),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2005,
            'semester' => "2",
            'clubName' => "Poetry Club",
            'numberOfMembers' => rand(30, 80),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2005,
            'semester' => "2",
            'clubName' => "Debate Club",
            'numberOfMembers' => rand(30, 80),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2005,
            'semester' => "2",
            'clubName' => "Cooking Club",
            'numberOfMembers' => rand(30, 80),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2005,
            'semester' => "2",
            'clubName' => "Volleyball Club",
            'numberOfMembers' => rand(30, 80),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2005,
            'semester' => "2",
            'clubName' => "Photography Club",
            'numberOfMembers' => rand(30, 80),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2005,
            'semester' => "2",
            'clubName' => "Running Club",
            'numberOfMembers' => rand(30, 80),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2005,
            'semester' => "2",
            'clubName' => "Rowing Club",
            'numberOfMembers' => rand(30, 80),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2005,
            'semester' => "2",
            'clubName' => "Cricket Club",
            'numberOfMembers' => rand(30, 80),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2005,
            'semester' => "2",
            'clubName' => "Arts & Crafts Club",
            'numberOfMembers' => rand(30, 80),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2005,
            'semester' => "2",
            'clubName' => "Japanese Club",
            'numberOfMembers' => rand(30, 80),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2005,
            'semester' => "2",
            'clubName' => "Korean Club",
            'numberOfMembers' => rand(30, 80),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2005,
            'semester' => "2",
            'clubName' => "Tae Kwan Do Club",
            'numberOfMembers' => rand(30, 80),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2006,
            'semester' => "1",
            'clubName' => "Student Council",
            'numberOfMembers' => rand(10, 50),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2006,
            'semester' => "1",
            'clubName' => "Student Volunteers",
            'numberOfMembers' => rand(30, 100),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2006,
            'semester' => "1",
            'clubName' => "Drama Club",
            'numberOfMembers' => rand(30, 80),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2006,
            'semester' => "1",
            'clubName' => "Music Club",
            'numberOfMembers' => rand(30, 80),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2006,
            'semester' => "1",
            'clubName' => "Aikido Club",
            'numberOfMembers' => rand(30, 80),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2006,
            'semester' => "1",
            'clubName' => "Badminton Club",
            'numberOfMembers' => rand(30, 80),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2006,
            'semester' => "1",
            'clubName' => "Basketball Club",
            'numberOfMembers' => rand(30, 80),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2006,
            'semester' => "1",
            'clubName' => "Poetry Club",
            'numberOfMembers' => rand(30, 80),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2006,
            'semester' => "1",
            'clubName' => "Debate Club",
            'numberOfMembers' => rand(30, 80),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2006,
            'semester' => "1",
            'clubName' => "Cooking Club",
            'numberOfMembers' => rand(30, 80),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2006,
            'semester' => "1",
            'clubName' => "Volleyball Club",
            'numberOfMembers' => rand(30, 80),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2006,
            'semester' => "1",
            'clubName' => "Photography Club",
            'numberOfMembers' => rand(30, 80),
        ));


        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2006,
            'semester' => "1",
            'clubName' => "Running Club",
            'numberOfMembers' => rand(30, 80),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2006,
            'semester' => "1",
            'clubName' => "Rowing Club",
            'numberOfMembers' => rand(30, 80),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2006,
            'semester' => "1",
            'clubName' => "Cricket Club",
            'numberOfMembers' => rand(30, 80),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2006,
            'semester' => "1",
            'clubName' => "Arts & Crafts Club",
            'numberOfMembers' => rand(30, 80),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2006,
            'semester' => "1",
            'clubName' => "Japanese Club",
            'numberOfMembers' => rand(30, 80),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2006,
            'semester' => "1",
            'clubName' => "Korean Club",
            'numberOfMembers' => rand(30, 80),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2006,
            'semester' => "1",
            'clubName' => "Tae Kwan Do Club",
            'numberOfMembers' => rand(30, 80),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2006,
            'semester' => "2",
            'clubName' => "Student Council",
            'numberOfMembers' => rand(40, 80),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2006,
            'semester' => "2",
            'clubName' => "Student Volunteers",
            'numberOfMembers' => rand(100, 200),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2006,
            'semester' => "2",
            'clubName' => "Drama Club",
            'numberOfMembers' => rand(30, 80),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2006,
            'semester' => "2",
            'clubName' => "Music Club",
            'numberOfMembers' => rand(30, 80),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2006,
            'semester' => "2",
            'clubName' => "Aikido Club",
            'numberOfMembers' => rand(30, 80),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2006,
            'semester' => "2",
            'clubName' => "Badminton Club",
            'numberOfMembers' => rand(30, 80),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2006,
            'semester' => "2",
            'clubName' => "Basketball Club",
            'numberOfMembers' => rand(30, 80),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2006,
            'semester' => "2",
            'clubName' => "Poetry Club",
            'numberOfMembers' => rand(30, 80),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2006,
            'semester' => "2",
            'clubName' => "Debate Club",
            'numberOfMembers' => rand(30, 80),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2006,
            'semester' => "2",
            'clubName' => "Cooking Club",
            'numberOfMembers' => rand(30, 80),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2006,
            'semester' => "2",
            'clubName' => "Volleyball Club",
            'numberOfMembers' => rand(30, 80),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2006,
            'semester' => "2",
            'clubName' => "Photography Club",
            'numberOfMembers' => rand(30, 80),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2006,
            'semester' => "2",
            'clubName' => "Running Club",
            'numberOfMembers' => rand(30, 80),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2006,
            'semester' => "2",
            'clubName' => "Rowing Club",
            'numberOfMembers' => rand(30, 80),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2006,
            'semester' => "2",
            'clubName' => "Cricket Club",
            'numberOfMembers' => rand(30, 80),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2006,
            'semester' => "2",
            'clubName' => "Arts & Crafts Club",
            'numberOfMembers' => rand(30, 80),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2006,
            'semester' => "2",
            'clubName' => "Japanese Club",
            'numberOfMembers' => rand(30, 80),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2006,
            'semester' => "2",
            'clubName' => "Korean Club",
            'numberOfMembers' => rand(30, 80),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2006,
            'semester' => "2",
            'clubName' => "Tae Kwan Do Club",
            'numberOfMembers' => rand(30, 80),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2007,
            'semester' => "1",
            'clubName' => "Student Council",
            'numberOfMembers' => rand(10, 50),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2007,
            'semester' => "1",
            'clubName' => "Student Volunteers",
            'numberOfMembers' => rand(30, 100),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2007,
            'semester' => "1",
            'clubName' => "Drama Club",
            'numberOfMembers' => rand(50, 100),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2007,
            'semester' => "1",
            'clubName' => "Music Club",
            'numberOfMembers' => rand(50, 100),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2007,
            'semester' => "1",
            'clubName' => "Aikido Club",
            'numberOfMembers' => rand(50, 100),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2007,
            'semester' => "1",
            'clubName' => "Badminton Club",
            'numberOfMembers' => rand(50, 100),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2007,
            'semester' => "1",
            'clubName' => "Basketball Club",
            'numberOfMembers' => rand(50, 100),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2007,
            'semester' => "1",
            'clubName' => "Poetry Club",
            'numberOfMembers' => rand(50, 100),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2007,
            'semester' => "1",
            'clubName' => "Debate Club",
            'numberOfMembers' => rand(50, 100),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2007,
            'semester' => "1",
            'clubName' => "Cooking Club",
            'numberOfMembers' => rand(50, 100),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2007,
            'semester' => "1",
            'clubName' => "Volleyball Club",
            'numberOfMembers' => rand(50, 100),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2007,
            'semester' => "1",
            'clubName' => "Photography Club",
            'numberOfMembers' => rand(50, 100),
        ));


        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2007,
            'semester' => "1",
            'clubName' => "Running Club",
            'numberOfMembers' => rand(50, 100),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2007,
            'semester' => "1",
            'clubName' => "Rowing Club",
            'numberOfMembers' => rand(50, 100),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2007,
            'semester' => "1",
            'clubName' => "Cricket Club",
            'numberOfMembers' => rand(50, 100),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2007,
            'semester' => "1",
            'clubName' => "Arts & Crafts Club",
            'numberOfMembers' => rand(50, 100),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2007,
            'semester' => "1",
            'clubName' => "Japanese Club",
            'numberOfMembers' => rand(50, 100),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2007,
            'semester' => "1",
            'clubName' => "Korean Club",
            'numberOfMembers' => rand(50, 100),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2007,
            'semester' => "1",
            'clubName' => "Tae Kwan Do Club",
            'numberOfMembers' => rand(50, 100),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2007,
            'semester' => "2",
            'clubName' => "Student Council",
            'numberOfMembers' => rand(40, 80),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2007,
            'semester' => "2",
            'clubName' => "Student Volunteers",
            'numberOfMembers' => rand(100, 200),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2007,
            'semester' => "2",
            'clubName' => "Drama Club",
            'numberOfMembers' => rand(50, 100),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2007,
            'semester' => "2",
            'clubName' => "Music Club",
            'numberOfMembers' => rand(50, 100),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2007,
            'semester' => "2",
            'clubName' => "Aikido Club",
            'numberOfMembers' => rand(50, 100),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2007,
            'semester' => "2",
            'clubName' => "Badminton Club",
            'numberOfMembers' => rand(50, 100),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2007,
            'semester' => "2",
            'clubName' => "Basketball Club",
            'numberOfMembers' => rand(50, 100),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2007,
            'semester' => "2",
            'clubName' => "Poetry Club",
            'numberOfMembers' => rand(50, 100),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2007,
            'semester' => "2",
            'clubName' => "Debate Club",
            'numberOfMembers' => rand(50, 100),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2007,
            'semester' => "2",
            'clubName' => "Cooking Club",
            'numberOfMembers' => rand(50, 100),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2007,
            'semester' => "2",
            'clubName' => "Volleyball Club",
            'numberOfMembers' => rand(50, 100),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2007,
            'semester' => "2",
            'clubName' => "Photography Club",
            'numberOfMembers' => rand(50, 100),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2007,
            'semester' => "2",
            'clubName' => "Running Club",
            'numberOfMembers' => rand(50, 100),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2007,
            'semester' => "2",
            'clubName' => "Rowing Club",
            'numberOfMembers' => rand(50, 100),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2007,
            'semester' => "2",
            'clubName' => "Cricket Club",
            'numberOfMembers' => rand(50, 100),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2007,
            'semester' => "2",
            'clubName' => "Arts & Crafts Club",
            'numberOfMembers' => rand(50, 100),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2007,
            'semester' => "2",
            'clubName' => "Japanese Club",
            'numberOfMembers' => rand(50, 100),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2007,
            'semester' => "2",
            'clubName' => "Korean Club",
            'numberOfMembers' => rand(50, 100),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2007,
            'semester' => "2",
            'clubName' => "Tae Kwan Do Club",
            'numberOfMembers' => rand(50, 100),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2008,
            'semester' => "1",
            'clubName' => "Student Council",
            'numberOfMembers' => rand(10, 50),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2008,
            'semester' => "1",
            'clubName' => "Student Volunteers",
            'numberOfMembers' => rand(30, 100),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2008,
            'semester' => "1",
            'clubName' => "Drama Club",
            'numberOfMembers' => rand(50, 100),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2008,
            'semester' => "1",
            'clubName' => "Music Club",
            'numberOfMembers' => rand(50, 100),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2008,
            'semester' => "1",
            'clubName' => "Aikido Club",
            'numberOfMembers' => rand(50, 100),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2008,
            'semester' => "1",
            'clubName' => "Badminton Club",
            'numberOfMembers' => rand(50, 100),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2008,
            'semester' => "1",
            'clubName' => "Basketball Club",
            'numberOfMembers' => rand(50, 100),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2008,
            'semester' => "1",
            'clubName' => "Poetry Club",
            'numberOfMembers' => rand(50, 100),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2008,
            'semester' => "1",
            'clubName' => "Debate Club",
            'numberOfMembers' => rand(50, 100),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2008,
            'semester' => "1",
            'clubName' => "Cooking Club",
            'numberOfMembers' => rand(50, 100),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2008,
            'semester' => "1",
            'clubName' => "Volleyball Club",
            'numberOfMembers' => rand(50, 100),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2008,
            'semester' => "1",
            'clubName' => "Photography Club",
            'numberOfMembers' => rand(50, 100),
        ));


        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2008,
            'semester' => "1",
            'clubName' => "Running Club",
            'numberOfMembers' => rand(50, 100),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2008,
            'semester' => "1",
            'clubName' => "Rowing Club",
            'numberOfMembers' => rand(50, 100),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2008,
            'semester' => "1",
            'clubName' => "Cricket Club",
            'numberOfMembers' => rand(50, 100),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2008,
            'semester' => "1",
            'clubName' => "Arts & Crafts Club",
            'numberOfMembers' => rand(50, 100),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2008,
            'semester' => "1",
            'clubName' => "Japanese Club",
            'numberOfMembers' => rand(50, 100),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2008,
            'semester' => "1",
            'clubName' => "Korean Club",
            'numberOfMembers' => rand(50, 100),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2008,
            'semester' => "1",
            'clubName' => "Tae Kwan Do Club",
            'numberOfMembers' => rand(50, 100),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2008,
            'semester' => "2",
            'clubName' => "Student Council",
            'numberOfMembers' => rand(40, 80),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2008,
            'semester' => "2",
            'clubName' => "Student Volunteers",
            'numberOfMembers' => rand(100, 200),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2008,
            'semester' => "2",
            'clubName' => "Drama Club",
            'numberOfMembers' => rand(50, 100),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2008,
            'semester' => "2",
            'clubName' => "Music Club",
            'numberOfMembers' => rand(50, 100),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2008,
            'semester' => "2",
            'clubName' => "Aikido Club",
            'numberOfMembers' => rand(50, 100),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2008,
            'semester' => "2",
            'clubName' => "Badminton Club",
            'numberOfMembers' => rand(50, 100),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2008,
            'semester' => "2",
            'clubName' => "Basketball Club",
            'numberOfMembers' => rand(50, 100),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2008,
            'semester' => "2",
            'clubName' => "Poetry Club",
            'numberOfMembers' => rand(50, 100),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2008,
            'semester' => "2",
            'clubName' => "Debate Club",
            'numberOfMembers' => rand(50, 100),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2008,
            'semester' => "2",
            'clubName' => "Cooking Club",
            'numberOfMembers' => rand(50, 100),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2008,
            'semester' => "2",
            'clubName' => "Volleyball Club",
            'numberOfMembers' => rand(50, 100),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2008,
            'semester' => "2",
            'clubName' => "Photography Club",
            'numberOfMembers' => rand(50, 100),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2008,
            'semester' => "2",
            'clubName' => "Running Club",
            'numberOfMembers' => rand(50, 100),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2008,
            'semester' => "2",
            'clubName' => "Rowing Club",
            'numberOfMembers' => rand(50, 100),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2008,
            'semester' => "2",
            'clubName' => "Cricket Club",
            'numberOfMembers' => rand(50, 100),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2008,
            'semester' => "2",
            'clubName' => "Arts & Crafts Club",
            'numberOfMembers' => rand(50, 100),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2008,
            'semester' => "2",
            'clubName' => "Japanese Club",
            'numberOfMembers' => rand(50, 100),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2008,
            'semester' => "2",
            'clubName' => "Korean Club",
            'numberOfMembers' => rand(50, 100),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2008,
            'semester' => "2",
            'clubName' => "Tae Kwan Do Club",
            'numberOfMembers' => rand(50, 100),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2009,
            'semester' => "1",
            'clubName' => "Student Council",
            'numberOfMembers' => rand(10, 50),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2009,
            'semester' => "1",
            'clubName' => "Student Volunteers",
            'numberOfMembers' => rand(30, 100),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2009,
            'semester' => "1",
            'clubName' => "Drama Club",
            'numberOfMembers' => rand(50, 100),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2009,
            'semester' => "1",
            'clubName' => "Music Club",
            'numberOfMembers' => rand(50, 100),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2009,
            'semester' => "1",
            'clubName' => "Aikido Club",
            'numberOfMembers' => rand(50, 100),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2009,
            'semester' => "1",
            'clubName' => "Badminton Club",
            'numberOfMembers' => rand(50, 100),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2009,
            'semester' => "1",
            'clubName' => "Basketball Club",
            'numberOfMembers' => rand(50, 100),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2009,
            'semester' => "1",
            'clubName' => "Poetry Club",
            'numberOfMembers' => rand(50, 100),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2009,
            'semester' => "1",
            'clubName' => "Debate Club",
            'numberOfMembers' => rand(50, 100),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2009,
            'semester' => "1",
            'clubName' => "Cooking Club",
            'numberOfMembers' => rand(50, 100),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2009,
            'semester' => "1",
            'clubName' => "Volleyball Club",
            'numberOfMembers' => rand(50, 100),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2009,
            'semester' => "1",
            'clubName' => "Photography Club",
            'numberOfMembers' => rand(50, 100),
        ));


        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2009,
            'semester' => "1",
            'clubName' => "Running Club",
            'numberOfMembers' => rand(50, 100),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2009,
            'semester' => "1",
            'clubName' => "Rowing Club",
            'numberOfMembers' => rand(50, 100),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2009,
            'semester' => "1",
            'clubName' => "Cricket Club",
            'numberOfMembers' => rand(50, 100),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2009,
            'semester' => "1",
            'clubName' => "Arts & Crafts Club",
            'numberOfMembers' => rand(50, 100),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2009,
            'semester' => "1",
            'clubName' => "Japanese Club",
            'numberOfMembers' => rand(50, 100),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2009,
            'semester' => "1",
            'clubName' => "Korean Club",
            'numberOfMembers' => rand(50, 100),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2009,
            'semester' => "1",
            'clubName' => "Tae Kwan Do Club",
            'numberOfMembers' => rand(50, 100),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2009,
            'semester' => "1",
            'clubName' => "IT Club",
            'numberOfMembers' => rand(20, 40),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2009,
            'semester' => "1",
            'clubName' => "E-Sports Club",
            'numberOfMembers' => rand(20, 40),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2009,
            'semester' => "1",
            'clubName' => "Robotics Club",
            'numberOfMembers' => rand(20, 40),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2009,
            'semester' => "1",
            'clubName' => "Chemistry Club",
            'numberOfMembers' => rand(20, 40),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2009,
            'semester' => "1",
            'clubName' => "Biology Club",
            'numberOfMembers' => rand(20, 40),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2009,
            'semester' => "2",
            'clubName' => "Student Council",
            'numberOfMembers' => rand(40, 80),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2009,
            'semester' => "2",
            'clubName' => "Student Volunteers",
            'numberOfMembers' => rand(100, 200),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2009,
            'semester' => "2",
            'clubName' => "Drama Club",
            'numberOfMembers' => rand(50, 100),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2009,
            'semester' => "2",
            'clubName' => "Music Club",
            'numberOfMembers' => rand(50, 100),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2009,
            'semester' => "2",
            'clubName' => "Aikido Club",
            'numberOfMembers' => rand(50, 100),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2009,
            'semester' => "2",
            'clubName' => "Badminton Club",
            'numberOfMembers' => rand(50, 100),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2009,
            'semester' => "2",
            'clubName' => "Basketball Club",
            'numberOfMembers' => rand(50, 100),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2009,
            'semester' => "2",
            'clubName' => "Poetry Club",
            'numberOfMembers' => rand(50, 100),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2009,
            'semester' => "2",
            'clubName' => "Debate Club",
            'numberOfMembers' => rand(50, 100),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2009,
            'semester' => "2",
            'clubName' => "Cooking Club",
            'numberOfMembers' => rand(50, 100),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2009,
            'semester' => "2",
            'clubName' => "Volleyball Club",
            'numberOfMembers' => rand(50, 100),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2009,
            'semester' => "2",
            'clubName' => "Photography Club",
            'numberOfMembers' => rand(50, 100),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2009,
            'semester' => "2",
            'clubName' => "Running Club",
            'numberOfMembers' => rand(50, 100),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2009,
            'semester' => "2",
            'clubName' => "Rowing Club",
            'numberOfMembers' => rand(50, 100),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2009,
            'semester' => "2",
            'clubName' => "Cricket Club",
            'numberOfMembers' => rand(50, 100),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2009,
            'semester' => "2",
            'clubName' => "Arts & Crafts Club",
            'numberOfMembers' => rand(50, 100),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2009,
            'semester' => "2",
            'clubName' => "Japanese Club",
            'numberOfMembers' => rand(50, 100),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2009,
            'semester' => "2",
            'clubName' => "Korean Club",
            'numberOfMembers' => rand(50, 100),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2009,
            'semester' => "2",
            'clubName' => "Tae Kwan Do Club",
            'numberOfMembers' => rand(50, 100),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2009,
            'semester' => "2",
            'clubName' => "IT Club",
            'numberOfMembers' => rand(20, 40),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2009,
            'semester' => "2",
            'clubName' => "E-Sports Club",
            'numberOfMembers' => rand(20, 40),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2009,
            'semester' => "2",
            'clubName' => "Robotics Club",
            'numberOfMembers' => rand(20, 40),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2009,
            'semester' => "2",
            'clubName' => "Chemistry Club",
            'numberOfMembers' => rand(20, 40),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2009,
            'semester' => "2",
            'clubName' => "Biology Club",
            'numberOfMembers' => rand(20, 40),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2010,
            'semester' => "1",
            'clubName' => "Student Council",
            'numberOfMembers' => rand(10, 50),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2010,
            'semester' => "1",
            'clubName' => "Student Volunteers",
            'numberOfMembers' => rand(30, 100),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2010,
            'semester' => "1",
            'clubName' => "Drama Club",
            'numberOfMembers' => rand(50, 100),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2010,
            'semester' => "1",
            'clubName' => "Music Club",
            'numberOfMembers' => rand(50, 100),
        ));


        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2010,
            'semester' => "1",
            'clubName' => "Aikido Club",
            'numberOfMembers' => rand(50, 100),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2010,
            'semester' => "1",
            'clubName' => "Badminton Club",
            'numberOfMembers' => rand(50, 100),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2010,
            'semester' => "1",
            'clubName' => "Basketball Club",
            'numberOfMembers' => rand(50, 100),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2010,
            'semester' => "1",
            'clubName' => "Poetry Club",
            'numberOfMembers' => rand(50, 100),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2010,
            'semester' => "1",
            'clubName' => "Debate Club",
            'numberOfMembers' => rand(50, 100),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2010,
            'semester' => "1",
            'clubName' => "Cooking Club",
            'numberOfMembers' => rand(50, 100),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2010,
            'semester' => "1",
            'clubName' => "Volleyball Club",
            'numberOfMembers' => rand(50, 100),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2010,
            'semester' => "1",
            'clubName' => "Photography Club",
            'numberOfMembers' => rand(50, 100),
        ));


        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2010,
            'semester' => "1",
            'clubName' => "Running Club",
            'numberOfMembers' => rand(50, 100),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2010,
            'semester' => "1",
            'clubName' => "Rowing Club",
            'numberOfMembers' => rand(50, 100),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2010,
            'semester' => "1",
            'clubName' => "Cricket Club",
            'numberOfMembers' => rand(50, 100),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2010,
            'semester' => "1",
            'clubName' => "Arts & Crafts Club",
            'numberOfMembers' => rand(50, 100),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2010,
            'semester' => "1",
            'clubName' => "Japanese Club",
            'numberOfMembers' => rand(50, 100),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2010,
            'semester' => "1",
            'clubName' => "Korean Club",
            'numberOfMembers' => rand(50, 100),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2010,
            'semester' => "1",
            'clubName' => "Tae Kwan Do Club",
            'numberOfMembers' => rand(50, 100),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2010,
            'semester' => "1",
            'clubName' => "IT Club",
            'numberOfMembers' => rand(20, 40),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2010,
            'semester' => "1",
            'clubName' => "E-Sports Club",
            'numberOfMembers' => rand(20, 40),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2010,
            'semester' => "1",
            'clubName' => "Robotics Club",
            'numberOfMembers' => rand(20, 40),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2010,
            'semester' => "1",
            'clubName' => "Chemistry Club",
            'numberOfMembers' => rand(20, 40),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2010,
            'semester' => "1",
            'clubName' => "Biology Club",
            'numberOfMembers' => rand(20, 40),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2010,
            'semester' => "2",
            'clubName' => "Student Council",
            'numberOfMembers' => rand(40, 80),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2010,
            'semester' => "2",
            'clubName' => "Student Volunteers",
            'numberOfMembers' => rand(100, 200),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2010,
            'semester' => "2",
            'clubName' => "Drama Club",
            'numberOfMembers' => rand(50, 100),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2010,
            'semester' => "2",
            'clubName' => "Music Club",
            'numberOfMembers' => rand(50, 100),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2010,
            'semester' => "2",
            'clubName' => "Aikido Club",
            'numberOfMembers' => rand(50, 100),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2010,
            'semester' => "2",
            'clubName' => "Badminton Club",
            'numberOfMembers' => rand(50, 100),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2010,
            'semester' => "2",
            'clubName' => "Basketball Club",
            'numberOfMembers' => rand(50, 100),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2010,
            'semester' => "2",
            'clubName' => "Poetry Club",
            'numberOfMembers' => rand(50, 100),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2010,
            'semester' => "2",
            'clubName' => "Debate Club",
            'numberOfMembers' => rand(50, 100),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2010,
            'semester' => "2",
            'clubName' => "Cooking Club",
            'numberOfMembers' => rand(50, 100),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2010,
            'semester' => "2",
            'clubName' => "Volleyball Club",
            'numberOfMembers' => rand(50, 100),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2010,
            'semester' => "2",
            'clubName' => "Photography Club",
            'numberOfMembers' => rand(50, 100),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2010,
            'semester' => "2",
            'clubName' => "Running Club",
            'numberOfMembers' => rand(50, 100),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2010,
            'semester' => "2",
            'clubName' => "Rowing Club",
            'numberOfMembers' => rand(50, 100),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2010,
            'semester' => "2",
            'clubName' => "Cricket Club",
            'numberOfMembers' => rand(50, 100),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2010,
            'semester' => "2",
            'clubName' => "Arts & Crafts Club",
            'numberOfMembers' => rand(50, 100),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2010,
            'semester' => "2",
            'clubName' => "Japanese Club",
            'numberOfMembers' => rand(50, 100),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2010,
            'semester' => "2",
            'clubName' => "Korean Club",
            'numberOfMembers' => rand(50, 100),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2010,
            'semester' => "2",
            'clubName' => "Tae Kwan Do Club",
            'numberOfMembers' => rand(50, 100),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2010,
            'semester' => "2",
            'clubName' => "IT Club",
            'numberOfMembers' => rand(20, 40),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2010,
            'semester' => "2",
            'clubName' => "E-Sports Club",
            'numberOfMembers' => rand(20, 40),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2010,
            'semester' => "2",
            'clubName' => "Robotics Club",
            'numberOfMembers' => rand(20, 40),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2010,
            'semester' => "2",
            'clubName' => "Chemistry Club",
            'numberOfMembers' => rand(20, 40),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2010,
            'semester' => "2",
            'clubName' => "Biology Club",
            'numberOfMembers' => rand(20, 40),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2011,
            'semester' => "1",
            'clubName' => "Student Council",
            'numberOfMembers' => rand(10, 50),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2011,
            'semester' => "1",
            'clubName' => "Student Volunteers",
            'numberOfMembers' => rand(30, 100),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2011,
            'semester' => "1",
            'clubName' => "Drama Club",
            'numberOfMembers' => rand(50, 100),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2011,
            'semester' => "1",
            'clubName' => "Music Club",
            'numberOfMembers' => rand(50, 100),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2011,
            'semester' => "1",
            'clubName' => "Aikido Club",
            'numberOfMembers' => rand(50, 100),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2011,
            'semester' => "1",
            'clubName' => "Badminton Club",
            'numberOfMembers' => rand(50, 100),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2011,
            'semester' => "1",
            'clubName' => "Basketball Club",
            'numberOfMembers' => rand(50, 100),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2011,
            'semester' => "1",
            'clubName' => "Poetry Club",
            'numberOfMembers' => rand(50, 100),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2011,
            'semester' => "1",
            'clubName' => "Debate Club",
            'numberOfMembers' => rand(50, 100),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2011,
            'semester' => "1",
            'clubName' => "Cooking Club",
            'numberOfMembers' => rand(50, 100),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2011,
            'semester' => "1",
            'clubName' => "Volleyball Club",
            'numberOfMembers' => rand(50, 100),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2011,
            'semester' => "1",
            'clubName' => "Photography Club",
            'numberOfMembers' => rand(50, 100),
        ));


        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2011,
            'semester' => "1",
            'clubName' => "Running Club",
            'numberOfMembers' => rand(50, 100),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2011,
            'semester' => "1",
            'clubName' => "Rowing Club",
            'numberOfMembers' => rand(50, 100),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2011,
            'semester' => "1",
            'clubName' => "Cricket Club",
            'numberOfMembers' => rand(50, 100),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2011,
            'semester' => "1",
            'clubName' => "Arts & Crafts Club",
            'numberOfMembers' => rand(50, 100),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2011,
            'semester' => "1",
            'clubName' => "Japanese Club",
            'numberOfMembers' => rand(50, 100),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2011,
            'semester' => "1",
            'clubName' => "Korean Club",
            'numberOfMembers' => rand(50, 100),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2011,
            'semester' => "1",
            'clubName' => "Tae Kwan Do Club",
            'numberOfMembers' => rand(50, 100),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2011,
            'semester' => "1",
            'clubName' => "IT Club",
            'numberOfMembers' => rand(20, 40),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2011,
            'semester' => "1",
            'clubName' => "E-Sports Club",
            'numberOfMembers' => rand(20, 40),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2011,
            'semester' => "1",
            'clubName' => "Robotics Club",
            'numberOfMembers' => rand(20, 40),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2011,
            'semester' => "1",
            'clubName' => "Chemistry Club",
            'numberOfMembers' => rand(20, 40),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2011,
            'semester' => "1",
            'clubName' => "Biology Club",
            'numberOfMembers' => rand(20, 40),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2011,
            'semester' => "2",
            'clubName' => "Student Council",
            'numberOfMembers' => rand(40, 80),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2011,
            'semester' => "2",
            'clubName' => "Student Volunteers",
            'numberOfMembers' => rand(100, 200),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2011,
            'semester' => "2",
            'clubName' => "Drama Club",
            'numberOfMembers' => rand(50, 100),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2011,
            'semester' => "2",
            'clubName' => "Music Club",
            'numberOfMembers' => rand(50, 100),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2011,
            'semester' => "2",
            'clubName' => "Aikido Club",
            'numberOfMembers' => rand(50, 100),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2011,
            'semester' => "2",
            'clubName' => "Badminton Club",
            'numberOfMembers' => rand(50, 100),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2011,
            'semester' => "2",
            'clubName' => "Basketball Club",
            'numberOfMembers' => rand(50, 100),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2011,
            'semester' => "2",
            'clubName' => "Poetry Club",
            'numberOfMembers' => rand(50, 100),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2011,
            'semester' => "2",
            'clubName' => "Debate Club",
            'numberOfMembers' => rand(50, 100),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2011,
            'semester' => "2",
            'clubName' => "Cooking Club",
            'numberOfMembers' => rand(50, 100),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2011,
            'semester' => "2",
            'clubName' => "Volleyball Club",
            'numberOfMembers' => rand(50, 100),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2011,
            'semester' => "2",
            'clubName' => "Photography Club",
            'numberOfMembers' => rand(50, 100),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2011,
            'semester' => "2",
            'clubName' => "Running Club",
            'numberOfMembers' => rand(50, 100),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2011,
            'semester' => "2",
            'clubName' => "Rowing Club",
            'numberOfMembers' => rand(50, 100),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2011,
            'semester' => "2",
            'clubName' => "Cricket Club",
            'numberOfMembers' => rand(50, 100),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2011,
            'semester' => "2",
            'clubName' => "Arts & Crafts Club",
            'numberOfMembers' => rand(50, 100),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2011,
            'semester' => "2",
            'clubName' => "Japanese Club",
            'numberOfMembers' => rand(50, 100),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2011,
            'semester' => "2",
            'clubName' => "Korean Club",
            'numberOfMembers' => rand(50, 100),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2011,
            'semester' => "2",
            'clubName' => "Tae Kwan Do Club",
            'numberOfMembers' => rand(50, 100),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2011,
            'semester' => "2",
            'clubName' => "IT Club",
            'numberOfMembers' => rand(20, 40),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2011,
            'semester' => "2",
            'clubName' => "E-Sports Club",
            'numberOfMembers' => rand(20, 40),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2011,
            'semester' => "2",
            'clubName' => "Robotics Club",
            'numberOfMembers' => rand(20, 40),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2011,
            'semester' => "2",
            'clubName' => "Chemistry Club",
            'numberOfMembers' => rand(20, 40),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2011,
            'semester' => "2",
            'clubName' => "Biology Club",
            'numberOfMembers' => rand(20, 40),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2012,
            'semester' => "1",
            'clubName' => "Student Council",
            'numberOfMembers' => rand(10, 50),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2012,
            'semester' => "1",
            'clubName' => "Student Volunteers",
            'numberOfMembers' => rand(30, 100),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2012,
            'semester' => "1",
            'clubName' => "Drama Club",
            'numberOfMembers' => rand(60, 100),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2012,
            'semester' => "1",
            'clubName' => "Music Club",
            'numberOfMembers' => rand(60, 100),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2012,
            'semester' => "1",
            'clubName' => "Aikido Club",
            'numberOfMembers' => rand(60, 100),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2012,
            'semester' => "1",
            'clubName' => "Badminton Club",
            'numberOfMembers' => rand(60, 100),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2012,
            'semester' => "1",
            'clubName' => "Basketball Club",
            'numberOfMembers' => rand(60, 100),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2012,
            'semester' => "1",
            'clubName' => "Poetry Club",
            'numberOfMembers' => rand(60, 100),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2012,
            'semester' => "1",
            'clubName' => "Debate Club",
            'numberOfMembers' => rand(60, 100),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2012,
            'semester' => "1",
            'clubName' => "Cooking Club",
            'numberOfMembers' => rand(60, 100),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2012,
            'semester' => "1",
            'clubName' => "Volleyball Club",
            'numberOfMembers' => rand(60, 100),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2012,
            'semester' => "1",
            'clubName' => "Photography Club",
            'numberOfMembers' => rand(60, 100),
        ));


        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2012,
            'semester' => "1",
            'clubName' => "Running Club",
            'numberOfMembers' => rand(60, 100),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2012,
            'semester' => "1",
            'clubName' => "Rowing Club",
            'numberOfMembers' => rand(60, 100),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2012,
            'semester' => "1",
            'clubName' => "Cricket Club",
            'numberOfMembers' => rand(60, 100),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2012,
            'semester' => "1",
            'clubName' => "Arts & Crafts Club",
            'numberOfMembers' => rand(60, 100),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2012,
            'semester' => "1",
            'clubName' => "Japanese Club",
            'numberOfMembers' => rand(60, 100),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2012,
            'semester' => "1",
            'clubName' => "Korean Club",
            'numberOfMembers' => rand(60, 100),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2012,
            'semester' => "1",
            'clubName' => "Tae Kwan Do Club",
            'numberOfMembers' => rand(60, 100),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2012,
            'semester' => "1",
            'clubName' => "IT Club",
            'numberOfMembers' => rand(30, 60),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2012,
            'semester' => "1",
            'clubName' => "E-Sports Club",
            'numberOfMembers' => rand(30, 60),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2012,
            'semester' => "1",
            'clubName' => "Robotics Club",
            'numberOfMembers' => rand(30, 60),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2012,
            'semester' => "1",
            'clubName' => "Chemistry Club",
            'numberOfMembers' => rand(30, 60),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2012,
            'semester' => "1",
            'clubName' => "Biology Club",
            'numberOfMembers' => rand(30, 60),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2012,
            'semester' => "2",
            'clubName' => "Student Council",
            'numberOfMembers' => rand(40, 80),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2012,
            'semester' => "2",
            'clubName' => "Student Volunteers",
            'numberOfMembers' => rand(100, 200),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2012,
            'semester' => "2",
            'clubName' => "Drama Club",
            'numberOfMembers' => rand(60, 100),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2012,
            'semester' => "2",
            'clubName' => "Music Club",
            'numberOfMembers' => rand(60, 100),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2012,
            'semester' => "2",
            'clubName' => "Aikido Club",
            'numberOfMembers' => rand(60, 100),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2012,
            'semester' => "2",
            'clubName' => "Badminton Club",
            'numberOfMembers' => rand(60, 100),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2012,
            'semester' => "2",
            'clubName' => "Basketball Club",
            'numberOfMembers' => rand(60, 100),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2012,
            'semester' => "2",
            'clubName' => "Poetry Club",
            'numberOfMembers' => rand(60, 100),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2012,
            'semester' => "2",
            'clubName' => "Debate Club",
            'numberOfMembers' => rand(60, 100),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2012,
            'semester' => "2",
            'clubName' => "Cooking Club",
            'numberOfMembers' => rand(60, 100),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2012,
            'semester' => "2",
            'clubName' => "Volleyball Club",
            'numberOfMembers' => rand(60, 100),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2012,
            'semester' => "2",
            'clubName' => "Photography Club",
            'numberOfMembers' => rand(60, 100),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2012,
            'semester' => "2",
            'clubName' => "Running Club",
            'numberOfMembers' => rand(60, 100),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2012,
            'semester' => "2",
            'clubName' => "Rowing Club",
            'numberOfMembers' => rand(60, 100),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2012,
            'semester' => "2",
            'clubName' => "Cricket Club",
            'numberOfMembers' => rand(60, 100),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2012,
            'semester' => "2",
            'clubName' => "Arts & Crafts Club",
            'numberOfMembers' => rand(60, 100),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2012,
            'semester' => "2",
            'clubName' => "Japanese Club",
            'numberOfMembers' => rand(60, 100),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2012,
            'semester' => "2",
            'clubName' => "Korean Club",
            'numberOfMembers' => rand(60, 100),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2012,
            'semester' => "2",
            'clubName' => "Tae Kwan Do Club",
            'numberOfMembers' => rand(60, 100),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2012,
            'semester' => "2",
            'clubName' => "IT Club",
            'numberOfMembers' => rand(30, 60),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2012,
            'semester' => "2",
            'clubName' => "E-Sports Club",
            'numberOfMembers' => rand(30, 60),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2012,
            'semester' => "2",
            'clubName' => "Robotics Club",
            'numberOfMembers' => rand(30, 60),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2012,
            'semester' => "2",
            'clubName' => "Chemistry Club",
            'numberOfMembers' => rand(30, 60),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2012,
            'semester' => "2",
            'clubName' => "Biology Club",
            'numberOfMembers' => rand(30, 60),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2013,
            'semester' => "1",
            'clubName' => "Student Council",
            'numberOfMembers' => rand(10, 50),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2013,
            'semester' => "1",
            'clubName' => "Student Volunteers",
            'numberOfMembers' => rand(30, 100),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2013,
            'semester' => "1",
            'clubName' => "Drama Club",
            'numberOfMembers' => rand(60, 100),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2013,
            'semester' => "1",
            'clubName' => "Music Club",
            'numberOfMembers' => rand(60, 100),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2013,
            'semester' => "1",
            'clubName' => "Aikido Club",
            'numberOfMembers' => rand(60, 100),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2013,
            'semester' => "1",
            'clubName' => "Badminton Club",
            'numberOfMembers' => rand(60, 100),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2013,
            'semester' => "1",
            'clubName' => "Basketball Club",
            'numberOfMembers' => rand(60, 100),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2013,
            'semester' => "1",
            'clubName' => "Poetry Club",
            'numberOfMembers' => rand(60, 100),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2013,
            'semester' => "1",
            'clubName' => "Debate Club",
            'numberOfMembers' => rand(60, 100),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2013,
            'semester' => "1",
            'clubName' => "Cooking Club",
            'numberOfMembers' => rand(60, 100),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2013,
            'semester' => "1",
            'clubName' => "Volleyball Club",
            'numberOfMembers' => rand(60, 100),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2013,
            'semester' => "1",
            'clubName' => "Photography Club",
            'numberOfMembers' => rand(60, 100),
        ));


        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2013,
            'semester' => "1",
            'clubName' => "Running Club",
            'numberOfMembers' => rand(60, 100),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2013,
            'semester' => "1",
            'clubName' => "Rowing Club",
            'numberOfMembers' => rand(60, 100),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2013,
            'semester' => "1",
            'clubName' => "Cricket Club",
            'numberOfMembers' => rand(60, 100),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2013,
            'semester' => "1",
            'clubName' => "Arts & Crafts Club",
            'numberOfMembers' => rand(60, 100),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2013,
            'semester' => "1",
            'clubName' => "Japanese Club",
            'numberOfMembers' => rand(60, 100),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2013,
            'semester' => "1",
            'clubName' => "Korean Club",
            'numberOfMembers' => rand(60, 100),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2013,
            'semester' => "1",
            'clubName' => "Tae Kwan Do Club",
            'numberOfMembers' => rand(60, 100),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2013,
            'semester' => "1",
            'clubName' => "IT Club",
            'numberOfMembers' => rand(30, 60),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2013,
            'semester' => "1",
            'clubName' => "E-Sports Club",
            'numberOfMembers' => rand(30, 60),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2013,
            'semester' => "1",
            'clubName' => "Robotics Club",
            'numberOfMembers' => rand(30, 60),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2013,
            'semester' => "1",
            'clubName' => "Chemistry Club",
            'numberOfMembers' => rand(30, 60),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2013,
            'semester' => "1",
            'clubName' => "Biology Club",
            'numberOfMembers' => rand(30, 60),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2013,
            'semester' => "2",
            'clubName' => "Student Council",
            'numberOfMembers' => rand(40, 80),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2013,
            'semester' => "2",
            'clubName' => "Student Volunteers",
            'numberOfMembers' => rand(100, 200),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2013,
            'semester' => "2",
            'clubName' => "Drama Club",
            'numberOfMembers' => rand(60, 100),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2013,
            'semester' => "2",
            'clubName' => "Music Club",
            'numberOfMembers' => rand(60, 100),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2013,
            'semester' => "2",
            'clubName' => "Aikido Club",
            'numberOfMembers' => rand(60, 100),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2013,
            'semester' => "2",
            'clubName' => "Badminton Club",
            'numberOfMembers' => rand(60, 100),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2013,
            'semester' => "2",
            'clubName' => "Basketball Club",
            'numberOfMembers' => rand(60, 100),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2013,
            'semester' => "2",
            'clubName' => "Poetry Club",
            'numberOfMembers' => rand(60, 100),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2013,
            'semester' => "2",
            'clubName' => "Debate Club",
            'numberOfMembers' => rand(60, 100),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2013,
            'semester' => "2",
            'clubName' => "Cooking Club",
            'numberOfMembers' => rand(60, 100),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2013,
            'semester' => "2",
            'clubName' => "Volleyball Club",
            'numberOfMembers' => rand(60, 100),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2013,
            'semester' => "2",
            'clubName' => "Photography Club",
            'numberOfMembers' => rand(60, 100),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2013,
            'semester' => "2",
            'clubName' => "Running Club",
            'numberOfMembers' => rand(60, 100),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2013,
            'semester' => "2",
            'clubName' => "Rowing Club",
            'numberOfMembers' => rand(60, 100),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2013,
            'semester' => "2",
            'clubName' => "Cricket Club",
            'numberOfMembers' => rand(60, 100),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2013,
            'semester' => "2",
            'clubName' => "Arts & Crafts Club",
            'numberOfMembers' => rand(60, 100),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2013,
            'semester' => "2",
            'clubName' => "Japanese Club",
            'numberOfMembers' => rand(60, 100),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2013,
            'semester' => "2",
            'clubName' => "Korean Club",
            'numberOfMembers' => rand(60, 100),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2013,
            'semester' => "2",
            'clubName' => "Tae Kwan Do Club",
            'numberOfMembers' => rand(60, 100),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2013,
            'semester' => "2",
            'clubName' => "IT Club",
            'numberOfMembers' => rand(30, 60),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2013,
            'semester' => "2",
            'clubName' => "E-Sports Club",
            'numberOfMembers' => rand(30, 60),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2013,
            'semester' => "2",
            'clubName' => "Robotics Club",
            'numberOfMembers' => rand(30, 60),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2013,
            'semester' => "2",
            'clubName' => "Chemistry Club",
            'numberOfMembers' => rand(30, 60),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2013,
            'semester' => "2",
            'clubName' => "Biology Club",
            'numberOfMembers' => rand(30, 60),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2014,
            'semester' => "1",
            'clubName' => "Student Council",
            'numberOfMembers' => rand(10, 50),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2014,
            'semester' => "1",
            'clubName' => "Student Volunteers",
            'numberOfMembers' => rand(30, 100),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2014,
            'semester' => "1",
            'clubName' => "Drama Club",
            'numberOfMembers' => rand(60, 100),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2014,
            'semester' => "1",
            'clubName' => "Music Club",
            'numberOfMembers' => rand(60, 100),
        ));


        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2014,
            'semester' => "1",
            'clubName' => "Aikido Club",
            'numberOfMembers' => rand(60, 100),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2014,
            'semester' => "1",
            'clubName' => "Badminton Club",
            'numberOfMembers' => rand(60, 100),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2014,
            'semester' => "1",
            'clubName' => "Basketball Club",
            'numberOfMembers' => rand(60, 100),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2014,
            'semester' => "1",
            'clubName' => "Poetry Club",
            'numberOfMembers' => rand(60, 100),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2014,
            'semester' => "1",
            'clubName' => "Debate Club",
            'numberOfMembers' => rand(60, 100),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2014,
            'semester' => "1",
            'clubName' => "Cooking Club",
            'numberOfMembers' => rand(60, 100),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2014,
            'semester' => "1",
            'clubName' => "Volleyball Club",
            'numberOfMembers' => rand(60, 100),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2014,
            'semester' => "1",
            'clubName' => "Photography Club",
            'numberOfMembers' => rand(60, 100),
        ));


        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2014,
            'semester' => "1",
            'clubName' => "Running Club",
            'numberOfMembers' => rand(60, 100),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2014,
            'semester' => "1",
            'clubName' => "Rowing Club",
            'numberOfMembers' => rand(60, 100),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2014,
            'semester' => "1",
            'clubName' => "Cricket Club",
            'numberOfMembers' => rand(60, 100),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2014,
            'semester' => "1",
            'clubName' => "Arts & Crafts Club",
            'numberOfMembers' => rand(60, 100),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2014,
            'semester' => "1",
            'clubName' => "Japanese Club",
            'numberOfMembers' => rand(60, 100),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2014,
            'semester' => "1",
            'clubName' => "Korean Club",
            'numberOfMembers' => rand(60, 100),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2014,
            'semester' => "1",
            'clubName' => "Tae Kwan Do Club",
            'numberOfMembers' => rand(60, 100),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2014,
            'semester' => "1",
            'clubName' => "IT Club",
            'numberOfMembers' => rand(30, 60),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2014,
            'semester' => "1",
            'clubName' => "E-Sports Club",
            'numberOfMembers' => rand(30, 60),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2014,
            'semester' => "1",
            'clubName' => "Robotics Club",
            'numberOfMembers' => rand(30, 60),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2014,
            'semester' => "1",
            'clubName' => "Chemistry Club",
            'numberOfMembers' => rand(30, 60),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2014,
            'semester' => "1",
            'clubName' => "Biology Club",
            'numberOfMembers' => rand(30, 60),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2014,
            'semester' => "2",
            'clubName' => "Student Council",
            'numberOfMembers' => rand(40, 80),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2014,
            'semester' => "2",
            'clubName' => "Student Volunteers",
            'numberOfMembers' => rand(100, 200),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2014,
            'semester' => "2",
            'clubName' => "Drama Club",
            'numberOfMembers' => rand(60, 100),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2014,
            'semester' => "2",
            'clubName' => "Music Club",
            'numberOfMembers' => rand(60, 100),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2014,
            'semester' => "2",
            'clubName' => "Aikido Club",
            'numberOfMembers' => rand(60, 100),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2014,
            'semester' => "2",
            'clubName' => "Badminton Club",
            'numberOfMembers' => rand(60, 100),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2014,
            'semester' => "2",
            'clubName' => "Basketball Club",
            'numberOfMembers' => rand(60, 100),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2014,
            'semester' => "2",
            'clubName' => "Poetry Club",
            'numberOfMembers' => rand(60, 100),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2014,
            'semester' => "2",
            'clubName' => "Debate Club",
            'numberOfMembers' => rand(60, 100),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2014,
            'semester' => "2",
            'clubName' => "Cooking Club",
            'numberOfMembers' => rand(60, 100),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2014,
            'semester' => "2",
            'clubName' => "Volleyball Club",
            'numberOfMembers' => rand(60, 100),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2014,
            'semester' => "2",
            'clubName' => "Photography Club",
            'numberOfMembers' => rand(60, 100),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2014,
            'semester' => "2",
            'clubName' => "Running Club",
            'numberOfMembers' => rand(60, 100),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2014,
            'semester' => "2",
            'clubName' => "Rowing Club",
            'numberOfMembers' => rand(60, 100),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2014,
            'semester' => "2",
            'clubName' => "Cricket Club",
            'numberOfMembers' => rand(60, 100),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2014,
            'semester' => "2",
            'clubName' => "Arts & Crafts Club",
            'numberOfMembers' => rand(60, 100),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2014,
            'semester' => "2",
            'clubName' => "Japanese Club",
            'numberOfMembers' => rand(60, 100),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2014,
            'semester' => "2",
            'clubName' => "Korean Club",
            'numberOfMembers' => rand(60, 100),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2014,
            'semester' => "2",
            'clubName' => "Tae Kwan Do Club",
            'numberOfMembers' => rand(60, 100),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2014,
            'semester' => "2",
            'clubName' => "IT Club",
            'numberOfMembers' => rand(30, 60),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2014,
            'semester' => "2",
            'clubName' => "E-Sports Club",
            'numberOfMembers' => rand(30, 60),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2014,
            'semester' => "2",
            'clubName' => "Robotics Club",
            'numberOfMembers' => rand(30, 60),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2014,
            'semester' => "2",
            'clubName' => "Chemistry Club",
            'numberOfMembers' => rand(30, 60),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2014,
            'semester' => "2",
            'clubName' => "Biology Club",
            'numberOfMembers' => rand(30, 60),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2015,
            'semester' => "1",
            'clubName' => "Student Council",
            'numberOfMembers' => rand(10, 50),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2015,
            'semester' => "1",
            'clubName' => "Student Volunteers",
            'numberOfMembers' => rand(30, 100),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2015,
            'semester' => "1",
            'clubName' => "Drama Club",
            'numberOfMembers' => rand(60, 100),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2015,
            'semester' => "1",
            'clubName' => "Music Club",
            'numberOfMembers' => rand(60, 100),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2015,
            'semester' => "1",
            'clubName' => "Aikido Club",
            'numberOfMembers' => rand(60, 100),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2015,
            'semester' => "1",
            'clubName' => "Badminton Club",
            'numberOfMembers' => rand(60, 100),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2015,
            'semester' => "1",
            'clubName' => "Basketball Club",
            'numberOfMembers' => rand(60, 100),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2015,
            'semester' => "1",
            'clubName' => "Poetry Club",
            'numberOfMembers' => rand(60, 100),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2015,
            'semester' => "1",
            'clubName' => "Debate Club",
            'numberOfMembers' => rand(60, 100),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2015,
            'semester' => "1",
            'clubName' => "Cooking Club",
            'numberOfMembers' => rand(60, 100),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2015,
            'semester' => "1",
            'clubName' => "Volleyball Club",
            'numberOfMembers' => rand(60, 100),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2015,
            'semester' => "1",
            'clubName' => "Photography Club",
            'numberOfMembers' => rand(60, 100),
        ));


        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2015,
            'semester' => "1",
            'clubName' => "Running Club",
            'numberOfMembers' => rand(60, 100),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2015,
            'semester' => "1",
            'clubName' => "Rowing Club",
            'numberOfMembers' => rand(60, 100),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2015,
            'semester' => "1",
            'clubName' => "Cricket Club",
            'numberOfMembers' => rand(60, 100),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2015,
            'semester' => "1",
            'clubName' => "Arts & Crafts Club",
            'numberOfMembers' => rand(60, 100),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2015,
            'semester' => "1",
            'clubName' => "Japanese Club",
            'numberOfMembers' => rand(60, 100),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2015,
            'semester' => "1",
            'clubName' => "Korean Club",
            'numberOfMembers' => rand(60, 100),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2015,
            'semester' => "1",
            'clubName' => "Tae Kwan Do Club",
            'numberOfMembers' => rand(60, 100),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2015,
            'semester' => "1",
            'clubName' => "IT Club",
            'numberOfMembers' => rand(30, 60),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2015,
            'semester' => "1",
            'clubName' => "E-Sports Club",
            'numberOfMembers' => rand(30, 60),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2015,
            'semester' => "1",
            'clubName' => "Robotics Club",
            'numberOfMembers' => rand(30, 60),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2015,
            'semester' => "1",
            'clubName' => "Chemistry Club",
            'numberOfMembers' => rand(30, 60),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2015,
            'semester' => "1",
            'clubName' => "Biology Club",
            'numberOfMembers' => rand(30, 60),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2015,
            'semester' => "2",
            'clubName' => "Student Council",
            'numberOfMembers' => rand(40, 80),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2015,
            'semester' => "2",
            'clubName' => "Student Volunteers",
            'numberOfMembers' => rand(100, 200),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2015,
            'semester' => "2",
            'clubName' => "Drama Club",
            'numberOfMembers' => rand(60, 100),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2015,
            'semester' => "2",
            'clubName' => "Music Club",
            'numberOfMembers' => rand(60, 100),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2015,
            'semester' => "2",
            'clubName' => "Aikido Club",
            'numberOfMembers' => rand(60, 100),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2015,
            'semester' => "2",
            'clubName' => "Badminton Club",
            'numberOfMembers' => rand(60, 100),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2015,
            'semester' => "2",
            'clubName' => "Basketball Club",
            'numberOfMembers' => rand(60, 100),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2015,
            'semester' => "2",
            'clubName' => "Poetry Club",
            'numberOfMembers' => rand(60, 100),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2015,
            'semester' => "2",
            'clubName' => "Debate Club",
            'numberOfMembers' => rand(60, 100),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2015,
            'semester' => "2",
            'clubName' => "Cooking Club",
            'numberOfMembers' => rand(60, 100),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2015,
            'semester' => "2",
            'clubName' => "Volleyball Club",
            'numberOfMembers' => rand(60, 100),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2015,
            'semester' => "2",
            'clubName' => "Photography Club",
            'numberOfMembers' => rand(60, 100),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2015,
            'semester' => "2",
            'clubName' => "Running Club",
            'numberOfMembers' => rand(60, 100),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2015,
            'semester' => "2",
            'clubName' => "Rowing Club",
            'numberOfMembers' => rand(60, 100),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2015,
            'semester' => "2",
            'clubName' => "Cricket Club",
            'numberOfMembers' => rand(60, 100),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2015,
            'semester' => "2",
            'clubName' => "Arts & Crafts Club",
            'numberOfMembers' => rand(60, 100),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2015,
            'semester' => "2",
            'clubName' => "Japanese Club",
            'numberOfMembers' => rand(60, 100),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2015,
            'semester' => "2",
            'clubName' => "Korean Club",
            'numberOfMembers' => rand(60, 100),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2015,
            'semester' => "2",
            'clubName' => "Tae Kwan Do Club",
            'numberOfMembers' => rand(60, 100),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2015,
            'semester' => "2",
            'clubName' => "IT Club",
            'numberOfMembers' => rand(30, 60),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2015,
            'semester' => "2",
            'clubName' => "E-Sports Club",
            'numberOfMembers' => rand(30, 60),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2015,
            'semester' => "2",
            'clubName' => "Robotics Club",
            'numberOfMembers' => rand(30, 60),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2015,
            'semester' => "2",
            'clubName' => "Chemistry Club",
            'numberOfMembers' => rand(30, 60),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2015,
            'semester' => "2",
            'clubName' => "Biology Club",
            'numberOfMembers' => rand(30, 60),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2016,
            'semester' => "1",
            'clubName' => "Student Council",
            'numberOfMembers' => rand(10, 50),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2016,
            'semester' => "1",
            'clubName' => "Student Volunteers",
            'numberOfMembers' => rand(30, 100),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2016,
            'semester' => "1",
            'clubName' => "Drama Club",
            'numberOfMembers' => rand(60, 100),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2016,
            'semester' => "1",
            'clubName' => "Music Club",
            'numberOfMembers' => rand(60, 100),
        ));


        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2016,
            'semester' => "1",
            'clubName' => "Aikido Club",
            'numberOfMembers' => rand(60, 100),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2016,
            'semester' => "1",
            'clubName' => "Badminton Club",
            'numberOfMembers' => rand(60, 100),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2016,
            'semester' => "1",
            'clubName' => "Basketball Club",
            'numberOfMembers' => rand(60, 100),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2016,
            'semester' => "1",
            'clubName' => "Poetry Club",
            'numberOfMembers' => rand(60, 100),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2016,
            'semester' => "1",
            'clubName' => "Debate Club",
            'numberOfMembers' => rand(60, 100),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2016,
            'semester' => "1",
            'clubName' => "Cooking Club",
            'numberOfMembers' => rand(60, 100),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2016,
            'semester' => "1",
            'clubName' => "Volleyball Club",
            'numberOfMembers' => rand(60, 100),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2016,
            'semester' => "1",
            'clubName' => "Photography Club",
            'numberOfMembers' => rand(60, 100),
        ));


        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2016,
            'semester' => "1",
            'clubName' => "Running Club",
            'numberOfMembers' => rand(60, 100),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2016,
            'semester' => "1",
            'clubName' => "Rowing Club",
            'numberOfMembers' => rand(60, 100),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2016,
            'semester' => "1",
            'clubName' => "Cricket Club",
            'numberOfMembers' => rand(60, 100),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2016,
            'semester' => "1",
            'clubName' => "Arts & Crafts Club",
            'numberOfMembers' => rand(60, 100),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2016,
            'semester' => "1",
            'clubName' => "Japanese Club",
            'numberOfMembers' => rand(60, 100),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2016,
            'semester' => "1",
            'clubName' => "Korean Club",
            'numberOfMembers' => rand(60, 100),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2016,
            'semester' => "1",
            'clubName' => "Tae Kwan Do Club",
            'numberOfMembers' => rand(60, 100),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2016,
            'semester' => "1",
            'clubName' => "IT Club",
            'numberOfMembers' => rand(30, 60),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2016,
            'semester' => "1",
            'clubName' => "E-Sports Club",
            'numberOfMembers' => rand(30, 60),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2016,
            'semester' => "1",
            'clubName' => "Robotics Club",
            'numberOfMembers' => rand(30, 60),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2016,
            'semester' => "1",
            'clubName' => "Chemistry Club",
            'numberOfMembers' => rand(30, 60),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2016,
            'semester' => "1",
            'clubName' => "Biology Club",
            'numberOfMembers' => rand(30, 60),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2016,
            'semester' => "2",
            'clubName' => "Student Council",
            'numberOfMembers' => rand(40, 80),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2016,
            'semester' => "2",
            'clubName' => "Student Volunteers",
            'numberOfMembers' => rand(100, 200),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2016,
            'semester' => "2",
            'clubName' => "Drama Club",
            'numberOfMembers' => rand(60, 100),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2016,
            'semester' => "2",
            'clubName' => "Music Club",
            'numberOfMembers' => rand(60, 100),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2016,
            'semester' => "2",
            'clubName' => "Aikido Club",
            'numberOfMembers' => rand(60, 100),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2016,
            'semester' => "2",
            'clubName' => "Badminton Club",
            'numberOfMembers' => rand(60, 100),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2016,
            'semester' => "2",
            'clubName' => "Basketball Club",
            'numberOfMembers' => rand(60, 100),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2016,
            'semester' => "2",
            'clubName' => "Poetry Club",
            'numberOfMembers' => rand(60, 100),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2016,
            'semester' => "2",
            'clubName' => "Debate Club",
            'numberOfMembers' => rand(60, 100),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2016,
            'semester' => "2",
            'clubName' => "Cooking Club",
            'numberOfMembers' => rand(60, 100),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2016,
            'semester' => "2",
            'clubName' => "Volleyball Club",
            'numberOfMembers' => rand(60, 100),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2016,
            'semester' => "2",
            'clubName' => "Photography Club",
            'numberOfMembers' => rand(60, 100),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2016,
            'semester' => "2",
            'clubName' => "Running Club",
            'numberOfMembers' => rand(60, 100),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2016,
            'semester' => "2",
            'clubName' => "Rowing Club",
            'numberOfMembers' => rand(60, 100),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2016,
            'semester' => "2",
            'clubName' => "Cricket Club",
            'numberOfMembers' => rand(60, 100),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2016,
            'semester' => "2",
            'clubName' => "Arts & Crafts Club",
            'numberOfMembers' => rand(60, 100),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2016,
            'semester' => "2",
            'clubName' => "Japanese Club",
            'numberOfMembers' => rand(60, 100),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2016,
            'semester' => "2",
            'clubName' => "Korean Club",
            'numberOfMembers' => rand(60, 100),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2016,
            'semester' => "2",
            'clubName' => "Tae Kwan Do Club",
            'numberOfMembers' => rand(60, 100),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2016,
            'semester' => "2",
            'clubName' => "IT Club",
            'numberOfMembers' => rand(30, 60),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2016,
            'semester' => "2",
            'clubName' => "E-Sports Club",
            'numberOfMembers' => rand(30, 60),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2016,
            'semester' => "2",
            'clubName' => "Robotics Club",
            'numberOfMembers' => rand(30, 60),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2016,
            'semester' => "2",
            'clubName' => "Chemistry Club",
            'numberOfMembers' => rand(30, 60),
        ));

        DB::table('clubRecruitment')->insert(
        array(
            'year' => 2016,
            'semester' => "2",
            'clubName' => "Biology Club",
            'numberOfMembers' => rand(30, 60),
        ));


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clubRecruitment');
    }
}
