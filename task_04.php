<?php 
/*Task 4: Multidimensional Array


Create a multidimensional array called $studentGrades to store the grades of three students. Each student has grades for 
three subjects: Math, English, and Science. Write a PHP function which takes "$studentGrades" as an argument to calculate
 and print the average grade for each student.*/

 
 function averageGrade($studentGrades){
    foreach ($studentGrades as $index=>$grade) {
        $averageGrade=array_sum ($grade)/count($grade);
        echo "The average grade for  student $index: $averageGrade \n"  ;
    }
}

 

$studentGrades=[['math'=>78,'english'=>85,'scince'=>90],['math'=>85,'english'=>86,'scince'=>89],['math'=>75,'english'=>92,'scince'=>85]];
averageGrade($studentGrades);
