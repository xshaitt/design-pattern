<?php
/**
 * Created by PhpStorm.
 * User: xshaitt
 * Date: 2019/3/4
 * Time: 下午5:50
 */

interface Database
{
    public function connect($host, $user, $password, $dbname);

    public function query($sql);

    public function close();
}