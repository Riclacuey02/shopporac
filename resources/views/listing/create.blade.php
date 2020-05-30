@extends('layouts.app')

@section('content')

<div class="listing-create row m-auto pb-5">
	<div class="listing-banner col-md-12 bg-info height-100 text-center">
		<h1 class="mt-auto">Add Your Listing</h1>
	</div>
	<div class="list-create col-md-6 offset-md-3">
		<form  action="{{ route('listing.store') }}" method="POST" enctype="multipart/form-data">
	        @csrf
	        <div class="form-group">
			    <label for="title">Listing Title</label>
			    <input id="title" type="text" class="form-control" name="title" value="{{ old('title') }}" required autocomplete="off" autofocus placeholder="Your listing name">
			    @error('title')
	                <span>
	                    <strong>{{ $message }}</strong>
	                </span>
	            @enderror
		  	</div>

		  	<div class="form-group">
			    <label for="tagline">Tagline</label><small id="optional" class="text-muted"> ( optional )</small>
			    <input id="tagline" type="text" class="form-control" name="tagline" value="{{ old('tagline') }}" autocomplete="off" autofocus placeholder="e.g Specialty Coffee Shop">
			    @error('tagline')
	                <span>
	                    <strong>{{ $message }}</strong>
	                </span>
	            @enderror
		  	</div>

		  	<div class="form-group">
			    <label for="description">Description</label>
			    <textarea id="description" type="text" class="form-control" name="description" value="{{ old('description') }}" required autocomplete="off" autofocus placeholder="Listing description"></textarea>
			    @error('description')
	                <span>
	                    <strong>{{ $message }}</strong>
	                </span>
	            @enderror
		  	</div>

		  	<div class="form-group">
			    <label for="category">Listing Category</label>
			    <!-- <select class="form-control" id="" name="select[]">
			      <option>1</option>
			      <option>2</option>
			      <option>3</option>
			      <option>4</option>
			      <option>5</option>
			    </select> -->
			    <input id="category" type="text" class="form-control" name="category" value="{{ old('category') }}" required autocomplete="off" autofocus placeholder="Choose one or more categories">
			    @error('category')
	                <span>
	                    <strong>{{ $message }}</strong>
	                </span>
	            @enderror
		  	</div>

		  	<div class="form-group">
			    <label for="tags">Listing Tags</label><small id="optional" class="text-muted"> ( optional )</small>
			    <input id="tags" type="text" class="form-control" name="tags" value="{{ old('tags') }}" autocomplete="off" autofocus placeholder="Add tags">
			    @error('tags')
	                <span>
	                    <strong>{{ $message }}</strong>
	                </span>
	            @enderror
		  	</div>

		  	<div class="form-group">
			    <label for="location">Location</label><small id="optional" class="text-muted"> ( optional )</small>
			    <input id="location" type="text" class="form-control" name="location" value="{{ old('location') }}" autocomplete="off" autofocus placeholder="e.g 0363 Rose Street, Pampanga">
			    @error('location')
	                <span>
	                    <strong>{{ $message }}</strong>
	                </span>
	            @enderror
		  	</div>

		  	<div class="form-group">
			    <label for="region">Listing Barangay</label>
			    <input id="region" type="text" class="form-control" name="region" value="{{ old('region') }}" required autocomplete="off" autofocus placeholder="Select Region">
			    @error('region')
	                <span>
	                    <strong>{{ $message }}</strong>
	                </span>
	            @enderror
		  	</div>

		  	<div class="form-group">
			    <label for="image">Gallery Image</label><small id="optional" class="text-muted"> ( optional )</small>
			    <input id="image" type="file" class="form-control" name="image" autocomplete="off" autofocus>
			    @error('image')
	                <span>
	                    <strong>{{ $message }}</strong>
	                </span>
	            @enderror
		  	</div>

		  	<div class="form-group">
			    <label for="operation">Hours os Operation</label><small id="optional" class="text-muted"> ( optional )</small>
			    <textarea id="operation" type="text" class="form-control" name="operation" value="{{ old('operation') }}" autocomplete="off" autofocus placeholder="Mon- Fri: 09:00 - 23:00
Sat - Sun: 17:00 - 23:00
			    "></textarea> 
			    @error('operation')
	                <span>
	                    <strong>{{ $message }}</strong>
	                </span>
	            @enderror
		  	</div>

		  	<div class="form-group">
			    <label for="contact">Phone</label><small id="optional" class="text-muted"> ( optional )</small>
			    <input id="contact" type="text" class="form-control" name="contact" value="{{ old('contact') }}" autocomplete="off" autofocus placeholder="e.g +63-999-999-9999">
			    @error('contact')
	                <span>
	                    <strong>{{ $message }}</strong>
	                </span>
	            @enderror
		  	</div>

		  	<div class="form-group">
			    <label for="website">Website</label><small id="optional" class="text-muted"> ( optional )</small>
			    <input id="website" type="text" class="form-control" name="website" value="{{ old('website') }}" autocomplete="off" autofocus placeholder="e.g samplewebsite.com, Pampanga">
			    @error('website')
	                <span>
	                    <strong>{{ $message }}</strong>
	                </span>
	            @enderror
		  	</div>

		  	<button type="submit" class="btn btn-primary col-md-12">Submit</button>

	      </form>
	</div>
</div>

@endsection
