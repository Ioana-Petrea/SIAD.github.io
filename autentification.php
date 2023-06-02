<?php  include ('index.php');
$host = "localhost";
$username = "root"; 
$password = "";
$database = "voluntariat"; 

$con = mysqli_connect($host, $username, $password, $database);
if(mysqli_query($con))
{
	echo "Conexiune realizata cu succes";
}
else {
	echo 'La revedere';
}
?>