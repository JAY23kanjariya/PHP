<?php

class MinHeap
{
    private array $heap = [];

    public function insert($value, $priority)
    {
        $this->heap[] = ['value' => $value, 'priority' => $priority];
        $this->bubbleUp(count($this->heap) - 1);
    }

    public function extract()
    {
        if (empty($this->heap)) {
            return null;
        }

        if (count($this->heap) === 1) {
            return array_pop($this->heap);
        }

        $root = $this->heap[0];
        $this->heap[0] = array_pop($this->heap);
        $this->bubbleDown(0);

        return $root;
    }

    private function bubbleUp($index)
    {
        while ($index > 0) {
            $parentIndex = intdiv($index - 1, 2);
            if ($this->heap[$index]['priority'] < $this->heap[$parentIndex]['priority']) {
                [$this->heap[$index], $this->heap[$parentIndex]] = 
                    [$this->heap[$parentIndex], $this->heap[$index]];
                $index = $parentIndex;
            } else {
                break;
            }
        }
    }

    private function bubbleDown($index)
    {
        $size = count($this->heap);
        while (true) {
            $smallest = $index;
            $leftChild = 2 * $index + 1;
            $rightChild = 2 * $index + 2;

            if ($leftChild < $size && 
                $this->heap[$leftChild]['priority'] < $this->heap[$smallest]['priority']) {
                $smallest = $leftChild;
            }

            if ($rightChild < $size && 
                $this->heap[$rightChild]['priority'] < $this->heap[$smallest]['priority']) {
                $smallest = $rightChild;
            }

            if ($smallest !== $index) {
                [$this->heap[$index], $this->heap[$smallest]] = 
                    [$this->heap[$smallest], $this->heap[$index]];
                $index = $smallest;
            } else {
                break;
            }
        }
    }

    public function isEmpty()
    {
        return empty($this->heap);
    }
}

// Test
$pq = new MinHeap();
$pq->insert("Task A", 3);
$pq->insert("Task B", 1);
$pq->insert("Task C", 2);

while (!$pq->isEmpty()) {
    $item = $pq->extract();
    echo $item['value'] . " (Priority: " . $item['priority'] . ")\n";
}