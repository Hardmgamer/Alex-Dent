<head>
  <link rel="stylesheet" href="./Stylesheets/prodinfo.css">
  <link rel="stylesheet" href="./Stylesheets/productsadmin.css">

</head>
<div class="wrapper">
<div class="body admin">
  <div class="imageCont">
    <div class="bimage bimgpr">
      image 1
    </div>
    <div class="simages">
      <center>
      <div class="simage imgpr">image 1</div>
      <div class="simage imgpr">image 2</div>
      <div class="simage imgpr">image 3</div>
      </center>
    </div>
  </div>
  <div class="detCont">
    <input type="text" name="productname" placeholder="Product name"></input>
    <textarea  placeholder="Product Short Description" name="description"></textarea>
    <div class="Company"><input type="text" placeholder="Company Name" name="company"></input></div>
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
        <textarea placeholder="Product Overview" name="overview"></textarea>
        <!---->
        <!---->
        <h3>Specifications:</h3>
        <textarea placeholder="Product Specifications" name="specs"></textarea><br>

          <input class="SubButt Butt" onclick="SendDetails()" type="button" value="Submit">
              <div id="txtHint"><b></b></div>
    </div>
  </div>
</div>
</div>
<div style="clear: both;"></div>

<script>
function SendDetails() {
    var name = document.getElementsByName('productname')['0'].value;
    var desc = document.getElementsByName('description')['0'].value;
    var comp = document.getElementsByName('company')['0'].value;
    var over = document.getElementsByName('overview')['0'].value;
    var specs = document.getElementsByName('specs')['0'].value;
    var avail = document.getElementsByName('Available')['0'].value;
    var img1 = document.getElementsByName('img1')['0'].value;
    var img2 = document.getElementsByName('img2')['0'].value;
    var img3 = document.getElementsByName('img3')['0'].value;

    if (name == "" || desc == "" || comp == "" || over == "" || specs == "" || avail == "" || img1 == "" ) {
        document.getElementById("txtHint").innerHTML = "You've to enter all required feilds";
        return;
    } else {
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
                if(document.getElementById("txtHint").innerHTML.includes('Success !')){
                  document.getElementsByName('productname')['0'].value = '';
                  document.getElementsByName('description')['0'].value = '';
                  document.getElementsByName('company')['0'].value = '';
                  document.getElementsByName('overview')['0'].value = '';
                  document.getElementsByName('specs')['0'].value = '';
                  document.getElementsByName('Available')['0'].value = '';
                  document.getElementsByName('img1')['0'].value = '';
                  document.getElementsByName('img2')['0'].value = '';
                  document.getElementsByName('img3')['0'].value = '';
                  console.log(document.getElementById("txtHint").innerHTML);
                  console.log('success');

              }else{
                console.log(document.getElementById("txtHint").innerHTML);

              }
            }
        };
        xmlhttp.open("GET","./functions/getproduct.php?productname="+name+"&description="+desc+"&company="+comp+"&overview="+over+"&specs="+specs+"&Available="+avail+"&img1="+img1+"&img2="+img2+"&img3="+img3,true);
        xmlhttp.send();
    }
}
</script>
