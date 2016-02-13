<?php

use Saas\Groups\Users\Eloquent\User as GroupUser;

class User extends GroupUser 
{
	/**
	 * Social accesor
	 */
	public function socialConnections()
	{
		return $this->hasMany('SocialConnection', 'user_id');
	}

	/**
	 * Users meta accesor
	 */
	public function metas()
	{
		return $this->hasOne('UserMeta', 'user_id');
	}

	/**
	 * Users attachment accesor
	 */
	public function attachments()
	{
		return $this->belongsToMany('Attachment', 'user_attachment')->withPivot('type');
	}

	/**
	 * Get username
	 */
	public function getUsername($default = '-')
	{
		return (is_object($this->metas)) ? $this->metas->username : $default;
	}

	/**
	 * Get location
	 */
	public function getLocation($default = '-')
	{
		return (is_object($this->metas)) ? $this->metas->location : $default;
	}

	/**
	 * Get website
	 */
	public function getWebsite($default = '-')
	{
		return (is_object($this->metas)) ? $this->metas->website : $default;
	}

	/**
	 * Get title
	 */
	public function getTitle($default = '-')
	{
		return (is_object($this->metas)) ? $this->metas->title : $default;
	}

	/**
	 * Get bio
	 */
	public function getBio($default = '-')
	{
		return (is_object($this->metas)) ? $this->metas->bio : $default;
	}

	/**
	 * Get user's full-name
	 */
	public function getFullname($default = '-')
	{
		if ($this->first_name || $this->last_name) {
			$name = $this->first_name.' '.$this->last_name;
		} else {
			$name = $default;
		}

		return $name;
	}

	/**
	 * Get user's status
	 */
	public function getStatus()
	{
		$throttle = Sentry::findThrottlerByUserId($this->id);

		if ($throttle->isBanned()) {
			return 'banned';
		} elseif ($throttle->isSuspended()) {
			return 'suspended';
		} else {
			return ($this->isActivated()) ? 'active' : 'not active';
		}
	}

	/**
	 * Get user's status with label
	 *
	 * @param bool 
	 */
	public function getLabelStatus($large = false)
	{
		$size = $large ? 'label-large ' : '';
		$label = '<span class="label '.$size.'">Unknown</span>';
		$status = $this->getStatus();

		switch ($status) {
			case 'active':
				$label = '<span class="label '.$size.'label-success">Verified</span>';
				break;

			case 'not active':
				$label = '<span class="label '.$size.'label-warning">Not Verified</span>';
				break;

			case 'suspended':
				$label = '<span class="label '.$size.'label-important">Suspended</span>';
				break;
			
			case 'banned':
				$label = '<span class="label '.$size.'label-inverse">Banned</span>';
				break;
		}

		return $label;
	}

	/**
	 * Get roles
	 */
	public function getRoles()
	{
		$groups = $this->groups;

		if (count($groups) == 0) return 'None';

		$roles = array();
		foreach ($groups as $group) {
			$roles[] = $group->name;
		}

		return implode(',',$roles);
	}

	/**
	 * Get primary role
	 */
	public function getPrimaryRole()
	{
		$groups = $this->groups;

		if (count($groups) == 0) return 'None';

		$highest = 0;
		foreach ($groups as $group) {
			if (count($group->getPermissions()) > $highest) {
				$highest = count($group->getPermissions());
				$role = $group->name;
			}
		}

		return $role;
	}

	/**
	 * Get user's status with label
	 *
	 * @param bool 
	 */
	public function getLabelPrimaryRole($large = false)
	{
		$size = $large ? 'label-large ' : '';
		$label = '<span class="label '.$size.'">Unknown</span>';
		$role = $this->getPrimaryRole();

		switch (strtolower($role)) {
			case 'admin':
				$label = '<span class="label '.$size.'label-important">Admin</span>';
				break;

			case 'user':
				$label = '<span class="label '.$size.'">User</span>';
				break;

			default:
				$available = array('label-success', 'label-inverse', 'label-warning');
				$index = range(0, 2);
				$label = '<span class="label '.$size.$available[$index].'">'.ucfirst($role).'</span>';
				break;
		}

		return $label;
	}

	/**
	 * Get user's subscription status with label
	 *
	 * @param bool 
	 */
	public function getLabelRoles($large = false)
	{
		$size = $large ? 'label-large ' : '';
		$label = '<span class="label '.$size.'">Unknown</span>';
		$roles = $this->getRoles();
		$roles = explode(',', $roles.'');

		if ( ! empty($roles)) {
			$label = '';

			foreach ($roles as $role) {
				$role = strtolower($role);

				switch ($role) {
					case 'admin':
						$label .= '<span class="label '.$size.'label-important">Admin</span> ';
						break;

					case 'user':
						$label .= '<span class="label '.$size.'">User</span> ';
						break;

					default:
						$available = array('label-success', 'label-inverse', 'label-warning');
						$index = rand(0, 2);
						$label .= '<span class="label '.$size.$available[$index].'">'.ucfirst($role).'</span> ';
						break;
				}
			}
		}
		

		return $label;
	}

	/**
	 * Get subscription status
	 */
	public function getSubscriptionStatus()
	{
		// This not implemented yet
		return 'None';
	}

	/**
	 * Get user's subscription status with label
	 *
	 * @param bool 
	 */
	public function getLabelSubscriptionStatus($large = false)
	{
		$size = $large ? 'label-large ' : '';
		$label = '<span class="label '.$size.'">Unknown</span>';
		$status = $this->getSubscriptionStatus();

		switch ($status) {
			default:
				$label = '<span class="label '.$size.'">None</span>';
				break;
		}

		return $label;
	}

    /**
     * @param $brand_id
     * @return bool
     */
    public function brandSwitch($brand_id)
    {
        $check = true; //Groups::inGroup(); there is a bug with Groups so skip for now and reimplement!

        if(!$check) {
            return false;
        }

        $metadata = $this->metas;

        $metadata->active_brand = $brand_id;
        $metadata->save();

        Session::put('active_brand', $brand_id);
        Session::regenerate();

        return $brand_id;
    }

    /**
     * @return mixed
     */
    public function activeBrand()
    {
        if(Session::has('active_brand')) {
            return Session::get('active_brand');
        }

        $active_brand = $this->metas->active_brand;

        Session::put('active_brand', $active_brand);
        return $active_brand;
    }

	/*
	 ************************************************
     * 				Forum Utilities					*
     *												*
     ************************************************
     */
	public function usermetadata()
    {
        return $this->hasMany('Usermetadata','user_id');
    }

    /**
     * @return array Metadata as hashmap and not array of objects
     */
    public function metadata()
    {

        $m = array();
        foreach ($this->usermetadata as $data) {
        //var_dump($data);

            $m[$data->attributes['key']] = $data->value;
        }
        return $m;
    }

}