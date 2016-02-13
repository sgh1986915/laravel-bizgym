<?php
/**
 * Created by JetBrains PhpStorm Updated to L4 by Anouar SaasVenture.
 * User: nick
 * Date: 2/20/13
 * Time: 11:06 AM
 * To change this template use File | Settings | File Templates.
 */

class GroupAccess {

    public function __construct()
    {

    }

    /**
     * Retrieve base group from config_user_groups based on id
     *
     * @param null $id
     * @return mixed
     * @throws Sentry\SentryException
     */
    public function get_base_groups($id = null)
    {
        try
        {
            if(empty($id))
            {
                return Sentry::group()->all();
            }

            return Sentry::group($id);
        }
        catch(Sentry\SentryException $e)
        {
            throw new Sentry\SentryException($e->getMessage());
        }
    }

    /**
     * Update config_user_groups
     *
     * @param $id
     * @param array $fields
     * @throws Sentry\SentryException
     */
    public function update_base_groups($id, $fields = array())
    {
        try
        {
            $group = Sentry::group($id);
            $group->update($fields);
        }
        catch(Sentry\SentryException $e)
        {
            throw new Sentry\SentryException($e->getMessage());
        }
    }

    /**
     * Delete group by id or all groups.
     *
     * @param null $id
     * @return bool
     * @throws Sentry\SentryException
     */
    public function delete_base_groups($id = null)
    {
        try
        {
            if(!empty($id))
            {
                Sentry::group($id)->delete();
                return true;
            }

            $groups = Sentry::group()->all();
            foreach($groups as $group)
            {
                Sentry::group($group['id'])->delete();
            }

            return true;
        }
        catch(Sentry\SentryException $e)
        {
            throw new Sentry\SentryException($e->getMessage());
        }
    }

    /**
     * Create group with permissions
     *
     * @param $fields
     * @param array $permissions
     * @throws Sentry\SentryException
     */
    public function create_base_group($fields, $permissions = array())
    {
        try
        {
            $group = Sentry::group()->create($fields);
            if(!empty($permissions))
            {
                Sentry::group($group)->update_permissions($permissions);
            }
        }
        catch(Sentry\SentryException $e)
        {
            throw new Sentry\SentryException($e->getMessage());
        }
    }

    /**
     * @param $id
     * @param $permissions
     * @throws Sentry\SentryException
     */
    public function update_base_group_rules($id, $permissions)
    {
        try
        {
            $group = Sentry::group($id);
            $diff = array_diff(json_decode($group['permissions'], true), $permissions);
            if(!empty($diff))
            {
                $group->update_permissions($permissions);
            }

            return;
        }
        catch(Sentry\SentryException $e)
        {
            throw new Sentry\SentryException($e->getMessage());
        }
    }

    /**
     * Add rule to group based on rule id and group id
     *
     * @param $group_id
     * @param $rule_id
     * @return bool
     * @throws Sentry\SentryException
     */
    public function add_base_rule_to_group($group_id, $rule_id)
    {
        try
        {
            $group = Sentry::group($group_id);
            $rule = Rule::find($rule_id);
            $permissions = array();
            if(isset($group['permissions']))
            {
                $permissions = json_decode($group['permissions'], true);
            }

            $permissions[$rule->rule] = 1;
            DB::table('config_user_groups')->where('id', '=', $group_id)->update(array('permissions' => json_encode($permissions)));
            return true;
        }
        catch(Sentry\SentryException $e)
        {
            throw new Sentry\SentryException($e->getMessage());
        }
    }

    public function remove_base_rule_from_group($group_id, $rule_id)
    {
        try
        {
            $group = Sentry::group($group_id);
            $rule = Rule::find($rule_id);

            $permissions = array();
            if(isset($group['permissions']))
            {
                $permissions = json_decode($group['permissions'], true);
            }

            if(isset($permissions[$rule->rule]))
            {
                unset($permissions[$rule->rule]);
                DB::table('config_user_groups')->where('id', '=', $group_id)->update(array('permissions' => json_encode($permissions)));
                return true;
            }

            return false;
        }
        catch(Sentry\SentryException $e)
        {
            throw new Sentry\SentryException($e->getMessage);
        }
    }

