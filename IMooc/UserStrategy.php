<?php
/**
 * Created by PhpStorm.
 * User: xshaitt
 * Date: 2019/3/6
 * Time: 上午11:49
 */

namespace IMooc;

interface UserStrategy
{
    public function showAd();

    public function showCategory();
}