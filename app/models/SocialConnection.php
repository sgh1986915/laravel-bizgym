<?php

class SocialConnection extends Eloquent
{
	/**
	 * @var string Table
	 */
	protected $table = 'user_social';

	/**
	 * @var array guarded column
	 */
	protected $guarded = array('id', 'created_at', 'updated_at');

	/**
	 * User accessor
	 */
	public function user()
	{
		return $this->belongsTo('User');
	}
}