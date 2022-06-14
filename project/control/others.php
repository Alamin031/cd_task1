<?php
//include("../control/process.php");
setcookie("mycokie","hello")
?>


<html>
    <head>
        <title>my home</title>
    </head>
    <body>
        <h1>Registration From</h1>
        <form action ="" method="post" enctype="multipart/form-data">
        <!-- <img src="../image/img_girl.jpg"> -->
        <form>
            <table>
           <tr><td> First Name</td><td> <input type="text" name="fname"> </td></tr>
           <td>
          <?php
         // echo $name2;
          ?>
           </td>

           <tr><td> Last Name </td><td> <input type="text" name="lname"> </td></tr>
           <tr><td> Phone Number </td><td> <input type="text" name="age" > </td></tr>
           <tr><td> <label for="birthday">Birthday: </label> </td><td> <input type="date" id="birthday" name="birthday"> </td></tr>

     
           <tr><td>
           GENDER:
           </td><td>
           <input type="radio" name="radio" value="MEN"> MEN
           <input type="radio" name="radio" value="WOMEN">WOMEN
           </td></tr>
           <tr><td>
           
            <tr><td> E-mail </td><td> <input type="email" name="email"> </td></tr>
            <tr><td> password</td><td> <input type="password" name="password"></td></tr>
            <tr><td>Please Choose Your Image :  </td>  
         <td><input type="file" id="myfile" name="myfile"> </td></tr>
            <tr><td> <input type="Submit"name="Submit" value="Submit"  >
            <input type="Reset"  ></td></tr>
            </table>
        </form>
    </body>
</html>