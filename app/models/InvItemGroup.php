<?php

class InvItemGroup extends \Eloquent {

	protected $table = 'inv_item_groups';
	protected $primaryKey = 'item_group_id';
	
	// Add your validation rules here
	public static $rules = [
		// 'title' => 'required'
		'group_code'=>'',
		'group_name'=>'',
		'short_name'=>'',
		'is_active'=>''		
	];

	// Don't forget to fill this array
	protected $fillable = [
		'group_code',
		'group_name',
		'short_name',
		'is_active'		
	];

	public function __toString(){
		return $this->group_name;
	}

}