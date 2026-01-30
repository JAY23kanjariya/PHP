<?php

class Graph {
    private $vertices;
    private $adjacencyList;

    public function __construct($vertices) {
        $this->vertices = $vertices;
        $this->adjacencyList = array();
        
        for ($i = 0; $i < $vertices; $i++) {
            $this->adjacencyList[$i] = array();
        }
    }

    public function addEdge($u, $v) {
        $this->adjacencyList[$u][] = $v;
    }

    public function dfs($startVertex) {
        $visited = array_fill(0, $this->vertices, false);
        echo "DFS Traversal: ";
        $this->dfsUtil($startVertex, $visited);
        echo "\n";
    }

    private function dfsUtil($vertex, &$visited) {
        $visited[$vertex] = true;
        echo $vertex . " ";

        foreach ($this->adjacencyList[$vertex] as $adjacentVertex) {
            if (!$visited[$adjacentVertex]) {
                $this->dfsUtil($adjacentVertex, $visited);
            }
        }
    }
}

// Example usage
$graph = new Graph(5);
$graph->addEdge(0, 1);
$graph->addEdge(0, 2);
$graph->addEdge(1, 2);
$graph->addEdge(1, 3);
$graph->addEdge(2, 3);
$graph->addEdge(3, 4);

$graph->dfs(0);
?>