@extends('layout.master')
@section('title', 'Home')
@section('content')

<nav class="navbar navbar-expand-lg bg-info">
    <div class="container">
        <div class="navbar-translate">
            <a class="navbar-brand" href="#pablo">
               BookTrade
           </a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
   	        <span class="navbar-toggler-bar bar1"></span>
	        <span class="navbar-toggler-bar bar2"></span>
	        <span class="navbar-toggler-bar bar3"></span>
 	    </button>


        </div>

        <div class="collapse navbar-collapse justify-content-end" id="navigation">
    	    <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="/student/home">
                        Home
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#pablo">Activity</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#pablo">Settings</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/logout">Logout</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="container">
<h2 align="center">Settings</h2>
	@if (session('status'))
	<div class="alert alert-success" role="alert">
	    <div class="container">
	        <div class="alert-icon">
	            <i class="now-ui-icons objects_support-17"></i>
	        </div>
	        {{ session('status') }}
	        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
	            <span aria-hidden="true">
	                <i class="now-ui-icons ui-1_simple-remove"></i>
	            </span>
	        </button>
	    </div>
	</div>
	@endif

	@if($errors->any())
    <div class="alert alert-danger" role="alert">
        <div class="container">
            <div class="alert-icon">
                <i class="now-ui-icons objects_support-17"></i>
            </div>
            {{$errors->first()}}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">
                    <i class="now-ui-icons ui-1_simple-remove"></i>
                </span>
            </button>
        </div>
    </div>
    @endif
            
	<div class="row">
	<div class="col-sm-6">
	<h3 align="center">General</h3>
		<form action="/ChangeSettings" method="POST">
	        <div class="form-group">
	            <input type="text" value="{{ $user->email }}" placeholder="Email" class="form-control" required="true" name="email" id="email">
	        </div>
	        <div class="form-group">
	            <select class="form-control" name="year" id="year" required="true">
	                <option disabled selected value="">Year</option>
	                <option value="FE" @if($user->year == 'FE') selected @endif>FE</option>
	                <option value="SE" @if($user->year == 'SE') selected @endif>SE</option>
	                <option value="TE" @if($user->year == 'TE') selected @endif>TE</option>
	                <option value="BE" @if($user->year == 'BE') selected @endif>BE</option>
	            </select>
	        </div>
	        <div class="form-group">
	            <select class="form-control" name="branch" id="branch" required="true">
	                <option disabled selected value="">Branch</option>
	                <option value="CE" @if($user->branch == 'CE') selected @endif>CE</option>
	                <option value="EXTC" @if($user->branch == 'EXTC') selected @endif>EXTC</option>
	                <option value="IT" @if($user->branch == 'IT') selected @endif>IT</option>
	                <option value="ME" @if($user->branch == 'ME') selected @endif>ME</option>
	                <option value="PPT" @if($user->branch == 'PPT') selected @endif>PPT</option>
	            </select>
	        </div>
	        <div class="form-group">
	            <select class="form-control" name="semester" id="sem" disabled required="true">
	                <option disabled selected value="">Semester</option>
	            </select>
	        </div>
	        {{ csrf_field() }}
	        <button class="btn btn-primary" type="submit" style="float:right;">Submit</button>
	    </form>
	    </div>
	    <div class="col-sm-6">
	    <h3 align="center">Reset Password</h3>
	    	<form action="/ChangePassword" method="POST">
	    		<div class="form-group">
                        <input type="password" value="" placeholder="Your Password" class="form-control" required="true" name="password" id="password">
                    </div>
                    <div class="form-group">
                        <input type="password" value="" placeholder="New Password" class="form-control" required="true" name="npassword" id="npassword">
                    </div>
                    <div class="form-group">
                        <input type="password" value="" placeholder="New Password Again" class="form-control" required="true" name="npassword_a" id="npassword_a">
                    </div>
                    {{ csrf_field() }}
	        <button class="btn btn-primary" type="submit" style="float:right;">Change Password !</button>
	    	</form>
	    </div>
    </div>
</div>

@stop