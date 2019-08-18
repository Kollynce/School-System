<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Attendance;
use App\User;


class AttendanceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $attendance = Attendance::all();
        $user = User::all();
        return view('attendance.index', compact('user'))->with('attendance', $attendance);
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
            'student' => 'required',
            'course' => 'required',
            'unit' => 'required'
        ]);

        $attendance = new Attendance();
        $attendance->student = $request->student;
        $attendance->course = $request->course;
        $attendance->unit = $request->unit;
        $attendance->monday = 'Not Attended';
        $attendance->tuesday = 'Not Attended';
        $attendance->wednesday = 'Not Attended';
        $attendance->thursday = 'Not Attended';
        $attendance->friday = 'Not Attended';
        $attendance->save();
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
        $attendance = Attendance::findOrFail($id);
        return $attendance;
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
            'course' => 'required',
            'unit' => 'required',
        ]);

        $attendance = Attendance::find($id);
        $attendance->course = $request->course;
        $attendance->unit = $request->unit;
        $attendance->monday = $request->monday;
        $attendance->tuesday = $request->tuesday;
        $attendance->wednesday = $request->wednesday;
        $attendance->thursday = $request->thursday;
        $attendance->friday = $request->friday;
        $attendance->save();
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
        $attendance = Attendance::find($id);
        $attendance->delete();
        return redirect('attendance');
    }
}
