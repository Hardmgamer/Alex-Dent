<?php
session_start();
if(empty($_SESSION['branches'])){
  $_SESSION['branches'] = array();
}
$branchs = $_SESSION['branches'];
$sizeofarray = sizeof($branchs);
$branch2 = $_GET['branch'];
if($_GET['branch'] == 0){
  echo "Nothing happend";
}
else if($sizeofarray < $branch2){
  for ($x = $sizeofarray+1; $x <= $branch2; $x++) {
    array_push($_SESSION['branches'],$x);
  }
}
else if($sizeofarray > $branch2){
  echo 'else if working'."</br>";
    echo 'setting for loop and sizeofarray before = '.$sizeofarray."</br>";
    for($sizeofarray = $sizeofarray-1; $sizeofarray > $branch2-1; $sizeofarray--){
      echo 'entred for loop and branche selected before = '.$branch2."</br>";
      echo 'entred for loop and sizeofarray before = '.$sizeofarray."</br>";
      unset($_SESSION['branches'][$sizeofarray]);
      $branch2 = $_GET['branch'];
      echo 'entred for loop and branche selected after = '.$branch2."</br>";
      echo 'entred for loop and sizeofarray after = '.$sizeofarray."</br>";
     }
    echo "exit";
   }
 ?>
