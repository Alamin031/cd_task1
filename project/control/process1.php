<?php
session_start();
$name2="";

if(isset($_REQUEST["Submit"])){
$fname = $_POST["fname"];
// $name2="";
$name=$_REQUEST["fname"];
$name3=$_REQUEST["lname"];
$name4=$_REQUEST["uname"];
$name5=$_REQUEST["nationality"];
$name6=$_REQUEST["districts"];
$name7=$_REQUEST["zila"];
$name8=$_REQUEST["upazila"];
$name9=$_REQUEST["university"];
$name10=$_REQUEST["school"];
$name11=$_REQUEST["number"];


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

$uname = $_POST["uname"];
if(empty($uname))
{
    echo "You haven't entered your last name!";
    echo "<br>";
}
else
{
    if (!preg_match("/^[a-zA-Z-' ]*$/",$uname))
    {
        echo "Please remove numeric numbers from your last name!";
        echo "<br>";
    }
    else
    {
        $_SESSION["uname"]=$uname;
        echo "Your last name is: ".$uname;
        echo "<br>";
    }
}

$nationality = $_POST["nationality"];
if(empty($nationality))
{
    echo "You haven't entered your last name!";
    echo "<br>";
}
else
{
    if (!preg_match("/^[a-zA-Z-' ]*$/",$nationality))
    {
        echo "Please remove numeric numbers from your last name!";
        echo "<br>";
    }
    else
    {
        $_SESSION["nationality"]=$nationality;
        echo "Your last name is: ".$nationality;
        echo "<br>";
    }
}

$districts = $_POST["districts"];
if(empty($districts))
{
    echo "You haven't entered your last name!";
    echo "<br>";
}
else
{
    if (!preg_match("/^[a-zA-Z-' ]*$/",$districts))
    {
        echo "Please remove numeric numbers from your last name!";
        echo "<br>";
    }
    else
    {
        $_SESSION["districts"]=$districts;
        echo "Your last name is: ".$districts;
        echo "<br>";
    }
}

$zila = $_POST["zila"];
if(empty($zila))
{
    echo "You haven't entered your last name!";
    echo "<br>";
}
else
{
    if (!preg_match("/^[a-zA-Z-' ]*$/",$zila))
    {
        echo "Please remove numeric numbers from your last name!";
        echo "<br>";
    }
    else
    {
        $_SESSION["zila"]=$zila;
        echo "Your last name is: ".$zila;
        echo "<br>";
    }
}

$upazila = $_POST["upazila"];
if(empty($upazila))
{
    echo "You haven't entered your last name!";
    echo "<br>";
}
else
{
    if (!preg_match("/^[a-zA-Z-' ]*$/",$upazila))
    {
        echo "Please remove numeric numbers from your last name!";
        echo "<br>";
    }
    else
    {
        $_SESSION["upazila"]=$upazila;
        echo "Your last name is: ".$upazila;
        echo "<br>";
    }
}

$university = $_POST["university"];
if(empty($university))
{
    echo "You haven't entered your last name!";
    echo "<br>";
}
else
{
    if (!preg_match("/^[a-zA-Z-' ]*$/",$university))
    {
        echo "Please remove numeric numbers from your last name!";
        echo "<br>";
    }
    else
    {
        $_SESSION["university"]=$university;
        echo "Your last name is: ".$university;
        echo "<br>";
    }
}

$school = $_POST["school"];
if(empty($school))
{
    echo "You haven't entered your last name!";
    echo "<br>";
}
else
{
    if (!preg_match("/^[a-zA-Z-' ]*$/",$school))
    {
        echo "Please remove numeric numbers from your last name!";
        echo "<br>";
    }
    else
    {
        $_SESSION["school"]=$school;
        echo "Your last name is: ".$school;
        echo "<br>";
    }
}

$number = $_POST["number"];
if(empty($number))
{
    echo "You haven't entered your last name!";
    echo "<br>";
}
else
{
    if (!preg_match("/^[a-zA-Z-' ]*$/",$number))
    {
        echo "Please remove numeric numbers from your last name!";
        echo "<br>";
    }
    else
    {
        $_SESSION["number"]=$number;
        echo "Your last name is: ".$number;
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

$Relationship="";

if (isset( $_POST["radio"]) )
{
    $Relationship = $_POST["radio"];
    $_SESSION["Relationship"]=$Relationship;
    echo "You have selected as: " .$Relationship;
    echo "<br>";
}
else
{
    echo "You must have to select one!";
    echo "<br>";
}


$PL="";
if (isset($_POST["cricket"]) || isset($_POST["football"]) || isset($_POST["basketball"]) || isset($_POST["tennis"]) || isset($_POST["hockey"]) || isset($_POST["volleyball"]))
{
    if (isset($_POST["cricket"]) && isset($_POST["football"]) && isset($_POST["basketball"]) && isset($_POST["tennis"]) && isset($_POST["hockey"]) && isset($_POST["volleyball"]))
    {

        echo "You have selected: Cricket Football Basketbal Tennis Hockey Volleyball ";
        echo "<br>";
        $PL=$_POST["cricket"].",".$_POST["football"].", ".$_POST["basketball"].", ".$_POST["tennis"].", ".$_POST["hockey"].", ".$_POST["volleyball"];
        $_SESSION["PL"]=$PL;


    }

    elseif (isset($_POST["cricket"]) || isset($_POST["football"]) || isset($_POST["basketball"]) || isset($_POST["tennis"]) || isset($_POST["hockey"]) )
    {
        echo "You have selected: Cricket Football Basketbal Tennis Hockey ";
        echo "<br>";
        $PL=$_POST["cricket"].",".$_POST["football"].", ".$_POST["basketball"].", ".$_POST["tennis"].", ".$_POST["hockey"];
        $_SESSION["PL"]=$PL;

    }

    elseif (isset($_POST["cricket"]) || isset($_POST["football"]) || isset($_POST["basketball"]) || isset($_POST["tennis"]) )
    {
        echo "You have selected: Cricket Football Basketbal Tennis ";
        echo "<br>";
        $PL=$_POST["cricket"].",".$_POST["football"].", ".$_POST["basketball"].", ".$_POST["tennis"];
    }
    elseif (isset($_POST["cricket"]) || isset($_POST["football"]) || isset($_POST["basketball"]) )
    {
        echo "You have selected: Cricket Football Basketbal ";
        echo "<br>";
        $PL=$_POST["cricket"].",".$_POST["football"].", ".$_POST["basketball"];
    }

    elseif (isset($_POST["cricket"]) || isset($_POST["football"]) )
    {
        echo "You have selected: Cricket Football ";
        echo "<br>";
        $PL=$_POST["cricket"].",".$_POST["football"];
    }
    elseif (isset($_POST["cricket"]))
    {
        echo "You have selected: Cricket";
        echo "<br>";
        $PL=$_POST["cricket"];
    }
    elseif (isset($_POST["football"]) || isset($_POST["basketball"]) || isset($_POST["tennis"]) || isset($_POST["hockey"]) || isset($_POST["volleyball"]))
    {
        echo "You have selected: Football Basketbal Tennis Hockey Volleyball ";
        echo "<br>";
        $PL=$_POST["football"].", ".$_POST["basketball"].", ".$_POST["tennis"].", ".$_POST["hockey"].", ".$_POST["volleyball"];
    }

    elseif (isset($_POST["football"]) || isset($_POST["basketball"]) || isset($_POST["tennis"]) || isset($_POST["hockey"]))
    {
        echo "You have selected: Football Basketbal Tennis Hockey  ";
        echo "<br>";
        $PL=$_POST["football"].", ".$_POST["basketball"].", ".$_POST["tennis"].", ".$_POST["hockey"];
    }

    elseif (isset($_POST["football"]) || isset($_POST["basketball"]) || isset($_POST["tennis"]))
    {
        echo "You have selected: Football Basketbal Tennis ";
        echo "<br>";
        $PL=$_POST["football"].", ".$_POST["basketball"].", ".$_POST["tennis"];
    }

    elseif (isset($_POST["football"]) || isset($_POST["basketball"]))
    {
        echo "You have selected: Football Basketbal ";
        echo "<br>";
        $PL=$_POST["football"].", ".$_POST["basketball"];
    }

    elseif (isset($_POST["football"]))
    {
        echo "You have selected: Football";
        echo "<br>";
        $PL=$_POST["football"];
    }

    elseif (isset($_POST["cricket"]) || isset($_POST["basketball"]) || isset($_POST["tennis"]) || isset($_POST["hockey"]) || isset($_POST["volleyball"]))
    {
        echo "You have selected: Cricket  Basketbal Tennis Hockey Volleyball ";
        echo "<br>";
        $PL=$_POST["cricket"].",".$_POST["basketball"].", ".$_POST["tennis"].", ".$_POST["hockey"].", ".$_POST["volleyball"];
    }

    elseif (isset($_POST["cricket"]) || isset($_POST["basketball"]) || isset($_POST["tennis"]) || isset($_POST["hockey"]))
    {
        echo "You have selected: Cricket  Basketbal Tennis Hockey ";
        echo "<br>";
        $PL=$_POST["cricket"].",".$_POST["basketball"].", ".$_POST["tennis"].", ".$_POST["hockey"];
    }


    elseif (isset($_POST["cricket"]) || isset($_POST["basketball"]) || isset($_POST["tennis"]))
    {
        echo "You have selected: Cricket Basketbal Tennis ";
        echo "<br>";
        $PL=$_POST["cricket"].",".$_POST["basketball"].", ".$_POST["tennis"];
    }


    elseif (isset($_POST["cricket"]) || isset($_POST["basketball"]))
    {
        echo "You have selected: Cricket Basketbal ";
        echo "<br>";
        $PL=$_POST["cricket"].",".$_POSTT["basketball"];
    }


    elseif (isset($_POST["basketball"]))
    {
        echo "You have selected: Basketbal ";
        echo "<br>";
        $PL=$_POST["basketball"];
    }

    elseif (isset($_POST["cricket"]) || isset($_POST["tennis"]) || isset($_POST["hockey"]) || isset($_POST["volleyball"]))
    {
        echo "You have selected: Cricket  Tennis Hockey Volleyball ";
        echo "<br>";
        $PL=$_POST["cricket"].",".$_POST["tennis"].", ".$_POST["hockey"].", ".$_POST["volleyball"];
    }

    elseif (isset($_POST["cricket"]) || isset($_POST["tennis"]) || isset($_POST["hockey"]))
    {
        echo "You have selected: Cricket  Tennis Hockey ";
        echo "<br>";
        $PL=$_POST["cricket"].",".$_POST["tennis"].", ".$_POST["hockey"];
    }

    elseif (isset($_POST["cricket"]) || isset($_POST["tennis"]))
    {
        echo "You have selected: Cricket  Tennis ";
        echo "<br>";
        $PL=$_POST["cricket"].",".$_POST["tennis"];
    }

    elseif (isset($_POST["basketball"]) || isset($_POST["tennis"]))
    {
        echo "You have selected:  Basketbal Tennis ";
        echo "<br>";
        $PL=$_POST["basketball"].", ".$_POST["tennis"];
    }

    elseif (isset($_POST["football"]) || isset($_POST["tennis"]))
    {
        echo "You have selected:  Football  Tennis ";
        echo "<br>";
        $PL=$_POST["football"].", ".$_POST["tennis"];
    }

    elseif ( isset($_POST["tennis"]) || isset($_POST["hockey"]) || isset($_POST["volleyball"]))
    {
        echo "You have selected: Tennis Hockey Volleyball ";
        echo "<br>";
        $PL=$_POST["tennis"].", ".$_POST["hockey"].", ".$_POST["volleyball"];
    }

    elseif ( isset($_POST["tennis"]) || isset($_POST["volleyball"]))
    {
        echo "You have selected:  Tennis  Volleyball ";
        echo "<br>";
        $PL=$_POST["tennis"].", ".$_POST["volleyball"];
    }

    elseif ( isset($_POST["tennis"]) || isset($_POST["hockey"]))
    {
        echo "You have selected: Tennis Hockey ";
        echo "<br>";
        $PL=$_POST["tennis"].", ".$_POST["hockey"];
    }

    elseif ( isset($_POST["tennis"]))
    {
        echo "You have selected:  Tennis ";
        echo "<br>";
        $PL=$_POST["tennis"];
    }

    elseif ( isset($_POST["hockey"]) || isset($_POST["volleyball"]))
    {
        echo "You have selected:  Hockey Volleyball ";
        echo "<br>";
        $PL=$_POST["hockey"].", ".$_POST["volleyball"];
    }
    elseif ( isset($_POST["hockey"]) || isset($_POST["cricket"]))
    {
        echo "You have selected:  Hockey  ";
        echo "<br>";
        $PL=$_POST["cricket"].",".$_POST["hockey"];
    }

    elseif ( isset($_POST["hockey"]) || isset($_POST["football"]))
    {
        echo "You have selected: Football  Hockey  ";
        echo "<br>";
        $PL=$_POST["football"].", ".$_POST["hockey"];
    }

    elseif ( isset($_POST["hockey"]) || isset($_POST["basketball"]))
    {
        echo "You have selected:  Basketbal  Hockey  ";
        echo "<br>";
        $PL=$_POST["basketball"].", ".$_POST["hockey"];
    }

    elseif ( isset($_POST["hockey"]))
    {
        echo "You have selected:  Hockey  ";
        echo "<br>";
        $PL=$_POST["hockey"];
    }

    elseif ( isset($_POST["volleyball"])  || isset($_POST["basketball"]))
    {
        echo "You have selected:  Basketbal  Volleyball ";
        echo "<br>";
        $PL=$_POST["basketball"].", ".$_POST["volleyball"];
    }

    elseif ( isset($_POST["volleyball"])  || isset($_POST["football"]))
    {
        echo "You have selected: Football  Volleyball ";
        echo "<br>";
        $PL=$_POST["football"].", ".$_POST["volleyball"];
    }

    elseif ( isset($_POST["volleyball"])  || isset($_POST["cricket"]))
    {
        echo "You have selected: Cricket  Volleyball ";
        echo "<br>";
        $PL=$_POST["cricket"].",".$_POST["volleyball"];
    }
   
    elseif ( isset($_POST["volleyball"]))
    {
        echo "You have selected:  Volleyball ";
        echo "<br>";
        $PL=$_POST["volleyball"];
    }
}

else
{
    echo "Please select a checkbox!";
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
    echo "Your given password is: ".$password;
    echo "<br>";
}


 //for files uploads code here
  echo $_FILES["myfile"]["name"];//return file name
 
  if(move_uploaded_file($_FILES["myfile"]["tmp_name"],"../uploads/".$_FILES["myfile"]["name"]))
  {
      echo "FILES UPLOADED";
  }
  else{
      echo"<br>File not uploaded";
  }
  
  //creat array 

  $mydata =array(
    'firstname'=>$name,
    'LastName'=>$name3,
    'UserName'=>$name4,
    'Nationality'=>$name5,
    'Districts'=>$name6,
    'Zila'=>$name7,
    'Upazila'=>$name8,
    'University'=>$name9,
    'School'=>$name10,
    'Number'=>$name11,
    'birthday'=>$_REQUEST["birthday"],
    'email'=>$_REQUEST["email"],
    //'Number'=>$_REQUEST["number"],
    'password'=>$_REQUEST["password"],
    'file'=>$_FILES["myfile"]["name"],
    'mycheckbox'=>$PL,
    'radio'=>$GENDER,
    'radio'=>$Relationship
   
);

  $jsondata=json_encode($mydata,JSON_PRETTY_PRINT);
  if(file_put_contents ("../data/data2.json",$jsondata)){
      echo"Save data";
  }
  

}
?>