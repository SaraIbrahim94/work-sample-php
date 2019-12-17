<?php
$serv="localhost";
$user="root";
$passw="";
$db="members";

$conn=mysqli_connect($serv,$user,$passw,$db);

if(!$conn)
    die("Error".mysqli_connection_error);

//sql to create table (((PLEASE UNCOMMENT THE FOLLOWING CODE TO CREATE USERS TABLE AT YOUR members DATABASE)))
/*
$sql = "CREATE TABLE users (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
first_name varchar(50) NOT NULL,
last_name varchar(50) NOT NULL,
Email varchar(50),
Password char(255),
reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

if ($conn->query($sql) === TRUE) {
    echo "Table MyGuests created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}
*/


$sql="INSERT INTO users (`first_name`, `last_name`, `Password`, `Email`) VALUES('$_POST[FN]','$_POST[LN]',MD5($_POST[pass]),'$_POST[em]')";
if(mysqli_query($conn,$sql))
    header("location:profile.php");
else
echo"error";


echo "welcome ".$_POST['FN']." your password is".$_POST['pass'];
mysqli_close($conn);

?>
