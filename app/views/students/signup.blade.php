@extends('layouts.default')
	@section('content')
	<div class="container">
		<div class="row">
			<h1>Inscription D'etudiant</h1>
  			
			<!--Including the signup form partials-->
				@include('students.partials.studentSignup')
			
		</div>
	</div>
		
		
	@stop