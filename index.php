<?php
include_once('./classes/DB.php');
include_once('./classes/Count.php');
?>
<head>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
<title>Home</title>
<link rel="stylesheet" type="text/css" href="./Stylesheets/indexStyle.css">
<link rel="stylesheet" href="./Stylesheets/icons.css">
<link rel="stylesheet" type="text/css" href="./Stylesheets/Main.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="keywords" content="Dent,Alexdent,Dental,Dental products,Dentistry, Alex Dent">
<meta name="description" content="Alex Dent Official Website"/>
<meta name="author" content="AlexDent">

</head>
<body>
<!--  -->
<!--  -->
<!--HEADER START-->
<?php include('./header.html'); ?>
<!--HEADER END-->
<!--  -->
<!--  -->

<!--  -->
<!--  -->
<!--SLIDER START-->
<div class="banner">
  <div id="b-container">
<div class="banner-img" style="background-image:url('./images/banner.jpg');">
<div class="b-text">
<i class="fas fa-plus" style="position:absolute; top:10px; left:-20px;font-size:30px; color:#21d1b6;"></i>
<h1>Number 1 in Egypt</h1>
<p>	&amp; Middle East</p>
</div>
</div>

<div style="position:relative; left:100%;">
<div class="banner-img" style="background-image:url('');">
<div class="b-text">
  <h1>....</h1>
  <p>.</p>
</div>
</div>
</div>

<div style="position:relative; left:200%;">
<div class="banner-img" style="background-image:url('');">
<div class="b-text">
<h1>....</h1>
<p>.</p>
</div>
</div>
</div>

</div>

<div onClick="Next()" class="buttonNext b-button"><li class="	fa fa-angle-right"></li></div>
<div onClick="Prev()" class="buttonPrev b-button"><li class="	fa fa-angle-left"></li></div>

</div>
<!--SLIDER END-->
<!--  -->
<!--  -->

<!--  -->
<!--  -->
<!--FEATURED START-->
<a href="#">
<div class="featured"></div>
</a>

<a href="#">
<div class="featured"></div>
</a>

<a href="#">
<div class="featured"></div>
</a>

<a href="#">
<div class="featured"></div>
</a>
<!--FEATURED END-->
<!--  -->
<!--  -->

<!--  -->
<!--  -->
<!--ABOUT START-->
<div class="body">
<div class="about">

  <h3>About</h3>
  <br>
  <h4>Alex Dent is an Egyptian company <br> that sells &amp; manufacture dental products</h4>
</div>
<div class="about" style="border-right:none;">
<br>
<h2>Why Alex Dent ?</h2>
<center>
<ul>

  <li><div>Cheap</div> <div style="font-style:Italic;"></div></li>
  <li><div>Long Time warranty</div></li>
  <li><div>24-Hour Support</div></li>

</ul>
</center>
</div>
</div>
<!--ABOUT END-->

<!--PRODUCT-BOX START-->
<div class="prod-container">

<div class="prod">
<div class="prod-overlay"><div class="prod-overlay-I"></div>
</div></div>
<div class="prod-t">

  <h1>our products</h1>
  <p>We have a list of many dental products from many diffrent companies<br>
    (Endodontics, Periodontics, Kits, Restorative &amp; Bone Graft)<br>
    Lists are sorted by product's <a href="#">Type</a>, <a href="#">Company</a>, <a href="#">Name</a>.
  </p>

  <center>
    <a href="./products.php"><div class="prod-but">View All</div></a>
  </center>
</div>
</div>
<!--PRODUCT-BOX END-->

<!--MAP START-->
<div class="map-container">
  <div class="map-back map-p"></div>
  <div class="map-back map-back-overlay"></div>

<h1>Where to find us ?</h1>
<center>
<div class="map">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d110552.46418856332!2d31.24119019003933!3d30.014917654143453!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14583e5c6469d871%3A0xd9b5b2774fc264b5!2sAlex+Dent!5e0!3m2!1sen!2seg!4v1531125373516" width="100%" height="100%" frameborder="0" style="border-radius: 10px;"></iframe>
</div>
</center>
</div>
<!--MAP END-->
<?php include('./footer.html');?>
<script type="text/javascript" src="./js/Slider.js"></script>
</body>
