<?php
class Run
{
    private String $runnerName;
    private float $distance;

    private static $maxDistance = 0;
    private static $topRunner = "";

    public function setData($name, $distance)
    {
        $this->runnerName = $name;
        $this->distance = $distance;

        if (self::$maxDistance < $distance) {
            self::$maxDistance = $distance;
            self::$topRunner = $name;
        }
    }

    public static function showTopRunner()
    {
        echo "<b>Top Runner </b><br>";
        echo "Name : " . self::$topRunner . "<br>";
        echo "Distance : " . self::$maxDistance . "<br>";
    }
}

$runner1 = new Run();
$runner1->setData("abc",4.2);

$runner2 = new Run();
$runner2->setData("def",5.2);

Run::showTopRunner();

