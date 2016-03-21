<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/
// Route::get('/', function()
// {
//     $img = Image::make('ssss.jpg')->resize(550, 1000);

//     return $img->response('jpg');
// });

Route::get('/', function()
{
	if(!Sentry::check()){
		return Redirect::to('auth/login');
	} else {
		return Redirect::to('dashboard');
	}
});

Route::group(['before'=>'auth'], function(){
	Route::controller('dashboard', 'HomeController');	
	Route::resource('inv_item_brand','InvItemBrandsController');
	Route::resource('inv_item_group','InvItemGroupsController');
	Route::resource('inv_unit','InvUnitsController');
	Route::resource('invitems','InvItemsController');
	Route::resource('alis','AlisController');
	Route::resource('menus','MenusController');
	
});



/*Route::get("cu", function(){
    // Create the user
    $user = Sentry::createUser(array(
        'email'     => 'jakareaparvez@gmail.com',
        'password'  => 'welcome',
        'username'  => 'admin',
        'activated' => true,
    ));
});*/

Route::controller('auth', 'AuthController');