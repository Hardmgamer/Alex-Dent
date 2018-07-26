<?php
session_start();
if(empty($_SESSION['branches'])){
  $_SESSION['branches'] = array();
}
if($_GET['branch'] == 0){
  echo "Nothing happend";
}
else{
  if(sizeof($_SESSION['branches']) < $_GET['branch']){
  for ($x = 1; $x <= $_GET['branch']; $x++) {
    array_push($_SESSION['branches'],$_GET['$x']);
  }
}
  else if(sizeof($_SESSION['branches']) > $_GET['branch']){
    for($i==sizeof($_SESSION['branches']); sizeof($_SESSION['branches'] == $_GET['branch']; $i--){
      unset($_SESSION[$x]['branches']);
    }
  }
}
 ?>
