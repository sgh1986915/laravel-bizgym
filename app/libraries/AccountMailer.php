<?php

use Illuminate\Database\Eloquent\Model;

class AccountMailer
{
	/**
	 * @var Model
	 */
	protected $user;

	/**
	 * Constructor
	 *
	 * @param Model user model
	 */
	public function __construct(Model $user)
	{
		$this->user = $user;
	}

	/**
	 * Factory
	 *
	 * @param Model user model
	 */
	public static function factory(Model $user)
	{
		return new static($user);
	}

	/**
	 * Send user acivation code
	 */
	public function sendActivation()
	{
		$user = $this->user;
		$data = compact('user');

		try {
			Mail::send('emails.auth.activate', $data, function($message) use ($user)
			{
			    $message->to($user->email, $user->email)->subject('Activate your account.');
			});
			Session::flash('sent_activation', $user->email);
		} catch (Exception $e) {
			Session::flash('failed_activation', $e->getMessage());
		}
	}

	/**
	 * Send user password-reset code
	 */
	public function sendPasswordRequest()
	{
		$user = $this->user;
		$email = $user->email;

		Password::remind(compact('email'), function($message, $user)
		{
			$message->subject('Your Password Reminder');
		});

		Session::flash('sent_password_request', $email);
	}
}