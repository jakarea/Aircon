<?php

class InvItemBrandsController extends \BaseController {

	/**
	 * Display a listing of invitembrands
	 *
	 * @return Response
	 */
	public function index()
	{
		if(!empty(Input::get('category_name', ''))){
			$invitembrands = InvItemBrand::where('category_name', 'like', "%".Input::get('category_name')."%")->paginate(10);	
		}
		else
		{
			$invitembrands = InvItemBrand::paginate(10);
		}
		

		return View::make('inv_item_brands.index', compact('invitembrands'));
	}

	/**
	 * Show the form for creating a new invitembrand
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('inv_item_brands.create');
	}

	/**
	 * Store a newly created invitembrand in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), InvItemBrand::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		InvItemBrand::create($data);

		return Redirect::route('inv_item_brand.index');
	}

	/**
	 * Display the specified invitembrand.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$invitembrand = InvItemBrand::findOrFail($id);

		return View::make('inv_item_brands.show', compact('invitembrand'));
	}

	/**
	 * Show the form for editing the specified invitembrand.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$invitembrand = InvItemBrand::find($id);

		return View::make('inv_item_brands.edit', compact('invitembrand'));
	}

	/**
	 * Update the specified invitembrand in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$invitembrand = InvItemBrand::findOrFail($id);

		$validator = Validator::make($data = Input::all(), InvItemBrand::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$invitembrand->update($data);

		return Redirect::route('inv_item_brand.index');
	}

	/**
	 * Remove the specified invitembrand from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)	
	{
		InvItemBrand::destroy($id);
		return Redirect::route('inv_item_brand.index');
	}

}
