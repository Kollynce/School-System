@extends('layouts.dashboard')
@section('content')
<div class="container-fluid pt-4">
	<div class="card">
		<!-- Card header -->
		<div class="card-header border-0">
			<div class="row">
				<div class="col-6">
					<h3 class="mb-0">Course:Unit</h3>
				</div>
				<div class="col-6 text-right">
					<a href="#" class="btn btn-sm btn-primary btn-round btn-icon" data-toggle="tooltip" data-original-title="Edit product">
						<span class="btn-inner--icon"><i class="fas fa-user-edit"></i></span>
						<span class="btn-inner--text">Export</span>
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
							<b>John Michael</b>
						</td>
						<td>
							<span class="text-muted">Attended</span>
						</td>
						<td>
							<span class="text-muted">Not Attended</span>
						</td>
						<td>
							<span class="text-muted">Attended</span>
						</td>
						<td>
							<span class="text-muted">Attended</span>
						</td>
						<td>
							<span class="text-muted">Not Attended</span>
						</td>
						
						<td class="table-actions">
							<a href="#!" class="table-action" data-toggle="tooltip" data-original-title="Edit product">
								<i class="fas fa-user-edit"></i>
							</a>
							<a href="#!" class="table-action table-action-delete" data-toggle="tooltip" data-original-title="Delete product">
								<i class="fas fa-trash"></i>
							</a>
						</td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
</div>


@foreach($attendance as $item)
	<p>{{$item->user}}</p>
@endforeach


@endsection