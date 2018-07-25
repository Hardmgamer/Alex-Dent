<?php
   include_once('./classes/DB.php');
   session_start();
   $prname = $_SESSION['Name'];
   $prurl = $_SESSION['Image'];
   $i = 0;
   $error = null;
   if(isset($_SESSION['Name'])){
     $error = 1;
   }
 ?>
<html>
 <head>
  <title> Your cart - Alexdent </title>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="./Stylesheets/Main.css">
  <link rel="stylesheet" type="text/css" href="./Stylesheets/usercart.css">
 </head>

  <body>
    <?php include('./header.html'); ?>

    <form <?php if($error != 1){echo'style="display:none;"';}?>class="cart" method="post" action="">
      <table class="cart-table">
        <thead>
          <tr>
            <th class="first">Product</th>
            <th>Quantity</th>
          </tr>
        </thead>
        <tbody>
          <?php
          foreach ($prname as $name) {
            echo "<tr class='cart-item'>
                <th class='Product'>
                 <a class='image' href='./productinfo.php?prod=".str_replace(' ', '',$name)."'><img src='".$prurl[$i]."'><div class='cart-name'>".$name."</div>
                </a>
              </th>
              <th class='quantity'>
                <input class='quant' type='text' value='1' name='quant".$i."'>
              </th>
            </tr>";
            $i++;
          }
          ?>
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
