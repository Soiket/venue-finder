<?php

namespace App\Http\Controllers;

use App\Models\Venue;
use App\Models\Zone;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class VenueController extends Controller
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
        $venue = Venue::with('zone')->get()->all();
        return view('admin.venue.index', [
            'venue' => $venue

        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $zone = Zone::get()->all();

        return view('admin.venue.create',[
            'zone' => $zone
        ]);
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
                'name' => 'required',
                'zone_id' => 'required',
                'price' => 'required'
            ],
        );
        if ($request->file('image')) {
            $file = $request->file('image');
            $filename = $file->getClientOriginalName();
            $path = $file->storeAs('public/images', $filename);
        }
    

     $venu =  Venue::create([
            'name' => $request->name,
            'zone_id' => $request->zone_id,
            'price' => $request->price,
            'discount' => $request->discount,
            'address' => $request->address,
            'description' => $request->description,
            'image'=> $filename     
            
        ]);

        $venu->save();

        return redirect()->back()->with('message', 'Venue Add Successfully');
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
        $venue = Venue::find($id);
        $zone = Zone::get()->all();
        //  dd($division);
        return view('admin.venue.edit', [
            'venue' => $venue,
            'zone' => $zone
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
        $venue = Venue::find($id);
        
        $this->validate(
            $request,
            [
                'name' => 'required',
                'zone_id' => 'required',
                'price' => 'required'
            ],
        );
        if ($request->file('image')) {
            $file = $request->file('image');
            $filename = $file->getClientOriginalName();
            $path = $file->storeAs('public/images', $filename);
        }
    

     $venue->update([
            'name' => $request->name,
            'zone_id' => $request->zone_id,
            'price' => $request->price,
            'discount' => $request->discount,
            'address' => $request->address,
            'description' => $request->description,
            'image'=> $filename     
            
        ]);


        return redirect()->back()->with('message', 'Venue Update Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('venues')->where('id', $id)->delete();
        return redirect()->back()->with('message', 'Venue Delete Successfully');
    }
}
