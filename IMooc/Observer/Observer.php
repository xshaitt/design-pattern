<?php
/**
 * Created by PhpStorm.
 * User: xshaitt
 * Date: 2019/3/19
 * Time: 下午7:00
 */

namespace IMooc\Observer;

interface Observer
{
    public function update($eventInfo = null);
}