<?php
setcookie("mycokie","hello",time()+3600);
if($_COOKIE["mycokie"]=="hello"){
    echo "you have visited us before";
}else{
    echo"you have never visited";
}
?>


<html>
    <head>
        <title>my home</title>
    </head>
    <body>
        <h1>player login From</h1>
        <form action ="" method="post" enctype="multipart/form-data">
        <!-- <img src="../image/img_girl.jpg"> -->
        <form>
            <table>
            <tr><td> E-mail </td><td> <input type="email" name="email"> </td></tr>
            <tr><td> password</td><td> <input type="password" name="password"></td></tr>
            <tr><td> <a href="../view/pdashbord.php"><input type="button" value="Login" ></a>
            <tr><td> <a href="../view/user.php"><input type="button" value="Home" ></a>
            <input type="Reset"  ></td></tr>
            </table>
        </form>
    </body>
</html>