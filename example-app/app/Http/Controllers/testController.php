<?php

namespace App\Http\Controllers;

use App\Models\Test;
use App\Models\Device;
use Illuminate\Http\Request;
use App\Http\Requests\testRequest;
use App\Http\Resources\testResource;

class testController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($deviceId)
    {
        // return $deviceId;
        $test = Test::where('device_id', $deviceId)->get();
        return $test;
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
    public function store(testRequest $request, $deviceId)
    {
        // return $deviceId;
        $request->validated($request->all());
     
         $devices = Device::findOrFail($deviceId);

 
     
        $tests = Test::create([
            'device_id' => $devices->id,
            'name' => $request->name,
            'descrption' => $request->descrption
        ]);
     
         return new testResource($tests);
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
