<?php
include_once('./classes/DB.php');
session_start();
$data = DB::query('SELECT * FROM header');
if(isset($_SESSION['branches'])){
$branches = $_SESSION['branches'];
// echo sizeof($branches);
}
// session_destroy();
 ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.min.js"></script>
<div class="Heading">
	<div class="Textheading"><i class="fas fa-cog"></i><p>Edit header</p></div>
</div>
<div class="container-data">
  <div class="inputs">
    <h1>Title 1</h1>
   <div class="title">
    <span class="spans">Title:</span>
     <input type="text" class="header-text">
    <span class="spans">link:</span>
      <input type="text" class="header-text">
    <span class="spans">branches</span>
    <select  onchange="Selectbranch()" name="branch">
      <?php
      $brancheschose = array("0","1","2","3","4","5","6","7","8");
        foreach ($brancheschose as $chose) {
          echo "<option>".$chose."</option>";
        }
       ?>
    </select>
      <?php
    // foreach ($branches as $branche[7]) {
    //   echo "<div class='branches'>
    //   <span class='spans'>Branch title $i:</span>
    //     <input type='text' class='header-text'>
    //   <span class='spans'>link:</span>
    //   <input type='text' class='header-text'></div>";
    //    $i++;
    // }
    ?>
    <div id="Result"><b></b></div>
    </div>
   </div>
 </div>
</div>
<script>
function Selectbranch(){
      var branche1 = document.getElementsByName('branch')['0'].value;
      if (window.XMLHttpRequest) {
          // code for IE7+, Firefox, Chrome, Opera, Safari
          xmlhttp = new XMLHttpRequest();
      } else {
          // code for IE6, IE5
          xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
      }
      xmlhttp.onreadystatechange = function() {
          if (this.readyState == 4 && this.status == 200) {
              document.getElementById("Result").innerHTML = this.responseText;
          }
        };
      xmlhttp.open("GET","./functions/brancheselect.php?branch="+branche1,true);
      xmlhttp.send();
  }
</script>
