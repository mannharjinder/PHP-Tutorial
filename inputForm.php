<?php

?>

<html>
    <head>
        <title>
            Form for Input
        </title>
    </head>
        <body>
            <form action="insertRecord.php" method="post">
                 <p>Name: <input type="text" placeholder="name" name="name"> </p>
                 <p>Email: <input type="email" placeholder="email" name="email"> </p>
                 <p>Username: <input type="text" placeholder="username" name="username"> </p>
                 <p>Password: <input type="password" placeholder="*****" name="pwd"> </p>
                <p>
                 <input type="submit" value="submit">
                </p>
            </form>
        </body>
</html>