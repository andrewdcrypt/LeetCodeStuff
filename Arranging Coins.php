#Arranging Coins

Description: 
Given the integer n, return the number of complete rows of the staircase you will build.

Method One:


basically using the loop to set how many coins is needed each row
and calculate the leftover $n amount after each row
as long as $n is greater than or equal to the coins needed
it will be considered completed

set up loop that will loop through given $n
set condition that checks if $n >= $coin
using $n subtract it with the $coin and
increment $stair_completed by 1 otherwise break
return $stair_completed


class Solution {

    /**
     * @param Integer $n
     * @return Integer
     */
    function arrangeCoins($n) {
        $stair_completed = 0;
        for($coin = 1; $coin <= $n; $coin++){
            if ($n >= $coin){
                $n = $n - $coin;
                $stair_completed++;
            }else{
                break;
            }
        }
        
        return $stair_completed;
    }
}