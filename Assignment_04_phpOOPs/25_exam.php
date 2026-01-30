<?php
abstract class Student
{
    abstract public function takeExam();
}

class PhdStudent extends Student
{
    public function takeExam()
    {
        echo "exam by giving his final defence presentation \n";
    }
}

class GradStudent extends Student
{
    public function takeExam()
    {
        echo "Graduate student gives a written paper. \n";
    }
}

$pHD = new PhdStudent();
$pHD->takeExam();

$gRAD = new GradStudent();
$gRAD->takeExam();