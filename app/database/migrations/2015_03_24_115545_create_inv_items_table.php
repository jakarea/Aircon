<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateInvItemsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('inv_items', function(Blueprint $table)
		{
			$table->increments('item_id');
			$table->string('item_heading',1000);
			$table->decimal('item_price',15,2);
			$table->integer('brand_id');
			$table->integer('category_id');
			$table->longText('item_features');
			$table->longText('item_description');
			$table->string('item_features_image');
			$table->string('btu');
			$table->string('coverage');
			$table->string('filter_type');
			$table->string('fan_speed');
			$table->string('cool_speed');
			$table->string('air_control');
			$table->string('remote_control');
			$table->string('timer');
			$table->string('temparature_adjustment');
			$table->string('energy_efficient');
			$table->string('power_consumtion');
			$table->string('warranty');
			$table->string('item1');
			$table->string('item2');
			$table->string('item3');
			$table->timestamps();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('inv_items');
	}

}
