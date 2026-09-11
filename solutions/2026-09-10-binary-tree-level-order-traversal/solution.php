class TreeNode {
public $val;
public $left;
public $right;
function __construct($val = 0, $left = null, $right = null) {
$this->val = $val;
$this->left = $left;
$this->right = $right;
}
}

function levelOrder($root) {
$result = [];
if ($root === null) {
return $result;
}
$queue = [$root];
while (count($queue) > 0) {
$levelSize = count($queue);
$currentLevel = [];
for ($i = 0; $i < $levelSize; $i++) {
$node = array_shift($queue);
$currentLevel[] = $node->val;
if ($node->left !== null) {
$queue[] = $node->left;
}
if ($node->right !== null) {
$queue[] = $node->right;
}
}
$result[] = $currentLevel;
}
return $result;
}

