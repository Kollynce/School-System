@extends('layouts.dashboard')
@section('content')
<div class="container-fluid pt-4">
	<div class="text-right pt-3 pr-3">
		<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#cat1">	Enter Marks
		</button>
	</div>
	<div class="accordion pt-3" id="accordionExample">
		@foreach($cat1 as $item)
		@if($item->exam == 'CAT 1')
			@if(Auth::user()->user_type == 'lecturer' || Auth::user()->user_type == 'admin')
			<div class="card">
				<div class="card-header" id="headingOne" data-toggle="collapse" data-target="#collapse{{$item->id}}" aria-expanded="true" aria-controls="collapseOne">
					<h5 class="mb-0">{{$item->course}} - <span class="text-primary">{{$item->unit}}</span></h5>
				</div>
				<div id="collapse{{$item->id}}" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
					<div class="card-body">
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label for=""><h4>Student Name: </h4></label>
									<label for=""><h5>{{$item->student}}</h5></label>
								</div>
								<div class="form-group">
									<label for=""><h4>Student Admission: </h4></label>
									<label for=""><h5>{{$item->adm}}</h5></label>
								</div>
								<div class="form-group">
									<label for=""><h4>Exam: </h4></label>
									<label for=""><h5>{{$item->exam}}</h5></label>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label for=""><h4>Student Total: </h4></label>
									<label for=""><h5>{{$item->total}}</h5></label>
								</div>
								<div class="form-group">
									<label for=""><h4>Student Grade: </h4></label>
									<label for=""><h5>{{$item->grade}}</h5></label>
								</div>
							</div>
						</div>
						<div class="text-right">
							<button class="cat1edit btn btn-default" data-url="{{action('Cat1Controller@update',$item['id'])}}" data-toggle="modal" data-target="#editcat1"><i class="fas fa-edit"></i> Edit</button>
							<button class="cat1-delete btn btn-danger" data-url="{{action('Cat1Controller@destroy',$item['id'])}}" data-toggle="modal" data-target="#removecat1"><i class="fas fa-trash"></i> Remove</button>
						</div>
					</div>
				</div>
			</div>
			@elseif($item->adm == Auth::user()->adm)
			<div class="card">
				<div class="card-header" id="headingOne" data-toggle="collapse" data-target="#collapse{{$item->id}}" aria-expanded="true" aria-controls="collapseOne">
					<h5 class="mb-0">{{$item->course}} - <span class="text-primary">{{$item->unit}}</span></h5>
				</div>
				<div id="collapse{{$item->id}}" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
					<div class="card-body">
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label for=""><h4>Student Name: </h4></label>
									<label for=""><h5>{{$item->student}}</h5></label>
								</div>
								<div class="form-group">
									<label for=""><h4>Student Admission: </h4></label>
									<label for=""><h5>{{$item->adm}}</h5></label>
								</div>
								<div class="form-group">
									<label for=""><h4>Exam: </h4></label>
									<label for=""><h5>{{$item->exam}}</h5></label>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label for=""><h4>Student Total: </h4></label>
									<label for=""><h5>{{$item->total}}</h5></label>
								</div>
								<div class="form-group">
									<label for=""><h4>Student Grade: </h4></label>
									<label for=""><h5>{{$item->grade}}</h5></label>
								</div>
							</div>
						</div>
						<div class="text-right">
							<button class="cat1edit btn btn-default" data-url="{{action('Cat1Controller@update',$item['id'])}}" data-toggle="modal" data-target="#editcat1"><i class="fas fa-edit"></i> Edit</button>
							<button class="cat1-delete btn btn-danger" data-url="{{action('Cat1Controller@destroy',$item['id'])}}" data-toggle="modal" data-target="#removecat1"><i class="fas fa-trash"></i> Remove</button>
						</div>
					</div>
				</div>
			</div>
			@endif
		@endif
		@endforeach
	</div>
</div>
@include('cat1.create')
@include('cat1.edit')
@include('cat1.delete')
@endsection