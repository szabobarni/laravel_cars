<?php

namespace App\Http\Controllers;

use App\Http\Requests\VehicleRequest;
use App\Models\Vehicle;
use App\Models\Maker;
use App\Models\Model;
use App\Models\Body;
use App\Models\Fuel;

class VehicleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vehicles = Vehicle::all();
        return view('vehicles.index', compact('vehicles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $makers = Maker::all();
        $models = Model::all();
        $bodies = Body::all();
        $fuels = Fuel::all();
        return view('vehicles.create',compact('makers','models','bodies','fuels'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(VehicleRequest $request)
    {
        $vehicle  = new Vehicle();
        $vehicle->vin = $request->input('vin');
        $vehicle->license_plate = $request->input('license_plate');
        $vehicle->maker_id = $request->input('maker_id');
        $vehicle->model_id = $request->input('model_id');
        $vehicle->body_id = $request->input('body_id');
        $vehicle->fuel_id = $request->input('fuel_id');
        $vehicle->save();

        return redirect()->route('vehicles.index')->with('success', "{$vehicle->license_plate} sikeresen létrehozva");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $vehicle = Vehicle::find($id);
        $makers = Maker::all();
        $models = Model::all();
        $bodies = Body::all();
        $fuels = Fuel::all();
        return view('vehicles.show',compact('vehicle','makers','models','bodies','fuels'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $vehicle = Vehicle::find($id);
        $makers = Maker::all();
        $models = Model::all();
        $bodies = Body::all();
        $fuels = Fuel::all();
        return view('vehicles.edit',compact('vehicle','makers','models','bodies','fuels'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(VehicleRequest $request, $id)
    {
        $vehicle  = Vehicle::find($id);
        $vehicle->vin = $request->input('vin');
        $vehicle->license_plate = $request->input('license_plate');
        $vehicle->maker_id = $request->input('maker_id');
        $vehicle->model_id = $request->input('model_id');
        $vehicle->body_id = $request->input('body_id');
        $vehicle->fuel_id = $request->input('fuel_id');
        $vehicle->save();

        return redirect()->route('vehicles.index')->with('success', "{$vehicle->license_plate} sikeresen módosítva");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $vehicle  = vehicle::find($id);
        $vehicle->delete();

        return redirect()->route('vehicles.index')->with('success', "{$vehicle->name} sikeresen törölve");
    }
}