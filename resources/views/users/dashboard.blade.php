@extends('layouts.app')

@section('content')

<div class="dashboard bg-secondary py-4">
	<div class="row m-0 bg-light pt-5 pb-5">
		<div class="float-left col-md-6 row m-auto p-4">
			<img class="rounded-circle" src="{{ asset('/images/profile.png') }}">
			<span class="col-md-8 mt-auto mb-auto">Hello RIcardo II Lacuesta (not RIcardo II Lacuesta? 
				<a href="{{ route('logout') }}" 
					onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                    <u>Sign out</u></a>). From your account dashboard you can view your recent orders, manage your shipping and billing addresses and 
                <a href="{{ route('user.edit', Auth::user()->id) }}"><u>edit your password and account details.</u></a>
			</span>
		</div>
	</div>

	<div class="row col-md-5 offset-md-3 text-light pt-5 pb-5">
		<span>From your account dashboard you can view your recent orders, manage your shipping and billing addresses and edit your password and account details.</span>
	</div>
	
</div>
@endsection
