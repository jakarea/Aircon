<?php

class InvItem extends \Eloquent {
	protected $table = 'inv_items';
	protected $primaryKey = 'item_id';
	// Add your validation rules here
	public static $rules = [
		// 'title' => 'required'
			'item_heading'=>'',
			'item_price'=>'',
			'brand_id'=>'required',
			'category_id'=>'required',
			'item_features'=>'',
			'item_description'=>'',
			'item_features_image'=>'',
			'btu'=>'',
			'coverage'=>'',
			'filter_type'=>'',
			'fan_speed'=>'',
			'cool_speed'=>'',
			'air_control'=>'',
			'remote_control'=>'',
			'timer'=>'',
			'temparature_adjustment'=>'',
			'energy_efficient'=>'',
			'power_consumtion'=>'',
			'warranty'=>'',
			'item1'=>'',
			'item2'=>'',
			'item3'=>'',
	];

	// Don't forget to fill this array
	protected $fillable = [
	'item_heading',
	'item_price',
	'brand_id',
	'category_id',
	'item_features',
	'item_description',
	'item_features_image',
	'btu',
	'coverage',
	'filter_type',
	'fan_speed',
	'cool_speed',
	'air_control',
	'remote_control',
	'timer',
	'temparature_adjustment',
	'energy_efficient',
	'power_consumtion',
	'warranty',
	'item1',
	'item2',
	'item3',
	];

	public function group(){
		return $this->belongsTo('InvItemGroup', 'brand_id', 'item_group_id');
	}
	public function category(){
		return $this->belongsTo('InvItemBrand', 'category_id', 'category_id');
	}

}