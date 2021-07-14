#Maximum Product of Three Numbers

Description:
Given an integer array nums, find three numbers whose product is
maximum and return the maximum product.

Method One:

Sort the array and get the array length
since you are looking for the max you'll multiply 
the last 3 arrays values as one iteration to check,
the top 3 array values as another iteration to check,
and the top 2 array plust the one max last array values
return the total

class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function maximumProduct($nums) {

        sort($nums);
        $nums_len = count($nums);
        $total = max(
            $nums[0]*$nums[1]*$nums[2],
            $nums[0]*$nums[1]*$nums[$nums_len-1],
            $nums[$nums_len-1]*$nums[$nums_len-2]*$nums[$nums_len-3]
        );
        

        return $total;
    }
}