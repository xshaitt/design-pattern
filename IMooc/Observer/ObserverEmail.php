<?php
/**
 * Created by PhpStorm.
 * User: xshaitt
 * Date: 2019/3/19
 * Time: 下午7:09
 */

namespace IMooc\Observer;

class ObserverEmail implements Observer
{
    public function update($eventInfo = null)
    {
        echo '邮件观察者</br>';
    }
}