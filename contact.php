<?php 
//include 'admin_panel.php';
include'admin_header.php';
include 'config.php';


  $de_query="select * from contact";
  $result=execute_query($de_query); 


function execute_query($query)
{
  $connect=mysqli_connect("localhost","root","","grocery_project");
  $result=mysqli_query($connect,$query);
  return $result;
}
?>
<html>
<head>
<style>

body
{
 background:#f6f6f6;
 font-family: "Times New Roman", Times, serif;
  font-size:18px;
}

 
  tr:hover
  {
    background:#c7d4df;
  }

 /* thead
  {
    background:#6c757d;
  }*/
</style>
</head>

<body>
<div class="container">
  <h4 style="text-align:center"><u>USERLIST</u></h4>
 <div class="row">

<form action="adduserlist.php" method="post">
</div>

<div class="table-responsive">
<table class="table table-bordered" data-page-length='5' style="background-color:white;">
 <thead class="heading" style="background-color:#201919;color:white ">
  <tr>
   <th style="background-color:#6c757d">Username</th>
   <th style="background-color:#6c757d">Email_id</th>
  <th style="background-color:#6c757d">Message</th>
   <th style="background-color:#6c757d">Date</th>
    
  </tr>    
  </thead>
 <div align="center">
<?php
  while($row = mysqli_fetch_array($result))
 //while($row = mysqli_fetch_array($result))
{  
     echo "<tr>";
     //echo "<td>" . $row['id']."</td>";
     echo "<td>" . $row['Username'] . "</td>";
     echo "<td>" . $row['Email_id'] . "</td>";
     echo "<td>" . $row['Message'] . "</td>";
      echo "<td>" . $row['date'] . "</td>";
     //src path is already added in databse so no requirement here to add again define path like src='image/' ". its show error  
     //echo "<td>"."<a href='update.php'><u>update</u></a>/<a href='delete.php'><u>delete</u></a>"."</td>";
     
   echo "</tr>";


 } 
 ?>
</table>
</form>
</div>
</body>
</html>
