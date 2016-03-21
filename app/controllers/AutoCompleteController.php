<?php

function ilike($query){
	return "%" . $query . "%";
}

class AutoCompleteController extends ApiController{

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
		return FmBank::where('bank_name', 'LIKE', ilike($query))->get();
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

	// public function getInvSupplier($query=""){
	// 	return InvSupplier::where('supplier_name', 'LIKE', "%".$query."%")->take(100)->get();
	// }
	public function getInvItemBrand($query=""){
		return InvItemBrand::where('category_name', 'LIKE', "%".$query."%")->take(100)->get();	
	}
	public function getInvItemGroup($query=""){
		return InvItemGroup::where('group_name', 'LIKE', "%".$query."%")->take(100)->get();	
	}

	public function getInvItem($query=""){
		return InvItem::where('item_name', 'LIKE', "%".$query."%")->take(100)->get();	
	}
	public function getSalesItem($group_id, $category_id, $query=""){
		$items = InvItem::with('unit', 'group', 'category');
		$category_id != 0 && $items->where('category_id', $category_id);
		$group_id != 0 && $items->where('group_id', $group_id);
		!empty($query) && $items->where('item_name', 'LIKE', ilike($query));

		return $items->select('group_id', 'category_id', 'item_id', 'item_name', 'unit_id','sales_price','discount')->take(100)->get();;
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

	public function getSalesDemo($query=""){
		return InvSales::where('customer_id',$query)->take(100)->get();
	}

	public function getSalesBalanceByMemoNo($customer_id, $memo_no){
		return InvCustomer::memo($customer_id, $memo_no);
	}
	
	public function getSupplierMemoNo($supplier_id, $purchase_type){
		return PurchaseReceive::findPurchaseMemoNo($supplier_id,$purchase_type);
	}
	public function getSupplierPaymentInfo($supplier_id, $memo_no){
		return PurchaseReceive::findPaymentInfo($supplier_id,$memo_no);
	}
	public function getSplitItem($query){
		return InvItem::with('unit')->where('item_name','LIKE',"%".$query."%")->take(100)->get();
	}

	public function getSalesReturnItem($sales_id){
		$items = InvSalesDetail::with('unit','item','group','category')->where('sales_id', $sales_id)->take(100)->get();
		
		return $items;
	}

	public function getPurchaseReturnItem($purchase_id){
		$items = PurchaseReceiveDetail::with('unit','item','group','category')->where('purchase_receive_id', $purchase_id)->take(100)->get();		
		return $items;
	}
	public function getItemCode($query){
		
		$item_code = InvItem::where('item_code','LIKE',"%".$query."%")->take(100)->get();
		return $item_code;
	}
	public function getCodeItem($query){
		$sql = "select a.item_id,a.item, a.item_group_id,a.category_id,a.unit_id,a.cost_price,a.sales_price,a.discount,a.unit_name from (select a.item_id,b.item_group_id,c.category_id,a.unit_id,a.sales_price,a.discount,d.unit_name,a.cost_price,
				concat(concat(concat(concat(concat(concat(concat(concat(a.item_code,'-'),b.short_name),'/'),c.short_name),'-'),a.item_name),'-'),a.total_length) item
				from inv_items a,inv_item_groups b ,inv_item_category c,inv_units d
				where a.group_id=b.item_group_id
				and a.category_id=c.category_id
				and a.unit_id = d.unit_id
				) a where a.item like '%".$query."%'";
		$items = DB::select($sql);
		return $items;

	}
	public function getPurchaseItem($query){
		$sql = "select a.item_id,a.item, a.item_group_id,a.category_id,a.unit_id,a.cost_price,a.sales_price,a.discount,a.unit_name from (select a.item_id,b.item_group_id,c.category_id,a.unit_id,a.sales_price,a.discount,d.unit_name,a.cost_price,
				concat(concat(concat(concat(concat(concat(concat(concat(a.item_code,'-'),b.short_name),'/'),c.short_name),'-'),a.item_name),'-'),a.total_length) item
				from inv_items a,inv_item_groups b ,inv_item_category c,inv_units d
				where a.group_id=b.item_group_id
				and a.category_id=c.category_id
				and a.unit_id = d.unit_id
				) a where a.item like '%".$query."%'";
		$items = DB::select($sql);
		return $items;
	}
}