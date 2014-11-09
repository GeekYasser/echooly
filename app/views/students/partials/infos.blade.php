
	<div class="container">
		<div class="row">
			<div class="col-md-4"></div>
			<div class="col-md-12">
				<div class="infos_holder">
					<!--Welcome Message-->
					<h2>Chèr {{{$student->name}}} {{{$student->lastName}}}, Bienvenu. </h2>
					<hr>
						<ul class="nav">
						  <li>{{HTML::image('img/icons/level.png')}}
						  	<span>Niveau: {{{$student->level}}}</span></li>
						  <li>{{HTML::image('img/icons/option.png')}}
						  	<span>Option: {{{$student->option}}}</span></li>
						  <li>{{HTML::image('img/icons/Section.png')}}
						  	<span>Section: {{{$student->section}}} | Groupe: {{{$student->group}}} | Sous-groupe: {{{$student->subGroup}}}</span></li>
						</ul>
					<hr>
				</div>
				
		</div>
	</div>
