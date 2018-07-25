<?php
include_once('./classes/DB.php');
if(isset($_GET['prod'])){
$n = $_GET['prod'];
$prod = DB::query('SELECT * FROM products WHERE REPLACE(name, " ", "") = :name',array(':name'=>$n));
$proname = $prod[0]['name'];
$proavail = $prod[0]['availability'];
$proimg1 = $prod[0]['image'];
$proimg2 = $prod[0]['image2'];
$proimg3 = $prod[0]['image3'];
$prodesc= $prod[0]['description'];
$proover= $prod[0]['overview'];
$prospecs= $prod[0]['specs'];
$procomp= $prod[0]['company'];
}?>
<head>
  <title><?php echo$proname; ?></title>
  <link rel="stylesheet" type="text/css" href="./Stylesheets/Main.css">
  <link rel="stylesheet" type="text/css" href="./Stylesheets/prodinfo.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
  <script src="./js/imagezoom.js"></script>
</head>
<body>
  <?php include('./header.html'); ?>
  <input name="name" value="<?php echo $proname; ?>" style="display:none;">
  <input name="image" value="<?php echo $proimg1; ?>" style="display:none;">
<div class="wrapper">
  <div class="body">
    <div class="imageCont">
      <div class="bimage">
        <div class="img-zoom-container">
          <!--Image Zoom From W3Schools <3 -->
    <img id="myimage" src="<?php echo$proimg1; ?>">
    <div id="myresult" class="img-zoom-result"></div>
  </div>
      </div>
      <div class="simages">
        <center>
        <div class="simage"><img name="image" onclick="changeImg(this)" src="<?php echo$proimg1; ?>"></div>
        <div class="simage"><img onclick="changeImg(this)" src="<?php echo$proimg2; ?>"></div>
        <div class="simage"><img onclick="changeImg(this)" src="<?php echo$proimg3; ?>"></div>
        </center>
      </div>
    </div>
    <div class="detCont">
      <h3 name='productname'><?php echo$proname; ?></h3>
      <p><?php echo$prodesc; ?></p>
      <div class="Company"><a href="#"><?php echo$procomp; ?></a></div>
      <div onclick="addtocart()" class="Butt"><span class="fas fa-cart-plus"></span>add to cart</div>
      <div class="Butt"><span class="fas fa-file-invoice-dollar"></span>Inquiry</div>
      <div style="color:green;" id="txtHint"><b></b></div>
    </div>
    <div style="clear: both;"></div>
    <div class="details">
      <div class="detTitle"><p>Details</p></div>
      <div class="detText">
          <h3>Overview:</h3>
          <p><?php echo str_replace('_', '<br>',$proover); ?></p>
          <!---->
          <!---->
          <h3>Specifications:</h3>
            <p>
                <?php echo str_replace('_', '<br>',$prospecs); ?>
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
<script>
function addtocart(){
      var name = document.getElementsByName('name')['0'].value;
      var image = document.getElementsByName('image')['0'].value;
      if (window.XMLHttpRequest) {
          // code for IE7+, Firefox, Chrome, Opera, Safari
          xmlhttp = new XMLHttpRequest();
      } else {
          // code for IE6, IE5
          xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
      }
      xmlhttp.onreadystatechange = function() {
          if (this.readyState == 4 && this.status == 200) {
              document.getElementById("txtHint").innerHTML = this.responseText;
          }
        };
      xmlhttp.open("GET","./functions/addtocart.php?name="+name+"&image="+image,true);
      xmlhttp.send();
  }
</script>
