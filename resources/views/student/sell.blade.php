@extends('layout.master')
@section('title', 'Sell')
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
                <li class="nav-item">
                    <a class="nav-link" href="#pablo">
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
                    <a class="nav-link" href="#pablo">Logout</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="container">
	<h2 align="center">Enter Book Details</h2>

	<div class="row">
	<div class="col-sm-6">
	<form>
	    <div class="form-group">
	        <input type="text" value="" placeholder="Book Name" class="form-control">
	    </div>

	    <div class="form-group">
	        <select class="form-control" name="year" id="year">
	        	<option disabled selected>Year</option>
	        	<option>FE</option>
	        	<option>SE</option>
	        	<option>TE</option>
	        	<option>BE</option>
	        </select>
	    </div>

	    <div class="form-group">
	        <select class="form-control" name="branch" id="branch">
	        	<option disabled selected>Branch</option>
	        	<option value="CE">CE</option>
	        	<option>EXTC</option>
	        	<option>IT</option>
	        	<option>ME</option>
	        	<option>PPT</option>
	        </select>
	    </div>

	    <div class="form-group">
	        <select class="form-control" name="sem" id="sem">
	        	<option disabled selected>Semester</option>
	        </select>
	    </div>

	    <div class="form-group">
	        <select class="form-control" name="subject" id="subject">
	        	<option disabled selected>Subject</option>
	        </select>
	    </div>

	    <div class="form-group">
	        <input type="text" value="" placeholder="Author / Publication" class="form-control">
	    </div>

	    <div class="form-group">
	        <textarea class="form-control" placeholder="Description" rows="3"></textarea>
	    </div>

	    <div class="form-group">
	    	<input type='file' id="imgInp" />
	    </div>

	 <button class="btn btn-primary" type="submit">Submit</button>

	</form>
	</div>
	<div class="col-sm-6">
	<div align="center">
		<img id="blah" src="#" alt="your image"/>
	</div>
	</div>
	</div>
</div>



@stop