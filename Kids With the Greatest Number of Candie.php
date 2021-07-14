#Kids With the Greatest Number of Candies

Description:
Given the array candies and the integer extraCandies, where candies[i] represents the number of candies that the ith kid has.

For each kid check if there is a way to distribute extraCandies among the kids such that he or she can have the greatest number
of candies among them. Notice that multiple kids can have the greatest number of candies.

Method One:

Find the highest candy in the $candies array
then compare it to the sum of each candy amount in the array
with the $extraCandies if it is greather than or equal to
$max_candy then add true to the $arr_boolean else false is
added instead once loop is done return $arr_boolean

class Solution {

    /**
     * @param Integer[] $candies
     * @param Integer $extraCandies
     * @return Boolean[]
     */
    function kidsWithCandies($candies, $extraCandies) {
        $arr_boolean = [];
        $max_candy = max($candies);
        
        while(!empty($candies)){
            $candy_amount = array_shift($candies);
            
            $calc = $candy_amount + $extraCandies;
            
            if ($calc >= $max_candy){
                $arr_boolean[] = true;
            }else{
                $arr_boolean[] = false;
            }               
        }
        
        return $arr_boolean;
    }
}