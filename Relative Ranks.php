#Relative Ranks

Mehtod One:

Setup array with Gold/Silver/Bronze medal values
then use a loop to find the max values in the array for the top three medals
set the key and string medal values in the $placement_arr and change the max values
in the $score array to -1 so the max method can continue to find the max values
then loop through $score again to set the the other key and value placement in $placement_arr
while also updating the found max values in $score to -1
then sort by key and return the $placement_arr

class Solution {

    /**
     * @param Integer[] $score
     * @return String[]
     */
    function findRelativeRanks($score) {
        $top_three = ['Gold Medal', 'Silver Medal', 'Bronze Medal'];
        $placement_arr = [];
        
        while(!empty($top_three)){
            if ($score[array_search(max($score),$score)] === '-1'){
                break;
            }
            
            $placement_arr[array_search(max($score),$score)] = array_shift($top_three);
            $score[array_search(max($score),$score)] = '-1';
        }
        
        
        for($index = 4; $index <= count($score); $index++){
            $placement_arr[array_search(max($score),$score)] = strval($index);
            $score[array_search(max($score),$score)] = '-1';
        }
        
        
        ksort($placement_arr);
        
        return $placement_arr;
    }
}