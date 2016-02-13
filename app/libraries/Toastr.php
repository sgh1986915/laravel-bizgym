<?php

/**
 * @method static string error() error($header, $more = null)
 * @method static string warning() warning($header, $more = null)
 * @method static string info() info($header, $more = null)
 * @method static string success() success($header, $more = null)
 */
class Toastr {
    const overlay = 'overlay';
    const timeout = 'timeout';

    public static $stacked = array();

    public static function stack($type, $message)
    {
        static::$stacked[$type][] = $message;
    }

    public static function dumpStack()
    {
        $output = '';

        foreach (static::$stacked as $type => $notifications) {
            foreach ($notifications as $notification) {
                $output .= static::$type($notification);
            }
        }
        return $output;
    }

    public static function notify($level, $header, $more = null, $options = array()) {
        if (empty($header) && empty($more))
            return '';

        // Translate any string passed
        $header = trans($header);
        $more = trans($more);

        $str = '';
        if (is_array($header)) $header = current($header);
        if (isset($options[self::timeout])) {
            $str .= 'toastr.options.timeOut = '.$options[self::timeout].';';
            $str .= 'toastr.options.extendedTimeOut = '.$options[self::timeout].';';
        }
        if (isset($options[self::overlay]) || in_array(self::overlay, array_values($options))) {
            $str .= 'toastr.options.positionClass = \'toast-middle-center\';';
            $str .= 'toastr.options.onclick = function() {toastr.clear()};';
            $str .= 'Overlay.show();';
        }
        if(empty($more)) {
            $str .= "toastr.$level('" . htmlentities($header, ENT_NOQUOTES) . "');";
        } else {
            $str .= "toastr.$level('" . $more . "', '" . htmlentities($header,ENT_NOQUOTES) . "');";
        }
        return $str.'';
    }

    public static function __callStatic($name, $args) {
        $header = $args[0];
        $more = count($args) > 1 ? $args[1] : null;
        $options = count($args) > 2 ? $args[2] : array();
        return self::notify($name, $header, $more, $options);
    }

}