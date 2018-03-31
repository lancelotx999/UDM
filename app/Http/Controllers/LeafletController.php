<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LeafletController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function mainMap()
     {
         // $securityLogs = Security::all();

         $filename = "states.geojson";

         $data = [];

         $path = storage_path() . "/data/${filename}"; // ie: /var/www/laravel/app/storage/json/filename.json
         // if (!File::exists($path)) {
         //     throw new Exception("Invalid File");
         // }
         //
         // $file = File::get($path); // string
         //
         // $data['securityLogs'] = $securityLogs;
         // $data['test'] = $file;
         $data['test2'] = $path;


         return view('/leaflet',$data);
     }

     public function testLoad()
     {

     }

    public function index()
    {
        //
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
