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
        $result = $this->db->query("select * from user where id ='{$id}'");
        if (!$result) {
            return null;
        }
        $user = $result[0];
        $this->id = $id;
        $this->name = $user['name'];
        $this->mobile = $user['mobile'];
        $this->regtime = $user['regtime'];
    }

    public function save()
    {
        $result = $this->db->update("update user set name='{$this->name}',mobile='{$this->mobile}'
           where id = '{$this->id}'");
        return $result;
    }
}