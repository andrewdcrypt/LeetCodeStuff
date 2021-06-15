<?php

#Reverse Words in a String III

Method One:

Split the words in the string into an array
Iterate through the array and loop through the string starting from the end of the word
Append the characters of the word and then append the reverse word onto a variable
Once the loop is done trim the ending space and return the final string

class Solution {

    /**
     * @param String $s
     * @return String
     */
    function reverseWords($s) {
        $str_arr = explode(" ",$s);
        
        for($index = 0; $index < count($str_arr); $index++){
            
            $end = strlen($str_arr[$index]) - 1;
            
            $reverse_str = "";
            while($end >= 0){
                $reverse_str .= $str_arr[$index][$end];
                $end--;
            }
            
            $final_str .= $reverse_str." ";
        }
        
        return trim($final_str);
        
    }
    }