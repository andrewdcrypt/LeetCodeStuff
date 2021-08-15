#Two Sum

Method One:

func twoSum(nums []int, target int) []int {
    
    for i := 0; i < len(nums); i++ {
        
        total := nums[i]
        for index := i+1; index < len(nums); index++ {
            
            total += nums[index]
            
            if total != target {
                total -= nums[index]
            }else{
                return []int{i, index}    
            }
            
        }        
    }
    
    return []int{}
}
