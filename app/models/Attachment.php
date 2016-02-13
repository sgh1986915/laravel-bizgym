<?php

class Attachment extends Eloquent
{
	/**
	 * @var string Table
	 */
	protected $table = 'attachment';

	/**
	 * @var array guarded column
	 */
	protected $guarded = array('id', 'created_at', 'updated_at');

    /**
     * User accessor
     */
    public function users()
    {
        return $this->belongsToMany('User', 'user_attachment')->withPivot('type');
    }

    /**
     * User accessor
     */
    public function brands()
    {
        return $this->belongsToMany('Brand', 'brand_attachment')->withPivot('type');
    }

	/**
	 * Alert accessor
	 */
	public function alerts()
	{
		return $this->belongsToMany('Saas\Message\Models\Alert', 'alert_attachment')->withPivot('type');
	}
}