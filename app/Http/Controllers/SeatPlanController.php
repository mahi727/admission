<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SeatPlan;
use App\Setting;

class SeatPlanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $seatplans = SeatPlan::all();
        return view('admins.seat', compact('seatplans'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admins.seat_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $seatplan = new SeatPlan;
        $seatplan->room_no = $request->room_no;
        $seatplan->capacity = $request->capacity;
        $seatplan->starting_roll = $request->starting_roll;
        $seatplan->ending_roll = $request->ending_roll;
        $seatplan->save();

        return redirect()->route('seatplans.index');
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

    public function publish(Request $request)
    {
        $setting = Setting::where('type', 'seat_plan_published')->first();
        $setting->value = 1;
        $setting->save();

        return redirect()->route('seatplans.index');
    }
}
