<?php
class Students
{
    private static int $rollNumberGenerator = 202600;
    private int $rollno;
    private string $name;
    private $marks = array();

    public function __construct()
    {
        $this->rollno = ++self::$rollNumberGenerator;
        $this->name = "";
        $this->marks = array_fill(0, 5, 0);
    }

    public function input(string $name, array $marks): void
    {
        $this->name = $name;
        $count = min(count($marks), count($this->marks));
        for ($i = 0; $i < $count; $i++) {
            $this->marks[$i] = (int)$marks[$i];
        }
    }

    public function show(): void
    {
        echo "===== Student Details =====\n";
        echo "Roll Number : $this->rollno \n";
        echo "Student Name : $this->name \n";
        echo "Subject Marks : ";
        foreach ($this->marks as $mark) {
            echo "$mark ";
        }
        echo "\n";
    }

    public static function totalStudents(): void
    {
        $initial = 202600;
        echo "Number of Students : " . (self::$rollNumberGenerator - $initial) . "\n";
    }

    public function totalMarks(): int
    {
        return array_sum($this->marks);
    }

    public function getHighest(): int
    {
        return max($this->marks);
    }

    public function getLowest(): int
    {
        return min($this->marks);
    }

    public function getAverage(): int
    {
        return intdiv($this->totalMarks(), count($this->marks));
    }

    public function getPassCount(): int
    {
        $numberOfSubjectPass = 0;
        foreach ($this->marks as $mark) {
            if ($mark >= 50) {
                $numberOfSubjectPass++;
            }
        }
        return $numberOfSubjectPass;
    }
}

function studentsDetails(Students $stud){
    $stud->show();
    echo "Total Marks : ".$stud->totalMarks()."\n";
    echo "Highest Marks : ".$stud->getHighest()."\n";
    echo "Lowest Marks : ".$stud->getLowest()."\n";
    echo "Average Marks : ".$stud->getAverage()."\n";
    echo "Total Subject Pass Out of 5 : ".$stud->getPassCount()."\n";
    echo "=================================\n";
}

function Main(){
    $stud1 = new Students();
    $stud1->input("abc",[79,34,32,75,35]);
    studentsDetails($stud1);

    $stud2 = new Students();
    $stud2->input("def",[43,45,25,87,98]);
    studentsDetails($stud2);

    $stud3 = new Students();
    $stud3->input("xyz",[76,46,35,67,57]);
    studentsDetails($stud3);

    Students::totalStudents();
}
Main();