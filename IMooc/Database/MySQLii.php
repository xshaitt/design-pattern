<?php
/**
 * Created by PhpStorm.
 * User: xshaitt
 * Date: 2019/3/4
 * Time: 下午5:49
 */

namespace IMooc\Database;

//TODO 就不具体的实现了，毕竟只是为了理解一下这种设计模式
class MySQLii implements IDatabase
{
    public $conn;

    public function connect($host, $user, $password, $dbname)
    {
        $this->conn = mysqli_connect('172.19.0.1', 'default',
            'secret', 'default');
    }

    public function query($sql)
    {
        $obj = mysqli_query($this->conn, $sql);
        return mysqli_fetch_all($obj, MYSQLI_ASSOC);
    }

    public function update($sql)
    {
        $result = mysqli_query($this->conn, $sql);
        return $result;
    }

    public function close()
    {
        // TODO: Implement close() method.
    }

    public function __toString()
    {
        return '适配器模式下的MySQLi类';
    }
}