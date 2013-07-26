<html>
<body>
<?php

$username=$_POST["username"];
$password=$_POST["password"];

if($username=="admin" && $password=="123")
	Header("Location: ./admin.html"); 
else
{
	echo "<script> alert('wrong username or password.');</script>";
	echo "<meta http-equiv='Refresh' content='0;url=adminLogin.html'>";
}
?>
</body>
</html>