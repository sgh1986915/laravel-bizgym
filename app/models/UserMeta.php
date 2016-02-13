<?php

class UserMeta extends Eloquent
{
	/**
	 * @var string Table
	 */
	protected $table = 'user_meta';

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