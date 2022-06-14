<?php
session_start();
$name2="";

if(isset($_REQUEST["Submit"])){
$fname = $_POST["fname"];
// $name2="";
$name=$_REQUEST["fname"];
$name3=$_REQUEST["lname"];
if(empty($fname))
{
    //echo "You haven't entered your first name!";
    $name2="You haven't entered your first name!";
    echo "<br>";
}
else
{
    if (!preg_match("/^[a-zA-Z-' ]*$/",$fname))
    {
        echo "Please remove numeric numbers from your first name!";
        echo "<br>";
    }
    else
    {
        $_SESSION["name"]=$name;
        echo "Your first name is: ".$fname;
        echo "<br>";
    }
}

$lname = $_POST["lname"];
if(empty($lname))
{
    echo "You haven't entered your last name!";
    echo "<br>";
}
else
{
    if (!preg_match("/^[a-zA-Z-' ]*$/",$lname))
    {
        echo "Please remove numeric numbers from your last name!";
        echo "<br>";
    }
    else
    {
        $_SESSION["lname"]=$lname;
        echo "Your last name is: ".$lname;
        echo "<br>";
    }
}

$birthday = $_POST["birthday"];
$_SESSION["birthday"]=$birthday;
echo "Your Age is: ".$birthday;
echo "<br>";

$GENDER="";

if (isset( $_POST["radio"]) )
{
    $GENDER = $_POST["radio"];
    $_SESSION["GENDER"]=$GENDER;
    echo "You have selected as: " .$GENDER;
    echo "<br>";
}
else
{
    echo "You must have to select one!";
    echo "<br>";
}



$email = $_POST["email"];
if (empty($email) || !preg_match('/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix',$email))
{
    echo "Invalid email";
    echo "<br>";
}
else
{
    $_SESSION["email"]=$email;
    echo "Your email is ".$email;
    echo "<br>";
}

$password = $_POST['password'];
if (strlen($password) < 8)
{
    echo "Please Enter a valid password!";
    echo "<br>";
}
else
{
    $_SESSION["password"]=$password;
    echo "Your given password is: ".$password;
    echo "<br>";
}


 //for files uploads code here
  echo $_FILES["myfile"]["name"];//return file name
 
  if(move_uploaded_file($_FILES["myfile"]["tmp_name"],"../uploads/".$_FILES["myfile"]["name"]))
  {
    $_SESSION["FILES"]=$FILES;
      echo "FILES UPLOADED";
  }
  else{
      echo"<br>File not uploaded";
  }
  
  //creat array 

  $mydata =array(
      'firstname'=>$name,
      'LastName'=>$name3,
      'birthday'=>$_REQUEST["birthday"],
      'email'=>$_REQUEST["email"],
      'Number'=>$_REQUEST["email"],
      'password'=>$_REQUEST["password"],
      'file'=>$_FILES["myfile"]["name"],
      'radio'=>$GENDER
     
  );


  $jsondata=json_encode($mydata,JSON_PRETTY_PRINT);
  if(file_put_contents ("../data/data1.json",$jsondata)){
      echo"Save data";
  }
  

}
?>