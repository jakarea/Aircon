<?php

class AuthsController extends \BaseController {

	/**
	 * Display a listing of auths
	 *
	 * @return Response
	 */
	public function index()
	{
		return View::make('auths.index');
	}

	/**
	 * Show the form for creating a new auth
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('auths.create');
	}

	/**
	 * Store a newly created auth in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Auth::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Auth::create($data);

		return Redirect::route('auths.index');
	}

	/**
	 * Display the specified auth.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$auth = Auth::findOrFail($id);

		return View::make('auths.show', compact('auth'));
	}

	/**
	 * Show the form for editing the specified auth.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$auth = Auth::find($id);

		return View::make('auths.edit', compact('auth'));
	}

	/**
	 * Update the specified auth in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$auth = Auth::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Auth::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$auth->update($data);

		return Redirect::route('auths.index');
	}

	/**
	 * Remove the specified auth from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Auth::destroy($id);

		return Redirect::route('auths.index');
	}

}
