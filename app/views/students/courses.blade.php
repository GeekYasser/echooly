@extends('layouts.default')

    @section('content')
        <!--Side Bar-->
        @include('partials.sidebar')
        <!--Calendar Layout-->
        @include('students.partials.calendar')
        <!--Calendar Lib-->
         {{HTML::style('js/lib/fullcalendar.min.css')}}

        {{HTML::script('js/lib/lib/moment.min.js')}}
        {{HTML::script('js/lib/lib/jquery-ui.custom.min.js')}}
        
        {{HTML::script('js/lib/fullcalendar.min.js')}}
        {{HTML::script('js/lib/lang/fr.js')}} 
         {{HTML::script('js/lib/date.js')}}
        {{HTML::script('js/app.js')}}

    @stop
    @section('menu')
		<ul class="nav navbar-nav navbar-right">
				  	
                  <li><a href="{{URL::route('student.auth.logout')}}">Logout</a></li>
                  <li><a href="#">Aide</a></li>
                  <li class="profile"><a href=""><u>{{{$student->name}}} {{{$student->lastName}}}</u></a></li>
 		</ul>
 
   @stop