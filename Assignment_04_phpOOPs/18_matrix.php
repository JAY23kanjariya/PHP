<?php
class Matrix
{
    private int $rows;
    private int $columns;
    private int $elements;
    private array $matrix = array();

    public function __construct(int $rows = 0, int $cols = 0, int $elements = 0)
    {
        $this->rows = $rows;
        $this->columns = $cols;
        $this->elements = $elements;
        $this->matrix = array_fill(0, $rows, array_fill(0, $cols, 0));
    }

    public function getRows(): int
    {
        return $this->rows;
    }

    public function getColumns(): int
    {
        return $this->columns;
    }

    public function setValue(int $rowNumber, int $colNumber, $value): void
    {
        if (!isset($this->matrix[$rowNumber][$colNumber])) {
            throw new \OutOfRangeException("Index out of bounds: [$rowNumber][$colNumber]");
        }
        $this->matrix[$rowNumber][$colNumber] = $value;
    }

    public function getValue(int $rowNumber, int $colNumber)
    {
        return $this->matrix[$rowNumber][$colNumber] ?? null;
    }

    /**
     * Legacy addMatrix removed — use add() which returns a Matrix instance.
     */
    public static function add(Matrix $a, Matrix $b)
    {
        if ($a->rows !== $b->rows || $a->columns !== $b->columns) {
            echo "Matrices cannot be added";
            return;
        }
        $res = new Matrix($a->rows, $a->columns);
        for ($i = 0; $i < $a->rows; $i++) {
            for ($j = 0; $j < $a->columns; $j++) {
                $res->matrix[$i][$j] = $a->matrix[$i][$j] + $b->matrix[$i][$j];
            }
        }
        return $res;
    }

    /**
     * Matrix multiplication (dot-product). Returns new Matrix with size a.rows x b.columns
     */
    public static function multiply(Matrix $a, Matrix $b)
    {
        if ($a->columns !== $b->rows) {
            echo "Matrices cannot be Multipy \n";
            return;
        }
        $res = new Matrix($a->rows, $b->columns);
        for ($i = 0; $i < $a->rows; $i++) {
            for ($j = 0; $j < $b->columns; $j++) {
                $sum = 0;
                for ($k = 0; $k < $a->columns; $k++) {
                    $sum += $a->matrix[$i][$k] * $b->matrix[$k][$j];
                }
                $res->matrix[$i][$j] = $sum;
            }
        }
        return $res;
    }

    public function printMatrix(): void
    {
        for ($i = 0; $i < $this->rows; $i++) {
            for ($j = 0; $j < $this->columns; $j++) {
                echo $this->matrix[$i][$j] . " ";
            }
            echo "\n";
        }
    }
}

$m1 = new Matrix(2,2,4);
$m1->setValue(0,0,1);
$m1->setValue(0,1,1);
$m1->setValue(1,0,1);
$m1->setValue(1,1,1);
$m2 = new Matrix(2,2,4);
$m2->setValue(0,0,2);
$m2->setValue(0,1,2);
$m2->setValue(1,0,2);
$m2->setValue(1,1,2);
$m3 = Matrix::add($m1,$m2);
$m3->printMatrix();
$m3 = Matrix::multiply($m1,$m2);
$m3->printMatrix();