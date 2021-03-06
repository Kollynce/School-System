<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ExamTable;

class ExamsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $table = ExamTable::all();
        return view('exams.index')->with('table', $table);
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
        $this->validate( $request, [
            'exam' => 'required',
            'course' => 'required',
            'unit' => 'required',
            'day' => 'required',
            'time' => 'required',
            'room' => 'required'
        ]);

        $table = new ExamTable();
        $table->exam = $request->exam;
        $table->course = $request->course;
        $table->unit = $request->unit;
        $table->day = $request->day;
        $table->time = $request->time;
        $table->room = $request->room;
        $table->save();
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
        $table = ExamTable::findOrFail($id);
        return $table;
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
        $this->validate( $request, [
            'exam' => 'required',
            'course' => 'required',
            'unit' => 'required',
            'day' => 'required',
            'time' => 'required',
            'room' => 'required'
        ]);

        $table = ExamTable::find($id);
        $table->exam = $request->exam;
        $table->course = $request->course;
        $table->unit = $request->unit;
        $table->day = $request->day;
        $table->time = $request->time;
        $table->room = $request->room;

        //return $table;
        $table->save();
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $table = ExamTable::find($id);
        $table->delete();
        return redirect('/exams');
    }
}
