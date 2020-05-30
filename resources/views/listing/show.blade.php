@extends('layouts.app')

@section('content')

<div class="listing-show row m-auto">
	@if($data->image != null)
	<div class="image-banner">
		<img src="{{ asset('images/listing') }}/{{ $data->image }}">
		<img src="{{ asset('images/listing') }}/{{ $data->image }}">
		<img src="{{ asset('images/listing') }}/{{ $data->image }}">
		<img src="{{ asset('images/listing') }}/{{ $data->image }}">
		<img src="{{ asset('images/listing') }}/{{ $data->image }}">
		<img src="{{ asset('images/listing') }}/{{ $data->image }}">
	</div>
	@endif
	<div class="col-md-12 listing-header-entry">
		<div class="col-md-4 offset-md-4 p-0 pb-4">
			<div class="category pt-4 pb-2">
				<span><a href="">Listings</a> >> <a href="">{{$data->category}}</a></span>
			</div>
			<div class="title">
				{{ $data->title }}
			</div>
			<div class="entry-subtitle">
				{{ $data->tagline }}
			</div>
			<div class="contacts row m-auto pt-2">
				<div class="col-md-4 p-0"><i class="fa fa-phone" aria-hidden="true"></i> Ratings </div>
				<div class="col-md-4 p-0"><i class="fa fa-phone" aria-hidden="true"></i> {{ $data->contact }}</div>
				<div class="col-md-4 p-0"> <i class="fa fa-envelope" aria-hidden="true"></i> {{ $data->website }}</div>
			</div>
		</div>
	</div>

	<div class="col-md-12 listing-entry-action">
		<div class="col-md-4 offset-md-4 p-0 mb-5">
			<div class="listing-action row m-auto py-4">
				<div class="col-md-4 p-0"><a href=""><i class="fa fa-phone" aria-hidden="true"></i> Write Review </a></div>
				<div class="col-md-4 p-0"><a href=""><i class="fa fa-phone" aria-hidden="true"></i>  Add to favorites </a></div>
				<div class="col-md-4 p-0"><a href=""><i class="fa fa-envelope" aria-hidden="true"></i> Share </a></div>
			</div>

			<div class="listing-description">
				<p>{{ $data->description }}</p>
			</div>

			<div class="listing-tags row m-auto p-5">
				<div class="col-md-6 mb-4">Parking Street</div>
				<div class="col-md-6">Parking Street</div>
				<div class="col-md-6">Parking Street</div>
				<div class="col-md-6">Parking Street</div>
			</div>

			<div class="listing-reviews row m-auto py-3">
				<div class="col-md-6 mb-4">1 Reviews</div>
			</div>

			<div class="list-reviews row m-auto py-3">
				<div class="col-md-3 text-center">
					<img src="{{ asset('images/profile.png') }}" class="rounded-circle mb-2">
					<p>Name</p>
				</div>
				<div class="col-md-9">
					<div class="col-md-12 mb-2">
						<b>"What is Lorem Ipsum?"</b>
					</div>
					<div class="col-md-12 mb-2">
						Ratings on date sample
					</div>
					<div class="col-md-12">
						Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. 
					</div>
				</div>
			</div>

			<div class="create-review row m-auto py-5 px-3">
				<div class="col-md-12 mb-2 cr-header pb-4">
					<b>Rate and write a review</b>
				</div>
				<div class="col-md-12 mb-2 pb-1">
					<b>Your overall rating of this listing</b>
				</div>
				<div class="col-md-12 mb-2 pb-4">
					<b>stars stars > rate good</b>
				</div>
				<div class="col-md-12 mb-2 cr-title">
					<label>Title of your review</label><br>
					<input type="" name="">
				</div>
				<div class="col-md-12 mb-2 cr-description">
					<label>Your Review:</label><br>
					<textarea></textarea>
				</div>
				<div class="col-md-12 mb-2 cr-button">
					<button>Submit</button>
				</div>
				<div class="col-md-12 mb-2 cr-account">
					<a href="">Logged in as RIcardo II Lacuesta.</a> <a href="">Log out?</a>
				</div>

			</div>

		</div>
	</div>
	
</div>

@endsection
