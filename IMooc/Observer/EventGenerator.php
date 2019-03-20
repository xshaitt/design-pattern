<?php
/**
 * Created by PhpStorm.
 * User: xshaitt
 * Date: 2019/3/19
 * Time: 下午6:57
 */

namespace IMooc\Observer;

/**
 * Class EventGenerator
 * @package IMooc\Observer
 * 事件生成器基类
 */
abstract class EventGenerator
{
    private $observers = [];

    public function addObserver(Observer $observer)
    {
        $this->observers[] = $observer;
    }

    protected function notify()
    {
        foreach ($this->observers as $observer) {
            $observer->update();
        }
    }
}