    /**
     * Retrieve base rules from config_user_rules based on id
     *
     * @param null $id
     * @return mixed
     * @throws Sentry\SentryException
     */
    public function get_base_rules($id = null)
    {
        try
        {
            if(empty($id))
            {
                return Rule::all();
            }

            return Rule::find($id);
        }
        catch(Sentry\SentryException $e)
        {
            throw new Sentry\SentryException($e->getMessage());
        }
    }

    /**
     * @param $fields
     * @return mixed
     * @throws Sentry\SentryException
     */
    public function create_base_rules($fields)
    {
        $rule = Rule::create($fields);

        if($rule === false)
        {
            throw new Sentry\SentryException;
        }

        return $rule->id;
    }

    /**
     * @param $id
     * @param $fields
     * @return bool
     * @throws Sentry\SentryException
     */
    public function update_base_rule($id, $fields)
    {
        try
        {
            $rule = Rule::find($id);

            if($fields['rule'] != $rule->rule)
            {
                $groups = Group::all();

                foreach($groups as $group)
                {
                    if(empty($group->permissions) or !isset($group->permissions))
                    {
                        continue;
                    }

                    $json = json_decode($group->permissions, true);
                    if(!array_key_exists($rule->rule, $json))
                    {
                        continue;
                    }

                    $json[$fields['rule']] = 1;
                    unset($json[$rule->rule]);

                    $group->permissions = json_encode($json);
                    $group->save();
                }
            }

            $rule->fill($fields);
            $rule->save();

            return true;
        }
        catch(Sentry\SentryException $e)
        {
            throw new Sentry\SentryException($e->getMessage());
        }
    }

    /**
     * Delete rule, also remove and update groups.
     *
     * @param null $id
     * @return bool
     * @throws Sentry\SentryException
     */
    public function delete_base_rules($id = null)
    {
        try
        {
            if(!empty($id))
            {
                $rules = array(Rule::find($id));
            }
            else
            {
                $rules = Rule::all();
            }

            $groups = $this->get_base_groups();
            foreach($groups as $group)
            {
                $permissions = array();
                if(!empty($group['permissions']))
                {
                    $permissions = json_decode($group['permissions'], true);
                    foreach($rules as $rule)
                    {
                        if(!isset($permissions[$rule->rule]))
                        {
                            continue;
                        }

                        $permissions[$rule->rule] = 0;
                    }

                    $this->update_base_group_rules($group['id'], $permissions);
                }
            }

            foreach($rules as $rule)
            {
                $rule->delete();
            }

            return true;
        }
        catch(Sentry\SentryException $e)
        {
            throw new Sentry\SentryException($e->getMessage());
        }
    }

    /**
     * Retrieve groups with rules json_decoded
     *
     * @return mixed
     * @throws Sentry\SentryException
     */
    public function get_group_rules()
    {
        try
        {
            $groups = $this->get_base_groups();
            foreach($groups as $key => $value)
            {
                if(empty($value['permissions']))
                {
                   $groups[$key]['permissions'] = array();
                    continue;
                }
                $json = json_decode($value['permissions'], true);
                $groups[$key]['permissions'] = array_keys($json);
            }

            return $groups;
        }
        catch(Sentry\SentryException $e)
        {
            throw new Sentry\SentryException($e->getMessage());
        }
    }

    /**
     * Get user brand groups
     * @param  [int] $id user_id
     * @return [array]     group data
     */
    public function get_user_brand_groups($id)
    {
        try
        {
            $admin = DB::table('config_user_groups')->where('name', '=', 'Administrator')->first(array('id'));

            $brands = DB::table('user_brand_groups')
                ->where('user_brand_groups.user_id', '=', (int)$id)
                ->where('user_brand_groups.group_id', '!=', (int)$admin->id)
                ->leftJoin('brand', 'user_brand_groups.brand_id', '=', 'brand.id')
                ->leftJoin('config_user_groups', 'user_brand_groups.group_id', '=', 'config_user_groups.id')
                ->order_by('brand.title')
                ->order_by('config_user_groups.name')
                ->get();

            return $brands;
        }
        catch(Exception $e)
        {
            throw new Sentry\SentryException($e->getMessage());
        }
    }

