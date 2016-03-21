<?php

class InvItemGroupsController extends \BaseController {

	/**
	 * Display a listing of invitemgroups
	 *
	 * @return Response
	 */
	public function index()
	{
		if(!empty(Input::get('group_name', ''))){
			$invitemgroups = InvItemGroup::where('group_name', 'like', "%".Input::get('group_name')."%")->paginate(10);	
		}
		else
		{
			$invitemgroups = InvItemGroup::paginate(10);
		}			
		return View::make('inv_item_groups.index', compact('invitemgroups'));
	}

	/**
	 * Show the form for creating a new invitemgroup
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('inv_item_groups.create');
	}

	/**
	 * Store a newly created invitemgroup in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), InvItemGroup::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		InvItemGroup::create($data);

		return Redirect::route('inv_item_group.index');
	}

	/**
	 * Display the specified invitemgroup.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$invitemgroup = InvItemGroup::findOrFail($id);

		return View::make('invitemgroups.show', compact('invitemgroup'));
	}

	/**
	 * Show the form for editing the specified invitemgroup.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$invitemgroup = InvItemGroup::find($id);

		return View::make('inv_item_groups.edit', compact('invitemgroup'));
	}

	/**
	 * Update the specified invitemgroup in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$invitemgroup = InvItemGroup::findOrFail($id);

		$validator = Validator::make($data = Input::all(), InvItemGroup::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$invitemgroup->update($data);

		return Redirect::route('inv_item_group.index');
	}

	/**
	 * Remove the specified invitemgroup from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		
			InvItemGroup::destroy($id);
		

		return Redirect::route('inv_item_group.index');
	}

}
