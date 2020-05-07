<?php


class Node
{
    public $rootNode;
    public $leftNode;
    public $rightNode;

    public function __construct($rootNode)
    {
        $this->rootNode = $rootNode;
        $this->leftNode = null;
        $this->rightNode = null;
    }

    public function __toString()
    {
        return "$this->rootNode";
    }

}

class CreateBinaryTreeStructure
{
    public $rootNode;
    public $leftOrRightDecision;

    public function __construct()
    {
        $this->rootNode = null;
        $this->leftOrRightDecision = null;
    }

    public function createTree($root, $lower = null, $higher = null)
    {
        if(!isset($this->rootNode)){
            $node = $this->rootNode = new Node($root);
        }

        if(isset($lower)){
            if(!is_array($lower)){
                $node->leftNode = new Node($lower);
            }
        }

        if(isset($higher)){
            if(!is_array($higher)){
                $node->rightNode = new Node($higher);
            }
        }

        return $node;
    }

}

class ValidateBST 
{
    public $boolean;
    public $node;
    public function __construct($node){
        $this->node = $node;
        if(!isset($node->leftNode)){
            $this->boolean = false;
        }elseif(!isset($node->rightNode)){
            $this->boolean = false;
        }else{
            $this->boolean = true;
        }

        if($node < $node->leftNode){
            $this->boolean = false;
        } elseif ($node > $node->rightNode) {
            $this->boolean = false;
        } else {
            $this->boolean = true;
        }
    }

    public function __toString()
    {
        return $this->boolean ? "benar" : "salah";
    }
}

$binaryTreeStructureClass = new CreateBinaryTreeStructure;

$root = 8;
$lower = 5;
$higher = 9;
// $higher = [
//     12 => [
//         9,
//         15
//     ]
// ];

$nodeTree = $binaryTreeStructureClass->createTree($root, $lower, $higher);

echo "Binary Search Tree mempunyai syarat, yaitu : <br>
<ul>
<li>Sub Tree Sebelah Kiri harus lebih kecil daripada Akarnya</li>
<li>Sub Tree Sebelah Kanan harus lebih Besar daripada Akarnya</li>
<li>Kedua sub juga serupa dengan BST</li>
</ul>
";

echo "akar $nodeTree mempunyai sub kiri $nodeTree->leftNode dan sub kanan $nodeTree->rightNode";
echo "<br>";

echo "Validasi BST adalah : " . new ValidateBST($nodeTree);
