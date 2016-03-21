<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateInvItemGroupsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('inv_item_groups', function(Blueprint $table)
		{
			$table->increments('item_group_id');
			$table->string('group_code');
			$table->string('group_name');
			$table->string('short_name');
			$table->integer('is_active');			
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
		Schema::drop('inv_item_groups');
	}

}
