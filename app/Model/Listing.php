<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use Intervention\Image\ImageManagerStatic as Image;

class Listing extends Model
{
    protected $fillable = [
    	'user_id', 'title', 'tagline', 'description', 'category', 'tags', 'location', 'region', 'image', 'expiration', 'operation', 'contact', 'website'
    ];

    public static function mylist() {
    	return Listing::where('user_id', Auth::user()->id)
	    				->orderBy('id', 'desc')
	                    ->paginate(10)
	                    ->appends(request()->query());
    }

    public static function store($data) {
    	$data['user_id'] = Auth::user()->id;
    	$data['expiration'] = Carbon::today()->addDays(30);

    	if(request()->hasFile('image')) {

		    $image       = request()->file('image');
            $image_name = rand().time().'.'.$image->getClientOriginalExtension();

		    $image_resize = Image::make($image->getRealPath());              
		    // $image_resize->resize(300, 300);
		    $image_resize->save(public_path('images/listing/' .$image_name));
            $data['image'] = $image_name;

		}
    	return Listing::create($data);
    }
}
