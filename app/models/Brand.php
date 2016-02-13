<?php
/**
 * Created by JetBrains PhpStorm.
 * User: nick
 * Date: 10/2/13
 * Time: 3:06 PM
 * To change this template use File | Settings | File Templates.
 */

use Saas\Groups\Brands\Eloquent\Brand as GroupBrand;

class Brand extends GroupBrand
{
    /**
     * Brand attachment accessor
     */
    public function attachments()
    {
        return $this->belongsToMany('Attachment', 'brand_attachment')->withPivot('type');
    }
}
