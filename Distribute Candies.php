#Distribute Candies

Description:
The doctor advised Alice to only eat n / 2 of the candies she has (n is always even). Alice likes her candies very much, and she wants to eat the maximum number of different types of candies while still following the doctor's advice.
Given the integer array candyType of length n, return the maximum number of different types of candies she can eat if she only eats n / 2 of them.

Method One:

set the $calc variable by taking $candyType length and dividing it by 2
set $unique_candy_len by getting the count of the unique candy types
Now set up the conditions where if unique_candy_len equal to as the allowed 
$calc diet amount then return $calc
else if $unique_candy_len > $calc then return $calc as you must follow the recommended diet
everything else return $unique_candy_len


class Solution {

    /**
     * @param Integer[] $candyType
     * @return Integer
     */
    function distributeCandies($candyType) {
        $calc = count($candyType)/2;
        $unique_candy_len = count(array_unique($candyType));
        
        if ($unique_candy_len == $calc){
            return $calc;
        }else if ($unique_candy_len > $calc){
            return $calc;
        }else{
            return $unique_candy_len;
        }
        
    }
}