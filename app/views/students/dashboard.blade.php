@extends('layouts.default')

    @section('content')
        <!--Side Bar-->
        @include('partials.sidebar')
        
        <!--Student Information-->
        @include('students.partials.infos')
        <!--Angularjs Information-->
        {{HTML::script('lib/app.js')}}
        {{HTML::script('lib/mainCtrl.js')}}
        {{HTML::script('lib/CourseService.js')}}
       

       <!--Courses of today-->
          @include('students.partials.todaycourses')
        

    @stop
	@section('menu')
		<ul class="nav navbar-nav navbar-right">
				  	
                  <li><a href="{{URL::route('student.auth.logout')}}">Logout</a></li>
                  <li><a href="#">Aide</a></li>
                  <li class="profile"><a href=""><u>{{{$student->name}}} {{{$student->lastName}}}</u></a></li>
 		</ul>
 
   @stop