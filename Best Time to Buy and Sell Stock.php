#Best Time to Buy and Sell Stock

Description:
You want to maximize your profit by choosing a single day to buy one stock and choosing a different day in the future to sell that stock.
Return the maximum profit you can achieve from this transaction. If you cannot achieve any profit, return 0.

Method One:

basically for this you find the min(s) and calculate the difference
with the next value if its bigger then it and compare total with your max value

Find the min by looping through and comparing the $min_value
if a $prices[$index] is greater than min then calcualte the difference
between $prices[$index] and $min_value and set $calc with the value
if $calc is greater than $max_value set it to $max_value
return $max_value;

class Solution {

/**
 * @param Integer[] $prices
 * @return Integer
 */
function maxProfit($prices) {
    $max_value = 0;
    $min_value = $prices[0];
    for($index = 0; $index < count($prices); $index++){
        if ($prices[$index] < $min_value){
            $min_value = $prices[$index];
        }else{
            $calc = $prices[$index] - $min_value;
            if ($calc > $max_value){
                $max_value = $calc;
            }
        }
    }
    
    return $max_value;
}
}


Method Two:

Time Limit Exceeded

create two loops one to loop through the first time to go one by one
setup a second loop inside that loop to calculate the the difference between the value from the first loop
and the future days loop value in the second loop and setting it to the $max_value if its only greater than
the current $max_value and at end of loop it returns the $max_value

class Solution {

    /**
     * @param Integer[] $prices
     * @return Integer
     */
    function maxProfit($prices) {
        $max_value = 0;
        
        for($index = 0; $index < count($prices); $index++){
            for($i = $index+1; $i < count($prices); $i++ ){
                $calc = $prices[$i] - $prices[$index];
                if ($max_value < $calc){
                    $max_value = $calc;
                }
            }
        }
        
        return $max_value;
    }
}