<?php
include_once "setting.php";
session_start();

//if no login tried
if (isset($_SESSION["username"])){
    $username = $_SESSION["username"];
    $password = $_SESSION["password"];

    if (isUser($username, $password, $conn)){
        $query = "select * from users";
        $result = mysqli_query($conn, $query);
        while ($row = $result->fetch_assoc()){
            echo "<p>";
            echo "ID: ".$row["id"];
            echo "<br>Name: ".$row["name"];
            echo "</p>";
        }
    }else{
        echo "go away";
    }
}else{
    echo "Go away";
}

function isUser($username, $password, $conn){
    $query = "select * from users where username = '$username' and password='$password'";
    $result = mysqli_query($conn, $query);
    if ($result->num_rows > 0){
        return true;
    }else{
        return false;
    }
}
