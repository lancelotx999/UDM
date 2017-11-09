<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Security;
use App\Enrollment;
use App\ClubRecruitment;


class ChartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function chartPage()
     {
         $securityLogs = Security::all();
         $enrollmentData = Enrollment::all();
         $clubRecruitmentData = ClubRecruitment::all();
         $data = [];

         $data['securityLogs'] = $securityLogs;
         $data['enrollmentData'] = $enrollmentData;
         $data['clubRecruitmentData'] = $clubRecruitmentData;

         return view('/chart',$data);
     }

     public function securityChartPage()
     {
         $securityLogs = Security::all();
         $data = [];

         $data['securityLogs'] = $securityLogs;

         return view('/chartSecurity',$data);
     }

     public function enrollmentChartPage()
     {
         $enrollmentData = Enrollment::all();
         $data = [];

         $data['enrollmentData'] = $enrollmentData;

         return view('/chartEnrollment',$data);
     }

     public function clubRecruitmentChartPage()
     {
         $clubRecruitmentData = ClubRecruitment::all();
         $data = [];

         $data['clubRecruitmentData'] = $clubRecruitmentData;

         return view('/chartClubRecruitment',$data);
     }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
