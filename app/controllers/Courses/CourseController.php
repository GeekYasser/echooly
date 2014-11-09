<?php

class CourseController extends \BaseController {


		//Function that will list the courses
	public function getCourses(){
		$data = Auth::Student()->get();
		$student = Student::findOrFail($data->id);
		$courses = $student->course;
		return View::make('students.courses')
		->withStudent($student)
		->withCourses($courses);
	}
	//json call 
	public function getJson($id){
		$student = Student::findOrFail($id);
		$courses = $student->course;
		
		return Response::json($courses);
	}
}