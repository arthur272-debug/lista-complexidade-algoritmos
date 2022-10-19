<?php

class BinaryTree 
{
    public $left;
    public $right;
    public $data;

    public function __construct($data)
    {
        $this->left = null;
        $this->right = null;
        $this->data = $data;
    }

    /*
        Complexidade: O(n)

        Toda a árvore binária precisa ser varrida para que seus elemtentos sejam printados.
        Desse modo, para um árvore de "n" nós, "n" chamadas recursivas serao realizadas e por esse motivo
        dizemos que a complexidade é linear ou O(n);
    */
    public function traversePreOrder()
    {
        echo "<" . $this->data;

        if ($this->left != null) {
            $this->left->traversePreOrder();
        }

        if ($this->right != null) {
            $this->right->traversePreOrder();
        }

        echo ">";
    } 
}

$root = new BinaryTree(3);
$leftNode1 = new BinaryTree(7);
$rightNode1 = new BinaryTree(1);


$leftNode2 = new BinaryTree(5);
$rightNode3 = new BinaryTree(2);

$rightNode2 = new BinaryTree(10);

$root->left = $leftNode1;
$root->right = $rightNode1;

$leftNode1->left = $leftNode2;
$leftNode1->right = $rightNode3;

$rightNode1->right = $rightNode2;

$root->traversePreOrder();

