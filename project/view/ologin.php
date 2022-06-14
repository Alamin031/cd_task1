<?php
setcookie("mycokie","hello")
?>


<html>
    <head>
        <title>my home</title>
    </head>
    <body>
        <h1>others login From</h1>
        <form action ="" method="post" enctype="multipart/form-data">
        <!-- <img src="../image/img_girl.jpg"> -->
        <form>
            <table>
           
            <tr><td> E-mail </td><td> <input type="email" name="email"> </td></tr>
            <tr><td> password</td><td> <input type="password" name="password"></td></tr>
            <tr><td> <input type="Reset"  ></td></tr>

            <tr><td> <a href="../control/login.php"><input type="button" value="Log In" ></a>
            <tr><td> <a href="../view/others.php"><input type="button" value="Back" ></a>
            <tr><td> <a href="../view/user.php"><input type="button" value="Home Page" ></a>
            </table>
        </form>
    </body>
</html>