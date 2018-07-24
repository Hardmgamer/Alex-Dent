<?php
include('../classes/DB.php');
if(isset($_GET['submit'])){
  $name = $_GET['productname'];
  $description = $_GET['description'];
  $company = $_GET['company'];
  $overview =$_GET['overview'];
  $spacs =$_GET['spacs'];
  $availability =$_GET['Available'];
  $img1 =$_GET['img1'];
  $img2 =$_GET['img2'];
  $img3 =$_GET['img3'];
  DB::query('INSERT INTO products VALUES (\'\', :name, :availability, :image, :image2, :image3, :description, :overview, :spacs, :company)',array(':name'=>$name,':availability'=>$availability,':image'=>$img1,':image2'=>$img2,':image3'=>$img3, ':description'=>$description, ':overview'=>$overview, ':spacs'=>$spacs, ':company'=>$company));
}
 ?>
