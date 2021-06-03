#Assign Cookies

Description: Assume you are an awesome parent and want to give your children some cookies. But, you should give each child at most one cookie. 
Your goal is to maximize the number of your content children and output the maximum number.


Method One:

Sort the child and cookie array ($g and $s) so the max of each array will be at the top of the stack
Take the top of the cookie stack 
go through the child stack and see which one can be satisfied with the cookie
increment $count with each satifised child 
Loop process until no more child or cookie

/**
     * @param Integer[] $g
     * @param Integer[] $s
     * @return Integer
     */
    function findContentChildren($g, $s) {
        $count = 0;
        sort($g);
        sort($s);
        
        while(!empty($s)){
            $cookie = array_pop($s);
    
            if (empty($g)){
                break;
            }
            
            while(!empty($cookie) && !empty($g)){
                if ($cookie >= array_pop($g)){
                    $cookie = 0;
                    $count++;
                    break;
                }
            }

        }
       
        return $count;
    }