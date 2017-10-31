<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Listing;
use App\Student;
use App\Interested;
use App\Subscribe;
use Session;
use Redirect;
use Hash;

class StudentController extends Controller
{
    public function show_home(){

        $listings = Listing::orderBy('created_at', 'desc')->get();

    	return view('student.home')->with('listings', $listings);
    }

    public function show_sell(){

    	return view('student.sell');
    }

    public function show_buy(){

        $listings = Listing::where('year', Session::get('session')->year)->where('branch', Session::get('session')->branch)->orderBy('created_at', 'desc')->get();        

        return view('student.buy')->with('listings', $listings);
    }

    public function add_listing(Request $request){


        $path = '';
        $file = $request->file('file');
        if($file){
            $extension = $file->getClientOriginalExtension();
            $filename = rand().'.'.$extension;

            $destinationPath = 'media';

            $path = $destinationPath.'/'.$filename;

            $file->move($destinationPath,$filename);
        }

    	$new_listing = new Listing;
    	$new_listing->book_name = $request->input('book_name');
    	$new_listing->year = $request->input('year');
    	$new_listing->branch = $request->input('branch');
    	$new_listing->semester = $request->input('semester');
    	$new_listing->subject = $request->input('subject');
    	$new_listing->author = $request->input('author');
    	$new_listing->description = $request->input('description'); 
    	$new_listing->owner_id = Session('session')->id;
    	$new_listing->file_path = $path;
        $new_listing->save();

    	return redirect('/student/ShowListings');
    }

    public function show_listing(){

    	$listings = Listing::orderBy('created_at', 'desc')->get();

        foreach($listings as $listing){
            $student = Student::where('id', $listing->owner_id)->first();
            $listing->owner_name = $student->name;
            $listing->owner_email = $student->email;
  
            $interested = Interested::where('interested_id', Session('session')->id)->where('listing_id',$listing->id)->first();

            if($interested){
                $listing->interested = 1;
            }else{
                $listing->interested = 0;
            }   

        }

    	return view('student.listings')->with('listings', $listings);
    }

    public function find_book(Request $request){

        $listings = Listing::where('subject', $request->input('subject'))->get();

        foreach($listings as $listing){
            $student = Student::where('id', $listing->owner_id)->first();
            $listing->owner_name = $student->name;
            $listing->owner_email = $student->email;
  
            $interested = Interested::where('interested_id', Session('session')->id)->where('listing_id',$listing->id)->first();

            if($interested){
                $listing->interested = 1;
            }else{
                $listing->interested = 0;
            }   

        }

        return view('student.listings')->with('listings', $listings);

    }

    public function show_activity(){

        $listings = Listing::where('owner_id',Session('session')->id)->get();
        
        $subscriptions = Subscribe::where('subscribed_id', Session('session')->id)->get();

        $interested = Interested::where('interested_id', Session('session')->id)->get();

        foreach ($interested as $i) {
            $listing = Listing::where('id', $i->listing_id)->first();

            $i->book_name = $listing->book_name;
        }


        return view('student.activity')->with('listings', $listings)->with('subscriptions', $subscriptions)->with('interested', $interested);

    }

    public function find_byyear($year){

        $listings = Listing::where('year', $year)->get();

        foreach($listings as $listing){
            $student = Student::where('id', $listing->owner_id)->first();
            $listing->owner_name = $student->name;
            $listing->owner_email = $student->email;
  
            $interested = Interested::where('interested_id', Session('session')->id)->where('listing_id',$listing->id)->first();

            if($interested){
                $listing->interested = 1;
            }else{
                $listing->interested = 0;
            }   

        }

        return view('student.listings')->with('listings', $listings);        

    }

    public function find_bybranch($branch){

        $listings = Listing::where('branch', $branch)->get();

        foreach($listings as $listing){
            $student = Student::where('id', $listing->owner_id)->first();
            $listing->owner_name = $student->name;
            $listing->owner_email = $student->email;
  
            $interested = Interested::where('interested_id', Session('session')->id)->where('listing_id',$listing->id)->first();

            if($interested){
                $listing->interested = 1;
            }else{
                $listing->interested = 0;
            }   

        }

        return view('student.listings')->with('listings', $listings);        

    }

    public function add_interested(Request $request){

        $interested = new Interested;
        $interested->owner_id = $request->input('owner');
        $interested->interested_id = Session('session')->id;
        $interested->listing_id = $request->input('listing');
        $interested->save();

        return redirect('/student/ShowListings');
 
    }

    public function show_settings(){

        $user = Student::where('id', Session('session')->id)->first();

        return view('student.settings')->with('user',$user);
    }

    public function change_settings(Request $request){

        $change = Student::where('id', Session('session')->id)->first();
        $change->email = $request->input('email');
        $change->year = $request->input('year');
        $change->branch = $request->input('branch');
        $change->semester = $request->input('semester');
        $change->save();

        return redirect('/student/settings')->with('status', 'Changes Made Successfully!');
    }

    public function change_password(Request $request){

        $user = Student::where('id', Session('session')->id)->first();

        if (Hash::check($request->input('password'),$user->password)){

        if($request->input('npassword') == $request->input('npassword_a')){

            $user->password = bcrypt($request->input('npassword'));
            $user->save();

            return redirect('/student/settings')->with('status', 'Password Changed Successfully!');                   

        }else{
            return Redirect::back()->withErrors(['The Entered Passwords are not Same']);
        }
    }else{
        return Redirect::back()->withErrors(['The Entered Password is not correct']);
    }
    }

    public function add_subscription(Request $request){

        $new = new Subscribe;
        $new->subscribed_id = Session('session')->id;
        $new->subject = $request->input('subject');
        $new->save();

        return redirect('/student/activity');

    }
}
