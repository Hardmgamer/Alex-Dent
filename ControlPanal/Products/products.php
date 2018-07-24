<div class="wrapper">
<div class="body admin">
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
    <input type="text" name="productname" placeholder="Input Product name"></input>
    <textarea rows="4" cols="50" placeholder="Input your short description" name="description"></textarea>
    <div class="Company"><input type="text" placeholder="Company's Name" name="company"></input></div>
    <div class="Image1"><input type="text" placeholder="Image link" name="img1"></input></div>
    <div class="Image2"><input type="text" placeholder="Image link" name="img2"></input></div>
    <div class="Image3"><input type="text" placeholder="Image link" name="img3"></input></div>
    <div class="availability">
    <select name="Available">
    <option value="1">Available</option>
    <option value="2">Out of stock</option>
    <option value="3">Coming soon</option>
    </select>
    </div>
    <div class="Butt"><span class="fas fa-cart-plus"></span>add to cart</div>
    <div class="Butt"><span class="fas fa-file-invoice-dollar"></span>Inquiry</div>
  </div>
  <div style="clear: both;"></div>
  <div class="details">
    <div class="detTitle"><p>Details</p></div>
    <div class="detText">
        <h3>Overview:</h3>
        <textarea rows="4" cols="50" placeholder="Input your Overview" name="overview"></textarea>
        <!---->
        <!---->
        <h3>Specifications:</h3>
          <p>
            Size : <input type="text" placeholder="Size" name="spacs"></input><br>
          </p>
          <input type="submit" name="submit" value="submit">
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