    /**
     * Add a user to a company/group.
     *
     * @param $user_id
     * @param $company_id
     * @param $group_id
     * @return bool
     * @throws Sentry\SentryException
     */
    public function add_user_to_company_groups($user_id, $company_id, $group)
    {
        return $this->add_user_to_brand_groups($user_id, $company_id, $group);
    }

    /**
     * Add a user to a brand/group.
     *
     * @param $user_id
     * @param $brand_id
     * @param $group_id
     * @return bool
     * @throws Sentry\SentryException
     */
    public function add_user_to_brand_groups($user_id, $brand_id, $group)
    {
        try
        {
            if(is_int($group))
            {
                $group_id = $group;
            }
            else
            {
                $group = Group::where('name', '=', $group)->first('id');
                $group_id = $group->id;
            }

            //get current groups
            $ug = DB::table('user_brand_groups')
                ->where('user_id', '=', $user_id)
                ->where('brand_id', '=', $brand_id)
                ->where('group_id', '=', $group_id)
                ->get();

            if(empty($ug))
            {  
                $status = DB::table('user_brand_groups')->insert(array("user_id" => $user_id, "brand_id" => $brand_id, "group_id" => $group_id));
                return $status;
            }

            return 2;
        }
        catch(Exception $e)
        {
            throw new Sentry\SentryException($e->getMessage());
        }
    }

    /**
     * Remove user from company/group.
     *
     * @param $user_id
     * @param $company_id
     * @param $group_id
     * @return bool
     * @throws Sentry\SentryException
     */
    public function remove_user_from_company_groups($user_id, $company_id, $group_id)
    {
        return $this->remove_user_from_brand_groups($user_id, $company_id, $group_id);
    }

    /**
     * Remove user from brand/group.
     *
     * @param $user_id
     * @param $brand_id
     * @param $group_id
     * @return bool
     * @throws Sentry\SentryException
     */
    public function remove_user_from_brand_groups($user_id, $brand_id, $group_id)
    {
        try
        {

            if(!is_numeric($group_id)) {
                $group = Group::getGroupByName($group_id);
                if(!empty($group->id)) {
                    $group_id = $group->id;
                } else {
                    return false;
                }
            }
            
            //get current groups
            $ug = DB::table('user_brand_groups')
                ->where('user_id', '=', (int)$user_id)
                ->where('brand_id', '=', (int)$brand_id)
                ->where('group_id', '=', (int)$group_id)
                ->get();
            if($ug)
            {
                $status = DB::table('user_brand_groups')
                    ->where('user_id', '=', (int)$user_id)
                    ->where('brand_id', '=', (int)$brand_id)
                    ->where('group_id', '=', (int)$group_id)
                    ->delete();
                return $status;
            }

            return false;
        }
        catch(Exception $e)
        {
            throw new Sentry\SentryException($e->getMessage());
        }
    }

    /**
     * Get Active Group
     *
     * @param $user_id
     * @param $company_id
     * @param $group_id
     * @return stdClass
     */
    public function get_active_group($user_id, $company_id, $group_id)
    {
        $select = array(
            'user_company_groups.company_id',
            'user_company_groups.group_id',
            'companies.company_title',
            'config_user_groups.name AS group_name'
        );

        $builder = DB::table('user_company_groups')
            ->where('user_company_groups.user_id', '=', (int)$user_id)
            ->where('user_company_groups.company_id', '=', (int)$company_id)
            ->where('user_company_groups.group_id', '=', (int)$group_id)
            ->leftJoin('companies', 'user_company_groups.company_id', '=', 'companies.id')
            ->leftJoin('config_user_groups', 'user_company_groups.group_id', '=', 'config_user_groups.id')
            ->first($select);
        if(empty($builder))
        {
            $builder = new stdClass();
        }
        return $builder;
    }

