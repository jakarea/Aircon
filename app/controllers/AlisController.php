<?php

class AlisController extends \BaseController {

	/**
	 * Display a listing of alis
	 *
	 * @return Response
	 */
	public function index()
	{
		$group = Input::get('group');
		$category = Input::get('category');
		$allItem = InvItem::orderBy('item_id','DESC');
		if(!empty($category) && !empty($group)){
			$allItem = $allItem->where('category_id',$category)->where('brand_id',$group);
		}
		// if(!empty($group)){
		// 	$allItem = $allItem->where('brand_id',$group);
		// }
		$allItem = $allItem->paginate(4);
		$acbrand = InvItemGroup::all();
		$category = InvItemBrand::all();

		return View::make('alis.index',compact('allItem','acbrand','category'));
	}

	/**
	 * Show the form for creating a new ali
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('alis.create');
	}

	/**
	 * Store a newly created ali in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Ali::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Ali::create($data);

		return Redirect::route('alis.index');
	}

	/**
	 * Display the specified ali.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$item = InvItem::with('group')->find($id);
		$similarProduct = InvItem::where('category_id',$item->category_id)->take(4)->get();
		$acbrand = InvItemGroup::all();
		$category = InvItemBrand::all();

		return View::make('alis.show', compact('acbrand','category','item','similarProduct'));
	}

	/**
	 * Show the form for editing the specified ali.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$ali = Ali::find($id);

		return View::make('alis.edit', compact('ali'));
	}

	/**
	 * Update the specified ali in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$ali = Ali::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Ali::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$ali->update($data);

		return Redirect::route('alis.index');
	}

	/**
	 * Remove the specified ali from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Ali::destroy($id);

		return Redirect::route('alis.index');
	}

	public function getCategoryWiseItem(){
		$acbrand = InvItemGroup::all();
		$category = InvItemBrand::all();
	}

}
