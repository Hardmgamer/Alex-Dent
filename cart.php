<html>
 <head>
  <title> Your cart - Alexdent </title>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="./Stylesheets/Main.css">
  <link rel="stylesheet" type="text/css" href="./Stylesheets/usercart.css">
 </head>

  <body>
    <?php include('./header.html'); ?>

    <form class="cart" method="post" action="">
      <table class="cart-table">
        <thead>
          <tr>
            <th class="first">Product</th>
            <th>Code</th>
            <th>Quantity</th>
          </tr>
        </thead>
        <tbody>
          <tr class="cart-item">
            <th class="Product">
              <a class="image" href="./products.php">
                <img alt="Product name" src="./images/products/3.jpeg" >
                <div class="cart-name">
                  Product name
                </div>
              </a>
            </th>
            <th class="code">
              <spin>XXXX</spin>
            </th>
            <th class="quantity">
              <input class="quant" type="text">
            </th>
          </tr>
        </tbody>
      </table>
      <div class="table-end">
        <div class="table-butt">
          <input style="background:#01b1b0" type="submit" class="tbutton" value="Next" name="submit">
          <div style="background:#b90909" class="tbutton">cancel</div>

        </div>
      </div>
    </form>

        <?php include('./footer.html'); ?>
  </body>
</html>
