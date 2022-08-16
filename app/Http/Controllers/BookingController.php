<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Venue;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Auth;

class BookingController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {


        $venue = Venue::where('id', $id)->first();
        $booking = Booking::first();

        return view('booking.create', [
            'venue' => $venue,
            'booking' => $booking
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        $venue_id = $request->venue_id;
        $venue = Venue::where('id', $venue_id)->first();
        $venuPrice = $venue->price;
        //dd($venuPrice);
        $this->validate(
            $request,
            [
                'date' => 'required',
            ],
        );


        $booking_venues =  Booking::create([
            'customer_id' => Auth::user()->id,
            'venue_id' => $request->venue_id,
            'price' => $venuPrice,
            'date' => $request->date,
            'status' => 'pending',
            'payment_method' => $request->payment_method

        ]);

        $booking_venues->save();

        // return back()->with('success', 'Venue Add Successfully');
        Toastr::success('booking successfull :)', 'Success');

        return redirect()->back();
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

    public function bookingDate(Request $request)
    {
        if (request()->ajax() && !empty($request->date)) {

            $dateCheck = Booking::where('venue_id', $request->venue_id)->where('date', $request->date)->get()->first();
            if ($dateCheck) {
                $result = '<p style="color:red">Already Booking. Please Select Another Date</p>';
            } else {
                $result = '<p style="color:green">Select a Date</p>';
            }
            echo $result;
        }
    }
}
