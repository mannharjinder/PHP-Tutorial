<?php
include_once  "setting.php";
if(isset($_POST["username"])) {
    $username = $_POST["username"];
    $pwd = $_POST["pwd"];
    //Select value from database
    $query="select * from users where username='$username' and password='$pwd'";
    $result= mysqli_query($conn, $query);
    if($result->num_rows>0)

    {
        echo "Login Success";
    }
    else{
        echo "Wrong user  name and password";
        session_start();
        session_destroy();
    }
}
?>
<a href="Database.php" >Show record</a>
<a href="logout.php">Logout</a>