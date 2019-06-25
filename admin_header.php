<?php
session_start();
if(!isset($_SESSION['First_Name']))
{
  header('Location:index.php');

}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <link href="css/sb-admin.css" rel="stylesheet">
  

<style type="text/css">
body
{
  margin: 0;
  height:100%; 
 background:#f6f6f6;
 font-family: "Times New Roman", Times, serif;
  font-size:18px;
}
</style>

</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    

    <a class="navbar-brand" href="" style="color: white">Grocery Deals <span><img src="Images/logo3.png" style="width: 60px;height: 50px;background-color: black"></span></a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">

        <!--<hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width:250px;background:white">-->
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables">
          <a class="nav-link" href="adduserlist.php">
            <i class="fa fa-fw fa-table"></i>
            <span class="nav-link-text" style="color: white">Customer Account</span>
          </a>
        </li>

        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables">
          <a class="nav-link" href="customer_order.php">
            <i class="fa fa-fw fa-shopping-cart"></i>
            <span class="nav-link-text" style="color: white">Customer Order By Cash On Delivery</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables">
          <a class="nav-link" href="customer_order_bycard.php">
            <i class="fa fa-fw fa-shopping-cart"></i>
            <span class="nav-link-text" style="color: white">Customer Order By card</span>
          </a>
        </li>

      <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables">
          <a class="nav-link" href="contact.php">
            <i class="fa fa-fw fa-phone"></i>
            <span class="nav-link-text" style="color: white">Contact</span>
          </a>
        </li>

        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables">
          <a class="nav-link" href="feedback.php">
            <i class="fa fa-fw fa-user"></i>
            <span class="nav-link-text" style="color: white">Feedback</span>
          </a>
        </li>


        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables">
          <a class="nav-link" href="forgotpassword.php">
            <i class="fa fa-fw fa-lock"></i>
            <span class="nav-link-text" style="color: white">Change Password</span>
          </a>
        </li>

        
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Menu Levels">
        </li>
       
      </ul>

      <ul class="navbar-nav sidenav-toggler">
        <li class="nav-item">
          <a class="nav-link text-center" id="sidenavToggler">
            <i class="fa fa-fw fa-angle-left"></i>
          </a>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto">
      </li>
        
        <li class="nav-item">
          <a class="nav-link"data-toggle="modal" data-target="#exampleModal">
            <a href="logout.php" style="color:white"><i class="fa fa-fw fa-sign-out"></i>Logout</a></a>
        </li>
       
      </ul>
    </div>
 <!--<hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">-->
  </nav>
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      
      <div class="row">
       
      </div>
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="js/sb-admin.min.js"></script>
    </div>

 <footer class="sticky-footer">
      <div class="container">
        <div class="text-center">
          <small>Copyright ©Website 2018</small>
        </div>
      </div>
     </footer>
  

    </body>

</html>
