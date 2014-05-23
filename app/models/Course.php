<?php

class Course extends Eloquent{
	protected $table = "course";

	public function questions()
	{
		return $this->hasMany('Question');
	}
}