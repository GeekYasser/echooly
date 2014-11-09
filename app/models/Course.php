<?php

class Course extends Eloquent{
	protected $fillable = array();
	protected $table = 'courses';
	//section
	public function student(){
		return $this->belongsTo('Student','id');
	}

}