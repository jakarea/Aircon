<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class ServiceProviderTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();
		ServiceProviderInfo::truncate();
		

		foreach(range(1, 50) as $index)
		{
			ServiceProviderInfo::create([
				"service_provider_name" => $faker->word(),
				"account_no" => $faker->phoneNumber(),
                "service_provider_address" => $faker->address(),
                "contact_no" => $faker->phoneNumber(),
                "contact_person" => $faker->name(),
                "web_address" => $faker->url(),
                
                "email_address" => $faker->email()
			]);
		}

		ServiceProviderInfo::create([
			"service_provider_name" => "DHL",
			"account_no" => $faker->phoneNumber(),
            "service_provider_address" => $faker->address(),
            "contact_no" => $faker->phoneNumber(),
            "contact_person" => $faker->name(),
            "web_address" => $faker->url(),
            
            "email_address" => $faker->email()
		]);

		ServiceProviderInfo::create([
			"service_provider_name" => "SKYNET",
			"account_no" => $faker->phoneNumber(),
            "service_provider_address" => $faker->address(),
            "contact_no" => $faker->phoneNumber(),
            "contact_person" => $faker->name(),
            "web_address" => $faker->url(),
            
            "email_address" => $faker->email()
		]);
	}

}