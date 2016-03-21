<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class InvItemsTableSeeder extends Seeder {

	public function run()
	{
		 DB::table('inv_items')->truncate();

		$item_name = array(
                 ['category_id'=>2,'unit_id'=>3,'group_id'=>4,'item_name'=>'Cocacola 500 MG','cost_price'=>12,'sales_price'=>15],
                 ['category_id'=>3,'unit_id'=>3,'group_id'=>4,'item_name' => 'Everest Dinking wate','cost_price'=>20,'sales_price'=>25],
                 ['category_id'=>1,'unit_id'=>2,'group_id'=>4,'item_name' => 'Pepsi 250 Ml','cost_price'=>14,'sales_price'=>15],
                 ['category_id'=>4,'unit_id'=>2,'group_id'=>4,'item_name' => 'Potato chips','cost_price'=>6,'sales_price'=>10],
		);

		// Uncomment the below to run the seeder
		 DB::table('inv_items')->insert($item_name);		
	}

}