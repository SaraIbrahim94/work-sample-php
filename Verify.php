<?php

$serv="localhost";
$user="root";
$passw="";
$db="members";


$conn=mysqli_connect($serv,$user,$passw,$db);
if(!$conn)
    die("Error".mysqli_connection_error);



//SELECT * FROM users WHERE DES_DECRYPT(DES_ENCRYPT('1234', 'pepo'), 'pepo')='1234'

$sql="SELECT * FROM users WHERE Email='$_GET[em]' AND MD5($_GET[pass])=Password";

$res=mysqli_query($conn,$sql);
$rowSelected   = mysqli_num_rows($res);
if ($rowSelected>=1) {
    while($row = mysqli_fetch_array($res)) {
            $name = $row["first_name"];
            echo "Hello: $name<br>";
        }
}
else {
    echo "User dosen't exit!";
}

/*
if(mysqli_num_rows($res)==1)
    header("location:profile.php");
else
echo "this email ".$_POST[em]." does not exist ";
*/

mysqli_close($conn);

?>
