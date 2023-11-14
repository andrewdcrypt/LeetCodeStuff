class Solution:
    def isAnagram(self, s: str, t: str) -> bool:
		"""
			Given two strings s and t, return true if t is an anagram of s, and false otherwise.

			An Anagram is a word or phrase formed by rearranging the letters of a different word or phrase, typically using all the original letters exactly once.
		"""
            
        # check if the two strings are even in length
        if len(s) == len(t):
            
			# sort the two strings to check if they are a match
            if sorted(s) == sorted(t):
                return True
            
			# if strings don't match its not a valid anagram
            else:
                return False
            
		# if the two strings are not even in length then it is not a valid anagram
        else:
            return False