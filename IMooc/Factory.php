<?php
/**
 * Created by PhpStorm.
 * User: xshaitt
 * Date: 2019/3/2
 * Time: 上午11:59
 */

namespace IMooc;

use IMooc\Database\User;

class Factory
{
    public static function createDatabase()
    {
        $db = new Database;
        return $db;
    }

    public static function createUserModel($id)
    {
        $key = 'user' . $id;
        $user = Register::get($key);
        if (!$user) {
            $user = new User($id);
            Register::_set($key, $user);
        }
        return $user;
    }
}