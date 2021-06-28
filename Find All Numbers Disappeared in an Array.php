#Find All Numbers Disappeared in an Array

Method One:

create a array that has all the values
then compare the two arrays and returning
the array with values that are missing

class Solution {

    /**
    * @param Integer[] $nums
    * @return Integer[]
    */
    function findDisappearedNumbers($nums) {
        $start = 1;
        $comp_arr = [];
        while ($start <= count($nums)){
            $comp_arr[] = $start;
            $start++;
        }
        
        return array_diff($comp_arr, $nums);
    }
}