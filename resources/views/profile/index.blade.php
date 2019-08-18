@extends('layouts.dashboard')
@section('content')
<div class="header pb-6 d-flex align-items-center" style="min-height: 500px; background-image: url(/img/theme/profile-cover.jpg); background-size: cover; background-position: center top;">
	<!-- Mask -->
	<span class="mask bg-gradient-default opacity-8"></span>
	<!-- Header container -->
	<div class="container-fluid d-flex align-items-center">
		<div class="row">
			<div class="col-lg-7 col-md-10">
				<h1 class="display-2 text-white">Hello {{Auth::user()->name}}</h1>
				<p class="text-white mt-0 mb-5">This is your profile page. You can see the progress you've made with your work and manage your projects or assigned tasks</p>
				<a href="#!" class="btn btn-neutral">Edit profile</a>
			</div>
		</div>
	</div>
</div>

<div class="container-fluid mt--6">
	<div class="row">
		<div class="col-xl-4 order-xl-2">
			<div class="card card-profile">
				<img src="/img/theme/img-1-1000x600.jpg" alt="Image placeholder" class="card-img-top">
				<div class="row justify-content-center">
					<div class="col-lg-3 order-lg-2">
						<div class="card-profile-image">
							<a href="#">
								<img src="/image/{{Auth::user()->image}}" class="rounded-circle">
							</a>
						</div>
					</div>
				</div>
				<div class="card-header text-center border-0 pt-8 pt-md-4 pb-0 pb-md-4">
					<div class="d-flex justify-content-between">
						<a href="#" class="btn btn-sm btn-info mr-4">Connect</a>
						<a href="#" class="btn btn-sm btn-default float-right">Message</a>
					</div>
				</div>
				<div class="card-body pt-0">
					<div class="text-center">
						<h5 class="h3">
						{{Auth::user()->name}}
						</h5>
						<h5 class="h3">
						{{Auth::user()->adm}}
						</h5>
						<div class="h5 font-weight-300">
							<i class="ni location_pin mr-2"></i>{{Auth::user()->email}}
						</div>
						<div class="h5 mt-4">
							<i class="ni business_briefcase-24 mr-2"></i>{{Auth::user()->user_type}}
						</div>

						<div class="h5 mt-4">
							<i class="ni business_briefcase-24 mr-2"></i>{{Auth::user()->gender}}
						</div>
						<div>
							<i class="ni education_hat mr-2"></i>{{Auth::user()->course}}
						</div>
					</div>
				</div>
			</div>
			<!-- Progress track -->
			<div class="card">
				<!-- Card header -->
				<div class="card-header">
					<!-- Title -->
					<h5 class="h3 mb-0">List Of Registered Units</h5>
				</div>
				<!-- Card body -->
				<div class="card-body">
					<!-- List group -->
					<ul class="list-group list-group-flush list my--3">
						@foreach($regunit as $item)
						@if($item->user_id == Auth::user()->id)
						<li class="list-group-item px-0">
							<div class="row align-items-center">
								<div class="col">
									<h5>{{$item->unit}}</h5>
									<div class="progress progress-xs mb-0">
										<div class="progress-bar bg-primary" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 100%;"></div>
									</div>
								</div>
							</div>
						</li>
						@endif
						@endforeach
					</ul>
				</div>
			</div>
		</div>
		<div class="col-xl-8 order-xl-1">
			<div class="row">
				<div class="col-lg-6">
					<a href="#">
						<div class="card bg-gradient-info border-0">
							<!-- Card body -->
							<div class="card-body">
								<div class="row">
									<div class="col">
										<h5 class="card-title text-uppercase text-muted mb-0 text-white">Announcements</h5>
										<span class="h2 font-weight-bold mb-0 text-white">35</span>
									</div>
									<div class="col-auto">
										<div class="icon icon-shape bg-white text-dark rounded-circle shadow">
											<i class="ni ni-active-40"></i>
										</div>
									</div>
								</div>
								<p class="mt-3 mb-0 text-sm">
									<span class="text-nowrap text-light">Check Information</span>
								</p>
							</div>
						</div>
					</a>
				</div>
				<div class="col-lg-6">
					<a href="#">
						<div class="card bg-gradient-danger border-0">
							<!-- Card body -->
							<div class="card-body">
								<div class="row">
									<div class="col">
										<h5 class="card-title text-uppercase text-muted mb-0 text-white">Events</h5>
										<span class="h2 font-weight-bold mb-0 text-white">4</span>
									</div>
									<div class="col-auto">
										<div class="icon icon-shape bg-white text-dark rounded-circle shadow">
											<i class="ni ni-spaceship"></i>
										</div>
									</div>
								</div>
								<p class="mt-3 mb-0 text-sm">
									<span class="text-nowrap text-light">This Month Events</span>
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
							<h3 class="mb-0">Edit profile </h3>
						</div>
						<div class="col-4 text-right">
							<button class="profile-edit btn btn-default" data-url="{{action('UserController@update',Auth::user()->id)}}"><i class="fas fa-edit"></i> Edit</button>
						</div>
					</div>
				</div>
				@include('profile.edit')
				{{-- <div class="card-body">
					<form>
						<h6 class="heading-small text-muted mb-4">User information</h6>
						<div class="pl-lg-4">
							<div class="row">
								<div class="col-lg-6">
									<div class="form-group">
										<label class="form-control-label" for="input-username">Username</label>
										<input type="text" id="input-username" class="form-control" placeholder="Username" value="lucky.jesse">
									</div>
								</div>
								<div class="col-lg-6">
									<div class="form-group">
										<label class="form-control-label" for="input-email">Email address</label>
										<input type="email" id="input-email" class="form-control" placeholder="jesse@example.com">
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-lg-6">
									<div class="form-group">
										<label class="form-control-label" for="input-first-name">First name</label>
										<input type="text" id="input-first-name" class="form-control" placeholder="First name" value="Lucky">
									</div>
								</div>
								<div class="col-lg-6">
									<div class="form-group">
										<label class="form-control-label" for="input-last-name">Last name</label>
										<input type="text" id="input-last-name" class="form-control" placeholder="Last name" value="Jesse">
									</div>
								</div>
							</div>
						</div>
						<hr class="my-4">
						<!-- Address -->
						<h6 class="heading-small text-muted mb-4">Contact information</h6>
						<div class="pl-lg-4">
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
										<label class="form-control-label" for="input-address">Address</label>
										<input id="input-address" class="form-control" placeholder="Home Address" value="Bld Mihail Kogalniceanu, nr. 8 Bl 1, Sc 1, Ap 09" type="text">
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-lg-4">
									<div class="form-group">
										<label class="form-control-label" for="input-city">City</label>
										<input type="text" id="input-city" class="form-control" placeholder="City" value="New York">
									</div>
								</div>
								<div class="col-lg-4">
									<div class="form-group">
										<label class="form-control-label" for="input-country">Country</label>
										<input type="text" id="input-country" class="form-control" placeholder="Country" value="United States">
									</div>
								</div>
								<div class="col-lg-4">
									<div class="form-group">
										<label class="form-control-label" for="input-country">Postal code</label>
										<input type="number" id="input-postal-code" class="form-control" placeholder="Postal code">
									</div>
								</div>
							</div>
						</div>
						<hr class="my-4">
						<!-- Description -->
						<h6 class="heading-small text-muted mb-4">About me</h6>
						<div class="pl-lg-4">
							<div class="form-group">
								<label class="form-control-label">About Me</label>
								<textarea rows="4" class="form-control" placeholder="A few words about you ...">A beautiful premium dashboard for Bootstrap 4.</textarea>
							</div>
						</div>
					</form>
				</div> --}}
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