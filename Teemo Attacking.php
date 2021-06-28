#Teemo Attacking

Method One:

Finding difference between the current timeSeries value and the next timeSeries value

Loop through timeSeries set variable for $current_attack and $next_attack
then calculate difference between $current_attack and $next_attack
check the calc result aginast the duration and check if $next_attack is empty
if the calc result is greater than or equal to 2 then calculate the difference
between duration and current calc result into the current $calc variable
using new set $calc result add the difference between $duration and $calc into $effect_duration
now if original calc result was less than 2 then increment by 1
if orignal calc was instead greater than $duration then just add the duration into $effect_duration
return $effect_duration

class Solution {

    /**
    * @param Integer[] $timeSeries
    * @param Integer $duration
    * @return Integer
    */
    function findPoisonedDuration($timeSeries, $duration) {
        $effect_duration = 0;
        for($index = 0; $index < count($timeSeries); $index++){
            $current_attack = $timeSeries[$index];
            $next_attack = !empty($timeSeries[$index+1]) ? $timeSeries[$index+1] : 0;
            
            $calc = !empty($next_attack) ? ($next_attack - $current_attack) : $current_attack;
            
            if ($current_attack != $next_attack){
                if ($calc < $duration && !empty($next_attack)){
                    if ($calc >= 2){
                        $calc = $duration - $calc;
                        $effect_duration += $duration - $calc;
                    }else{
                        $effect_duration++;
                    }
                }else if ($calc >= $duration || empty($next_attack)){
                    $effect_duration += $duration;
                }              
            }

        }
        
        return $effect_duration;
        
    }
}


Method Two:

TIME LIMIT EXCEEDED

Loop through the timeSeries set the $current_attack and $next_attack variable
for each attack a $count_down loop based on the $duration will start
inside the $count_down loop it will check if a duplicate time exist
if it doesn't exist then it will check if it is the $current_attack or 
less than $next_attack or if $next_attack is empty
if these conditions are met then the $effect_duration is incremented
loop will continue through until finished and return $effect_duration

class Solution {

    /**
     * @param Integer[] $timeSeries
     * @param Integer $duration
     * @return Integer
     */
    function findPoisonedDuration($timeSeries, $duration) {
        $effect_duration = 0;
        
        for($index = 0; $index < count($timeSeries); $index++){
            $current_attack = $timeSeries[$index];
            $next_attack = $timeSeries[$index+1];
            
            $count_down = 0;
            while($count_down < $duration){
                if ($current_attack != $next_attack){
                    if (($current_attack+$count_down) == $current_attack || ($current_attack+$count_down) < $next_attack || empty($next_attack)){
                        $effect_duration++;
                    }                    
                }

                $count_down++;
            }
            
        }
        
        return $effect_duration;
    }
}