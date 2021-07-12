#Valid Parentheses

Description:
Given a string s containing just the characters '(', ')', '{', '}', '[' and ']', determine if the input string is valid.
An input string is valid if:
    Open brackets must be closed by the same type of brackets.
    Open brackets must be closed in the correct order.


Method One:

create a stack and add onto the stack while checking
if it is the closing parentheses if the top of the stack
matches the closing paraenthese during the loop it will remove
the top paraenthese from the stack if for some reason the closing
paraenthese couldn't find the begining paraenthese then return false
otherwise after loop ends and $stack_arr is empty then return true
false otherwise

class Solution {

    /**
     * @param String $s
     * @return Boolean
     */
    function isValid($s) {
        $stack_arr = [];
        $str_len = strlen($s);
        
        for($index = 0; $index < $str_len; $index++){
            if (!empty($stack_arr)){
                if ($s[$index] === '}'){
                    if ($stack_arr[0] === '{'){
                        array_shift($stack_arr);
                    }else{
                        return false;
                    }
                }else if ($s[$index] === ']'){
                    if ($stack_arr[0] === '['){
                        array_shift($stack_arr);
                    }else{
                        return false;
                    }
                }else if ($s[$index] === ')'){
                    if ($stack_arr[0] === '('){
                        array_shift($stack_arr);
                    }else{
                        return false;
                    }
                }else{
                    array_unshift($stack_arr, $s[$index]);
                }
            }else{
                array_unshift($stack_arr, $s[$index]);
            }
        }

        return empty($stack_arr) ? true : false;
    }
}