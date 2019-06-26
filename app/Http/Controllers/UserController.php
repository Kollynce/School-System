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
           'gender' => 'required',
           'id_number' => 'max:8|min:8',
           'phone_number' => 'max:13|min:10',
           'gudian_number' => 'max:13|min:10',
           'avatar' => 'image|max:2048',
           'password' => 'required|max:20|min:8'
        ]);

        $users = new User();
        $users->name = $request->name;
        $users->email = $request->email;
        $users->adm = $request->adm;
        $users->course = $request->course;
        $users->year_joined = $request->year_joined;
        $users->current_year = $request->current_year;
        $users->gudian_number = $request->gudian_number;
        $users->gudian_name = $request->gudian_name;
        $users->phone_number = $request->phone_number;
        $users->dob = $request->dob;
        $users->id_number = $request->id_number;
        $users->gender = $request->gender;
        $users->county = $request->county;
        $users->district = $request->district;
        $users->division = $request->division;
        $users->user_type = $request->user_type;
        $users->password = Hash::make(Input::get('password'));
        if ($file = $request->file('avatar')){
            $name = $file ->getClientOriginalName();
            $file->move('image',$name);
            $users['avatar'] = $name;
        }


        $users->save();
        return redirect('/users');

        //dd($users);


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $users = User::findOrFail($id);
        return $users;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $users = User::findOrFail($id);
        return view('users.edit', compact('users'));

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
        // $this->validate($request,[
        //     'name' => 'required|max:255',
        //     'email' => "required|email|unique:users,email,$id",
        //     'adm' => "unique:users,adm,$id",
        //     //'user_type' => 'required',
        //     //'gender' => 'required',
        //     'id_number' => 'max:8|min:8',
        //     'phone_number' => 'max:13|min:10',
        //     'gudian_number' => 'max:13|min:10',
        //     'avatar' => 'image|max:2048',
        //     'password' => 'required|max:20|min:8'
        //  ]);


         $users = User::find($id);
         $users->name = $request->name;
         $users->email = $request->email;
         //$users->adm = $request->adm;
         //$users->course = $request->course;
         $users->year_joined = $request->year_joined;
         $users->current_year = $request->current_year;
         $users->gudian_number = $request->gudian_number;
         $users->gudian_name = $request->gudian_name;
         $users->phone_number = $request->phone_number;
         //$users->gender = $request->gender;
         $users->dob = $request->dob;
         $users->id_number = $request->id_number;
         $users->county = $request->county;
         $users->district = $request->district;
         $users->division = $request->division;
         //$users->user_type = $request->user_type;
         $users->password = Hash::make(Input::get('password'));
         if ($file = $request->file('avatar')){
             $name = $file ->getClientOriginalName();
             $file->move('image',$name);
             $users['avatar'] = $name;
         }

         //dd($users);
          $users->save();
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
        $users = User::find($id);
        $users->delete();
        return redirect('/users');
    }
}
