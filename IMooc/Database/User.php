<?php
/**
 * Created by PhpStorm.
 * User: xshaitt
 * Date: 2019/3/13
 * Time: 下午7:04
 */

namespace IMooc\Database;

class User
{
    private $db;

    public function __construct($id)
    {
        $this->db = new MySQLii();
        $this->db->connect('172.19.0.1', 'default', 'secret', 'default');
        $user = $this->db->query("select * from user where id ='{$id}'");
        if (!$user) {
            return null;
        }
        $this->id = $id;
        $this->name = $user['name'];
        $this->mobile = $user['mobile'];
        $this->regtime = $user['regtime'];
    }
}