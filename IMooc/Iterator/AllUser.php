<?php
/**
 * Created by PhpStorm.
 * User: xshaitt
 * Date: 2019/3/20
 * Time: 下午3:50
 */

namespace IMooc\Iterator;

use IMooc\Database\MySQLii;
use IMooc\Factory;

class AllUser implements \Iterator
{
    public $ids;
    public $index = 0;

    public function __construct()
    {
        $query = new MySQLii();
        $query->connect('', '', '', '');
        $this->ids = $query->query('select id from user');
    }

    public function current()
    {
        $id = $this->ids[$this->index]['id'];
        return Factory::createUserModel($id);
    }

    public function next()
    {
        ++$this->index;
    }

    public function valid()
    {
        return $this->index < count($this->ids);
    }

    public function key()
    {
        return $this->index;
    }

    public function rewind()
    {
        $this->index = 0;
    }
}