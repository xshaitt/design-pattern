<?php
/**
 * Created by PhpStorm.
 * User: xshaitt
 * Date: 2019/3/2
 * Time: 上午11:59
 */

namespace IMooc;

class Factory
{
    public static function createDatabase()
    {
        $db = new Database;
        return $db;
    }
}