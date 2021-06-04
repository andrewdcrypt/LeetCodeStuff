#Invert Binary Tree

Description: given the root of binary tree, invert the tree and return its root

Method One:

Set base condition checking if root is NOT null
Set the $left and $right with recursion to return $root
As it loops through the node it switches the left and right node
Until it is null and returns the $root

/**
 * Definition for a binary tree node.
 * class TreeNode {
 *     public $val = null;
 *     public $left = null;
 *     public $right = null;
 *     function __construct($val = 0, $left = null, $right = null) {
 *         $this->val = $val;
 *         $this->left = $left;
 *         $this->right = $right;
 *     }
 * }
 */
class Solution {

    /**
     * @param TreeNode $root
     * @return TreeNode
     */
    function invertTree($root) {
        
        if ($root !== null){
            $left = $this->invertTree($root->left);
            $right = $this->invertTree($root->right);
            
            $root->left = $right;
            $root->right = $left;
        }
        
        
        return $root;
    }
}