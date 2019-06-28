@extends('layouts.dashboard')
@section('content')

<div class="container-fluid pt-4">
	<div class="card">
	<!-- Card header -->
	<div class="card-header border-0">
		<div class="row">
			<div class="col-6">
				<h3 class="mb-0">Units list</h3>
			</div>
			<div class="col-6 text-right">
				<!-- Button trigger modal -->
				<button type="button" class="btn btn-sm btn-primary btn-round btn-icon" data-toggle="modal" data-target="#units"> 
					<i class="ni ni-fat-add"></i>
				  Add Unit
				</button>
			</div>
		</div>
	</div>
	<!-- Light table -->
	<div class="table-responsive">
		<table class="table align-items-center table-flush table-striped">
			<thead class="thead-light">
				<tr>
					<th>Unit Name</th>
					<th>Code Unit</th>
					<th>Course</th>
					<th>Lecturer</th>
					<th>Unit Yaer</th>
					<th>Duration</th>
					<th></th>
				</tr>
			</thead>
			<tbody>
				 @if(count($units) > 0)
				@foreach($units as $unit)
				<tr>
					<td class="table-user">
						<b>{{$unit->unit_name}}</b>
					</td>
					<td>
						<span class="text-muted">{{$unit->unit_code}}</span>
					</td>
					<td>
						<span class="font-weight-bold">{{$unit->course}}</span>
					</td>
					<td>
						<span class="font-weight-bold">{{$unit->lecturer}}</span>
					</td>
					<td>
						<span class="font-weight-bold">{{$unit->year}}</span>
					</td>
					<td>
						<span class="font-weight-bold">{{$unit->duration}} Hrs</span>
					</td>
					<td class="table-actions">
						<a class="unit-edit table-action" data-toggle="modal" data-target="#unitsedit" data-url="{{action('UnitController@update',$unit['id'])}}">
							<i class="fas fa-user-edit"></i>
						</a>
						<a href="#!" class="unit-delete table-action table-action-delete"  data-url="{{action('UnitController@destroy',$unit['id'])}}" data-toggle="modal" data-target="#removeunit">
							<i class="fas fa-trash"></i>
						</a>
					</td>
				</tr>
				@endforeach
				@endif
			</tbody>
		</table>
	</div>
</div>
</div>


@include('units.create')
@include('units.edit')
@include('units.delete')
@endsection