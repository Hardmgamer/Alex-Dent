<?php
include('../classes/DB.php');
  $name = $_GET['productname'];
  $description = $_GET['description'];
  $company = $_GET['company'];
  $overview =$_GET['overview'];
  $specs =$_GET['specs'];
  $availability =$_GET['Available'];
  $img1 =$_GET['img1'];
  $img2 =$_GET['img2'];
  $img3 =$_GET['img3'];
  DB::query('INSERT INTO products VALUES ("", :name, :availability, :image, :image2, :image3, :description, :overview, :specs, :company)',array(':name'=>$name,':availability'=>$availability,':image'=>$img1,':image2'=>$img2,':image3'=>$img3, ':description'=>$description, ':overview'=>$overview, ':specs'=>$specs, ':company'=>$company));
  echo'<p class="SuccessMsg">Success !</p>';
 ?>
