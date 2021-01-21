<?php

class Canvas
{
    private $data;
    function init($width = 20, $height = 10)
    {
        $data = array();
        for ($i = 0; $i < $height; $i++) {
            for ($j = 0; $j < $width; $j++) {
                $data[$i][$j] = '*';
            }
        }
        $this->data = $data;
    }
    function rect($x1, $y1, $x2, $y2)
    {
        foreach ($this->data as $k1 => $line) {
            if ($x1 > $k1 or $x2 < $k1) continue;
            foreach ($line as $k2 => $char) {
                if ($y1 > $k2 or $y2 < $k2) continue;
                $this->data[$k1][$k2] = '#';
            }
        }
    }

    function draw()
    {
        foreach ($this->data as $line) {
            foreach ($line as $char) {
                echo $char;
            }
            echo ";\n";
        }
    }
}




$c = new Canvas();
$c->init();
$canvas1 = new Canvas();
// $canvas1->init();
$canvas1 = clone $c; //通过克隆，可以省去init()方法，这个方法循环两百次
//去产生一个数组。当项目中需要产生很多的这样的对象时，就会new很多的对象，那样
//是非常消耗性能的。
$canvas1->rect(2, 2, 8, 8);
$canvas1->draw();
echo "----------------------------------------- \n";
// $canvas2 = new Canvas();
// $canvas2->init();
$canvas2 = clone $c;
$canvas2->rect(1, 4, 8, 8);
$canvas2->draw();
