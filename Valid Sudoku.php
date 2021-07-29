#Valid Sudoku

Description:
Determine if a 9 x 9 Sudoku board is valid. Only the filled cells need to be validated according to the following rules:
    Each row must contain the digits 1-9 without repetition.
    Each column must contain the digits 1-9 without repetition.
    Each of the nine 3 x 3 sub-boxes of the grid must contain the digits 1-9 without repetition.
Note:
    A Sudoku board (partially filled) could be valid but is not necessarily solvable.
    Only the filled cells need to be validated according to the mentioned rules.


Method One:

So doing the first two validating the column and row is simple enough
you'll have an array variable for column and row and add to them as you loop through
the board while at the same time checking if the value you are adding already exist in the array
returning false if it exist and continuing otherwise

Now the box validation is more annoying for me on this method as I decided to loop through the $col_arr
to get the boxes of the board. 

Using $box variable to have the values saved to the right $box_arr position
using $count to prevent it from looping infinitely and looping a couple more rounds
using $row_start and $row_limit to to set the the inner loop onto the next 3 rows

adding a condition to increment $box when it reaches 3/6/9
adding a conditional to reloop at $col_index 9 so it gets the other 6 boxes
adding a conditional to check if $col_index is 9 and ignore it

now the inner loop has the conditional that will check if $box_arr has the existing value if so
return false otherwise it'll finish adding into the $box_arr and return true


class Solution {

    /**
     * @param String[][] $board
     * @return Boolean
     */
    function isValidSudoku($board) {
        
        $row_arr = [];
        $col_arr = [];
        $box_arr = [];
        
        for($col_index = 0; $col_index < 9; $col_index++){

            for($row_index = 0; $row_index < 9; $row_index++){

                if (in_array($board[$row_index][$col_index],$row_arr[$row_index]) && $board[$row_index][$col_index] != "."){

                    return false;
                }else{
                    $row_arr[$row_index][] = $board[$row_index][$col_index];
                }

                if (in_array($board[$col_index][$row_index],$col_arr[$row_index]) && $board[$col_index][$row_index] != "."){
                                           
                    return false;
                }else{
                    $col_arr[$row_index][] = $board[$col_index][$row_index];    
                }                    
                
            }
                     
        }
        
        $box = 0;
        $count = 1;
        $row_start = 0;
        $row_limit = 3;
        for($col_index = 0; $col_index <= count($col_arr); $col_index++){
            
            if (($col_index % 3 == 0 && $col_index != 0)){
                $box++;
            }
            
            if ($col_index == 9 && $count != 3){
                $col_index = 0;
                $row_start += 3;
                $row_limit += 3;
                $count++;
            }            
            
            if ($col_index != 9){
                for($rows = $row_start; $rows < $row_limit; $rows++){
                    if (in_array($col_arr[$col_index][$rows], $box_arr[$box]) && $col_arr[$col_index][$rows] != "."){
                        return false;
                    }else{
                        $box_arr[$box][] = $col_arr[$col_index][$rows];
                    }
                }                
            }

        }           
        
        
        return true;
    }
}