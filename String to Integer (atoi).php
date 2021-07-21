#String to Integer (atoi)

Description:
Implement the myAtoi(string s) function, which converts a string to a 32-bit signed integer (similar to C/C++'s atoi function).

The algorithm for myAtoi(string s) is as follows:

    Read in and ignore any leading whitespace.
    Check if the next character (if not already at the end of the string) is '-' or '+'. Read this character in if it is either. This determines if the final result is negative or positive respectively. Assume the result is positive if neither is present.
    Read in next the characters until the next non-digit charcter or the end of the input is reached. The rest of the string is ignored.
    Convert these digits into an integer (i.e. "123" -> 123, "0032" -> 32). If no digits were read, then the integer is 0. Change the sign as necessary (from step 2).
    If the integer is out of the 32-bit signed integer range [-231, 231 - 1], then clamp the integer so that it remains in the range. Specifically, integers less than -231 should be clamped to -231, and integers greater than 231 - 1 should be clamped to 231 - 1.
    Return the integer as the final result.

Note:
    Only the space character ' ' is considered a whitespace character.
    Do not ignore any characters other than the leading whitespace or the rest of the string after the digits.

Method One:

Setup a loop to check the string characters
if it is anything aside from the allowed/ignored characters
then it will return 0 otherwise as long as its a integer
loop will break and convert the string to integer value
if the $int_val is greater than  the 32 signed value then it will
return the capped value same if it is less than. Everything else
will just return $int_val

class Solution {

    /**
     * @param String $s
     * @return Integer
     */
    function myAtoi($s) {
        for($index = 0; $index < strlen($s); $index++){
            preg_match('/[a-zA-Z.]/',$s[$index], $char_check);
            if (!empty($char_check)){
                return 0;
            }else{
                if ($s[$index] !== ' '){
                    break;
                }
            }            
        }
        
        
        preg_match('/[-?+\d]+/',$s,$nums);
        $int_val = intval($nums[0]);
        
        if ($int_val > 2147483647){
            return 2147483647;
        }else if ($int_val < -2147483648){
            return -2147483648;
        }else{
            return $int_val;
        }
        
    }
}