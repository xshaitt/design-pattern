<?php
/**
 * Created by PhpStorm.
 * User: xshaitt
 * Date: 2019/3/21
 * Time: 下午5:32
 */

namespace IMooc\Decorator;


class SizeDrawDecorator implements DrawDecorator
{
    public $size;

    public function __construct($size = '18')
    {
        $this->size = $size;
    }

    public function afterDraw()
    {
        echo '</div>';
    }

    public function beforeDraw()
    {
        echo "<div style='font-size: {$this->size}px'>";
    }
}