<?php

//this code is for connection start point
$server="localhost";
$dbusername="root";
$dbpassword="";
$dbname="ISCG7420";

$conn=mysqli_connect($server,$dbusername,$dbpassword,$dbname);
if($conn->error)
{
    echo $conn->error;
}
else
{
    echo "Connected";
}
//end of connection for the code

?>