<?php

namespace App\Http\Controllers;

use App\Unit;
use Illuminate\Http\Request;

class UnitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $units = Unit::all();
        return view('units.index')->with('units', $units);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $units = Unit::all();
        return view('units.index')->with('units');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'unit_name' => 'required',
            'unit_code' => 'required',
            'course' => 'required',
            'lecturer' => 'required',
            'year' => 'required',
            'duration' => 'required'
        ]);
       

        $units = new Unit();
        $units->unit_name = $request->unit_name;
        $units->unit_code = $request->unit_code;
        $units->course = $request->course;
        $units->lecturer = $request->lecturer;
        $units->year = $request->year;
        $units->duration = $request->duration;
        $units->save();
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Unit  $unit
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $units = Unit::findOrFail($id);
        return $units;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Unit  $unit
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $units = Unit::findOrFail($id);
        return $units;
         //return view('units.edit')->with('units', $units);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Unit  $unit
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'unit_name' => 'required',
            'unit_code' => 'required',
            'course' => 'required',
            'lecturer' => 'required',
            'year' => 'required',
            'duration' => 'required'
        ]);
        

        $units = Unit::find($id);
        $units->unit_name = $request->unit_name;
        $units->unit_code = $request->unit_code;
        $units->course = $request->course;
        $units->lecturer = $request->lecturer;
        $units->year = $request->year;
        $units->duration = $request->duration;
        $units->save();
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Unit  $unit
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $units = Unit::find($id);
        $units->delete();
        return redirect('/units');
    }
}
