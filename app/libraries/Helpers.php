<?php

class Helpers {

    //I have no idea if the below functions are used or if someone simply copy/pasted them in.
    public static function generate_result_links($result)
    {
        $links = '';

        if (array_get($result, 'total') 
            && array_get($result, 'per_page')
            && array_get($result, 'page')) {

            $pagecount = intval($result['total'] / $result['per_page']);
            if ($result['total'] % $result['per_page'] != 0) $pagecount++;
            $links = '<div class="pagination"><ul>';
            if ($result['page'] <= 1) {
                $links .= '<li class="previous_page disabled"><a href="#">&laquo; Previous</a></li>';
            } else {
                $links .= '<li class="previous_page"><a href="#'.($result['page'] - 1).'">&laquo; Previous</a></li>';
            }
            for($i = 1; $i <= $pagecount; $i++) {
                if ($i == $result['page']) {
                    $links .= '<li class="active"><a href="#">'.$i.'</a></li>';
                } else {
                    $links .= '<li><a href="#'.$i.'">'.$i.'</a></li>';
                }
            }
            if ($result['page'] >= $pagecount) {
                $links .= '<li class="next_page disabled"><a href="#">Next &raquo;</a></li>';
            } else {
                $links .= '<li class="next_page"><a href="#'.($result['page'] + 1).'">Next &raquo;</a></li>';
            }
            $links .= '</ul></div>';
        }

        return $links;
    }

    public static function table_exists($table)
    {
        $config = DB::connection()->config;

        if ($config['driver'] !== 'mysql') return false;

        $database = $config['database'];
        $prefix = $config['prefix'];
        $sql = "SELECT table_name FROM information_schema.tables WHERE table_schema = '" . $database . "' AND table_name = '" . $prefix . $table . "';";
        $checker =  DB::query($sql);

        if( count($checker) == 0 )
        {
            return false;
        }
        else
        {
            return true;
        }
    }

    public static function fbLogin(){
        $facebook = IoC::resolve('facebook-sdk');
        $params = array(
            'redirect_uri' => 'http://empire.dev/fblogin/oauth',
	    'display' => 'popup',
	    'scope' => 'email'
	);
		
	return $facebook->getLoginUrl($params);
   }

   public static function randGen()
    {
       $length=15;
               $strength=0;
               
                $vowels = 'aeuy';
        	$consonants = 'bdghjmnpqrstvz';
        	if ($strength & 1) {
        		$consonants .= 'BDGHJLMNPQRSTVWXZ';
        	}
        	if ($strength & 2) {
        		$vowels .= "AEUY";
        	}
        	if ($strength & 4) {
        		$consonants .= '23456789';
        	}
        	if ($strength & 8) {
        		$consonants .= '@#$%';
        	}
         
        	$password = '';
        	$alt = time() % 2;
        	for ($i = 0; $i < $length; $i++) {
        		if ($alt == 1) {
        			$password .= $consonants[(rand() % strlen($consonants))];
        			$alt = 0;
        		} else {
        			$password .= $vowels[(rand() % strlen($vowels))];
        			$alt = 1;
        		}
        	}
        	return $password;
    }

    /** get string in slug format **/
    public static function slug_string($string, $length = -1, $separator = '-') {

        // lowercase
        $string = strtolower($string);

        // replace non alphanumeric and non underscore charachters by separator
        $string = preg_replace('/[^a-z0-9]/i', $separator, $string);

        // replace multiple occurences of separator by one instance
        $string = preg_replace('/'. preg_quote($separator) .'['. preg_quote($separator) .']*/', $separator, $string);

        // cut off to maximum length
        if ($length > -1 && strlen($string) > $length) {
        $string = substr($string, 0, $length);
        }

        // remove separator from start and end of string
        $string = preg_replace('/'. preg_quote($separator) .'$/', '', $string);
        $string = preg_replace('/^'. preg_quote($separator) .'/', '', $string);

        return $string;
    }


    /**
     * 
     */
    public static function getParsedString($parseString, $startParse='[', $endParse=']') {

        $arMessage = str_split($parseString);
        $magicParsed = array();

        if(!empty($arMessage)) {
            
            $parsed = '';
            $started = false;
            $inline_parsed = 0;

            foreach($arMessage as $char) {                       

                if($started && $char == $endParse) {
                    $inline_parsed -=1;
                }

                if($started && $inline_parsed != 0) {
                   $parsed.=$char; 
                }

                if($char == $startParse) {
                    $started = true;
                    $inline_parsed +=1;
                }                        

                if($started && $char == $endParse && $inline_parsed == 0) {
                    if(!empty($parsed)) {
                        $magicParsed[] = $parsed;
                    }                            
                    $started = false;
                    $parsed = '';
                }
            }
        }
        
        return $magicParsed;
    }

    /**
     * @param $user_id
     * @return mixed|string
     */
    public static function UserNameFromID($user_id)
    {
        $user = \User::find((int) $user_id);

        if(!empty($user))
        {
            $UserAvatar = $user->metadata();

            $name = isset($metadata['first_name']) ? $metadata['first_name'] : '';
            $name .= isset($metadata['last_name']) ? ' ' . $metadata['last_name'] : '';

            $name = empty($name) ? 'User' : $name;
            return $name;
        }

        return '';
    }

    public function BrandAvatar($brand_id)
    {
        $brand = Brand::find((int) $brand_id);

        if(empty($brand) or empty($brand->image_thumb))
        {
            return "/img/egghead.png";
        }

        return '/uploads/brand/'.$brand->image_thumb;

    }

    /**
     * @param $user_id
     * @return mixed|string
     */
    public static function UserAvatar($user_id)
    {

        $user = User::find((int) $user_id);

        if(empty($user))
        {

            return "/img/egghead.png";
        }
 
        $metadata = $user->metadata();

        if(!empty($user->image)) {

            $type = strpos($user->image, 'http', 0);

            if($type == 0 and $type !== false)
            {
                if(isset($metadata['facebook_username']))
                {
                    $image = explode("?", $user->image);
                    $image = str_replace("/me/","/".$metadata['facebook_username']."/", $image[0]);
                    return $image;
                }
            }

            return $user->image;
        }
        else
        {
            // Check if Twitter is connected
            if(isset($metadata['twitter_image']))
            {
                return $metadata['twitter_image'];
            }
            elseif(isset($metadata['facebook_image']))
            {
                return $metadata['facebook_image'];
            }
            elseif(isset($metadata['uploaded_image']))
            {
                return $metadata['uploaded_image'];
            }
            else
            {
                /*
                $gravitar = Gravitas\API::url($user->email, 120, "http://dev.surrounds.me/img/egghead.png");

                // There are no identified images, lets check gravitar
                if(!empty($gravitar))
                {
                    // Incase there is no image, lets use our default instead
                    return $gravitar;
                }
                else
                {
                    return "/img/egghead.png";
                }*/

                return "/img/egghead.png";
            }
        }
    }
}