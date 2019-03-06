<?php
/**
 * Created by PhpStorm.
 * User: xshaitt
 * Date: 2019/3/6
 * Time: 下午4:35
 */

namespace IMooc;

class UserStrategyPage
{
    protected $strategy;

    public function index()
    {
        echo 'AD:' . $this->strategy->showAd() . '<br/>';
        echo 'Category:' . $this->strategy->showCategory() . '<br/>';
    }

    public function setStrategy(\IMooc\UserStrategy $strategy)
    {
        $this->strategy = $strategy;
    }
}