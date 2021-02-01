<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use App\Booking;
use App\Http\Requests\BookingFormRequest;

class BookingsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $valid = Validator::make($request->all(),['filter' => 'bail|string']);


        if(!$valid->fails()){
            $bookings = Booking::where('guest_full_name', 'LIKE', "%$request->filter%")->get();
        }else{            
            $bookings = Booking::all();
        }

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
    public function store(BookingFormRequest $request)
    {

        $validated = $request->validated();

        $newBooking = new Booking();

        $newBooking->guest_full_name = $validated['guest_full_name'];

        $newBooking->guest_credit_card = $validated['guest_credit_card'];

        $newBooking->room = $validated['room'];

        $newBooking->from_date = $validated['from_date'];

        $newBooking->to_date = $validated['to_date'];

        $newBooking->more_details = $validated['more_details'];

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
        $guest = Booking::find($id);

        return view('bookings.edit', compact('guest'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(BookingFormRequest $request, $id)
    {
        $validated = $request->validated();

        $editedBooking = Booking::find($id);

        $editedBooking->guest_full_name = $validated['guest_full_name'];

        $editedBooking->guest_credit_card = $validated['guest_credit_card'];

        $editedBooking->room = $validated['room'];

        $editedBooking->from_date = $validated['from_date'];

        $editedBooking->to_date = $validated['to_date'];

        $editedBooking->more_details = $validated['more_details'];

        $editedBooking->save();

        return redirect()->route('bookings.index');
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
