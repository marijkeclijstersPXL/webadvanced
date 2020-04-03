<?php


namespace util;


class Color
{
    private string $rgb;
    const BLACK = "000000";
    const WHITE = "FFFFFF";
    const RED = "FF0000";
    const GREEN = "FF00FF";
    const BLUE = "0000FF";
    const YELLOW = "FFFF00";

    private function __construct($rgb)
    {
        $this->rgb = $rgb;
    }

    public function getRgb()
    {
        return $this->rgb;
    }

    public function toString($rgb) {
        return $this->rgb.dechex($rgb);
    }

}