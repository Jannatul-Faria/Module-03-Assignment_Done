<?php 

/*Task 5: Password Generator
reate a PHP function called generatePassword($length) that generates a random password of the specified length. 
he password should include lowercase letters, uppercase letters, numbers, and special characters (!@#$%^&*()_+).
Write a PHP program to generate a password with a length of 12 characters using this function and print the password.*/


function generatePassword($length){
   $sPcharacters="@#$%&*+*/!";
   $numbers=1234567890;
   $LOWERCASE="asdfghjklpoiuytrewqzxcvbnm";
   $uppercase="ASDFGHJKLPOIUYTREWQZXCVBNM";
   $characters=$LOWERCASE.$sPcharacters.$uppercase.$numbers;
   $password="";
   for ($i = 0; $i < $length; $i++){ 
        $password .=$characters[rand(0,strlen($characters)-1)];
  
   }
   return $password;
}
echo generatePassword(12);

























