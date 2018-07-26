<?php
include_once('./classes/DB.php');
?>
<head>

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
<title>Home</title>
<link rel="stylesheet" type="text/css" href="./Stylesheets/indexStyle.css">


</head>
<body scroll="no">

<!--HEADER START-->
<?php include('./header.html'); ?>
<!--HEADER END-->

<!--SLIDER START-->
<div class="banner">
  <div id="b-container" style="position:relative; transition:left 0.4s, right 0.4s; left:0; right:0;">
    <div style="position:relative;">
<div class="banner-img" style="background-image:url(https://i.pinimg.com/originals/07/58/07/075807a6366fe9692500a7ab235f6a7c.jpg);">
<div class="b-text">
<i class="fas fa-plus" style="position:absolute; top:10px; left:-20px;font-size:30px; color:#21d1b6;"></i>
<h1>Number 1 in Egypt</h1>
<p>	&amp; Middle East</p>
</div>
</div>
</div>

<div style="position:relative; left:100%;">
<div class="banner-img" style="background-image:url(https://i.pinimg.com/originals/07/58/07/075807a6366fe9692500a7ab235f6a7c.jpg);">
<div class="b-text">
<h1>Number 1 in Egypt</h1>
<p>	&amp; Middle East</p>
</div>
</div>
</div>

<div style="position:relative; left:200%;">
<div class="banner-img" style="background-image:url(https://i.pinimg.com/originals/07/58/07/075807a6366fe9692500a7ab235f6a7c.jpg);">
<div class="b-text">
<h1>Number 1 in Egypt</h1>
<p>	&amp; Middle East</p>
</div>
</div>
</div>

</div>

<div onClick="Next()" class="buttonNext b-button"><li class="	fa fa-angle-right"></li></div>
<div onClick="Prev()" class="buttonPrev b-button"><li class="	fa fa-angle-left"></li></div>

</div>
<!--SLIDER END-->

<!--FEATURED START-->
<div class="featured" style="background:#9923ff"></div>
<div class="featured" style="background:#5233fe"></div>
<div class="featured" style="background:#19f2ff"></div>
<div class="featured" style="background:#993321"></div>
<!--FEATURED END-->

<!--ABOUT START-->
<div class="body">
<div class="about">
  <h3>About</h3> <h1>Alex Dent</h1>
  <br>
  <h4>Alex Dent is an Egyptian Company <br> That Sells &amp; Manufacture Dental Products</h4>
</div>

<br>
<h2>Why Alex Dent ?</h2>
<ul>

  <li><div>Cheap</div> <div style="font-style:Italic;"></div></li>
  <li><div>Long Time warranty</div></li>
  <li><div>24-Hour Support</div></li>

</ul>
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
    <a href="#"><div class="prod-but">View All</div></a>
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
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d110552.46418856332!2d31.24119019003933!3d30.014917654143453!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14583e5c6469d871%3A0xd9b5b2774fc264b5!2sAlex+Dent!5e0!3m2!1sen!2seg!4v1531125373516" width="800" height="300" frameborder="0" style="border-radius: 10px;"></iframe>
</div>
</center>
</div>
<!--MAP END-->
<?php include('./footer.html');?>
<script type="text/javascript" src="./js/Slider.js"></script>
</body>
