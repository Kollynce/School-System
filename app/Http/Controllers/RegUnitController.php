<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Unit;
Use App\RegUnit;
use App\User;
use Auth;

class RegUnitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $unit = Unit::all();
         $regunit = RegUnit::all();
        // $user = User::all();

        return view('regunits.index', compact('unit', 'regunit'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $unit = Unit::all();
        return view('regunits.index')->with('unit', $unit);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            //'course' => 'required',
            'unit' => 'required|unique:reg_units,unit',
            //'year' => 'required',
            //'user_id' => 'required'
        ]);

        $regunit = new RegUnit();
        //$regunit->course = $request->course;
        $regunit->unit = $request->unit;
        $regunit->course = auth()->user()->course;
        $regunit->year = auth()->user()->current_year;
        $regunit->user_id = auth()->user()->id;
        $regunit->save();
        return back();
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
        $regunit = RegUnit::find($id);
        $regunit->delete();
        return redirect('/regunits');
    }
}
