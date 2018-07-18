<html>
 <head>
  <title> Your cart - Alexdent </title>
  <link rel="stylesheet" type="text/css" href="./Stylesheets/Main.css">
  <link rel="stylesheet" type="text/css" href="./Stylesheets/usercart.css">
 </head>
  <?php include('./header.html'); ?>
  <?php include('./footer.html'); ?>
  <body>
    <form class="cart" method="post" action="">
      <table class="cart-table">
        <thead>
          <tr>
            <th class="first">Product</th>
            <th>Code</th>
            <th>Quantity</th>
            <th class="last">In stock</th>
          </tr>
        </thead>
        <tbody>
          <tr class="cart-item">
            <th class="Product">
              <a class="image" href="./products.php/">
                <img alt="Product name" src="./images/products/3.jpeg" >
              </a>
              <div class="Pname">
                <span class="cart-name">
                  <a href="#">Product name</a>
                </span>
              </div>
            </th>
            <th class="code">
              <spin>XXXX</spin>
            </td>
            <th class="quantity">
              <input type="text">
            </td>
            <th class="Av">
              <spin>In stock</spin>
            </th>
          </tr>
        </tbody>
      </table>
    </form>
  </body>
</html>
