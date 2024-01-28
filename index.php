<?php
include "./form.html"
?>


<?php
//print_r($_REQUEST['Courses']);

if(isset($_REQUEST['submit-btn'])){
   if($_REQUEST['name'] || $_REQUEST['e-mail'] || $_REQUEST['group'] || $_REQUEST['class'] || isset($_REQUEST['gender']) && isset($_REQUEST['Courses'])){
    echo"<h1>Your Given Values Are:</h1>";
    echo "Name:".$_REQUEST['name']."<br>";
    echo "E-mail:".$_REQUEST['e-mail']."<br>";
    echo "Group#:".$_REQUEST['group']."<br>";
    echo "Class-details:".$_REQUEST['class']."<br>";
    echo "Gender:".$_REQUEST['gender']."<br>";
    echo "your courses are: ";
for($i=0; $i<count($_REQUEST['Courses']); $i++){
         echo " ".$_REQUEST['Courses'][$i];
   };
   };


};
?>

