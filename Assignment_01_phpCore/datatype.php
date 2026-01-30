<?php
    // data type in php

    echo "datatype <br>";
    $var_str = "jay";
    echo "1. string : text values(".$var_str.")<br>";

    $var_int = 10;
    echo "2. int : whole number(".$var_int.")<br>";

    $var_float = 10.5;
    echo "3. float : decimal number(".$var_float.")<br>";

    $var_bool = true;
    echo "4. bool : boolean[true/false] values(".$var_bool.")<br>";

    $val_null = null;
    echo "5. null : null value<br>";

    $val_array = array(10,20,30);
    echo "6. array : multiple values(";
    print_r ($val_array);
    echo ")<br>";

    echo "7. object : (class.php)<br>";

    echo "8. resource : reference external resource.";
    echo "   The special resource datatype is not an actual data type.It holds a reference to an external resource,such as database connection or a file handler."
?>