<?php
/**
 * Created by PhpStorm.
 * User: cine
 * Date: 09/10/2014
 * Time: 12:20
 */

class TeacherController extends BaseController{

	/**
	 * Display a listing of teachers
	 *
	 * @return Response
	 */
	public function dashboard()
	{
		$data = Auth::Teacher()->get();
		$teacher = Teacher::findOrFail($data->id);

		return View::make('teachers.dashboard')->withTeacher($teacher);
	}

	
} 