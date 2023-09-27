<?php 
/*Task 2: Array Manipulation


Create an array called $numbers containing the numbers 1 to 10. Write a PHP function which takes the "$numbers" array as an 
argument to remove the even numbers from the array and print the resulting array.*/

// function removeEvenNumber($numbers){
   // $oddNumber=[];
   //  foreach($numbers as $number){
      //  if ($number%2!==0) {
         // $oddNumber[]=$number;
      //  }
   //  }
   //  return $oddNumber;
   //  
   //  
// }
// $numbers=range(1,10);
// $resultingNumber=removeEvenNumber($numbers);
// print_r($resultingNumber);
// 


function removeNumber($numbers){
   $oddNumber=[];
    foreach($numbers as $number){
       if ($number%2!==0) {
         $oddNumber[]=$number;
       }
    }
    return $oddNumber;
    
    
}
$numbers=[1,2,3,4,5,6,7,8,9,10];
$result=removeNumber($numbers);
print_r($result);


