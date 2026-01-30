<?php

class Graph {
    private $vertices;
    private $adjacencyMatrix;

    public function __construct($vertices) {
        $this->vertices = $vertices;
        // Initialize adjacency matrix with zeros
        $this->adjacencyMatrix = array_fill(0, $vertices, array_fill(0, $vertices, 0));
    }

    public function addEdge($u, $v, $weight = 1) {
        if ($u >= 0 && $u < $this->vertices && $v >= 0 && $v < $this->vertices) {
            $this->adjacencyMatrix[$u][$v] = $weight;
            // For undirected graph, uncomment the line below
            // $this->adjacencyMatrix[$v][$u] = $weight;
        }
    }

    public function removeEdge($u, $v) {
        if ($u >= 0 && $u < $this->vertices && $v >= 0 && $v < $this->vertices) {
            $this->adjacencyMatrix[$u][$v] = 0;
            // For undirected graph, uncomment the line below
            // $this->adjacencyMatrix[$v][$u] = 0;
        }
    }

    public function displayMatrix() {
        echo "Adjacency Matrix:\n";
        for ($i = 0; $i < $this->vertices; $i++) {
            for ($j = 0; $j < $this->vertices; $j++) {
                echo $this->adjacencyMatrix[$i][$j] . " ";
            }
            echo "\n";
        }
    }

    public function getNeighbors($vertex) {
        $neighbors = [];
        for ($i = 0; $i < $this->vertices; $i++) {
            if ($this->adjacencyMatrix[$vertex][$i] != 0) {
                $neighbors[] = $i;
            }
        }
        return $neighbors;
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

$graph->displayMatrix();

echo "\nNeighbors of vertex 1: ";
print_r($graph->getNeighbors(1));
?>