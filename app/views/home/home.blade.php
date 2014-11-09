@extends('layouts.default')
    @section('menu')

     <ul class="nav navbar-nav navbar-right">
                      <li><a href="#">S'inscrire</a></li>
                      <li><a href="#">Aide</a></li>
     </ul>
    @stop
    @section('content')
        <section id="dashSelect">
        <div class="container">
        <div class="row">
         <div class="maintitle"><h1>Choisissez votre platform</h1>

         </div>

           <div class="col-md-2"></div>
        <!--Student-->
       <div class="col-md-4">

         <div id="student" class="card">
                {{ HTML::image('img/student.png','alt Etudiant',array('class' => 'student_icon img-responsive '))}}
            <div class="caption">
                <a href="{{URL::to('/Students')}}"><h3>Etudiant</h3></a>
            </div>
            </div>
        </div>
        <!--Teacher-->
        <div class="col-md-4">

            <div id="teacher" class="card">
                {{ HTML::image('img/teacher.png','alt Enseignant',array('class' => 'student_icon img-responsive'))}}
            <div class="caption">
                <a href="{{URL::to('/Teachers')}}"><h3>Enseignant</h3></a>
            </div>
            </div>
        </div>
        </div>
                        </div>
               </section>
    @stop