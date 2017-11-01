<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
	<center>DATA INSTAGRAM<hr/>
<table>

<?php
$email=$_POST['email'];
$fullname=$_POST['fullname'];
$user=$_POST['user'];
$Password=$_POST['password'];


echo "<tr><td>Email</td><td>:</td><td>$email</td></tr>";
echo "<tr><td>Full Name</td><td>:</td><td>$fullname</td></tr>";
echo "<tr><td>User</td><td>:</td><td>$user</td></tr>";
echo "<tr><td>Password</td><td>:</td><td><b>Hidden Security</b></td></tr>";
?>

</table>
</body>
</html>