<?php

namespace util;

class Point
{
    private $x;
    private $y;
    const MAXIMUM_XY = 100;
    private static $countInitialisations=0;

    public function __construct($x, $y)
    {
        $this->setX($x);
        $this->setY($y);
        self::$countInitialisations++;
    }

    function __toString()
    {
        return "($this->x, $this->y)";
    }

    public function getX()
    {
        return $this->x;
    }

    public function setX($x)
    {
        if ($x < 0 || $x > self::MAXIMUM_XY){
            print ("x moet waarde hebben van 0 tem 100");
        }else {
            $this->x = $x;
        }
    }

    public function getY()
    {
        return $this->y;
    }

    public function setY($y)
    {
        if($y < 0 || $y > self::MAXIMUM_XY){
            print ("x moet waarde hebben van 0 tem 100");
        }else {
            $this->y = $y;
        }

    }

    public function calculateDistance(Point $point){
        return sqrt( ($this->x-$point->x)*($this->x-$point->x)+
            ($this->y-$point->y)*($this->y-$point->y) );
    }
    public static function getCountInitialisations(){
        return self::$countInitialisations;
    }
}
