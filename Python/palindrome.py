def isPalindrome(s): 
    # Calling reverse function 
   if len(s) <= 1 :
      return True
   if s[0] == s[len(s) - 1] :
      return isPalindrome(s[1:len(s) - 1])
   else :
      return False
    
  
# Driver code 
Palindrome_input_Variable = [ ' AnnA ' , ' SoloS ' , ' RotatoR ' , ' RadaR ' , ' SagaS ' , ' RotoR ' , ' TenT ' , ' RepapeR ' , ' CiviC ' , ' KayaK ' , ' Lever ' , ' MadaM ' , ' RacecaR ' , ' StatS ' , ' Redder ' , ' Wow ' , ' MoM ' , ' RefeR ' , ' NooN ']

print( " PALINDROME CHECK PROGRAM " )
for i in Palindrome_input_Variable:
   ans = isPalindrome(i) 
   if ans == 1: 
    print( " The given string  ", "'" , i , "' ","is a palindrome") 
   else: 
    print( " The given string  " , "'" , i , "' ","is not a palindrome")
