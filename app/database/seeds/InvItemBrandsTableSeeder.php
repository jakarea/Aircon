<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class InvItemBrandsTableSeeder extends Seeder {

	public function run()
	{
		DB::table('inv_item_category')->truncate();

		$category_name = array(
                 ['category_name'=>'Baby Food'],
                 ['category_name' => 'Medicine'],
                 ['category_name' => 'Sports'],
                 ['category_name' => ' Clothing Accessories'],
		);

		// Uncomment the below to run the seeder
		 DB::table('inv_item_category')->insert($category_name);
	}

}