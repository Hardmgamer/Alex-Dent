<html>
<head>
  <title>Item descreption</title>
  <link rel="stylesheet" type="text/css" href="./Stylesheets/Main.css">
  <link rel="stylesheet" type="text/css" href="./Stylesheets/prodinfo.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
  <script src="./js/imagezoom.js"></script>
</head>
<body>
  <?php include('./header.html'); ?>
<div class="wrapper">
  <div class="body">
    <div class="imageCont">
      <div class="bimage">
        <div class="img-zoom-container">
          <!--Image Zoom From W3Schools <3 -->
    <img id="myimage" src="./Images/Products/1.jpg">
    <div id="myresult" class="img-zoom-result"></div>
  </div>
      </div>
      <div class="simages">
        <center>
        <div class="simage"><img onclick="changeImg(this)" src="./Images/Products/1.jpg"></div>
        <div class="simage"><img onclick="changeImg(this)" src="./Images/Products/2.jpg"></div>
        <div class="simage"><img onclick="changeImg(this)" src="./Images/Products/3.jpg"></div>
        </center>
      </div>
    </div>
    <div class="detCont">
      <h3>Product Name</h3>
      <p>Uniformly rolled to extremely close tolerances. Guaranteed consistency in size and shape.</p>
      <div class="Company"><a href="#">Meta Biomed</a></div>
      <div class="Butt"><span class="fas fa-cart-plus"></span>add to cart</div>
      <div class="Butt"><span class="fas fa-file-invoice-dollar"></span>Inquiry</div>
    </div>
    <div style="clear: both;"></div>
    <div class="details">
      <div class="detTitle"><p>Details</p></div>
      <div class="detText">
          <h3>Overview:</h3>
          <p>Uniformly rolled to extremely close tolerances. Guaranteed consistency in size and shape.</p>
          <!---->
          <!---->
          <h3>Specifications:</h3>
            <p>
              Company : Meta Biomed<br>
              Size : #20<br>
              Capacity : 200 Points
            </p>
      </div>




    </div>

  </div>
  </div>
  <div style="clear: both;"></div>
  <script>
  imageZoom("myimage", "myresult");
  </script>
  <script src="./js/hszoom.js"></script>
  <script>
  function changeImg(imag){
    if(imag.src != document.getElementById('myimage').src ){
      document.getElementById('myimage').src = imag.src;
      document.getElementById('myresult').style.backgroundImage = "url('" + imag.src + "')";
    }
  }
  </script>
  <?php include('./footer.html'); ?>
</body>
</html>
