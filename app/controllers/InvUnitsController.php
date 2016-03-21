<?php

class InvUnitsController extends \BaseController {

	/**
	 * Display a listing of invunits
	 *
	 * @return Response
	 */
	public function index()
	{
		if(!empty(Input::get('unit_name', ''))){
			$invunits = InvUnit::where('unit_name', 'like', "%".Input::get('unit_name')."%")->paginate(10);	
		}
		else
		{
			$invunits = InvUnit::paginate(10);
		}	
		
		return View::make('inv_units.index', compact('invunits'));
	}

	/**
	 * Show the form for creating a new invunit
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('inv_units.create');
	}

	/**
	 * Store a newly created invunit in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), InvUnit::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		InvUnit::create($data);

		return Redirect::route('inv_unit.index');
	}

	/**
	 * Display the specified invunit.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$invunit = InvUnit::findOrFail($id);

		return View::make('invunits.show', compact('invunit'));
	}

	/**
	 * Show the form for editing the specified invunit.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$invunit = InvUnit::find($id);

		return View::make('inv_units.edit', compact('invunit'));
	}

	/**
	 * Update the specified invunit in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$invunit = InvUnit::findOrFail($id);

		$validator = Validator::make($data = Input::all(), InvUnit::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$invunit->update($data);

		return Redirect::route('inv_unit.index');
	}

	/**
	 * Remove the specified invunit from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$items = InvItem::where('unit_id',$id)->get();
		$count = $items->count();
		if($count == 0){
			InvUnit::destroy($id);
		}
		else{
			return Redirect::back()->with('message', 'This Unit is Engaged');
		}
		
		return Redirect::route('inv_unit.index');
	}

}
