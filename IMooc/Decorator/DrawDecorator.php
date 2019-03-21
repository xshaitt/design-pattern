<?php
/**
 * Created by PhpStorm.
 * User: xshaitt
 * Date: 2019/3/21
 * Time: 下午5:09
 */

namespace IMooc\Decorator;

interface DrawDecorator
{
    public function afterDraw();

    public function beforeDraw();
}