<?php
$host="localhost";
$user="root";
$pass=" ";
$dbname="database name";

$conn=mysqli_connect($host,$user,$pass,$dbname);
if(!$conn){
	echo "There is connection problem";
	

}
if(isset($_POST['logout'])){
header("Location:index.php");
}

?>
<html>
<head>
    <style type="text/css">
    #content input:hover{
        color:white;
        background:black;
    }
    </style>
<script
  src="http://code.jquery.com/jquery-2.2.4.min.js"
  integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
  crossorigin="anonymous"></script>

<script>
function submitChat(){
 if(form1.uname.value=='' || form1.msg.value=='' || form1.topic.value==''){
 	alert("PLEASE FILL ALL THE FIELDS!!");
 	return;
 	}
 	form1.uname.readOnly=true;
 	form1.uname.style.border='none';
 	var uname=form1.uname.value;
 	var msg=form1.msg.value;
 	var topic=form1.topic.value;
 
 
 	var xmlhttp=new XMLHttpRequest();
 	xmlhttp.onreadystatechange=function(){
 		if(xmlhttp.readyState==4&&xmlhttp.status==200){
 			document.getElementById('chatlogs').innerHTML=xmlhttp.responseText;
 		}
 	}
 	xmlhttp.open('GET','insert.php?uname='+uname+'&msg='+msg+'&topic='+topic,true);
 	xmlhttp.send();
}
$(document).ready(function(e){
	$.ajaxSetup({
		cache: false
	});
	setInterval( function(){ $('#chatlogs').load('logs.php'); }, 2000 );
});
</script>
<title>CHAT WITH ME</>..</title>
<style type="text/css">
    input[type=text]{
        color:blue;
    }
    #form1 h{
     color:red;
     font-size:50px;
     font-family:microsoft sans serif;
     margin-top:10px;
     
    }
    
</style>
</head>
<body>
    <br>
    <br>
<center>
<form name="form1" method="post" enctype="multipart/form-data" id="form1">
<p style="text-align:right"><input type="submit" name="logout" value="logout Page"/></p>
<br>
<br>
<h style="text-align:center">CHAT WITH ME..</h>
<br>
<br>
<br>
Enter your name:<input type="text" name="uname" width:200px; placeholder="Enter your name.." requiured/>
<br>
<br>
Type Your heading/Topic/About Who you want to comment:
<input type="text" name="topic" placeholder="Your Discussion Topic" required/>
<br>
<br>
Type Your Messages:
<textarea name="msg" style="width:200px; height:70px;" placeholder="Write something..." required></textarea>
<br>
<br>
<br>
<div id="content">
<input type="button" onclick="submitChat()" value="POST"/>
</div>
<div id="chatlogs">
LOADING PLEASE WAIT..
</div>
</form>
</center>
</body>
</html>


