<?php

class Menu extends \Eloquent {
	protected $table = 'menus';
	protected $primaryKey = 'id';
	// Add your validation rules here
	public static $rules = [
		// 'title' => 'required'
		'menu_id'=>'',
		'submenu_id'=>'',
	];

	// Don't forget to fill this array
	protected $fillable = [
		'menu_id',
		'submenu_id',
	];

  public function category(){
  	return $this->belongsTo('InvItemBrand', 'submenu_id', 'category_id');
  }
  public function group(){
  	return $this->belongsTo('InvItemGroup', 'menu_id', 'item_group_id');
  }
}