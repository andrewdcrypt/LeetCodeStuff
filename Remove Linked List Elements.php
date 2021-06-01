# Remove Linked List Elements

//Stack: PHP

//Method One : Inefficient way of "removing" Linked List Elements

//Create array to store all node values expect the ones that is equal to $val. Then piece them back together and return the result.



    /**
     * @param ListNode $head
     * @param Integer $val
     * @return ListNode
     */
    function removeElements($head, $val) {
        
        $node_arr = [];

        while ($head != null){
            if ($head->val != $val){
                $new_node = new ListNode($head->val);
                $node_arr[] = $new_node;
                
            }
            
            $head = $head->next;
        }
        
        $index = count($node_arr)-1;
        while ($index > 0){
            $node_arr[$index-1]->next = array_pop($node_arr);
            $index--;
        }
        
        return $node_arr[0];
    }