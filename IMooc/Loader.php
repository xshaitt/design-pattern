<?php
/**
 * Created by PhpStorm.
 * User: xshaitt
 * Date: 2019/2/28
 * Time: 上午7:23
 */

namespace IMooc;

class Loader
{
    public static function autoload($class)
    {
        require BASEDIR . '/' . str_replace('\\', '/', $class) . '.php';
        //拼接目录并引入
    }
}