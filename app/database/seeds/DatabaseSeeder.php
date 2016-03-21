<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		$this->call('LookupTypeTableSeeder');
		$this->call('LookupValueTableSeeder');
		$this->call('InvUnitsTableSeeder');		
		$this->call('InvItemGroupsTableSeeder');
		$this->call('InvItemBrandsTableSeeder');
		$this->call('BillReceiveTableSeeder');
		$this->call('HrDepartmentTableSeeder');
		$this->call('HrDesignationTableSeeder');		
		$this->call('HrEmployeeTableSeeder');
		$this->call('InvCustomerTableSeeder');
		$this->call('ServiceProviderTableSeeder');
		$this->call('PaymentInfoTableSeeder');
		$this->call('MonthlyInvoiceTableSeeder');
		$this->call('InvSupplierTableSeeder');
		$this->call('inv_item_category');
		
	}

}
