<?php
    $rollno = array(7001,7002,7003);

    echo "array <br>";
    foreach($rollno as $stud){
        echo " roll no : ".$stud."<br>";
    }

    echo "count() function : ". count($rollno)."<br>";

    echo "array access at index 2: ".$rollno[2]."<br>";
    $rollno[2] = 7004;

    echo "array update at index 2: ".$rollno[2]."<br>";

    echo "remove at element from first : using unset(arr)<br>";
    unset($rollno);

    echo "add using arr[]<br>";
    $rollno[] = 7004;

    echo "add using push()<br>";
    array_push($rollno,7005,7006);

    echo "add first index using array_unshift()<br>";
    array_unshift($rollno,6999);

    print_r($rollno);
    

?>