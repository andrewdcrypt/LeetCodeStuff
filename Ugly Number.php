#Ugly Number

Description: Given an integer, return true if it is an ugly number false otherwise
prime factors limited to 2,3,5


Method One:

    Set the limited prime factors into an array
    Check the $n if it is a 1 or 0 true if 1 false if 0
    create a loop that first checks if any of the limited prime numbers can go into the number
    If so then continue to divide the $total until it is 1 which will return true
    Otherwise if it never reaches 1 then it will eventually exit loop 
    after going through all the limited prime factors and return false

    /**
     * @param Integer $n
     * @return Boolean
     */
    function isUgly($n) {
        $prime_factors = [2,3,5];
        
        if ($n == 1){
            return true;
        }elseif($n == 0){
            return false;
        }
        
        $index = count($prime_factors)-1;
        
        while($index >= 0){
            $remainder = $n % $prime_factors[$index];
            
            if ($remainder === 0){
                $total = $n / $prime_factors[$index];
                
                while($index >= 0){
                    
                    if ($total % $prime_factors[$index] === 0){
                        $total = $total / $prime_factors[$index];
                    }else{
                        $index--;
                    }
                     

                    if ($total === 1){
                        return true;
                    }
                }                
            }
            
            
            $index--;
        }
        
        return false;
        
    }