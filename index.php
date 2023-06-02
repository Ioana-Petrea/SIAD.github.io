<?php include ('nav.php');
if(isset($_POST["submit"])&& !empty($_POST["denumire"]) &&
	!empty($_POST["password"]) &&
	!empty($_POST["email"])
	){ 
$denumire= $_POST["denumire"];
$password = md5($_POST["password"]); //!--parola criptata
$psql->bindParam(1, $denumire, PDO::PARAM_STR); //!--protectie contra SQL injection
$psql->bindParam(2, $password, PDO::PARAM_STR);
$psql->execute();
$email = $_POST["email"];

if(isset($_POST['categ'])); //!--protectie contra XSS(cross site scripting)
$categ=$_POST['categ'];
$categ=htmlspecialchars($categ, ENT_QUOTES, 'UTF-8');
		$sql = "SELECT * from admin where denumire='$categ";

$sql_insert = "INSERT INTO admin (denumire, password, email)
VALUES ('$denumire', '$password', '$email')";
echo "Bine ai venit $denumire!";
echo "<p>";
$con = mysqli_connect("localhost", "root", "", "voluntariat");
if(mysqli_query($con, $sql_insert))
{
	header ("Location: calendar.php");
	exit;
}
else {
	echo 'La revedere';
}
}
?>
<form action= "index.php" method= "POST">
Denumire:<input type="text" name="denumire">
<br/>
Parola:<input type="text" name="password">
<br/>
Email:<input type="email" name="email">
<br>
<input type="submit" name="submit" value="logare">
<br>
</form>