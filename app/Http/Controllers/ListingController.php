<?php

namespace App\Http\Controllers;

use App\Model\Listing;
use Illuminate\Http\Request;

class ListingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Listing::mylist();
        return view('listing.index', compact('data'));
    }

    public function create()
    {
        return view('listing.create');
    }

    public function store(Request $request)
    {
        Listing::store($this->validateListing());
        return redirect( route('listing.index') );
    }

    public function show($title)
    {
        $data = Listing::where('title', $title)->first();
        return view('listing.show', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\Listing  $listing
     * @return \Illuminate\Http\Response
     */
    public function edit(Listing $listing)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Listing  $listing
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Listing $listing)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Listing  $listing
     * @return \Illuminate\Http\Response
     */
    public function destroy(Listing $listing)
    {
        //
    }

    protected function validateListing(){
        return request()->validate([
            'title' => 'required|min:2|max:225|unique:listings',
            'tagline' => 'nullable|min:2|max:225',
            'description' => 'required|min:2|max:1000',
            'category' => 'required|min:2|max:225',
            'tags' => 'nullable|min:2|max:225',
            'location' => 'nullable|min:2|max:225',
            'region' => 'nullable|min:2|max:225',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'operation' => 'nullable|min:2|max:225',
            'contact' => 'nullable|min:2|max:225',
            'website' => 'nullable|min:2|max:225',
        ]);
    }
}
