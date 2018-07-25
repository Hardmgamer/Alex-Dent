<?php
session_start();
if(empty($_SESSION['Name'])){
  $_SESSION['Name'] = array();
}
if(empty($_SESSION['Image'])){
  $_SESSION['Image'] = array();
}
  array_push($_SESSION['Name'],$_GET['name']);
  array_push($_SESSION['Image'],$_GET['image']);
  echo $_GET['name'].' added to cart';
 ?>
