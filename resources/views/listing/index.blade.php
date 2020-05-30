@extends('layouts.app')

@section('content')

<div class="listing-table row m-auto py-4">
	<div class="col-md-6 offset-md-3">
		<table class="table table-md">
		    <thead>
		        <tr>
		            <th>Title</th>
		            <th>Date Posted</th>
		            <th>Expiration Date</th>
		        </tr>
		    </thead>
		    <tbody>
		    	@forelse($data as $d)
		        <tr>
		            <td><a href="{{ route('listing.show', $d->title)}}">{{ $d->title }}</a></td>
		            <td>{{ $d->created_at }}</td>
		            <td>{{ $d->expiration }}</td>
		        </tr>
		        @empty
		        <tr>
		            <td>---</td>
		            <td>---</td>
		            <td>---</td>
		        </tr>
		        @endforelse
		    </tbody>
		</table>
	</div>
	
</div>

@endsection
