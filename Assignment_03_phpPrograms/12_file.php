<?php
echo "<h1>12. Write a program to read and write data to a file</h1><hr>";



function readsFile($filename)
{
    $file = fopen($filename, "r");
    $content = fread($file, filesize($filename));
    fclose($file);
    echo "File Read : $content <br>";
}

function writesFile($filename)
{
    $file = fopen($filename, "w");
    $newData = "lorem abc";
    fwrite($file, $newData);
    echo "File write Done.<br>";
    fclose($file);
}

$filename = "demo.txt";
readsFile($filename);
writesFile($filename);
readsFile($filename);

echo '<br><a href="./index.html"><input type="button" value="Back" ></a>';
