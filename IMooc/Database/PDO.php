<?php
/**
 * Created by PhpStorm.
 * User: xshaitt
 * Date: 2019/3/5
 * Time: 下午4:03
 */

namespace IMooc\Database;

class PDO implements IDatabase
{
    public function close()
    {
        // TODO: Implement close() method.
    }

    public function query($sql)
    {
        // TODO: Implement query() method.
    }

    public function connect($host, $user, $password, $dbname)
    {
        // TODO: Implement connect() method.
    }

    public function __toString()
    {
        return '适配器模式下的PDO类';
    }
}