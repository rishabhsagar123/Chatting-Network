
<?php
$host="localhost";
$user="root";
$pass=" ";
$dbname="database name";
$conn=mysqli_connect($host,$user,$pass,$dbname);
if(!$conn){
echo "Check Your Connection";
}
$sql="Delete from logs where id='$_GET[id]'";
if(mysqli_query($conn,$sql)){
echo "Deletion Successfull";
}

?>
<html>
    <body>
        <center>
        <a href="chatpage.php">Back to Chatting Page</a>
        </center>
    </body>
</html>
