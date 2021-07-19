#Intersection of Two Arrays II

Description:
Given two integer arrays nums1 and nums2, return an array of their intersection.
Each element in the result must appear as many times as it shows in both arrays and you may return the result in any order.

Method One:

The aim here is to loop through one of the shorter arrays either $nums1 or $nums2
once the shortest array is found pop the value from it and start checking to see
if the value exist in the other array if so remove it from that array and add
to the $new_array continue doing so until there are no more values to pop off
from the shortest array loop will end
return $new_array

class Solution {

    /**
     * @param Integer[] $nums1
     * @param Integer[] $nums2
     * @return Integer[]
     */
    function intersect($nums1, $nums2) {
        $new_array = [];
        $num_one_len = count($nums1);
        $num_two_len = count($nums2);
        
        while(!empty($nums1) && !empty($nums2)){
            
            if ($num_one_len < $num_two_len){
                $needle = array_pop($nums1);
                $arr_check = &$nums2;
            }else{
                $needle = array_pop($nums2);
                $arr_check = &$nums1;
            }
            
            $key = array_search($needle, $arr_check);

            if ($key !== false){
                $arr_value = array_splice($arr_check, $key, 1);
                
                $new_array[] = $arr_value[0];                
            }
        }
        
        return $new_array;
        
    }
}