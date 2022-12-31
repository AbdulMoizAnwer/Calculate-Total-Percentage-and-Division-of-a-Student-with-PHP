<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculate the total, percentage and division</title>
</head>
<body>
    <!-- Write a PHP program to read roll no, name and marks of three subjects and calculate the total, percentage and division. Go to the editor
    Test Data :
    Input the Roll Number of the student :784
    Input the Name of the Student :James
    Input the marks of Physics, Chemistry and Computer Application : 70 80 90
    Expected Output :
    Roll No : 784
    Name of Student : James
    Marks in Physics : 70
    Marks in Chemistry : 80
    Marks in Computer Application : 90
    Total Marks = 240
    Percentage = 80.00
    Division = First -->
    <h1>Find Student's Marks, Percentage and Division</h1>
    <form action="#" method="POST">
        <label>Enter Student Name</label>
        <input type="text" name="s1"> <br><br>
        <label>Enter Student Roll No.</label>
        <input type="text" name="r1"> <br><br>
        <label>Enter Physics Marks</label>
        <input type="text" name="p1"> <br><br>
        <label>Enter Chemistry Marks</label>
        <input type="text" name="c1"> <br><br>
        <label>Enter Computer Application Marks</label>
        <input type="text" name="ca1"> <br><br>
        <input type="submit" name="submit">
    </form>
</body>
</html>

<?php
if(isset($_POST['submit'])){
    $name1 = $_POST['s1'];
    $rollno1 = $_POST['r1'];
    $n1 = $_POST['p1'];
    $n2 = $_POST['c1'];
    $n3 = $_POST['ca1'];
    $totalmarks = $n1 + $n2 + $n3;
    $percentage = ($totalmarks / 300) * 100;

    if($percentage >= 60 && $n1 >= 40 && $n2 >= 40 && $n3 >= 40){
        echo "Student name is " . $name1 . "<br/>";
        echo "Student Roll No. is " . $rollno1 . "<br/>"; 
        echo "Physics Marks: " . $n1 . "<br/>"; 
        echo "Chemistry Marks: " . $n2 . "<br/>";
        echo "Computer Application Marks: " . $n3 . "<br/>"; 
        echo "Total Marks of the student are " . $totalmarks . " Out of 300." . "<br/>";
        echo "Percentage of the student is " . round($percentage, 2) . "<br/>"; 
        echo "Division: First Division.";
    }
    else if($percentage >= 45 && $n1 >= 40 && $n2 >= 40 && $n3 >= 40){  
        echo "Student name is " . $name1 . "<br/>"; 
        echo "Student Roll No. is " . $rollno1 . "<br/>"; 
        echo "Physics Marks: " . $n1 . "<br/>";
        echo "Chemistry Marks: " . $n2 . "<br/>"; 
        echo "Computer Application Marks: " . $n3 . "<br/>"; 
        echo "Total Marks of the student are " . $totalmarks . " Out of 300." . "<br/>"; 
        echo "Percentage of the student is " . round($percentage, 2) . "<br/>"; 
        echo "Division: Second Division.";
    }
    else if($percentage >= 33 && $n1 >= 40 && $n2 >= 40 && $n3 >= 40){     
        echo "Student name is " . $name1 . "<br/>";
        echo "Student Roll No. is " . $rollno1 . "<br/>"; 
        echo "Physics Marks: " . $n1 . "<br/>"; 
        echo "Chemistry Marks: " . $n2 . "<br/>";
        echo "Computer Application Marks: " . $n3 . "<br/>";
        echo "Total Marks of the student are " . $totalmarks . " Out of 300." . "<br/>";
        echo "Percentage of the student is " . round($percentage, 2) . "<br/>";
        echo "Division: Third Division.";
    }
    else{
        echo "Sorry, you did not pass the tests.";    
    }
    }
?>
