<?php
/**
 * Created by PhpStorm.
 * User: xshaitt
 * Date: 2019/3/21
 * Time: 下午4:48
 */

namespace IMooc\Decorator;

class Rect
{
    private $width;
    private $height;
    private $decorators = [];

    public function __construct($width = 10, $height = 10)
    {
        $this->width = $width;
        $this->height = $height;
    }

    public function addDrawDecorator(DrawDecorator $decorator)
    {
        $this->decorators[] = $decorator;
    }

    private function afterDraw()
    {
        $decorators = array_reverse($this->decorators);
        foreach ($decorators as $decorator) {
            $decorator->afterDraw();
        }
    }

    private function beforeDraw()
    {
        foreach ($this->decorators as $decorator) {
            $decorator->beforeDraw();
        }
    }

    public function draw()
    {
        $this->beforeDraw();
        for ($i = 0; $i < $this->height; $i++) {
            for ($j = 0; $j < $this->width; $j++) {
                echo '*&nbsp;';
            }
            echo '</br>';
        }
        $this->afterDraw();
    }
}