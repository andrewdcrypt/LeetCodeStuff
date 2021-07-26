#Move Zeroes

Description: Move all zeroes to the end of the array while maintaining the relative order of the non-zero elements

Method One:

set the array length outside of loop
in the loop search for 0 if its zero
append it to $nums and use unset() instead of array_splice()
to remove it from the current position without
changing the array keys

class Solution {

    /**
     * @param Integer[] $nums
     * @return NULL
     */
    function moveZeroes(&$nums) {
        $arr_len = count($nums);
        
        for($index = 0; $index < $arr_len; $index++){
            
            if ($nums[$index] === 0){
                $nums[] = $nums[$index];
                unset($nums[$index]);
            }
            
        }
        
        return null;
    }
}

Method Two:

Create an array to store the zeros
Loop through the array to remove them from $nums
store zeroes into $zero_arr
reset the $nums array keys
set index back 1 so it loops correctly after resetting the $nums array key
set $nums to the array_merge result

/**
     * @param Integer[] $nums
     * @return NULL
     */
    function moveZeroes(&$nums) {
        $index = 0;
        $zero_arr = [];

        while($index < count($nums)){
            if ($nums[$index] == 0){
                $zero_arr[] = $nums[$index];
                unset($nums[$index]);
                $nums = array_values($nums);
                $index--;
            }
            $index++;
        }
                
        $nums = array_merge($nums,$zero_arr);
    }
