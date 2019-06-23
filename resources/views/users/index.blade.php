@extends('layouts.dashboard')

@section('content')
    <div class="text-right pt-3 pr-3">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#createuser">Create User</button>
    </div>
    <div class="pl-3 pt-3 row">
      @foreach($users as $user)
        <div class="card m-1 col-md-6" style="max-width: 540px;">
          <div class="row no-gutters">
            <div class="col-md-4 pt-4">
              <img src="/image/{{ $user->avatar }}" class="card-img rounded-circle" alt="...">
            </div>
            <div class="col-md-8">
              <div class="card-body">
                <h3 class="card-title">{{$user->name}}</h3>
                <p class="card-text">{{$user->adm}} <br> {{$user->email}} <br> {{$user->course}} <br> <b>{{$user->user_type}}</b> </p>
                <p class="card-text pl-5">
                  <button class="user-edit btn btn-default" data-url="{{action('UserController@update',$user['id'])}}" data-toggle="modal" data-target="#edituser"><i class="fas fa-edit"></i> Edit</button>
                  <button class="user-delete btn btn-danger" data-url="{{action('UserController@destroy',$user['id'])}}" data-toggle="modal" data-target="#removeuser"><i class="fas fa-trash"></i> Remove</button>
                </p>
              </div>
            </div>
          </div>
        </div>
      @endforeach
    </div>


    @include('users.create')
    @include('users.edit')
    @include('users.delete')

@endsection
