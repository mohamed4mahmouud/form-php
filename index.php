<?php
include "./form.html"
?>


<?php
//print_r($_REQUEST['Courses']);

if(isset($_REQUEST['submit-btn'])){
   if($_REQUEST['name'] || $_REQUEST['e-mail'] || $_REQUEST['group'] || $_REQUEST['class'] || isset($_REQUEST['gender'])){
    echo"<h1>Your Given Values Are:</h1>";
    echo "Name:".$_REQUEST['name']."<br>";
    echo "E-mail:".$_REQUEST['e-mail']."<br>";
    echo "Group#:".$_REQUEST['group']."<br>";
    echo "Class-details:".$_REQUEST['class']."<br>";
    echo "Gender:".$_REQUEST['gender']."<br>";
   };
   $Courses = $_REQUEST['Courses'];
echo "your courses are: ";
for($i=0; $i<count($Courses); $i++){
    if($Courses){
         echo " ".$Courses[$i];
    };
    
   };
};
?>