    /**
     * Get default user company/group
     *
     * @param $user_id
     * @return stdClass
     * @throws Sentry\SentryException
     */
    public function get_default_group($user_id)
    {
        $default = new stdClass();

        try
        {
            $select = array(
                'user_company_groups.company_id',
                'user_company_groups.group_id',
                'companies.company_title',
                'config_user_groups.name AS group_name'
            );

            $company = DB::table('user_company_groups')
                ->where('user_company_groups.user_id', '=', (int)$user_id)
                ->leftJoin('companies', 'user_company_groups.company_id', '=', 'companies.id')
                ->leftJoin('config_user_groups', 'user_company_groups.group_id', '=', 'config_user_groups.id')
                ->first($select);

            if(empty($company))
            {
                $default->company_id = 0;
                $default->group_id = 0;
                return $default;
            }

            $default->company_id = $company->company_id;
            $default->group_id = $company->group_id;
            return $default;
        }
        catch(Exception $e)
        {
            throw new Sentry\SentryException($e->getMessage());
        }
    }

    /**
     * @param $user_id
     * @return mixed
     */
    public function get_user_companies($user_id)
    {
        $this->get_user_brands($user_id);
    }

    /**
     * get users brands 
     * @param  [type] $user_id
     * @return [object]
     */
    public function get_user_brands($user_id)
    {
        $select = array(
            'user_brand_groups.brand_id',
            'brand.title',
            'brand.slug',
            'brand.image_thumb',
            'brand.id'
        );

        $builder = DB::table('user_brand_groups')
            ->where('user_brand_groups.user_id', '=', (int)$user_id)
            ->leftJoin('brand', 'user_brand_groups.brand_id', '=', 'brand.id')
            ->distinct()
            ->get($select);

        return $builder;
    }

    /**
     * @param $user_id
     * @param $company_id
     * @param $group_id
     * @return bool
     */
    public function change_active_group($user_id, $company_id, $group_id)
    {
        $builder = DB::table('user_company_groups')
            ->where('user_id', '=', (int)$user_id)
            ->where('company_id', '=', (int)$company_id)
            ->where('group_id', '=', (int)$group_id)
            ->first();

        if(!empty($builder))
        {
            return $builder;
        }

        return false;
    }

    /**
     * @param $user_id
     * @param $company_id
     * @return bool
     */
    public function change_active_company($user_id, $company_id)
    {
        $builder = DB::table('user_company_groups')
            ->where('user_id', '=', (int)$user_id)
            ->where('company_id', '=', (int)$company_id)
            ->first();

        if(!empty($builder))
        {
            return $builder;
        }

        return false;
    }

    /**
     * @param $user_id
     * @param $company_id
     * @return mixed
     */
    public function get_user_groups($user_id, $company_id)
    {

        $select = array(
            'user_brand_groups.brand_id',
            'user_brand_groups.group_id',
            'config_user_groups.name as group_name',
            'config_user_groups.permissions as permissions'
        );

        $builder = DB::table('user_brand_groups')
            ->where('user_brand_groups.user_id', '=', (int)$user_id)
            ->where('user_brand_groups.brand_id', '=', (int)$company_id)
            ->leftJoin('config_user_groups', 'user_brand_groups.group_id', '=', 'config_user_groups.id')
            ->get($select);
        return $builder;
    }


    /**
     * check user has group role.
     * @param  [type]  $user_id
     * @param  [type]  $brand_id
     * @return boolean
     */
    public static function has_user_brand_groups($user_id, $brand_id, $group_id)
    {
        if(!is_numeric($group_id)) {
            $group = Group::getGroupByName($group_id);
            if(!empty($group->id)) {
                $group_id = $group->id;
            } else {
                return false;
            }
        }

        // ----

        return DB::table('user_brand_groups')
                ->where('user_id', '=', $user_id)
                ->where('brand_id', '=', $brand_id)
                ->where('group_id', '=', $group_id)
                ->count();
    }

}