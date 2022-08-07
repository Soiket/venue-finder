<?php

namespace App\Http\Controllers;

use App\Models\Division;
use App\Models\Zone;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth')->except('index', 'getAllDivisionInfo');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()

    {   
        // $zone = Zone::get();
        // dd($zone);

        $division = Division::get();
        return view('client.home', [
            'division' => $division
        ]);
    }

    public function getDivsionsZoneList(Request $request)
    {

        // dd($request->all());
        // return $request->id;

        if (request()->ajax() && !empty($request->id)) {

            $zone = Zone::where('division_id', $request->id)->get();

            $option = '<option value="all">All</option>';

            foreach ($zone as $z) {

                $option .= "<option value='" . $z->id . "'>" . $z->name . "</option>";
            }


            echo $option;
        }
    }
}
