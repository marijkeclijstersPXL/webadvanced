<?php


namespace workers;
use \tools\tool;

class HandyMan implements Worker
{
    private $tool;

    public function __construct($tool)
    {
        $this->tool = $tool;
    }


    public function work()
    {
        $this->tool->doSomething();
    }
}