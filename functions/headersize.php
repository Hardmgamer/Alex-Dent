<?php
include_once('../classes/DB.php');
$data = DB::query('SELECT * FROM header');
$hname = $data[0]['name'];
$hlink = $data[0]['link'];
$BC = null;
$brancheschose = array("0","1","2","3","4","5","6","7","8");
  foreach ($brancheschose as $chose) {
    $BC .= "<option>".$chose."</option>";
  }
 ?>
<?php
session_start();
$b = null;
if(empty($_SESSION['headersize'])){
  $_SESSION['headersize'] = array();
}
$header = $_SESSION['headersize'];
$sizeofarray = sizeof($header);
$header2 = $_GET['headersize'];
if($_GET['headersize'] == 0){
  // echo "Nothing happend";
  unset($_SESSION['headersize']);
  $b = 1;
}
else if($sizeofarray < $header2){
  for ($x = $sizeofarray+1; $x <= $header2; $x++) {
    array_push($_SESSION['headersize'],$x);
  }
}
else if($sizeofarray > $header2){
  // echo 'else if working'."</br>";
    // echo 'setting for loop and sizeofarray before = '.$sizeofarray."</br>";
    for($sizeofarray = $sizeofarray-1; $sizeofarray > $header2-1; $sizeofarray--){
      // echo 'entred for loop and branche selected before = '.$branch2."</br>";
      // echo 'entred for loop and sizeofarray before = '.$sizeofarray."</br>";
      unset($_SESSION['headersize'][$sizeofarray]);
      $header2 = $_GET['headersize'];
      // echo 'entred for loop and branche selected after = '.$branch2."</br>";
      // echo 'entred for loop and sizeofarray after = '.$sizeofarray."</br>";
     }
    // echo "exit";
   }
   $i =1;
   if($b != 1){
   $header = $_SESSION['headersize'];
   foreach ($header as $headers) {
     echo "
       <h1>Title ". $i."</h1>
      <div class='title'>
       <span class='spans'>Title:</span>
        <input type='text' class='header-text' value='".$hname[$i-1]."' name='headname'>
       <span class='spans'>link:</span>
         <input type='text' class='header-text'>
         <span class='spans'>branches</span>
         <select  onchange='Selectbranch()' name='branch'>".$BC."</select>
         <div id='BrancheResult'><b></b></div>
         </div>";
         $i++;
   };
 }
 ?>
