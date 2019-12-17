<?php

$serv="localhost";
$user="root";
$passw="";
$db="members";

$chechExist=$_GET['Xuser'];

$conn=mysqli_connect($serv,$user,$passw,$db);
if(!$conn)
    die("Error".mysqli_connection_error);


$checkSql="SELECT * FROM users WHERE Email ='$_GET[Xuser]'";
$Checkres=mysqli_query($conn,$checkSql);
$rows = mysqli_num_rows($Checkres);

if ($rows>0) {
   echo "This Email is exist<br>";
}
else if($rows<=0 && $chechExist!='') {
       echo "This Email: $chechExist does not exist<br>";
}


?>
