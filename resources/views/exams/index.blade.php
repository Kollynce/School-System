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
										<h5 class="card-title text-uppercase text-muted mb-0 text-white">CAT 1</h5>
										<span class="h2 font-weight-bold mb-0 text-white">350,897</span>
									</div>
									<div class="col-auto">
										<div class="icon icon-shape bg-white text-dark rounded-circle shadow">
											<i class="ni ni-active-40"></i>
										</div>
									</div>
								</div>
								<p class="mt-3 mb-0 text-sm">
									<span class="text-white mr-2"><i class="fa fa-arrow-up"></i> 3.48%</span>
									<span class="text-nowrap text-light">Since last month</span>
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
										<h5 class="card-title text-uppercase text-muted mb-0 text-white">CAT 2</h5>
										<span class="h2 font-weight-bold mb-0 text-white">350,897</span>
									</div>
									<div class="col-auto">
										<div class="icon icon-shape bg-white text-dark rounded-circle shadow">
											<i class="ni ni-active-40"></i>
										</div>
									</div>
								</div>
								<p class="mt-3 mb-0 text-sm">
									<span class="text-white mr-2"><i class="fa fa-arrow-up"></i> 3.48%</span>
									<span class="text-nowrap text-light">Since last month</span>
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
										<h5 class="card-title text-uppercase text-muted mb-0 text-white">Main Exams</h5>
										<span class="h2 font-weight-bold mb-0 text-white">49,65%</span>
									</div>
									<div class="col-auto">
										<div class="icon icon-shape bg-white text-dark rounded-circle shadow">
											<i class="ni ni-spaceship"></i>
										</div>
									</div>
								</div>
								<p class="mt-3 mb-0 text-sm">
									<span class="text-white mr-2"><i class="fa fa-arrow-up"></i> 3.48%</span>
									<span class="text-nowrap text-light">Since last month</span>
								</p>
							</div>
						</div>
					</a>
				</div>
			</div>
			<div class="card">
				<div class="card-header">
					<div class="row align-items-center">
						<div class="col-8">
							<h3 class="mb-0">Examination Table</h3>
						</div>
					</div>
				</div>
			</div>
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
@endsection