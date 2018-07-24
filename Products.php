<?php
include_once('./classes/DB.php');
?>
<head>
  <title>Products</title>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="./Stylesheets/Main.css">
  <link rel="stylesheet" type="text/css" href="./Stylesheets/Prod.css">
</head>

<body>
  <!--HEADER START-->
  <?php include('./header.html'); ?>
  <?php include('./footer.html'); ?>
  <!--HEADER END-->
  <!--TOP (AND CATEGORY BUTTONS) START -->
<div class="timg">
  <div class="category-container">
    <div class="category selected">All</div>
    <div class="category">Endodentics</div>
    <div class="category">Kits</div>
  </div>
</div>

  <!--TOP (AND CATEGORY BUTTONS) END -->
  <!--PRODUCTS-BODY START-->

<div class="p-body">
    <center>
      <!--Product 1-->
    <div onclick='prodBox()' class="product">
      <div class="prod-img"><img src="./images/products/3.jpg" width="100%">
    </div>
    <div class="prod-text">
      <p>Product Name</p>
      <!--<div class="details">View</div>-->
    </div>
    </div>
    <!--Product 2-->
    <div onclick='prodBox()' class="product">
      <div class="prod-img"><img src="./images/products/2.jpg" width="100%"></div>
    <div class="prod-text">
      <p>Product Name</p>
      <!--<div class="details">View</div>-->
    </div>
    </div>
    <!--Product 3-->
    <div onclick='prodBox()' class="product">
      <div class="prod-img"><img src="./images/products/1.jpg" width="100%"></div>
    <div class="prod-text">
      <p>Product Name</p>
      <span class="out"></span>
    </div>
    </div>
    <!--Product 4-->

    <div onclick='prodBox()' class="product">
      <div class="prod-img"></div>
    <div class="prod-text">
      <p>Product Name</p>
      <!-- <div class="details">View</div> -->
    </div>
    </div>
    <!--Product 5-->

    <div onclick='prodBox()' class="product">
      <div class="prod-img"></div>
    <div class="prod-text">
      <p>Product Name</p>
      <!--<div class="details">View</div>-->
    </div>
    </div>
  </center>
</div>
<!--PRODUCTS-BODY END-->
<div id="productDet">
    <div onclick="HideProdBox()" class="black"></div>
    <div class="details-cont">
      <div id="productImage"></div>
      <div class="text-Details">
        <h1>Product Name</h1>
        <ul>
          <li>Info 1</li>
          <li>Info 2</li>
          <li>Info 3</li>
          <li>Info 4</li>
        </ul>
          <div class="ProdButton"><p><span class="fas fa-cart-plus"></span>Add To Cart</p></div>
          <div class="ProdButton"><p><span class="fas fa-file-invoice-dollar"></span>Inquiry</p></div>
          <div class="ProdButton"><p><span class="fas fa-asterisk"></span>Details</p></div>
        </center>
      </div>
    </div>
</div>
<?php include('./footer.html');?>
<script type="text/javascript" src="./js/ProductBox.js"></script>
</body>
