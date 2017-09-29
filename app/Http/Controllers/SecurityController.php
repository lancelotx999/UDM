<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Security;


class SecurityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $securityLogs = Security::all();
        $data = [];


        foreach ($securityLogs as $securityLog) {

          array_push($data, $securityLog);

          echo "<script>console.log( 'Security Log: " . $securityLog . "' );</script>";
          echo "<script>console.log( 'Security Logs: " . $securityLogs . "' );</script>";
          // echo "<script>console.log( 'Data: " . $data[0] . "' );</script>";
          // if ($request->email == $securityLog->email && $request->password == $securityLog->password) {
          //     $data['securityLog'] = Security::find($securityLog->id);
          //
          //     // return Security::find($securityLog->id);
          //
          //     // return $request->session()->put('current_securityLog', Security::find($securityLog->id));
          //
          // }
          return view('/child',$data);

        }

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
