#Hamming Distance

Descrption: The Hamming distance between two integers is the number of positions at which the corresponding bits are different
Given two integers x and y, reutnr the Hamming distance between them

Method One:

Use php decbin to convert the x and y decimal to binary
get the length of the x and y binary string
Even out the length of x and y binary string with str_pad
iterate through both string and count the difference
return total difference

class Solution {

    /**
     * @param Integer $x
     * @param Integer $y
     * @return Integer
     */
    function hammingDistance($x, $y) {
        $x_bin_str = decbin($x);
        $y_bin_str = decbin($y);
              
        
        $x_str_len = strlen($x_bin_str);
        $y_str_len = strlen($y_bin_str);
        
        
        if ($x_str_len != $y_str_len){
            if ($x_str_len > $y_str_len){
                $y_bin_str = str_pad($y_bin_str, $x_str_len, "0", STR_PAD_LEFT);
            }else{
                $x_bin_str = str_pad($x_bin_str, $y_str_len, "0", STR_PAD_LEFT);
            }
        }
        
        
        $total_diff = 0;
        for($index = 0; $index < strlen($x_bin_str); $index++){
            if ($x_bin_str[$index] === null || $y_bin_str[$index] === null){
                break;
            }else{
                if ($x_bin_str[$index] != $y_bin_str[$index]){
                    $total_diff++;
                }                
            }
        }
        
        return $total_diff;

    }
}