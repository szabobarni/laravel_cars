<?php

namespace App\Http\Controllers;

use App\Http\Requests\BasicRequest;
use App\Models\Body;
use Illuminate\Http\Request;

class BodyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    //use ValidationRules;

    public function index()
    {
        $bodies = Body::all();
        return view('bodies.index', compact('bodies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('bodies.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BasicRequest $request)
    {
        $body  = new Body();
        $body->name = $request->input('name');
        $body->save();

        return redirect()->route('bodies.index')->with('success', "{$body->name} sikeresen létrehozva");
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
        $body = Body::find($id);
        return view('bodies.edit', compact('body')); 
    
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(BasicRequest $request, $id)
    {
        $body = Body::find($id);
        $body->name = $request->input('name');
        $body->save();

        return redirect()->route('bodies.index')->with('success', "{$body->name} sikeresen módosítva");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $body = Body::find($id);
        $body->delete();

        return redirect()->route('bodies.index')->with('success', "sikeresen törölve");
    }
}
