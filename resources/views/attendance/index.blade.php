@extends('layouts.dashboard')
@section('content')
<div class="container-fluid pt-4">
	@foreach($attendance as $item)
	@if( $item->course == Auth::user()->course)
	<div class="card">
		<!-- Card header -->
		<div class="card-header border-0">
			<div class="row">
				<div class="col-6">
					<h3 class="mb-0"><span class="text-primary">{{$item->course}}</span> </h3>
				</div>
				<div class="col-6 text-right">
					<a href="#" class="btn btn-sm btn-primary btn-round btn-icon" data-toggle="modal" data-target="#addattendance">
						<span class="btn-inner--icon"><i class="ni ni-fat-add"></i></span>
						<span class="btn-inner--text">Add Attendance</span>
					</a>
				</div>
			</div>
		</div>
		<!-- Light table -->
		<div class="table-responsive">
			<table class="table align-items-center table-flush table-striped">
				<thead class="thead-light">
					<tr>
						@if(Auth::user()->name != $item->student)
						<th>Student</th>
						@endif
						<th>Unit</th>
						<th>Monday</th>
						<th>Tuesday</th>
						<th>Wednesday</th>
						<th>Thursday</th>
						<th>Friday</th>
						<th></th>
					</tr>
				</thead>
				<tbody>
					@foreach($attendance as $item)
					@if( $item->student == Auth::user()->name && $item->course = $item->unit)
					<tr>
						@if(Auth::user()->name != $item->student)
						<td class="table-user">
							<b>{{$item->student}}</b>
						</td>
						@endif
						<td class="table-user">
							<b>{{$item->unit}}</b>
						</td>
						<td>
							<span class="text-muted">{{$item->monday}}</span>
						</td>
						<td>
							<span class="text-muted">{{$item->tuesday}}</span>
						</td>
						<td>
							<span class="text-muted">{{$item->wednesday}}</span>
						</td>
						<td>
							<span class="text-muted">{{$item->thursday}}</span>
						</td>
						<td>
							<span class="text-muted">{{$item->friday}}</span>
						</td>
						<td class="table-actions">
							<a href="#!" class="attendance-edit table-action" data-toggle="modal" data-target="#editattendance" data-url="{{action('AttendanceController@update',$item['id'])}}">
								<i class="fas fa-user-edit"></i>
							</a>
							<a href="#!" class="attendance-delete table-action table-action-delete"  data-url="{{action('AttendanceController@destroy',$item['id'])}}" data-toggle="modal" data-target="#removeattendance">
								<i class="fas fa-trash"></i>
							</a>
						</td>
					</tr>
					@endif
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
	@endif
	@endforeach

	@foreach($attendance as $item)
	@if(Auth::user()->user_type == 'admin')
	<div class="card">
		<!-- Card header -->
		<div class="card-header border-0">
			<div class="row">
				<div class="col-6">
					<h3 class="mb-0"><span class="text-primary">{{$item->course}}</span> </h3>
				</div>
				<div class="col-6 text-right">
					<a href="#" class="btn btn-sm btn-primary btn-round btn-icon" data-toggle="modal" data-target="#addattendance">
						<span class="btn-inner--icon"><i class="ni ni-fat-add"></i></span>
						<span class="btn-inner--text">Add Attendance</span>
					</a>
				</div>
			</div>
		</div>
		<!-- Light table -->
		<div class="table-responsive">
			<table class="table align-items-center table-flush table-striped">
				<thead class="thead-light">
					<tr>
						<th>Student</th>
						<th>Unit</th>
						<th>Monday</th>
						<th>Tuesday</th>
						<th>Wednesday</th>
						<th>Thursday</th>
						<th>Friday</th>
						<th></th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td class="table-user">
							<b>{{$item->student}}</b>
						</td>
						<td class="table-user">
							<b>{{$item->unit}}</b>
						</td>
						<td>
							<span class="text-muted">{{$item->monday}}</span>
						</td>
						<td>
							<span class="text-muted">{{$item->tuesday}}</span>
						</td>
						<td>
							<span class="text-muted">{{$item->wednesday}}</span>
						</td>
						<td>
							<span class="text-muted">{{$item->thursday}}</span>
						</td>
						<td>
							<span class="text-muted">{{$item->friday}}</span>
						</td>
						<td class="table-actions">
							<a href="#!" class="attendance-edit table-action" data-toggle="modal" data-target="#editattendance" data-url="{{action('AttendanceController@update',$item['id'])}}">
								<i class="fas fa-user-edit"></i>
							</a>
							<a href="#!" class="attendance-delete table-action table-action-delete"  data-url="{{action('AttendanceController@destroy',$item['id'])}}" data-toggle="modal" data-target="#removeattendance">
								<i class="fas fa-trash"></i>
							</a>
						</td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
	@endif
	@endforeach
</div>
@include('attendance.create')
@include('attendance.edit')
@include('attendance.delete')
@endsection