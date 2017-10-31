@extends('layout.master')
@section('title', 'Search')
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
                    <a class="nav-link" href="/home">
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
<br>
<div class="row">
	<div class="col-sm-8">
	<div class="row">
		<div class="col-sm-6" align="center"><a href="/findbybranch/{{Session('session')->branch}}"><button class="btn btn-primary btn-lg">Search For Your Branch !</button></a></div>
		<div class="col-sm-6" align="center"><a href="/findbyyear/{{Session('session')->year}}"><button class="btn btn-primary btn-lg">Search For Your Year !</button></a></div>
	</div>
	<br>
	<br>
		<h3 align="center">Filter Your Choice !</h3>
		<form action="/find" method="POST">

	    <div class="form-group">
	        <select class="form-control" name="year" id="year" required="true">
	        	<option disabled selected value="">Year</option>
	        	<option>FE</option>
	        	<option>SE</option>
	        	<option>TE</option>
	        	<option>BE</option>
	        </select>
	    </div>

	    <div class="form-group">
	        <select class="form-control" name="branch" id="branch" required="true" disabled>
	        	<option disabled selected value="">Branch</option>
	        	<option value="CE">CE</option>
	        	<option>EXTC</option>
	        	<option>IT</option>
	        	<option>ME</option>
	        	<option>PPT</option>
	        </select>
	    </div>

	    <div class="form-group">
	        <select class="form-control" name="semester" id="sem" disabled>
	        	<option disabled selected value="">Semester</option>
	        </select>
	    </div>

	    <div class="form-group">
	        <select class="form-control" name="subject" id="subject" disabled>
	        	<option disabled selected value="">Subject</option>
	        </select>
	    </div>

	    {{ csrf_field() }}

	 <button class="btn btn-primary" type="submit">Submit</button>

		</form>	
	</div>
	<div class="col-sm-4">
		<h3>Books You Might Prefer !</h3>
				<ul class="list-group">
					@foreach($listings as $listing)
						<li class ="list-group-item">{{ $listing->book_name }}</li>
					@endforeach
					<li class="list-group-item" align="center"><a href="/student/ShowListings">Show More ...</a></li>	
				</ul>
			</div>
	</div>
</div>
</div>
@stop