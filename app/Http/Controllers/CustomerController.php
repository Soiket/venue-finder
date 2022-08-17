<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Customer;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Brian2694\Toastr\Facades\Toastr;
use GrahamCampbell\ResultType\Success;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class CustomerController extends Controller
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
        $customer_id = Auth::user()->id;
      //  dd($customer_id);
        $booking = Booking::with('venue')->where('customer_id', $customer_id)->get();

        $user = User::get();
        return view('customer.index',[
            'user' => $user,
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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate(
            $request,
            [
                'fName' => 'required',
                'email' => 'required', 'string', 'email', 'max:255', 'unique:customers',
                'password' => 'required|string|min:6|',
            ],
        );


        $customer =  Customer::create([
            'fName' => $request->fName,
            'lName' => $request->lName,
            'mobile' => $request->mobile,
            'email' => $request->email,
            'password' => $request->password

        ]);

        $customer->save();

        // return back()->with('success', 'Venue Add Successfully');
        Toastr::success('Registration successfull :)', 'Success');

        return redirect()->route('signup');
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
        $profileUpdate = User::find($id);

        $profileUpdate->update([

            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)

        ]);
        $profileUpdate->save();

        Toastr::success('Profile Update successfull :)', 'Success');
        return redirect()->route('viewProfile');

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

    public function viewProfile()
    {
        $customer_id = Auth::user()->id;
        $profile = User::where('id', $customer_id)->get();

        return view('customer.profile',[
            'profile' => $profile
        ]);

    }
}
