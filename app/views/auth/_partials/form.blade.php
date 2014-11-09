<div class="form-horizontal">
    					
    <!--To get the appropriate post url-->					
	@if(Route::getCurrentRoute()->getPath() == "Teachers/login")
	{{ Form::open(array('route' => 'teacher.auth.login.post'))}}
	@elseif(Route::getCurrentRoute()->getPath() == "Students/login")
	{{ Form::open(array('route' => 'student.auth.login.post'))}}
	@elseif(Route::getCurrentRoute()->getPath() == "Administration/login")
	{{ Form::open(array('route' => 'admin.auth.login.post'))}}
	@endif
	
   <div class="form-group">	
	{{Form::label('Email')}}
	{{Form::text('email','', array('class' => 'form-control', 'placeholder' => 'Email'))}}

	{{$errors->first('email','<div class="alert alert-danger">:message</div>')}}
	</div>
	<div class="form-group">	
	{{Form::label('Password')}}
	{{Form::password('password', array('class' => 'form-control', 'placeholder' => 'Password'))}}
	{{$errors->first('password','<div class="alert alert-danger">:message</div>')}}
	</div>
	{{Form::submit('Login',array('class' => 'btn btn-success'))}}
	@if(Route::getCurrentRoute()->getPath() == "Teachers/login")
	{{link_to_route('student.signup', 'S\'inscrire','',['class' => 'btn btn-primary'])}}
	@else
	{{link_to_route('student.signup', 'S\'inscrire','',['class' => 'btn btn-primary'])}}
	@endif
	{{ Form::close()}}
</div>