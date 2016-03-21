<?php

class InvItemsController extends \BaseController {


	/**
	 * Display a listing of invitems
	 *
	 * @return Response
	 */
	public function index()
	{
		$invitems = Invitem::with('group','category')->orderBy('item_id','DESC');
		$itemtitel = Input::get('item_heading');
		if(!empty($itemtitel)){
			$invitems->where('item_heading','LIKE','%'.$itemtitel.'%');
		}
		$invitems = $invitems->paginate(12);

		return View::make('inv_items.index', compact('invitems'));
	}

	/**
	 * Show the form for creating a new invitem
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('inv_items.create');
	}

	/**
	 * Store a newly created invitem in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Invitem::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		if(Input::hasFile('company_logo')){
	        $data['item_features_image'] = $this->getImgSrc('company_logo');
        } else {
        	$data = array_except($data, ['company_logo']);
        }
        if(Input::hasFile('detail_image')){
	        $data['item1'] = $this->getDetail('detail_image');
        } else {
        	$data = array_except($data, ['item1']);
        }
        if(Input::hasFile('image')){
	        $data['item2'] = $this->getAnother('image');
        } else {
        	$data = array_except($data, ['item2']);
        }

        if(Input::hasFile('image1')){
	        $data['item3'] = $this->getImage2('image1');
        } else {
        	$data = array_except($data, ['item3']);
        }

		Invitem::create($data);

		return Redirect::route('invitems.index');
	}

	/**
	 * Display the specified invitem.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$invitem = Invitem::findOrFail($id);

		return View::make('invitems.show', compact('invitem'));
	}

	/**
	 * Show the form for editing the specified invitem.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$invitem = Invitem::find($id);

		return View::make('inv_items.edit', compact('invitem'));
	}

	/**
	 * Update the specified invitem in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$invitem = Invitem::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Invitem::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}



		$invitem->update($data);

		return Redirect::route('invitems.index');
	}

	/**
	 * Remove the specified invitem from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Invitem::destroy($id);

		return Redirect::route('invitems.index');
	}

	//getting image path
	protected function getImgSrc($fileName){
		//if file not uploaded then return empty
		if(!Input::hasFile($fileName)){
			return "";
		}

		$allFiles = Input::file($fileName);
		//$allFiles->resize(300, 200);

		foreach ($allFiles as $file){
		
			$fileName = time().mt_rand(1,100).mt_rand(2,100).'.'.$file->getClientOriginalExtension();			
		}

		$uploadPath = public_path().'/upload';
		$fileSrc = "upload/$fileName";

		$file->move($uploadPath, $fileName);
		$ali =public_path($fileSrc);	
		$img = Image::make($ali)->resize(75, 75);
		$img->save($ali);
		return $fileSrc;
	}
	protected function getDetail($fileName){
		//if file not uploaded then return empty
		if(!Input::hasFile($fileName)){
			return "";
		}

		$allFiles = Input::file($fileName);
		//$allFiles->resize(300, 200);

		foreach ($allFiles as $file){
		
			$fileName = time().mt_rand(1,100).mt_rand(2,100).'.'.$file->getClientOriginalExtension();			
		}

		$uploadPath = public_path().'/upload';
		$fileSrc = "upload/$fileName";

		$file->move($uploadPath, $fileName);
		$ali =public_path($fileSrc);	
		$img = Image::make($ali)->resize(266, 381);
		$img->save($ali);
		return $fileSrc;
	}
	protected function getAnother($fileName){
		//if file not uploaded then return empty
		if(!Input::hasFile($fileName)){
			return "";
		}

		$allFiles = Input::file($fileName);
		//$allFiles->resize(300, 200);

		foreach ($allFiles as $file){
		
			$fileName = time().mt_rand(1,100).mt_rand(2,100).'.'.$file->getClientOriginalExtension();			
		}

		$uploadPath = public_path().'/upload';
		$fileSrc = "upload/$fileName";

		$file->move($uploadPath, $fileName);
		$ali =public_path($fileSrc);	
		$img = Image::make($ali)->resize(75, 75);
		$img->save($ali);
		return $fileSrc;
	}

	protected function getImage2($fileName){
		//if file not uploaded then return empty
		if(!Input::hasFile($fileName)){
			return "";
		}

		$allFiles = Input::file($fileName);
		//$allFiles->resize(300, 200);

		foreach ($allFiles as $file){
		
			$fileName = time().mt_rand(1,100).mt_rand(2,100).'.'.$file->getClientOriginalExtension();			
		}

		$uploadPath = public_path().'/upload';
		$fileSrc = "upload/$fileName";

		$file->move($uploadPath, $fileName);
		$ali =public_path($fileSrc);	
		$img = Image::make($ali)->resize(75, 75);
		$img->save($ali);
		return $fileSrc;
	}



}
