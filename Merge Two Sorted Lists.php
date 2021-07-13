#Merge Two Sorted Lists

Description:
Merge two sorted linked lists and return it as a sorted list. The list should be made by splicing together the nodes of the first two lists.

Method One:

create an array of list nodes then loop through
$list_arr starting from the end merging the end node with the
node next to it in the array until only one array value remains
return the first value of the $list_arr

/**
 * Definition for a singly-linked list.
 * class ListNode {
 *     public $val = 0;
 *     public $next = null;
 *     function __construct($val = 0, $next = null) {
 *         $this->val = $val;
 *         $this->next = $next;
 *     }
 * }
 */
class Solution {

    /**
     * @param ListNode $l1
     * @param ListNode $l2
     * @return ListNode
     */
    function mergeTwoLists($l1, $l2) {
        
        $list_arr = [];
        
        while ($l1 !== null || $l2 !== null){
            if (($l1->val <= $l2->val || $l2 === null) && $l1 !== null){
                $list_arr[] =  new ListNode($l1->val);
                $l1 = $l1->next;
            }else{
                $list_arr[] = new ListNode($l2->val);
                $l2 = $l2->next;
            }
        }
        
        for($index = count($list_arr)-1; $index >= 1; $index--){
            $node = array_pop($list_arr);
            $list_arr[$index-1]->next = $node;
        }
        
        return $list_arr[0];
    }
}