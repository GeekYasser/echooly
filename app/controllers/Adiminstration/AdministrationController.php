<?php

class AdministrationController extends \BaseController {

	//Admin Show Dashboard
	public function dashboard(){
		$data = Auth::Admin()->get();
		$admin = Administration::findOrFail($data->id);
		return View::make('admin.dashboard')->withAdmin($admin);}

	//Show Students
	public function showStudents(){
		$students = Student::all();
		if(Auth::Admin()->check()){
			return Response::json($students);
		}
		else{
			return Redirect::intended('/');
		}
		
	}
	//Show Teachers
	public function showTeachers(){
		$teachers = Teacher::all();
		if(Auth::Admin()->check()){
			return Response::json($teachers);
		}
		else{
			return Redirect::intended('/');
		}
		
	}
}