<?php

class Graph {
    private $vertices;
    private $adjacencyList;

    public function __construct($vertices) {
        $this->vertices = $vertices;
        $this->adjacencyList = [];
        
        for ($i = 0; $i < $vertices; $i++) {
            $this->adjacencyList[$i] = [];
        }
    }

    public function addEdge($u, $v) {
        $this->adjacencyList[$u][] = $v;
        $this->adjacencyList[$v][] = $u;
    }

    public function bfs($startVertex) {
        $visited = array_fill(0, $this->vertices, false);
        $queue = [];
        $result = [];

        $visited[$startVertex] = true;
        array_push($queue, $startVertex);

        while (!empty($queue)) {
            $vertex = array_shift($queue);
            $result[] = $vertex;

            foreach ($this->adjacencyList[$vertex] as $neighbor) {
                if (!$visited[$neighbor]) {
                    $visited[$neighbor] = true;
                    array_push($queue, $neighbor);
                }
            }
        }

        return $result;
    }
}

// Example usage
$graph = new Graph(6);
$graph->addEdge(0, 1);
$graph->addEdge(0, 2);
$graph->addEdge(1, 3);
$graph->addEdge(2, 4);
$graph->addEdge(3, 5);

echo "BFS starting from vertex 0: ";
print_r($graph->bfs(0));
?>