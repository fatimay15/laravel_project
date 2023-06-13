<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ListingController extends Controller
{
    //show all listing
    // public function index(Request $request) 
    // {
    //     dd($request);//dependency injection
        public function index()
    {
        // ******************************
        //two ways
        // dd(request());
        // dd(request('tag'));//helper
        // ******************************
        // ---------------------------------
        // $listings=Listing::all(); 
        $listings=Listing::latest()->filter(request(['tag1','searching']))->get();
       //------------------------------------
        return view('listings.index',[
            // 'heading' => 'latest listing',
            'all_listings'=> $listings
    
        ]);
    }

    //single listing
// Route::get('/listings/{id}',function($id)
// {
//     $listing=Listing::find($id);
//     if($listing){
//         return view('listing',
//         [
//            'listing'=> $listing
//         ]);
//     }
//     else 
//     {
//         abort(404);
//     }
// }); 

    //show single listing
    public function show(Listing $listing)
    {
        return view('listings.show',
        [
           's_listings'=> $listing
        ]);
    }
    //show create form
    public function create()
    {
        return view('listings.create');
    }
    public function store(Request $request)
    {
    //   dd(request()->all()); 
    // dd($request->file('logo')); 
    $formFields = $request->validate([
            'title' => 'required',
            'tag'=> 'required',
            'company'=> ['required', Rule::unique('listings','company')],
            'location'=> 'required',
            'email'=> ['required','email'],
            'website'=> 'required',
            'description'=> 'required',
    ]);
    if($request->hasFile('logo')) {
        $formFields['logo'] = $request->file('logo')->store('logos', 'public');
    }

     Listing::create($formFields);
    return redirect('/')->with('sucessful_message', 'created sucessfully');
    }
      
    // show listing form
    public function edit(Listing $listing)
    {
        // dd($listing);
        return view('listings.edit',
        [
           's_listings'=> $listing
        ]);
    }
    public function test()
    {
        $id= 5;
        $listing = Listing::where('id',$id)->first();
        return view('listings.test',[
            // 'heading' => 'latest listing',
            'single_listing'=> $listing
    
        ]);
    }
}
