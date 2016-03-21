<?php

function ilike($query){
	return "%" . $query . "%";
}

class AutoCompleteApiController extends ApiController{

	public function getServiceProvider($query=""){
		return ServiceProviderInfo::where('service_provider_name', 'LIKE', ilike($query))->get();
	}

	public function getInvSupplier($query=""){
		return InvSupplier::where('supplier_name', 'LIKE', ilike($query))->get();
	}
	
	public function getInvCustomer($query=""){
		return InvCustomer::where('customer_name', 'LIKE', ilike($query))->get();
	}
	

	public function getBank($query=""){
		return Bank::where('bank_name', 'LIKE', ilike($query))->get();
	}
	
	public function getHrDepartment($query=""){
		return HrDepartment::where('department_name', 'LIKE', ilike($query))->get();
	}
	
	public function getHrDesignation($query=""){
		return HrDesignation::where('designation_name', 'LIKE', ilike($query))->get();
	}

	public function getHrEmployee($query=""){
		return HrEmployee::where('employee_name', 'LIKE', ilike($query))->get();
	}
	
	public function getCountry($query=""){
		return Country::where('country_name', 'LIKE', ilike($query))->get();
	}
	
	public function getSalesOrder($query=""){
		return SalesOrder::where('sales_order_id', 'LIKE', ilike($query))->get();
	}
	
	public function getCollectionInfo($query=""){
		return CollectionInfo::where('collection_id', 'LIKE', ilike($query))->get();
	}
	
	public function getPaymentInfo($query=""){
		return PaymentInfo::where('payment_id', 'LIKE', ilike($query))->get();
	}

	public function getBillReceive($query=""){
		return BillReceive::where('bill_receive_id', 'LIKE', ilike($query))->get();
	}

	public function getCustomerBalance($id){
		return InvCustomer::balance($id);
	}

	public function getServiceProviderBalance($id){
		return ServiceProviderInfo::balance($id);
	}

	public function getServiceProviderBalanceByInvoice($id, $invoice_no){
		return ServiceProviderInfo::balanceByInvoice($id, $invoice_no);
	}

	public function getServiceProviderInvoices($id){
		return ServiceProviderInfo::invoices($id);
	}

	public function getInvSupplier($query=""){
		return InvSupplier::where('supplier_name', 'LIKE', "%".$query."%")->take(100)->get();
	}
	public function getInvItemBrand($query=""){
		return InvItemBrand::where('category_name', 'LIKE', "%".$query."%")->take(100)->get();	
	}
	public function getInvItemGroup($query=""){
		return InvItemGroup::where('group_name', 'LIKE', "%".$query."%")->take(100)->get();	
	}

	public function getInvItem($query=""){
		return InvItem::where('item_name', 'LIKE', "%".$query."%")->take(100)->get();	
	}
	public function getInvSales($query=""){
		return InvSales::where('memo_no', 'LIKE', "%".$query."%")->take(100)->get();	
	}
	public function getFmBank($query=""){
		return FmBank::where('bank_name', 'LIKE', "%".$query."%")->take(100)->get();	
	}

	public function getFmBankAccount($query=""){
		return FmBankAccount::where('account_no', 'LIKE', "%".$query."%")->take(100)->get();	
	}
	public function getLookUpType($query=""){
		return LookupType::where('lookup_type', 'LIKE', "%".$query."%")->take(100)->get();	
	}

	public function getLookUpValue($query=""){
		return LookupValue::where('lookup_value', 'LIKE', "%".$query."%")->take(100)->get();	
	}
}