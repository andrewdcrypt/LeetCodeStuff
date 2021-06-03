#Subtree of Another Tree

Description: Check root tree if there is a exact duplicate of the sub tree that exist within it

Method One:

Set base condition
Check if the root tree is the same as the subRoot tree
Set the left and right variable recursion for it to loop 
Check if $left or $right returns true to indicate a duplicate subRoot tree exist within root tree

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
     * @param TreeNode $subRoot
     * @return Boolean
     */
    function isSubtree($root, $subRoot) {
        
        if ($root === null){
            return false;
        }
        
        
        if($root == $subRoot){
            return true;
        }
        
        
        $left = $this->isSubtree($root->left, $subRoot);
        $right = $this->isSubtree($root->right, $subRoot);
        
        if ($left || $right){
            return true;
        }
        
    }
}
