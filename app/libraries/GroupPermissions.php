<?php

class GroupPermissions {

    final public function __construct(){}

    /**
     * Check array of permissions with group permissions for currently logged in user.
     *
     * @param array $permissions
     * @return bool
     * @throws Cartalyst\Sentry\Users\UserNotFoundException
     */
    public static function has_access($permissions)
    {
        try
        {   //Old code
            //$user = Sentry::user()->get('id');
            $user = Sentry::getUser()->id;
            $active_company = User::find((int) $user)->active_brand();

            //Get user groups based on company
            if(self::_check_system_permissions($user, $permissions))
            {
                return true;
            }

            if(empty($active_company))
            {
                return false;
            }

            return self::_check_company_permissions($user, $active_company, $permissions);
        }
        catch(Cartalyst\Sentry\Users\UserNotFoundException $e)
        {
            throw new Cartalyst\Sentry\Users\UserNotFoundException($e->getMessage());
        }
    }

    /**
     * @param $id
     * @param $permissions
     * @return bool
     * @throws Cartalyst\Sentry\Users\UserNotFoundException
     */
    private static function _check_system_permissions($id, $permissions)
    {
        try
        {

            // Find the user using the user id

            //$user = Sentry::user((int)$id);//Old Code
            $user = Sentry::findUserByID((int)$id);

            // Get the user groups

            //$groups = $user->groups(); // Old code

            $groups = $user->getGroups();


            foreach($groups as $group)
            {
                if(!isset($group['permissions']) or empty($group['permissions']))
                {
                    continue;
                }

                $json = json_decode($group['permissions'], true);
                $group_permissions = array_keys($json);

                foreach($group_permissions as $rule)
                {
                    if($rule == 'is_admin')
                    {
                        return true;
                    }

                    if(!in_array($rule, $permissions))
                    {
                        continue;
                    }

                    return true;
                }
            }

            return false;
        }
        catch(Cartalyst\Sentry\Users\UserNotFoundException $e)
        {
            throw new Cartalyst\Sentry\Users\UserNotFoundException($e->getMessage());
        }
    }

    /**
     * @param $user
     * @param $company
     * @param $permissions
     * @return bool
     */
    private static function _check_company_permissions($user, $company, $permissions)
    {
        //$group_model = \IoC::resolve('groupaccess');// Old code
        $group_model = App::make('groupaccess');

        $groups = $group_model->get_user_groups($user, $company);

        foreach($groups as $group)
        {
            if(!isset($group->permissions) or empty($group->permissions))
            {
                continue;
            }

            $json = json_decode($group->permissions, true);
            $group_permissions = array_keys($json);

            foreach($group_permissions as $rule)
            {
                if($rule == 'is_admin')
                {
                    return true;
                }

                if(!in_array($rule, $permissions))
                {
                    continue;
                }

                return true;
            }
        }
        return false;
    }

    /**
     * Check if user is apart of a group
     *
     * @param array $group_list
     * @param int $company_id
     * @return bool
     * @throws Cartalyst\Sentry\Users\UserNotFoundException
     */
    public static function in_group(array $group_list, $company_id = null, $user_id = null)
    {

        try
        {
            if(empty($user_id))
            {
                //$user = Sentry::user()->get('id');//Old code
                $user = \Sentry::getUser()->id;
            }
            else
            {
                $user = $user_id;
            }

            if(empty($company_id))
            {
                $active_company = Saas\Forum\Models\User::find((int) $user)->active_brand();
            }
            else
            {
                $active_company = $company_id;
            }

            if(self::_check_system_groups($user, $group_list))
            {
                return true;
            }

            if(empty($active_company))
            {
                return false;
            }

            return self::_check_company_groups($user, $active_company, $group_list);
        }
        catch(Cartalyst\Sentry\Users\UserNotFoundException $e)
        {
            throw new Cartalyst\Sentry\Users\UserNotFoundException($e->getMessage());
        }
    }

    /**
     * @param $id
     * @param $group_list
     * @return bool
     * @throws Cartalyst\Sentry\Users\UserNotFoundException
     */
    private static function _check_system_groups($id, $group_list)
    {
        try
        {
            $user = \Sentry::findUserByID((int)$id);
            $groups = $user->getGroups();

            foreach($groups as $group)
            {
                if(!in_array($group['name'], $group_list))
                {
                    continue;
                }

                return true;
            }

            return false;
        }
        catch(Cartalyst\Sentry\Users\UserNotFoundException $e)
        {
            throw new Cartalyst\Sentry\Users\UserNotFoundException($e->getMessage());
        }
    }

    /**
     * @param $id
     * @param $active_company
     * @param $group_list
     * @return bool
     */
    private static function _check_company_groups($id, $active_company, $group_list)
    {
        //should fix this 
        //$group_model = IoC::resolve('groupaccess');
        $group_model = App::make('GroupAccess');

        $groups = $group_model->get_user_groups($id, (int) $active_company);

        foreach($groups as $group)
        {
            if(!in_array($group->group_name, $group_list))
            {
                continue;
            }

            return true;
        }
        return false;
    }

}