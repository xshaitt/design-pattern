<?php
/**
 * Created by PhpStorm.
 * User: xshaitt
 * Date: 2019/3/19
 * Time: 下午7:09
 */

namespace IMooc\Observer;

class ObserverSMS implements Observer
{
    public function update($eventInfo = null)
    {
        echo '短信观察者</br>';
    }
}