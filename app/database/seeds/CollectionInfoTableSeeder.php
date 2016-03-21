<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class CollectionInfoTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();
		CollectionInfo::truncate();

		foreach(range(1, 50) as $index)
		{
			CollectionInfo::create([
                "collection_date" => $faker->date(),
                "bank_name" => $faker->word() ." Bank",
                "customer_id" => mt_rand(1,10),
                "branch_name" => $faker->city(),
                "balance_amount" => $faker->randomNumber(),
                "collection_amount" => $faker->randomNumber(),
                "dues_amount" => $faker->randomNumber(),
                "remarks" => $faker->realText(),
			]);
		}
	}

}