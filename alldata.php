<title>Product List</title>
<?php 
include 'header.php';
include 'config.php';

$record_per_page =218;          //pagination
$page = '';
if(isset($_GET["page"]))
{
 $page = $_GET["page"];
}
else
{
 $page = 1;
}

$start_from = ($page-1)*$record_per_page;

if(isset($_GET['search']))        //search
{
    $valueToSearch = $_GET['valueToSearch'];
    $query = "select * from user WHERE product_name LIKE '%".$valueToSearch."%' LIMIT $start_from, $record_per_page";
    $search_result = mysqli_query($con,$query);
}
else
{
    $query = "select * from user LIMIT $start_from, $record_per_page";
    $search_result = mysqli_query($con,$query);
} 
?>
<style>

body
{
  margin: 0;
  height:100%; 
 background:#f6f6f6;
 font-family: "Times New Roman", Times, serif;
  font-size:18px;
}

   tr:hover
  {
    background:#fffde7;
  }
</style>

<div class="container">
 <ul class="breadcrumb" style="background-color:#f6f6f6">
  <li><a href="index.php">Home</a></li>
  <li class="active"><a href="alldata.php">All Product</a></li>
 </ul>

<div class="row">
<form action="alldata.php" method="GET">
 <div class="form-group">
  <div class="col-sm-offset-2 col-sm-7">
  <input type="text" class="form-control" type="text" name="valueToSearch" placeholder="Search Record..">
  </div></div>
  <div class="form-group">
   <div class="col-sm-offset-0 col-sm-2">
  <button type="submit" class="btn btn-primary" name="search" value="search">search</button>
  </div><br><br>  
</div> 
</div>

<div class="table-responsive">
<table class="table table-bordered" data-page-length='5' style="background-color:white;">
 <thead class="heading" style="background-color:#201919;color:white ">
  <tr>
   <th style="background-color:#6c757d">Product Image</th>
   <th style="background-color:#6c757d">Product Name</th>
   <th style="background-color:#6c757d"> Product Price</th>
   <th style="background-color:#6c757d">Add To Cart</th>
  </tr>    
  </thead>
 <div align="center">
<?php
while($row = mysqli_fetch_array($search_result))
 //while($row = mysqli_fetch_array($result))
{  
      echo "<tr>";
     //echo "<td>" . $row['id']."</td>";
      echo "<td>" ."<img src='image/".$row['image'] ."' width='50' height='50' />"."</td>";
     echo "<td>" . $row['product_name'] . "</td>";
     echo "<td>" . $row['price'] . "</td>";
    
     echo "<td>".'<a class="btn btn-info" href="addtocart.php?id=' . $row['id'] . '">Cash' . '</a>'.'<a class="btn btn-danger" href="cart.php?id=' . $row['id'] . '">Card' . '</a>'."</td>";
   echo "</tr>";
 }
 //echo $count;
 ?>  
</table>
</form>
</div>
<?php
 if(isset($_GET['search']))        //serch
{
    $valueToSearch = $_GET['valueToSearch'];
    $query = "select * from user  WHERE product_name LIKE '%".$valueToSearch."%'";
    $search_result = mysqli_query($con,$query);
}
else
{
    $query = "select * from user";
    $search_result = mysqli_query($con,$query);
}
     $total_records = mysqli_num_rows($search_result);
     if($total_records==0)
     {
      echo  $err_record = '<div class="alert alert-warning alert-dismissible fade-in">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  No Record Found !!.
                  </div>';
     }
     $total_pages = ceil($total_records/$record_per_page);
     $start_loop = $page;
     $difference = $total_pages - $page;
 
 
  echo "<br>";
  ?>
</div>
</div>

<?php 
include 'footer_userlist.php'; 
?>