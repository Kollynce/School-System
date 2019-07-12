<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exams;

class Cat1Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cat1 = Exams::all();
        return view('cat1.index')->with('cat1', $cat1);
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
        $this->validate($request, [
            'student' => 'required',
            'adm' => 'required',
            'unit' => 'required',
            'course' => 'required',
            'exam' => 'required',
            'total' => 'required',
            'grade' => 'required'
        ]);

        $cat1 = new Exams();
        $cat1->student = $request->student;
        $cat1->adm = $request->adm;
        $cat1->course = $request->course;
        $cat1->unit = $request->unit;
        $cat1->exam = $request->exam;
        $cat1->total = $request->total;
        $cat1->grade = $request->grade;
        $cat1->save();
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
        $cat1 = Exams::findOrFail($id);
        return $cat1;
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
         $this->validate($request, [
            'student' => 'required',
            'adm' => 'required',
            'unit' => 'required',
            'course' => 'required',
            'exam' => 'required',
            'total' => 'required',
            'grade' => 'required'
        ]);

        $cat1 = Exams::find($id);
        $cat1->student = $request->student;
        $cat1->adm = $request->adm;
        $cat1->course = $request->course;
        $cat1->unit = $request->unit;
        $cat1->exam = $request->exam;
        $cat1->total = $request->total;
        $cat1->grade = $request->grade;
        $cat1->save();
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
        $cat1 = Exams::find($id);
        $cat1->delete();
        return redirect('/cat1');
    }
}
