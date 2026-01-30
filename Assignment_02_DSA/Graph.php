<?php

class Node
{
    public $data;
    public $left, $right;

    public function __construct($data)
    {
        $this->data = $data;
        $this->left = $this->right = null;
    }

    public function insertBST($root, $data)
    {
        if ($root == null) {
            return new Node($data);
        } else if ($root->data > $data) {
            $root->left = $this->insertBST($root->left, $data);
        } else {
            $root->right = $this->insertBST($root->right, $data);
        }
        return $root;
    }
}

function preOrder($root)
{
    if ($root != null) {
        // pre-order : V L R
        echo $root->data . " ";
        preOrder($root->left);
        preOrder($root->right);
    }
}

function inOrder($root)
{
    if ($root != null) {
        // in-order : L V R
        inOrder($root->left);
        echo $root->data . " ";
        inOrder($root->right);
    }
}

function postOrder($root)
{
    if ($root !=  null) {
        // post-order : L R V
        postOrder($root->left);
        postOrder($root->right);
        echo $root->data . " ";
    }
}
