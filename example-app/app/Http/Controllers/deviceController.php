<?php

namespace App\Http\Controllers;

use App\Models\Device;
use Illuminate\Http\Request;
use App\Http\Requests\deviceRequest;
use App\Http\Resources\deviceResource;

class deviceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $device = Device::all();
        return $device;
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

    //  public function registerDevice(deviceRequest $request){
       
    //     $request->validated($request->all());   

    //     $device = Device::create([
    //         'name'=>$request->name,
    //         'descrption'=>$request->descrption,
    //         'parentConcept'=>$request->parentConcept,
    //         'parentConceptName'=>$request->parentConceptName,
    //     ]);
    //     return new deviceResource($device);

    // }
    public function store(deviceRequest $request)
    {
        // return "1";
        $request->validated($request->all());   

        $device = Device::create([
            'name'=>$request->name,
            'descrption'=>$request->descrption,
            'parentConcept'=>$request->parentConcept,
            'parentConceptName'=>$request->parentConceptName,
        ]);
        return new deviceResource($device);

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
