<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
use Validator;
use Hash;
use Session;
use Redirect;
use Mail;

class AuthController extends Controller
{
    public function do_login(Request $request) {
        // Validate the input
        $messages = [
            'required' => 'Enter your :attribute',
        ];
        $validator = Validator::make($request->all(), [
            'email' => 'required | max:64',
            'password' => 'required ',
        ], $messages);
        // If validator fails
        if($validator->fails()){
            return response()->json([
                'status' => 'fail',
                'message' => 'There are some errors in your form !',
            ]);
        } else {
            // Check if user exists
            $checkUser = Student::where('email', $request->input('email'))->first();
            if($checkUser) {
                if (Hash::check($request->input('password'), $checkUser->password)) {
                    Session::regenerate();
                    Session::put('session', $checkUser);
                    if($checkUser->role == 'admin') {
                        return response()->json([
                        'status' => 'success',
                        'message' => 'admin',
                    ]);
                    } else if($checkUser->role == 'student') {
                        return response()->json([
                        'status' => 'success',
                        'message' => 'student',
                    ]);
                    }
                } else {
                    return response()->json([
                        'status' => 'fail',
                        'message' => 'Incorrect Password !',
                    ]);
                }
            } else {
                return response()->json([
                    'status' => 'fail',
                    'message' => 'There is no such User !',
                ]);
            }
        }
    }

    public function do_register(Request $request){

        if(($request->input('password'))==($request->input('password_a'))){
            
            $exists = Student::where('email', $request->input('email'))->first();

            if($exists){
                 return Redirect::back()->withErrors(['User with same email address already Exists !']);
            }else{

            $new = new Student;
            $new->name = $request->input('name');
            $new->email = $request->input('email');
            $new->password = Hash::make($request->input('password'));
            $new->year = $request->input('year');
            $new->branch = $request->input('branch');
            $new->semester = $request->input('semester');
            $new->role = 'student';
            $new->contact = $request->input('contact');
            $new->save();

            $success = 'You are Registered Successfully !';

            Mail::send('email.register', array('new' => $new), function($message) use ($new) {
                $message->to($new->email);
                $message->subject('Registration Successfull');
            });


            return redirect('/signup')->with('status', 'You are successfully Registered!');

            }
        }else{
            return Redirect::back()->withErrors(['The Entered Passwords are not Same']);
        }
    }

    public function do_logout(){
        
        Session::flush();
        
        return redirect('/');
    }

}
