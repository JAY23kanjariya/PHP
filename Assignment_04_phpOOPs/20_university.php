<?php
class University
{
    private const INITIAL_EN = 2026001;
    private static int $enNumberGenerator = self::INITIAL_EN;

    private int $rollno;
    private string $studentName;
    private string $degree;
    private int $currentSem;
    private float $currentCGPA;
    private int $currentBacklog;

    public function __construct(string $studentName = '', string $degree = '', int $currentSem = 1, float $currentCGPA = 0.0, int $currentBacklog = 0)
    {
        $this->rollno = ++self::$enNumberGenerator;
        $this->studentName = $studentName;
        $this->degree = $degree;
        $this->setCurrentSem($currentSem);
        $this->setCurrentCGPA($currentCGPA);
        $this->setCurrentBacklog($currentBacklog);
    }

    public function input(string $studentName, string $degree, int $currentSem, float $currentCGPA, int $currentBacklog): void
    {
        $this->studentName = $studentName;
        $this->degree = $degree;
        $this->setCurrentSem($currentSem);
        $this->setCurrentCGPA($currentCGPA);
        $this->setCurrentBacklog($currentBacklog);
    }

    public function show(): void
    {
        echo "University Student Details\n";
        echo "Enrollment No : {$this->rollno}\n";
        echo "Name          : {$this->studentName}\n";
        echo "Degree        : {$this->degree}\n";
        echo "Current Sem   : {$this->currentSem}\n";
        echo "Current CGPA  : " . number_format($this->currentCGPA, 2, '.', '') . "\n";
        echo "Current Backlog: {$this->currentBacklog}\n";
        echo "-------------------------------\n";
    }

    /* -------- getters -------- */
    public function getRollNo(): int
    {
        return $this->rollno;
    }
    public function getStudentName(): string
    {
        return $this->studentName;
    }
    public function getDegree(): string
    {
        return $this->degree;
    }
    public function getCurrentSem(): int
    {
        return $this->currentSem;
    }
    public function getCurrentCGPA(): float
    {
        return $this->currentCGPA;
    }
    public function getCurrentBacklog(): int
    {
        return $this->currentBacklog;
    }

    /* -------- setters with validation -------- */
    public function setCurrentSem(int $sem): void
    {
        if ($sem < 1) {
            throw new \InvalidArgumentException('Semester must be >= 1');
        }
        $this->currentSem = $sem;
    }

    public function setCurrentCGPA(float $cgpa): void
    {
        if ($cgpa < 0.0 || $cgpa > 10.0) {
            throw new \InvalidArgumentException('CGPA must be between 0.0 and 10.0');
        }
        $this->currentCGPA = $cgpa;
    }

    public function setCurrentBacklog(int $backlog): void
    {
        if ($backlog < 0) {
            throw new \InvalidArgumentException('Backlog cannot be negative');
        }
        $this->currentBacklog = $backlog;
    }

    public static function totalEnrolled(): int
    {
        return self::$enNumberGenerator - self::INITIAL_EN;
    }
}


    $u1 = new University('jay hk', 'B.Tech', 3, 8.56, 0);
    $u2 = new University();
    $u2->input('nitin', 'B.Sc', 2, 7.12, 1);

    $u1->show();
    $u2->show();

    echo "Total enrolled: " . University::totalEnrolled() . "\n";
