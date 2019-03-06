<?php
/**
 * Created by PhpStorm.
 * User: xshaitt
 * Date: 2019/3/6
 * Time: 下午4:06
 */

namespace IMooc;

class MaleUserStrategy implements UserStrategy
{
    public function showAd()
    {
        return 'IPhone手机';
    }

    public function showCategory()
    {
        return '电子产品';
    }
}