<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Reservation;

class ReservationsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return Reservation::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // return redirect to create page
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // validate input
        /*
        $this->validate($request, [
            'reservation_date' => 'required',
            'expiry_date' => 'required',
            'reservation_status' => 'required',
            'No_of_rooms' => 'required',
        ]);
        */

        // Create customer
        $reservation = new Reservation;
        $reservation->reservation_date = $request->input('reservation_date');
        $reservation->expiry_date = $request->input('expiry_date');
        $reservation->reservation_status = $request->input('reservation_status');
        $reservation->No_of_rooms = $request->input('No_of_rooms');
        $reservation->save();

        // return redirect
        return redirect('/reservation')->with('success', 'reservation made');
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
        return Reservation::find($id);
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
        return Reservation::find($id);
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
        // validate input
        /*
        $this->validate($request, [
            'reservation_date' => 'required',
            'expiry_date' => 'required',
            'reservation_status' => 'required',
            'No_of_rooms' => 'required',
        ]);
        */

        // Create customer
        $reservation = Reservation::find($id);
        $reservation->reservation_date = $request->input('reservation_date');
        $reservation->expiry_date = $request->input('expiry_date');
        $reservation->reservation_status = $request->input('reservation_status');
        $reservation->No_of_rooms = $request->input('No_of_rooms');
        $reservation->save();

        // return redirect
        return redirect('/reservation')->with('success', 'reservation made');
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