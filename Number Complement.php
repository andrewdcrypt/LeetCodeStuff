#Number Complement

Description: given the positive integer output its complement Number

Method One:

convert the given integer to binary during that process
invert the 1 to 0 and the 0 to 1 and save as $binary_num
while at the same time adding up the individual $binary_num
back to its decimal form

class Solution {

    /**
     * @param Integer $num
     * @return Integer
     */
    function findComplement($num) {
        $exp = 0;
        while($num != 0){
            $binary_num = ($num % 2) === 0 ? 1 : 0;
            
            $calc += $binary_num * (2**$exp);
            
            $num = intval($num / 2);
            $exp++;
        }
        
        return $calc;
    }
}