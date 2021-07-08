#Detect Capital

Description:
We define the usage of capitals in a word to be true when one of the following cases holds:

    All letters in this word are capitals, like "USA".
    All letters in this word are not capitals, like "leetcode".
    Only the first letter in this word is capital, like "Google".


Method One:

Loop through the string put the upper case index into
the $upper_case_arr and lower case index into the
$lower_case_arr.
Afterwards check if the $upper_case_arr and $lower_case_arr
meets the condition to be true if so return true.
Everything else will return false


class Solution {

    /**
     * @param String $word
     * @return Boolean
     */
    function detectCapitalUse($word) {
        $lower_case_arr = [];
        $upper_case_arr = [];
        
        for($index = 0; $index < strlen($word); $index++){
            if (preg_match('~^\p{Lu}~u', $word[$index])){
                $upper_case_arr[] = $index;
            }else{
                $lower_case_arr[] = $index;
            }
            
        }
        
        $upper_case_len = count($upper_case_arr);
        $lower_case_len = count($lower_case_arr);
        
        
        if (count($lower_case_arr) == strlen($word) ||  count($upper_case_arr) == strlen($word)){
            return true;
        }else if ($upper_case_len == 1 && $lower_case_len == strlen($word)-1){
            if ($upper_case_arr[0] == 0  && preg_match('~^\p{Lu}~u', $word[$upper_case_arr[0]])){
                return true;
            }
        }
        
        
        return false;
    }
}