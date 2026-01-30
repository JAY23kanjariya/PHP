<?php
class Time
{
    private int $hour;
    private int $minute;
    private int $second;

    public function __construct(int $hour = 0, int $min = 0, int $sec = 0)
    {
        $hour <= 23 ? $this->hour = $hour : $this->hour = 0;
        $min <= 59 ? $this->minute = $min : $this->minute = 0;
        $sec <= 59 ? $this->second = $sec : $this->second = 0;
    }

    public function display()
    {
        printf("Time : %02d:%02d:%02d", $this->hour, $this->minute, $this->second);
    }
}

$time = new Time(42,13,24);
$time->display();
