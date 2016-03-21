<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class InvSupplierTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		foreach(range(1, 10) as $index)
		{
			InvSupplier::create([
				'supplier_code'=> $faker->numberBetween(1111,9999),
				'supplier_type'=> $faker->word(),
				'supplier_name'=> $faker->company(),
				'supplier_address'=> $faker->address(),
				'cell_phone'=> $faker->phoneNumber(),
				'fax_number'=> $faker->phoneNumber(),
				'email_address'=> $faker->email(),
				'contact_person'=> $faker->firstName()
			]);
		}
	}

}