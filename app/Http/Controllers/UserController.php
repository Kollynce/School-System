<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Input;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        return view('users.index')->with('users', $users);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('users.create');
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
           'name' => 'required|max:255',
           'email' => 'required|email|unique:users',
           'adm' => 'unique:users',
           'user_type' => 'required',
           'avatar' => 'image|max:2048',
           'password' => 'required|max:20|min:8'
        ]);


        // $users = array(
        //     'name' => $request->name,
        //     'email' => $request->email,
        //     'adm' => $request->adm,
        //     'user_type' => $request->user_type,
        //     //'avatar' => $request->avatar,
        //     'password' => Hash::make('password'),
        // );
        //  User::create($users);
        //  return back();

        $users = new User();
        $users->name = $request->name;
        $users->email = $request->email;
        $users->adm = $request->adm;
        $users->course = $request->course;
        $users->password = Hash::make(Input::get('password'));
        // $users = Input::file('avatar');
        // $users->move('uploads', $users->getClientOriginalName());
        if ($file = $request->file('avatar')){
            $name = $file ->getClientOriginalName();
            $file->move('image',$name);
            $users['avatar'] = $name;
        }


        $users->save();
        return redirect('/users');

       
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
        //
    }
}
