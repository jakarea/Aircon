<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class InvItemGroupsTableSeeder extends Seeder {

	public function run()
	{
		 DB::table('inv_item_groups')->truncate();

		$group_name = array(
                 ['group_name'=>'Bosundhora Group'],
                 ['group_name' => 'Pran Rfl Group'],
                 ['group_name' => 'Jamuna Group'],
                 ['group_name' => 'Modian Group'],
		);

		// Uncomment the below to run the seeder
		 DB::table('inv_item_groups')->insert($group_name);
	}

}