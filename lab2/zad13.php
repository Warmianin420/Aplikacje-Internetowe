<?php

class Point {
    private $x;
    private $y;

    public function __construct($x = 0, $y = 0) {
        $this->x = $x;
        $this->y = $y;
    }

    public function getX() {
        return $this->x;
    }

    public function getY() {
        return $this->y;
    }

    public function setX($x) {
        $this->x = $x;
    }

    public function setY($y) {
        $this->y = $y;
    }

    public function moveTo($dx, $dy) {
        $this->x += $dx;
        $this->y += $dy;
    }

    public function __toString() {
        return sprintf("Point(%s, %s)", $this->x, $this->y);
    }
}

$point1 = new Point();
$point2 = new Point(5, 5);

echo $point1 . PHP_EOL; 
echo $point2 . PHP_EOL;

$point2->setX(10);
$point2->setY(10);
echo $point2 . PHP_EOL;

// Move point and output
$point2->moveTo(1, -1);
echo $point2 . PHP_EOL;
?>
