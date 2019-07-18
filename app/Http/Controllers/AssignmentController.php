<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Assignment;

class AssignmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $assignment = Assignment::all();
        return view('assignments.index')->with('assignment', $assignment);
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
            'course' => 'required',
            'unit' => 'required',
            'description' => 'required',
            'file_assign' => 'required',
            'owner' => 'required',
            'submission' => 'required'
        ]);

        $assignment = new Assignment();
        $assignment->course = $request->course;
        $assignment->unit = $request->unit;
        $assignment->description = $request->description;
        $assignment->owner = $request->owner;
        $assignment->submission = $request->submission;
        if ($upload = $request->file('file_assign')){
            $name = $upload ->getClientOriginalName();
            $upload->move('files',$name);
            $assignment['file_assign'] = $name;
        }

        $assignment->save();
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
     * Download function for laravel :).
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function assignmentFile($fileId){
       $assignment = Assignment::where('id', $fileId)->firstOrFail();
       $path = public_path(). '/files/'. $assignment->file_assign;
       return response()->download($path, $assignment
                ->original_filename, ['Content-Type' => $assignment->mime]);
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
            'course' => 'required',
            'unit' => 'required',
            'description' => 'required',
            'file_assign' => 'required',
            'owner' => 'required',
            'submission' => 'required'
        ]);

        $assignment = Assignment::find($id);
        $assignment->course = $request->course;
        $assignment->unit = $request->unit;
        $assignment->description = $request->description;
        $assignment->owner = $request->owner;
        $assignment->submission = $request->submission;
        if ($upload = $request->file('file_assign')){
            $name = $upload ->getClientOriginalName();
            $upload->move('files',$name);
            $assignment['file_assign'] = $name;
        }

        $assignment->save();
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
        $assignment = Assignment::find($id);
        $assignment->delete();
        return redirect('/assignments');
    }
}
