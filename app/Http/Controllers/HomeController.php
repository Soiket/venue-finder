<?php

namespace App\Http\Controllers;

use App\Models\Division;
use App\Models\Venue;
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

    public function venueSearch(Request $request)
    {

            $division = Division::get();
            $list[] = '';

            $venue  = Venue::query();

            if ($request->name == null && $request->division != null && $request->zone != null) {
                $zon = Zone::where('id', $request->zone)->first();
                $venue->where('zone_id', $zon->id);                
            }


            if ($request->name != null) {
                $venue->where('name', 'like', '%' . $request->name . '%');
            }


            if ($request->name != null && $request->division != null && $request->zone != null) {
                $venue->where('name', 'like', '%' . $request->name . '%');
            }


            if ($request->name == null && $request->division != null && $request->zone == 'all') {
                $zonelist = Zone::with('division')->where('division_id', $request->division)->get();
                $zone_ids = $zonelist->pluck('id')->toArray();
                $venue->whereIn('zone_id', $zone_ids);
            }

            if ($request->name == null && $request->division == null) {
                $venue->where('name', 'like', '%' . $request->name . '%');
            }

            $list = $venue->paginate(2);

            return view('client.venueResult', [
                'list'       =>  $list,
                'division' => $division
            ]);

    }

    public function venueSearchByName(Request $request)

    {
    }
}
