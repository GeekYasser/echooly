	<!--To get the appropriate post url-->
					
	@if(Route::getCurrentRoute()->getPath() == "Teachers/signup")
	{{ Form::open(array('route' => 'teacher.signup.post'))}}
	@else
	{{ Form::open(array('route' => 'student.signup.post', 'id' => 'studentSignup'))}}
	@endif
	<div class="col-md-4">	
	{{Form::label('Nom:')}}
	{{Form::text('name','',array('class' => 'form-control', 'placeholder' => 'Veuillez saisir votre nom'))}}
	{{Form::label('Prénom:')}}
	{{Form::text('lastName','',array('class' => 'form-control', 'placeholder' => 'Veuillez saisir votre prénom'))}}
	{{Form::label('Email:')}}
	{{Form::text('email','',array('class' => 'form-control', 'placeholder' => 'Veuillez saisir votre Email'))}}
	{{$errors->first('email','<div class="alert alert-danger">:message</div>')}}
	{{Form::label('Mot de passe:')}}
	{{Form::password('password',array('class' => 'form-control', 'placeholder' => 'Veuillez saisir un mot de passe'))}}
	{{$errors->first('password','<div class="alert alert-danger">:message</div>')}}
	{{Form::password('password_confirmation',array('class' => 'form-control', 'placeholder' => 'Veuillez confirmer votre mot de pass'))}}
	{{$errors->first('password_confirmation','<div class="alert alert-danger">:message</div>')}}
	</div>
	<div class="col-md-4">
	{{Form::label('Date de naissance:')}}
	{{Form::input('date','dob','',array('class' => 'form-control'))}}
	{{Form::label('Lieu de naissance:')}}
	{{Form::text('pob','',array('class' => 'form-control', 'placeholder' => 'Veuillez entrer vote lieu de naissance'))}}
	{{Form::label('Sexe:')}}
	{{Form::select('gender', array('Homme' => 'Homme', 'Femme' => 'Femme'),'null', array('class' => 'form-control'))}}
	{{Form::label('Niveau:')}}
	{{Form::select('level', Student::$level,'null', array('class' => 'form-control'))}}
	{{Form::label('Option:')}}
	{{Form::select('option', Student::$options,'null', array('class' => 'form-control'))}}
	</div>
	<div class="col-md-4">
	{{Form::label('Section:')}}
	{{Form::select('section', Student::$sections,'null', array('class' => 'form-control'))}}
	{{Form::label('Groupe:')}}
	{{Form::select('group', Student::$groups,'null', array('class' => 'form-control'))}}
	{{Form::label('Sous-Groupe:')}}
	{{Form::select('subGroup', Student::$subgroups,'null', array('class' => 'form-control'))}}
	{{Form::submit('Enregister' ,array('class' => 'btn btn-success'))}}
	
	
	{{Form::close()}}
	</div>
	