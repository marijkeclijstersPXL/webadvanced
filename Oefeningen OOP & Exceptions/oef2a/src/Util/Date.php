<?php 

namespace Util;

class Date
{
    private $day;
    private $month;
    private $year;

    //oef2b
    private static $MONTHS = array('jan', 'feb', 'mrt', 'apr', 'mei', 'jun', 'jul', 'aug', 'sep', 'okt', 'nov', 'dec');

    public function __construct(int $day = 1, int $month = 1, int $year = 2008)
    {
        if ($day<= 0 || $day > 31){
            throw new DateException("wrong input for day: $day");
        }
        $this->day = $day;
        $this->month = $month;
        $this->year = $year;
    }

    /**
     * @return int
     */
    public function getDay(): int
    {
        return $this->day;
    }
    /*oefening 2a
    public function setDay(int $day)
    {
        $this->day = $day;
    }*/

    public function getMonth(): int
    {
        return $this->month;
    }

    /*oefening 2a
    public function setMonth(int $month)
    {
        $this->month = $month;
    }*/

    public function getYear(): int
    {
        return $this->year;
    }
    /*oefening2a
    public function setYear(int $year)
    {
        $this->year = $year;
    }*/

    public static function make($day, $month, $year){
        try {
            $date = new Date($day, $month, $year);
        } catch (DateException $e) {
        }
        return $date;
    }

    //oefening2b
    public function changeDay($day){
        return new self($day, $this->day);
    }

    public function changeMonth($month){
        return new self($month, $this->month);
    }

    public function changeYear($year){
        return new self($year, $this->year);
    }

    public function print(){
        echo date("d/m/Y");
    }

    public function printMonth(){
        echo date("d/M/Y");
    }
}
