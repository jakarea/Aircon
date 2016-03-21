<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class HrDesignationTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();
		
		$designations = array(
			"Software Engineer ",
			"Sr. Software Eng ",
			"Software Architech",
			"Design Engineer ",
			"Sr. Design Engineer",
			"Engineer Softwaer Testing",
			"Sr. Eng. Soft Testing",
			"Team Lead",
			"Test Lead",
			"Assistant Project Manager",
			"Project Manager",
			"Application Developer",
			"Sr. Application Developer",
			"Application Engineer",
			"Sr. Application Engineer",
			"Product Engineer",
			"Sr. Product Engineer",
			"Product Head",
			"Sofware Analyst/ Analyst",
			"Lead Analyst",
			"Sr. Analyst",
			"Tech Lead",
			"Service Head",
			"Directors and above",
			"Consultant",
			"Sr. Consultant"
		);

		foreach($designations as $designation){
			HrDesignation::create(["designation_name"=>$designation]);
		}
	}

}