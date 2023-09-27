<?php 
/*Task 4: Multidimensional Array


Create a multidimensional array called $studentGrades to store the grades of three students. Each student has grades for 
three subjects: Math, English, and Science. Write a PHP function which takes "$studentGrades" as an argument to calculate
 and print the average grade for each student.*/
function averageGrade($studentGrades){
    $averageGrades=[];
   $index=[];
    
    foreach ($index as $key => $value) {
      $name=$key;
      $index[]=$name;
    }
    foreach ($studentGrades as $index=>$grade) {
      $averageGrade=array_sum ($grade)/count($grade);
      $averageGrades[]=$averageGrade;
    }

    foreach ($averageGrades as $index=>$averageGrade) {
      if ($averageGrade >= 80) {
       echo "The average grade for student $index: $averageGrade and  grade is A+. \n"  ;
      } elseif ($averageGrade >= 70) {
       echo "The average grade for student $index: $averageGrade and  grade is A.\n"  ;
      } elseif ($averageGrade >= 60) {
       echo "The average grade for student $index: $averageGrade and  grade is B. \n"  ;
      } elseif ($averageGrade >= 50) {
       echo "The average grade for student $index: $averageGrade and  grade is C. \n"  ;
      } elseif ($averageGrade >= 40) {
       echo "The average grade for student $index: $averageGrade and  grade is D. \n"  ;
      } else {
       echo "The average grade for student $index: $averageGrade and  grade is F. \n"  ;
      }
    }
}  
$studentGrades=[
           ['math'=>78,'english'=>85,'scince'=>90],
           ['math'=>85,'english'=>57,'scince'=>89],
           ['math'=>75,'english'=>72,'scince'=>45]
];

averageGrade($studentGrades);


