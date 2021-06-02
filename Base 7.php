    #Base 7
    Convert given number to base 7

    Method One:
    Setup variables and loop $total should be $whole_num / base 7 and $remainder is $whole_num % base 7 to get the remainder
    check if remainder is less than 0 if so turn it to a positive so it doesn't include the "-"  when concat with the $base_str
    else just concat it with $base_str
    when $total is 0 it should break out of loop
    Need another loop to reverse the string as numbers are in reverse order

    /**
     * @param Integer $num
     * @return String
     */
    function convertToBase7($num) {
        
        $whole_num = $num;
        $base_str = "";
        
        while (true){
            
            $total = intval($whole_num / 7);
            $remainder = $whole_num % 7;
            
            if ($remainder < 0){
                $remainder *= -1;
                $base_str .= strval($remainder);

            }else{
                $base_str .= strval($remainder);
            }
            
            
            if ($total == 0){
                break;
            }            
            
            $whole_num = $total;
        }
        
        $reverse_str = "";
        
        for($index = strlen($base_str)-1; $index >= 0; $index--){
            $reverse_str .= $base_str[$index];
        }
                 
        return $num < 0 ? "-".$reverse_str : $reverse_str;
        
    }