<?php
/**
 * Created by PhpStorm.
 * User: xshaitt
 * Date: 2019/3/19
 * Time: 下午7:08
 */

namespace IMooc\Observer;

class Event extends EventGenerator
{
    public function trigger()
    {
        echo '事件发生了</br>';
        $this->notify();
    }
}