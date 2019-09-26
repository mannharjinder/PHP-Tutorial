<?php

if(isset($_POST["name"])) {


    $name = $_POST["name"];
    $email = $_POST["email"];
    $username = $_POST["username"];
    $pwd = $_POST["pwd"];

    include_once "setting.php";

    $query="INSERT INTO users VALUES (NULL,'$name','$email','$username','$pwd');";
    //run query
    mysqli_query($conn,$query);

}
?>
<a href="Database.php">Show Data</a>
