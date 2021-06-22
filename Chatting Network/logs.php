<?php
$host="localhost";
$user="root";
$pass=" ";
$dbname="database name";
$conn=mysqli_connect($host,$user,$pass,$dbname);
if(!$conn){
	echo "Check Your Connections";
}

$result="Select*from logs order by id DESC";
$r=mysqli_query($conn,$result);
while($extract = mysqli_fetch_array($r)) {
      
echo "<span class='uname'>" . $extract['username'] . "</span>: <span class='msg'>" . $extract['msg'] . "</span>:<span class='topic'>".$extract['topic']."</span><br/>";
	echo "<p style='text-align:center'><a href=delete.php?id=".$extract['id'].">Delete</a></p>";


	
 
   

}



?>
<html>
    <head>
        <style type="text/css">
    
            .uname{
                color:red;
                 
            }
            .msg{
                color:blue;
            }
            .topic{
                color:violet;
            }
        </style>
    </head>
<body>
    <br>
    <br>
    <br>

    <center><p style="text-align:center">&copy;Rishabh Sagar and <a href="http://www.gameprojects.in" style="color:red">The Game Project</a></p></center>
</body>
</html>
