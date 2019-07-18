@extends('layouts.dashboard')
@section('content')
<div class="container-fluid pt-3">
	<div class="text-right pb-3">
		<a href="#" class="btn btn-primary" data-toggle="modal" data-target="#createfile">Upload File</a>
	</div>
	<div class="row">
		@foreach($download as $item)
		<div class="col-lg-4">
			<!-- Basic with card header -->
			<div class="card">
				<!-- Card header -->
				<div class="card-header">
					<!-- Title -->
					<div class="row">
						<h5 class="h3 mb-0 col-md-10">{{$item->title}}</h5>
						<a class="download-delete table-action table-action-delete col-md-1 float-right" data-toggle="modal" data-target="#removefile" data-url="{{action('DownloadController@destroy',$item['id'])}}">
							<i class="fas fa-trash"></i>
						</a>
					</div>
				</div>
				<div class="card-body">
					<h5 class="text-muted">Posted on: {{$item->created_at}}</h5>
					<p class="card-text mb-4">{{$item->description}}</p>
					
					<div class="text-right">
						<h5>Uploaded By: {{$item->owner}}</h5>
						<a href="{{ route('download.file', $item->id) }}" class="btn btn-primary">Download</a>
					</div>
					
				</div>
			</div>
		</div>
		@endforeach
	</div>
</div>

@include('downloads.create')
{{-- @include('downloads.edit') --}}
@include('downloads.delete')
@endsection