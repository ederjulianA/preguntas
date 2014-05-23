<?php

class Question extends Eloquent{
	protected $table = "question";

	public function course()
	{
		return $this->belongsTo('Course');
	}
}