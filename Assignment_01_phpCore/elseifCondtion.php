<?php
    $x = date('H');
    if($x < 20){
        echo "first condition true.";
    } else if($x > 30){
        echo "second condition true.";
    }else{
        echo "condition false.";
    }
?>