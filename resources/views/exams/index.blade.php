@extends('layouts.dashboard')
@section('content')
<div class="header pb-6 d-flex align-items-center" style="min-height: 500px; background-image: url(/img/theme/profile-cover.jpg); background-size: cover; background-position: center top;">
	<!-- Mask -->
	<span class="mask bg-gradient-default opacity-8"></span>
	<!-- Header container -->
	<div class="container-fluid d-flex align-items-center">
		<div class="row">
			<div class="col-lg-7 col-md-10">
				<h1 class="display-2 text-white">Welcome to Examination Section {{Auth::user()->name}}</h1>
				<p class="text-white mt-0 mb-5">Here you will find the results of the tests that you have taken. Cat 1, Cat 2 and the main exams. you will also see the timetable for the exams the should be taken</p>
				<a href="#!" class="btn btn-neutral">Submit Queries</a>
			</div>
		</div>
	</div>
</div>
<div class="container-fluid mt--6">
	<div class="row">
		<div class="col-xl-12 order-xl-1">
			<div class="row">
				<div class="col-lg-4">
					<a href="/cat1">
						<div class="card bg-gradient-info border-0">
							<!-- Card body -->
							<div class="card-body">
								<div class="row">
									<div class="col">
										<span class="h2 font-weight-bold mb-0 text-white">CAT 1</span>
									</div>
									<div class="col-auto">
										<div class="icon icon-shape bg-white text-dark rounded-circle shadow">
											<i class="ni ni-spaceship"></i>
										</div>
									</div>
								</div>
								<p class="mt-3 mb-0 text-sm">
									<span class="text-white mr-2"><i class="fa fa-arrow-up"></i></span>
									<span class="text-nowrap text-light">Check you CAT 1 results</span>
								</p>
							</div>
						</div>
					</a>
				</div>
				<div class="col-lg-4">
					<a href="/cat2">
						<div class="card bg-gradient-default border-0">
							<!-- Card body -->
							<div class="card-body">
								<div class="row">
									<div class="col">
										<span class="h2 font-weight-bold mb-0 text-white">CAT 2</span>
									</div>
									<div class="col-auto">
										<div class="icon icon-shape bg-white text-dark rounded-circle shadow">
											<i class="ni ni-spaceship"></i>
										</div>
									</div>
								</div>
								<p class="mt-3 mb-0 text-sm">
									<span class="text-white mr-2"><i class="fa fa-arrow-up"></i></span>
									<span class="text-nowrap text-light">Check you CAT 2 results</span>
								</p>
							</div>
						</div>
					</a>
				</div>
				<div class="col-lg-4">
					<a href="/mainexam">
						<div class="card bg-gradient-danger border-0">
							<!-- Card body -->
							<div class="card-body">
								<div class="row">
									<div class="col">
										<span class="h2 font-weight-bold mb-0 text-white">MAIN EXANS</span>
									</div>
									<div class="col-auto">
										<div class="icon icon-shape bg-white text-dark rounded-circle shadow">
											<i class="ni ni-spaceship"></i>
										</div>
									</div>
								</div>
								<p class="mt-3 mb-0 text-sm">
									<span class="text-white mr-2"><i class="fa fa-arrow-up"></i></span>
									<span class="text-nowrap text-light">Check you Main Exams results</span>
								</p>
							</div>
						</div>
					</a>
				</div>
			</div>
			<div class="card">
				<div class="card-header border-0">
					<div class="row">
						<div class="col-6">
							<h3 class="mb-0"><span class="text-primary">Exam Table</span> </h3>
						</div>
						<div class="col-6 text-right">
							<a href="#" class="btn btn-sm btn-primary btn-round btn-icon" data-toggle="modal" data-target="#createtable">
								<span class="btn-inner--icon"><i class="ni ni-fat-add"></i></span>
								<span class="btn-inner--text">Create Table</span>
							</a>
						</div>
					</div>
				</div>
			</div>
			@foreach($table as $item)
			<div class="card">
				<div class="card-header border-0">
					<div class="row">
						<div class="col-6">
							<h3 class="mb-0">{{$item->exam}} : <span class="text-primary">{{$item->course}}</span> </h3>
						</div>
					</div>
				</div>
				<div class="table-responsive">
						<table class="table align-items-center table-flush table-striped">
							<thead class="thead-light">
								<tr>
									<th>Unit</th>
									<th>Day</th>
									<th>Time</th>
									<th>Room</th>
									<th></th>
									<th></th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td class="table-user">
										<b>{{$item->unit}}</b>
									</td>
									<td>
										<span class="text-muted">{{$item->day}}</span>
									</td>
									<td>
										<span class="text-muted">{{$item->time}} </span>
									</td>
									<td>
										<span class="text-muted">{{$item->room}}</span>
									</td>
									<td>
									<td class="table-actions">
										<a href="#!" class="table-edit table-action" data-toggle="modal" data-target="#edit-table" data-url="{{action('ExamsController@update',$item['id'])}}">
											<i class="fas fa-user-edit"></i>
										</a>
										<a href="#!" class="table-delete table-action table-action-delete" data-url="{{action('ExamsController@destroy',$item['id'])}}" data-toggle="modal" data-target="#remove-table">
											<i class="fas fa-trash"></i>
										</a>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
			</div>
			@endforeach
		</div>
	</div>
	<!-- Footer -->
	<footer class="footer pt-0">
		<div class="row align-items-center justify-content-lg-between">
			<div class="col-lg-6">
				<div class="copyright text-center text-lg-left text-muted">
					© 2019 <a href="#" class="font-weight-bold ml-1" target="_blank">Collins Odeny</a>
				</div>
			</div>
			<div class="col-lg-6">
				<ul class="nav nav-footer justify-content-center justify-content-lg-end">
					<li class="nav-item">
						<a href="#" class="nav-link" target="_blank">Collins Kreation</a>
					</li>
					<li class="nav-item">
						<a href="#" class="nav-link" target="_blank">About Me</a>
					</li>
				</ul>
			</div>
		</div>
	</footer>
</div>

@include('exams.create')
@include('exams.edit')
@include('exams.delete')
@endsection