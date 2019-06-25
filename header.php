<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/bootstrap.min.css">
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>

<script type="text/javascript">
    $(document).ready(function () {
        var url = window.location;
        $('ul.nav a[href="'+ url +'"]').parent().addClass('active');
        $('ul.nav a').filter(function() {
             return this.href == url;
        }).parent().addClass('active');
    });
</script> 

</head>
<body>


<nav class="navbar navbar-inverse" style="background: black">
  
    <div class="navbar-header">
      <a class="navbar-brand" href="#" style="color:white">Grocery Deals<span><img src="Images/logo3.png" style="width: 60px;height: 50px;background-color: black"></span></a>
    </div><br>
    
    <div class="container">

     <ul class="nav navbar-nav">
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown">Home<span class="caret"></span></a>
       <ul class="dropdown-menu">
         <li><a href="index.php">Home</a></li>
         <li><a href="ourteam.php">About us</a></li>
         <li><a href="Adduser.php">Create Account</a></li>
         <li><a href="contact.php">Contact us</a></li>

         <?php
       if(isset($_SESSION['First_Name']))
        {
        ?>
         <li><a href="feedback.php">Feedback</a></li>
         <?php
       }
       ?>
       </ul>
        </li>
     


       <li class="dropdown"><a href="grain.php" class="dropdown-toggle" data-toggle="dropdown" >Grains & Pulses<span class="caret"></span></a>
         <ul class="dropdown-menu" style="letter-spacing:2px;">
            <li>
                <div class="row" style="width:620px;">

                   <div >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="grain.php"><u>All Grains and Pulses</u></a></div>
                  
                  <ul class="list-unstyled col-md-1">
                  </ul>
                    
                       
                    <ul class="list-unstyled col-md-3">
                       <h4><u>Grains</u></h4>
                               <li><a href="grain_wheat.php">Wheat</a></li>
                               <li><a href="grain_rice.php">Rice</a></li>
                               <li><a href="grain_bajra.php">Millet(Bajra)</a></li>
                               <li><a href="grain_jowar.php">Sordghum(Jowar)</a></li>
                               <li><a href="grain_spelt.php">Spelt</a></li>
                               <li><a href="grain_oats.php">Oats</a></li>
                               <li><a href="grain_barley.php">Barley</a></li>
                               <li><a href="grain_suji.php">Suji</a></li>
                               <li><a href="grain_buckwheat.php">Buckwheat</a></li>
                    </ul>
                    <ul class="list-unstyled col-md-3">
                        <h4><u>Pulses</u></h4>
                         <li><a href="grain_green_gram.php">Green Gram</a></li>
                        <li><a href="grain_lentil.php">Lentil</a></li>
                        <li><a href="grain_red_gram.php"> Red Gram</a></li>
                         <li><a href="grain_black_lentil.php"> Black lentils</a></li>
                        <li><a href="grain_chickpeas.php"> Chickpeas</a></li>
                        <li><a href="grain_sago.php"> Sago</a></li>
                         <li><a href="grain_beans.php">Beans</a></li>
                        <li><a href="grain_moth_dal.php">Moth dal</a></li>
                        <li><a href="grain_black_eyed_peas.php">Black Eyed Peas</a></li>
                        <li><a href="grain_urad.php">Urad</a></li>
                        <li><a href="grain_moong_dal.php">Moong Dal</a></li>
                        <li><a href="grain_masoor_dal.php">Masoor Dal</a></li>
                        <li><a href="grain_urad_dal.php">Urad Dal</a></li>
                        
                    </ul>
                    <ul class="list-unstyled col-md-4">
                        <br><br>
                        <li><img src="Images/grain.jpg" class="img-responsive" style="width:600px;height:200px;" alt="Image"></li>
                    </ul>
                    </div>
                    </li>
                    </ul>
                    </li>


      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown">Spices & Condiments​<span class="caret"></span></a>
         <ul class="dropdown-menu" style="letter-spacing:2px;">
            <li>
                <div class="row" style="width:1000px;">
                  <div >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="spices.php"><u>All Spices & Condiments​ </u></a></div>

                  <ul class="list-unstyled col-md-1">
                    </ul>

                    <ul class="list-unstyled col-md-2">
                      <h4><u>Spices</u></h4>
                               <li><a href="spices_salt.php">Salt</a></li>
                               <li><a href="spices_crystal_salt.php">Crystal Salt </a></li>
                               <li><a href="spices_sugar.php">Sugar</a></li>
                               <li><a href="spices_juggery.php">Jaggery</a></li>
                               <li><a href="spices_tea.php">Tea</a></li>
                               <li><a href="spices_cofee.php">Coffee</a></li>
                               <li><a href="spices_health_drinks.php">Health Drinks</a></li>
                               <li><a href="spices_syrup.php">Syrup</a></li>
                               <li><a href="spices_tamarind.php">Tamarind </a></li>
                    </ul>
                    <ul class="list-unstyled col-md-2">
                      <h4><u>Spices</u></h4>
                               <li><a href="spices_cardamom.php">Cardamom</a></li>
                               <li><a href="spices_black_pepper.php">Black pepper</a></li>
                               <li><a href="spices_cumin.php">Cumin</a></li>
                               <li><a href="spices_coriander.php">Coriander</a></li>
                               <li><a href="spices_nutmeg.php">Nutmeg</a></li>
                               <li><a href="spices_mustard.php">Mustard</a></li>
                               <li><a href="spices_asafoetida.php">Asafoetida</a></li>
                               <li><a href="spices_dryred_chilli.php">Dry Red Chilies</a></li>
                               <li><a href="spices_fennel_seeds.php">Fennel Seeds</a></li>
                               <li><a href="spices_cinnamom.php">Cinnamom</a></li>
                                
                    </ul>
                    <ul class="list-unstyled col-md-2">
                      <h4><u>Sauces,Cheese,Butter</u></h4>
                               <li><a href="spices_soy_sauce.php">Soy Sauce</a></li>
                               <li><a href="spices_tomato_ketchup.php">Tomato Ketchup</a></li>
                               <li><a href="spices_chilli_sauce.php">Chili Sauce</a></li>
                               <li><a href="spices_vineger.php">Vineger</a></li>
                               <li><a href="spices_mayonnaise.php">Mayonnaise</a></li>
                               <li><a href="spices_jam.php">Jam</a></li>
                               <li><a href="spices_cheese.php">Cheese</a></li>
                               <li><a href="spices_butter.php">Butter</a></li>
                               <li><a href="spices_paneer.php">Paneer</a></li>
                               <li><a href="spices_cream.php">Fresh Cream</a></li>
                               <li><a href="spices_honey.php">Honey</a></li>
                               
                                
                    </ul>
                    <ul class="list-unstyled col-md-3">
                        <br><br>
                        <li><img src="Images/spices.jpg" class="img-responsive" style="width:600px;height:200px;" alt="Image"></li>
                    </ul>
                    </div>
                    </li>
                    </ul>
                    </li>

      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown">Fruits<span class="caret"></span></a>
         <ul class="dropdown-menu" style="letter-spacing:2px;">
            <li>
                <div class="row" style="width:620px;">
                  <div >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="fruit.php"><u>All Fruits</u></a></div>
                  <ul class="list-unstyled col-md-1">
                    </ul>

                    <ul class="list-unstyled col-md-3">
                        <h4><u>Seasonal</u></h4>
                               <li><a href="fruit_grapes.php">Grapes</a></li>
                               <li><a href="fruit_mango.php">Mango</a></li>
                               <li><a href="fruit_orange.php">Orange</a></li>
                               <li><a href="fruit_strawberry.php">Strawberries</a></li>
                               <li><a href="fruit_watermelon.php">Watermelon</a></li>
                               <li><a href="fruit_blackberry.php">Blackberry</a></li>
                               <li><a href="fruit_lychee.php">Lychee</a></li>
                               <li><a href="fruit_papaya.php">Papaya</a></li>
                               <li><a href="fruit_peach.php">Peach</a></li>
                               <li><a href="fruit_pomegranate.php">Pomegranate</a></li>
                               <h4><u>Regular</u></h4>
                               <li><a href="fruit_banana.php">Banana</a></li>
                               <li><a href="fruit_chikoo.php">Chikoo</a></li>
                               <li><a href="fruit_pineapple.php">Pineapple</a></li>
                               <li><a href="fruit_tender_coconut.php">Tender coconut</a></li>
                    </ul>
                    <ul class="list-unstyled col-md-3">
                        <h4><u>Imported</u></h4>
                        <li><a href=".php"></a></li>
                               <li><a href="fruit_kiwi.php">Kiwi green</a></li>
                               <li><a href="fruit_apple.php">Apple</a></li>
                               <li><a href="fruit_pear.php">Pears</a></li>
                               <li><a href="fruit_passion_fruits.php">Passion fruit</a></li>
                               <h4><u>Citrus Fruits</u></h4>
                               <li><a href="fruit_orange.php">Oranges</a></li>
                               <li><a href="fruit_lemon.php">Lemon</a></li>
                               <li><a href="fruit_tangerines.php">Tangerines</a></li>
                               <h4><u>Dry Fruits</u></h4>
                               <li><a href="fruit_dates.php">Dates</a></li>
                               <li><a href="fruit_figs.php">Figs</a></li>
                               <li><a href="fruit_raisins.php">Raisins</a></li>
                               <li><a href="fruit_apricots.php">Apricots</a></li>
                        </ul>

                    <ul class="list-unstyled col-md-4">
                        <br><br><br><br>
                        <li><img src="Images/fruit.jpg" class="img-responsive" style="width:600px;height:200px;" alt="Image"></li>
                    </ul>
                    </div>
                    </li>
                    </ul>
                   </li>  

      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown">Vegetables<span class="caret"></span></a>
         <ul class="dropdown-menu" style="letter-spacing:2px;">
            <li>
                <div class="row" style="width:620px;">

                  <div >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="vegetable.php"><u>All vegetable</u></a></div>
                  <ul class="list-unstyled col-md-1">
                    </ul>

                    <ul class="list-unstyled col-md-3">
                        <h4><u>Root</u></h4>
                               <li><a href="vegetable_potato.php">Potato</a></li>
                               <li><a href="vegetable_carrot.php">Carrot</a></li>
                               <li><a href="vegetable_ginger.php">Ginger</a></li>
                               <li><a href="vegetable_celery.php">Celery</a></li>
                               <li><a href="vegetable_turnip.php">Turnip</a></li>
                               <h4><u>Leaf</u></h4>
                               <li><a href="vegetable_broccoli.php">Broccoli</a></li>
                               <li><a href="vegetable_lettuces.php">Lettuces</a></li>
                               <li><a href="vegetable_spinach.php">Spinach</a></li>
                               <li><a href="vegetable_cabbage.php">Cabbage</a></li>
                               <li><a href="vegetable_onion.php">Onion</a></li>
                    </ul>
                    <ul class="list-unstyled col-md-3">
                        <h4><u>Fruit</u></h4>
                        <li><a href=".php"></a></li>
                               <li><a href="vegetable_pea.php">Pea</a></li>
                               <li><a href="vegetable_tomato.php">Tomato</a></li>
                               <li><a href="vegetable_bell_peper.php">Bell pepper</a></li>
                               <li><a href="vegetable_cucumber.php">Cucumber</a></li>
                               <li><a href="vegetable_eggplant.php">Eggplant</a></li>
                               <h4><u>Flower</u></h4>
                               <li><a href="vegetable_herb.php">Herb</a></li>
                               <li><a href="vegetable_cauliflower.php">Cauliflower</a></li>
                               <li><a href="vegetable_broccoli.php">Broccoli</a></li>
                               <li><a href="vegetable_leeks.php">Leeks</a></li>
                               <li><a href="vegetable_artichoke.php">Artichoke</a></li>

                    </ul>
                    <ul class="list-unstyled col-md-4">
                        <br><br>
                        <li><img src="Images/vegetable.jpeg" class="img-responsive" style="width:600px;height:200px;" alt="Image"></li>
                    </ul>
                    </div>
                    </li>
                    </ul>
                    </li>  

      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown">Cleaning<span class="caret"></span></a>
         <ul class="dropdown-menu" style="letter-spacing:2px;">
            <li>
                <div class="row" style="width:530px;">
                  <div >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="cleaning.php"><u>All Cleaning Product</u></a></div>
                  <ul class="list-unstyled col-md-1">
                    </ul>

                    <ul class="list-unstyled col-md-6">
                              <h4><u>Cleaning Items</u></h4>
                               <li><a href="cleaning_dishwashing_liquid.php">Dish Washing Liquid</a></li>
                               <li><a href="cleaning_washingmachine_detergent.php">Washing Machine Detergent </a></li>
                               <li><a href="cleaning_laundry_shoap.php">Laundry Soap</a></li>
                               <li><a href="cleaning_hand_wash.php">Hand Wash</a></li>
                               <li><a href="cleaning_toilet_cleaner.php">Toilet Cleaner</a></li>
                               <li><a href="cleaning_floor_cleaner.php">Floor Cleaner</a></li>
                               <li><a href="cleaning_glass_cleaner.php">Glass Cleaner </a></li>
                               <li><a href="cleaning_garbage_bags.php">Garbage Bags</a></li>
                               <li><a href="cleaning_pest_control.php">Pest Control</a></li>
                               <li><a href="cleaning_air_freshner.php">Air Freshner for Bathroom</a></li>
                               <li><a href="cleaning_hand_sanitizer.php">Hand Sanitizer</a></li>
                               <li><a href="cleaning_kitchen_roll.php">Kitchen Roll</a></li>
                    </ul>
                    <ul class="list-unstyled col-md-4">
                        <br><br>
                        <li><img src="Images/cleaning.jpg" class="img-responsive" style="width:630px;height:200px;" alt="Image"></li>
                    </ul>
                    </div>
                    </li>
                    </ul>
                    </li> 

          <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown">MORE<span class="caret"></span></a>
         <ul class="dropdown-menu" style="letter-spacing:2px;">
            <li>
                <div class="row" style="width:420px;">

                  <div >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="other.php"><u>More Products</u></a></div>

                  <ul class="list-unstyled col-md-1">
                    </ul>

                    
                      <ul class="list-unstyled col-md-6">
                            <h4><u>Oils</u></h4>
                              <li><a href="other_sunflower_oil.php">Sunflower Oil</a></li>
                               <li><a href="other_sesam_oil.php">Sesame Oil</a></li>
                               <li><a href="other_olive_oil.php">Olive Oil </a></li>
                               <li><a href="other_groundnut_oil.php">Groundnut Oil </a></li>
                               <li><a href="other_coconut_oil.php">Coconut Oil</a></li>
                               <li><a href="other_bread.php">Bread</a></li>
                               <li><a href="other_biscuits.php">Biscuits</a></li>
                               <li><a href="other_popcorn.php">Popcorn</a></li>
                    </ul>
                        <ul class="list-unstyled col-md-5">
                        <h4><u>Dry Fruits</u></h4>
                              <li><a href="other_almonds.php">Almonds</a></li>
                               <li><a href="other_raisins.php">Raisins</a></li>
                               <li><a href="other_cashew.php">Cashews</a></li>
                               <li><a href="other_peanuts.php">Peanuts</a></li>
                               <li><a href="other_pista.php">Pista</a></li>
                               <h4><u>Other..</u></h4>
                               <li><a href="other_baking_powder.php">Baking Powder</a></li>
                               <li><a href="other_cocoa_powder.php">Cocoa Powder</a></li>
                               <li><a href="other_vanilla_extract.php">Vanilla Extract </a></li>
                               <li><a href="other_condensed_milk.php">Condensed Milk</a></li>
                               <li><a href="other_baking_soda.php">Cooking Soda</a></li>
                               <li><a href="other_toothpaste.php">Toothpaste</a></li>
                               <li><a href="other_toothbrush.php">Toothbrush</a></li>
                               <li><a href="other_shampoo.php">Shampoo </a></li>
                               <li><a href="other_conditioner.php">Conditioner </a></li>
                               <li><a href="other_bodylotion.php">Body Lotion</a></li>
                                <li><a href="other_face_powder.php">Face Powder</a></li>
                                <li><a href="other_bodyspray_men.php">Man's spray</a></li>
                                <li><a href="other_bodyspray_women.php">Woman's spray</a></li>
                                <li><a href="other_soap.php">Soap</a></li>
                               <li><a href="other_hair_oil.php">Hair Oil</a></li>
                                  </ul> 
                    </div>
                    </li>
                    </ul>
                    </li>                        
      <!--<li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="header.php" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown<span class="caret"></span></a>

        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a><br>
          <a class="dropdown-item" href="#">Another action</a><br>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>

    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>-->
    </ul>

      <ul class="nav navbar-nav navbar-right">

         <?php
        if(!isset($_SESSION['First_Name']))
        {
        ?>
         <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span>&nbsp;Login</a></li>
        <?php
        }
        ?>

         <?php
       if(isset($_SESSION['First_Name']))
        {
        ?>
        <li><a href="yourcart.php"><span class="glyphicon glyphicon-cart"></span>&nbsp;&nbsp;YourCart</a></li>
        
          <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span>&nbsp;&nbsp;Logout</a></li>


        <?php
        }
        ?> 

      <!--<li><a href="index.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>-->
    </ul>
  <!--<a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>-->
   
  </div>
</nav>

<?php
/*else
{
  header('Location:index.php');
}*/
?>