#Reverse String II

Description:
Given a string s and an integer k, reverse the first k characters for every 2k characters counting from the start of the string.

If there are fewer than k characters left, reverse all of them. If there are less than 2k but greater than or equal to k characters,
then reverse the first k characters and left the other as original.

Method One:

Get the length of the $s string, setup $count to equal $k
setup $reverse to false. setup three string variables
one to house the reverse string, one to house the normal string,
and the last one to concat both the reverse string and normal string
Using a loop to check if it is the reverse string if so concat them into
$reverse_str and decrement the $count then check if $count is zero or if the
loop is one away from the end of the loop if so concat the $reverse_str result
to $final_str and clear $reverse_str afterwards for $next set and switch the
$reverse option to true to signify reverse has already happen. Do it similar in the
else statement. At end of loop return $final_str

class Solution {

    /**
     * @param String $s
     * @param Integer $k
     * @return String
     */
    function reverseStr($s, $k) {
        $str_len = strlen($s);
        $count = $k;
        $reverse = false;
        
        $reverse_str = '';
        $normal_str = '';
        $final_str = '';
        
        for($index = 0; $index < $str_len; $index++){
            if ($reverse == false){
                $reverse_str .= $s[$index];
                $count--;
                
                if ($count == 0 || $index + 1 == $str_len){
                    $final_str .= strrev($reverse_str);
                    $reverse_str = '';
                    $reverse = true;
                }
            }else{
                $normal_str .= $s[$index];
                $count++;
                if ($count == $k || $index + 1 == $str_len){
                    $final_str .= $normal_str;
                    $normal_str = '';
                    $reverse = false;
                }
            }
            
        }
        
        
        return $final_str;
        
    }
}