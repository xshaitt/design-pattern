<?php
/**
 * Created by PhpStorm.
 * User: xshaitt
 * Date: 2019/3/4
 * Time: 下午3:27
 */

namespace IMooc;

class Register
{
    public static $objects;

    public static function get($alias)
    {
        return self::$objects[$alias];
    }

    public static function _set($alias, $object)
    {
        self::$objects[$alias] = $object;
    }

    public static function _unset($alias)
    {
        unset(self::$objects[$alias]);
    }
}