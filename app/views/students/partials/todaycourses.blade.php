<div class="col-md-1"></div>
      <div class="col-xs-6 col-md-4">
          <div class="card">
          <h4>Coures d'aujourd'hui</h4>
  <div>
          	
            <div >
                <ul>
                   @foreach ($courses as $course) 
                	<li><a href="#">{{{$course->courseName}}}</a></li>
                  @endforeach
                </ul>
               
            </div>
        
			</div>
			<div class="caption">
				<h3>Heurs : </h3>
			</div>
			</div> 
        </div>
             