<?php

namespace App\Http\Controllers;

use App\Models\Division;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Brian2694\Toastr\Facades\Toastr;

class DivisionController extends Controller
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
        if (Auth::user()) {
            $division = Division::get()->all();
            //dd($division);
            return view('admin.division.index', [
                'division' => $division
                

            ]);
        } else {
            return redirect()->route('login');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.division.create');
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
                'name' => 'unique:divisions,name'
            ],
        );
        Division::create([
            'name' => $request->name
        ]);

        
        Toastr::success('division Added successfully :)','Success');

        return redirect()->route('manage-division');
        
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
        $division = Division::find($id);
        //  dd($division);
        return view('admin.division.edit', [
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
        $division = Division::find($id);

        $division_id = $division->id;
        //dd($division_id);

        $this->validate(
            $request,
            [
                'name' => 'unique:divisions,name'
            ],
        );
        $division->update([
            'name' => $request->name
        ]);
                
        Toastr::success('division Updated successfully :)','Success');

        return redirect()->route('manage-division');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('divisions')->where('id', $id)->delete();
        return redirect()->back()->with('message', 'Division Delete Successfully');
    }
}
