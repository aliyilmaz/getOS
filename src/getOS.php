<?php

/**
 *
 * @package    getOS
 * @version    Release: 1.0.0
 * @license    GPL3
 * @author     Ali YILMAZ <aliyilmaz.work@gmail.com>
 * @category   Json control of a string
 * @link       https://github.com/aliyilmaz/is_json
 *
 */
class getOS
{

    /**
     * Detecting an operating system
     * @return string
     */
    function getOS(){
        $os = PHP_OS;
        switch (true) {
            case stristr($os, 'dar'): return 'Darwin';
            case stristr($os, 'win'): return 'Windows';
            case stristr($os, 'lin'): return 'Linux';
            default : return 'Unknown';
        }
        return $this;
    }
}
