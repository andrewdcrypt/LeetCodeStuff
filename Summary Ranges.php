    
    #Summary Ranges
    Return smallest sorted list of ranges that cover all numbers in the array exactly.

    Method One: 
    Setup variables for $start_range and $end_range then Setup array to store the ranges and single values. 
    Use a loop to go through $nums array. 
    Check if the $start_range variable has a value other than null set.
    Check if the current nums index is part of the range. If it is then set the $end_range value
    If the current nums index isn't part of the range then check if $end_range is 0. If so add it to the range_arr list as a string value
    else add the $start_range and $end-range as string value to the range_arr list
    reset the $start_range to null and $end_range to 0
    increment the index for the loop



    /**
     * @param Integer[] $nums
     * @return String[]
     */
    function summaryRanges($nums) {
        $index = 0;
        $start_range = null;
        $end_range = 0;
        
        $range_arr = [];
        
        while($index < count($nums)){
            if($start_range === null){
                $start_range = $nums[$index];
            }
            
            if ($nums[$index]+1 === $nums[$index+1] || $nums[$index]-1 === $nums[$index+1]){
                $end_range = $nums[$index+1];
            }else{
                if ($end_range === 0){
                    $range_arr[] = strval($start_range);
                }else{
                    $range_arr[] = strval($start_range)."->".strval($end_range);   
                }
                $start_range = null;
                $end_range = 0;
            }
            
            $index++;
        }
        
        return $range_arr;
    }