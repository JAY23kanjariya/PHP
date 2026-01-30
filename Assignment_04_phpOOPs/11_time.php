<?php

class Time
{
    private int $hour;
    private int $minute;
    private int $second;

    public function __construct(int $hour = 0, int $min = 0, int $sec = 0)
    {
        $this->hour = $hour;
        $this->minute = $min;
        $this->second = $sec;
    }

    public function display() : void
    {
        printf("%02d:%02d:%02d\n", $this->hour, $this->minute, $this->second);
    }

    public function adjustTime() : void {
        if($this->second >= 60){
            $this->minute += intdiv($this->second,60);
            $this->second %= 60;
        }
         
        if ($this->minute >= 60){
            $this->hour += intdiv($this->minute,60);
            $this->minute %= 60;
        }
    }

    public static function addTime(Time $time1,Time $time2) : Time
    {
        return new Time(
            $time1->hour + $time2->hour ,
            $time1->minute + $time2->minute,
            $time1->second + $time2->second
        );
    }
}

function Main()
{
   $time1 = new Time(6,31,01);
   $time2 = new Time(7,49,44);
   $result = new Time();

   $result = Time::addTime($time1,$time2);
   $result->adjustTime();
   $result->display();
}
Main();
