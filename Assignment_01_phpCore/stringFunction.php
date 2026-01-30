<?php
    $var_str = "  PHP has many built-in string functions.";

    echo "string : ".$var_str."<br><br>";
    
    echo "<b>String function </b><br>";
    
    echo "string length using <b>strlen()</b> : ".strlen($var_str)."<br>";
    
    echo "string word count <b>str_word_count()</b> : ". str_word_count($var_str)."<br>";
    
    echo "string reverse <b>strrev()</b> : ". strrev($var_str)."<br>";
   
    echo "string trim <b>trim()</b> : ". trim($var_str)."<br>";
   
    echo "string strpos for 'many' word <b>strpos()</b> : ". strpos($var_str,"many")."<br>";
   
    echo "string uppercase <b>strtoupper()</b> : ". strtoupper($var_str)."<br>";
   
    echo "string uppercase <b>strtolower()</b> : ". strtolower($var_str)."<br>";
   
    echo "string replace <b>str_replace()</b> : ". str_replace('PHP','java',$var_str)."<br>";
   
    echo "string repeat for 3 times <b>str_repeat()</b> : ". str_repeat($var_str,3)."<br>";
   
    echo "string contains 'in' <b>str_contains()</b> : ". str_contains($var_str,'in') ."<br>";
    
    $arr_str = explode(" ",$var_str);
    echo "string convert to array <b>explode()</b> :";
    print_r($arr_str);

    echo "<br>string concentation <b> .(dot) </b> : ". $var_str." add<br>";

    echo "substring function (index:4-14): <b>substr()</b> : ". substr($var_str,4,10);

?>