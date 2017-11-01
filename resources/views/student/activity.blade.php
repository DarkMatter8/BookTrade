@extends('layout.master')
@section('title', 'Activity')
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
	<div class="row">
			<div class="col-sm-4">
			<h3>Your Recent Listings</h3>
				<ul class="list-group">
					@foreach($listings as $listing)
						<li class ="list-group-item">{{ $listing->book_name }}
						<form action="/Remove" method="POST">
						<input type="hidden" value="{{$listing->id}}" name="id">
						<input type="hidden" value="listing" name="type">
						{{ csrf_field() }}
						<button class="btn btn-danger btn-icon  btn-icon-mini btn-round" type="submit" style="float:right;"><i class="fa fa-trash-o" aria-hidden="true"></i>
</button>
						</form>
						</li>
					@endforeach
				</ul>
			</div>
		<div class="col-sm-4">
		<h3>Your Interested Books !</h3>
			<ul class="list-group">
				@foreach($interested as $i)
					<li class ="list-group-item">{{ $i->book_name }}
					<form action="/Remove" method="POST">
					<input type="hidden" value="{{$i->id}}" name="id">
					<input type="hidden" value="interested" name="type">
					{{ csrf_field() }}
					<button class="btn btn-danger btn-icon  btn-icon-mini btn-round" type="submit" style="float:right;"><i class="fa fa-trash-o" aria-hidden="true"></i>
</button></li>
					</form>
				@endforeach
			</ul>
		</div>
		<div class="col-sm-4">
		<h3>Your Subscribed Subjects !</h3>
			<ul class="list-group">
				@foreach($subscriptions as $subscription)
					<li class ="list-group-item">{{ $subscription->subject }}
					<form action="/Remove" method="POST">
					<input type="hidden" value="{{$subscription->id}}" name="id">
					<input type="hidden" value="subscribe" name="type">
					{{ csrf_field() }}
					<button class="btn btn-danger btn-icon  btn-icon-mini btn-round" type="submit" style="float:right;"><i class="fa fa-trash-o" aria-hidden="true"></i>
</button></li>
					</form>
				@endforeach
			</ul>
		</div>
	</div>
</div>


@stop