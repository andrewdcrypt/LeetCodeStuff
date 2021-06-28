#Implement strStr()

Description: return the index of the fist occurence of the needle in haystack,
or -1 if needle is not part of haystack.

Method one:

Use php strpos() to check if $needle exist in haystack
makes sure strpos returned index value of 0 is treated as a valid response
return the strpos index value when those two conditions are met
then check if $haystack and $needle is empty if it is return 0
then check if only $needle is empty if it is return 0
everything else return -1

class Solution {

/**
 * @param String $haystack
 * @param String $needle
 * @return Integer
 */
function strStr($haystack, $needle) {
    if (strpos($haystack,$needle) || strpos($haystack,$needle) === 0){
        return strpos($haystack,$needle);
    }elseif(empty($haystack) && empty($needle)){
        return 0;
    }elseif(empty($needle)){
        return 0;
    }
    
    
    return -1;
}
}