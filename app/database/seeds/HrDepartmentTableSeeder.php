<?php

class HrDepartmentTableSeeder extends Seeder {

	public function run()
	{

		$departments = array(
			"Marketing",
			"Development",
			"Software",
			"Operation",
			"Sales",
			"HR"
		);

		foreach($departments as $department){
			HrDepartment::insert(["department_name"=>$department]);
		}
	}

}