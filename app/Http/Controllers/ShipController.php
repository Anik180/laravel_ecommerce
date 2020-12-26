<?php

namespace App\Http\Controllers;

use App\Ship;
use Illuminate\Http\Request;

class ShipController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $list=Ship::all();
        return view('ship.create',compact('list'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $ship = New Ship();
        $ship->ship_name = $request->ship_name;
        $ship->ship_registration = $request->ship_registration;
        $ship->owner_name = $request->owner_name;
        $ship->phone = $request->phone;
        $ship->email = $request->email;
        $ship->description = $request->description;
        $ship->status =  0;

        if ($request->file('ship_image')) {
            $ship_image = $request->file('ship_image');
            $extension = $ship_image->getClientOriginalExtension();
            $filename = uniqid().'.'.$extension;
            $ship_image->move('uploads', $filename);
            
        } else {
            $filename = null;

        }
        if ($request->file('images')) {
            $images = $request->file('images');
            $extension = $images->getClientOriginalExtension();
            $filename = uniqid().'.'.$extension;
            $images->move('uploads', $filename);
            
        } else {
            $filename = null;

        }
            $ship->ship_image = $filename;
            $ship->images = $filename;
            $ship->save();

            return Redirect()->back();

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Ship  $ship
     * @return \Illuminate\Http\Response
     */
    public function show(Ship $ship)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Ship  $ship
     * @return \Illuminate\Http\Response
     */
    public function edit(Ship $ship)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Ship  $ship
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ship $ship)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Ship  $ship
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ship $ship)
    {
        //
    }
}
