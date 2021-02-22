<?php


$a=10;
gettype($a);
echo "br";
settype($a, "character");


$course_slot = "A2";
if($course_slot=="A2"){
    echo "OSP";
    echo "OSP A2 faculty: Jayakumar S";
    echo "OSP slot A2";
}


else{
    echo "OSP A1 faulty unkown";
    echo "OSP slot A1";
}


$semester = "Winter2020";
switch($semester){
    case "Fall2020":
        echo "OSP Fall Semester <br>";
        break;

    case "Winter2020":
        echo "OSp Winter Semester <br>";
        break;
}


?>