@extends('layouts.default')
    @section('content')
        @include('partials.sidebar')
        
       
    @stop
	@section('menu')
		<ul class="nav navbar-nav navbar-right">
				  	
                  <li><a href="{{URL::route('teacher.auth.logout')}}">Logout</a></li>
                  <li><a href="#">Aide</a></li>
                  <li class="profile"><a href=""><u>{{{$teacher->name}}} {{{$teacher->lastName}}}</u></a></li>
 		</ul>
 
   @stop