<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Brian2694\Toastr\Facades\Toastr;
use GrahamCampbell\ResultType\Success;

class CustomerController extends Controller
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

    public function signup()
    {
        return view('customer.create');
    }
    public function customer_login()
    {
        return view('customer.login');
    }

    public function customer_login_check(Request $request)
    {
        $customer_info = Customer::whereEmail($request->email)->wherePassword($request->password)->first();


        if (!empty($customer_info)) {

            $info = array(
                'id' => $customer_info->id,
                'login_status' => 'success'
            );

            $request->session()->put('customer_info', json_encode($info));
        } else {
            return redirect()->back()->with('message', 'Sorry User not exist');
        }
        return redirect()->route('customerDashboard');
    }

    public function customerDashboard(Request $request)
    {
        if ($request->session()->has('customer_info')) {
            return view('customer.index');
        }
        else {
            return redirect()->route('customer_login');
        }
    }
}
