<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Heatmap;
use App\Security;
use App\ElectricalFootprint;


class HeatmapController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     

     public function heatmapMap()
     {
         $heatmapLogs = Heatmap::all();
         $securityLogs = Security::all();
         $electricLogs = ElectricalFootprint::all();
         $data = [];

         $data['heatmapLogs'] = $heatmapLogs;
         $data['securityLogs'] = $securityLogs;
         $data['electricLogs'] = $electricLogs;


         return view('/child',$data);
     }

     public function securityMap()
     {
         $securityLogs = Security::all();
         $data = [];

         $data['securityLogs'] = $securityLogs;

         return view('/child',$data);
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
