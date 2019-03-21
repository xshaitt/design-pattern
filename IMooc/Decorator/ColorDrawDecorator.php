<?php
/**
 * Created by PhpStorm.
 * User: xshaitt
 * Date: 2019/3/21
 * Time: 下午5:32
 */

namespace IMooc\Decorator;


class ColorDrawDecorator implements DrawDecorator
{
    public $color;

    public function __construct($color = 'red')
    {
        $this->color = $color;
    }

    public function afterDraw()
    {
        echo '</div>';
    }

    public function beforeDraw()
    {
        echo "<div style='color: {$this->color}'>";
    }
}