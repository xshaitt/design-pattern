<?php
/**
 * Created by PhpStorm.
 * User: xshaitt
 * Date: 2019/3/6
 * Time: 下午4:14
 */

namespace IMooc;

class FemaleUserStrategy implements UserStrategy
{
    public function showCategory()
    {
        return '女装';
    }

    public function showAd()
    {
        return '最新2019女装';
    }
}