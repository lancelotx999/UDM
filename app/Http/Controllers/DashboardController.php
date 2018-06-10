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
use App\InfantMortality;

class DashboardController extends Controller
{
    public function populationDashboard()
    {
        $natality = Natality::all();
        $populationByBorough = PopulationByBorough::all();
        $populationByCommunityDistricts = PopulationByCommunityDistricts::all();
        $waterConsumption = WaterConsumption::all();
        $infantMortality = InfantMortality::all();

        $data = [];

        $data['populationByBorough'] = $populationByBorough;
        $data['populationByCommunityDistricts'] = $populationByCommunityDistricts;
        $data['natality'] = $natality;
        $data['waterConsumption'] = $waterConsumption;
        $data['infantMortality'] = $infantMortality;

        return view('/populationDashboard',$data);
    }

    public function juvenileDashboard()
    {
        $juvenileInvestigation = JuvenileInvestigation::all();
        $juvenileIntakes = JuvenileIntakes::all();

        $data = [];

        $data['juvenileIntakes'] = $juvenileIntakes;
        $data['juvenileInvestigation'] = $juvenileInvestigation;

        return view('/juvenileDashboard',$data);
    }
}
