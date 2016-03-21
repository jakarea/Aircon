<?php

class InvUnit extends \Eloquent {

	protected $table = 'inv_units';
	protected $primaryKey = 'unit_id';
	// Add your validation rules here
	public static $rules = [
		// 'title' => 'required'
		'unit_name'=>'',
		'is_active'=>''		
	];

	// Don't forget to fill this array
	protected $fillable = [
		'unit_name',		
		'is_active'		
	];

	public function __toString(){
		return $this->unit_name;
	}

}