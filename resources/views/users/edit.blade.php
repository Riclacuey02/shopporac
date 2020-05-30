@extends('layouts.app')

@section('content')

<div class="list-create col-md-4 offset-md-4 pt-3 pb-5 my-5">

		<form  action="{{ route('user.update', $user) }}" method="POST" enctype="multipart/form-data">
	        @csrf
    		@method('PUT')
	        <div class="form-group">
			    <label for="fname">First Name *</label>
			    <input id="fname" type="text" class="form-control" name="fname" value="{{ $user->fname }}" autocomplete="off" autofocus>
			    @error('fname')
	                <span>
	                    <strong>{{ $message }}</strong>
	                </span>
	            @enderror
		  	</div>

	        <div class="form-group">
			    <label for="lname">Last Name *</label>
			    <input id="lname" type="text" class="form-control" name="lname" value="{{ $user->lname }}" autocomplete="off" autofocus>
			    @error('lname')
	                <span>
	                    <strong>{{ $message }}</strong>
	                </span>
	            @enderror
		  	</div>

	        <div class="form-group">
			    <label for="name">Display Name *</label>
			    <input id="name" type="text" class="form-control" name="name" value="{{ $user->name }}" required autocomplete="off" autofocus>
			    @error('name')
	                <span>
	                    <strong>{{ $message }}</strong>
	                </span>
	            @enderror
		  	</div>

	        <div class="form-group">
			    <label for="email">Email address *</label>
			    <input id="email" type="text" class="form-control" name="email" value="{{ $user->email }}" required autocomplete="off" autofocus>
			    @error('email')
	                <span>
	                    <strong>{{ $message }}</strong>
	                </span>
	            @enderror
		  	</div>
<!-- 
	        <div class="form-group">
			    <label for="current_password">Current password (leave blank to leave unchanged)</label>
			    <input id="current_password" type="password" class="form-control" name="current_password" value="{{ old('current_password') }}" autocomplete="off" autofocus>
			    @error('current_password')
	                <span>
	                    <strong>{{ $message }}</strong>
	                </span>
	            @enderror
		  	</div> -->

	        <div class="form-group">
			    <label for="password">New password (leave blank to leave unchanged)</label>
			    <input id="password" type="password" class="form-control" name="password" value="{{ old('password') }}" autocomplete="off" autofocus>
			    @error('password')
	                <span>
	                    <strong>{{ $message }}</strong>
	                </span>
	            @enderror
		  	</div>

	        <div class="form-group">
			    <label for="confirm_password">Confirm new password</label>
			    <input id="confirm_password" type="password" class="form-control" name="confirm_password" value="{{ old('confirm_password') }}" autocomplete="off" autofocus>
			    @error('confirm_password')
	                <span>
	                    <strong>{{ $message }}</strong>
	                </span>
	            @enderror
		  	</div>

		  	

		  	<button type="submit" class="btn btn-primary col-md-12">Save Changes</button>

	      </form>
	</div>
@endsection
