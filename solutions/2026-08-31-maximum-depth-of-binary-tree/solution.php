<?php

class TreeNode {
    public $val;
    public $left;
    public $right;

    public function __construct($val = 0, $left = null, $right = null) {
        $this->val = $val;
        $this->left = $left;
        $this->right = $right;
    }
}

function maxDepth($root) {
    if ($root === null) {
        return 0;
    }
    $leftDepth = maxDepth($root->left);
    $rightDepth = maxDepth($root->right);
    return 1 + max($leftDepth, $rightDepth);
}
