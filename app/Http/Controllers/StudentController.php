<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Listing;

class StudentController extends Controller
{
    public function show_home(){

    	return view('student.home');
    }

    public function show_sell(){

    	return view('student.sell');
    }

    public function add_listing(Request $request){

    	$new_listing = new Listing;
    	$new_listing->book_name = $request->input('book_name');
    	$new_listing->year = $request->input('year');
    	$new_listing->branch = $request->input('branch');
    	$new_listing->semester = $request->input('semester');
    	$new_listing->subject = $request->input('subject');
    	$new_listing->author = $request->input('author');
    	$new_listing->description = $request->input('description'); 
    	$new_listing->owner_id = Session('session')->id;
    	$new_listing->save();

    	return redirect('/student/ShowListings');
    }

    public function show_listing(){

    	$listings = Listing::all();

    	return view('student.listings')->with('listings', $listings);
    }
}
