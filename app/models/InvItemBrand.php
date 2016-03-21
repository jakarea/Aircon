<?php

class InvItemBrand extends \Eloquent {

	protected $table = 'inv_item_category';
	protected $primaryKey = 'category_id';
	// Add your validation rules here
	public static $rules = [
		// 'title' => 'required'
		'category_code'=>'',
		'category_name'=>'',
		'short_name'=>'',
		'is_active'=>''		
	];

	// Don't forget to fill this array
	protected $fillable = [
		'category_code',
		'category_name',
		'short_name',
		'is_active'		
	];

	public function __toString(){
		return $this->category_name;
	}

}