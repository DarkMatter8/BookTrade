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
	<div class="row">
			<div class="col-sm-4">
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<button class="btn btn-primary btn-lg">Search For A Book !</button>
			</div>
			<div class="col-sm-4">
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<a href="/student/sell"><button class="btn btn-primary btn-lg">Sell A Book !</button></a>
			</div>
			<div class="col-sm-4">
			<h3>Recent Listings</h3>
				<ul class="list-group">
					<li class="list-group-item">asdadaad</li>
					<li class="list-group-item">asdadaad</li>
					<li class="list-group-item">asdadaad</li>
					<li class="list-group-item">asdadaad</li>
					<li class="list-group-item">asdadaad</li>
					<li class="list-group-item">asdadaad</li>
					<li class="list-group-item">asdadaad</li>
					<li class="list-group-item">asdadaad</li>
					<li class="list-group-item">asdadaad</li>
					<li class="list-group-item" align="center"><a href="#">Show More ...</a></li>	
				</ul>
			</div>
	</div>
</div>
	    		

@section('stop')