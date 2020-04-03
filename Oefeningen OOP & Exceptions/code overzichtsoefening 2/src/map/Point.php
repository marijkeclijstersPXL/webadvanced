<?php
namespace map;
class Point {
    private $x;
    private $y;

    private function __construct($x, $y)
    {
        if($x < 0 || $x >= 100 || $y < 0 || $y >= 100){
            throw new \InvalidArgumentException("exception: [0,100[");
        }
        $this->x;
        $this->y;
    }

    public function changeX($x){
        return new self($x, $this->y);
    }

    public function changeY($y){
        return new self($this->x, $y);
    }

    public function getX()
    {
        return $this->x;
    }

    public function getY()
    {
        return $this->y;
    }

    public static function make(int $x, int $y){
        return new self($x,$y);
    }

    public function manhattanDistance(Point $point){
        return abs($this->x - $point->x) + abs($this->y - $point->y);
    }
}

