@extends('layouts.dashboard')
@section('content')
<div class="container-fluid pt-4">
	<div class="card">
		<!-- Card header -->
		<div class="card-header border-0">
			<div class="row">
				<div class="col-6">
					<h3 class="mb-0">Registered Units</h3>
				</div>
				<div class="col-6 text-right">
					<!-- Button trigger modal -->
					<button type="button" class="btn btn-sm btn-primary btn-round btn-icon" data-toggle="modal" data-target="#regunits"> 
						<i class="ni ni-fat-add"></i>
					  Register Unit
					</button>
				</div>
			</div>
		</div>
		<!-- Light table -->
		<div class="table-responsive">
			<table class="table align-items-center table-flush">
				<thead class="thead-light">
					<tr>
						<th>Unit</th>
						<th>Course</th>
						<th>Unit Year</th>
						<th>Student</th>
						<th></th>
					</tr>
				</thead>
				<tbody>
					@if(count($regunit) > 0)
					@foreach($regunit as $item)
					@if($item->user_id == Auth::user()->id)
						<tr>
							<td class="table-user">
								<b>{{$item->unit}}</b>
							</td>
							<td>
								<span class="text-muted">{{$item->course}}</span>
							</td>
							<td>
								<a class="font-weight-bold">{{$item->year}}</a>
							</td>
							<td>
								<span class="text-muted">{{$item->user->name}}</span>
							</td>
							<td class="table-actions">
								<a href="#!" class="regunit-delete table-action table-action-delete"  data-url="{{action('RegUnitController@destroy',$item['id'])}}" data-toggle="modal" data-target="#removeregunit">
									<i class="fas fa-trash"></i>
								</a>
							</td>
						</tr>
					@endif	
					@endforeach
					@endif
				</tbody>
			</table>
		</div>
	</div>
</div>

@include('regunits.create')
@include('regunits.delete')
@endsection