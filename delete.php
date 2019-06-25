<?php
//include '../admin_panel.php';
include'admin_header.php';
include '../config.php';
$id=$_GET['id'];

$query = "select * from user";
$result = mysqli_query($con,$query);
    while($row = mysqli_fetch_array($result))
    {
      if($id==$row['id'])
      {
    $delete="delete from user where id='$id' ";
    $del=mysqli_query($con,$delete);
     if($del)
     {
       echo "<script>
       alert('Are you sure to delete this record');
       window.location.href='adduserlist.php';
       </script>";
      
       exit();
   }
   }
}
?> 

