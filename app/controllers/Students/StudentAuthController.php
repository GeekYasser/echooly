<?php
/**
 * Created by PhpStorm.
 * User: cine
 * Date: 09/10/2014
 * Time: 12:18
 */

class StudentAuthController  extends BaseController{
public function __construct(){

        $this->beforeFilter('csrf', array('on' => 'post'));
    }

    //Get Login View Function
    public function getLogin(){
        /*
    ** We are basically checking for any previous diffrent login
    */
        if(Auth::Teacher()->check()){
            return Redirect::route('teacher.dashboard');
        }
        else if(Auth::Student()->check()){
            return Redirect::route('student.dashboard');
        }
        else{
            return View::make('auth.login');
        }
        
    }
    //Post Login Function
    public function postLogin(){
        //Getting the data from the inputs
    	$data = Input::all();
        //Vaidation of the data with $rules of the Student model
    	$validator = Validator::make($data, Student::$rules, Student::$messages);
        if($validator->fails())
                {
                    return Redirect::back()->withErrors($validator)->withInput();
                }
        //Checking the input data with our custom Auth System        
        if(Auth::Student()->attempt(array('email' => Input::get('email'), 'password' => Input::get('password'))))
        {
            return Redirect::intended('/Students');
        }
        return Redirect::route('student.auth.login');
        
    }
    //Logout function
    public function logout(){
        Auth::Student()->logout();
        return Redirect::route('student.auth.login');
    }
} 