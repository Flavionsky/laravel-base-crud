<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Booking;

use Illuminate\Support\Facades\DB;

class BookingsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bookings = Booking::all();

        $columns = [
            'id' => '#',
            'guest_full_name' => 'Nome e Cognome',
            'guest_credit_card' => 'Carta di Credito',
            'room' => 'Numero Stanza',
            'from_date' => 'Data inizio pernottamento',
            'to_date' => 'Data fine pernottamento'
        ];

        return view('bookings.index', compact([
            'bookings',
            'columns'
        ]));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('bookings.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $newBooking = new Booking();

        $newBooking->guest_full_name = $request->input('guest_full_name');

        $newBooking->guest_credit_card = $request->input('guest_credit_card');

        $newBooking->room = $request->input('room');

        $newBooking->from_date = $request->input('from_date');

        $newBooking->to_date = $request->input('to_date');

        $newBooking->more_details = $request->input('more_details');

        $newBooking->save();

        return view('bookings.success');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $guest = Booking::find($id);

        $columns = [
            'id' => '#',
            'guest_full_name' => 'Nome e Cognome',
            'guest_credit_card' => 'Carta di Credito',
            'room' => 'Numero Stanza',
            'from_date' => 'Data inizio pernottamento',
            'to_date' => 'Data fine pernottamento'
        ];


        return view('bookings.show', compact([
            'guest',
            'columns'
        ]));
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
