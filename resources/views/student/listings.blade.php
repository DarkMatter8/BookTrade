@extends('layout.master')
@section('title', 'Home')
@section('content')

<nav class="navbar navbar-expand-lg bg-info">
    <div class="container">
        <div class="navbar-translate">
            <a class="navbar-brand" href="/">
               <i class="fa fa-book" aria-hidden="true"></i> BookTrade
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
                    <a class="nav-link" href="/student/home">
                        Home
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/student/activity">Activity</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/student/settings">Settings</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/logout">Logout</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="container">
	<h1 align="center">All Listings </h1>
	<ul class="list-group">
		@foreach($listings as $listing)
			<li class="list-group-item">
				<div class="panel-group">
				  <div class="panel panel-default">
				    <div class="panel-heading">
				    <div class="row">
				    <div class="col-sm-2">
				    @if($listing->file_path == NULL)
				    <img src="{{asset('img/33.jpg')}}">
				    @else
				    <img src="{{asset($listing->file_path)}}">
				    @endif
				    </div>
				    <div class="col-sm-7">
				      <p class="panel-title" style="font-size:1.5em;">
				        <a data-toggle="collapse" href="#collapse1">{{ $listing->book_name }}</a>
				      </p>
				      <p>Author:- {{ $listing->author }}</p>
				      <p>{{ $listing->year }} / {{ $listing->branch }}</p>
				      <p>Subject:- {{ $listing->subject }}</p>
				    </div>
				    <div class="col-sm-3">
				    <br>
				    <br>
				    <br>
				    @if($listing->interested == 0)
				    	<form action="/addInterested" method="POST">
				    	<input type="hidden" value="{{ $listing->owner_id }}" name="owner">
				    	<input type="hidden" value="{{ $listing->id }}" name="listing">
				    	{{ csrf_field() }}
				    	<button class="btn btn-success btn-block" type="submit">Interested !</button><br>
				    	</form>
				    @else
				    	<button class="btn btn-success btn-block" disabled>Interested !</button>
				    @endif
				    	<br>
				    </div>
				    </div>
				    </div>
				    <div id="collapse1" class="panel-collapse collapse">
				      <div class="panel-body">
				      <hr>
				      	<p style="font-size:1.2em;">Owner Details:-</p>
				      	<p>Name:- {{ $listing->owner_name }}</p>
				      	<p>Email:- {{ $listing->owner_email }}</p>
				      </div>
				    </div>
				  </div>
				</div>
			</li>
		@endforeach
	</ul>
</div>

@stop