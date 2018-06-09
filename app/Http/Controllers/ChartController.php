<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Natality;
use App\PopulationByBorough;
use App\PopulationByCommunityDistricts;
use App\WaterConsumption;
use App\JuvenileInvestigation;
use App\JuvenileIntakes;
use App\ActualRevenues;
use App\AirQuality;
use App\HospitalSatisfaction;
use App\HIVDiagnose;

class ChartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function chartPage()
     {
         // $securityLogs = Security::all();
         // $enrollmentData = Enrollment::all();
         // $clubRecruitmentData = ClubRecruitment::all();
         $natality = Natality::all();
         $populationByBorough = PopulationByBorough::all();
         $populationByCommunityDistricts = PopulationByCommunityDistricts::all();
         $waterConsumption = WaterConsumption::all();
         $juvenileInvestigation = JuvenileInvestigation::all();
         $juvenileIntakes = JuvenileIntakes::all();
         $actualRevenues = ActualRevenues::all();
         $airQuality = AirQuality::all();
         $hospitalSatisfaction = HospitalSatisfaction::all();
         $hivDiagnose = HIVDiagnose::all();
         $data = [];

         // $data['securityLogs'] = $securityLogs;
         // $data['enrollmentData'] = $enrollmentData;
         // $data['clubRecruitmentData'] = $clubRecruitmentData;
         $data['populationByBorough'] = $populationByBorough;
         $data['populationByCommunityDistricts'] = $populationByCommunityDistricts;
         $data['waterConsumption'] = $waterConsumption;
         $data['natality'] = $natality;
         $data['juvenileInvestigation'] = $juvenileInvestigation;
         $data['juvenileIntakes'] = $juvenileIntakes;
         $data['actualRevenues'] = $actualRevenues;
         $data['airQuality'] = $airQuality;
         $data['hospitalSatisfaction'] = $hospitalSatisfaction;
         $data['hivDiagnose'] = $HIVDiagnose;

         return view('/chart',$data);
     }

     // public function securityChartPage()
     // {
     //     $securityLogs = Security::all();
     //     $data = [];
     //
     //     $data['securityLogs'] = $securityLogs;
     //
     //     return view('/charts/securityChart',$data);
     // }
     //
     // public function enrollmentChartPage()
     // {
     //     $enrollmentData = Enrollment::all();
     //     $data = [];
     //
     //     $data['enrollmentData'] = $enrollmentData;
     //
     //     return view('/charts/enrollmentChart',$data);
     // }
     //
     // public function clubRecruitmentChartPage()
     // {
     //     $clubRecruitmentData = ClubRecruitment::all();
     //     $data = [];
     //
     //     $data['clubRecruitmentData'] = $clubRecruitmentData;
     //
     //     return view('/charts/clubRecruitmentChart',$data);
     // }


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
