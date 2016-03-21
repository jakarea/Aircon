<div class="col-md-6">
{{ Former::text('item_heading') }}
{{ Former::text('item_price') }}
{{ Former::select('brand_id')->label('Brand')
	->addOption('Select One')
	->fromQuery(InvItemGroup::all(),'group_name','item_group_id')
 }}
 {{ Former::select('category_id')->label('Type') 
	->addOption('Select One')
	->fromQuery(InvItemBrand::all(),'category_name','category_id')
 }}
 {{ Former::textarea('item_features')->row(5) }}
 {{ Former::textarea('item_description')->row(6) }}
 {{Former::files('company_logo')->label('Featured Image')}}
 {{Former::files('detail_image')}}
 {{Former::files('image')->label('Des. Image1')}}
 {{Former::files('image1')->label('Des. Image2')}}
 </div>
 <div class="col-md-6">
 {{Former::text('btu')}}
 {{Former::text('coverage')}}
 {{Former::text('filter_type')}}
 {{Former::text('fan_speed')}}
 {{Former::text('cool_speed')}}
 {{Former::select('remote_control')
	->addOption('Select One')
	->addOption('YES','YES')
	->addOption('NO','NO')
 }}
 {{Former::select('timer')
	->addOption('Select One')
	->addOption('YES','YES')
	->addOption('NO','NO')
 }}
 {{Former::text('temparature_adjustment')}}
 {{Former::text('energy_efficient')}}
 {{Former::text('power_consumtion')}}
 {{Former::text('warranty')}}
 </div>