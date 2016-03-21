<?php
/**
 * Description of AuthController
 *
 * @author Nadim Tuhin
 */
class AuthController extends \BaseController {

	public function getLogin()
	{
		return \View::make('auths.index');
	}
	
	public function getLogout(){
		// Logs the user out
		\Sentry::logout();
		$flash = 'You are successfully logged out';
		return \Redirect::to('auth/login')->with('message', $flash);
	}

	public function postLogin(){
		$input = \Input::all();

		try {

			// Set login credentials
			$credentials = array(
				'username'	=> $input['username'],
				'password' => $input['password']
			);
			$remember = \Input::get('remember', false);

			// Try to authenticate the user
			$user = \Sentry::authenticate($credentials, $remember);

			//the user is logged in, send her dashboard
			//
			//
			//$flash = "Welcome Aboard!";
			




			return \Redirect::to('/dashboard'); //todo: where to go


		} catch (\Cartalyst\Sentry\Users\LoginRequiredException $e) {
			$flash = 'Username field is required.';
		} catch (\Cartalyst\Sentry\Users\PasswordRequiredException $e) {
			$flash = 'Password field is required.';
		} catch (\Cartalyst\Sentry\Users\WrongPasswordException $e) {
			$flash = 'Wrong combination, try again.';
		} catch (\Cartalyst\Sentry\Users\UserNotFoundException $e) {
			$flash = 'Wrong combination, try again.';
		} catch (\Cartalyst\Sentry\Users\UserNotActivatedException $e) {
			$flash = 'User is not activated.';
		}

		// The following is only required if throttle is enabled
		catch (\Cartalyst\Sentry\Throttling\UserSuspendedException $e) {
			$flash = 'User is suspended.';
		} catch (\Cartalyst\Sentry\Throttling\UserBannedException $e) {
			$flash = 'User is banned.';
		}

		//if not logged in they will arive here
		return \Redirect::to('auth/login')->with('message', $flash)->withInput();
	}


}

?>