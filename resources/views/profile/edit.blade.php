<div class="card-body">
	<form id="profile-edit" action="#" enctype="multipart/form-data" method="POST">
		@method('PATCH')
		@csrf
		<div class="card-body">
			<h6 class="heading-small text-muted mb-4">User information</h6>
			<div class="pl-lg-4">
				<div class="row">
					<div class="col-lg-6">
						<div class="form-group">
							<label class="form-control-label" for="input-username">Username</label>
							<input type="text" name="name" class="form-control" id="name">
						</div>
					</div>
					<div class="col-lg-6">
						<div class="form-group">
							<label class="form-control-label" for="input-email">Email address</label>
							<input type="text" name="email" class="form-control" id="email">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-6">
						<div class="form-group">
							<label class="form-control-label" for="input-first-name">Profile Picture</label>
							<div class="custom-file">
								<input type="file" class="custom-file-input" name="avatar" lang="en">
								<label class="custom-file-label" for="customFileLang">Select file</label>
							</div>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="form-group">
							<label class="form-control-label" for="input-last-name">Phone Number</label>
							<input type="text" name="phone_number" class="form-control" id="phone_number">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-4">
						<div class="form-group disabled">
							<label class="form-control-label" for="input-first-name">Amission No</label>
							<input type="text" name="adm" id="disabledInput" class="form-control" value="{{Auth::user()->adm}}" id="" disabled>
						</div>
					</div>
					<div class="col-lg-5">
						<div class="form-group disabled">
							<label class="form-control-label" for="input-last-name">Course</label>
							<input type="text" name="course" id="disabledInput" class="form-control" value="{{Auth::user()->course}}" id="" disabled>
						</div>
					</div>
					<div class="col-lg-3">
						<div class="form-group disabled">
							<label class="form-control-label" for="input-first-name">Gender</label>
							<input type="text" name="adm" id="disabledInput" class="form-control" value="{{Auth::user()->gender}}" id="" disabled>
						</div>
					</div>
				</div>
			</div>
			<hr class="my-4">
			<!-- Address -->
			<h6 class="heading-small text-muted mb-4">Contact information</h6>
			<div class="pl-lg-4">
				<div class="row">
					<div class="col-lg-6">
						<div class="form-group">
							<label class="form-control-label" for="input-username">Gudian Name</label>
							<input type="text" name="gudian_name" class="form-control" id="gudian_name">
						</div>
					</div>
					<div class="col-lg-6">
						<div class="form-group">
							<label class="form-control-label" for="input-email">Gudian Number</label>
							<input type="text" name="gudian_number" class="form-control" id="gudian_number">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-6">
						<div class="form-group">
							<label class="form-control-label" for="input-username">National ID</label>
							<input type="text" name="id_number" class="form-control" id="id_number">
						</div>
					</div>
					<div class="col-lg-6">
						<div class="form-group">
							<label class="form-control-label" for="input-email">Date Of Birth</label>
							<input type="text" name="dob" class="form-control" id="dob">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-6">
						<div class="form-group">
							<label class="form-control-label" for="input-username">Year Joined</label>
							<input type="text" name="year_joined" class="form-control" id="year_joined">
						</div>
					</div>
					<div class="col-lg-6">
						<div class="form-group">
							<label class="form-control-label" for="input-email">Current Year</label>
							<input type="text" name="current_year" class="form-control" id="current_year">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-4">
						<div class="form-group">
							<label class="form-control-label" for="">County</label>
							<input type="text" id="county" class="form-control" name="county">
						</div>
					</div>
					<div class="col-lg-4">
						<div class="form-group">
							<label class="form-control-label" for="">District</label>
							<input type="text" id="district" class="form-control" name="district">
						</div>
					</div>
					<div class="col-lg-4">
						<div class="form-group">
							<label class="form-control-label" for="input-country">Division</label>
							<input type="text" id="division" class="form-control" name="division">
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<div class="form-group">
						<label class="form-control-label" for="input-last-name">Enter Password</label>
						<input type="password" name="password" class="form-control" placeholder="Enter Default Password" id="">
					</div>
				</div>
			</div>
			<hr class="my-4">
			<div class="modal-footer">
				<input type="submit" class="btn btn-primary" value="Update" name="update" id="">
			</div>
		</div>
	</form>
</div>