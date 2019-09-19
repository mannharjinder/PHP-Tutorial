<?php
$f = fopen("readme.txt", "r");
while  (!feof($f))//feof is end of file
{
    //fgets is a readliine
    echo fgets($f)."<br>";
}
fclose($f);

?>


