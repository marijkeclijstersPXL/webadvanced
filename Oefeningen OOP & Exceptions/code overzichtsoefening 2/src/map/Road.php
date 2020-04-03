<?php
namespace map;

class Road{
    private $points;

    private function __construct()
    {
        $this->points = [];
    }

    public static function make(){
        return new Road();
    }

    public function addPoint(Point $point){
        $this->points[] = $point;
    }

    public function manhattanDistance(){
        $sum = 0;
        $points = func_get_args();
        foreach ($points as $point){
            $distance = Point::mahattanDistance($point);
            $sum += $distance;
        }
        return $sum;
    }

    public function getPoints(): array
    {
        return $this->points;
    }
}


