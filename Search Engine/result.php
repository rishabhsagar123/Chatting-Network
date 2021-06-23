<!DOCTYPE HTML>
<html>
<head>
<title>Result found</title>
<style type="text/css">
.result{
	margin-left: 10%;margin-right:25%;margin-top:12px;
}
input[type=text]{
    font-family:"courier";
    height:50px;
    font-size:40px;
    
}

</style>
</head>
<body>
<div class="container-fluid">

<form method="get">
<div class="result" style="background:rgb(0,199,255);height:200px;">
<div class="col-sm-1">
    <img src="" width="100px;"/>
</div>
<div class="col-sm-6" style="margin-left:50px">
<div class="input-group" style="margin-top:50px">
	<input type="text" class="form-control" placeholder="Search Your X.." name="search" style="color:red;width:500px;">
	<span class="input-group-btn">
	    <input class="btn btn-secondary" type="submit" name="search_button" value="Go" style="height:40px;width:40px;">
	</span>
</div>

</div>
</div>

</form>
</div>
</body>
</html>

<?php 
$host="localhost";
$user="root";
$pass="";
$dbname="database name";
$conn=mysqli_connect($host,$user,$pass,$dbname);


if(isset($_GET['search'])){
    $i=0;
    $k=$_GET['search'];
    $terms=explode(" ",$k);
    $query="SELECT*FROM engine WHERE ";
   foreach($terms as $each){
      $i++;
      if($i==1)
          $query.="site_title like '%$each%' ";
      else
          $query.="OR site_title like '%$each%' ";
          
  
      
      $query=mysqli_query($conn,$query);
      $numrows=mysqli_num_rows($query);
      if($numrows>0){
          while($row=mysqli_fetch_assoc($query)){
              $id=$row['id'];
              $title=$row['site_title'];
              $link=$row['site_link'];
              $key=$row['site_key'];
              $des=$row['site_des'];
             
           echo "<h1><a href='$link' style='color:red;font-size:50px;'>$title</a></h1><br/><p style='color:green;font-size:35px;'>$des</p><br/><p style='color:violet;font-size:35px;'>$key</p><br/><p style='border-bottom:1px solid yellow'/>";
          
          }
        
          
      }else{
          echo "<p style='text-align:center'>No results found</p>";
      }
      }
     
      }else if(isset($_GET['search_button'])){
            $i=0;
    $k=$_GET['search'];
    $terms=explode(" ",$k);
    $query="SELECT*FROM engine WHERE ";
   foreach($terms as $each){
      $i++;
      if($i==1)
          $query.="site_title like '%$each%' ";
      else
          $query.="OR site_title like '%$each%' ";
          
  
      
      $query=mysqli_query($conn,$query);
      $numrows=mysqli_num_rows($query);
      if($numrows>0){
          while($row=mysqli_fetch_assoc($query)){
              $id=$row['id'];
              $title=$row['site_title'];
              $link=$row['site_link'];
              $key=$row['site_key'];
              $des=$row['site_des'];
             
           echo "<h1><a href='$link' style='color:red;font-size:50px;'>$title</a></h1><br/><p style='color:green;font-size:35px;'>$des</p><br/><p style='color:violet;font-size:35px;'>$key</p><br/><p style='border-bottom:1px solid yellow'/>";
          
          }
        
          
      }else{
          echo "<p style='text-align:center'>No results found</p>";
      }
          
      }
      }
      
      ?>

<html>
    <p style="text-align:center">&copy;Copyright By Rishabh Sagar and <a href="http://www.gameprojects.in" style="color:red">The Game Project</a></p>
</html>
      
   
    




