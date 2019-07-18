<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Download;

class DownloadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $download = Download::all();
        return view('downloads.index')->with('download', $download);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $download = Download::all();
        return view('downloads.index')->with('download', $download);
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
            'title' => 'required',
            'description' => 'required',
            'file_upload' => 'required',
            'owner' => 'required'
        ]);

        $download = new Download();
        $download->title = $request->title;
        $download->description = $request->description;
        $download->owner = $request->owner;
        if ($upload = $request->file('file_upload')){
            $name = $upload ->getClientOriginalName();
            $upload->move('files',$name);
            $download['file_upload'] = $name;
        }

        $download->save();
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
        $download = Download::findOrFail($id);
        return $download;
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
    public function downloadFile($fileId){
       $download = Download::where('id', $fileId)->firstOrFail();
       $path = public_path(). '/files/'. $download->file_upload;
       return response()->download($path, $download
                ->original_filename, ['Content-Type' => $download->mime]);
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
            'title' => 'required',
            'description' => 'required',
            'file' => 'required',
            'owner' => 'required'
        ]);

        $download = Download::find($id);
        $download->title = $request->title;
        $download->description = $request->description;
        $download->owner = $request->owner;
        if ($file = $request->file('file')){
            $name = $file ->getClientOriginalName();
            $file->move('image',$name);
            $users['file'] = $name;
        }

        $download->save();
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
        $download = Download::find($id);
        $download->delete();
        return redirect('/downloads');
    }
}
