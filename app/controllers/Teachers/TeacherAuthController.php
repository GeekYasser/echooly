<?php
/**
 * Created by PhpStorm.
 * User: cine
 * Date: 09/10/2014
 * Time: 12:20
 */

class TeacherAuthController extends BaseController{
public function __construct(){

        $this->beforeFilter('csrf', array('on' => 'post'));
    }

    //Get Login Function
    public function getLogin(){
         /*
    ** We are basically checking for any previous diffrent login
    */
       if(Auth::Student()->check()){
            return Redirect::route('student.dashboard');
        }
        else if(Auth::Teacher()->check()){
            return Redirect::route('teacher.dashboard');
        }
        else{
            return View::make('auth.login');
        }
    }
    //Post Login Function
    public function postLogin(){
    	$data = Input::all();
    	$validator = Validator::make($data, Teacher::$rules);
        if($validator->fails())
                {
                    return Redirect::back()->withErrors($validator)->withInput();
                }
        //Checking the input data with our custom Auth System        
        if(Auth::Teacher()->attempt(array('email' => Input::get('email'), 'password' => Input::get('password')))){
            return Redirect::intended('/teachers');
        }
        return Redirect::route('teacher.auth.login');
        
    }

    //Logout Function
    public function logout(){
         Auth::Teacher()->logout();
        return Redirect::route('teacher.auth.login');
    }
} 