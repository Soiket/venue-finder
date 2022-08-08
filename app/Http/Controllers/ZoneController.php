<?php

namespace App\Http\Controllers;

use App\Models\Division;
use App\Models\Zone;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Brian2694\Toastr\Facades\Toastr;

class ZoneController extends Controller
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
        $zone = Zone::with('division')->get()->all();
        //dd($zone);
        return view('admin.zone.index', [
            'zone' => $zone

        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $division = Division::get()->all();

        return view('admin.zone.create',[
            'division' => $division
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
                'division_id' => 'required'
            ],
        );
        Zone::create([
            'name' => $request->name,
            'division_id' => $request->division_id
        ]);
        Toastr::success('Zone Added successfully :)','Success');
        return redirect()->route('zone.index');

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
        $zone = Zone::find($id);
        $division = Division::get()->all();
        //  dd($division);
        return view('admin.zone.edit', [
            'zone' => $zone,
            'division' => $division
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
        $zone = Zone::find($id);


        $this->validate(
            $request,
            [
                'name' => 'required',
                'division_id' => 'required'
            ],
        );
        $zone->update([
            'name' => $request->name,
            'division_id' => $request->division_id
        ]);
        Toastr::success('Zone Updated successfully :)','Success');
        return redirect()->route('zone.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('zones')->where('id', $id)->delete();
        return redirect()->back()->with('message', 'Zone Delete Successfully');
    }
}
