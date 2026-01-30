<?php
    $students = array(
        array(7001,"abc"),
        array(7002,"def"),
        array(7003,"ghi"),
    );

    echo "<b>RollNo. Name</b><br>";
    foreach($students as $stud){
        foreach($stud as $value){
            echo $value." ";
        }
        echo "<br>";
    }
?>