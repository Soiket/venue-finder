<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Customer;
use App\Models\User;
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
    public function index()
    {

    }

    public function bookingPage($id)
    {


        $venue = Venue::where('id', $id)->first();
        $booking = Booking::first();

     //   dd($booking);

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

        $dateCheck = Booking::where('venue_id', $request->venue_id)->where('date', $request->date)->first();

        if ($dateCheck) {

            Toastr::error('Already Booked. Please Select Another Date !', 'Error');
            return redirect()->back();
        } else {
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

            Toastr::success('Booking successfull :)', 'Success');
            return redirect()->route('customer.index');
        }
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
        $booking = Booking::find($id);
        //  dd($division);
        return view('booking.edit', [
            'booking' => $booking
        ]);
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
        $booking = Booking::find($id);
        
        $this->validate(
            $request,
            [
                'status' => 'required',
            ],
        );

        $booking->update([

            'status' => $request->status

        ]);

        Toastr::success('Booking Updated successfully :)', 'Success');

        return redirect()->route('manageBooking');
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
                $result = '<p style="background-color:red; color:#fff; text-align:center">Already Booked. Please Select Another Date</p>';
            }
            else{
                $result = '<p style="background-color:green; color:#fff; text-align:center">Select a Date</p>';
            }
            echo $result;
        }
    }

    public function manageBooking()
    {

        $booking = Booking::with('venue', 'user')->orderBy('id','desc')->get();
        return view('booking.index',[
            'booking' => $booking,
        ]);
    }
}
