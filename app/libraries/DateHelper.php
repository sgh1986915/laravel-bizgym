<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Nick
 * Date: 7/8/13
 * Time: 1:48 PM
 * To change this template use File | Settings | File Templates.
 */

/**
 * Class DateHelper
 */
class DateHelper
{
    /**
     * Format a date string
     *
     * @param string $date date("Y-m-d H:i:s")
     * @param string $format
     * @param int $timezone
     * @return string date("F d, Y")
     */
    public static function toDate($date, $format = "F d, Y", $timezone = 'UTC')
    {
        if(is_int($timezone))
        {
            $tz_name = self::getTimezone($timezone);
        }
        else
        {
            $tz_name = $timezone;
        }

        try
        {
            $tz = new DateTimeZone($tz_name);

            $f_date = self::parseDate($date, $tz);

            if(empty($f_date))
            {
               return $date;
            }

            return $f_date->format($format);
        }
        catch(\Exception $e)
        {
            return $date;
        }
    }

    /**
     * Format a date string
     *
     * @param string $date date("Y-m-d H:i:s")
     * @param int $timezone
     * @return string '%y year(s) %m month(s) %d day(s) %h hour(s) %i minute(s) %s second(s) ago'
     */
    public static function dateDiff($date, $timezone = 'UTC')
    {
        if(is_int($timezone))
        {
            $tz_name = self::getTimezone($timezone);
        }
        else
        {
            $tz_name = $timezone;
        }

        try
        {
            $tz = new DateTimeZone($tz_name);

            $cur_date = new DateTime("now");
            $cur_date->setTimezone($tz);


            $diff_date = self::parseDate($date, $tz);

            if(empty($diff_date))
            {
                return $date;
            }

            $diff = $cur_date->diff($diff_date);

            if(empty($diff))
            {
                return $date;
            }

            $f_date = self::dateDiffFormat($diff);

            if(empty($f_date))
            {
                return $date;
            }

            return $f_date;
        }
        catch(\Exception $e)
        {
            return $date;
        }
    }

    /**
     * Return DateTimeZone name.
     *
     * @param int $offset
     * @return string timezone name.
     */
    public static function getTimezone($offset = 0)
    {
        $name = timezone_name_from_abbr(null, $offset * 3600, true);

        if($name === false)
        {
            $name = timezone_name_from_abbr(null, $offset * 3600, false);
        }

        return $name;
    }

    public static function getTimezoneDropdown()
    {
        $utc = new DateTimeZone('UTC');
        $dt = new DateTime('now', $utc);

        $timezones = array();
        $offsets_used = array();

        foreach(DateTimeZone::listIdentifiers() as $tz)
        {
            $dt_tz = new DateTimeZone($tz);
            $offset = $dt_tz->getOffset($dt);

            if(in_array($offset, $offsets_used) and $tz != 'UTC')
            {
               continue;
            }

            $offsets_used[$offset] = $tz;
        }

        ksort($offsets_used, SORT_NUMERIC);

        foreach($offsets_used as $key => $value)
        {
            $format_offset = self::formatOffset($key);
            $timezones[$value] = "(UTC {$format_offset}) {$value}";
        }

        return $timezones;
    }

    private static function formatOffset($offset) {
        $hours = $offset / 3600;
        $remainder = $offset % 3600;
        $sign = $hours > 0 ? '+' : '-';
        $hour = (int) abs($hours);
        $minutes = (int) abs($remainder / 60);

        if ($hour == 0 and $minutes == 0) {
            $sign = '';
        }

        return $sign . str_pad($hour, 2, '0', STR_PAD_LEFT) .':'. str_pad($minutes,2, '0');
    }

    private static function parseDate($date, DateTimeZone $tz)
    {
        if(preg_match("#(\\d{4})/(\\d{2})/(\\d{2})#", $date, $match))
        {
            $replaced = preg_replace("#/#", "-", $match[0]);
            $date = str_replace($match[0], $replaced, $date);
        }
        elseif(preg_match("#(\\d{2})/(\\d{2})/(\\d{4})#", $date, $match))
        {
            $replaced = preg_replace("#/#", "-", $match[0]);
            $date = str_replace($match[0], $replaced, $date);
        }

        if(preg_match("#(\\d{4})-(\\d{2})-(\\d{2}) (\\d{2}):(\\d{2}):(\\d{2}) (\\w*/\\w*)#", $date))
        {
            $f_date = \DateTime::createFromFormat("Y-m-d H:i:s e", $date);
        }
        elseif(preg_match("#(\\d{4})-(\\d{2})-(\\d{2}) (\\d{2}):(\\d{2}):(\\d{2}) (\\w*)#", $date))
        {
            $f_date = \DateTime::createFromFormat("Y-m-d H:i:s e", $date);
        }
        elseif(preg_match("/(\\d{4})-(\\d{2})-(\\d{2}) (\\d{2}):(\\d{2}):(\\d{2})/", $date))
        {
            $f_date = \DateTime::createFromFormat("Y-m-d H:i:s", $date);
        }

        elseif(preg_match("/(\\d{4})-(\\d{2})-(\\d{2})/", $date))
        {
            $f_date = \DateTime::createFromFormat("Y-m-d", $date);
        }
        elseif(preg_match("/\\d/", $date) and is_numeric($date))
        {
            $f_date = \DateTime::createFromFormat("Y-m-d", date("Y-m-d", $date));
        }
        else
        {
            return false;
        }

        $f_date->setTimezone($tz);

        return $f_date;
    }

    /**
     * @param DateInterval $date
     * @return bool|string
     */
    private static function dateDiffFormat(DateInterval $date)
    {
        $date_string = '';

        if($date->y)
        {
            return $date->format(($date->y > 1 ? "%y years" : "%y year")) . " ago";
        }

        if($date->m)
        {
            return $date->format(($date->m > 1 ? "%m months" : "%m month")) . " ago";
        }

        if($date->d)
        {
            return $date->format(($date->d > 1 ? "%d days" : "%d day")) . " ago";
        }

        if($date->h)
        {
            return $date->format(($date->h > 1 ? "%h hours" : "%h hour")) . " ago";
        }

        if($date->i)
        {
            return $date->format(($date->i > 1 ? "%i minutes" : "%d minute")) . " ago";
        }

        if($date->s)
        {
            return $date->format(($date->s > 1 ? "%s seconds " : "%s second ")) . " ago";
        }

        if(empty($date_string))
        {
            return false;
        }
    }
}
