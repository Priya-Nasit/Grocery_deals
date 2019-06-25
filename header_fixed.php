<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  margin: 0;
  font-family: Arial;
}

.top-container {
  background-color: #f1f1f1;
  padding: 30px;
  text-align: center;
}

.header {
  padding: 10px 16px;
  background: #555;
  color: #f1f1f1;
}

.content {
  padding: 16px;
}

.sticky {
  position: fixed;
  top: 0;
  width: 100%;
}

.sticky + .content {
  padding-top: 102px;
}
</style>
</head>
<body>

<div class="header" id="myHeader">
  <div class="container">
     <ul class="nav navbar-nav">
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown">Home<span class="caret"></span></a>
       <ul class="dropdown-menu">
         <li><a href="index.php">Home</a></li>
         <li><a href="ourteam.php">About us</a></li>
         <li><a href="Adduser.php">Create Account</a></li>
         <li><a href="contact.php">Contact us</a></li>
       </ul>
        </li>
      </ul>
    </div>
</div>

<div class="content">
  
</div>
<script>
window.onscroll = function() {myFunction()};

var header = document.getElementById("myHeader");
var sticky = header.offsetTop;

function myFunction() {
  if (window.pageYOffset > sticky) {
    header.classList.add("sticky");
  } else {
    header.classList.remove("sticky");
  }
}
</script>

</body>
</html>