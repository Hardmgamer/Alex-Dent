<?php
session_start();
$b = null;
if(empty($_SESSION['branches'])){
  $_SESSION['branches'] = array();
}
$branchs = $_SESSION['branches'];
$sizeofarray = sizeof($branchs);
$branch2 = $_GET['branch'];
if($_GET['branch'] == 0){
  // echo "Nothing happend";
  unset($_SESSION['branches']);
  $b = 1;
}
else if($sizeofarray < $branch2){
  for ($x = $sizeofarray+1; $x <= $branch2; $x++) {
    array_push($_SESSION['branches'],$x);
  }
}
else if($sizeofarray > $branch2){
  // echo 'else if working'."</br>";
    // echo 'setting for loop and sizeofarray before = '.$sizeofarray."</br>";
    for($sizeofarray = $sizeofarray-1; $sizeofarray > $branch2-1; $sizeofarray--){
      // echo 'entred for loop and branche selected before = '.$branch2."</br>";
      // echo 'entred for loop and sizeofarray before = '.$sizeofarray."</br>";
      unset($_SESSION['branches'][$sizeofarray]);
      $branch2 = $_GET['branch'];
      // echo 'entred for loop and branche selected after = '.$branch2."</br>";
      // echo 'entred for loop and sizeofarray after = '.$sizeofarray."</br>";
     }
    // echo "exit";
   }
   $i =1;
   if($b != 1){
   $branches = $_SESSION['branches'];
   foreach ($branches as $branche[7]) {
     echo "<div class='branches'>
     <span class='spans'>Branch title". $i."</span>
       <input type='text' class='header-text'>
     <span class='spans'>link:</span>
     <input type='text' class='header-text'></div>";
      $i++;
   }
 }
 ?>
