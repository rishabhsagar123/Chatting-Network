<?php
session_start();
$host="localhost";
$user="root";
$pass=" ";
$dbname="database name";

$conn=mysqli_connect($host,$user,$pass,$dbname);
if(!$conn){
	echo "There is connection problem";

}


if(isset($_POST['submit'])){
$a=$_POST['username'];
$b=$_POST['password'];
$sql="select*from register where username='$a' and password='$b'";

$query1=mysqli_query($conn,$sql);

if(mysqli_num_rows($query1)>0){
  $_SESSION['username']=$a;
header("Location:chatpage.php");

}else{
    echo "<script>alert('Error!');</script>";
}
}







?>


<html>
<head>
<title>Login Page</title>
<style type="text/css">

legend{
margin-top:100px;
color:red;

}
h1{
color:red;
font-size:50px;
margin-left:200px;
margin-right:200px;

}




</style>
</head>
<body>
<form method="post">
<center>
<legend>
<h1 style="text-align:center;border-bottom:3px solid black">Just Connect with New Social Network Project..</h1>
<table border="1" style="height:40px;">
<tr>
<td>Enter username:</td>
<td><input type="text" name="username" required/></td>
</tr>
<tr>
<td>Enter Password:</td>
<td><input type="password" name="password" required/></td>
</tr>
<tr>
<td><p style="text-align:center"><td><input type="submit" name="submit" value="Login"/></td></p></td>
</tr>
<center><a href="register.php">Register Account</a></center>

</table>
</legend>
</center>
</form>
</body>
</html>
