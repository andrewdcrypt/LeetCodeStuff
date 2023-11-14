class Solution:
    def twoSum(self, nums: List[int], target: int) -> List[int]:
		"""	
		Given an array of integers nums and an integer target, return indices of the two numbers such that they add up to target.

		You may assume that each input would have exactly one solution, and you may not use the same element twice.

		You can return the answer in any order.
		"""		
		
        # enumerate nums list to get key and value and loop through
        for key, num in enumerate(nums):
            # determine if a calculated value exist by subtracting taget with the num value
            calc = target - num
            try:
                index = nums.index(calc)
                
                # check to make sure the calculated value index is not the same index as the key
                if key != index:
                    
                    total = num + nums[index]
                    
					# if total match target then return a list of the key and index
                    if target == total:
                        return [key, index]

			# if calculated value doesn't exist continue to the next number in the list
            except ValueError as ve:
                continue